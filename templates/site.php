<?php

/**
* The Site panel template
*/
$site_id = filter_input(INPUT_GET, 'site_name', FILTER_SANITIZE_STRING);
print_r($_GET);?>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="info-box">
            <span class="info-box-icon bg-aqua">
              <i class="fa fa-files-o"></i>
            </span>
<p><?php echo $site_id; ?></p>
			<div class="info-box-content">
				<div class="btn-group">
					<span><button type="button" class="btn btn-success" data-url="/v1/box/site-backup/<?php echo $site_id;?>" data-method="post">Backup Site</button></span>
					<span><button type="button" class="btn btn-warning" data-url="/v1/box/site-delete/<?php echo $site_id; ?>" data-method="post">Delete Site</button></span>
				</div>
			</div>
		</div>
	</div>

</div>
