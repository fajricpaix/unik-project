<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Unik Projects</title>

    <!-- core CSS -->
    <link href="<?php echo base_url('home/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('home/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('home/css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('home/css/prettyPhoto.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('home/css/main.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('home/css/responsive.css') ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="favicon.ico">
        <script src="<?php echo base_url('home/js/jquery.js') ?>"></script>
        <script src="<?php echo base_url('home/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('home/js/jquery.prettyPhoto.js') ?>"></script>
        <script src="<?php echo base_url('home/js/jquery.isotope.min.js') ?>"></script>
        <script src="<?php echo base_url('home/js/main.js') ?>"></script>
        <script src="<?php echo base_url('home/js/wow.min.js') ?>"></script>

</head><!--/head-->

<body class="homepage">

    <header id="header">
        <?php echo $header ?>
    </header><!--/header-->

	<?php echo $content ?>

    <footer id="footer" class="midnight-blue">
    	<?php echo $footer ?>
    </footer><!--/#footer-->

</body>
</html>