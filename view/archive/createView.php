<!-- page content -->
<div class="col-md-9">
  <div class="well pageContent">

    <form method="post" action="<?php print APP_DOC_ROOT . '/create'; ?>">
      <div class="form-group">
        <label for="author">Author</label>
        <input type="text" class="form-control" id="author" name="author" value="Alisha Phillips">
      </div>
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" name="date">
      </div>
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
