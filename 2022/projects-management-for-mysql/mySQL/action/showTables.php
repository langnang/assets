<?php

include_once '../sql/sqlHelper.php';


$database = htmlspecialchars($_POST["database"]);
connectDatabase($database);
$result = showTables($database);
if (!$result) {
    die("查询失败" . mysql_error());
} else {
    while ($array_table = mysql_fetch_assoc($result)) {
        echo "<button name='table'>" . $array_table["table_name"] . "</button>";
    }
}