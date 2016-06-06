<!-- page content -->

<!-- this is the delete view which displays a single entry  -->
<!-- with a delete button to confirm    -->
       <div class="col-md-9">
         <div class="pageContent">

             <h4><?php print $entry['title']; ?></h4>

             <p><?php print $entry['entry']; ?></p>

             <small>Posted: <?php print $entry['entry_date']; ?></small>

             <form method="post" action="<?php print APP_DOC_ROOT . '/archive/delete/' . $entry['id']; ?>">
                <button type="submit" name="submit" class="btn btn-danger">Delete?</button>
             </form>

          </div>
       </div>
       <!-- end page content -->
