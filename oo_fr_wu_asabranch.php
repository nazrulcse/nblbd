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

					  
					
					    $branch_info="select * from asabranchlist";
						$page_query="select count(*)  AS count_data from asabranchlist";
						//echo  $branch_info;
					   //  $branch_qry=mysql_query($branch_info);
					  
$branch_qry=getResultSet(15, 'oo_fr_wu_asabranch.php?oo_fr_wu=asabranch', $branch_info,$page_query);
					  //print_r($branch_qry);
					  
?>



<p>&nbsp;</p>
<div align="left" style="padding-left:2px; font-size:18px; font-weight:bold; color:#009933; font-family:'Monotype Corsiva';">ASA BRANCH LIST
<hr align="left" width="612px" size="1" noshade="noshade" color="#009933"/>
</div>


<div class="branch_info_header" style="width:25px;margin-left:2px;"><strong>ID</strong></div>
<div class="branch_info_header" style="width:100px; margin-left:2px;"><strong>DISTRICT</strong></div>
<div class="branch_info_header" style="width:180px;margin-left:2px;"><strong>BRANCH NAME</strong></div>
<div class="branch_info_header" style="width:200px;margin-left:2px;"><strong>MANAGER NAME</strong></div>
<div class="branch_info_header" style="width:115px;margin-left:2px;"><strong>CELL NUMBER</strong></div>

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
?>

<div class="branch_info_row" style="width:25px; height:20px; margin-left:2px;  "><?php echo $sl;?></div>
<div class="branch_info_row" style="width:100px; height:20px; margin-left:2px; "><?php echo  $branch_show['asa_district'] ?></div>
<div class="branch_info_row" style="width:180px; height:20px;  margin-left:2px;"><?php echo  $branch_show['asa_name'] ?></a></div>
<div class="branch_info_row" style="width:200px; height:20px;  margin-left:2px; "><?php echo  $branch_show['abm'] ?></div>
<div class="branch_info_row" style="width:115px; height:20px;  margin-left:2px; "><?php echo  $branch_show['phone'] ?></div>


<?php 
$sl++;
} 
?>

<p>&nbsp;</p>

<br/><br/>
		
		<div style=" text-align:center; border:1px solid #CCCCCC; background:#E0DFE1; height:20px; width:615px; margin-left:20px; margin-top:20px; float:left;">
		<?PHP
        //This is the actual usage of function, It prints the paging links
        doPages(15, 'oo_fr_wu_asabranch.php?oo_fr_wu=asabranch', '');

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