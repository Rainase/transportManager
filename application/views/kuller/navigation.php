<!-- SIDEBAR -->
				<div id="sidebar" class="sidebar">
					<div class="sidebar-menu nav-collapse">
												
						<!-- SIDEBAR QUICK-LAUNCH -->
						<!-- <div id="quicklaunch">
						<!-- /SIDEBAR QUICK-LAUNCH -->
						
						<!-- SIDEBAR MENU -->
						<ul>
						<!--dashboard -->
            <li class="<?php if($page_name == 'dashboard')echo 'active';?>">
            <a href="<?php echo base_url();?>index.php/kuller/dashboard">
                		<i class="fa fa-tachometer fa-fw"></i> <span class="menu-text"><?php echo get_phrase('dashboard');?></span>
                		
                </a>
            </li>
							<li class="<?php if($page_name == 'clients')echo 'active';?>">
								<a href="<?php echo base_url();?>index.php/kuller/clients">
								<i class="fa fa-bookmark-o fa-fw"></i> <span class="menu-text"><?php echo get_phrase('clients');?></span>
								</a>
							</li>
						</ul>
						<!-- /SIDEBAR MENU -->
					</div>
				</div>
				<!-- /SIDEBAR -->
