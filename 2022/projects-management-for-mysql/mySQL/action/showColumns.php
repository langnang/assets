<?php

include_once '../sql/sqlHelper.php';

$database = htmlspecialchars($_POST["database"]);
connectDatabase($database);

$table = htmlspecialchars($_POST["table"]);


$result_column = showColumns($table);
echo "<table id='" . $table . "' border='1'><tr>";
while ($array_column = mysql_fetch_assoc($result_column)) {
    echo( "<th name='column'>" . $array_column["COLUMN_NAME"] . "</th>");
}
echo"</tr>";

$result_data = getData($table);
while ($array_data = mysql_fetch_assoc($result_data)) {
    
    echo '<tr>';
    $result_column = showColumns($table);
    while ($array_column = mysql_fetch_assoc($result_column)) {
        echo( "<td>" . $array_data[$array_column["COLUMN_NAME"]] . "</td>");
    }
    echo '</tr>';
}
echo '</table>';



