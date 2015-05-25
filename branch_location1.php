<?php 
//session_start();

include('admin_reqonce/db_con.php');
require_once "pasing.php";
include "page_top.php";
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
										  
<!-- Nivo Slider Start 2nd part -->	
	 <script type="text/javascript" src="clearbox.js"></script>					
<div id="wrapper" style="float:left; height:auto; width:60%; border:1px solid red;">
    
       
<?php

					  
					if(isset($_GET['division'])){
					 	$branch_city=$_GET['division'];		  
						}else
						{$branch_city='dhaka';}
					    $branch_info="select * from branchinfo where lower(division)='".strtolower($branch_city)."' order by  branch_name asc";
						$page_query="select count(*)  AS count_data from branchinfo where lower(division)='".strtolower($branch_city)."' ";
						//echo  $branch_info;
					   //  $branch_qry=mysql_query($branch_info);
					  
					  $branch_qry=getResultSet(15, 'branch_location.php?division='.$branch_city, $branch_info,$page_query);
					  //print_r($branch_qry);
					  
?>



<p>&nbsp;</p>
<div align="left" style="padding-left:20px; font-size:18px; font-weight:bold; color:#009933; font-family:'Monotype Corsiva';">BRANCH LOCATION: <?php echo strtoupper($branch_city) ?>
<hr align="left" width="98%" size="1" noshade="noshade" color="#009933"/>
</div>

<div style="width:99%; height:auto; float:left; border:1px solid red;">

<div class="branch_info_header" style="width:80px;margin-left:23px;"><strong>SERIAL</strong></div>
<div class="branch_info_header" style="width:100px;margin-left:5px;"><strong>BRANCE CODE</strong></div>

<div class="branch_info_header" style="width:300px;margin-left:5px;"><strong>BRANCH NAME</strong></div>

<div class="branch_info_header" style="width:100px;margin-left:5px;"><strong>DISTRICT</strong></div>
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
<div style="width:99%; height:auto; float:left; border:1px solid red;">

<div class="branch_info_row" style="width:80px; margin-left:23px;  "><?php echo $sl;?></div>
<div class="branch_info_row" style="width:100px;margin-left:5px; "><?php echo  $branch_show['branch_code'] ?></div>
<div class="branch_info_row" style="width:300px; height:20px;  margin-left:5px;">
<a href="branch_info_modal.php?branch_code=<?php echo  $branch_show['branch_code'] ?>" rel="clearbox[width=530,height=220]"><?php echo  $branch_show['branch_name'] ?></a></div>
<div class="branch_info_row" style="width:100px; height:20px;  margin-left:5px; "><?php echo  $branch_show['district'] ?></div>
</div>
<?php 
$sl++;
} 
?>

<p>&nbsp;</p>

<br/><br/>
		
		<div style=" text-align:center; border:1px solid #CCCCCC; background:#E0DFE1; height:20px; width:97%; margin-left:10px; margin-top:20px; float:left;">
		<?PHP
        //This is the actual usage of function, It prints the paging links
        doPages(15, 'branch_location.php?division='.$branch_city, '');

    ?>
	</div>  

    </div>


<p>&nbsp;</p>

<?php 
include "page_bottom.php";
?> 


	
								
