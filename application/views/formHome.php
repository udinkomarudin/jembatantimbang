<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
  <title>JEMBATAN TIMBANG</title>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/cssmenu/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/cssmenu/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <script src="<?= base_url(); ?>assets/cssmenu/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="<?= base_url(); ?>assets/cssmenu/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="<?= base_url(); ?>assets/cssmenu/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <style>
  html, body {
    max-width: 100%;
    overflow-x: hidden;
    overflow-y: hidden;

  }
  #body-row {
    margin-left:0;
    margin-right:0;
  }
  #sidebar-container {
    min-height: 100vh;   
    background-color: #333;
    padding: 0;
  }


  .sidebar-expanded {
    width: 50px;
  }
  .sidebar-collapsed {
    width: 60px;
  }


  #sidebar-container .list-group a {
    height: 50px;
    color: white;
  }


  #sidebar-container .list-group .sidebar-submenu a {
    height: 45px;
    padding-left: 30px;
  }
  .sidebar-submenu {
    font-size: 0.9rem;
  }


  .sidebar-separator-title {
    background-color: #333;
    height: 35px;
  }
  .sidebar-separator {
    background-color: #333;
    height: 25px;
  }
  .logo-separator {
    background-color: #333;    
    height: 60px;
  }


  #sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
    content: " \f0d7";
    font-family: FontAwesome;
    display: inline;
    text-align: right;
    padding-left: 10px;
  }

  #sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
    content: " \f0da";
    font-family: FontAwesome;
    display: inline;
    text-align: right;
    padding-left: 10px;
  }
</style>
</head>
<body style="background-color: #151E2F">
	<!-- Start Sidebar -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">
			<img src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
			<!-- <span class="menu-collapsed">LOGO JEMBATAN TIMBANG</span> -->
		</a>

	</nav>


	<div class="row" id="body-row ">
		<div id="sidebar-container" class="sidebar-expanded d-none d-md-block" style="background-color: #343a40">
		</div>
		<div class="col text-center" style="padding: 300px;color: white">
			<a href="<?= base_url('Masuk') ?>"><img src="<?= base_url('assets/in.png') ?>" alt="" style="width: 100px;height: 100px"></a>
			<a href="<?= base_url('Keluar') ?>"><img src="<?= base_url('assets/out.png') ?>" alt="" style="width: 100px;height: 100px"></a>
			<a href="<?= base_url('List') ?>"><img src="<?= base_url('assets/list.png') ?>" alt="" style="width: 100px;height: 100px"></a>
      <a href="<?= base_url('login/logout') ?>"><img src="<?= base_url('assets/logout.png') ?>" alt="" style="width: 100px;height: 100px"></a><br>
      &nbsp&nbsp&nbsp &nbsp&nbspIN &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp OUT &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp LIST &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp LOGOUT
		</div>
	</div>
</body>
</html>