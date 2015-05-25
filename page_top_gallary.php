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




<link href="css/cbdb-search-form.css" type="text/css" rel="stylesheet" media="screen" />

<link rel="stylesheet"  href="css/lime.css" type="text/css" media="all">
<link rel="stylesheet"  href="css/menus.css" type="text/css" media="all">

	

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
			width: 98%;
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



</head>




<body>





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
<a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('career','','img/career3.png',1)"><img src="img/career1.png" name="career" width="33" height="33" border="0" id="career" title="Career"/></a>
</div>
        
<div style="float:left; padding-left:20px;">
<a href="contact.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('contact','','img/phone2.png',1)"><img src="img/phone1.png" name="contact" width="32" height="32" border="0" id="contact" title="Contact Us" /></a>
</div>						
</div>						
						
						</div>
                    
                    <div class="art-logo">
                     <h1 id="name-text" class="art-logo-name"><a href="http://www.nblbd.com"></a></h1>
                     <h2 id="slogan-text" class="art-logo-text"></h2>
					
                    </div>
					
					
                </div>
               
			   			   
		
  	
			
			
			   <style type="text/css">
			   #horiznav ul li a {
			   border:solid #FF0000 0px; padding-left:10px; padding-right:5px;
			   }
			    
				#horiznav ul li a:hover {
			   border:solid #FF0000 0px; padding-left:10px; padding-right:5px;
			   }
			   </style>
			   
		<div id="menul" style="padding-bottom:0px; height:40px;">
  	<div id="menur">
    <div id="top_menu" style="font-size:12px;">
        <div id="horiznav"> 
			<ul class="menunav">


<li><a href="index.php" class="haschild"><span class="l"  ></span><span class="r"></span><span class="t">Home</span></a></li> 
<li class="haschild"><a href="aboutus.php" class="haschild"><span class="l"></span><span class="r"></span><span class="t">About Us</span></a> 
						<ul>
                                                                

                                                <li><a href="history_heritage.php">History & Heritage</a></li>
                				<li><a href="mission_vision.php">Mission & Vision</a></li>
                				<li><a href="sponsor_directors.php">Sponsor Directors</a></li>
                				<li><a href="board_directors.php">Board of Directors</a></li>
						<li><a href="#">Chairman's Message</a></li>
						<li><a href="executive_committe_v1.php">Executive Committee</a></li>
						<li><a href="audit_committe_v1.php">Audit Committee</a></li>
						<li><a href="management_committe_v1.php">Management Committee</a></li>
                				<li><a href="asset_liability_committe_v1.php">Asset Liability Committee</a></li>
						<li><a href="photo_gallary.php">Photo Gallery</a></li>



                				
						</ul>
						
						</li>
						
<li><a href="ps_saving_deposit.php"><span class="l"></span><span class="r"></span><span class="t">Products & Services</span></a>
                			<ul>
                				<li><a href="#">Deposit Products</a>
                					<ul>
                						<li><a href="ps_saving_deposit.php">Savings Deposit</a></li>
                						<li><a href="ps_current_deposit.php">Current Deposit</a></li>
                						<li><a href="#">Term Deposit</a>
                                                                   <ul>
                                                                      <li><a href="ps_snd.php">Special Notice Deposit</a></li>
                                                                      <li><a href="ps_fdr.php">Fixed Deposit</a></li>
                                                                   </ul>
                                                                </li>

								<li><a href="#">Foreign Currency Deposit</a>
                                                                 <ul>
                                                                      <li><a href="ps_fc_rfcd.php">RFC Deposit</a></li>
                                                                      <li><a href="ps_fc_nfcd.php">NFC Deposit</a></li>
                                                                   </ul>
                                                                </li>
								<li><a href="ps_mss.php">Monthly Savings Scheme</a></li>
								<li><a href="ps_mis.php">Monthly Income Scheme</a></li>
								<li><a href="ps_dbs.php">Double Benefit Scheme</a></li>
								<li><a href="ps_millionair.php">Millionaire Income Scheme</a></li>
										
                					</ul>
                				</li>
                				
								<li><a href="#">Credit Products</a>
                					<ul>
                						<li><a href="ps_overdraft.php">Overdraft</a></li>
                						<li><a href="ps_lease_financing.php">Lease Financing</a></li>
                						<li><a href="ps_house_building.php">House Building</a></li>
								<li><a href="ps_sme.php">Small Medium Enterprise</a></li>
								<li><a href="ps_ccs.php">Consumer Credit Scheme</a></li>
								<li><a href="ps_trade_finance.php">Trade Finance</a></li>
										
                					</ul>
                				</li>
								
								<li><a href="#">Cards</a>
                					<ul>
                						<li><a href="credit_card.php">Credit Card</a></li>
										<li><a href="power_card.php">Power Card</a></li>
                					</ul>
                				</li>
						
						<li><a href="shedule_of_charges.php">Schedule of Charges</a></li>
								
                				<li><a href="download_forms.php">Download Forms</a></li>
								
								
                			</ul>
                		</li>		
                		
						
