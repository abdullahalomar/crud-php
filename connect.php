<?php

$con= mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'crud_operation');

if ($con) {
    // echo "connection seccessfully";
}
else {
    // echo "not cennected";
 }

?>