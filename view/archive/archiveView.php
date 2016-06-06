<!-- page content -->
<!-- this is the default/display view which displays all blog entries in shortened form -->
       <div class="col-md-9">
         <div class="pageContent">

           <?php while($entry = $dbObj->dbFetch("assoc")) { ?>
              <h4>
              <!-- print db ID# for debugging purposes -->
              <!-- <?php print $entry['id']; ?> -->

                <?php print $entry['title']; ?>
              </h4>

              <p>
                <?php print displayEntry($entry['entry']); ?>

                <!-- <a class="btn btn-link btn-xs" href="<?php print APP_DOC_ROOT . '/archive/select/' . $entry['id']; ?>">more</a> -->
                <a class="<?php
                if (strlen($entry['entry']) > 100)
                {
                  print 'btn btn-link btn-xs';
                }
                else
                {
                  print 'btn hide';
                } ?>" href="<?php print APP_DOC_ROOT . '/archive/select/' . $entry['id']; ?>">more</a>

              </p>

              <small>Posted: <?php print $entry['entry_date']; ?></small>

              <!-- 3 buttons to allow selection of post to view, change or delete -->
              <!--<a class="btn btn-default btn-xs" href="<?php print APP_DOC_ROOT . '/archive/select/' . $entry['id']; ?>">View</a> -->
              <a class="btn btn-default btn-xs" href="<?php print APP_DOC_ROOT . '/archive/change/' . $entry['id']; ?>">Change</a>
              <a class="btn btn-default btn-xs" href="<?php print APP_DOC_ROOT . '/archive/delete/' . $entry['id']; ?>">Delete</a>
              <br><br>
           <?php } ?>

         </div>
       </div>
       <!-- end page content -->
