<?
$filename =$_POST["filename"];
$path =$_POST["path"];
$username =$_POST["username"];
$password =$_POST["password"];

$db_name="cloud";
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else{

unlink($path);


}

?>

<form name="myform" action="logincheck.php" method="POST">
<input type='hidden' name='username' id='username' maxlength="15" value="<? echo $username; ?>" />
<input type='hidden' name='password' id='password' maxlength="15" value="<? echo $password; ?>" />
<!--<input type='submit' name='Submit' value='Proceed' />-->
<script language="JavaScript">document.myform.submit();</script>
</form>
