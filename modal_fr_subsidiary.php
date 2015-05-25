<?php
					  
					  include('admin_reqonce/db_con.php');
					  					
					    $branch_info="select * from exchange_house_own where ex_code=".$_GET['ex_code'];
						
					     $branch_qry=mysql_query($branch_info);
					    $row = mysql_fetch_assoc(  $branch_qry);
					 
									  
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


<div class="branch_info_modal_header" style="height:20px;">Ex. Code</div>
<div class="branch_info_modal_row" style="height:20px;"><?php echo $row['ex_code'] ?></div>

<div style="border:solid 1px #e3d9b3; width:110px; height:20px; margin-right:2px; margin-left:5px; float:left;margin-top:15px; font-weight:bold;">Ex. Name</div>

<div style="border:solid 1px #e3d9b3; width:350px; height:20px; margin-right:2px; margin-left:5px; float:left;margin-top:15px;"><?php echo $row['ex_name'] ?></div>

<div class="branch_info_modal_header" style="height:20px;">Country</div>
<div class="branch_info_modal_row" style="height:20px;"><?php echo $row['ex_country'] ?></div>

<div class="branch_info_modal_header" style="height:60px;">Address</div>
<div class="branch_info_modal_row" style="height:60px;"><?php echo $row['ex_address'] ?></div>

<div class="branch_info_modal_header" style="height:20px;">Phone</div>
<div class="branch_info_modal_row" style="height:20px;"><?php echo $row['ex_phone'] ?></div>

<div class="branch_info_modal_header" style="height:20px;">E-mail</div>
<div class="branch_info_modal_row" style="height:20px;"><?php echo $row['ex_email'] ?></div>

