<?php 
//Including Database configuration file.
  include "db.php";
/*include "db.php";
$con = MySQLi_connect("localhost","root","","demo");
 
 
 
//Check connection
 
if (MySQLi_connect_errno()) {
 
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
 
}


//Getting value of "search" variable from "script.js".*/

  if (isset($_POST['search'])) {

//Search box value assigning to $Name variable.

   $Name = $_POST['search'];

//Search query.

   $Query = "SELECT patnum FROM signup WHERE (`email` LIKE '%".$Name."%') || (`first_name` LIKE '%".$Name."%') || (`last_name` LIKE '%".$Name."%') LIMIT 5";
  # $Query = "SELECT name FROM sample WHERE name LIKE '%$Name%'  LIMIT 5";

//Query execution

   $ExecQuery = MySQLi_query($conn, $Query);
   if(mysqli_num_rows ($ExecQuery) > 0)
   {
//Creating unordered list to display result.

     echo '

     <ul>

     ';

   //Fetching result from database.

     while ($Result = MySQLi_fetch_array($ExecQuery)) {

       ?>

   <!-- Creating unordered list items.
 
        Calling javascript function named as "fill" found in "script.js" file.
 
        By passing fetched result as parameter. -->

        <li onclick='fill("<?php echo $Result['patnum']; ?>")'>

         <a>

           <!-- Assigning searched result in "Search box" in "search.php" file. -->

           <?php echo $Result['patnum']; ?>

         </li></a>
         <!-- Below php code is just for closing parenthesis. Don't be confused. -->

         <?php

       }}}



       ?>

     </ul>