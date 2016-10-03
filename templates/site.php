<?php

/**
* The Site panel template
*/
$site_id = filter_input(INPUT_GET, 'site_name', FILTER_SANITIZE_STRING);
?>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="info-box">
            <span class="info-box-icon bg-aqua">
              <i class="fa fa-files-o"></i>
            </span>

			<div class="info-box-content">
				<div class="btn-group">
					<span><button type="button" class="btn btn-success" data-url="/v1/site/<?php echo $site_id;?>/backup" data-method="post">Backup Site</button></span>
					<span><button type="button" class="btn btn-warning" data-url="/v1/site/<?php echo $site_id; ?>/delete" data-method="post">Delete Site</button></span>
				</div>
			</div>
		</div>
	</div>

</div>
