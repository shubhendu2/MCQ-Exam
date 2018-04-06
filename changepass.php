<?php
$reqlevel =1;
include("ck.php");
?>
<body>
<form name="Form1" method="post" action="changepasss.php" id="Form1">
<p>&nbsp;</p>

          <table width="400px" border="1" align="center">
          <thead>
          <tr style="height: 30px;">
          <th colspan="4" align="center">
          Change Password
          </th>
		  </tr>
          </thead>
          <tbody>
  <tr class="odd">
    <td align="right" width="30%"><font color="red">*</font>Old Password :</td>
    <td align="left" width="70%"><input type="password" name="pass" id="pass" size="40"></td>    
	</td>   
  </tr>
  
  <tr class="odd">
    <td align="right" width="30%"><font color="red">*</font>New Password :</td>
    <td align="left" width="70%"><input type="password" name="npass1" id="npass1" size="40"></td>    
	</td>   
  </tr>
  
  <tr class="odd">
    <td align="right" width="30%"><font color="red">*</font>Confirm Password :</td>
    <td align="left" width="70%"><input type="password" name="npass2" id="npass2" size="40"></td>    
	</td>   
  </tr>
  
  
  <tr class="even">
    <td colspan="4" align="right"><input type="submit" value="Submit"></td>
  </tr>
  </tbody>
</table>

</form>
</body>