<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("config.php");

$bulk = new MongoDB\Driver\BulkWrite;
 
if(isset($_POST['Submit'])) {    
    $px_record = array (
                        'px' => $_POST['id'],
                        'gender' => $_POST['gender'],
                        'race' => $_POST['race']
                       );
        
    // checking empty fields
    $errorMessage = '';
    foreach ($px_record as $key => $value) {
        if (empty($value)) {
            $errorMessage .= $key . ' field is empty<br />';
        }
    }
    
    if ($errorMessage) {
        // print error message & link to the previous page
        echo '<span style="color:red">'.$errorMessage.'</span>';
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";    
    } else {
        //insert data to database table/collection named 'users'
        $db->px_2->insertOne($px_record);
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>