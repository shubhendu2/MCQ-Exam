<?
include 'conct.php';
$sid=$_REQUEST[sl];
$f=0;
$select=mysql_query("select * from stud_dtls where sl ='$sid'");
      while($r1=mysql_fetch_array($select))   
	 {		$eml=$r1['eml'];
	 }
$query = "Update stud_dtls set stat='1' where sl='$sid'";
$result = mysql_query($query) or die(mysql_error());

$query = "Update main_signup set actnum='0' where eml='$eml'";
$result = mysql_query($query) or die(mysql_error());
?>
<script language="javascript">
alert('The Applicant has been Approved & Activated!');
document.location = "aprv.php";
</script>