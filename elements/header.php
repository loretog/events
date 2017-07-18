<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="<?php echo SITE_URL ?>/assets/img/logos.png" alt="I-Tech">
    <title>Info-Tech</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo SITE_URL ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo SITE_URL ?>/assets/css/business-casual.css" rel="stylesheet">
    <link href="<?php echo SITE_URL ?>/assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL ?>/assets/fullcalendar/fullcalendar.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">        
        .main-body { background: url('<?php echo SITE_URL ?>/assets/img/bg2.jpg') no-repeat center center fixed; background-size: 100%; }
    </style>
</head>

<body class="main-body">
    <div class="brand" style="text-shadow: 2px 2px black;">Info-Tech</div>
    <div class="address-bar" style="text-shadow: 2px 2px black;">University of San Agustin,  Gen. Luna St. Iloilo CIty, Philippines 5000</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Info-Tech Interactive</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo SITE_URL ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITE_URL ?>/?page=about">About</a>
                    </li>
                    <li>
                        <a href="<?php echo SITE_URL ?>/?page=events">Events</a>
                    </li>
                    <li>
                        <a href="<?php echo SITE_URL ?>/?page=forum">Forum</a>
                    </li>
                    <?php if( !isset( $_SESSION[ 'usern' ] ) ) { ?>
                    <li>
                        <a href="<?php echo SITE_URL ?>/?page=login">Login</a>
                    </li>
                    <?php } else { ?>
                    
                    <li>
                        <a href="<?php echo SITE_URL ?>/?page=admin"><b><?php echo $_SESSION['usern']?></b></a>
                    </li>
                    <li>
                        <a href="<?php echo SITE_URL ?>/?action=logout">Logout</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="content-body">