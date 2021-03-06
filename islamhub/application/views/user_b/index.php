﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Client Profile</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/profile.css');?>" rel="stylesheet" />

</head>
<body>
   
   <div class="container " >
        <div class="row text-center" style="padding-top:30px;">
            <div class="col-md-12">
             <h1>  CLIENT PROFILE</h1> 
                <br />
           </div>
        </div>
       <div class="row " style="padding-bottom:50px; ">
           <div class="col-md-3">
               <img src="<?php echo base_url('assets/img/faces/avatar.jpg'); ?>" class="img-responsive img-thumbnail" />
               <a href="#" class="btn btn-primary" >Kirim Pesan <i class="glyphicon glyphicon-play"></i></a>
           </div>
           <div class="col-md-9">
               <!-- <div class="alert alert-info">
                   Your profile is only 45% complete, to enjoy full feaures you have to complete it 100%. 
                   <br /><br />
                   <div class="progress" style="height:5px">
  <div class="progress-bar progress-bar-striped active progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
    <span class="sr-only">45% Complete</span>
  </div>
</div>
                   To complete your profile please <a href="#">click here</a> .
               </div> -->
             <div class="btn-group pull-right">
  <button type="button" class="btn btn-success">My Settings</button>
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="<?php echo base_url('profile/u_user_b');?>">Update Profile</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo site_url('profile/logout');?>">Logout</a></li>
  </ul>
</div>
               <br /><br />
               <hr />
               <div >
                <h3><strong> Name: </strong> <?php echo $this->session->userdata('username');?></h3>  
                <h3>  <strong>  Email: </strong> <?php echo $this->session->userdata('email');?> </h3>  
                <!-- <h3>  <strong>  Universitas: </strong><?php echo $this->session->userdata('universitas');?> </h3>   -->

                <h3>  <strong> Social Links :</strong></h3>  
                   <br />
                   <a href="#" class="btn btn-primary" >Facebook <i class="glyphicon glyphicon-play"></i></a>
                   <a href="#" class="btn btn-danger" >Google <i class="glyphicon glyphicon-play"></i></a>
                   <a href="#" class="btn btn-info" >Twitter <i class="glyphicon glyphicon-play"></i></a>
               </div>
               
           </div>
       </div>
      

            <!-- <div class="row">
        <div class="col-md-4"><img src="<?php echo base_url('assets/img/faces/marc.jpg'); ?>" class="img-responsive img-thumbnail" /><br>
          <center><h3>Konten 1</h3></center> <br> <center>Deskripsi Singkat</center> <br>
          <center>
            <a href="#" class="btn btn-primary" >Open <i class="glyphicon glyphicon-play"></i></a>
                   <a href="#" class="btn btn-danger" >Update <i class="glyphicon glyphicon-play"></i></a>
                   <a href="#" class="btn btn-info" >Delete <i class="glyphicon glyphicon-play"></i></a>
          </center>
        </div>
        <div class="col-md-4"><img src="<?php echo base_url('assets/img/faces/marc.jpg'); ?>" class="img-responsive img-thumbnail" />
        <center><h3>Konten 2</h3></center> <br> <center>Deskripsi Singkat</center> <br>
          <center>
            <a href="#" class="btn btn-primary" >Open <i class="glyphicon glyphicon-play"></i></a>
                   <a href="#" class="btn btn-danger" >Update <i class="glyphicon glyphicon-play"></i></a>
                   <a href="#" class="btn btn-info" >Delete <i class="glyphicon glyphicon-play"></i></a>
          </center>
        </div>
        <div class="col-md-4"><img src="<?php echo base_url('assets/img/faces/marc.jpg'); ?>" class="img-responsive img-thumbnail" />
        <center><h3>Konten 3</h3></center> <br> <center>Deskripsi Singkat</center> <br>
          <center>
            <a href="#" class="btn btn-primary" >Open <i class="glyphicon glyphicon-play"></i></a>
                   <a href="#" class="btn btn-danger" >Update <i class="glyphicon glyphicon-play"></i></a>
                   <a href="#" class="btn btn-info" >Delete <i class="glyphicon glyphicon-play"></i></a>
          </center>
        </div>
      </div> -->

       <div class="row">
        <div class="col-md-6">
         <center><h3><strong>VIDEO TERSIMPAN</strong></h3></center>
         <div class="row">
        <div class="col-md-6">
            <a href="#"><center>
            <img src="<?php echo base_url('assets/img/vid.png'); ?>" class="img-responsive profile-vid" />
            
            </center></a>
        </div>
            <div class="col-md-6">
            <a href="#"><center>
            <img src="<?php echo base_url('assets/img/vid.png'); ?>" class="img-responsive profile-vid" />
            </center></a>
        </div>
         <div class="col-md-6">
            <a href="#"><center>
            <img src="<?php echo base_url('assets/img/vid.png'); ?>" class="img-responsive profile-vid" />
            </center></a>
        </div>
            <div class="col-md-6">
           <a href="#"><center>
            <img src="<?php echo base_url('assets/img/vid.png'); ?>" class="img-responsive profile-vid" />
            </center></a>
        </div>

      </div>
        </div>

        <div class="col-md-6">
        <center><h3><strong>JURNAL TERSIMPAN</strong></h3></center>
        <div class="row">
        <div class="col-md-4">
        <a href="#"><center>
            <img src="<?php echo base_url('assets/img/dok.png'); ?>" class="img-responsive profile-vid" />
            
            </center></a>
        </div>
        <div class="col-md-4">
          <a href="#"><center>
            <img src="<?php echo base_url('assets/img/dok.png'); ?>" class="img-responsive profile-vid" />
            </center></a>
        </div>
        <div class="col-md-4">
          <a href="#"><center>
            <img src="<?php echo base_url('assets/img/dok.png'); ?>" class="img-responsive profile-vid" />
            </center></a>
        </div>
         <div class="col-md-4">
          <a href="#"><center>
            <img src="<?php echo base_url('assets/img/dok.png'); ?>" class="img-responsive profile-vid" />
            </center></a>
        </div>
         <div class="col-md-4">
          <a href="#"><center>
            <img src="<?php echo base_url('assets/img/dok.png'); ?>" class="img-responsive profile-vid" />
            </center></a>
        </div>
         <div class="col-md-4">
          <a href="#"><center>
            <img src="<?php echo base_url('assets/img/dok.png'); ?>" class="img-responsive profile-vid" />
            </center></a>
        </div>
      </div>
        </div>
      </div>

       </div>
       
   </div>
       <!--  CORE SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.1.js'); ?>"></script>
       <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
</body>
</html>
