<?php

/**
 * The PHP panel template
 */
?>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="info-box">
            <span class="info-box-icon bg-aqua">
              <i class="fa fa-files-o"></i>
            </span>
			<div class="info-box-content">
				<p>CLI PHP Version:</p>
				<div class="btn-group">
					<span><button type="button" class="btn btn-success" data-url="/v1/box/processvm/php5.6" data-method="put">PHP 5.6</button></span>
					<span><button type="button" class="btn btn-success" data-url="/v1/box/processvm/php7.0" data-method="put">PHP 7.0</button></span>
				</div>
				<div>
					<p>Current CLI PHP version:</p>
					<div class="current-processvm"></div>
				</div>
			</div>
		</div>
	</div>

</div>
