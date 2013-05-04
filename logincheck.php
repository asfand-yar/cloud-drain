<?
$username =$_POST["username"];
$password =$_POST["password"];


$db_name="cloud";
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else
mysql_select_db($db_name, $con);
$sql = "SELECT * FROM  `clouduser` WHERE  `Username` LIKE  '$username' AND  `Password` LIKE  '$password'";
mysql_query($sql);
$result = mysql_query($sql);
if(mysql_num_rows($result) > 0){?>
<form name="myform" action="show.php" method="POST">
<input type='hidden' name='username' id='username' maxlength="15" value="<? echo $username; ?>" />
<input type='hidden' name='password' id='password' maxlength="15" value="<? echo $password; ?>" />
<script language="JavaScript">document.myform.submit();</script></form>
<?
}
?>
