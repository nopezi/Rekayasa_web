<? $this->load->view('tugas/header')?>


<div class="container">
	<div class="row">
		<div class="jumbotron">

    <?php foreach($datalab_imun as $u){ ?>
			<form action="<?php echo base_url(). 'login/update2'; ?>" method="post">
  				<div class="form-group">
    				<label>Nama Barang</label>
    				<div class="barang" style="width: 200px">
            <input type="hidden" name="id" value="<?php echo $u->id ?>">
    					<input type="text" name="nama_barang" class="form-control" value="<?php echo $u->nama_barang ?>">
    				</div>
  				</div>
  
  				<div class="form-group">
    				<label>Jumlah Awal</label>
    				<div class="jumlahawal" style="width: 150px">
    					<input type="text" name="jumlah_awal" class="form-control" value="<?php echo $u->jumlah_awal ?>">
    				</div>
  				</div>

  				<div class="form-group">
    				<label>Kadaluarsa</label>
    				<div class="kadaluarsa" style="width: 100px">
    					<input type="text" name="kadaluarsa" class="form-control" value="<?php echo $u->kadaluarsa ?>">
    				</div>
  				</div>

  				<div class="form-group">
    				<label>Jumlah Akhir</label>
    				<div class="jumlahakhir" style="width: 150px">
    					<input type="text" name="jumlah_akhir" class="form-control" value="<?php echo $u->jumlah_akhir ?>">
    				</div>
  				</div>

  				<div class="form-group">
    				<label>Satuan</label>
    				<div class="satuan" style="width: 200px">
    					<input type="text" name="satuan" class="form-control" value="<?php echo $u->satuan ?>">
    				</div>
  				</div>
  
  				
  
  				
  
  				<input type="submit" value="Simpan" class="btn btn-primary"></input>
  				<a href="<?php echo base_url('login/imunologi'); ?>" class="btn btn-danger">Batal</a>
			</form>
      <?php } ?>
		</div>
	</div>
</div>




<? $this->load->view('tugas/footer')?>	





