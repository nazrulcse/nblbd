<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Welcome To National Bank Limited</title>

    <link rel="stylesheet" href="style-new-900px_2_new.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>


<!-- Nivo Slider Start 1st part -->	

	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    
    <link rel="stylesheet" href="scripts_nivo/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="scripts_nivo/style_nevo.css" type="text/css" media="screen" />

<!-- Nivo Slider End 1st part -->	
	
	
<style type="text/css">
<!--
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #333333;
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style6 {
	color: #C5530D;
	font-weight: bold;
}
.style7 {color: #000000}
-->
</style>




<!-- Start of news scroll-->


<style type="text/css">

/*Example CSS for the two demo scrollers*/

#pscroller1{
width: 200px;
height: 70px;
border: 0px solid black;
padding: 5px;
background-color: ;
}

#pscroller2{
width: 350px;
height: 20px;
border: 1px solid black;
padding: 3px;
}

#pscroller2 a{
text-decoration: none;
}

.someclass{ //class to apply to your scroller(s) if desired
}
.style10 {font-family: Arial, Helvetica, sans-serif}
.style11 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
.style13 {font-family: Arial}
.style14 {
	color: #009900;
	font-size: 16px;
	font-weight: bold;
}
.style8 {	color: #009933;
	font-weight: bold;
}
.style9 {
	font-family: "Monotype Corsiva";
	font-size: 18px;
	font-weight: bold;
	color: #009900;
}
.style17 {
	font-size: 20px;
	color: #009933;
	font-family: "Monotype Corsiva";
	font-weight: bold;
}
</style>

<script type="text/javascript">

/*Example message arrays for the two demo scrollers*/

var pausecontent=new Array()
pausecontent[0]='<a href="news.html"><strong>New Branch Open</strong></a><br/><br/>New branch has been launched at Madhabdi, Narsingdi.'
pausecontent[1]='<a href="news.html"><strong>Next EC Meeting</strong></a><br/><br/>Next Executive Committee Meeting is going to be held on ...'

</script>

<script type="text/javascript">

