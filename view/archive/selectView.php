<!-- page content -->

<!-- this is the select view which displays the complete  -->
<!-- text of a longer single entry, with a done button  -->


       <div class="col-md-9">
         <div class="pageContent">

           <h4><?php print $entry['title']; ?></h4>

           <p><?php print $entry['entry']; ?></p>

           <small>Posted: <?php print $entry['entry_date']; ?></small>

           <form method="post" action="<?php print APP_DOC_ROOT . '/archive/select/' . $entry['id']; ?>">
              <button type="submit" name="submit" class="btn btn-primary">Done</button>
           </form>

         </div>
       </div>
       
<!-- end page content -->
