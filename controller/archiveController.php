<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );


switch ( $route->getAction() )
{

  case 'change':

      if (isset($_POST['submit']))
      {
         $dbObj = new db();
         $sql = "UPDATE blog_entries SET title= ? WHERE id = ?;";
         $sql .= "UPDATE blog_entries SET entry= ? WHERE id = ?;";
         $dbObj->dbPrepare($sql);
         # temporarily pick random post 11 to change
         $dbObj->dbExecute([$_POST['title'],11,$_POST['entry'],11]);
         $entry = $dbObj->dbFetch("assoc");
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
        # get the correct entry
        #$postId = $route->getParams()[2];
        #$postId = $route->getParams();
        $dbObj = new db();
        $sql = "SELECT * FROM blog_entries WHERE id = ?";
        $dbObj->dbPrepare($sql);
        # temporarily pick random post 11 to change
        $dbObj->dbExecute([11]);
        #$dbObj->dbExecute([$entryId]);
        $entry = $dbObj->dbFetch("assoc");

        include( APP_VIEW .'/archive/archiveSubNav.php' );
        include( APP_VIEW .'/archive/changeView.php' );
        break;
      }


    case 'delete':

      if (isset($_POST['submit']))
      {
        $dbObj = new db();
        $sql = "DELETE FROM blog_entries WHERE id = ?";
        $dbObj->dbPrepare($sql);
        # temporarily pick random post 11 to delete
        $dbObj->dbExecute([11]);
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
        # get the correct entry and ask user to confirm delete
        $dbObj = new db();
        $sql = "SELECT * FROM blog_entries WHERE id = ?";
        $dbObj->dbPrepare($sql);
        # temporarily pick random post 11 to delete
        $dbObj->dbExecute([11]);
        $entry = $dbObj->dbFetch("assoc");
        include( APP_VIEW .'/archive/archiveSubNav.php' );
        include( APP_VIEW .'/archive/deleteView.php' );
        break;
      }

    default:
      # display all blog entries in shortened form
      # with link? or something to select one entry
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
