

<?php $this->load->view('contact/header')?>

<body>
	<p></p>
	<br>

	<?php foreach ($kontak as $kontak):?>

		<p><?php echo $kontak['nama'] ?></p>

	<?php endforeach ?>

</body>



<?php $this->load->view('contact/footer')?>
</html>