<?
include 'conct.php';
?>

<table border="0" align="center" width="400px">
<tr bgcolor="#63A6B8">
<th align="center" width="5%">Sl.</th>
<th align="center" width="10%">Name</th>
<th align="center" width="10%">Father's Name</th>
<th align="center" width="10%">Date of Birth</th>
<th align="center" width="5%">Education Qualification</th>
<th align="center" width="5%">Email ID</th>
<th align="center" width="10%">Contact</th>
<th align="center" width="10%">Address</th>
<th align="center" width="10%">Status</th>
<th align="center" width="15%">Action</th>
</tr>
<?
$f=0;
$select=mysql_query("select * from stud_dtls where stat=0");
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
		  $f1=$r1['nm'];
		  $f2=$r1['fnm'];
		  $f3=$r1['dob'];
		  $sid=$r1['sl'];
		  $f4=$r1['eq'];
		  $f5=$r1['eml'];
		  $f6=$r1['cont'];
		  $f7=$r1['adrs'];
		  $f8=$r1['stat'];
		  
	
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
<td ><a href="updtstat.php?sl=<?=$sid;?>" title="Approve & Activate"><img src="img/app.png" height="55px"></a>
<a href="updtstat1.php?sl=<?=$sid;?>" title="Reject"><img src="img/rej.png" height="55px"></a></td>
</tr>
<?
	 }
?>
</table>