<?
include 'conct.php';

$sid=$_POST[sid];
$Name=$_POST[nm];
$Father_Name=$_POST[fnm];
$Date_of_Birth=$_POST[dob];
$Education_Qualification=$_POST[eq];
$UserName=$_POST[username];
$Password=$_POST[password];
$Email_ID=$_POST[eml];
$Contact=$_POST[cont];
$Address=$_POST[adrs];

if($Name=="" or $Email_ID=="" or $Contact=="")
{
?>
	<Script language="JavaScript">
	alert('Please Fill the requied Field');
	window.history.go(-1);
	</script>
<?	
}	
else
{
$query1 = "Update main_signup set name='$Name',mob='$Contact',addr='$Address' where eml='$Email_ID'";
$result1 = mysql_query($query1) or die(mysql_error());
$query2 = "Update stud_dtls set nm='$Name',fnm='$Father_Name',dob='$Date_of_Birth',eq='$Education_Qualification',eml='$Email_ID',cont='$Contact',adrs='$Address' where eml='$Email_ID'";
$result2 = mysql_query($query2) or die(mysql_error());

?>
<script language="javascript">
alert('Your data has been updated!');
document.location = "stat.php";
</script>
<?
}
?>