<?
include 'conct.php';

?>
<center><font size="10">Question Setup</font>
<form name="f1" method="post" action="value1.php">
<table bgcolor="#FFC177" align="center">
<tr>
<td align="right">Name of the Exam:</td>
<td>
<select name="enm" id="enm">
<option value="">---Select---</option>
<?
$select=mysql_query("select * from main_exm") or die(mysql_error());;
      while($r1=mysql_fetch_array($select))   
	 {
		  $enm=$r1['enm'];
?>
<option value="<?=$enm;?>"><?=$enm;?></option>
<?
	 }
?>
</select>
</td>
</tr>
<tr>
<td align="right">Question:</td>
<td colspan="5"><input type="text" name="qstn" id="qstn" size="63" placeholder="Please Enter the Question"> </td>
</tr>
<tr>
<td align="right">A:</td>
<td colspan="0"><input type="text" name="op1" id="op1" size="21"> </td>
</tr>
<tr>
<td align="right">B:</td>
<td colspan="0"><input type="text" name="op2" id="op2" size="21"></td>
</tr>
<tr>
<td align="right">C:</td>
<td colspan="0"><input type="text" name="op3" id="op3" size="21"></td>
</tr>
<tr>
<td align="right">D:</td>
<td colspan="0"><input type="text" name="op4" id="op4" size="21"> </td>
</tr>
<tr>
<td align="right">Answer:</td>
<td>
<select name="ans" id="ans">
<option value="">---Select---</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
</select>
</td>
</tr>
<tr>
<td colspan="5" align="right">
<input type="submit" value="SUBMIT"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</tr>
</table>
</form>