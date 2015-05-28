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
					    $branch_info="select * from atm_location order by id asc";
						$page_query="select count(*)  AS count_data from atm_location";
					  $branch_qry=getResultSet(15, 'sl_atm.php?branch=atm'.$branch_city, $branch_info,$page_query);
?>
                              <div class="branch-list">
                                  <div align="left" style="padding-left:10px; margin-top: 10px; font-size:18px; font-weight:bold; color:#009933; font-family:'Monotype Corsiva';">E-GP BRANCH LOCATION  <?php echo strtoupper($branch_city) ?>
                                      <hr align="left" width="98%" size="1" noshade="noshade" color="#009933"/>
                                  </div>
                                  <table class="branch_loc">
                                      <thead>
                                      <tr style="width:100%;">
                                          <th class="branch_info_header bcode" ><strong>BRANCE CODE</strong></th>
                                          <th class="branch_info_header district" ><strong>BRANCH NAME</strong></th>
                                          <th class="branch_info_header baddress" ><strong>ADDRESS</strong></th>
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
                                              <td class="bcode-data"><?php echo $branch_show['under_branch']; ?></td>
                                              <td class="district-data"><?php echo $branch_show['district'] ?></td>
                                              <td class="baddress-data"><?php echo $branch_show['address'] ?></td>
                                          </tr>
                                          <?php
                                          $sl++;
                                      }
                                      ?>
                                      </tbody>
                                  </table>
                              </div>
		<div style=" text-align:center; border:1px solid #CCCCCC; background:#E0DFE1; height:20px; width:92%; margin-left:15px; margin-top:20px; float:left;">
		<?PHP
        //This is the actual usage of function, It prints the paging links
        doPages(15, 'sl_atm.php?branch=atm'.$branch_city, '');

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