<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['password']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into logins(Username,Email,Password) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."')";
$res=mysql_query($sql);
If($res)
{
Echo "You are signed up";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}

?>
<br>
<a href="http://localhost/login.php">Retun to login page</a>