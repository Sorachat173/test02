<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabfinal.mysql.database.azure.com', 'it63070113', 'EMLcnk22', 'labitf', 3306);
if(mysqli_connect_errno($conn)){
    echo "connect fail".mysqli_connect_error();
}
?>