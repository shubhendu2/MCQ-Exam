<?
include 'ck.php';

$NameofTheExam=$_POST[enm];
$Question=$_POST[qstn];
$A=$_POST[op1];
$B=$_POST[op2];
$C=$_POST[op3];
$D=$_POST[op4];
$Answer=$_POST[ans];


date_default_timezone_set("Asia/Calcutta");
$dt1=date("Y-m-d h:i:s a");

$select=mysql_query("select * from main_exm where enm ='$NameofTheExam'");
      while($r1=mysql_fetch_array($select))
	 {   
		 $esl=$r1['sl'];
	 }


if($NameofTheExam=="" or $Question=="" or $A=="" or $B=="" or $C=="" or $C=="" or $D=="" or $Answer=="")
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
	
	if($Answer=='A')
	{
		$Answer=$A;
	}
	if($Answer=='B')
	{
		$Answer=$B;
	}
	if($Answer=='C')
	{
		$Answer=$C;
	}
	if($Answer=='D')
	{
		$Answer=$D;
	}
$query = "INSERT INTO exm_qstn (esl,enm,qstn,op1,op2,op3,op4,ans,entryby,entrydttm) VALUES ('$esl','$NameofTheExam','$Question','$A','$B','$C','$D','$Answer','$user_currently_loged','$dt1')";
$result = mysql_query($query) or die(mysql_error());

?>
<script language="javascript">
alert('Your Question is Submited!');
document.location = "ques_stp.php";
</script>
<?
}
?>