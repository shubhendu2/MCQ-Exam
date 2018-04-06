<?
$reqlevel=1;
include 'ck.php';
$studans=$_POST[studans];
?>

<?
if($studans=='A')
	{
		$studans=$A;
	}
	if($studans=='B')
	{
		$studans=$B;
	}
	if($studans=='C')
	{
		$studans=$C;
	}
	if($studans=='D')
	{
		$studans=$D;
	}
$query = "Update stud_qstn set studans='$studans' where sid='$user_currently_loged'";
$result = mysql_query($query) or die(mysql_error());
?>
<script language="javascript">
alert('Your Answer is Submited!');
document.location = "examtody.php";
</script>