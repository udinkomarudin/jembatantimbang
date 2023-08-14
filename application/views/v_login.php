<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JEMBATAN TIMBANG</title>
  <link href="<?= base_url(); ?>assets/csslogin/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/csslogin/font-awesome.min.css">
  <script src="<?= base_url(); ?>assets/csslogin/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="<?= base_url(); ?>assets/csslogin/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/csslogin/jquery.min.js"></script>
  <style>
  div.main{
    background: #0264d6; /* Old browsers */
    background: -moz-radial-gradient(center, ellipse cover,  #0264d6 1%, #1c2b5a 100%); /* FF3.6+ */
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(1%,#0264d6), color-stop(100%,#1c2b5a)); /* Chrome,Safari4+ */
    background: -webkit-radial-gradient(center, ellipse cover,  #0264d6 1%,#1c2b5a 100%); /* Chrome10+,Safari5.1+ */
    background: -o-radial-gradient(center, ellipse cover,  #0264d6 1%,#1c2b5a 100%); /* Opera 12+ */
    background: -ms-radial-gradient(center, ellipse cover,  #0264d6 1%,#1c2b5a 100%); /* IE10+ */
    background: radial-gradient(ellipse at center,  #0264d6 1%,#1c2b5a 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0264d6', endColorstr='#1c2b5a',GradientType=1 );
    height:calc(100vh);
    width:100%;
  }
  [class*="fontawesome-"]:before {
    font-family: 'FontAwesome', sans-serif;
  }
  * {
    box-sizing: border-box;
    margin:0px auto;

    &:before,
    &:after {
      box-sizing: border-box;
    }
  }
  body {
    color: #606468;
    font: 87.5%/1.5em 'Open Sans', sans-serif;
    margin: 0;
  }
  a {
    color: #eee;
    text-decoration: none;
  }
  a:hover {
    text-decoration: underline;
  }
  input {
    border: none;
    font-family: 'Open Sans', Arial, sans-serif;
    font-size: 14px;
    line-height: 1.5em;
    padding: 0;
    -webkit-appearance: none;
  }
  p {
    line-height: 1.5em;
  }
  .clearfix {
    *zoom: 1;

    &:before,
    &:after {
      content: ' ';
      display: table;
    }
    &:after {
      clear: both;
    }
  }
  .container {
    left: 50%;
    position: fixed;
    top: 50%;
    transform: translate(-50%, -50%);
  }
  #login form{
    width: 250px;
  }
  #login, .logo{
    display:inline-block;
    width:50%;
  }
  #login{
    border-right:1px solid #fff;
    padding: 0px 22px;
    width: 59%;
  }
  .logo{
    color:#fff;
    font-size:25px;
    line-height: 55px;
    padding-left: 20px;
    font-weight: bold;
    text-shadow: 2px 2px #000000;
  }
  #login form span.fa {
    background-color: #fff;
    border-radius: 3px 0px 0px 3px;
    color: #000;
    display: block;
    float: left;
    height: 50px;
    font-size:24px;
    line-height: 50px;
    text-align: center;
    width: 50px;
  }
  #login form input {
    height: 50px;
  }
  fieldset{
    padding:0;
    border:0;
    margin: 0;

  }
  #login form input[type="text"], input[type="password"] {
    background-color: #fff;
    border-radius: 0px 3px 3px 0px;
    color: #000;
    margin-bottom: 1em;
    padding: 0 16px;
    width: 200px;
  }
  #login form input[type="submit"] {
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    background-color: #000000;
    color: #eee;
    font-weight: bold;
    /* margin-bottom: 2em; */
    text-transform: uppercase;
    padding: 5px 10px;
    height: 30px;
  }
  #login form input[type="submit"]:hover {
    background-color: #d44179;
  }
  #login > p {
    text-align: center;
  }
  #login > p span {
    padding-left: 5px;
  }
  .middle {
    display: flex;
    width: 600px;
  }
</style>
</head>
<body>
  <div class="main">
    <div class="container">
      <center>
        <div class="middle">
          <div id="login">
           <?php if(isset($error)) { echo $error; }; ?>
           <form method="POST" action="<?php echo base_url() ?>login/aksi_login">>
            <fieldset class="clearfix">
              <p ><input type="text"  Placeholder="Username" name="username" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
              <p><input type="password"  Placeholder="Password" name="password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
              <div>
                <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="#"></a></span>
                <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Log In"></span>
              </div>
            </fieldset>
            <div class="clearfix"></div>
          </form>
          <div class="clearfix"></div>
        </div> <!-- end login -->
        <div class="logo">
          <i>JEMBATAN TIMBANG </i> 
          <div class="clearfix"></div>
        </div>
      </div>
    </center>
  </div>
</div>
</body>
</html>