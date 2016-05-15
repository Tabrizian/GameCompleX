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
    if(gettype($data_set) != "boolean") {
        $attribute_list = mysqli_fetch_fields($data_set);

        if($attribute_list) {
            echo "<div class=\"row\">";
            foreach($attribute_list as $val) {
                echo "<div class=\"col-xs-1\" style=\"background-color: #C0C0C0;\">";
                echo $val->name;
                echo "</div>";
            }
            echo "</div>";
        }
        if(gettype($data_set) != "boolean") {
            while($row = $db->fetch_assoc($data_set)) {
                echo "<div class=\"row\">";
                foreach($row as $item=>$value) {
                    echo "<div class=\"col-xs-1\">";
                    echo $value;
                    echo "</div>";
                }
                echo "</div>";
            }

        }
    } else {
        if($data_set){
            echo "Success!";
        }
    }
} else {
    echo 'Wrong page';
}
?>
</div>
</body>
</html>
