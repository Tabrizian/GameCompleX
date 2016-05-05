<?php
require_once('../includes/database.php');
if(isset($_POST['sql'])) {
    echo "<table>";
    $data_set = $db->query($_POST['sql']);
    while($row = $db->fetch_assoc($data_set)) {
        echo "<tr>";
        foreach($row as $item=>$value) {
            echo "<td>";
            echo $value;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo 'Wrong page';
}
?>
