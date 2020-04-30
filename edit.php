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
        $db->px_2->update(
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
    <link rel="stylesheet" type="text/css" href="css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bulma.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="js/natural.js"></script>
    <script src="js/dataTables.bulma.min.js"></script>
</head>
 
<body>
    <div class="header">
        <button class="button is-primary" id="home-btn" type="button">Home</button>
    </div>
    <br/><br/>

    <div class="add-form">  
    <form action="edit.php" method="post">
        <div class="field">
            <label class="label">Px id</label>
            <div class="control">
                <input class="input is-small" type="text" name="id" value="<?php echo $px;?>">
            </div>
        </div>

        <div class="field">
            <label class="label">Gender</label>
            <div class="control">
                <input class="input is-small" type="text" name="gender" value="<?php echo $gender;?>">
            </div>
        </div>

        <div class="field">
            <label class="label">Race</label>
            <div class="control">
                <input class="input is-small" type="text" name="race" value="<?php echo $race;?>">
        </div>

        <br />

        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>

        <div class="control">
            <button class="button is-link" name="update">Update</button>
        </div>
    </div>

</body>
</html>

<script type="text/javascript">
    document.getElementById("home-btn").onclick = function () {
        location.href = "index.php";
    };
</script>