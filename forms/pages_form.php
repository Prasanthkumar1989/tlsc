<fieldset>
    <div class="form-group">
        <label for="name">Name *</label>
          <input type="text" name="name" value="<?php echo htmlspecialchars($edit ? $page['name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Name" class="form-control" required="required" id = "name">
    </div> 

    <div class="form-group">
        <label for="url_link">URL *</label>
        <input type="text" name="url_link" value="<?php echo htmlspecialchars($edit ? $page['url_link'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="url link" class="form-control" required="required" id="url_link">
    </div>



    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <i class="glyphicon glyphicon-send"></i></button>
    </div>
</fieldset>
