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
	 border:solid 1px #e3d9b3; margin-right:2px; margin-left:5px; padding-top:4px;"

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



					    $branch_info="select * from exchange_house_other order by `ex_country` asc";
						$page_query="select count(*)  AS count_data from exchange_house_other";
						//echo  $branch_info;
					   //  $branch_qry=mysql_query($branch_info);

					  $branch_qry=getResultSet(15, 'oo_fr_others.php?oo=exchange_house_other', $branch_info,$page_query);
					  //print_r($branch_qry);

?>

                              <div class="branch-list">
                                  <div align="left" style="padding-left:10px; margin-top: 10px; font-size:18px; font-weight:bold; color:#009933; font-family:'Monotype Corsiva';">OTHER EXCHANGE COMPANIES & BANKS
                                      <hr align="left" width="98%" size="1" noshade="noshade" color="#009933"/>
                                  </div>
                                  <table class="branch_loc">
                                      <thead>
                                      <tr style="width:100%;">
                                          <th class="branch_info_header serial"><strong>SL</strong></th>
                                          <th class="branch_info_header otcountry" ><strong>COUNTRY</strong></th>
                                          <th class="branch_info_header otaddress" ><strong>EXCHANGE HOUSE NAME</strong></th>
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
                                              <td class="serial-data"><?php echo $sl; ?></td>
                                              <td class="otcountry-data"><?php echo  $branch_show['ex_country'] ?></td>
                                              <td class="otaddress-data"><a href="modal_fr_ex_other.php?ex_code=<?php echo  $branch_show['ex_code'] ?>" rel="clearbox[width=600,height=220]"><?php echo  $branch_show['ex_name'] ?></a></td>
                                          </tr>
                                          <?php
                                          $sl++;
                                      }
                                      ?>
                                      </tbody>
                                  </table>
                              </div>
		<div style=" text-align:center; border:1px solid #CCCCCC; background:#E0DFE1; height:20px; width:97%; margin-left:10px; margin-top:20px; float:left;">
		<?PHP
        //This is the actual usage of function, It prints the paging links
        doPages(15, 'oo_fr_others.php?oo=exchange_house_other', '');

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