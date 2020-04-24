<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends TakeCare_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('Model');
	}
	public

	function home() {
    $this -> show_template('home');	
	}
	public

	function kontak() {
    $this -> show_template('kontak');
	}
	public

	function aboutus() {
    $this -> show_template('aboutus');

	}
	public

    function tambahkeranjang() {
        $data_produk = array('id' => $this -> input -> post('id'),
            'name' => $this -> input -> post('nama'),
            'price' => $this -> input -> post('harga'),
            'gambar' => $this -> input -> post('gambar'),
            'qty' => $this -> input -> post('qty')
        );
        $this -> cart -> insert($data_produk);
        redirect('page/indexobat');

    }
    public

    function ubahkeranjang() {
        $cart_info = $_POST['cart'];
        foreach($cart_info as $id => $cart) {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $gambar = $cart['gambar'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];
            $data = array('rowid' => $rowid,
                'price' => $price,
                'gambar' => $gambar,
                'amount' => $amount,
                'qty' => $qty);
            $this -> cart -> update($data);
        }
        redirect('page/keranjang');
    }
    public

    function checkout() {
        $data_kategori = $this -> Model -> get_kategori_all();
        $this -> show_template('checkout', ['data' => $data_kategori]);
    }
    public

    function orderselesai() {

        $data_pelanggan = array('nama' => $this -> input -> post('nama'),
            'email' => $this -> input -> post('email'),
            'alamat' => $this -> input -> post('alamat'),
            'telp' => $this -> input -> post('telp'));
        $id_pelanggan = $this -> Model -> tambah_pelanggan($data_pelanggan);

        $data_order = array('tanggal' => date('Y-m-d'),
            'pelanggan' => $id_pelanggan);
        $id_order = $this -> Model -> tambah_order($data_order);

        if ($cart = $this -> cart -> contents()) {
            foreach($cart as $item) {
                $data_detail = array('order_id' => $id_order,
                    'produk' => $item['id'],
                    'qty' => $item['qty'],
                    'harga' => $item['price']);
                $proses = $this -> Model -> tambah_detail_order($data_detail);
            }
        }

        $this -> cart -> destroy();
        $data_kategori = $this -> Model -> get_kategori_all();
        $this -> show_template('berhasil', ['data' => $data_kategori]);
    }

     function keranjang() {
        $data_kategori = $this -> Model -> get_kategori_all();
        $this -> show_template('keranjang', ['data' => $data_kategori]);
    }

    function hapus($rowid) {
        if ($rowid == "all") {
            $this -> cart -> destroy();
        } else {
            $data = array('rowid' => $rowid,
                'qty' => 0);
            $this -> cart -> update($data);
        }
        redirect('page/keranjang');
    }

    public

    function dokter() {
        if ($this -> session -> userdata('role') != 'Admin')
            show_404();

        $data_dokter = $this -> Model -> Getdokter_nid();
        $data_spesialis = $this -> Model -> Getspesialis_nid();
        $this -> show_template('admin/dokter', ['data' => $data_dokter, 'dataJ' => $data_spesialis]);
    }

    public

    function profil() {

        $data_user = $this -> Model -> Getuser();
        $this -> show_template('profil', ['data' => $data_user]);
    }
    public

    function indexdokter() {

        $data_dokter = $this -> Model -> Getdokter_nid();
        $data_spesialis = $this -> Model -> Getspesialis_nid();
        $this -> show_template('dokter', ['data' => $data_dokter, 'dataJ' => $data_spesialis]);
    }
    public

    function obat() {
        if ($this -> session -> userdata('role') != 'Admin')
            show_404();

        $dataproduk = $this -> Model -> get_produk_all();
        $datakategori = $this -> Model -> get_kategori_all();

        $this -> show_template('admin/obat', ['data' => $dataproduk, 'dataJ' => $datakategori]);
    }
    public

    function reservasi($nid) {
        if ($this -> session -> userdata('role') != 'Dokter')
            show_404();

        $data_reservasi = $this -> Model -> Getreservasi($nid);
        $this -> show_template('dokter/reservasi', ['data' => $data_reservasi]);
    }
    public

    function indexobat() {
        $dataproduk = $this -> Model -> get_produk_all();
        $datakategori = $this -> Model -> get_kategori_all();

        $this -> show_template('obat', ['data' => $dataproduk, 'dataJ' => $datakategori]);
    }
  

    public

    function hapusdokter($id) {
        $this -> Model -> hapus_dokter($id);
        redirect('Page/dokter');
    }
    public

    function reservasii($nid, $noreservasi) {
        $this -> Model -> hapus_reservasi($noreservasi);
        $data_reservasi = $this -> Model -> Getreservasi($nid);
        $this -> show_template('reservasi', ['data' => $data_reservasi]);
    }

    public

    function hapusobat($nio) {
        $this -> Model -> hapus_obat($nio);
        redirect('Page/obat');
    }

    public

    function tambahobat() {
        $initialize = $this -> upload -> initialize(array(
            "upload_path" => './assets/obat/',
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
            $input_data = [
                'nama_produk' => $this -> input -> post('namaobat', true),
                'harga' => $this -> input -> post('harga', true),
                'deskripsi' => $this -> input -> post('deskripsi', true),
                'kategori' => $this -> input -> post('id_jenis', true),
                'gambar' => $gambar
            ];
            $this -> Model -> tambah_obat($input_data);
            redirect('Page/obat');

        }
    }
    public

    function tambahreservasi() {

        $input_data = [
            'nid' => $this -> input -> post('nid', true),
            'nama' => $this -> input -> post('nama', true),
            'subjek' => $this -> input -> post('subjek', true),
            'pesan' => $this -> input -> post('pesan', true),
            'pengirim' => $this -> input -> post('pengirim', true),
            'tanggal' => $this -> input -> post('tanggal', true),
            'jam' => $this -> input -> post('jam', true)
        ];
        $this -> Model -> tambah_reservasi($input_data);
        $this -> session -> set_flashdata('message', 'Reservasi telah dibuat silahkan menunggu');
        redirect('Page/indexdokter');

    }

    public

    function editdokter() {
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

            $nid = $this -> input -> post('nid');
            $nama = $this -> input -> post('nama');
            $alamat = $this -> input -> post('alamat');
            $id_spesialis = $this -> input -> post('id_spesialis');
            $data = array(
                'nama' => $nama,
                'alamat' => $alamat,
                'id_spesialis' => $id_spesialis,
                'foto' => $gambar
            );
            $this -> Model -> edit_dokter($nid, $data);

            redirect('page/dokter');
        }
    }
    public

    function editobat() {
        $initialize = $this->upload->initialize(array(
                "upload_path" => './assets/obat/',
                "allowed_types" => "gif|jpg|jpeg|png|bmp",
                "remove_spaces" => TRUE
                
                
            ));
        $this->load->library('upload', $initialize);
            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());
                $data['error_message'] = $this->upload->display_errors();
                echo 'anda gagal upload';
            } else {
                $data = $this->upload->data();
                $gambar = $data['file_name'];   

        $id_obat = $this -> input -> post('id_obat');
        $namaobat = $this -> input -> post('namaobat');
        $harga = $this -> input -> post('harga');
        $deskripsi = $this -> input -> post('deskripsi');
        $id_jenis = $this -> input -> post('id_jenis');
        $data = array(
            'nama_produk' => $namaobat,
            'harga' => $harga,
            'deskripsi' => $deskripsi,
            'kategori' => $id_jenis,
            'gambar' =>$gambar
        );
        $this -> Model -> edit_obat($id_obat, $data);

        redirect('Page/obat');

    }
}
     function editprofil() {

        $id_user = $this -> input -> post('id');
        $nama = $this -> input -> post('nama');
        $alamat = $this -> input -> post('alamat');
        $nohp = $this -> input -> post('nohp');
        $password = $this -> input -> post('password');
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'nohp' => $nohp,
            'password' => $password
        );
        $this -> Model -> edit_profil($id_user, $data);
         $this -> session -> set_flashdata('message', 'Profil sudah terupdate silahkan login ulang!');
        redirect('Page/profil');

    }
  }