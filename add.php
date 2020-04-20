<html>
<head>
    <title>Add Data</title>

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
<?php
//including the database connection file
include_once("config.php");
 
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
        echo '<h2 class="title is-2">' . $errorMessage . '</h2><br /><br />';
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";    
    } else {
        $db->px_2->insertOne($px_record);
        
        //display success message
        echo '<div class="success-msg"><h2>Data added successfully!</h2></div><br /><br />';
        echo '<div class="header"><button class="button is-primary" type="button" id="view-result">View Result</button></div>';
    }
}
?>
</body>
</html>

<script type="text/javascript">
    document.getElementById("view-result").onclick = function () {
        location.href = "index.php";
    };
</script>