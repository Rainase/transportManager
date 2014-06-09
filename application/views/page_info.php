
        
        
        <div class="page-title">
			<div>
          <div class="clearfix">
                    <h3 class="content-title pull-left"><?php echo $page_title;?></h3>
                  </div>
			</div>
		</div>
        <?php if($this->session->flashdata('flash_message') != ""):?>
 		<script>
			$(document).ready(function() {
				Growl.info({title:"<?php echo $this->session->flashdata('flash_message');?>",text:" "})
			});
		</script>
        <?php endif;?>