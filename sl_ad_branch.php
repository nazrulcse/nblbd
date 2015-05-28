<?php
include('admin_reqonce/db_con.php');
require_once "pasing.php";
include"page_top.php";
?>	
  <style type="text/css" >
	.branch_info_header{
	/*float:left;*/
	
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

					  
					
					 	$branch_city=$_GET['branch_type'];		  
						
					    $branch_info="select * from branchinfo where adbranch=1 order by  branch_name asc";
						$page_query="select count(*)  AS count_data from branchinfo where adbranch=1";
						//echo  $branch_info;
					   //  $branch_qry=mysql_query($branch_info);
					  
					  $branch_qry=getResultSet(15, 'sl_ad_branch.php?branch=ad_branch'.$branch_city, $branch_info,$page_query);
					  //print_r($branch_qry);
					  
?>



                              <div class="branch-list">
                                  <div align="left" style="padding-left:10px; margin-top: 10px; font-size:18px; font-weight:bold; color:#009933; font-family:'Monotype Corsiva';">AUTHORIZED DEALER (AD) BRANCH LOCATION  <?php echo strtoupper($branch_city) ?>
                                      <hr align="left" width="98%" size="1" noshade="noshade" color="#009933"/>
                                  </div>
                                  <table class="branch_loc">
                                      <thead>
                                      <tr style="width:100%;">

                                          <th class="branch_info_header serial"><strong>SERIAL</strong></th>
                                          <th class="branch_info_header bcode" ><strong>BRANCE CODE</strong></th>

                                          <th class="branch_info_header bname" ><strong>BRANCH NAME</strong></th>

                                          <th class="branch_info_header district" ><strong>DISTRICT</strong></th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                      if (isset($_GET['page'])) {

                                          if ($_GET['page'] > 1) {
                                              $sl = ($_GET['page'] - 1) * 15 + 1;
                                          }else
                                              $sl=1;
                                      }else {
                                          $sl = 1;
                                      }
                                      while ($branch_show = mysql_fetch_assoc($branch_qry)) {


                                          //	$branch_show= mysql_fetch_assoc( $branch_qry)
                                          ?>

                                          <tr>
                                              <td class="serial-data"><?php echo $sl; ?></td>
                                              <td class="bcode-data"><?php echo $branch_show['branch_code'] ?></td>
                                              <td class="bname-data">
                                                  <a href="branch_info_modal.php?branch_code=<?php echo $branch_show['branch_code'] ?>" rel="clearbox[width=530,height=220]"  ><?php echo $branch_show['branch_name'] ?></a></td>
                                              <td class="district-data"><?php echo $branch_show['district'] ?></td>
                                          </tr>
                                          <?php
                                          $sl++;
                                      }
                                      ?>
                                      </tbody>
                                  </table>
                              </div>
		
		<div style=" text-align:center; border:1px solid #CCCCCC; background:#E0DFE1; height:20px; width:610px; margin-left:15px; margin-top:20px; float:left;">
		<?PHP
        //This is the actual usage of function, It prints the paging links
        doPages(15, 'sl_ad_branch.php?branch=ad_branch'.$branch_city, '');

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