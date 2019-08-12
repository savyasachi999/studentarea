
<?php


if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = " SELECT * FROM stationary WHERE productname like '%".$valueToSearch."%' " ;
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
        
    </head>
    <body style="background-color:skyblue">
    <center>
    <h1>Your Search Results</h1>
<table border="1">
                <tr>
                    <th>product name</th>
                    <th>price</th>
                    <th>filename</th>
                </tr>

<?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['productname'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo $row['filename'];?></td>
                </tr>
                <?php endwhile;?>
</table></center>
</form>
</body>
</html>