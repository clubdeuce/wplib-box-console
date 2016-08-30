<?php

/**
 * The database admin panel template
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
					<span><button type="button" class="btn btn-success" data-url="/v1/box/database/backup" data-method="post">Backup Database</button></span>
					<form>
						<button type="button" id="db-import-submit" class="btn btn-warning" data-url="/v1/box/database/import" data-method="post">Import Database</button>
						<label for="db-import-file">File name:</label>
						<input type="text" name="db-import-file" id="db-import-file">
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
