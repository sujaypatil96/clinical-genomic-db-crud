<?php
//including the database connection file
include_once("config.php");

$filter = array(); 
$options = array(
    "sort" => array("px" => 1),
    "collation" => array("locale" => "en_US", "numericOrdering" => true)
);
// select data in descending order from table/collection "users"
$cursor = $db->px_2->find($filter, $options);
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.html">Add New Data</a><br/><br/>
 
    <table width='80%' border=0>
 
    <tr bgcolor='#CCCCCC'>
        <td>Id</td>
        <td>Gender</td>
        <td>Race</td>
        <td>Update</td>
    </tr>
    <?php     
    foreach ($cursor as $res) {
        echo "<tr>";
        echo "<td>".$res['px']."</td>";
        echo "<td>".$res['gender']."</td>";
        echo "<td>".$res['race']."</td>";    
        echo "<td><a href=\"edit.php?id=$res[_id]\">Edit</a> | <a href=\"delete.php?id=$res[_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    }
    ?>
    </table>
</body>