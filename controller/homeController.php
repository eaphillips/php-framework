<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

switch ( $route->getAction() ) {

    case 'create':

      if (isset($_POST['submit']))
       {

         // Create database connection
                 $dbObj = new db();
                 // Insert new entry into DB
                 $sql = "INSERT INTO blog_entries
                         (entry_date, title, entry)
                         VALUES
                         (?, ?, ?)";
                 $dbObj->dbPrepare($sql);
                 $dbObj->dbExecute([
                   date('Y-m-d'),
                   $_POST['title'],
                   $_POST['entry']
                 ]);
                 include( APP_VIEW .'/home/homeSubNav.php' );
                 include( APP_VIEW .'/home/createView.php' );

      } else {

        include( APP_VIEW .'/home/homeSubNav.php' );
        include( APP_VIEW .'/home/createView.php' );
      }
        break;


    default:

        include( APP_VIEW .'/home/homeSubNav.php' );
        include( APP_VIEW .'/home/createView.php' );
        break;
}


# Include html footer
include( APP_VIEW . '/footer.php' );
