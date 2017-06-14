<?php $this->load->view('site/header'); ?>

<div class="container">   
    	<div class="page-header">
    		<h1><?php echo $row->title; ?></h1>
    	</div>

    	<div class="row">
    		<div class="col-md-8 col-xs-12">
    			<div class="thumbnail">
			      <img src="<?=base_url(); ?>assets/uploads/<?php echo $row->filename; ?>" alt="Image 1">			      
			    </div>
			    <div class="row">
			    	<div class="col-md-3">
			    		<div class="thumbnail">
			    			<?php $thumbnail = empty($left_image->thumbnail) ? $left_image->filename : $left_image->thumbnail; ?>
					      <a href="<?php echo site_url
					      ("site/detail/" .$left_image->id) ?>"><img src="<?=base_url(); ?>assets/uploads/<?php echo $thumbnail; ?>" alt="Image 2"></a>
					    </div>
			    	</div>
			    	<div class="col-md-3 col-md-offset-6">
			    		<div class="thumbnail">
					      <a href="<?php echo site_url
					      ("site/detail/" .$right_image->id) ?>"><img src="<?=base_url(); ?>assets/uploads/<?php echo $thumbnail; ?>" alt="Image 3"></a>
					    </div>
			    	</div>
			    </div>
    		</div>
    		<div class="col-md-4 col-xs-12">
    			<ul class="list-group">
				  <li class="list-group-item">
				    <i class="glyphicon glyphicon-eye-open"></i> 120 View
				  </li>
				  <li class="list-group-item">
				    <i class="glyphicon glyphicon-download"></i> 100 Download
				  </li>
				</ul>

				<a href='#' class="btn btn-lg btn-block btn-primary">Download</a>
    		</div>
    	</div>

<?php $this->load->view('site/footer'); ?>    	