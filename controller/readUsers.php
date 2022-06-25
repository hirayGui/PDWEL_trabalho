<?php

include "db_conn.php";
$sql = "SELECT * FROM usuarios;
$result = mysqli_query($conn, $sql);