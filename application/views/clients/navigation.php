<!-- SIDEBAR -->
<div id="sidebar" class="sidebar">
	<div class="sidebar-menu nav-collapse">
		<!-- SIDEBAR MENU -->
		<ul>
		<!--dashboard -->
			<li class="<?php if($page_name == 'dashboard')echo 'active';?>">
				<a href="<?php echo base_url();?>index.php/clients/dashboard">
					<i class="fa fa-tachometer fa-fw"></i> <span class="menu-text"><?php echo get_phrase('dashboard');?></span>	
				</a>
			</li>
			<li class="<?php if($page_name == 'kullerid')echo 'active';?>">
				<a href="<?php echo base_url();?>index.php/clients/kullerid">
				<i class="fa fa-bookmark-o fa-fw"></i> <span class="menu-text"><?php echo get_phrase('couriers');?></span>
				</a>
			</li>
			<li class="<?php if($page_name == 'my_shipments')echo 'active';?>">
				<a href="<?php echo base_url();?>index.php/clients/my_shipments">
				<i class="fa fa-bookmark-o fa-fw"></i> <span class="menu-text"><?php echo get_phrase('my_shipments');?></span>
				</a>
			</li>
		</ul>
		<!-- /SIDEBAR MENU -->
	</div>
</div>
<!-- /SIDEBAR -->
