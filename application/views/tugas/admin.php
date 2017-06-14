<? $this->load->view('tugas/header');?>


<body>
	<div class="container">
		<div class="jumbotron">
			<h1>Login berhasil !</h1>
	<h2>Selamat Datang <b><?php echo $this->session->userdata("nama"); ?></b></h2>
	<h2>Di halaman Administrator</h2>
		</div>
	</div>
</body>


<? $this->load->view('tugas/footer');?>