
<?php
//Including Database configuration file.
include "../database/db.php";
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
   $Name = $_POST['search'];
//Search query.
   $Query = "SELECT * FROM suggest_icon WHERE youricon LIKE '%$Name%' limit 10 ";
//Query execution
   $ExecQuery = MySQLi_query($conn, $Query);
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
   <option value="<?php echo $Result['youricon']; ?>" >
   <?php echo $Result['youricon']; ?>
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
      
   </option>
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
   <?php
}}
?>
</ul>