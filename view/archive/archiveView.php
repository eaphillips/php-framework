
        <!-- page content -->
        <div class="col-md-9">
          <div class="well pageContent">
            <table class="table table-striped table-condensed table-hover">
              <thead>
                <tr>
                  <th>Category</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Qty</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>

<?php while($entry = $dbObj->dbFetch("assoc")) { ?>
                <tr>
                  <td><?php print $entry['id']; ?></td>
                  <td><?php print $entry['date']; ?></td>
                  <td><?php print $entry['title']; ?></td>
                  <td><?php print $entry['text']; ?></td>
                </tr>
<?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- end page content -->
