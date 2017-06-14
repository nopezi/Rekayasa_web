  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="FaberNainggolan">
    <title>CodeIgniter dengan Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">

    <style>
            body{
                background-image: url('http://nopezi.xyz/gambar/270187.jpg');
            }
            .title-apps{
                margin-top: 20%;
                text-align: center;
            }
            .sub-title{
                text-align: center;
            }
            .box{
                border-radius: 2%;
                border: 1px solid #cecece;
                padding: 10%;
                margin-top: 5%;
                background: #fff;
            }
            @media only screen and (max-device-width:480px){
                .title-apps{
                    margin-top: 10%;
                    text-align: center;
                }
                .box{
                    margin-top: 5%;
                }
            }
        </style>
  </head>


  <body>
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-md-14 col-lg-4 col-lg-offset-4 col-md-offset-4 ">
              

                  <h1 style="animation-delay: 1s;" class="title-apps animated fadeInDown"></h1>
                  <h3 class="sub-title">
                      
                      <!-- <span class="animated bounceInUp" style="animation-delay: 1s;">Silahkan&nbsp;</span>
                      <span class="animated bounceInRight" style="animation-delay: 1s;">Login</span> -->
                  </h3>
                  <div class="box animated bounceInDown">
                     <center><marquee width="320" height="26"><font color="#00ff00" size="5" name="Harrington"><b>Tugas Akhir Rekayasa Web Semester 6 </b></font></marquee></center>
                      <hr/>

                    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post" class="form-horizontal" role="form">

                       <div class="form-group has-feedback animated bounceInLeft" style="animation-delay: 1s;">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username"/>
                                <span class="form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback animated bounceInRight" style="animation-delay: 1s;">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
                                <span class="form-control-feedback"></span>
                             </div>

                            <div class="form-group animated bounceInDown" style="animation-delay: 2s;">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary btn-block">Login <span class="fa fa-key"></span></button>
                                </div>
                            </div>

                    </form>
                  </div>
              </div>
          </div>
      </div>
  </body>














      <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
  </body>
</html>