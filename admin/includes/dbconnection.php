<?php 
// DB credentials.
define('DB_HOST','database-2.csnql2pkuxse.eu-west-1.rds.amazonaws.com');
define('DB_USER','admin');
define('DB_PASS','pulchritude');
define('DB_NAME','hbmsdb');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
