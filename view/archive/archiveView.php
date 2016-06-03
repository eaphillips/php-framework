<!-- page content -->
<!-- this is the default view which displays all blog entries in shortened form -->
       <div class="col-md-9">
         <div class="pageContent">

           <?php while($entry = $dbObj->dbFetch("assoc")) { ?>
              <h4>
              <?php print $entry['id']; ?>

<!-- <a href="<?php echo APP_DOC_ROOT . '/archive/displayView/' . $entry['id']; ?>" > <?php print $entry['title']; ?> </a>-->
              <?php print $entry['title']; ?>
              </h4>
              <!-- <button id= "select" type="submit" name="submit" class="btn btn-default" onclick="select(<?php print $entry['id']; ?>)" ><?php print $entry['title']; ?></button>-->
             <p><?php print displayEntry($entry['entry']); ?></p>
             <small>Posted: <?php print $entry['entry_date']; ?></small>
             <br><br>
           <?php } ?>

         </div>
       </div>
       <!-- end page content -->
