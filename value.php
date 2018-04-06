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

if($Name=="" or $Email_ID=="" or $Contact=="" or $UserName=="" or $Password=="")
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
$query1 = "INSERT INTO main_signup (username,password,name,mob,addr,eml) VALUES ('$UserName','$Password','$Name','$Contact','$Address','$Email_ID')";
$result1 = mysql_query($query1) or die(mysql_error());
$query2 = "INSERT INTO stud_dtls (nm,fnm,dob,eq,eml,cont,adrs) VALUES ('$Name','$Father_Name','$Date_of_Birth','$Education_Qualification','$Email_ID','$Contact','$Address')";
$result2 = mysql_query($query2) or die(mysql_error());

?>
<script language="javascript">
alert('Your data is Submited please check your approval status later!');
document.location = "index.php";
</script>
<?
}
?>