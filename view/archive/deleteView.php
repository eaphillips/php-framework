<!-- page content -->
<!-- this is the delete view which displays a single entry  -->
       <div class="col-md-9">
         <div class="pageContent">


                             <h4>
                              <!-- <a href="<?php echo APP_DOC_ROOT . '/archive/modifyView/' . $entry['id']; ?>"> -->
                              <!--    <?php print $entry['title']; ?> -->
                               <!-- </a> -->
                               <!-- <a href="<?php echo APP_DOC_ROOT . '/archive/archiveView/' . $entry['id']; ?>"> -->
                              <!--    <?php print $entry['title']; ?> -->
                               <!-- </a> -->
                               <?php print $entry['title']; ?>
                             </h4>

                             <!--<p><?php print displayEntry($entry['entry']); ?></p>-->

                             <p><?php print $entry['entry']; ?></p>
                             <small>Posted: <?php print $entry['entry_date']; ?></small>
                             <br><br>
                             <form method="post" action="<?php print APP_DOC_ROOT . '/archive/delete'; ?>">
                               <button type="submit" name="submit" class="btn btn-primary">Delete?</button>
                             </form>
          </div>
       </div>
       <!-- end page content -->
