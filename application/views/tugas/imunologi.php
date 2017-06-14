<? $this->load->view('tugas/header');?>


<div class="container">
  <div class="row">
  <h2><center>DATA LAB IMUNOLOGI</center></h2>
    <div class="jumbotron">

    <center><a href="<?php echo base_url('login/tambah_imunologi') ?>" class="btn btn-primary">Tambah Data</a></center>
    <br>
      <table class="table table-condensed table-striped table-bordered table-paginate table-hover" cellspacing="0" width="100%" style="background-color: rgb(234,239,181)">

  <thead>
    <tr>
      <th>No</th>
      <th>Nama Barang</th>
      <th>Jumlah Awal Per 1 Maret 2017 </th>
      <th>kadaluarsa</th>
      <th>Jumlah Akhir Per 31 Maret 2017</th>
      <th>Satuan</th>
      <th>Edit</th>
      <th>Hapus</th>
    </tr>
  </thead>

  <tfoot>
    <tr>
      <th>No</th>
      <th>Nama Barang</th>
      <th>Jumlah Awal Per 1 Maret 2017 </th>
      <th>kadaluarsa</th>
      <th>Jumlah Akhir Per 31 Maret 2017</th>
      <th>Satuan</th>
      <th>Edit</th>
      <th>Hapus</th>
    </tr>
  </tfoot>

  <?php $no = 1; foreach($datalab_imun as $u) {?>
  

  <tbody>
    <tr>
      <td><?php echo $u->id ?></td>
      <td><?php echo $u->nama_barang ?></td>
      <td><?php echo $u->jumlah_awal ?></td>
      <td><?php echo $u->kadaluarsa ?></td>
      <td><?php echo $u->jumlah_akhir ?></td>
      <td><?php echo $u->satuan ?></td>
      <td><?php echo anchor('login/edit2/'.$u->id,'<div class="btn btn-primary">Edit</div>'); ?></td>
      <td><?php echo anchor('login/hapus2/'.$u->id,'<div class="btn btn-danger">Hapus</div>') ?></td>
      <!-- <td><a href="#" class="btn btn-primary">Edit</a></td>
      <td><a href="#" class="btn btn-primary">Hapus</a></td> -->
    </tr>
    <?php } ?>
  </tbody>

  
  
 </table>
<?php
        echo $this->pagination->create_links();
    ?>
  </div>

</div>


<? $this->load->view('tugas/footer');?>