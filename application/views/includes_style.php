        <!--base css styles-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/assets/css/cloud-admin.css" >
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url();?>template/assets/css/themes/default.css" id="skin-switcher" >
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url();?>template/assets/css/responsive.css" >
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/assets/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
    <link href="<?php echo base_url();?>template/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

		<?php
			$system_name	=	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
			$system_title	=	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
		?>
