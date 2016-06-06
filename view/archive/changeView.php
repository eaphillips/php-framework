<!-- page content -->

<!-- this is the change view which displays a single entry  -->
<!-- in a form prepopulated with the current info, and with  -->
<!-- a submit button to confirm    -->

<div class="col-md-9">
  <div class="well pageContent">

      <form method="post" action="<?php echo APP_DOC_ROOT . '/archive/change/' . $entry['id']; ?>" onsubmit="return validate(this)">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="<?php print $entry['title']; ?>">
        </div>
        <div class="form-group">
          <label for="entry">Entry</label>
          <textarea class="form-control" id="entry" name="entry" ><?php print $entry['entry']; ?></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </form>

  </div>
</div>
<!-- end page content -->
