<?
$name =$_POST["name"];
$email =$_POST["email"];
$username =$_POST["username"];
$password =$_POST["password"];

//echo $name;

$db_name="cloud";
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else
mysql_select_db($db_name, $con);


$check = "SELECT * FROM  `clouduser` WHERE  `Username` LIKE  '$username'";
$result1 = mysql_query($check);
if(mysql_num_rows($result1) > 0 || $username == ""){

header('Location:userexist.html');

}

else{

$sql = "INSERT INTO `cloud`.`clouduser` (`Serial`, `Name`, `Email`, `Username`, `Password`, `Active`) VALUES (NULL, '$name', '$email', '$username', '$password', '1');";
mysql_query($sql);
mkdir("$username", 0700);
header('Location:home.html');
}

?>
