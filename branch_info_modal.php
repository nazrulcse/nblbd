<?php
					  
					  include('admin_reqonce/db_con.php');
					  					
					    $branch_info="select * from branchinfo where branch_code=".$_GET['branch_code'];
						
					     $branch_qry=mysql_query($branch_info);
					    $row = mysql_fetch_assoc(  $branch_qry);
					 
					 // print_r($row);
					  
?>

<style type="text/css">

.branch_info_modal_header
{
border:solid 1px #e3d9b3; width:110px; margin-right:2px; margin-left:5px; float:left; padding-top:2px; margin-top:10px; font-weight:bold;
}

.branch_info_modal_row
{
border:solid 1px #e3d9b3; width:350px; margin-right:2px; margin-left:5px; float:left; padding-top:2px;margin-top:10px;
}

</style>



<div style="border:solid 1px #e3d9b3; width:110px; height:20px; margin-right:2px; margin-left:5px; float:left;margin-top:15px; font-weight:bold;">Branch Name</div>
<div style="border:solid 1px #e3d9b3; width:350px; height:20px; margin-right:2px; margin-left:5px; float:left;margin-top:15px;"><?php echo $row['branch_name'] ?></div>


<div class="branch_info_modal_header" style="height:20px;">Branch Code</div>
<div class="branch_info_modal_row" style="height:20px;"><?php echo $row['branch_code'] ?></div>

<div class="branch_info_modal_header" style="height:60px;">Branch Address</div>
<div class="branch_info_modal_row" style="height:60px;"><?php echo $row['address'] ?></div>

<div class="branch_info_modal_header" style="height:40px;">Branch Phone</div>
<div class="branch_info_modal_row" style="height:40px;"><?php echo $row['phone'] ?></div>

<div class="branch_info_modal_header" style="height:20px;">Branch Fax</div>
<div class="branch_info_modal_row" style="height:20px;"><?php echo $row['fax'] ?></div>

<div class="branch_info_modal_header" style="height:20px;">Branch SWIFT</div>
<div class="branch_info_modal_row" style="height:20px;"><?php echo $row['swift'] ?></div>

<div class="branch_info_modal_header" style="height:20px;">Branch E-Mail</div>
<div class="branch_info_modal_row" style="height:20px;"><?php echo $row['email'] ?></div>

