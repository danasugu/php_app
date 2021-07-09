<?

//data source name
$dsn = 'mysql:host=localhost; dbname=assignment_tracker';
$username = 'root';
$password = '';

try{
  $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  $error = "Database Error"
}

?>