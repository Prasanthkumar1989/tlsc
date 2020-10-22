<fieldset>
    <div class="form-group">
        <label for="timer">Time *</label>
          <input type="text" name="timer" value="<?php echo htmlspecialchars($edit ? $timer['timer'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Timer" class="form-control" required="required" id = "timer">
    </div> 

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <i class="glyphicon glyphicon-send"></i></button>
    </div>
</fieldset>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>
    <script>
    jQuery(function($) {
        $("#timer").datetimepicker({dateFormat:'yy-mm-dd'});
    });
  </script>