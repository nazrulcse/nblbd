<?php
include('admin_reqonce/db_con.php');
?>
<div class="single-layout">
    <?php include"page_top.php"; ?>
</div>
				
				
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content">
                          <div class="art-post">
                              <div class="art-post-body">
                          <div class="art-post-inner art-article" align="center">
                                          
										  
<!-- Nivo Slider Start 2nd part -->	
						
<div id="wrapper" >
    
       

        <div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
				
				
          		
          <!-- 
			<img src="img_980px/new/06.png"/>
		   <img src="img_980px/new/05.png"/>
		   <img src="img_980px/new/08.png"/>
		   <img src="img_980px/new/12.png"/>
		   -->
		   
			
            </div>
            
        </div>

    </div>
    <script type="text/javascript" src="scripts_nivo/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="scripts_nivo/jquery.nivo.slider.pack.js"></script>
    
	<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect: 'random',
        animSpeed: 500,
        pauseTime: 5000
    });
});
</script>

	
								
</div>

<!-- Nivo Slider End 2nd part -->		
								  
										  
<div class="cleared"></div>
<?php 
    
    $depo_type="SELECT DISTINCT product_category, count( product_category ) cnt_cat FROM product_interest where product_type=1 GROUP BY product_category ORDER BY product_id";
    $result= mysql_query($depo_type) or die(mysql_error());
    $array_data="";
    while($row = mysql_fetch_array($result))
    {
    	$deposit[$row['product_category']]=$row['cnt_cat'];
    	
    }
    //print_r($deposit);    
    $all_depo="select * from product_interest where product_type=1";
    $dep_res= mysql_query($all_depo) or die(mysql_error());
    
?>                      
<table width="100%" >
<tr width="100%" >
<td style="padding:5px">
<p>&nbsp;</p>
<p class="style17">DEPOSIT INTEREST RATE</p>
<hr align="left" width="100%" size="1" noshade="noshade" class="style8" />

<p align="justify">
<span class="style15"></span></p>
<p>Revised Schedule of Interest Rate - Percentage per annum </p>
</td>
</tr>

<tr width="100%" >
<td style="padding:5px">

<table width="100%" class='gridtable'>
 <tr>
     <th width="250px">Deposit Type</th>
     <th width="470px">Category of Deposit</th>
     <th width="110px">Rate of Interest (p.a.)</th>
 </tr>		
  <?php
    $p_cat="";
     $table_data="";
     //print_r($deposit);
     while($row = mysql_fetch_array($dep_res))
    {
         $table_data=$table_data."<tr>";  
         if ($p_cat!=$row['product_category'])
         {	
         	$p_cat=$row['product_category'];
         	$rowspan=$deposit[$p_cat];
         
         	$table_data=$table_data."<td rowspan='".$rowspan."'>".$row['product_category']."</td>";
         	$table_data=$table_data."<td>".$row['product_desc']."</td>";
         	$table_data=$table_data."<td>".$row['interset_rate']."%</td></tr>";
         	
         }
         else
         {
           	$table_data=$table_data."<td>".$row['product_desc']."</td>";
         	$table_data=$table_data."<td>".$row['interset_rate']."</td></tr>";
         }
  ?>

   <?php
    }
    echo $table_data;	    
  ?>
    
</table>

</td>
</tr>

<tr width="100%" >
<td style="padding:5px">
<p>&nbsp;</p>
<p class="style19 style20">
<!--Note: Special rate to be offered through Head Office or Subject to prior written approval to Treasury, Head Office.-->
</p></td>
</tr>


</table>
<p>&nbsp;</p>
<p>&nbsp;</p>

                              </div>
                          </div>
                          <div class="art-post">
                              <div class="art-post-body">
                          <div class="art-post-inner art-article">
                                          
  <div class="art-postcontent">

	 
	
  </div>
										  
                                          <div class="cleared"></div>
                          </div>
                          
                          		<div class="cleared"></div>
                              </div>
                          </div>
                          <div class="cleared"></div>
                        </div>
                        
						
						
          </div>
  </div>
                <div class="cleared"></div>

<div class="art-footer single-layout-footer">
                    <div class="art-footer-t"></div>
                    <div class="art-footer-l"></div>
                    <div class="art-footer-b"></div>
                    <div class="art-footer-r"></div>
                    <div class="art-footer-body">
                        
                        <div class="art-footer-text">
<p>&nbsp;</p>		

<p>
<a href="fs_annual_report.php" class="style8">Annual Reports</a><span class="style8"> | </span> 
<a href="fs_financial_performance.php" class="style8">Financial Performance</a> <span class="style8"> | </span>
<a href="complaincontact.php" class="style2">Complain Cell</a> <span class="style8"> | </span>
<a href="usefullink.php" class="style2">Useful Link Site</a> <span class="style8"> | </span>
<a href="basaldisclousre.php" class="style2">Disclouser Under Basel - II</a>
</p>							

<p>&nbsp;</p>
							
<p>Copyright © 2012 - National Bank Limited. All Rights Reserved.</p> </br>
							
							
                        </div>
                		<div class="cleared"></div>
                    </div>
                </div>
</body>
</html>
               