<?php
					  
					  include('admin_reqonce/db_con.php');
					  					
					    $photo_info="select * from photogallary where pgallery_id=".$_GET['pgallery_id'];
						
					     $photo_qry=mysql_query($photo_info);
					    $row = mysql_fetch_assoc(  $photo_qry);
					 
									  
?>

<style type="text/css">

.branch_info_modal_header
{
border:solid 1px #e3d9b3; width:110px; margin-right:2px; margin-left:5px; float:left; padding-top:2px; margin-top:10px; font-weight:bold;
}

.branch_info_modal_row
{
border:solid 1px #e3d9b3; width:500px; margin-right:2px; margin-left:5px; float:left; padding-top:2px;margin-top:10px;
}

</style>



<div align="center" class="branch_info_modal_row" style="height:auto;font-weight:bold;"><?php echo $row['pgallery_heading'] ?></div>


<div align="justify" style="border:solid 1px #e3d9b3; width:500px; height:auto; padding:5 5 5 5; margin-right:2px; margin-left:2px; float:left;margin-top:15px;"><?php echo $row['pgallery_press'] ?></div>


