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
    <button class="button is-primary" id="add-btn" type="button">Add New Record</button>
    </div>
    <div id="tbl-format">
    <table class="table" id="example">
    <thead>
    <tr>
        <th>px</th>
        <th>Update</th>
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
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($cursor as $cur) {
        echo "<tr>";
        if (isset($cur['px'])) {
            echo "<td>".$cur['px']."</td>";
        } else {
            echo "<td></td>";
        }

        echo "<td><a href=\"edit.php?id=$cur[_id]\">Edit</a> | <a href=\"delete.php?id=$cur[_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        

        if (isset($cur['gender'])) {
            echo "<td>".$cur['gender']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['race'])) {
            echo "<td>".$cur['race']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['vital_status'])) {
            echo "<td>".$cur['vital_status']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['days_to_last_followup'])) {
            echo "<td>".$cur['days_to_last_followup']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['age_at_diagnosis'])) {
            echo "<td>".$cur['age_at_diagnosis']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['pathologic_T'])) {
            echo "<td>".$cur['pathologic_T']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['pathologic_N'])) {
            echo "<td>".$cur['pathologic_N']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['pathologic_M'])) {
            echo "<td>".$cur['pathologic_M']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['pathologic_stage'])) {
            echo "<td>".$cur['pathologic_stage']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['surgical_procedure_first'])) {
            echo "<td>".$cur['surgical_procedure_first']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['drug_name_1'])) {
            echo "<td>".$cur['drug_name_1']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['drug_name_2'])) {
            echo "<td>".$cur['drug_name_2']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['drug_name_3'])) {
            echo "<td>".$cur['drug_name_3']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['drug_name_4'])) {
            echo "<td>".$cur['drug_name_4']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['drug_name_5'])) {
            echo "<td>".$cur['drug_name_5']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['drug_name_6'])) {
            echo "<td>".$cur['drug_name_6']."</td>";
        } else {
            echo "<td></td>";
        }
        
        if (isset($cur['drug_name_7'])) {
            echo "<td>".$cur['drug_name_7']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['drug_name_8'])) {
            echo "<td>".$cur['drug_name_8']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['radiation_type_1'])) {
            echo "<td>".$cur['radiation_type_1']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['anatomic_treatment_site_1'])) {
            echo "<td>".$cur['anatomic_treatment_site_1']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Pathogenic_Chr_Pos_1'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_1']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Pathogenic_Chr_Pos_2'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_2']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Pathogenic_Chr_Pos_3'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_3']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Pathogenic_Chr_Pos_4'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_4']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Pathogenic_Chr_Pos_5'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_5']."</td>";
        } else {
            echo "<td></td>";
        }
        
        if (isset($cur['Pathogenic_Chr_Pos_6'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_6']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Pathogenic_Chr_Pos_7'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_7']."</td>";
        } else {
            echo "<td></td>";
        }
        
        if (isset($cur['Pathogenic_Chr_Pos_8'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_8']."</td>";
        } else {
            echo "<td></td>";
        }
        
        if (isset($cur['Pathogenic_Chr_Pos_9'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_9']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Pathogenic_Chr_Pos_10'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_10']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Pathogenic_Chr_Pos_11'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_11']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Pathogenic_Chr_Pos_12'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_12']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Pathogenic_Chr_Pos_13'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_13']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Pathogenic_Chr_Pos_14'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_14']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Pathogenic_Chr_Pos_15'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_15']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Pathogenic_Chr_Pos_16'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_16']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Pathogenic_Chr_Pos_17'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_17']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Pathogenic_Chr_Pos_18'])) {
            echo "<td>".$cur['Pathogenic_Chr_Pos_18']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_1_RPKM_1'])) {
            echo "<td>".$cur['Exon_1_RPKM_1']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_2_RPKM_2'])) {
            echo "<td>".$cur['Exon_2_RPKM_2']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_3_RPKM_3'])) {
            echo "<td>".$cur['Exon_3_RPKM_3']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_4_RPKM_4'])) {
            echo "<td>".$cur['Exon_4_RPKM_4']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_5_RPKM_5'])) {
            echo "<td>".$cur['Exon_5_RPKM_5']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_6_RPKM_6'])) {
            echo "<td>".$cur['Exon_6_RPKM_6']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_7_RPKM_7'])) {
            echo "<td>".$cur['Exon_7_RPKM_7']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_8_RPKM_8'])) {
            echo "<td>".$cur['Exon_8_RPKM_8']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_9_RPKM_9'])) {
            echo "<td>".$cur['Exon_9_RPKM_9']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_10_RPKM_10'])) {
            echo "<td>".$cur['Exon_10_RPKM_10']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_11_RPKM_11'])) {
            echo "<td>".$cur['Exon_11_RPKM_11']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_12_RPKM_12'])) {
            echo "<td>".$cur['Exon_12_RPKM_12']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_13_RPKM_13'])) {
            echo "<td>".$cur['Exon_13_RPKM_13']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_14_RPKM_14'])) {
            echo "<td>".$cur['Exon_14_RPKM_14']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_15_RPKM_15'])) {
            echo "<td>".$cur['Exon_15_RPKM_15']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_16_RPKM_16'])) {
            echo "<td>".$cur['Exon_16_RPKM_16']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_17_RPKM_17'])) {
            echo "<td>".$cur['Exon_17_RPKM_17']."</td>";
        } else {
            echo "<td></td>";
        }

        if (isset($cur['Exon_18_RPKM_18'])) {
            echo "<td>".$cur['Exon_18_RPKM_18']."</td>";
        } else {
            echo "<td></td>";
        }
    }
    ?>
    </tbody></table>
    </div>
</body>

<script type="text/javascript">
    $(document).ready(function () {
        $('#example').DataTable({
            responsive: true,
            columnDefs: [ { "className": "dt-center", "targets": "_all", "type": 'natural' } ],
        });
    });

    document.getElementById("add-btn").onclick = function () {
        location.href = "add.html";
    };
</script>