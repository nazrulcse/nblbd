<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Welcome To Administrator Panel</title>
	
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style3 {
	color: #4C84A7;
	font-weight: bold;
}
.style4 {
	font-size: 16px;
	font-weight: bold;
	color: #FFFFFF;
}
-->
</style>
</head>
<body onLoad="goforit()"> 
<div style="width:100%; height:60px; border:solid #009999 1px; background-color: #009999;">
<div style="float:left; margin:20px; font-size:18px; color:#FF0000; font-weight:bold; font-family:Verdana, Arial, Helvetica, sans-serif;">Administrator Panel</div>

<div style="float:right; margin:20px; font-size:16px; font-weight:bold;font-family:Verdana, Arial, Helvetica, sans-serif;">
<script>

/*
Live Date Script- 
© Dynamic Drive (www.dynamicdrive.com)
For full source code, installation instructions, 100's more DHTML scripts, and Terms Of Use,
visit http://www.dynamicdrive.com
*/


var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")

function getthedate(){
var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var hours=mydate.getHours()
var minutes=mydate.getMinutes()
var seconds=mydate.getSeconds()
var dn="AM"
if (hours>=12)
dn="PM"
if (hours>12){
hours=hours-12
}
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
//change font size here
var cdate="<small><font color='000000' face='Arial'><b>"+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+" "+hours+":"+minutes+":"+seconds+" "+dn
+"</b></font></small>"
if (document.all)
document.all.clock.innerHTML=cdate
else if (document.getElementById)
document.getElementById("clock").innerHTML=cdate
else
document.write(cdate)
}
if (!document.all&&!document.getElementById)
getthedate()
function goforit(){
if (document.all||document.getElementById)
setInterval("getthedate()",1000)
}

</script>
<span id="clock"></span>

</div>
</div>



 <div align="center" style="width:100%; height:auto;border:solid #009999 0px;">                                            
<div align="center" style=" width:420px; height:auto; margin-top:50px; border:solid #009999 2px;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;"> 
 
<div class="style4" style="border:solid #009999 1px; padding-top:8px; height:40px; background-color:#009999;-webkit-border-top-left-radius: 8px;
-webkit-border-top-right-radius: 8px;
-moz-border-radius-topleft: 8px;
-moz-border-radius-topright: 8px;
border-top-left-radius: 8px;
border-top-right-radius: 8px;">Please enter your username and password to log in </div>                                       

<table align="center" width="400px" border="0" align="center" cellpadding="5" cellspacing="5" bgcolor="#ffffff">
  
  <tr>
    <td><form id="admin_login" name="admin_login" method="post" action="adminlogin/matchuser">
      <table width="100%" border="0" cellspacing="5" cellpadding="5" align="center">
        <tr>
          <td height="39" colspan="2">
            <label>
       
            <div align="center">
              <span style="color:#FF0000"><?php echo $message;?></span>
 	  </div>
          </label></td>
          </tr>
        <tr>
          <td width="34%" height="39"> <span class="style3">USER NAME:</span></td>
          <td width="66%"><label>
            <input name="aname" type="text" id="aname" />
          </label></td>
        </tr>
        <tr>
          <td><span class="style3">PASSWORD: </span></td>
          <td><input name="apasswd" type="password" id="apasswd" /></td>
        </tr>
		
	
		
        <tr>
          <td height="28" colspan="2">
		  <div align="center"><input name="bt_submit" type="submit" id="bt_submit" value="Log In" /></div>
		  </td>
          </tr>
      </table>
      <div align="center"></div>
    </form></td>
  </tr>
  
</table>
</div></div>


    
    
</body>
</html>
