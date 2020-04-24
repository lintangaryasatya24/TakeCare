<h2>Keranjang Belanja</h2>
<hr>
<form action="<?php echo base_url()?>page/ubahkeranjang" method="post" name="frmweb" id="frmweb" class="form-horizontal" enctype="multipart/form-data">
<?php
  if ($cart = $this->cart->contents())
    {
 ?>

<table class="table table-striped">
<tr id= "main_heading">
<td>No</td>
<td width="10">Gambar</td>
<td>Item</td>
<td>Harga</td>
<td>Jumlah</td>
<td>Total</td>
<td>Hapus</td>
</tr>
<?php
$grand_total = 0;
$i = 1;

foreach ($cart as $item):
$grand_total = $grand_total + $item['subtotal'];
?>
<input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][name]" value="<?php echo $item['name'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][price]" value="<?php echo $item['price'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][gambar]" value="<?php echo $item['gambar'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" />
<tr>
<td><?php echo $i++; ?></td>
<td><img class="img-responsive" src="<?php echo base_url() . 'assets/obat/'.$item['gambar']; ?>"/></td>
<td><?php echo $item['name']; ?></td>
<td><?php echo number_format($item['price'], 0,",","."); ?></td>
<td><input type="text" class="form-control input-sm" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" /></td>
<td><?php echo number_format($item['subtotal'], 0,",",".") ?></td>
<td><a href="<?php echo base_url()?>page/hapus/<?php echo $item['rowid'];?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
<?php endforeach; ?>
</tr>
<tr>
<td colspan="3"><b>Order Total: Rp <?php echo number_format($grand_total, 0,",","."); ?></b></td>
<td colspan="4" align="right">
<a data-toggle="modal" data-target="#myModal"  class ='btn btn-sm btn-danger'>Kosongkan Keranjang</a>
<button class='btn btn-sm btn-success'  type="submit">Update Keranjang</button>
<a href="<?php echo base_url()?>page/checkout"  class ='btn btn-sm btn-primary'>Check Out</a>
</tr>

</table>
<?php
    }
  else
    {
      echo "<h3>Keranjang Belanja anda masih kosong</h3>"; 
    } 
?>
</form>


  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form method="post" action="<?php echo base_url()?>page/hapus/all">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Perhatian</h4>
        </div>
        <div class="modal-body">
      Anda yakin mau mengosongkan keranjang belanja?
            
        </div>
        <div class="modal-footer">
           <button type="submit" class="btn btn-sm btn-primary">Ya</button>
          <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Tidak</button>
        </div>
        
        </form>
      </div>
      
    </div>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br>