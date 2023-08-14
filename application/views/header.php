<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
	<title>JEMBATAN TIMBANG</title>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/cssmenu/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
	
	<link href="<?= base_url(); ?>assets/cssmenu/select2.min.css" rel="stylesheet" /> 
	<script src="<?= base_url(); ?>assets/cssmenu/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url(); ?>assets/cssmenu/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="<?= base_url(); ?>assets/cssmenu/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>assets/cssmenu/select2.min.js"></script>

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