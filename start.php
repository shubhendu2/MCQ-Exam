<?
$reqlevel=1;
include 'ck.php';
$eid=$_REQUEST[sl];
$f=0;
$select=mysql_query("select * from main_exm where sl ='$eid'");
      while($r1=mysql_fetch_array($select))   
	 {
		 $em=$r1['enm'];
		 $noq=$r1['noq'];
	}

date_default_timezone_set("Asia/Calcutta");
$dt1=date("Y-m-d h:i:s a");


$select=mysql_query("select * from exm_app where eid='$eid' and sid='$user_currently_loged'");
      while($r1=mysql_fetch_array($select))   
	 {
		 $exmstat=$r1['stat'];
		
	}

if($exmstat==1)
{	
$select1=mysql_query("select * from exm_qstn where esl='$eid' order by rand() limit 0,$noq");
      while($r2=mysql_fetch_array($select1))   
	 {		$f++;
        if($f%2==0)
		{
				$clr="#63A6B8";
		}
		else
		{
			$clr="#DEB5E3";
		}
		  $qsl=$r2['sl'];
		  $ans=$r2['ans'];
		

$query = "INSERT INTO stud_qstn (esl,sid,qsl,ans) VALUES ('$eid','$user_currently_loged','$qsl','$ans')";
$result = mysql_query($query) or die(mysql_error());

	 }
	 
$query = "Update exm_app set stat='2' where eid='$eid' and sid='$user_currently_loged'";
$result = mysql_query($query) or die(mysql_error());
}
?>
<input type="text" name="eid" id="eid" value="<?=$eid;?>">
<table border="0" align="center" width="500px">
<tr bgcolor="#63A6B8">
<th align="center" width="5%">Sl.</th>
<th align="center" width="10%">Question</th>
<th align="center" width="10%">A</th>
<th align="center" width="10%">B</th>
<th align="center" width="10%">C</th>
<th align="center" width="10%">D</th>
<th align="center" width="10%">Answer</th>

</tr>
<?
$f=0;
$select=mysql_query("select * from stud_qstn where esl='$eid' and sid='$user_currently_loged' and stat='0' limit 0,1");
      while($r1=mysql_fetch_array($select))   
	 {		$f++;
        if($f%2==0)
		{
				$clr="#63A6B8";
		}
		else
		{
			$clr="#DEB5E3";
		}
		  $qsl=$r1['qsl'];
		  
$select1=mysql_query("select * from exm_qstn where sl='$qsl'");
      while($r2=mysql_fetch_array($select1))   
	 {			  
		  $f1=$r2['qstn'];
		  $f2=$r2['op1'];
		  $f3=$r2['op2'];
		  $f4=$r2['op3'];
		  $f5=$r2['op4'];
		  $f6=$r2['ans'];
	 }  
	
?>
<form name="f1" method="post" action="value3.php">
<tr bgcolor="<?=$clr;?>">
<td ><?=$f;?></td>
<td ><?=$f1;?></td>
<td ><?=$f2;?></td>
<td ><?=$f3;?></td>
<td ><?=$f4;?></td>
<td ><?=$f5;?></td>
<td ><?=$f7?>
<select name="studans" id="studans" >
<option value="">---Select---</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
</select>
</td>
</tr>
<?
	 }
?>

<tr>
<td colspan="9" align="right">
<input type="submit" value="NEXT"></td>
</tr>
</table>