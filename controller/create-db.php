<?php

  // brings dadtbase.php file to this page by using the require_once function 
    require_once(__DIR__ . "/../model/database.php");

  //creates a connection to localhost
    $connection = new mysqli($host, $username, $password);
    
   // checks connection for error 
    if ($connection->connect_error) {
        // if theres an error the connection dies 
        die ("<p>Error:" . $connection->connect_error . "</p>");
   }
 
   // create a database called exists
   $exists = $connection->select_db($database);
   
   
   // if database does not exists, 
    if(!$exists) {
       
    //then create a databse     
        $query = $connection->query("CREATE DATABASE $database");
       
        if($query) {
           
     // print out success        
            echo "<p>Successfully created database: " . $database . "</p>";
        }
    }
    // print out database already exists
    else {
        echo "<p>Database already exists.</p> ";
    }
     //create a query/commmand and this query is gonna ceate a table
    //use table to put information on the database
    //the table post must have id,tiltle, and post text
    //have different int, text, and none of them can not be empty/null   
    $query = $connection->query("CREATE TABLE posts ("
            . "id int (11) NOT NULL AUTO_INCREMENT, "
            . "title varchar (255) NOT NULL,"
            . "post text NOT NULL,"
            . "PRIMARY KEY (id) ) ");
    

    
    //check to see if query succesfully created at table
    if($query) {
    // successfully created a table
        echo "<p>Succesfully created table: posts</p>";
    }
    else {
    //error not succesfull
        echo "<p>$connection->error</p>";
    }
    // close the connection     
        $connection->close();
            