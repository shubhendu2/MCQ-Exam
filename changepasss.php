<?php
$reqlevel = 1;
include("ck.php");
//catch the sent data
	$sl=0;
	
	$pass = $_POST['pass'];
	$npass1 = $_POST['npass1'];
	$npass2 = $_POST['npass2'];
	
	
	if($pass=='' or $npass1=='' or $npass2=='')
	{
	?>
<script language="javascript">
alert('Please Fill All The Fields.');
window.history.go(-1);
</script>
<?	}
	else
	{
	$c=0;
	$data= mysql_query("SELECT * FROM main_signup where username='$user_currently_loged' and password='$pass'");
		while ($row = mysql_fetch_array($data))
		{
		$c++;
		}
	if($c==0)
	{
	?>
<script language="javascript">
alert('Old Password Is Incorrect.');
window.history.go(-1);
</script>
<?}
	else
	{
	if($npass1!=$npass2)
{
	?>
<script language="javascript">
alert('New Password Mismatched.');
window.history.go(-1);
</script>
<?}
else
{
$sql = "UPDATE main_signup set password='$npass1' where username='$user_currently_loged'";
$result = mysql_query($sql);
?>
<script language="javascript">
alert('Updated Successfully. Thank You...');
header("Location: index.php");
</script>
<?
}}}
?>

