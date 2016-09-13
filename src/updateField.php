<div class="fileinput fileinput-exists" data-provides="fileinput" style="width:100%; height:100%; min-height:200px;">
  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width:100%; height:100%; min-height:200px;">
    <img src=<?php echo $image; ?>>
  </div>
  <div>
    <span class="btn btn-primary btn-file">
      <span class="fileinput-new">Select image</span>
      <span class="fileinput-exists">Change</span>
      <input type="hidden" value="" name=""><input type="file" name="<?php echo $name; ?>">
    </span>
  </div>
</div>
