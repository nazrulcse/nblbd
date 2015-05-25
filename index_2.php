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
.style2 {color: #FFFFFF}
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
.style8 {color: #E17466}
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




<link rel="stylesheet"  href="css/lime.css" type="text/css" media="all">
<link rel="stylesheet"  href="css/menus.css" type="text/css" media="all">


</head>
<body>


<div id="art-main"> <div style="padding-left:730px; padding-top:15px; padding-bottom:40px;">



<div style="float:left; padding-left:15px;">
<a href="http://mail.nblbd.com/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('webmail','','img/email2.png',1)"><img src="img/email1.png" name="webmail" width="35" height="35" border="0" id="webmail" title="Web Mail" /></a>
</div>

<div style="float:left; padding-left:15px;">	
<a href="nblbd.com" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('career','','img/career3.png',1)"><img src="img/career1.png" name="career" width="33" height="33" border="0" id="career" title="Career"/></a>
</div>
        
<div style="float:left; padding-left:15px;">
<a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('contact','','img/phone2.png',1)"><img src="img/phone1.png" name="contact" width="32" height="32" border="0" id="contact" title="Contact Us" /></a>
</div>


<div style="float:left; padding-top:5px; padding-right:5px; padding-left:15px;">
<form id="search-form" method="get" action="http://www.google.com/search" target="_blank">
<input type="text" /> 
<input type="submit" value="GO" />

<div style="display:none">
<input type="checkbox"  name="sitesearch" value="nblbd.com" checked />
</div>

</form>
</div>

		
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
                    
                    <div class="art-logo">
                     <h1 id="name-text" class="art-logo-name"><a href="https://www.nblbd.com">National Bank Limited</a></h1>
                     <h2 id="slogan-text" class="art-logo-text">A Bank for Performance with Potential</h2>
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
										<li><a href="chairman_message.php">Chairman's Message</a></li>
										<li><a href="executive_committe.php">Executive Committee</a></li>
										<li><a href="audit_committe.php">Audit Committee</a></li>
										<li><a href="management_committe.php">Management Committee</a></li>
                						<li><a href="asset_liability_committe.php">Asset Liability Committee</a></li>
										<li><a href="photo_gallary.php">Photo Gallary</a></li>
                				
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
				
				
			<img src="img_980px/new/01.png"/>
			<img src="img_980px/new/02.png"/>
		   <img src="img_980px/new/03.png"/>
		   <img src="img_980px/new/04.png"/>
		   <img src="img_980px/new/05.png"/>
		   <img src="img_980px/new/06.png"/>
		   <img src="img_980px/new/07.png"/>
		   <img src="img_980px/new/08.png"/>
		   <img src="img_980px/new/09.png"/>
		   
		   <img src="img_980px/new/12.png"/>
		   
		   <img src="img_980px/new/14.png"/>
		   
		   
       
			
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
                          
<table width="100%" style="padding-left:8px">
<tr width="100%">
<td width="33%">						  
<p>&nbsp;&nbsp;&nbsp;&nbsp;</p> 
<div style="padding-top:45px; padding-left:12px; background-image:url(img/Deposit2.gif); background-repeat: no-repeat;">
<p><img src="images/blockcontentbullets.png" width="8px" height="8px" /> <span class="style10"><a href="ps_saving_deposit.php">Savings Deposit</a></span></p>
<p><img src="images/blockcontentbullets.png" width="8px" height="8px" /> <span class="style10"><a href="ps_current_deposit.php">Current Deposit</a></span></p>
<p><img src="images/blockcontentbullets.png" width="8px" height="8px" /> <span class="style10"><a href="ps_fdr.php">Term Deposit</a></span></p>
<p><img src="images/blockcontentbullets.png" width="8px" height="8px" /> <span class="style10"><a href="ps_fc_rfcd.php">Foreign Currency Deposit</a></span></p>
<p><img src="images/blockcontentbullets.png" width="8px" height="8px" /> <span class="style10"><a href="ps_mss.php">Monthly Savings Scheme</a></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>  
</td>
    
<td width="33%">
<p>&nbsp;&nbsp;&nbsp;&nbsp;</p> 
<div style="padding-top:45px; padding-left:12px; background-image:url(img/credit2.gif); background-repeat: no-repeat;">
<p><img src="images/blockcontentbullets.png" width="8px" height="8px" /> <span class="style10"><a href="ps_overdraft.php">Overdraft</a></span></p>
<p><img src="images/blockcontentbullets.png" width="8px" height="8px" /> <a href="ps_lease_financing.php"><span class="style10">Lease Financing</span></a><span class="style10"></span></p>
<p><img src="images/blockcontentbullets.png" width="8px" height="8px" /> <span class="style10"><a href="ps_house_building.php">House Building</a></span></p>
<p><img src="images/blockcontentbullets.png" width="8px" height="8px" /> <span class="style10"><a href="ps_sme.php">Small Medium Enterprise </a></span></p>
<p><img src="images/blockcontentbullets.png" width="8px" height="8px" /> <span class="style10"><a href="ps_ccs.php">Consumer Credit Scheme</a></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

 </div>  
</td>

<td width="33%">
<p>&nbsp;&nbsp;&nbsp;&nbsp;</p> 
<div style="padding-top:45px; padding-left:12px; background-image:url(img/cards.gif); background-repeat: no-repeat;">
<p><img src="images/blockcontentbullets.png" width="8px" height="8px" /> <span class="style10"><a href="credit_card.php">Gold International</a></span></p>
<p><img src="images/blockcontentbullets.png" width="8px" height="8px" /> <span class="style10"><a href="credit_card.php">Silver International</a></span></p>
<p><img src="images/blockcontentbullets.png" width="8px" height="8px" /> <span class="style10"><a href="credit_card.php">Gold Local</a></span></p>
<p><img src="images/blockcontentbullets.png" width="8px" height="8px" /> <span class="style10"><a href="credit_card.php">Silver Local</a></span></p>
<p><img src="images/blockcontentbullets.png" width="8px" height="8px" /> <span class="style10"><a href="power_card.php">Power Cards</a></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

 </div>  
</td>
</tr>
</table>

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

&nbsp;                                                <div class="art-blockcontent-body">
<div>
<form id="search-form" method="get" action="http://www.google.com/search" target="_blank">
<input type="text" /> 
<input type="submit" value="GO" />

<div style="display:none">
<input type="checkbox"  name="sitesearch" value="nblbd.com" checked />
</div>

</form>
</div>
&nbsp;                                          
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
