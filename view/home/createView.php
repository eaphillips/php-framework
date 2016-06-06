<!-- page content -->

<!-- this is the form to input a blog entry  -->
<!-- with simple validation (no field left empty) -->

<div class="col-md-9">
  <div class="well pageContent">

    <form method="post" action="<?php print APP_DOC_ROOT . '/home/create'; ?>" onsubmit="return validate(this)">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="entry">Entry</label>
        <textarea class="form-control" id="entry" name="entry"></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>

  </div>
</div>
<!-- end page content -->
