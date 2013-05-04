<?
$filename =$_POST["filename"];
$path =$_POST["path"];

$db_name="cloud";
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else
if(file_exists($path)){
header("Content-disposition: attachment; filename={$filename}");
header('Content-type: application/octet-stream');
readfile($path);
}

?>
