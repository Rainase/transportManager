<?php if($client_id != ""):?>
<div class="row">
    <div class="col-md-4 col-md-offset-3">
        <div class="box border inverse">
            <div class="box-title">
                <h4><i class="fa fa-info"></i></i> <?php echo get_phrase('select_category_to_see_the_list');?></h4>
            </div>
            <div class="box-body">
                <select name="client_id" onchange="window.location='<?php echo base_url();?>index.php/kuller/clients/'+this.value">
                    <option value=""><?php echo get_phrase('product_type');?></option>
                    <?php  $types = $this->db->get('product_type')->result_array();
                        foreach($types as $row): ?>
                    <option value="<?php echo $row['product_type_id'];?>" 
                        <?php if($client_id == $row['product_type_id'])echo 'selected';?>>
                        <?php echo $row['product_type_name'];?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
</div>

<!-- Amount of Clients seleced by Type -->

<?php if($client_id	!=	''):?>
<div class=" action-nav-button" style="width:150px;">
    <a class="btn btn-pink btn-icon input-block-level">
		<h4><i class="fa fa-users"></i></h4>
		<div><p>Total <?php echo count($clients);?> clients</p></div>
	</a>
</div>
<!-- END Amount of Clients seleced by Type -->

<!-- Begin of DATA TABLES -->
<div class="row">
    <div class="col-md-11">
        <!-- Begin BOX -->
        <div class="box border green">
            <div class="box-title">
                <h4><i class="fa fa-table"></i><?php echo get_phrase('client_list');?> / </h4><small><?php echo $row['product_type_name'];?></small>
                <div class="tools hidden-xs">
                    <a href="javascript:;" class="reload">
                        <i class="fa fa-refresh"></i>
                    </a>
                </div>
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
                <th><?php echo get_phrase('product_owner');?></th>
                <th><?php echo get_phrase('options');?></th>

            </tr>
        </thead>
        <tbody>
        <?php $count = 1;foreach($clients as $row):?>
                <tr>
                    <td><?php echo $row['product'];?></td>
                    <td><?php echo $row['weight'];?><small> kg</small></td>
                    <td><?php echo $row['quantity'];?><?php echo get_phrase('pieces');?></td>
                    <td><?php echo $row['date_dispatch_first'];?></td>
                    <td><?php echo $row['date_dispatch_last'];?></td>
                    <td><?php echo $row['owner'];?></td>
                    <td>
                        <a data-toggle="modal" href="#modal-form" onclick="modal('product_full_info',<?php echo $row['client_id'];?>)" class="btn btn-default btn-small">
                            <i class="icon-user"></i> <?php echo get_phrase('profile'); ?>
                        </a>   
                    </td>
                </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
        </div>
        <?php endif;?>
        <!-- End of BOX -->
    </div>
</div>
<!-- ENd of DATA TABLES -->

<!-- /CATEGoRY BOX BEGIN -->
<?php endif;?>
<?php if($client_id == ""):?>
<div class="row">
    <div class="col-md-4 col-md-offset-3">
        <div class="box border inverse">
            <div class="box-title">
                <h4><i class="fa fa-info"></i></i> <?php echo get_phrase('select_category_to_see_the_list');?></h4>
            </div>
            <div class="box-body">
                <select name="client_id" onchange="window.location='<?php echo base_url();?>index.php/kuller/clients/'+this.value">
                    <option value=""><?php echo get_phrase('product_type');?></option>
                    <?php  $types = $this->db->get('product_type')->result_array();
                        foreach($types as $row): ?>
                    <option value="<?php echo $row['product_type_id'];?>"
                        <?php if($client_id == $row['product_type_id'])echo 'selected';?>>
                        <?php echo $row['product_type_name'];?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
</div>
<!-- /CATEGoRY BOX END -->
            
<?php endif;?>