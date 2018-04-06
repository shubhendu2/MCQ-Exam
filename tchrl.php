<?
include 'conct.php';
?>

<table border="0" align="center" width="500px">
<tr bgcolor="#63A6B8">
<th align="center" width="5%">Sl.</th>
<th align="center" width="10%">UserName</th>
<th align="center" width="10%">Password</th>
<th align="center" width="10%">Name</th>
<th align="center" width="10%">Contact</th>
<th align="center" width="10%">Email ID</th>
<th align="center" width="10%">Address</th>
<th align="center" width="10%">Activation Status</th>
<th align="center" width="10%">User Level</th>
</tr>
<?
$f=0;
$select=mysql_query("select * from main_signup where userlevel='5' and actnum=0");
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
		  $f1=$r1['username'];
		  $f2=$r1['password'];
		  $f3=$r1['name'];
		  $f4=$r1['mob'];
		  $f5=$r1['eml'];
		  $f6=$r1['addr'];
		  $f7=$r1['actnum'];
		  $f8=$r1['userlevel'];
		  
	
?>
<tr bgcolor="<?=$clr;?>">
<td ><?=$f;?></td>
<td ><?=$f1;?></td>
<td ><?=$f2;?></td>
<td ><?=$f3;?></td>
<td ><?=$f4;?></td>
<td ><?=$f5;?></td>
<td ><?=$f6;?></td>
<td ><?=$f7;?></td>
<td ><?=$f8;?></td>
</tr>
<?
	 }
?>
</table>