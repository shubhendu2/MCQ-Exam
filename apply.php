<?
$reqlevel=1;
include 'ck.php';
$sid=$_REQUEST[sl];
$f=0;
$select=mysql_query("select * from main_exm where sl ='$sid'");
      while($r1=mysql_fetch_array($select))
	 {   
		 $f++;
		 $eid=$r1['sl'];
	 }

date_default_timezone_set("Asia/Calcutta");
$dt1=date("Y-m-d h:i:s a");

$query = "INSERT INTO exm_app (eid,sid,appdttm) VALUES ('$eid','$user_currently_loged','$dt1')";
$result = mysql_query($query) or die(mysql_error());
?>

<script language="javascript">
alert('You have succsessfully applied for this Exam!');
document.location = "upcmexm.php";
</script>