<li><a href="fs_financial_performance.php"><span class="l"></span><span class="r"></span><span class="t">Financial Status</span></a>
						
							<ul>
								<li><a href="fs_annual_report.php">Annual Report</a></li>
                						<li><a href="fs_financial_performance.php">Financial Performance</a></li>
                                        <li><a href="#">Interest Rates</a>
											<ul>
												<li><a href="fs_deposit_rate.php">Deposit Rate</a></li>
												<li><a href="fs_lending_rate.php">Lending Rate</a></li>
											</ul>
										</li>                				
                						<li><a href="fs_transaction_charges.php">Transaction Charges</a></li>
                						<li><a href="fs_credit_report.php">Credit Report</a></li>
								
										                				
							</ul>
						
						</li>
							
							
		<li>
            <a href="#"><span class="l"></span><span class="r"></span><span class="t">Service Location</span></a>
                			<ul>
										<li><a href="#">Branch Location</a>
											<ul>
												<li><a href="branch_location.php?division=Dhaka">Dhaka</a></li>
												<li><a href="branch_location.php?division=Chittagong">Chittagong</a></li>
												<li><a href="branch_location.php?division=Rajshahi">Rajshahi</a></li>
												<li><a href="branch_location.php?division=Rangpur">Rangpur</a></li>
												<li><a href="branch_location.php?division=Sylhet">Sylhet</a></li>
												<li><a href="branch_location.php?division=Khulna">Khulna</a></li>
												<li><a href="branch_location.php?division=Barishal">Barishal</a></li>
<li><a href="branch_location_all.php">All Branch</a></li>
											</ul>
										</li>
                						<li><a href="sl_sme_branch.php">SME / Agri Branch</a></li>
                						<li><a href="sl_ad_branch.php">Authorize Dealer Branches</a></li>
                						<li><a href="sl_atm.php">ATM Location</a></li>
										<li><a href="sl_e-gp.php">e-GP Service Branch</a></li>
										                				
							</ul>
                		</li>
						

<li><a href="oo_contact.php"><span class="l"></span><span class="r"></span><span class="t">Overseas operation</span></a>
							<ul>
										<li><a href="oo_contact.php">Contact Address</a></li>
                						<li><a href="oo_correspondent_banking.php">Correspondent Banking</a></li>
                						<li><a href="#">Foreign Remittance</a>
											<ul>
												<li><a href="oo_fr_subsidiary_companies.php">Subsidiary Companies</a></li>
												<li><a href="oo_fr_western_union.php">Western Union</a></li>
												<li><a href="oo_fr_moneygram.php">Money Gram</a></li>
												<li><a href="oo_fr_others.php">Other Ex. Companies & Banks</a></li>
											</ul>
										</li>
                						
							</ul>
						
						
						</li>


							
						<li><a href="csr_employment.php"><span class="l"></span><span class="r"></span><span class="t">CSR</span></a>
							<ul>
										<li><a href="csr_employment.php">Employment</a></li>
                						<li><a href="csr_education.php">Education</a></li>
                						<li><a href="csr_sports.php">Sports & Cul. Activities</a></li>
                						<li><a href="csr_disaster_relief.php">Disaster Relief</a></li>
										<li><a href="csr_other.php">Other</a></li>
										
							</ul>					
						</li>	
						
				</ul>
		</div>
    </div>
    </div>
	
	</div>
							   
