<!-- js code to validate form data -->

<!-- <script src="/blog-project/js/validate.js"></script>-->
<script src="<?php print APP_JSCRIPT . '/validate.js'; ?>"></script>

<!-- page content -->
<div class="col-md-9">
  <div class="well pageContent">

    <form method="post" action="<?php print APP_DOC_ROOT . '/home/create'; ?>" onsubmit="return validate(this)">
      <!-- date defaults to current date on create
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" name="date">
      </div>
       -->
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
