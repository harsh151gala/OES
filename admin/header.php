<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <link rel="shortcut icon" type="image/jpg" href="images/admin1.jpg">
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <!--<link rel="shortcut icon" href="favicon.ico">-->
    <link re>


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


    <style>
    aside.left-panel {
  background: #003153;
  display: table-cell;
  height: 100vh;
  min-height: 100%;
  padding: 0 25px;
  vertical-align: top;
  width: 280px;
  -webkit-transition:width 0.3s ease;
  transition: width 0.3s ease; }
  .navbar {
  background: #003153;
  border-radius: 0;
  border: none;
  display: block;
  margin: 0 0 100px;
  padding: 0; }
  .navbar .navbar-nav li > a {
        background: none !important;
        color: white !important;
        display: inline-block;
        font-family: 'Open Sans';
        font-size: 16px;
        font-weight:bold;
        line-height: 30px;
        padding: 10px 0;
        position: relative;
        width: 100%; }
    .navbar .navbar-brand {
        color: white !important;
        font-size: 24px;
        font-weight:bold;
    }
    .navbar .navbar-nav li > a .menu-icon {
    color: white !important;
    }
</style>
</head>

<body>
<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./">

                Admin Panel

            </a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li>
                    <a href="exam_category.php"> <i class="menu-icon fa fa-dashboard"></i>Add & Edit Exam</a>
                </li>
                <li>
                    <a href="add_edit_exam_questions.php"> <i class="menu-icon fa fa-dashboard"></i>Add & Edit Questions</a>
                </li>
                <li>
                    <a href="old-exam-results.php"> <i class="menu-icon fa fa-dashboard"></i>All Exam Results</a>
                </li>
                <li>
                    <a href="logout.php"> <i class="menu-icon fa fa-close"></i>LogOut </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">

            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/sir.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">

                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                    </div>
                </div>



            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->