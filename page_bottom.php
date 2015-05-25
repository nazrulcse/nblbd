 <div class="art-post">
                              <div class="art-post-body" >
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
                        
						
						<div class="art-layout-cell art-sidebar1">
                         <div class="art-layout-bg"></div>
                          
                          <div class="art-block"  >
                              <div class="art-block-body">
                                          <div class="art-blockheader">
                                              <div class="style11" style="padding-top:10px;">DAILY EXCHANGE RATE</div>
                                              <div class="r"></div>
                                              <h3 class="t"></h3>
                                          </div>
                                          

<div class="art-blockcontent">
<div class="art-blockcontent-body">
  <div>
                                                                            
                                                                            
                                                                            <p><b></b></p>
                                                                           
<?php
include('admin_reqonce/db_con.php');
$qu_date="select max(rate_date) rate_date from exchange_rate";
$res_date=mysql_query($qu_date);
$date=array();
while($res=mysql_fetch_array($res_date)){
  $date=$res['rate_date'];
}

$qu_rate="select * from exchange_rate order by rate_id limit 0,3";
$res_rate=mysql_query($qu_rate);
$rate=array();

?>					
               
Date: <?php echo $date;?> 

<p><b></b></p>
<table width="98%" border="0">
<tr>
            <td height="20px" ><span class="style12">Currency</span></td>
            <td height="20px"><div align="center"><span class="style12">Buy </span></div></td>
            <td height="20px"><div align="center"><span class="style12">Sell </span></div></td>
</tr>
<?php 

while($res1=mysql_fetch_array($res_rate)){

?>
<tr>
            <td height="20px" ><span class="style12"><?php echo $res1['currency_name']; ?></span></td>
            <td height="20px"><div align="center"><span class="style12"><?php echo $res1['buy_rate']; ?></span></div></td>
            <td height="20px"><div align="center"><span class="style12"><?php echo $res1['sell_rate']; ?></span></div></td>
</tr>
<?php
}
 
?>

</table>
                                                                           
</div>


                                          
                                          		
                                              </div>
                                          </div>

<div align="right"><a href="detail_exchange.php"><< Read More >></a></div>

                          		<div class="cleared"></div>
                              </div>
                          </div>
						  
						  
						  <div class="art-block">
                              <div class="art-block-body">
                                          <div class="art-blockheader">
                                              <div class="style11" style="padding-top:10px;">NEWS & EVENTS</div>
                                              <div class="r"></div>
                                              <h3 class="t"></h3>
                                          </div>
                                          <div class="art-blockcontent">
                                              <div class="art-blockcontent-body">

                                                <div>
														  
														 
														 
<!-- Flash Latest News start-->
														 
<script type="text/javascript">

//new pausescroller(name_of_message_array, CSS_ID, CSS_classname, pause_in_miliseconds)

new pausescroller(pausecontent, "pscroller1", "someclass", 3000)
</script>												 
														 
													 
 <!-- Flash Latest News End-->
											    </div>
                                                
                                                
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
                              </div>
                          </div>
						  
						                                          		
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
			
					
<div style=" float:left;width:135px; height:70px; border:solid #F00 0px; margin-top:5px;">

<!-- Flash Latest News start-->
														 
<script type="text/javascript">

//new pausescroller(name_of_message_array, CSS_ID, CSS_classname, pause_in_miliseconds)

new pausescroller(pausecontent2, "pscroller2", "someclass", 3000)
</script>												 
														 
													 
 <!-- Flash Latest News End-->

</div>

<div style=" float:left; margin-left:5px; margin-right:5px; border:solid #F00 0px; padding: 20px 0 10px 0;">
<div id="copyright" style="display:none;"><a href="http://apycom.com/"></a></div>  
<a href="fs_annual_report.php" class="style8">Annual Reports</a><span class="style8"> | </span> 
<a href="fs_financial_performance.php" class="style8">Financial Performance</a> <span class="style8"> | </span>
<a href="complaincontact.php" class="style2">Complain Cell</a> <span class="style8"> | </span>
<a href="usefullink.php" class="style2">Useful Link Site</a> <span class="style8"> | </span>
<a href="basaldisclousre.php" class="style2">Disclouser Under Basel - II</a>
<br/>	<br/>					
<p>Copyright 2008 - National Bank Limited. All Rights Reserved.</p> 
</div>	
				


<div style="float:left;width:135px; height:70px; border:solid #F00 0px; margin-top:5px;">
<!-- Flash Latest News start-->
<script type="text/javascript">

//new pausescroller(name_of_message_array, CSS_ID, CSS_classname, pause_in_miliseconds)

new pausescroller(pausecontent3, "pscroller3", "someclass", 3000)
</script>												 
														 
													 
 <!-- Flash Latest News End-->
</div>
                		<div class="cleared"></div>
                    </div>
                </div>
        		<div class="cleared"></div>
</div>
        </div>
        <div class="cleared"></div>
        
</div>
    
    
    
<div id="navtxt" class="navtext" style="position:absolute; top:-100px; left:0px; visibility:hidden"></div>    
  
</body>
</html>
