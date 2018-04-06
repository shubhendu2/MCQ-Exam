<?
include 'conct.php';
$sid=$_REQUEST[sl];
$f=0;
$select=mysql_query("select * from main_signup where sl ='$sid'");
      while($r1=mysql_fetch_array($select))   
	 {		$eml=$r1['eml'];
	 }
	 
$query = "Update main_signup set userlevel='5' where eml='$eml'";
$result = mysql_query($query) or die(mysql_error());
?>
<script language="javascript">
alert('The Applicant has been made Teacher!');
document.location = "actv.php";
</script>