


  <!DOCTYPE html>
<html>
<head>
    <title>Membuat login dengan codeigniter | www.malasngoding.com</title>

    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <script type="text/javascript" language="javascript" src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?=base_url()?>assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?=base_url()?>assets/js/dataTables.bootstrap.js"></script>

</head>


<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Data Alat</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url('admin'); ?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
            <li><a href="<?php echo base_url('login/parasitologi'); ?>">Daftar Alat Lab Parasitologi</a></li>
            <li><a href="<?php echo base_url('login/imunologi'); ?>">Daftar Alat Lab Imunologi</a></li>

            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Daftar Alat Lab Serologi <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">1 Maret</a></li>
                <li><a href="#">31 Maret</a></li>
              </ul>
            </li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="../navbar/">Default</a></li> -->
            <li class="active"><a href="<?php echo base_url('login/logout'); ?>">Keluar <span class="sr-only">(current)</span></a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>