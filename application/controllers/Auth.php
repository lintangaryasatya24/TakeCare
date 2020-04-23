<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends TakeCare_Controller {

public function __construct(){
		parent::__construct();

		$this->load->model('Model');
}
public
function index() {
    if ($this -> session -> userdata('logon'))
        redirect('page/home');
    $this -> show_home('index');
}
public
function reg() {
    if ($this -> session -> userdata('logon'))
        redirect('page/home');
    $this -> show_register('register');
}   
public
function log() {
    if ($this -> session -> userdata('logon'))
        redirect('page/home');
    $this -> show_login('login');
}
public
function registeruser() {
    $username = $this -> input -> post('username');
    $pass = $this -> input -> post('password');
    $repass = $this -> input -> post('re-password');
    $nama = $this -> input -> post('nama');
    $alamat = $this -> input -> post('alamat');
    $nohp = $this -> input -> post('nohp');
    if ($pass != $repass) {
        $this -> session -> set_flashdata('message', 'Password tidak cocok');
        redirect('auth/reg');
    } else if ($this -> Model -> check_username($username)) {
        $this -> session -> set_flashdata('message', 'Username sudah ada');
        redirect('auth/reg');
    } else {
        $data = array(
            'username' => $username,
            'password' => $pass,
            'nama' => $nama,
            'nohp' => $nohp,
            'alamat' => $alamat
        );
        $result = $this -> Model -> insert_new_profle($data);
        if ($result) {
            $this -> session -> set_flashdata('message', 'Register Berhasil');
            redirect('auth/reg');
        } else {
            $this -> session -> set_flashdata('message', 'Register Gagal');
            redirect('auth/reg');
        }
    }
}

public
function registerdokter() {
    $username = $this -> input -> post('username');
    $pass = $this -> input -> post('password');
    $repass = $this -> input -> post('re-password');
    $nama = $this -> input -> post('nama');
    $alamat = $this -> input -> post('alamat');
    $nohp = $this -> input -> post('nohp');
    $id_spesialis = $this -> input -> post('id_spesialis');
    $role = $this -> input -> post('role');
    if ($pass != $repass) {
        $this -> session -> set_flashdata('message', 'Password tidak cocok');
        redirect('page/dokter');
    } else if ($this -> Model -> check_username($username)) {
        $this -> session -> set_flashdata('message', 'Username sudah ada');
        redirect('page/dokter');
    } else {
        $initialize = $this -> upload -> initialize(array(
            "upload_path" => './assets/dokter/',
            "allowed_types" => "gif|jpg|jpeg|png|bmp",
            "remove_spaces" => TRUE

        ));
        $this -> load -> library('upload', $initialize);
        if (!$this -> upload -> do_upload('foto')) {
            $error = array('error' => $this -> upload -> display_errors());
            $data['error_message'] = $this -> upload -> display_errors();
            echo 'anda gagal upload';
        } else {
            $data = $this -> upload -> data();
            $gambar = $data['file_name'];
            $input_data = array(
                'username' => $username,
                'password' => $pass,
                'nama' => $nama,
                'nohp' => $nohp,
                'role' => $role,
                'alamat' => $alamat,
                'id_spesialis' => $id_spesialis,
                'foto' => $gambar
            );
            $result = $this -> Model -> insert_new_profle($input_data);
            if ($result) {
                $this -> session -> set_flashdata('message', 'Tambah Berhasil');
                redirect('page/dokter');
            } else {
                $this -> session -> set_flashdata('message', 'Tambah Gagal');
                redirect('page/dokter');
            }
        }
    }
}

public
function login() {
    $username = $this -> input -> post('username');
    $password = $this -> input -> post('password');

    $user = $this -> Model -> get($username);

    if (empty($user)) {
        $this -> session -> set_flashdata('message', 'Username tidak ditemukan');
        redirect('auth/log');
    } else {
        if ($password == $user -> password) {
            $session = array(
                'logon' => true,
                'username' => $user -> username,
                'nama' => $user -> nama,
                'role' => $user -> role,
                'alamat' => $user -> alamat,
                'nohp' => $user -> nohp,
                'nid' => $user -> nid,
                'id' => $user -> id
            );

            $this -> session -> set_userdata($session);
            redirect('page/home');
        } else {
            $this -> session -> set_flashdata('message', 'Password Anda salah');
            redirect('auth/log');
        }
    }
}

public
function logout() {
    $this -> session -> sess_destroy();
    redirect('auth');

}
}