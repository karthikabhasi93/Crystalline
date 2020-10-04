<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php 
    // css links
    foreach($css_files as $file): ?>
  <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
  <?php endforeach; ?>
  <!-- <link rel="stylesheet" href="https://bootswatch.com/3/sandstone/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://bootswatch.com/3/paper/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .top-padd-dashboard {
      padding-top: 80px;
    }

    body {
      cursor: url(<?=base_url('assets/images/i.png')?>), auto;
    }

    .activated {
      background-color: #2196f3 !important;
      color: #fff !important;
    }
    .activated a:hover {
      background-color: #2196f3 !important;
      color: #fff !important;
    }

    .activated a,
    .activated span {
      color: #fff;
    }

    .activated::after {
      content: "";
      position: absolute;
      right: -19px;
      z-index: 10000;
      width: 0;
      height: 0;
      border: 14px solid #fff;
      border-top-left-radius: 0px;
      border-bottom-right-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 100px;
      transform: rotate(225deg);
      top: 7px;
    }
    .watermark{
      position:absolute;
      bottom:0;
      left:50%;
      transform:translatex(-50%);
      width:80%;
      text-align:center;
    }
    .watermark a{
      color:#223d6f;
    }
    a:hover{
      text-decoration:none;
    }

    .navmenu {
      border-bottom: 1px solid #2a3c5e;
    }
  </style>
</head>


<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" style="color: #fff;">
          <a href="<?=base_url('admin/logout')?>"><img src="<?=base_url('assets/images/logout.png')?>"
              style="height:20px" alt=""></a>
        </button>
        <a class="navbar-brand text-uppercase" href="#">Crystalline - Panel <small
            style="font-size:13px;">(v.1)</small></a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right">
        <li><a href="<?=base_url()?>">VISIT WEBPAGE</a></li>
          <li><a href="<?=base_url('admin/logout')?>"><img src="<?=base_url('assets/images/logout.png')?>"
                style="height:20px" alt=""></a></li>
          <li><a href="<?=base_url('admin/logout')?>"></a></li>
          <li><a href="<?=base_url('admin/logout')?>"></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid ">
    <div class="row">
      <div class="col-md-2 hidden-xs top-padd-dashboard" style="background:#182337;min-height:100vh">
        <div class="row">
          <nav>
            <ul class="nav">
              <li class="navmenu <?php if($this->uri->segment(2)==""){?>activated<?php }?>">
                <a href="<?=base_url('admin/')?>">
                  <span class="glyphicon glyphicon-dashboard"></span>
                  &nbsp;Dashboard
                </a>
              </li>
              <li class="navmenu <?php if($this->uri->segment(2)=="contact"){?>activated<?php }?>">
                <a href="<?=base_url('admin/contact')?>">
                  <span class="glyphicon glyphicon-paperclip"></span>
                  &nbsp;Contacts
                </a>
              </li>
              <li class="navmenu <?php if($this->uri->segment(2)=="feedback"){?>activated<?php }?>">
                <a href="<?=base_url('admin/feedback')?>">
                  <span class="glyphicon glyphicon-paperclip"></span>
                  &nbsp;Testimonials
                </a>
              </li>
              <li class="navmenu <?php if($this->uri->segment(2)=="services"){?>activated<?php }?>">
                <a href="<?=base_url('admin/services')?>">
                  <span class="glyphicon glyphicon-paperclip"></span>
                  &nbsp;services
                </a>
              </li>
              <li class="navmenu <?php if($this->uri->segment(2)=="findus"){?>activated<?php }?>">
                <a href="<?=base_url('admin/findus')?>">
                  <span class="glyphicon glyphicon-paperclip"></span>
                  &nbsp;Settings
                </a>
              </li>
              <li class="navmenu <?php if($this->uri->segment(2)=="banner"){?>activated<?php }?>">
                <a href="<?=base_url('admin/banner')?>">
                  <span class="glyphicon glyphicon-th-large"></span>
                  &nbsp;Banner
                </a>
              </li>
              <li class="navmenu <?php if($this->uri->segment(2)=="aboutslider"){?>activated<?php }?>">
                <a href="<?=base_url('admin/aboutslider')?>">
                  <span class="glyphicon glyphicon-th-large"></span>
                  &nbsp;Slider- ABOUT
                </a>
              </li>
              <li class="navmenu <?php if($this->uri->segment(2)=="gallery"){?>activated<?php }?>">
                <a href="<?=base_url('admin/gallery')?>">
                  <span class="glyphicon glyphicon-th-large"></span>
                  &nbsp;Gallery
                </a>
              </li>
              <li class="navmenu ">
                <a href="<?=base_url('admin/logout')?>" class="b">
                  <span class="glyphicon glyphicon-log-out"></span>
                  &nbsp;logout
                </a>
              </li>
              <!-- <li><a href="#" id="btn-1" data-toggle="collapse" data-target="#submenu1" aria-expanded="false">Link 2 (toggle)</a>
            <ul class="nav collapse" id="submenu1" role="menu" aria-labelledby="btn-1">
              <li><a href="#">Link 2.1</a></li>
              <li><a href="#">Link 2.2</a></li>
              <li><a href="#">Link 2.3</a></li>
            </ul>
          </li> -->
            </ul>
          </nav>
        </div>

        <div class="watermark">
          <a href="http://blackvoid.in">BV TEMPLATE, <?=date('Y')?> &copy; Copy</a>
        </div>
      </div>
      <div class="col-md-10 col-xs-12 top-padd-dashboard" style="height:100vh;overflow-y:scroll;overflow-x: hidden;">
        <?php if($this->uri->segment(2)=="" || $this->uri->segment(2) == "index"){?>
          <h3><small>Welcome Back <b><?=$this->session->userdata('admin_id')?></b></small></h3>
          <hr>
          <div class="row">
          <div class="col-md-5">
            <img src="https://www.iconfinder.com/data/icons/business-381/500/business-work_12-512.png" alt="" class="img-responsive">
          </div>
            <div class="col-md-6">
            <?php echo $output; ?>
            </div>
          </div>
        <?php }else{?>
        <h3></h3><hr>
          <?php echo $output; ?>
          <?php }?>
       

      </div>
    </div>
  </div>

  <!--  scripts -->
  <?php foreach($js_files as $file): ?>
  <script src="<?php echo $file; ?>"></script>
  <?php endforeach; ?>
</body>

</html>