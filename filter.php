
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM 'stationary' WHERE CONCAT('subject','year','filename') LIKE '%".$valueToSearch."%'" ;
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `stationary`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "spardha");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="filter.php" method="post">
           
            <div class="topnav">
			<div class="search-container">
    <form action="filter.php">
      <input type="text" placeholder="Search.." name="valueToSearch">
      <button type="submit" name="search"><i class="fa fa-search"></i></button>
    </form>
  </div></div>
            <table>
                <tr>
                    <th>subject</th>
                    <th>year</th>
                    <th>filename</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['subject'];?></td>
                    <td><?php echo $row['year'];?></td>
                    <td><?php echo $row['filename'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>


