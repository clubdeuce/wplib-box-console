<?php

/**
* The Object caches panel template
*/
?>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="info-box">
            <span class="info-box-icon bg-aqua">
              <i class="fa fa-files-o"></i>
            </span>
			<div class="info-box-content">
				<div class="btn-group">
					<span><button type="button" class="btn btn-warning" data-url="/v1/box/cache/flush" data-method="post">Flush Caches</button></span>
					<span><button type="button" class="btn btn-success" data-url="/v1/box/object-cache/enable" data-method="put">Enable Object Caching</button></span>
					<span><button type="button" class="btn btn-success" data-url="/v1/box/object-cache/disable" data-method="put">Disable Object Caching</button></span>
				</div>
			</div>
		</div>
	</div>

</div>