<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/grid.css" >
</head>
<body>
<div class="container">
<?php
require_once('../includes/database.php');
if(isset($_POST['sql'])) {
    $data_set = $db->query($_POST['sql']);
    if(gettype($data_set) != "boolean")
        while($row = $db->fetch_assoc($data_set)) {
            echo "<div class=\"row\">";
            foreach($row as $item=>$value) {
                echo "<div class=\"col-xs-3\">";
                echo $value;
                echo "</div>";
            }
            echo "</div>";
        }
} else {
    echo 'Wrong page';
}
?>
</div>
</body>
</html>
