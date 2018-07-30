<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.

If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['UserID']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="DELETE FROM logins WHERE UserID=('".$_REQUEST['UserID']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Action Completed";
}
Else
{
Echo "There is some problem in inserting record";

}

}
}

If(isset($_REQUEST['submit'])!='')//not working yet ?
{
If($_REQUEST['Username'])	
{

}
Else
{
	Echo "please fill the empty field.";
	$sql = "UPDATE `users` SET `user_lastlogin` = NOW() WHERE `id` = :id";
	$q = $db->prepare($sql);
	zq->execute([':id' => $id]);
	if(!$_POST['Username'] || !$_POST['Usernamenew'])
        $err[] = 'All the fields must be filled in!';
	$row = mysql_fetch_assoc(mysql_query("SELECT id,Username FROM logins WHERE Username='{$_SESSION['Username']}' AND Username='".md5($_POST['Usernamenew'])."'"));
	if($row['Username'])
	{
		$querynewpass = "UPDATE logins SET `Username`='".md5($_POST['Usernamenew'])."' WHERE Username='{$_SESSION['Username']}'";
		$resultnewpass = mysql_query($querynewpass) or die(mysql_error()); 
	}
}
}
?>
<br>
<a href="http://localhost/admin.html">Retun to Admin page</a>
