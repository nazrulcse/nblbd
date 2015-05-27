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

                              <div class="branch-list">
                                  <div align="left" style="padding-left:10px; margin-top: 10px; font-size:18px; font-weight:bold; color:#009933; font-family:'Monotype Corsiva';">CORRESPONDENT BANKING
                                      <hr align="left" width="98%" size="1" noshade="noshade" color="#009933"/>
                                  </div>
                                  <table class="branch_loc">
                                      <thead>
                                      <tr style="width:100%;">

                                          <th class="branch_info_header serial1"><strong>SL</strong></th>
                                          <th class="branch_info_header bname1" ><strong>BRANCH NAME</strong></th>
                                          <th class="branch_info_header country" ><strong>COUNTRY</strong></th>
                                          <th class="branch_info_header city" ><strong>CITY</strong></th>
                                          <th class="branch_info_header account" ><strong>ACCOUNT NUMBER</strong></th>
                                          <th class="branch_info_header swift" ><strong>SWIFT</strong></th>
                                      </tr>
                                      </thead>
                                      <tbody>
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

                                          <tr>
                                              <td class="serial1-data"><?php echo $sl; ?></td>
                                              <td class="bname1-data"><?php echo $branch_show['corr_bank'] ?></td>
                                              <td class="country-data"><?php echo  $branch_show['corr_country'] ?></td>
                                              <td class="city-data"><?php echo  $branch_show['corr_city'] ?></td>
                                              <td class="account-data"><?php echo  $branch_show['corr_acc_no'] ?></td>
                                              <td class="swift-data"><?php echo  $branch_show['corr_swift'] ?></td>

                                          </tr>
                                          <?php
                                          $sl++;
                                      }
                                      ?>
                                      </tbody>
                                  </table>
                              </div>
		<div style=" text-align:center; border:1px solid #CCCCCC; background:#E0DFE1; height:20px; width:97%; margin-left:5px; margin-top:20px; float:left;">
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