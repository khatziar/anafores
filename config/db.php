<<<<<<< HEAD
<?php
  $host =  'localhost';
  $user = 'root';
  $password = '';
  $dbname = 'anaforesdb';

  // Set DSN
  $dsn = 'mysql:host='. $host .';dbname='. $dbname;

  try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    //echo 'Connection Successfully';
  } catch (PDOException $e) {
    echo 'Connection failed:'.$e->getMessage();
  }

  
  
  
  ?>
=======
<?php
  $host =  'localhost';
  $user = 'root';
  $password = '';
  $dbname = 'anaforesdb';

  // Set DSN
  $dsn = 'mysql:host='. $host .';dbname='. $dbname;

  try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    //echo 'Connection Successfully';
  } catch (PDOException $e) {
    echo 'Connection failed:'.$e->getMessage();
  }

  
  
  
  ?>
>>>>>>> 87166af7471c7de14ce91da385b2353d3a243608
