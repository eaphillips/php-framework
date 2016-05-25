<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

switch ( $route->getAction() ) {

    case 'change':
      #if (isset($_POST['submit'])) {
      #  print '<pre>';
      #  print_r($_POST);
      #  print '</pre>';
      #} else {
        include( APP_VIEW .'/archive/archiveSubNav.php' );
        include( APP_VIEW .'/archive/archiveView.php' );
      #}
        break;

    case 'delete':
        include( APP_VIEW .'/home/homeSubNav.php' );
        include( APP_VIEW .'/home/homeView.php' );
        break;

    default:
    print '<pre>';
    print_r("in archive controller default case");
    print '</pre>';
      $dbObj = new db();
      print '<pre>';
      print_r($dbObj);
      print '</pre>';
      $sql = "SELECT * FROM blog_entries";
      $dbObj->dbPrepare($sql);
      $dbObj->dbExecute([]);
      include( APP_VIEW .'/archive/archiveSubNav.php' );
      include( APP_VIEW .'/archive/archiveView.php' );
      break;

}


# Include html footer
include( APP_VIEW . '/footer.php' );
