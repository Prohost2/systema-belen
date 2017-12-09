<!DOCTYPE html>
<html lang="en" ng-app="MyApp">
<head>
	<meta charset="UTF-8">
	<title><?php if (isset($title)): ?>
        <?php echo $title ?>
    <?php else: ?>
        System Admin
    <?php endif ?></title>
	<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-material-design.min.css') ?>">
    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('asset/css/animate.min.css') ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('asset/css/jquery-ui.css') ?>" rel="stylesheet"/>
    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url('asset/css/paper-dashboard.css') ?>" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('asset/css/demo.css') ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/easy-autocomplete.css') ?>">    
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>

