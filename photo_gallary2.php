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


<!-- Start of Image scroll 1st part-->

<link href="css_image_scroll/reset.css" rel="stylesheet" type="text/css"/>
<link href="css_image_scroll/master.css" rel="stylesheet" type="text/css"/>
<link href="css_image_scroll/960.css" rel="stylesheet" type="text/css"/>
<link href="css_image_scroll/powerSlide.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css_image_scroll/powerSlide_theme.css" rel="stylesheet" type="text/css" media="screen"/>
<!--[if IE]>
  	<link href="css_image_scroll/ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="js_image_scroll/modernizr-1.7.min.js"></script>

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
.style15 {font-size: 14px; font-weight: bold; color: #009933; }
.style17 {font-size: 18px; font-weight: bold; color: #009933; font-family: "Monotype Corsiva"; }
.style8 {color: #009933;
	font-weight: bold;
}
.style18 {font-size: 13px; font-weight: bold; color: #009933; font-family: Arial; }
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
                          <div class="art-post-inner art-article" >
                                          
										  
<!-- Image Scroll Start 2nd part -->	
						
<div id="slider">
		
		<div align="justify">

<img src="images/photo_gallary/1-Alipur.jpg" title="The 157th Branch of National Bank Limited has been inaugurated at Alipur in Patuakhali on 2nd August 2012. Neaz Ahmed, Managing Director of the bank formally inaugurated the branch as chief guest. A discussion meeting was held on the occasion. A K M Shafiqur Rahman, Deputy Managing Director & Company Secretary of the bank delivered his welcome addresses on the meeting.. Muhammad Mahmudul Haque, Senior Vice President & Regional Head of Khulna of the bank presided over the meeting and Md. Jalal Uddin, Manager of Alipur branch delivered his vote of thanks.</br>

</br>Neaz Ahmed, Managing Director of NBL in his inaugural speech said that NBL will put remarkable contribution in the business development of Alipur area like other Branches of National Bank Ltd.Among others, Abdul Barek Molla, Mayor, Kuakata Pourosova, Dr. Siddiqur Rahman, Awami League leader & Abdul Aziz Musolli, BNP leader of the area spoke on the opening ceremony. "/>
  
		  
<img src="images/photo_gallary/2-Gozaria.JPG" title="The 156th Branch of National Bank Limited has been inaugurated at Gazaria in Munshigonj on 29th July 2012. Neaz Ahmed, Managing Director of the bank formally inaugurated the branch as chief guest. A discussion meeting was held on the occasion. Md. Badiul Alam, Additional Managing Director of the bank presided over the meeting.</br>

</br>A K M Shafiqur Rahman, Deputy Managing Director & Company Secretary of the bank delivered his welcome addresses and Md. Shahidul Islam, Asstt. Vice President & Manager of Gozaria branch delivered his vote of thanks. Neaz Ahmed, Managing Director of NBL in his inaugural speech said that NBL will put remarkable contribution in the business development of Gozaria area like other Branches of National Bank Ltd.</br>

</br>Among others, A M Golam Rasul, Senior Vice President & manager of Jatrabari branch, Prof. A K M Gias Uddin, Chairman, Bhoberchar Union, Alhajj Hafez Ahmed Prodhan, Md. Mohsin Uzzaman Prodhan, Mahbub Alam Shaheen, businessman of the area & Journalist Mohiuddin spoke on the opening ceremony. " />


		  
<img src="images/photo_gallary/3-Worldlink.JPG" title="National Bank Limited recently has taken over Worldlink Payment Foundation SA, Greece as it’s fully owned subsidiary exchange company to facilitate Bangladeshi expatriates to send their hard earned money to their relatives in Bangladesh in a faster, safer and secured way.</br>

</br>Parveen Haque Sikder, Director & Chairperson of Executive Committee of the Board of Directors, National Bank Limited graced the taking over ceremony of Worldlink Payment Foundation SA, Greece as the chief guest. Among others, Ms Lisa Fatema Haque, Director, Worldlink Payment Foundation SA, Greece, Neaz Ahmed, Managing Director & CEO of National Bank Limited, Theudorus Venetanasos, Ex-Directior, Worldlink Payment Foundation SA, Greece, Shamsul Huda Khan, Deputy Managing Director and Divisional Head, International Division, National Bank Limited and Mir Mosharref Hossain, Senior Assistant Vice President, National Bank Limited were also present in the ceremony. The function was also attended by the leaders of Bangladeshi community in Greece." />



<img src="images/photo_gallary/4-moneygarmMOU.JPG" title="MoneyGram International a leading global money transfer company and National Bank Ltd. jointly announced the signing of an agreement in the city on Monday whereby National Bank Ltd. Bangladesh will act as MoneyGram’s new growing agent, said a press release.Harsh Lambah, MoneyGram’s senior regional director for South Asia, said “We are proud of this potential affiliation with National Bank, as they are a local leader with extensive experience in the money transfer space.</br>

</br>He added: South Asia is an important region for MoneyGram and we know working with National Bank with their significant presence in major cities, will propel our expansion and help us meet the growing remittance demands for Bangladesh.</br>

</br>National Bank is experienced in providing money transfer services and we are very pleased to now offer MoneyGram’s service to our large base of customers,” said Neaz Ahmed, Managing Director, National Bank. For many in Bangladesh, remittances meet the financial demands of daily lives and we are convinced that MoneyGram’s vast international presence in 194 countries will allow Bangladeshis stationed abroad to find convenient locations to send home their hard earned money promptly. Despite the staggering global economy, the remittance sector in South Asia continues to strengthen. According to the World Bank, Bangladesh received US$11.6 billion in money transfers in 2011, placing it among the top 10 recipient countries in the world. " />


<img src="images/photo_gallary/5-Infolady.JPG" title="A tripartite agreement signing among D.Net, Fair Price International Private limited and national Bank limited held on July 4, 2012 at 9:30 am at Winter Garden, Hotel Ruposhi Bangla, shahbag, Dhaka. Dr. Atiur Rahman, Governor, Bangladesh Bank was present as the Chief Guest of the program and delivered precious speech. Mrs. Parveen Haque Shikder, Director & Chairperson, Executive Committee of National Bank Limited presided over the program & Md. Badiul Alam, Additional Managing Director of the bank delivered his welcome address. Ms. Shaheen Anam, Executive Director of Manusher Jonno Foundation were present as special guest. Among others Sukamal Sinha Chowdhury, General Manager of Bangladesh Bank, Zainul Abedin, Chairman of Fair Price International (Pvt.) Ltd., Dr. Ananya Raihan, Executive Director & Mosharrof Hossain, Deputy Director of D.Net, A K M Shafiqur Rahman & Nazib Uddin Bhuiyan, Deputy Managing Directors of NBL, Ms. Shafura Akhter & Hasnahena, Infolady spoke on the occasion. " />
 
<img src="images/photo_gallary/6-oman_exhouse.jpg" title="The 7th Branch of Gulf Overseas Exchange Company LLC, at Sinaw in Sultanate of Oman was inaugurated by Ms. Parveen Haque Sikder, Director & Chairperson of the Executive Committee of The Board of Directors of National Bank Limited who attended the inaugural ceremony as the Chief Guest & Prof. Mahbub Ahmed, Director of National Bank Limited was present as special guest. Neaz Ahmed, Managing Director of the Bank presided over the inaugural ceremony and Shamsul Huda Khan, Deputy Managing Director of National Bank Ltd. were also present in the occasion. Mir Mosharref Hossain, SAVP of the Bank was moderator of the inaugural function.</br>

</br>
A large number of Bangladeshi expatriates living in Oman attended the inaugural function. In her inaugural speech Ms. Parveen Haque Sikder motivated the Bangladeshi expatriates residing in Oman to remit their hard-earned money through Gulf Overseas Exchange Company LLC, Oman to Bangladesh.
</br>

</br>
Gulf Overseas Exchange Company LLC, Oman, was established in the year 1985. Since inception the company is managed by National Bank Limited, Bangladesh and also owned 25% share capital of Gulf Overseas Exchange Company LLC, Oman." />
  


<img src="images/photo_gallary/7-NBL_AGM_29th.jpg" title="The 29th Annual General Meeting of National Bank Limited held on 19th March at Bangabandhu International Conference Center, Dhaka. Mr. Zainul Haque Sikder, Chairman of the Bank presided over the meeting. More than twenty thousand Shareholders including the Directors of the Bank attended in the meeting. The Shareholders approved 65% Stock Dividend for the year ended 31st December, 2011. </br>

</br>
The Chairman in his inaugural speech said that the Bank has achieved a remarkable success in the year 2011 because of timely implementation of policy directives of Board of Directors, good advices of Shareholders and concerted efforts of Bank’s employees of all level. 
</br>

</br>
Besides a large number of the shareholders & Directors of NBL Mrs. Monowara Sikder, Parveen Haque Sikder, Khalilur Rahman, Moazzam Hossain, Rick Haque Sikder, Ron Haque Sikder, Prof. Mahbub Ahmed, & Mabroor Hossain, Neaz Ahmed, Managing Director of the Bank & A K M Shafiqur Rahman, Deputy Managing Director & Secretary to the Board were also present in the meeting. Among others AMD, DMD’s and all level of Executives & officers of the bank were also attended the program. " />

<img src="images/photo_gallary/10-annual2012.jpg" title="The Annual Conference – 2012 of the Executives and the Managers of National Bank Limited held at Bangabandhu International Conference Center, Dhaka. Mr. Zainul Haque Sikder, Sponsor Director & Chairman of the Board of Directors of National Bank Limited inaugurated the conference as chief guest. Neaz Ahmed, Managing Director of the Bank presided over the meeting. </br>

</br>
Mrs. Monowara Sikder, Parveen Haque Sikder, Khalilur Rahman, Moazzam Hossain, Prof. Mahbub Ahmed, Mabroor Hossain, A K M Enamul Hoque Shamim & Lt. Col.(Retd.) Md. Azizul Ashraf, Psc Directors, Azizur Rahman, Consultant, Md. Badiul Alam, Additional Managing Director, S M Jaffar, Shamsul Huda Khan, A K M Shafiqur Rahman, Nazib Uddin Bhuiyan, A S M Bulbul & Abdul Hamid Mia Deputy Managing Directors of the bank were also present in the Conference. </br>

</br>
Mr. Zainul Haque Sikder has emphasized on Human Asset and Financial Asset of the Bank. He also urged upon the Managers and Executives of the Bank for concerted efforts for improvement of credit risk and credit Management for enhancement of profitability of the Bank. For holding the top position of the Banking Sector, NBL must increase their client service and proper use of his human resources, he also added.Neaz Ahmed, Managing Director of the Bank in his welcome speech expressed his gratitude to the Board of Directors and thanked the Mangers and Executives for the success. He called for achieving more success in 2012 with hard work, wisdom and passion and put some guidelines for that. " />


<img src="images/photo_gallary/11-Netrokona.jpg" title="The 154th Branch of National Bank Limited has been inaugurated at Netrokona recently. Neaz Ahmed, Managing Director & CEO of the bank formally inaugurated the branch as chief guest. A discussion meeting was held on the occasion. A K M Shafiqur Rahman, Deputy Managing Director & Company Secretary of the bank presided over the meeting.</br>

</br>
A K M Salah Uddin Khan, Asstt. Vice President & Manager of Maymansing branch delivered his welcome addresses and Md. Deloar Hosan, Manager of Netrokona branch delivered his vote of thanks.Neaz Ahmed, Managing Director of NBL in his inaugural speech said that NBL will put remarkable contribution in the business development of Netrokona area like other Branches of National Bank Ltd.  
</br>

</br>
Among others, Prof. Tofsir Uddin Khan, Chairman, Netrokona Upazilla, Proshanto Kumar Roy, City Mayor, Netrokona, Abdul Wahed, President, Netrokona Chamber of Commerce spoke on the opening ceremony." />


<img src="images/photo_gallary/12-Muktagacha.jpg" title="The 153rd Branch of National Bank Limited has been inaugurated at Muktagacha in Maymansing on today’s. Neaz Ahmed, Managing Director & CEO of the bank formally inaugurated the branch as chief guest. A discussion meeting was held on the occasion. A K M Shafiqur Rahman, Deputy Managing Director & Company Secretary of the bank presided over the meeting.
</br>

</br>
A K M Salah Uddin Khan, Asstt. Vice President & Manager of Maymansing branch delivered his welcome addresses and Pradip Roy Chowdhury, Manager of Muktagacha branch delivered his vote of thanks.Neaz Ahmed, Managing Director of NBL in his inaugural speech said that NBL will put remarkable contribution in the business development of Muktagacha area like other Branches of National Bank Ltd.
</br>

</br>
Among others, Advocate Badaruddin Ahmed, Chairman, Muktagacha Upazilla, Nazmunnahar Dilu, Vice Chairman, Muktagacha Upazilla, Freedom fighter Abdul Hye Akhond, City Mayor, Muktagacha, Alhajj Habibur Rahman Habul & Habibur Rahman Akhond businessman of the area spoke on the opening ceremony.  " />


<img src="images/photo_gallary/13-Lauhajong.JPG" title="The 152nd Branch of National Bank Limited has been inaugurated at Lauhajong in Munshigonj on Tuesday. Mrs. Parveen Haque Sikder, Director & Chairperson of the Executive Committee of the Bank formally inaugurated the Branch as chief guest. A discussion meeting was held on the occasion. Neaz Ahmed, Managing Director & CEO of the bank presided over the meeting.
</br>

</br>
A K M Shafiqur Rahman, Deputy Managing Director & Company Secretary delivered his welcome addresses and Sabir Ali Mollah, Manager of Lauhajong Branch delivered his vote of thanks. Mrs. Parveen Haque Sikder in his inaugural speech said that NBL will put remarkable contribution in the business development of Lauhajong area like other Branches of National Bank Ltd. 
</br>

</br>
Neaz Ahmed, Managing Director of the Bank mentioned in his speech that the banking network of NBL has further been extended in the Munshigonj area. Our Lauhajong branch will fulfill the cherished desire of the people of this locality for modern banking facility he also added. The elites and businessmen of the area were also present in the opening ceremony. " />


<img src="images/photo_gallary/14-Bhaghyakul.jpg" title="The 151st Branch of National Bank Limited has been inaugurated at Bhagyakul in Munshigonj on Today’s. Mrs. Parveen Haque Sikder, Director & Chairperson of the Executive Committee of the Bank formally inaugurated the Branch as chief guest. A discussion meeting was held on the occasion. Neaz Ahmed, Managing Director & CEO of the bank presided over the meeting.</br></br>

A K M Shafiqur Rahman, Deputy Managing Director & Company Secretary delivered his welcome addresses and Md. Shariful Islam, Manager of Bhagyakul Branch delivered his vote of thanks. Mrs. Parveen Haque Sikder in his inaugural speech said that NBL will put remarkable contribution in the business development of Bhagyakul area like other Branches of National Bank Ltd.

</br></br>
Neaz Ahmed, Managing Director of the Bank mentioned in his speech that the banking network of NBL has further been extended in the Munshigonj area. Our Bhagyakul branch will fulfill the cherished desire of the people of this locality for modern banking facility he also added.The elites and businessmen of the area were also present in the opening ceremony." />



<img src="images/photo_gallary/15-ICMABAward2011.jpg" title="National Bank Limited was awarded second position in the ICMAB Best Corporate Award -2011 in the Private Commercial Bank Category (Traditional Operations). This award is a recognition of Transparency, Accountability, Good Corporate Governance and the Soundness of the Bank.

</br></br>
Neaz Ahmed, Managing Director and CEO of National Bank Limited received the award from the Finance Minister Abul Maal Abdul Muhith in a ceremony held recently at a city hotel organized by the Institute of Cost and Management Accountants of Bangladesh."/>


<img src="images/photo_gallary/16-kholamora.JPG" title="The 150th Branch of National Bank Limited has been inaugurated at Kholamora in Keranigonj, Dhaka on today’s. Neaz Ahmed, Managing Director of the bank formally inaugurated the branch as chief guest. A discussion meeting was held on the occasion. A K M Shafiqur Rahman, Deputy Managing Director & Company Secretary of the bank presided over the meeting.
</br></br>
Abdul Hamid Mia, Deputy Managing Director delivered his welcome addresses and Syed Arab Ali, Asstt. Vice President & Manager of Kholamora branch delivered his vote of thanks.Neaz Ahmed, Managing Director of NBL in his inaugural speech said that NBL will put remarkable contribution in the business development of Kholamora area like other Branches of National Bank Ltd.
</br></br>
Among others, Iftekhar Hossain Chowdhury, Executive Vice President & manager of Foreign Exchange branch, Atiqul alam Showpan, Shanti Gopal Sarker, Zakir & Nazim Uddin, businessman of the area spoke on the opening ceremony." />



<img src="images/photo_gallary/17-madhobdi.jpg" title="The 149th Branch of National Bank Limited has been inaugurated at Madhobdi in Narshingdi on Today’s. Mrs. Parveen Haque Sikder, Director & Chairperson of the Executive Committee of the Bank formally inaugurated the Branch as chief guest. A discussion meeting was held on the occasion. Neaz Ahmed, Managing Director & CEO of the bank presided over the meeting.
</br></br>
Among others, S M Jaffar Deputy Managing Director of the bank spoke on the opening ceremony. A K M Shafiqur Rahman, Deputy Managing Director & Company Secretary delivered his welcome addresses and Md. Mahmud Hassan, Senior Asstt. Vice President & Manager of Madhobdi Branch delivered his vote of thanks.Mrs. Parveen Haque Sikder in his inaugural speech said that NBL will put remarkable contribution in the business development of Madhobdi area like other Branches of National Bank Ltd.
</br></br>
Neaz Ahmed, Managing Director of the Bank mentioned in his speech that the banking network of NBL has further been extended in the Narshingdi area. Our Madhobdi branch will fulfill the cherished desire of the people of this locality for modern banking facility he also added. The elites and businessmen of the area were also present in the opening ceremony. " />




		  
        </div>
</div>
<script type="text/javascript" src="js_image_scroll/jquery.min.js"></script>
<script type="text/javascript" src="js_image_scroll/powerSlide.js"></script>
<script type="text/javascript" src="js_image_scroll/scripts.js"></script>

<!-- Image Scroll End 2nd part -->		
								  
</div>



										  
                    <div class="cleared"></div>


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
