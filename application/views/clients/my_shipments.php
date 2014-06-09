<div class="row">
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="tabbable">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#my_shipments" data-toggle="tab"><i class="fa fa-home"></i><?php echo get_phrase('my_shipmnets');?></a></li>
						<li><a href="#add_new" data-toggle="tab"><i class="fa fa-envelope"></i><?php echo get_phrase('add_new_shipment');?></a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="my_shipments">
							<div class="divide-10"></div>
								<p>
							
                                    	
<!-- Begin of DATA TABLES -->
<div class="row">
    <div class="col-md-12">
        <!-- Begin BOX -->
        <div class="box border green">
            <div class="box-title">
                <h4><i class="fa fa-table"></i><?php echo get_phrase('my_shipment_list');?> / </h4><small></small>
            </div>
<div class="box-body">
    <table id="datatable1" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th><?php echo get_phrase('product_name');?></th>
                <th><?php echo get_phrase('product_weight');?></th>
                <th><?php echo get_phrase('quantity');?></th>
                <th><?php echo get_phrase('date_dispatch_first');?></th>
                <th><?php echo get_phrase('date_dispatch_last');?></th>
                <th><?php echo get_phrase('description');?></th>
                <th><?php echo get_phrase('size');?></th>
                <th><?php echo get_phrase('date_arrive_first');?></th>
                <th><?php echo get_phrase('date_dispatch_last');?></th>
                <th><?php echo get_phrase('options');?></th>

            </tr>
        </thead>
        <tbody>
        <?php $count = 1;foreach($my_shipments as $row):?>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['weight'];?><small> kg</small></td>
                    <td><?php echo $row['quantity'];?>/<?php echo get_phrase('pieces');?></td>
                    <td><?php echo $row['date_pickup_first'];?></td>
                    <td><?php echo $row['date_pickup_last'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['size'];?></td>
                    <td><?php echo $row['date_arrive_first'];?></td>
                    <td><?php echo $row['date_arrive_last'];?></td>
                    <td>
                        <a data-toggle="modal" href="#modal-form" onclick="modal('edit_shipment',<?php echo $row['shipment_id'];?>)" class="btn btn-default btn-small">
                            <i class="icon-user"></i> <?php echo get_phrase('edit'); ?>
                        </a>   
                    </td>
                </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
        </div>
        
        <!-- End of BOX -->
    </div>
</div>
<!-- ENd of DATA TABLES -->
								</p>
						</div>
						<div class="tab-pane fade" id="add_new">
							<div class="divide-10"></div>
								<!----CREATION FORM STARTS---->
            <div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open('clients/my_shipments/create' , array('class' => 'form-horizontal validatable','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                    <form method="post" action="<?php echo base_url();?>index.php?clients/my_shipments/create/" class="form-horizontal validatable" enctype="multipart/form-data">
                        <div class="padded">
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('name');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="name"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('description');?></label>
                                <div class="controls">
                                    <input type="text" class="form-control datepicker" name="description"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('weight');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="weight"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('size');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="size"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('date_pickup_first');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="date_pickup_first"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('date_pickup_last');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="email"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('quantity');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="quantity"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('date_arrive_first');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="date_arrive_first"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('date_arrive_last');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="date_arrive_last"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('photo');?></label>
                                <div class="controls" style="width:210px;">
                                    <input type="file" class="" name="userfile" id="imgInp" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"></label>
                                <div class="controls" style="width:210px;">
                                    <img id="blah" src="<?php echo base_url();?>uploads/user.jpg" alt="your image" height="100" />
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-gray"><?php echo get_phrase('add_shipment');?></button>
                        </div>
                    </form>                
                </div>                
            </div>
            <!----CREATION FORM ENDS--->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>