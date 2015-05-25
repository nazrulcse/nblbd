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
	color: #006600;
	text-decoration: none;
}
a:visited {
	color: #006600;
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: #006600;
}
a:active {
	text-decoration: none;
	color: #006600;
}
.style7 {color: #000000}
-->
</style>


<!-- Start of Image scroll 1st part-->

<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'> 
    <style>
		body {
			margin: 0;
			padding: 0;
		}
		a {
			color: #09f;
		}
		a:hover {
			text-decoration: none;
		}
		#back_to_camera {
			clear: both;
			display: block;
			height: 80px;
			line-height: 10px;
			padding: 10px;
		}
		.fluid_container {
			margin: 0 auto;
			max-width: 700px;
			width: 100%;
		}
	</style>

    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Scripts
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    
    <script type='text/javascript' src='scripts/jquery.min.js'></script>
    <script type='text/javascript' src='scripts/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='scripts/camera.js'></script> 
    
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_3').camera({
				height: '380px',
				pagination: false,
				thumbnails: false,
				imagePath: 'images/'
			});

		});
	</script>

<!-- End of Image Scroll 1st part-->



	
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
padding: 0px;
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
.style10 {font-size: 12px}
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

<link href="css/cbdb-search-form.css" type="text/css" rel="stylesheet" media="screen" />



<!-- old menu

<link rel="stylesheet"  href="css/lime.css" type="text/css" media="all">
<link rel="stylesheet"  href="css/menus.css" type="text/css" media="all">
-->




<!-- New Menu Start 1/3 part -->
<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="jquery_menu.js"></script>
<script type="text/javascript" src="menu.js"></script>
<!-- New Menu SEnd 1/3 part -->	
	
	

<style type="text/css">
<!--
.style11 {
	font-size: 14px;
	font-weight: bold;
	color: #FFFFFF;
}
.style12 {
	color: #006600;
	font-weight: bold;
}
.style14 {color: #006600}
-->
</style>
</head>
<body>

<!-- New Menu Start 2/3 part -->
<style type="text/css">
* { margin:0;
    padding:0;
}

div#menu { margin:0px auto; }
div#copyright {
    font:10px 'Trebuchet MS';
    color:#ffffff;
    text-indent:50px;
    padding:0 0 0 0;
}
div#copyright a { color:#eee; }
div#copyright a:hover { color:#222; }
</style>
<!-- New Menu End 2/3 part -->



<div id="art-main"> <div class="art-sheet" style="">



<div style="float:right; padding-top:5px; padding-right:5px; padding-left:15px;">
<form id="search-form" method="get" action="http://www.google.com/search" target="_blank">
<input type="text" /> 
<input type="submit" value="GO" />

<div style="display:none">
<input type="checkbox"  name="sitesearch" value="nblbd.com" checked />
</div>

</form>
</div>

		
</div>



        <div class="art-sheet" style="border:#FF0000 0px solid;">
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
                        <div class="art-header-jpeg">
						
<div style="padding-top:45px; padding-left:680px;">
<div style="float:left; padding-left:20px;">
<a href="http://mail.nblbd.com/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('webmail','','img/email2.png',1)"><img src="img/email1.png" name="webmail" width="35" height="35" border="0" id="webmail" title="Web Mail" /></a>
</div>

<div style="float:left; padding-left:20px;">	
<a href="http://www.nblbd.com" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('career','','img/career3.png',1)"><img src="img/career1.png" name="career" width="33" height="33" border="0" id="career" title="Career"/></a>
</div>
        
<div style="float:left; padding-left:20px;">
<a href="contact.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('contact','','img/phone2.png',1)"><img src="img/phone1.png" name="contact" width="32" height="32" border="0" id="contact" title="Contact Us" /></a>
</div>						
</div>						
						
						</div>
                    
                    <div class="art-logo">
                     <h1 id="name-text" class="art-logo-name"><a href="https://www.nblbd.com">National Bank Limited</a></h1>
                     <h2 id="slogan-text" class="art-logo-text">A Bank for Performance with Potential</h2>
					
                    </div>
					
					
                </div>
               
			   			   
		
  	
			
			
			
			
			

			
			
			
			
			
<div id="menu">
    <ul class="menu">