/***********************************************
* Pausing up-down scroller- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

function pausescroller(content, divId, divClass, delay){
this.content=content //message array content
this.tickerid=divId //ID of ticker div to display information
this.delay=delay //Delay between msg change, in miliseconds.
this.mouseoverBol=0 //Boolean to indicate whether mouse is currently over scroller (and pause it if it is)
this.hiddendivpointer=1 //index of message array for hidden div
document.write('<div id="'+divId+'" class="'+divClass+'" style="position: relative; overflow: hidden"><div class="innerDiv" style="position: absolute; width: 100%" id="'+divId+'1">'+content[0]+'</div><div class="innerDiv" style="position: absolute; width: 100%; visibility: hidden" id="'+divId+'2">'+content[1]+'</div></div>')
var scrollerinstance=this
if (window.addEventListener) //run onload in DOM2 browsers
window.addEventListener("load", function(){scrollerinstance.initialize()}, false)
else if (window.attachEvent) //run onload in IE5.5+
window.attachEvent("onload", function(){scrollerinstance.initialize()})
else if (document.getElementById) //if legacy DOM browsers, just start scroller after 0.5 sec
setTimeout(function(){scrollerinstance.initialize()}, 500)
}

// -------------------------------------------------------------------
// initialize()- Initialize scroller method.
// -Get div objects, set initial positions, start up down animation
// -------------------------------------------------------------------

pausescroller.prototype.initialize=function(){
this.tickerdiv=document.getElementById(this.tickerid)
this.visiblediv=document.getElementById(this.tickerid+"1")
this.hiddendiv=document.getElementById(this.tickerid+"2")
this.visibledivtop=parseInt(pausescroller.getCSSpadding(this.tickerdiv))
//set width of inner DIVs to outer DIV's width minus padding (padding assumed to be top padding x 2)
this.visiblediv.style.width=this.hiddendiv.style.width=this.tickerdiv.offsetWidth-(this.visibledivtop*2)+"px"
this.getinline(this.visiblediv, this.hiddendiv)
this.hiddendiv.style.visibility="visible"
var scrollerinstance=this
document.getElementById(this.tickerid).onmouseover=function(){scrollerinstance.mouseoverBol=1}
document.getElementById(this.tickerid).onmouseout=function(){scrollerinstance.mouseoverBol=0}
if (window.attachEvent) //Clean up loose references in IE
window.attachEvent("onunload", function(){scrollerinstance.tickerdiv.onmouseover=scrollerinstance.tickerdiv.onmouseout=null})
setTimeout(function(){scrollerinstance.animateup()}, this.delay)
}


// -------------------------------------------------------------------
// animateup()- Move the two inner divs of the scroller up and in sync
// -------------------------------------------------------------------

pausescroller.prototype.animateup=function(){
var scrollerinstance=this
if (parseInt(this.hiddendiv.style.top)>(this.visibledivtop+5)){
this.visiblediv.style.top=parseInt(this.visiblediv.style.top)-5+"px"
this.hiddendiv.style.top=parseInt(this.hiddendiv.style.top)-5+"px"
setTimeout(function(){scrollerinstance.animateup()}, 50)
}
else{
this.getinline(this.hiddendiv, this.visiblediv)
this.swapdivs()
setTimeout(function(){scrollerinstance.setmessage()}, this.delay)
}
}

// -------------------------------------------------------------------
// swapdivs()- Swap between which is the visible and which is the hidden div
// -------------------------------------------------------------------

pausescroller.prototype.swapdivs=function(){
var tempcontainer=this.visiblediv
this.visiblediv=this.hiddendiv
this.hiddendiv=tempcontainer
}

pausescroller.prototype.getinline=function(div1, div2){
div1.style.top=this.visibledivtop+"px"
div2.style.top=Math.max(div1.parentNode.offsetHeight, div1.offsetHeight)+"px"
}

// -------------------------------------------------------------------
// setmessage()- Populate the hidden div with the next message before it's visible
// -------------------------------------------------------------------

pausescroller.prototype.setmessage=function(){
var scrollerinstance=this
if (this.mouseoverBol==1) //if mouse is currently over scoller, do nothing (pause it)
setTimeout(function(){scrollerinstance.setmessage()}, 100)
else{
var i=this.hiddendivpointer
var ceiling=this.content.length
this.hiddendivpointer=(i+1>ceiling-1)? 0 : i+1
this.hiddendiv.innerHTML=this.content[this.hiddendivpointer]
this.animateup()
}
}

pausescroller.getCSSpadding=function(tickerobj){ //get CSS padding value, if any
if (tickerobj.currentStyle)
return tickerobj.currentStyle["paddingTop"]
else if (window.getComputedStyle) //if DOM2
return window.getComputedStyle(tickerobj, "").getPropertyValue("padding-top")
else
return 0
}

</script>

<!-- End of news scroll-->


<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<body>


<div id="art-main"> <div style="padding-left:800px; padding-top:5px";>

<a href="http://mail.nblbd.com/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('webmail','','img/email2.png',1)"><img src="img/email1.png" name="webmail" width="35" height="35" border="0" id="webmail" title="Web Mail" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
<a href="career.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('career','','img/career3.png',1)"><img src="img/career1.png" name="career" width="33" height="33" border="0" id="career" title="Career"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        
<a href="contact.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('contact','','img/phone2.png',1)"><img src="img/phone1.png" name="contact" width="32" height="32" border="0" id="contact" title="Contact Us" /></a>
		
</div>



        <div class="art-sheet">
            <div class="art-sheet-tl"></div>
            <div class="art-sheet-tr"></div>
            <div class="art-sheet-bl"></div>
            <div class="art-sheet-br"></div>
            <div class="art-sheet-tc"></div>
            <div class="art-sheet-bc"></div>
            <div class="art-sheet-cl"></div>
            <div class="art-sheet-cr"></div>
            <div class="art-sheet-cc"></div>
            <div class="art-sheet-body">
                <div class="art-header">
                        <div class="art-header-png"></div>
                        <div class="art-header-jpeg"></div>
                    <script type="text/javascript" src="swfobject.js"></script>
                    <div id="art-flash-area">
                    <div id="art-flash-container">
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" style="width: 100%;" height="200" id="art-flash-object">
                        <param name="movie" value="images/flash_scroll.swf" />
                        <param name="quality" value="high" />
                    	<param name="scale" value="exactfit" />
                    	<param name="wmode" value="transparent" />
                    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.2&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
                        <param name="swfliveconnect" value="true" />
                        <!--[if !IE]>-->
                        <object type="application/x-shockwave-flash" data="images/flash_scroll.swf" style="width: 100%;" height="200">
                            <param name="quality" value="high" />
                    	    <param name="scale" value="exactfit" />
                    	    <param name="wmode" value="transparent" />
                    	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.2&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
                            <param name="swfliveconnect" value="true" />
                        <!--<![endif]-->
                          	<div class="art-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>
                        <!--[if !IE]>-->
                        </object>
                        <!--<![endif]-->
                    </object>
                    </div>
                    </div>
                    <script type="text/javascript">swfobject.switchOffAutoHideShow(); swfobject.registerObject("art-flash-object", "9.0.0", "expressInstall.swf");</script>
                    <div class="art-logo">
                     <h1 id="name-text" class="art-logo-name"><a href="https://www.nblbd.com">National Bank Limited</a></h1>
                     <h2 id="slogan-text" class="art-logo-text">A Bank for Performance with Potential</h2>
                    </div>
                </div>
                <div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
                		
					<?php
					  
					  include('admin_reqonce/db_con.php');
					  $data="select * from menu_top";
					  $qry=mysql_query($data);
					  while($show=mysql_fetch_array($qry))
					  {
						echo $show['menutext_top'];
						
					  }
					  
				  ?>
					
                		
						
                	</ul>
                </div>
				
				
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
                          
<div style="width:100%; padding-left:10px;">
 
      <p class="style10">&nbsp;</p>
	  <p class="style11"> &nbsp;&nbsp;</p>
      <p align="left" class="style9">Neaz Ahmed</p>
	  <p align="left" class="style9">Managing Director, National Bank Limited</p>
      <hr align="left" width="90%" size="1" noshade="noshade" class="style8" />
      <p class="style11">&nbsp;</p>
	  <p class="style11">&nbsp;</p>
      

</div>

    
<div>      
<div  class="style13" style="width:99%;border:solid 0px #FF3366">
<div style="width:100%;float:left;border:solid 0px #3300CC">
		<div style="width:73%;float:left;border:solid 0px #3300CC;margin-left:10px">
		  <div align="justify">Neaz Ahmed has been appointed Managing Director of National Bank Limited. Prior to this appointment he was the Consultant of the same Bank. Neaz Ahmed joins NBL with 31 years experience in Banking in Foreign & Local Banks. Neaz is the second son of Late Borhanuddin Ahmed, a former Secretary to the Government of Pakistan & Bangladesh and started his banking career in Grindlays Bank in January 1978 as a Management Trainee after completing B.A. (Hons.) & M. A. in Economics from Dhaka University.
		   
</br> 
<p>&nbsp;</p>
<p>&nbsp;</p>

		  He spent 19 years with Grindlays Bank and held many important positions including Manager, Business Banking in ANZ Bank in New Zealand for 4 years. He attended many Trainings/seminars at home and abroad. Neaz also served as EVP & Head of Marketing, I.T. & Logistic Division, SEVP & Head of Int'l Division, Overseas Operation & Garments Division in IFIC Bank Ltd (from March 1997 -October, 2002), DMD in Premier Bank (from November 2002 - September 2004) & Managing Director in Southeast Bank Ltd (from October 2004 - March 2009).  
</br> 
<p>&nbsp;</p>
<p>&nbsp;</p>

</div>
		</div>
		<div style="width:20%;float:left;border:solid 0px #3300CC;margin-left:10px"><img src="images/board_directories/neaz.jpg" width="156px" height="190px" /> </div> 
</div>
<div style="margin-left:10px;text-align:justify;">
  <div align="justify">Neaz Ahmed is an Associate of Chartered Institute of Bankers, UK (ACIB) & a DAIBB. He is also appointed as Honorary Consul of the Consulate of New Zealand in Bangladesh since 2007. 
  
</br> 
<p>&nbsp;</p>
<p>&nbsp;</p>
		  
Neaz is a seeded Tennis Player of the Country and is married to Shaheda & they have two children, Sabin & Meraz.

  </div>
</div>
</div>
         
        
 </div>    


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
                        <div class="art-layout-cell art-sidebar1">
                         <div class="art-layout-bg"></div>
                          <div class="art-block">
                              <div class="art-block-body">
                                          <div class="art-blockheader">
                                              <div class="l"></div>
                                              <div class="r"></div>
                                              <h3 class="t"><img src="images/logo_search.png"/></h3>
                                          </div>
                                          <div class="art-blockcontent">
                                              <div class="art-blockcontent-body">
                                                          <div><form method="get" id="newsletterform" action="javascript:void(0)">
                                                          <input type="text" value="" name="email" id="s" style="width: 95%;" />
                                                          <span class="art-button-wrapper">
                                                          	<span class="art-button-l"> </span>
                                                          	<span class="art-button-r"> </span>
                                                          	<input class="art-button" type="submit" name="search" value="Search" />
                                                          </span>
                                                          
                                                          </form></div>
                                          
                                          		<div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
                              </div>
                          </div>
                          <div class="art-block">
                              <div class="art-block-body">
                                          <div class="art-blockheader">
                                              <div class="l"></div>
                                              <div class="r"></div>
                                              <h3 class="t"><img src="images/logo_rate.png"/></h3>
                                          </div>
                                          <div class="art-blockcontent">
                                              <div class="art-blockcontent-body">
                                                          <div>
                                                                            
                                                                            
                                                                            <p><b>30/11/2011</b></p>
                                                                           
                                                                            <table width="90%" border="0">
                                                                              <tr>
                                                                                <td><span class="style6">Currency</span></td>
                                                                                <td><div align="center"><span class="style6">Buy</span></div></td>
                                                                                <td><div align="center"><span class="style6">Cell</span></div></td>
                                                                              </tr>
                                                                              <tr>
                                                                                <td><span class="style7">USD</span></td>
                                                                                <td><div align="center">75.0000</div></td>
                                                                                <td><div align="center">76.0000</div></td>
                                                                              </tr>
                                                                              <tr>
                                                                                <td><span class="style7">GBP</span></td>
                                                                                <td><div align="center">117.1850</div></td>
                                                                                <td><div align="center">121.2848</div></td>
                                                                              </tr>
                                                                              <tr>
                                                                                <td><span class="style7">EUR</span></td>
                                                                                <td><div align="center">102.6411</div></td>
                                                                                <td><div align="center">106.3055</div></td>
                                                                              </tr>
                                                                              <tr>
																			  <!-- 
                                                                               <td><span class="style7">AUD</span></td>
                                                                                <td><div align="center">75.8829</div></td>
                                                                                <td><div align="center">80.1178</div></td>
                                                                              </tr>
																			  <tr>
                                                                               <td><span class="style7">CAD</span></td>
                                                                                <td><div align="center">73.0365</div></td>
                                                                                <td><div align="center">77.1912</div></td>
                                                                              </tr>
																			  <tr>
                                                                               <td><span class="style7">JYP</span></td>
                                                                                <td><div align="center">0.9659</div></td>
                                                                                <td><div align="center">1.0153</div></td>
                                                                              </tr>
																			  <tr>
                                                                               <td><span class="style7">SGD</span></td>
                                                                                <td><div align="center">58.3777</div></td>
                                                                                <td><div align="center">61.9995</div></td>
                                                                              </tr> -->
                                                                            </table>
                                                                            <p>
                                                                              <a href="exchange_rate.php">Read more...</a></p>
                                                                            
                                                </div>
                                          
                                          		<div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
                              </div>
                          </div>
						  
						  
						  <div class="art-block">
                              <div class="art-block-body">
                                          <div class="art-blockheader">
                                              <div class="l"></div>
                                              <div class="r"></div>
                                              <h3 class="t"><img src="images/logo_news.png"/></h3>
                                          </div>
                                          <div class="art-blockcontent">
                                              <div class="art-blockcontent-body">
                                                <div>
														  
														 
														 
<!-- Flash Latest News start-->
														 
<script type="text/javascript">

//new pausescroller(name_of_message_array, CSS_ID, CSS_classname, pause_in_miliseconds)

new pausescroller(pausecontent, "pscroller1", "someclass", 3000)
</script>												 
														 
<a href="news.html">Read More ...</a>														 
 <!-- Flash Latest News End-->
											    </div>
                                          
                                          		<div class="cleared"></div>
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
				<p>&nbsp;</p>		
                 <?php
					  
					  include('admin_reqonce/db_con.php');
					  $data_menue_bot="select * from menu_bottom";
					  $qry_menue_bot=mysql_query($data_menue_bot);
					  while($show=mysql_fetch_array($qry_menue_bot))
					  {
						echo $show['menutext_bot'];
						
					  }
					  
				  ?>
							
                            <p>&nbsp;</p>
							
                    <p>Copyright ©     
					<?php
					  
					  include('admin_reqonce/db_con.php');
					  $data_copyright="select * from copyright";
					  $qry_copyright=mysql_query($data_copyright);
					  while($show=mysql_fetch_array($qry_copyright))
					  {
						echo $show['copyright_text'];
						
					  }
					  
				  ?>
				  </p> </br>
							
							
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
