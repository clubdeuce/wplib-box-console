<?php

/**
 * The add site template
 */
?>
<form>
    <label for="site-name">Site Name</label>
    <input type="text" name="site-name" placeholder="example.box">
    <button type="button" id="add-new-site" class="btn btn-success" data-url="/v1/site/add" data-method="post">Add Site</button>
</form>
