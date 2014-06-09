<?php 
foreach($manage_profile as $row):
?>
<?php endforeach;?>
<!-- USER PROFILE -->
<div class="row">
<div class="col-md-12">
<!-- BOX -->
<div class="box border">
<div class="box-title">
<h4><i class="fa fa-user"></i><span class="hidden-inline-mobile">Hello, <?php echo $row['name'];?>!</span></h4>
</div>
<div class="box-body">
<div class="tabbable header-tabs user-profile">
<ul class="nav nav-tabs">
   <li class="active"><a href="#pro_overview" data-toggle="tab"><i class="fa fa-dot-circle-o"></i> <span class="hidden-inline-mobile">Overview</span></a></li>
</ul>
<div class="tab-content">
   <!-- OVERVIEW -->
   <div class="tab-pane fade in active" id="pro_overview">
      <div class="row">
        <!-- PROFILE PIC -->
        <div class="col-md-3">
            <div class="list-group">
              <li class="list-group-item zero-padding">
                <img alt="" class="img-responsive" src="<?php echo base_url();?>template/user.jpg">
              </li>
              <div class="list-group-item profile-details">
                    <h2><?php echo $row['name'];?></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.</p>
                    <label><?php echo get_phrase('email');?></label>
                        <p><?php echo $row['email'];?></p>
                    <label><?php echo get_phrase('location');?></label>
                        <p><?php //echo $row['address'];?></p>
                    <p><a href="#">www.jenniferblogs.com</a></p>
                    
             </div>
              
            </div>                                                      
        </div>
        <!-- /PROFILE PIC -->
        <!-- PROFILE DETAILS -->
        <div class="col-md-9">
            <!-- ROW 1 -->
            <div class="row">
                <div class="col-md-7 profile-details">                                                              
                    <h3><?php echo get_phrase('company_details');?></h3>
                    <div class="divide-20"></div>
                    <!-- BUTTONS -->
                    <div class="row">
                        <div class="col-md-4">
                            <a class="btn btn-danger btn-icon input-block-level" href="javascript:void(0);">
                                <i class="fa fa-truck fa-2x"></i>
                                <div><?php echo get_phrase('number_of_shipments');?></div>
                                <span class="label label-right label-warning"><?php  //echo $row['number_of_trucks'];?></span>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-primary btn-icon input-block-level" href="javascript:void(0);">
                                <i class="fa fa-users fa-2x"></i>
                                <div><?php echo get_phrase('number_of_drivers');?></div>
                                <span class="label label-right label-danger"><?php //echo $row['number_of_drivers'];?></span>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-pink btn-icon input-block-level" href="javascript:void(0);">
                                <i class="fa fa-dribbble fa-2x"></i>
                                <div><?php echo get_phrase('trailer_types');?></div>
                                <span class="label label-right label-info"><?php //echo $row['trailer_types'];?></span>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-success btn-icon input-block-level" href="javascript:void(0);">
                                <i class="fa fa-globe fa-2x"></i>
                                <div><?php echo get_phrase('service_area');?></div>
                            </a>
                        </div>
                    </div>
                    <!-- /BUTTONS -->
                </div>
                <div class="col-md-5">
                    <!-- BOX -->
                    <div class="box border inverse">
                        <div class="box-title">
                            <h4><i class="fa fa-bars"></i>Statistics</h4>
                        </div>
                        <div class="box-body big sparkline-stats">
                          
                        </div>
                    </div>
                    <!-- /BOX -->
                    <!-- /SAMPLE -->
                </div>
            </div>
            <!-- /ROW 1 -->
            <div class="divide-40"></div>
        </div>
        <!-- /PROFILE DETAILS -->
      </div>
   </div>
   <!-- /OVERVIEW -->                                               
</div>
</div>
<!-- /USER PROFILE -->
</div>
</div>
</div>
</div>
