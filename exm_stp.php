<?
include 'conct.php';
?>
<center><font size="10">Exam Setup</font>
<form name="f1" method="post" action="value2.php">
<table bgcolor="#FFC177" align="center">
<tr>
<td align="right">Exam Name:</td>
<td colspan="5"><input type="text" name="enm" id="enm" size="63" placeholder="Please Enter the Exam Name"> </td>
</tr>
<tr>
<td align="right">Exam Date:</td>
<td colspan="5"><input type="date" name="edt" id="edt"> </td>
</tr>
<tr>
<td align="right">Exam Time:</td>
<td colspan="5"><input type="time" name="etm" id="etm"> </td>
</tr>
<tr>
<td align="right">Last Registration Date:</td>
<td colspan="0"><input type="date" name="lregdt" id="lregdt"></td>
</tr>
<tr>
<td align="right">Number of Question:</td>
<td colspan="0"><input type="text" name="noq" id="noq" size="21"></td>
</tr>
<tr>
<td align="right">Marks per Question:</td>
<td colspan="0"><input type="text" name="mrksperq" id="mrksperq" size="21"> </td>
</tr>
<tr>
<td colspan="5" align="right">
<input type="submit" value="SUBMIT"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</tr>
</table>
</form>
</table>