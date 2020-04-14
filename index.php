<?php
//including the database connection file
include_once("config.php");

$filter = array(); 
$options = array(
    "sort" => array("px" => 1),
    "collation" => array("locale" => "en_US", "numericOrdering" => true)
);
// select data in ascending order from table/collection "px_2" (alphanumeric sort on column `px`)
$cursor = $db->px_2->find($filter, $options);
?>
 
<html>
<head>
    <title>Home</title>
<!--     <link rel="stylesheet" type="text/css" href="node_modules/datatables/media/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

<!--     <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
 --> 
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
    <script src="js/natural.js"></script>
</head>
 
<body>
<a href="add.html">Add new record</a><br/><br/>
   <table id="example" class="table table-striped table-bordered" style="width:100%" id="example">
    <thead>
    <tr>
        <th>px</th>
        <th>Gender</th>
        <th>Race</th>
        <th>Vital Status</th>
        <th>Days to Last Follow-up</th>
        <th>Age at Diagnosis</th>
        <th>Pathologic_T</th>
        <th>Pathologic_N</th>
        <th>Pathologic_M</th>
        <th>Pathologic Stage</th>
        <th>Surgical Procedure First</th>
        <th>Drug Name 1</th>
        <th>Drug Name 2</th>
        <th>Drug Name 3</th>
        <th>Drug Name 4</th>
        <th>Drug Name 5</th>
        <th>Drug Name 6</th>
        <th>Drug Name 7</th>
        <th>Drug Name 8</th>
        <th>Radiation Type</th>
        <th>Anatomic Treatment Site</th>
        <th>Patholgenic Chr Position 1</th>
        <th>Patholgenic Chr Position 2</th>
        <th>Patholgenic Chr Position 3</th>
        <th>Patholgenic Chr Position 4</th>
        <th>Patholgenic Chr Position 5</th>
        <th>Patholgenic Chr Position 6</th>
        <th>Patholgenic Chr Position 7</th>
        <th>Patholgenic Chr Position 8</th>
        <th>Patholgenic Chr Position 9</th>
        <th>Patholgenic Chr Position 10</th>
        <th>Patholgenic Chr Position 11</th>
        <th>Patholgenic Chr Position 12</th>
        <th>Patholgenic Chr Position 13</th>
        <th>Patholgenic Chr Position 14</th>
        <th>Patholgenic Chr Position 15</th>
        <th>Patholgenic Chr Position 16</th>
        <th>Patholgenic Chr Position 17</th>
        <th>Patholgenic Chr Position 18</th>
        <th>Exon 1 RPKM 1</th>
        <th>Exon 2 RPKM 2</th>
        <th>Exon 3 RPKM 3</th>
        <th>Exon 4 RPKM 4</th>
        <th>Exon 5 RPKM 5</th>
        <th>Exon 6 RPKM 6</th>
        <th>Exon 7 RPKM 7</th>
        <th>Exon 8 RPKM 8</th>
        <th>Exon 9 RPKM 9</th>
        <th>Exon 10 RPKM 10</th>
        <th>Exon 11 RPKM 11</th>
        <th>Exon 12 RPKM 12</th>
        <th>Exon 13 RPKM 13</th>
        <th>Exon 14 RPKM 14</th>
        <th>Exon 15 RPKM 15</th>
        <th>Exon 16 RPKM 16</th>
        <th>Exon 17 RPKM 17</th>
        <th>Exon 18 RPKM 18</th>
        <th>Update</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($cursor as $cur) {
        echo "<tr>";
        echo "<td>".$cur['px']."</td>";
        echo "<td>".$cur['gender']."</td>";
        echo "<td>".$cur['race']."</td>";
        echo "<td>".$cur['vital_status']."</td>";
        echo "<td>".$cur['days_to_last_followup']."</td>";
        echo "<td>".$cur['age_at_diagnosis']."</td>";
        echo "<td>".$cur['pathologic_T']."</td>";
        echo "<td>".$cur['pathologic_N']."</td>";
        echo "<td>".$cur['pathologic_M']."</td>";
        echo "<td>".$cur['pathologic_stage']."</td>";
        echo "<td>".$cur['surgical_procedure_first']."</td>";
        echo "<td>".$cur['drug_name_1']."</td>";
        echo "<td>".$cur['drug_name_2']."</td>";
        echo "<td>".$cur['drug_name_3']."</td>";
        echo "<td>".$cur['drug_name_4']."</td>";
        echo "<td>".$cur['drug_name_5']."</td>";
        echo "<td>".$cur['drug_name_6']."</td>";
        echo "<td>".$cur['drug_name_7']."</td>";
        echo "<td>".$cur['drug_name_8']."</td>";
        echo "<td>".$cur['radiation_type_1']."</td>";
        echo "<td>".$cur['anatomic_treatment_site_1']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_1']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_2']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_3']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_4']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_5']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_6']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_7']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_8']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_9']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_10']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_11']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_12']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_13']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_14']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_15']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_16']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_17']."</td>";
        echo "<td>".$cur['Pathogenic_Chr_Pos_18']."</td>";
        echo "<td>".$cur['Exon_1_RPKM_1']."</td>";
        echo "<td>".$cur['Exon_2_RPKM_2']."</td>";
        echo "<td>".$cur['Exon_3_RPKM_3']."</td>";
        echo "<td>".$cur['Exon_4_RPKM_4']."</td>";
        echo "<td>".$cur['Exon_5_RPKM_5']."</td>";
        echo "<td>".$cur['Exon_6_RPKM_6']."</td>";
        echo "<td>".$cur['Exon_7_RPKM_7']."</td>";
        echo "<td>".$cur['Exon_8_RPKM_8']."</td>";
        echo "<td>".$cur['Exon_9_RPKM_9']."</td>";
        echo "<td>".$cur['Exon_10_RPKM_10']."</td>";
        echo "<td>".$cur['Exon_11_RPKM_11']."</td>";
        echo "<td>".$cur['Exon_12_RPKM_12']."</td>";
        echo "<td>".$cur['Exon_13_RPKM_13']."</td>";
        echo "<td>".$cur['Exon_14_RPKM_14']."</td>";
        echo "<td>".$cur['Exon_15_RPKM_15']."</td>";
        echo "<td>".$cur['Exon_16_RPKM_16']."</td>";
        echo "<td>".$cur['Exon_17_RPKM_17']."</td>";
        echo "<td>".$cur['Exon_18_RPKM_18']."</td>";
        echo "<td><a href=\"edit.php?id=$cur[_id]\">Edit</a> | <a href=\"delete.php?id=$cur[_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    }
    ?>
    </tbody></table>
</body>

<script type="text/javascript">
    $(document).ready( function () {
        $('#example').DataTable({
            columnDefs: [ { targets: 0, type: 'natural' } ],
            scrollX: true
        });
    } );
</script>