//code for createdb.php file

<?php // createdb.php
  try
  {

  include('connection.php');

    //create the database table
    $db->exec("CREATE TABLE IF NOT EXISTS Dogs (Id INTEGER PRIMARY KEY, Breed TEXT, Name TEXT, Age INTEGER)");    

    // close the database connection
    $db = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }
?>
