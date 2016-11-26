<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="moving instant quote" />
  <meta name="description" content="Get a Free instant online moving quote from Capital Movers LLC.  Just enter the basic details and get your price instantly. Start your journey with capital Movers." />
  
  <title>Moving Quotes - Get Free Instant Quote for your Next Move</title>
  <link href="/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection"/>
	<!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" />
    <![endif]-->
			
	<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>	
	<script type="text/javascript" language="javascript" src="js/jquery.dropdownPlain.js"></script>
    <link rel="stylesheet" type="text/css" href="formstyle.css" />
<link rel="stylesheet" href="cal.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script type="text/javascript" src="jquery.validate.min.js"></script>
<script type="text/javascript">
/**
  * jQuery Validation Form Code
  */
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#instant-quote-form").validate({
                rules: {
                    name: "required",
					phone: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    movdate: "required",
					city1: "required",
					state1: "required",
					zip1: "required",
					city2: "required",
					state2: "required",
					},
                messages: {
                    name: "Enter your Name",
                    phone: "Enter your Phone No.",
                    email: "Enter valid email",
                    movdate: "Select Move Date",
					city1: "Enter 'From' City",
					state1: "Enter 'From' State",
					zip1: "Enter 'From' Zip",
					city2: "Enter 'To' City",
					state2: "Enter 'To' State",
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>
 <script>
$(function() {
$('#datepicker').datepicker({minDate: 0});
});
</script>
    
</head>

<body bgcolor="#f0f0f0">
<table cellpadding="0" cellspacing="0" class="rad1">
<tr><td  height="100px" background="images/headbg.jpg"><a href=""><img src="images/capital-logo.png" alt="capital movers logo"></a>
</td></tr>
<tr><td style="background-color:#2d2f93; border-top: 1px solid rgb(34, 34, 34); height:37px;"><ul class="dropdown">
			<li><a class="dropsub" href="">Home</a></li>
        	<li><a class="dropsub" href="services">Services<img src="images/arrow.png" align="right" /></a>
        		<ul class="sub_menu">
        			 <li><a href="services/residential-moving">Residential Movers</a></li>
        			 <li><a href="services/commercial-moving">Commercial Movers</a></li>
        			 <li><a href="services/long-distance-moving">Long Distance Movers</a></li>
        		</ul>
					</li>
            <li><a class="dropsub" href="instant-moving-estimate-form.php">Free Quote<img src="images/arrow.png" align="right" /></a>
        		<ul class="sub_menu">
        			 <li><a href="instant-moving-estimate-form.php">Instant Quote</a></li>
        			 <li><a href="detailed-quote-form.php">Detailed Quote</a></li>
        		</ul>
        	</li>
            <li><a class="dropsub" href="testimonials">Testimonials</a></li>
            <li><a class="dropsub" href="contact-us">Contact Us</a></li>
            <li><a class="dropsub" href="blog">Blog</a></li>
</ul>
</td></tr>
<tr><td style="background-color:#2d2f93;" align="right"><img src="images/number.png" /></td></tr>
<tr><td align="right" bgcolor="#FFFFFF" height="42px">
<img src="images/social.jpg" usemap="#Map1" />
<map name="map1" id="map1">
  <area shape="rect" coords="88,5,108,25" href="https://www.facebook.com/capital.movers" />
  <area shape="rect" coords="34,5,54,25" href="https://twitter.com/CapitalMovers" />
  <area shape="rect" coords="61,5,81,25" href="https://plus.google.com/101746758475184499735/">
  <area shape="rect" coords="7,5,27,25" href="http://www.linkedin.com/pub/jason-jefferson/33/255/865" />
</map>
</td></tr>
</table><br />
<table bgcolor="#FFFFFF" class="rad" width="100%">
<tr><td bgcolor="#FFFFFF" align="center" style="padding:20px 0px 20px 0px;"><form name="instant-quote-form" id="instant-quote-form" method="post" action="">
<table border="0" id="formbg" align="center">
<tr><td colspan="2" align="center" id="h1">Free Moving Estimate Quote Form<br /><img style="padding:5px 0px 10px 0px;" src="uline.png" /></td></tr>
<tr><td width="51%"  class="alnment1">Full Name:</td><td width="49%"><input type="text" name="name" /> *</td></tr>
<tr><td  class="alnment1">Phone No:</td><td><input type="text" name="phone" /> *</td></tr>
<tr><td  class="alnment1">Email Id:</td><td><input type="text" name="email" /> *</td></tr>
<tr><td  class="alnment1">How did u find us:</td><td><input type="text" name="findus" /></td></tr>
<tr><td  class="alnment1">Approximate moving date:</td><td><input type="text" readonly="readonly" id="datepicker" name="movdate" /> *</td></tr>
<tr><td colspan="2"  id="ibox" style="padding-top:15px;">
	<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
        	<td align="center">
            	<table width="100%">
                	<tr><td class="rad3" align="center" colspan="2">Moving From</td></tr>
                    <tr><td width="24%" class="alnment" style="padding-top:10px;">Address:</td><td width="76%" style="padding-top:10px;"><input type="text" name="address1"/></td></tr>
                    <tr><td  class="alnment">City:</td><td><input type="text" name="city1" /> *</td></tr>
                    <tr><td  class="alnment">State:</td><td><input type="text" name="state1" /> *</td></tr>
                    <tr><td  class="alnment">Zip:</td><td><input type="text" name="zip1" /> *</td></tr>
                </table>
            </td>
            <td width="8px;" align="right" style="padding-right:5px;"><img src="vline.png" style="height:200px;" /></td>
            <td align="center">
            	<table width="100%">
                	<tr><td align="center" class="rad3" colspan="2">Moving To</td></tr>
                    <tr><td width="24%"  class="alnment" style="padding-top:10px;">Address:</td><td width="76%" style="padding-top:10px;"><input type="text" name="address2" /></td></tr>
                    <tr><td  class="alnment">City:</td><td><input type="text" name="city2" /><input type="hidden" name="altmail" value="" /> *</td></tr>
                    <tr><td  class="alnment">State:</td><td><input type="text" name="state2" /> *</td></tr>
                    <tr><td  class="alnment">Zip:</td><td><input type="text" name="zip2" /></td></tr>
                </table>
            </td>
        </tr>
    </table>
	</td>
</tr>
<tr><td colspan="2" id="btn" align="center" style="padding:15px 0px 20px 0px;"><input style="cursor:pointer" type="submit" value="submit" name="submit" /></td></tr>
</table>
</form>
<?php
include 'dbconnect.php';
if (isset($_REQUEST['submit'])){
	if ($_POST['altmail'] == '') {
		$movdate = $_POST['movdate'];
		if (preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/",$movdate)){
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$findus = $_POST['findus'];
			$movdate = $_POST['movdate'];
			$fromaddress = addslashes($_POST['address1']);
			$fromcity = $_POST['city1'];
			$fromstate = $_POST['state1'];
			$fromzip = $_POST['zip1'];
			$toaddress = addslashes($_POST['address2']);
			$tocity = $_POST['city2'];
			$tostate = $_POST['state2'];
			$tozip = $_POST['zip2'];
$ins = mysqli_query($con,"insert into npteldb.quote_form(name, phone, email, How_did_u_find_us, movedate, from_address, from_city, from_state, from_zip, to_address, to_city, to_state, to_zip, submittime) Values('$name','$phone','$email','$findus','$movdate','$fromaddress','$fromcity','$fromstate','$fromzip','$toaddress','$tocity','$tostate','$tozip',now());");

if (!$ins) {
    die('insert query error : ' .mysqli_error($con));
}

$mailto = "indiaseoanalyst@gmail.com, jason.texasmovers@gmail.com";
$subject = "New Lead Received";
$message = '
<table cellspacing="2" cellpadding="5" width="90%" border="1" background="capmailbg.jpg">
  <col width="173" />
  <col width="153" />
  <tr>
    <td colspan="2" style="text-align:center; font-size:18px;">New Quote From <b>'.$name.'</b></td>
  </tr>
  <tr>
    <td width="173">Name:</td>
    <td width="153">'.$name.'</td>
  </tr>
  <tr>
    <td>Phone No:</td>
    <td>'.$phone.'</td>
  </tr>
  <tr>
    <td>Email:</td>
    <td>'.$email.'</td>
  </tr>
  <tr>
    <td>Moving Date:</td>
    <td>'.$movdate.'</td>
  </tr>
  <tr>
    <td style="text-align:center; font-weight:bold; background-color:#CAD2F9">Moving From:</strong></td>
    <td style="text-align:center; font-weight:bold; background-color:#CAD2F9"><strong>Moving To:</strong></td>
  </tr>
  <tr>
    <td>Address:'.$fromaddress.'</td>
    <td>Address:'.$toaddress.'</td>
  </tr>
  <tr>
    <td>City:'.$fromcity.'</td>
    <td>City:'.$tocity.'</td>
  </tr>
  <tr>
    <td>State:'.$fromstate.'</td>
    <td>State:'.$tostate.'</td>
  </tr>
  <tr>
    <td>Zip:'.$fromzip.'</td>
    <td>Zip:'.$tozip.'</td>
  </tr>
</table>';
//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html; charset=iso-8859-1" . "\r\n";
//$headers .= "From:" .$email;
//mail($mailto,$subject,$message,$headers);
//echo '<meta http-equiv="refresh" content="0; url=thank-you" />';
}
}
}
?></td></tr></table><br />
<table bgcolor="#FFFFFF" class="rad" width="100%" style="font-size:11px; padding: 6px 0px 6px 9px;"><tr><td bgcolor="#FFFFFF">
Copyright &copy; 2014.  Capital Movers.</td></tr>
</table>
<br />
</div>
</body>
</html>
