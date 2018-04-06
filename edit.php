<?
include 'conct.php';
$Email_ID=$_REQUEST[eml];
$select=mysql_query("select * from stud_dtls where eml='$Email_ID'");
		while($r1=mysql_fetch_array($select))
		{
		  $f1=$r1['nm'];
		  $f2=$r1['fnm'];
		  $f3=$r1['dob'];
		  $f4=$r1['eq'];
		  $f7=$r1['eml'];
		  $f8=$r1['cont'];
		  $f9=$r1['adrs'];
		}
		sleep(1);
?>
<form name="f1" method="post" action="edit_value.php">
<input type="hidden" name="eml" id="eml" value="<?=$Email_ID;?>">
<table bgcolor="#FFC177">
<tr>
<td align="right" colspan="6"><a href="#" onclick="clr()" title="Close"><img src="img/del.png" width="25"/></a></td>
</tr>
<tr>
<td align="right">Name:</td>
<td colspan="5"><input type="text" value="<?=$f1;?>" name="nm" id="nm" size="63" placeholder="Please Enter Your Name"> </td>
</tr>
<tr>
<td align="right">Father's Name:</td>
<td colspan="5"><input type="text" value="<?=$f2;?>" name="fnm" id="fnm" size="63" placeholder="Please Enter Your Name"> </td>
</tr>
<tr>
<td align="right">Date of Birth:</td>
<td colspan="0"><input type="date" value="<?=$f3;?>" name="dob" id="dob" placeholder="please enter your DOB"> </td>
<td align="left">Education Qualification:</td>
<td colspan="0"><input type="text" value="<?=$f4;?>" name="eq" id="eq"></td>
</tr>
<tr>
<td align="right">Contact:</td>
<td colspan="0"><input type="text" value="<?=$f8;?>" name="cont" id="cont" size="21" placeholder="please enter the your Contact"> </td>
</tr>
<tr>
<td align="right">Address:</td>
<td colspan="5"><input type="text" value="<?=$f9;?>" name="adrs" id="adrs" size="63" placeholder="please enter the your Address"> </td>
</tr>
<tr>
<td colspan="6" align="right"><br>
<input type="submit" value="UPDATE">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
</tr>
</table>
</form>