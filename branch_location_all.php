<?php
include('admin_reqonce/db_con.php');
require_once "pasing.php";
include"page_top.php";
?>	
  <style type="text/css" >
	.branch_info_header{
	float:left;
	
	}
	.branch_info_row
	{
	 float:left;
	 
	}
	</style>  
	
	<script type="text/javascript" src="clearbox.js"></script>	
				
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content">
                          <div class="art-post">
                              <div class="art-post-body">
                          <div class="art-post-inner art-article" align="center">
                                          
										  
<!-- Nivo Slider Start 2nd part -->	
						




<?php

					  
					/*if(isset($_GET['division'])){
					 	$branch_city=$_GET['division'];		  
						}else
						{$branch_city='dhaka';}*/

$branch_info="select * from branchinfo order by  branch_name asc";
$page_query="select count(*)  AS count_data from branchinfo";
						
$branch_qry=getResultSet(15, 'branch_location_all.php?division='.$branch_city, $branch_info,$page_query);
					  
?>

<div align="left" style="padding-left:20px; font-size:18px; font-weight:bold; color:#009933; font-family:'Monotype Corsiva';">BRANCH LOCATION: ALL BRANCH 


<hr align="left" width="98%" size="1" noshade="noshade" color="#009933"/>
</div>



<div style="width:99%; height:auto; float:left; border:0px solid red; font-weight:bold; height:25px;">
<div style="border:solid 1px #e3d9b3; background-color:#999999; width:80px; height:16px; float:left; margin-right:2px; margin-left:15px; padding-top:4px;"><strong>SERIAL</strong></div>
<div style="border:solid 1px #e3d9b3; background-color:#999999; width:100px; height:16px; float:left; margin-right:2px; margin-left:5px; padding-top:4px;"><strong>BRANCE CODE</strong></div>
<div style="border:solid 1px #e3d9b3; background-color:#999999; width:300px; height:16px; float:left; margin-right:2px; margin-left:5px; padding-top:4px;"><strong>BRANCH NAME</strong></div>
<div style="border:solid 1px #e3d9b3; background-color:#999999; width:100px; height:16px; float:left; margin-right:2px; margin-left:5px; padding-top:4px;"><strong>DISTRICT</strong></div>
</div>


<?php 
if(isset($_GET['page']))
{

if($_GET['page']>1)
{
 $sl=($_GET['page']-1)*15+1;
 }else $sl=1;
}else{
$sl=1;
}
while($branch_show= mysql_fetch_assoc( $branch_qry))
					  {
					  
					
	//	$branch_show= mysql_fetch_assoc( $branch_qry)				
			 
?>


<div style="border:solid 1px #e3d9b3; width:80px; height:16px; float:left; margin-right:2px; margin-top:5px; margin-left:15px; padding-top:4px;"><?php echo $sl;?></div>
<div style="border:solid 1px #e3d9b3; width:100px; height:16px; float:left; margin-right:2px; margin-top:5px;margin-left:5px; padding-top:4px;"><?php echo  $branch_show['branch_code'] ?></div>
<div style="border:solid 1px #e3d9b3; width:300px; height:16px; float:left; margin-right:2px; margin-top:5px; margin-left:5px; padding-top:4px;">
<a href="branch_info_modal.php?branch_code=<?php echo  $branch_show['branch_code'] ?>" rel="clearbox[width=530,height=220]"  ><?php echo  $branch_show['branch_name'] ?></a></div>
<div style="border:solid 1px #e3d9b3; width:100px; height:16px; float:left; margin-right:2px; margin-top:5px; margin-left:5px; padding-top:4px;"><?php echo  $branch_show['district'] ?></div>

<?php 
$sl++;
} 
?>


<div style=" text-align:center; border:1px solid #CCCCCC; background:#E0DFE1; height:20px; width:615px; margin-left:20px; margin-top:20px; float:left;">

<?PHP

        doPages(15, 'branch_location_all.php?division='.$branch_city, '');

?>

	</div>





	
								
</div>

<!-- Nivo Slider End 2nd part -->		
								  
										  
                    <div class="cleared"></div>
                          

<p>&nbsp;</p>
<p>&nbsp;</p>

                              </div>
                          </div>
						  
<?php
include"page_bottom.php";
?>	