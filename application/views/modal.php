<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <?php //include 'includes_top.php';?>
        <title><?php echo $page_title;?> | <?php echo $system_title;?></title>
        
        <link rel="shortcut icon" href="<?php echo base_url();?>template/images/favicon.png">
    </head>
    <body>
        <?php include $this->session->userdata('login_type').'/modal_'.$page_name.'.php';?>
        <?php include 'includes_js.php';?>
    </body>
</html>