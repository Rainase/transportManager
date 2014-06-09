	<!-- HEADER -->
	<header class="navbar clearfix" id="header">
		<div class="container">
				<div class="navbar-header">
					<!-- COMPANY LOGO -->
					<a class="navbar-brand" href="#"><i class="fa fa-truck"> Transport Manager</i></a>
					<!-- /COMPANY LOGO -->
				</div>
				<!-- BEGIN TOP NAVIGATION MENU -->					
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN LANGUAGE DROPDOWN -->	
					<li class="dropdown" id="header-notification">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-flag"></i>
							<span><?php echo get_phrase('select_language');?></span>						
						</a>

						<ul class="dropdown-menu notification">
						<?php
                            $fields = $this->db->list_fields('language');
                            foreach ($fields as $field)
                            {
                                if($field == 'phrase_id' || $field == 'phrase')continue;
                                ?>
							<li>
								<a href="<?php echo base_url();?>index.php/multilanguage/select_language/<?php echo $field;?>">
									<span class="label label-success">EN</span>
									<span class="body">
										<span class="message"><?php echo $field;?></span>
										<?php //selecting current language
                                                if($this->session->userdata('current_language') == $field):?>
                                                <i class="fa fa-check"></i>
                                            <?php endif;?>
									</span>
								</a>
							</li>
							<?php
                            }
                            ?>
						</ul>
					</li>
					<!-- END LANGUAGE DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					<li class="dropdown" id="header-tasks">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-tasks"></i>
						<span class="badge">3</span>
						</a>
						<ul class="dropdown-menu tasks">
							<li class="dropdown-title">
								<span><i class="fa fa-check"></i> 6 tasks in progress</span>
							</li>
							<li>
								<a href="#">
									<span class="header clearfix">
										<span class="pull-left">Software Update</span>
										<span class="pull-right">60%</span>
									</span>
									<div class="progress">
									  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
										<span class="sr-only">60% Complete</span>
									  </div>
									</div>
								</a>
							</li>
							<li class="footer">
								<a href="#">See all tasks <i class="fa fa-arrow-circle-right"></i></a>
							</li>
						</ul>
					</li>
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user" id="header-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img alt="" src="img/avatars/avatar3.jpg" />
							<span class="username"><?php echo $this->session->userdata('name');?></span>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url();?>index.php/<?php echo $this->session->userdata('login_type');?>/manage_profile"><i class="fa fa-user"></i> My Profile</a></li>
							<li><a href=""><i class="fa fa-cog"></i> Account Settings</a></li>
							<li><a href="#"><i class="fa fa-eye"></i> Privacy Settings</a></li>
							<li><a href="<?php echo base_url();?>index.php/login/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU -->
		</div>
	</header>
	<!--/HEADER -->