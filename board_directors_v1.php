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
                                  <div class="sponsor-director">
                                      <div class="sponsor">
                                          <p align="left">BOARD OF DIRECTORS</p>
                                          <hr align="left" width="100%" size="1" noshade="noshade" class="style8" />
                                      </div>
                                      <div class="cleared"></div>
                                      <?php
                                      $qu_com="select * from board where designation='Chairman' and active=1";
                                      $result= mysql_query($qu_com) or die(mysql_error());
                                      while($row = mysql_fetch_array($result))
                                      {
                                          ?>

                                          <div style="width:100%;text-align: center;">
                                              <img src="nbladmin_panel/assets/img/director/<?php echo $row['image']; ?>" />
                                              <p><strong><?php echo $row['board_name'] ;?></strong></p>
                                              <p><?php echo $row['designation'] ;?></p>
                                          </div>

                                      <?php
                                      } ?>
                                      <div class="cleared"></div>
                                      <?php
                                      $qu_com="select * from board where designation in ('Independent Director','Director','Managing Director(CC)','Managing Director') and active=1 order by pos_index ";
                                      $result= mysql_query($qu_com) or die(mysql_error());
                                      $i=1;
                                      while($row = mysql_fetch_array($result))
                                      {

                                          ?>

                                          <div class="director">
                                              <img src="nbladmin_panel/assets/img/director/<?php echo $row['image']; ?>" />
                                              <p><strong><?php echo $row['board_name'] ;?></strong></p>
                                              <p><strong><?php echo $row['designation'] ;?></strong></p>
                                          </div>
                                      <?php

                                      }

                                      ?>
                                      <div class="cleared"></div>
                                  </div>
   </div>
 </div>

<?php
include"page_bottom.php";
?>							 