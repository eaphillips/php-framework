 <?php

# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );


switch ( $route->getAction() ) {

  case 'display':
    /* debug
    print '<pre>';
    print 'In the display case';
    print '</pre>'; */

    # display all blog entries in shortened form
    # with buttons to view, change, or delete one entry
    # same as default case
    $dbObj = new db();
    $sql = "SELECT * FROM blog_entries";
    $dbObj->dbPrepare($sql);
    $dbObj->dbExecute([]);

    include( APP_VIEW .'/archive/archiveSubNav.php' );
    include( APP_VIEW .'/archive/archiveView.php' );
    break;

    case 'select':
      /* debug
      print '<pre>';
      print 'In the select case';
      print '</pre>'; */

      if (isset($_POST['submit']))
      {
        /* debug
        print 'In the select-if'; */

        # reshow archive
        $dbObj = new db();
        $sql = "SELECT * FROM blog_entries";
        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([]);

        include( APP_VIEW .'/archive/archiveSubNav.php' );
        include( APP_VIEW .'/archive/archiveView.php' );
        break;
      }
      else
      {
        /* debug
        print '<pre>';
        print 'In the select-else';
        print '</pre>'; */

        # get the correct ID # from nav
        $postId = $route->getParams()[2];

        /* debug
        print '<pre>';
        print 'Entry ID:';
        print_r($postId);
        print '</pre>'; */

        # get the correct db entry
        $dbObj = new db();
        $sql = "SELECT * FROM blog_entries WHERE id = ?";
        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([$postId]);
        $entry = $dbObj->dbFetch("assoc");

        include( APP_VIEW .'/archive/archiveSubNav.php' );
        include( APP_VIEW .'/archive/selectView.php' );
        break;
      }


  case 'change':
    /* debug
    print '<pre>';
    print 'In the change case';
    print '</pre>'; */

        if (isset($_POST['submit']))
         {
           /* debug
           print 'In the change-if'; */

           # get the correct ID # from nav
           $postId = $route->getParams()[2];

           /* debug
           print '<pre>';
           print 'Entry ID:';
           print_r($postId);
           print '</pre>'; */

           # open db connection and update entry
           $dbObj = new db();
           $sql = "UPDATE blog_entries SET title= ? WHERE id = ?;";
           $sql .= "UPDATE blog_entries SET entry= ? WHERE id = ?;";

           /* debug
           print 'SQL string: title and entry: ' . $sql; */
           $dbObj->dbPrepare($sql);
           $dbObj->dbExecute([$_POST['title'],$postId,$_POST['entry'],$postId]);

           # reshow archive
           $dbObj = new db();
           $sql = "SELECT * FROM blog_entries";
           $dbObj->dbPrepare($sql);
           $dbObj->dbExecute([]);

           include( APP_VIEW .'/archive/archiveSubNav.php' );
           include( APP_VIEW .'/archive/archiveView.php' );
           break;
      }


      else
      {
        /* debug
        print '<pre>';
        print 'In the change-else';
        print '</pre>'; */

        # get the correct ID # from nav
        $postId = $route->getParams()[2];

        /* debug
        print '<pre>';
        print 'Post ID:';
        print_r($postId);
        print '</pre>'; */

        # get the correct db entry; ask user to submit change
        $dbObj = new db();
        $sql = "SELECT * FROM blog_entries WHERE id = ?";
        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([$postId]);
        $entry = $dbObj->dbFetch("assoc");

        include( APP_VIEW .'/archive/archiveSubNav.php' );
        include( APP_VIEW .'/archive/changeView.php' );
        break;
      }

    case 'delete':
      /* debug
      print '<pre>';
      print 'In the delete case';
      print '</pre>'; */

      if (isset($_POST['submit']))
      {
        /* debug
        print 'In the delete-if'; */

        # get the correct ID # from nav
        $postId = $route->getParams()[2];

        /* debug
        print '<pre>';
        print 'Entry ID:';
        print_r($postId);
        print '</pre>'; */

        # open db connection and delete entry
        $dbObj = new db();
        $sql = "DELETE FROM blog_entries WHERE id = ?";
        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([$postId]);
        # reshow archive
        $dbObj = new db();
        $sql = "SELECT * FROM blog_entries";
        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([]);

        include( APP_VIEW .'/archive/archiveSubNav.php' );
        include( APP_VIEW .'/archive/archiveView.php' );
        break;
      }
      else
      {
        /* debug
        print '<pre>';
        print 'In the delete-else';
        print '</pre>'; */

        # get the correct ID # from nav
        $postId = $route->getParams()[2];

        /* debug
        print '<pre>';
        print 'Entry ID:';
        print_r($postId);
        print '</pre>'; */

        # get the correct db entry; ask user to confirm delete
        $dbObj = new db();
        $sql = "SELECT * FROM blog_entries WHERE id = ?";
        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([$postId]);
        $entry = $dbObj->dbFetch("assoc");

        include( APP_VIEW .'/archive/archiveSubNav.php' );
        include( APP_VIEW .'/archive/deleteView.php' );
        break;}

    default:
      /* debug
      print '<pre>';
      print 'In the default case';
      print '</pre>'; */

      # display all blog entries in shortened form
      # with buttons to view, change, or delete one entry
      # same as display case
      $dbObj = new db();
      $sql = "SELECT * FROM blog_entries";
      $dbObj->dbPrepare($sql);
      $dbObj->dbExecute([]);

      include( APP_VIEW .'/archive/archiveSubNav.php' );
      include( APP_VIEW .'/archive/archiveView.php' );
      break;

}

# Include html footer
include( APP_VIEW . '/footer.php' );

// Blog Functions
function displayEntry($entryText)
{
  if (100 < strlen($entryText))
  {
      return substr($entryText,0,100) . '...';
  }
  else
  {
    return $entryText;
  }
}
