<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
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
        //updating the 'users' table/collection
        $db->users->update(
                        array('_id' => new MongoId($id)),
                        array('$set' => $px_record)
                    );
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
} // end if $_POST
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = $db->px_2->findOne(array('_id' => new MongoDB\BSON\ObjectId($id)));
 
$px = $result['px'];
$gender = $result['gender'];
$race = $result['race'];
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>px</td>
                <td><input type="text" name="id" value="<?php echo $px;?>"></td>
            </tr>
            <tr> 
                <td>Gender</td>
                <td><input type="text" name="gender" value="<?php echo $gender;?>"></td>
            </tr>
            <tr> 
                <td>Race</td>
                <td><input type="text" name="race" value="<?php echo $race;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>