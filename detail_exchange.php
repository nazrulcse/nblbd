<?php
include('admin_reqonce/db_con.php');
include"page_top.php";

?>
				
				
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
    
    $rate_detail="SELECT * FROM exchange_rate ORDER BY rate_id";
    $result= mysql_query($rate_detail) or die(mysql_error());
    
    
    
?>                      
<table width="100%" >
<tr width="100%" >
<td style="padding:5px">
<p>&nbsp;</p>
<p class="style17"><strong>DAILY EXCHANGE RATE</strong></p>
<hr align="left" width="100%" size="1" noshade="noshade" class="style8" />

<p align="justify">
<span class="style15"></span></p>
<p></p>
</td>
</tr>

<tr width="100%" >
<td style="padding:5px">

<table width="700px" class='gridtable'>
 <tr>
     <th width="300px"><strong>Currency</strong></th>
     <th width="200px"><strong>Sell Rate</strong></th>
     <th width="200px"><strong>Buy Rate</strong></th>
 </tr>		
  <?php
    $p_cat="";
     $table_data="";

     while($row = mysql_fetch_array($result))
    {
         
         	$table_data=$table_data."<td>".$row['currency_name']."</td>";
         	$table_data=$table_data."<td>".$row['sell_rate']."</td>";
         	$table_data=$table_data."<td>".$row['buy_rate']."</td></tr>";
         	
    
    }
    echo $table_data;	         
  ?>

</table>

</td>
</tr>

<tr width="100%" >
<td style="padding:5px">
</td>
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

<div class="art-footer">
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
               