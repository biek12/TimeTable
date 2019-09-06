<?php
/*$con = mysqli_connect('39.108.120.82:3306', 'time_comnod_com', 'eDttEa6XRGsDWG85', 'time_comnod_com');
if (!$con) {
    die('Could not connect!');
} else {
    echo 'success!';
}*/

// some code
//mysql_close($con);

if ($_REQUEST['id'] == null || $_REQUEST('id' == '')) {
    echo 'error';
} else {
    $id = $_REQUEST['id'];
    echo $id;
}