<li><a href="index.php"><span>Home</span></a></li> 
<li><a href="aboutus.php" class="parent"><span>About Us</span></a> 
						<div><ul>
										<li><a href="history_heritage.php"><span>History & Heritage</span></a></li>
                						<li><a href="mission_vision.php"><span>Mission & Vision</span></a></li>
                						<li><a href="sponsor_directors.php"><span>Sponsor Directors</span></a></li>
                						<li><a href="board_directors.php"><span>Board of Directors</span></a></li>
										<li><a href="chairman_message.php"><span>Chairman's Message</span></a></li>
										<li><a href="executive_committe.php"><span>Executive Committee</span></a></li>
										<li><a href="audit_committe.php"><span>Audit Committee</span></a></li>
										<li><a href="management_committe.php"><span>Management Committee</span></a></li>
                						<li><a href="asset_liability_committe.php"><span>Asset Liability Committee</span></a></li>
										<li><a href="photo_gallary.php"><span>Photo Gallary</span></a></li>
                				
						</ul></div>
						
						</li>
						
<li><a href="#" class="parent"><span>Products & Services</span></a>
                			<div><ul>
                				<li><a href="#" class="parent"><span>Deposit Products</span></a>
                					<div><ul>
                						<li><a href="ps_saving_deposit.php"><span>Savings Deposit</span></a></li>
                						<li><a href="ps_current_deposit.php"><span>Current Deposit</span></a></li>
                						<li><a href="#" class="parent"><span>Term Deposit</span></a>
                                                                   <div><ul>
                                                                      <li><a href="ps_snd.php"><span>Special Notice Deposit</span></a></li>
                                                                      <li><a href="ps_fdr.php"><span>Fixed Deposit</span></a></li>
                                                                   </ul></div>
                                                                </li>

								<li><a href="#" class="parent"><span>Foreign Currency Deposit</span></a>
                                                                 <div><ul>
                                                                      <li><a href="ps_fc_rfcd.php"><span>RFC Deposit</span></a></li>
                                                                      <li><a href="ps_fc_nfcd.php"><span>NFC Deposit</span></a></li>
                                                                   </ul></div>
                                                                </li>
								<li><a href="ps_mss.php"><span>Monthly Savings Scheme</span></a></li>
								<li><a href="ps_mis.php"><span>Monthly Income Scheme</span></a></li>
								<li><a href="ps_dbs.php"><span>Double Benefit Scheme</span></a></li>
								<li><a href="ps_millionair.php"><span>Millionaire Income Scheme</span></a></li>
										
                					</ul></div>
                				</li>
                				
								<li><a href="#" class="parent"><span>Credit Products</span></a>
                					<div><ul>
                						<li><a href="ps_overdraft.php"><span>Overdraft</span></a></li>
                						<li><a href="ps_lease_financing.php"><span>Lease Financing</span></a></li>
                						<li><a href="ps_house_building.php"><span>House Building</span></a></li>
										<li><a href="ps_sme.php"><span>Small Medium Enterprise</span></a></li>
										<li><a href="ps_ccs.php"><span>Consumer Credit Scheme</span></a></li>
										<li><a href="ps_trade_finance.php"><span>Trade Finance</span></a></li>
										
                					</ul></div>
                				</li>
								
								<li><a href="#" class="parent"><span>Cards</span></a>
                					<div><ul>
                						<li><a href="credit_card.php"><span>Credit Card</span></a></li>
										<li><a href="power_card.php"><span>Power Card</span></a></li>
                					</ul></div>
                				</li>
								
                				<li><a href="downloads.php"><span>Download</span></a></li>
								
								
                			</ul></div>
                		</li>		
                		
						
<li><a href="fs_financial_performance.php" class="parent"><span>Financial Status</span></a>
						
							<div><ul>
								<li><a href="fs_annual_report.php"><span>Annual Report</span></a></li>
                				<li><a href="fs_financial_performance.php"><span>Financial Performance</span></a></li>
                                 <li><a href="#" class="parent"><span>Interest Rates</span></a>
											<div><ul>
												<li><a href="fs_deposit_rate.php"><span>Deposit Rate</span></a></li>
												<li><a href="fs_lending_rate.php"><span>Lending Rate</span></a></li>
											</ul></div>
										</li>                				
                						<li><a href="fs_transaction_charges.php"><span>Transaction Charges</span></a></li>
                						<li><a href="fs_credit_report.php"><span>Credit Report</span></a></li>
								
										                				
							</ul></div>
						
						</li>
							
							
		<li>
            <a href="#" class="parent"><span>Service Location</span></a>
                			<div><ul>
										<li><a href="#" class="parent"><span>Branch Location</span></a>
											<div><ul>
												<li><a href="branch_location.php?division=Dhaka"><span>Dhaka</span></a></li>
												<li><a href="branch_location.php?division=Chittagong"><span>Chittagong</span></a></li>
												<li><a href="branch_location.php?division=Rajshahi"><span>Rajshahi</span></a></li>
												<li><a href="branch_location.php?division=Rangpur"><span>Rangpur</span></a></li>
												<li><a href="branch_location.php?division=Sylhet"><span>Sylhet</span></a></li>
												<li><a href="branch_location.php?division=Khulna"><span>Khulna</span></a></li>
												<li><a href="branch_location.php?division=Barisal"><span>Barisal</span></a></li>
											</ul></div>
										</li>
                						<li><a href="sl_sme_branch.php"><span>SME / Agri Branch</span></a></li>
                						<li><a href="sl_ad_branch.php"><span>Authorize Dealer Branches</span></a></li>
                						<li><a href="sl_atm.php"><span>ATM Location</span></a></li>
										<li><a href="sl_e-gp.php"><span>e-GP Service Branch</span></a></li>
										                				
							</ul></div>
                		</li>
						

