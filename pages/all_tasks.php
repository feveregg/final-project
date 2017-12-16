<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WSD Project - FALL2017</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Barlow -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>


  
 <style>
    tab{
        float: right;
        margin-right: 63.0em;
    }
</style>



    
<form action="index.php?page=tasks&action=insert" method="post">

    Owneremail: <tab><input type="email" name="owneremail"></tab><br><br>
    Ownerid:    <tab><input type="number" name="ownerid"></tab><br><br>
    Createdate: <tab><input type="text" name="createddate"></tab><br><br>
    Duedate:    <tab><input type="text" name="duedate"></tab><br><br>
    Message:    <tab><input type="text" name="message"></tab><br><br>
    Isdone:     <tab><input type="text" name="isdone"></tab><br><br>
    <input type="submit" value="Insert Task">
</form>



<script src="js/scripts.js"></script>
</body>
</html>