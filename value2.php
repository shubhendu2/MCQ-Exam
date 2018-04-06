<?
include 'conct.php';

$ExamName=$_POST[enm];
$ExamDate=$_POST[edt];
$ExamTime=$_POST[etm];
$LastRegDate=$_POST[lregdt];
$NumberofQues=$_POST[noq];
$MarksperQues=$_POST[mrksperq];


if($ExamName=="" or $ExamDate=="" or $ExamTime=="" or $LastRegDate=="" or $NumberofQues=="" or $MarksperQues=="")
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
$query = "INSERT INTO main_exm (enm,edt,etm,lregdt,noq,mrksperq) VALUES ('$ExamName','$ExamDate','$ExamTime','$LastRegDate','$NumberofQues','$MarksperQues')";
$result = mysql_query($query) or die(mysql_error());

?>
<script language="javascript">
alert('Your Exam has been setup!');
document.location = "exm_stp.php";
</script>
<?
}
?>