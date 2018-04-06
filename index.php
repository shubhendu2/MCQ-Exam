<?
date_default_timezone_set("Asia/Calcutta");
$dt=date("Y-m-d");
$dt1=date("Y-m-d h:i:s a");

include "conct.php";
echo $dt;
echo "<br>".$dt1;
?>
<center>
<font color="red" size="10">Welcome to MCQ Exam</font>
</center>
<br><br><br><br>
<center>
<font color="black" size="5">EXISTING USER----></font><a href="login.php"><input type="button" value="LOGIN">
</center>

<center>
<font color="black" size="5">NEW USER------></font><a href="sign_up.php"><input type="button" value="SIGN UP">
</center>