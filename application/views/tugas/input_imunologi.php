<? $this->load->view('tugas/header')?>


<div class="container">
<h3>DATA IMUNOLOGI</h3>
	<div class="row">
		<div class="jumbotron">
			<form action="<?php echo base_url(). 'login/tambah_aksi2'; ?>" method="post">
  				<div class="form-group">
    				<label>Nama Barang</label>
    				<div class="barang" style="width: 200px">
    					<input type="text" name="nama_barang" class="form-control" placeholder="nama barang">
    				</div>
  				</div>
  
  				<div class="form-group">
    				<label>Jumlah Awal</label>
    				<div class="jumlahawal" style="width: 150px">
    					<input type="text" name="jumlah_awal" class="form-control" placeholder="jumlah awal">
    				</div>
  				</div>

  				<div class="form-group">
    				<label>Kadaluarsa</label>
    				<div class="kadaluarsa" style="width: 100px">
    					<input type="text" name="kadaluarsa" class="form-control" placeholder="kadaluarsa">
    				</div>
  				</div>

  				<div class="form-group">
    				<label>Jumlah Akhir</label>
    				<div class="jumlahakhir" style="width: 150px">
    					<input type="text" name="jumlah_akhir" class="form-control" placeholder="jumlah akhir">
    				</div>
  				</div>

  				<div class="form-group">
    				<label>Satuan</label>
    				<div class="satuan" style="width: 200px">
    					<input type="text" name="satuan" class="form-control" placeholder="satuan">
    				</div>
  				</div>
  
  				
  
  				
  
  				<input type="submit" value="Tambah" class="btn btn-primary"></input>
  				<a href="<?php echo base_url('login/imunologi'); ?>" class="btn btn-danger">Batal</a>
			</form>
		</div>
	</div>
</div>


<? $this->load->view('tugas/footer')?>	





