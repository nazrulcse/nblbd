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

					  
					
					    $branch_info="select * from correspondance_bank order by corr_country asc";
						$page_query="select count(*)  AS count_data from correspondance_bank";
						//echo  $branch_info;
					   //  $branch_qry=mysql_query($branch_info);
					  
	$branch_qry=getResultSet(15, 'oo_correspondent_banking.php?oo=correspondent_banking', $branch_info,$page_query);
					  //print_r($branch_qry);
					  
?>



<p>&nbsp;</p>
<div align="left" style="padding-left:2px; font-size:18px; font-weight:bold; color:#009933; font-family:'Monotype Corsiva';">CORRESPONDENT BANKING
<hr align="left" width="612px" size="1" noshade="noshade" color="#009933"/>
</div>


<div style="border:solid 1px #e3d9b3; background-color:#999999; width:20px; height:16px; float:left; margin-right:2px; margin-left:5px; padding-top:4px;"><strong>SL</strong></div>
<div style="border:solid 1px #e3d9b3; background-color:#999999; width:185px; height:16px; float:left; margin-right:2px; margin-left:2px; padding-top:4px;"><strong>BANK NAME</strong></div>

<div style="border:solid 1px #e3d9b3; background-color:#999999; width:80px; height:16px; float:left; margin-right:2px; margin-left:2px; padding-top:4px;"><strong>COUNTRY</strong></div>

<div style="border:solid 1px #e3d9b3; background-color:#999999; width:95px; height:16px; float:left; margin-right:2px; margin-left:2px; padding-top:4px;"><strong>CITY</strong></div>

<div style="border:solid 1px #e3d9b3; background-color:#999999; width:135px; height:16px; float:left; margin-right:2px; margin-left:2px; padding-top:4px;"><strong>ACCOUNT NUMBER</strong></div>

<div style="border:solid 1px #e3d9b3; background-color:#999999; width:97px; height:16px; float:left; margin-right:2px; margin-left:2px; padding-top:4px;"><strong>SWIFT</strong></div>

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

<div style="border:solid 1px #e3d9b3;  width:20px; height:25px; float:left; margin-right:2px; margin-left:5px; padding-top:4px;"><?php echo $sl;?></div>
<div style="border:solid 1px #e3d9b3;  width:185px; height:25px; float:left; margin-right:2px; margin-left:2px; padding-top:4px;"><?php echo  $branch_show['corr_bank'] ?></div>

<div style="border:solid 1px #e3d9b3;  width:80px; height:25px; float:left; margin-right:2px; margin-left:2px; padding-top:4px;"><?php echo  $branch_show['corr_country'] ?></div>

<div style="border:solid 1px #e3d9b3;  width:95px; height:25px; float:left; margin-right:2px; margin-left:2px; padding-top:4px;"><?php echo  $branch_show['corr_city'] ?></div>

<div style="border:solid 1px #e3d9b3;  width:135px; height:25px; float:left; margin-right:2px; margin-left:2px; padding-top:4px;"><?php echo  $branch_show['corr_acc_no'] ?></div>

<div style="border:solid 1px #e3d9b3;  width:97px; height:25px; float:left; margin-right:2px; margin-left:2px; padding-top:4px;"><?php echo  $branch_show['corr_swift'] ?></div>




<?php 
$sl++;
} 
?>

<p>&nbsp;</p>

<br/><br/>
		
		<div style=" text-align:center; border:1px solid #CCCCCC; background:#E0DFE1; height:20px; width:640px; margin-left:5px; margin-top:20px; float:left;">
		<?PHP
        //This is the actual usage of function, It prints the paging links
        doPages(15, 'oo_correspondent_banking.php?oo=correspondent_banking', '');

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