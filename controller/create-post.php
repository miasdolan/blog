<?php
    //require database file in model folder 
    require_once(__DIR__ . "/../model/config.php");
    // open connection to database
   
    
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

    // ask database to insert post with title and post 
    $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");
    
   if($query){
       // if successful print out succcessfully inserted post 
     echo "<p>Successfully inserted post: $title</p>";
       }
     else {
         // if not succesful print out connection error 
         echo "<p>$connection->error</p>";
     }
   // close connection to databse 
   $connection->close();
   