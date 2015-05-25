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
				
				
          	<!-- <img src="img_980px/new/Aboutus_sponsor_directors.png"/> -->
			
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

<div style="padding:10px">  
                       
<table width="100%" border="0">
  
<p>&nbsp;</p>
<p>&nbsp;</p>

  
  <tr>
    <td colspan="3"><div align="center" class="style8">
      <p align="left" class="style9">BOARD OF DIRECTORS</p>
      <hr align="left" width="100%" size="1" noshade="noshade" class="style8" />
      <p>&nbsp;</p>
    </div>      
      <div align="center"></div>    <div align="center"></div></td>
    </tr>
  
  <p>&nbsp;</p>
  
  <?php
  $qu_com="select * from board where designation='Chairman' and active=1";
  $result= mysql_query($qu_com) or die(mysql_error());
  while($row = mysql_fetch_array($result))
    {
  ?>
  <tr>
    <td width="33%">&nbsp;</td>
    <td width="33%"><div align="center"><img src="nbladmin_panel/assets/img/director/<?php echo $row['image']; ?>" /></div><div><center><strong><?php echo $row['board_name'] ;?><br/><?php echo $row['designation'] ;?></strong></center></div></td>
    <td width="33%">&nbsp;</td>
  </tr>
 <?php
}
?> 
  <tr>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
  </tr>
  
  <tr>
   <?php
  $qu_com="select * from board where designation='Director' and active=1 order by pos_index LIMIT 0 , 3";
  $result= mysql_query($qu_com) or die(mysql_error());
  $i=1;
  while($row = mysql_fetch_array($result))
  {
    
  ?>
     
    <td width="33%"><div align="center"><img src="nbladmin_panel/assets/img/director/<?php echo $row['image']; ?>" /></div><div><center><strong><?php echo $row['board_name'] ;?><br/><?php echo $row['designation'] ;?></strong></center></div></td>
  <?php
   
  }
  ?> 
  </tr>
  <tr>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
  </tr>
    <tr>
   <?php
  $qu_com="select * from board where designation='Director' and active=1 order by pos_index LIMIT 3 ,3 ";
  $result= mysql_query($qu_com) or die(mysql_error());
  $i=1;
  while($row = mysql_fetch_array($result))
  {
    
  ?>
     
    <td width="33%"><div align="center"><img src="nbladmin_panel/assets/img/director/<?php echo $row['image']; ?>" /></div><div><center><strong><?php echo $row['board_name'] ;?><br/><?php echo $row['designation'] ;?></strong></center></div></td>
  <?php
   
  }
  ?> 
  </tr>
  <tr>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
  </tr>
   <tr>
   <?php
  $qu_com="select * from board where designation='Director' and active=1 order by pos_index LIMIT 6 ,3 ";
  $result= mysql_query($qu_com) or die(mysql_error());
  $i=1;
  while($row = mysql_fetch_array($result))
  {
    
  ?>
     
    <td width="33%"><div align="center"><img src="nbladmin_panel/assets/img/director/<?php echo $row['image']; ?>" /></div><div><center><strong><?php echo $row['board_name'] ;?><br/><?php echo $row['designation'] ;?></strong></center></div></td>
  <?php
   
  }
  ?> 
  </tr>
   <tr>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
  </tr>
  
  <tr>
   <?php
  $qu_com="select * from board where designation in ('Independent Director','Director') and active=1 order by pos_index LIMIT 9 ,3 ";
  $result= mysql_query($qu_com) or die(mysql_error());
  $i=1;
  while($row = mysql_fetch_array($result))
  {
    
  ?>
     
    <td width="33%"><div align="center"><img src="nbladmin_panel/assets/img/director/<?php echo $row['image']; ?>" /></div><div><center><strong><?php echo $row['board_name'] ;?><br/><?php echo $row['designation'] ;?></strong></center></div></td>
  <?php
   
  }
  ?> 
  </tr>
   <tr>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
  </tr>
  <tr>
   <?php
  $qu_com="select * from board where designation in ('Independent Director','Managing Director(CC)','Managing Director') and active=1 order by pos_index LIMIT 2,3 ";
  $result= mysql_query($qu_com) or die(mysql_error());
  $i=1;
  while($row = mysql_fetch_array($result))
  {
    
  ?>
     
    <td width="33%"><div align="center"><img src="nbladmin_panel/assets/img/director/<?php echo $row['image']; ?>" /></div><div><center><a href="<?php echo $row['url'];?>"><strong><?php echo $row['board_name'] ;?><br/><?php echo $row['designation'] ;?></strong></a></center></div></td>
  <?php
   
  }
  ?> 
  </tr> 
</table>
     </div>
   </div>
 </div>
                         
<?php
include"page_bottom.php";
?>							 