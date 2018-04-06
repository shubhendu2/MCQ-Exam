<?
$reqlevel=1;
include "ck.php";
if($user_current_level<0)
{
?>
<h2>Administrative Section</h2> 
     <div > 
   <li><a href="aprv.php" target="mainFrame">New Application</a></li>
   <li><a href="actv.php" target="mainFrame">Approved Students</a></li>
   <li><a href="rjet.php" target="mainFrame">Rejected Students</a></li>
   <li><a href="actstd.php" target="mainFrame">Activated Students</a></li>
   <li><a href="tchrl.php" target="mainFrame">Teacher List</a></li>
   </div>
<?
}
?>
<h2>Exam Date</h2>
	<div>
		<li><a href="examtody.php" target="mainFrame">Today's Exam</a></li>
		<li><a href="upcmexm.php" target="mainFrame">Upcoming Exam</a></li>
	</div>


<h2>Setup</h2>
<?
if($user_current_level<0)
	{
?>
<div>
     <li><a href="exm_stp.php" target="mainFrame">Exam Setup</a></li>
<?
	}
?>
	 
<?
if($user_current_level<0 or $user_current_level>=5)
	{
?>
	 
	<li><a href="ques_stp.php" target="mainFrame">Question Setup</a></li>
<?
	}
?>

</div>
<h2>View Status & Edit</h2> 
    <div>
<?
if($user_current_level<0 or $user_current_level>=0)
{
?>	 
   <li><a href="stat.php" target="mainFrame">Status & Edit</a></li>
<?
}
?>
   <li><a href="#" target="mainFrame">Menu2-2</a></li>
</div>

<h2 class="accordion-header">System</h2> 
     <div class="accordion-content"> 
   <li><a href="changepass.php" target="mainFrame">Change Password</a></li>
   <li><a href="logoff.php" target="mainFrame">Logout</a></li>
</div>