<?php

$username =$_POST["username"];
$password =$_POST["password"];

$target_path = "$username"."/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name'])." has been uploaded";
} 
else{
    echo "There was an error uploading the file, please try again!";
}
?>

<form name="myform" action="logincheck.php" method="POST">
<input type='hidden' name='username' id='username' maxlength="15" value="<? echo $username; ?>" />
<input type='hidden' name='password' id='password' maxlength="15" value="<? echo $password; ?>" />
<!--<input type='submit' name='Submit' value='Proceed' />-->
<script language="JavaScript">document.myform.submit();</script>
</form>
