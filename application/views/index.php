<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		 <?php include 'includes_style.php';?>
        <title><?php echo $page_title;?> | <?php echo $system_title;?></title>
</head>
<body>
        <?php include 'header.php';?>
        <div class="container-fluid" id="main-container">
            <?php include $this->session->userdata('login_type').'/navigation.php';?>
            <div id="main-content" >
                <?php include 'page_info.php';?>
                <?php include $this->session->userdata('login_type').'/'.$page_name.'.php';?>
            </div>
        </div>
        <?php include 'includes_js.php';?>
        <?php include 'modal_hidden.php';?>
	</body>
</html>