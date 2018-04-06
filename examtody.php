<?
$reqlevel=1;
include 'ck.php';
?>

<table border="0" align="center" width="500px">
<tr bgcolor="#63A6B8">
<th align="center" width="5%">Sl.</th>
<th align="center" width="10%">Exam Name</th>
<th align="center" width="10%">Exam Date</th>
<th align="center" width="10%">Exam Time</th>
<th align="center" width="10%">Number of Question</th>
<th align="center" width="10%">Marks per Question</th>
<th align="center" width="10%">Apply</th>

</tr>
<?
$f=0;
$select=mysql_query("select * from main_exm where edt=DATE(NOW())");
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
		  $f1=$r1['enm'];
		  $f2=$r1['edt'];
		  $f3=$r1['etm'];
		  $exmid=$r1['sl'];
		  $f4=$r1['noq'];
		  $f5=$r1['mrksperq'];
		  $f6=$r1['stat'];
		  
		  
$strt=0;
$select1=mysql_query("select * from exm_app where eid='$exmid' and sid='$user_currently_loged' and (stat='1' or stat='2')");
      while($r11=mysql_fetch_array($select1))  
	 {		$strt++;
		
	 }
?>
<tr bgcolor="<?=$clr;?>">
<td ><?=$f;?></td>
<td ><?=$f1;?></td>
<td ><?=$f2;?></td>
<td ><?=$f3;?></td>
<td ><?=$f4;?></td>
<td ><?=$f5;?></td>
<td >
<?
if($strt>0)
{
?>
<a href="start.php?sl=<?=$exmid;?>">Start Exam</a>
<?
}
?>
</td>
</tr>
<?
	 }
?>
</table>