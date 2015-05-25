<?php
include('admin_reqonce/db_con.php');
require_once "pasing.php";
include"page_top.php";
?>	

	<script type="text/javascript" src="clearbox.js"></script>	
				
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content">
                          <div class="art-post">
                              <div class="art-post-body">
                          <div class="art-post-inner art-article" >
                                          
<p>&nbsp;</p>
<div class="style17" style="padding-left:10px;">PHOTO GALLARY</div>
<hr align="left" width="100%" size="1" noshade="noshade" class="style8" />	
<p>&nbsp;</p>									  
<!-- Image Scroll Start 2nd part -->	

<?php
					  
					 
					  $data_pgallary="select * from photogallary";
					  $qry_pgallary=mysql_query($data_pgallary);
					  
					 // print_r($show);
					$file_path="nbladmin_panel/assets/img/photo/";						  
?>		
				

   <div class="fluid_container"> 	
   

        <div class="camera_wrap camera_azure_skin" id="camera_wrap_3">
		<?php 
		
while($show=mysql_fetch_assoc($qry_pgallary))
					  {
?>
            <div data-src="<?php echo $file_path.$show['pgallery_imgurl']; ?>">
		
			
			<div class="camera_caption fadeFromBottom">
                    
<em><a style="color:#FFFFFF" href="modal_photo_gallary.php?pgallery_id=<?php echo  $show['pgallery_id'] ?>" rel="clearbox[width=550,height=320]">Press Release</a></em>
                </div>
				</div>
	<?php  } ?>		
      
        </div><!-- #camera_wrap_3 -->

   </div>
   
    <div style="clear:both; display:block; height:10px"></div>
	

	
 <?php // } ?>	
  
<p>&nbsp;</p>
 
<!-- Image Scroll End 2nd part -->		

</div></div></div>
								  
<?php 
include "page_bottom.php";
?> 