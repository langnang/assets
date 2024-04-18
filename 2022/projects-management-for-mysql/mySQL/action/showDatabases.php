<?php



include_once '../sql/sqlHelper.php';

$server= htmlspecialchars($_POST["server"]);
$user=htmlspecialchars($_POST["user"]);
$pwd=htmlspecialchars($_POST["pwd"]);

conServer($server, $user, $pwd);
$result=showDatabases();
while($array_database=mysql_fetch_assoc($result)){
    echo "<button name='database'>".$array_database["SCHEMA_NAME"]."</button><div id='".$array_database["SCHEMA_NAME"]."'></div>";
}