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
<body> 
<div align="center" style="width:100%; height:auto;border:solid #009999 0px;">                                            
<div align="center" style=" width:500px; height:auto; margin-top:50px; border:solid #009999 2px;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;"> 
 
<div class="style4" style="border:solid #009999 1px; padding-top:8px; height:40px; background-color:#009999;-webkit-border-top-left-radius: 8px;
-webkit-border-top-right-radius: 8px;
-moz-border-radius-topleft: 8px;
-moz-border-radius-topright: 8px;
border-top-left-radius: 8px;
border-top-right-radius: 8px;">Please enter your old password and new password</div>                                       

<table align="center" width="490px" border="0" align="center" cellpadding="5" cellspacing="5" bgcolor="#ffffff">
  
  <tr>
    <td><form id="admin_login" name="admin_login" method="post" action="updatepass">
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
          <td width="34%" height="39"> <span class="style3">OLD PSSWORD:</span></td>
          <td width="66%"><label>
            <input name="oldpass" type="password" id="oldpass" />
          </label></td>
        </tr>
        <tr>
          <td><span class="style3">NEW PASSWORD: </span></td>
          <td><input name="npasswd" type="password" id="npasswd" /></td>
        </tr>
		
	
		
        <tr>
          <td height="28" colspan="2">
		  <div align="center"><input name="bt_submit" type="submit" id="bt_submit" value="Update Password" /></div>
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
