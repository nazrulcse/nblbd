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
						
<div id="wrapper">
    
       

        <div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
				
				
   <!--       	<img src="img_980px/new/Aboutus_mission_vision.png"/> -->
			
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
                         
<table width="100%" >
<tr width="100%" >
<td colspan="5" style="padding:5px">
<p>&nbsp;</p>
<p align="left" class="style17">EXECUTIVE COMMITTEE </p>
<hr align="left" width="100%" size="1" noshade="noshade" class="style8" /></td>
</tr>

<tr width="100%" >
<td colspan="5" style="padding:5px">
<p>&nbsp;</p>

</td>
</tr>
<?php
$qu_com="select * from committee where  comm_id=1 order by pos_index";
$result= mysql_query($qu_com) or die(mysql_error());
 while($row = mysql_fetch_array($result))
    {
?>
<tr width="100%" >
<td width="17%" style="padding:5px">
<p>&nbsp;</p></td>
<td width="4%" style="padding:5px"><img src="images/postcategoryicon.png" width="18" height="18" /></td>
<td width="34%" style="padding:5px"><a href="<?php echo $row['url'];?>"><strong><?php echo $row['mem_name'];?></strong></td>
<td width="30%" style="padding:5px"><strong><?php echo $row['com_desig'];?></strong></td>
<td width="15%" style="padding:5px">&nbsp;</td>
</tr>

<?php
}
?>

</table>
<p>&nbsp;</p>
<p>&nbsp;</p>

                              </div>
                          </div>
						  
<?php
include"page_bottom.php";
?>	