<li><a href="oo_contact.php" class="parent"><span>Overseas operation</span></a>
							<div><ul>
										<li><a href="oo_contact.php"><span>Contact Address</span></a></li>
                						<li><a href="oo_correspondent_banking.php"><span>Correspondent Banking</span></a></li>
                						<li><a href="#" class="parent"><span>Foreign Remittance</span></a>
										<div><ul>
												<li><a href="oo_fr_subsidiary_companies.php"><span>Subsidiary Companies</span></a></li>
												<li><a href="oo_fr_western_union.php"><span>Western Union</span></a></li>
												<li><a href="oo_fr_moneygram.php"><span>Money Gram</span></a></li>
												<li><a href="oo_fr_others.php"><span>Other Ex. Companies & Banks</span></a></li>
											</ul></div>
										</li>
                						
							</ul></div>
						
						
						</li>


							
						<li><a href="csr_employment.php" class="parent"><span>CSR</span></a>
							<div><ul>
										<li><a href="csr_employment.php"><span>Employment</span></a></li>
                						<li><a href="csr_education.php"><span>Education</span></a></li>
                						<li><a href="csr_sports.php"><span>Sports & Cul. Activities</span></a></li>
                						<li><a href="csr_disaster_relief.php"><span>Disaster Relief</span></a></li>
										<li><a href="csr_other.php"><span>Other</span></a></li>
										
							</ul></div>					
						</li>	
						
				</ul>
				
			</div>



<!-- 
<div id="menu">
    <ul class="menu">
        <li><a href="#" class="parent"><span>Home</span></a>
            <div><ul>
                <li><a href="#" class="parent"><span>Sub Item 1</span></a>
                    <div><ul>
                        <li><a href="#" class="parent"><span>Sub Item 1.1</span></a>
                            <div><ul>
                                <li><a href="#"><span>Sub Item 1.1.1</span></a></li>
                                <li><a href="#"><span>Sub Item 1.1.2</span></a></li>
                            </ul></div>
                        </li>
                        <li><a href="#"><span>Sub Item 1.2</span></a></li>
                        <li><a href="#"><span>Sub Item 1.3</span></a></li>
                        <li><a href="#"><span>Sub Item 1.4</span></a></li>
                        <li><a href="#"><span>Sub Item 1.5</span></a></li>
                        <li><a href="#"><span>Sub Item 1.6</span></a></li>
                        <li><a href="#" class="parent"><span>Sub Item 1.7</span></a>
                            <div><ul>
                                <li><a href="#"><span>Sub Item 1.7.1</span></a></li>
                                <li><a href="#"><span>Sub Item 1.7.2</span></a></li>
                            </ul></div>
                        </li>
                    </ul></div>
                </li>
                <li><a href="#"><span>Sub Item 2</span></a></li>
                <li><a href="#"><span>Sub Item 3</span></a></li>
            </ul></div>
        </li>
        <li><a href="#" class="parent"><span>Product Info</span></a>
            <div><ul>
                <li><a href="#" class="parent"><span>Sub Item 1</span></a>
                    <div><ul>
                        <li><a href="#"><span>Sub Item 1.1</span></a></li>
                        <li><a href="#"><span>Sub Item 1.2</span></a></li>
                    </ul></div>
                </li>
                <li><a href="#" class="parent"><span>Sub Item 2</span></a>
                    <div><ul>
                        <li><a href="#"><span>Sub Item 2.1</span></a></li>
                        <li><a href="#"><span>Sub Item 2.2</span></a></li>
                    </ul></div>
                </li>
                <li><a href="#"><span>Sub Item 3</span></a></li>
                <li><a href="#"><span>Sub Item 4</span></a></li>
                <li><a href="#"><span>Sub Item 5</span></a></li>
                <li><a href="#"><span>Sub Item 6</span></a></li>
                <li><a href="#"><span>Sub Item 7</span></a></li>
            </ul></div>
        </li>
        <li><a href="#"><span>Help</span></a></li>
        <li class="last"><a href="#"><span>Contacts</span></a></li>
    </ul>
</div>

				
		
-->		

						   
