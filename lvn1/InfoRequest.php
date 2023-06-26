<?php 
error_reporting(0);
if(isset($_GET['flg']) && $_GET['flg']=="submit"){

$error = "";
$isError = false ;
$fname = $_POST["fname"];
$phone = $_POST["phone"];
$emailid = $_POST["emailid"];
$message = $_POST["message"];
$arDate = $_POST["Arrival_year"]."-".$_POST["Arrival_month"]."-".$_POST["Arrival_day"];
$depDate = $_POST["Departure_year"]."-".$_POST["Departure_month"]."-".$_POST["Departure_day"];
$nkids = $_POST["numkids"];
$nadult = $_POST["numadult"];
$apartment =  $_POST["Apartment"];
//Check word limit

$count_fname = strlen($fname); 
$count_lname = strlen($lname); 
$count_phone =strlen($phone); 
$count_email =strlen($emailid);
$count_message =strlen($message);  

	if($count_fname > '100'){
		$isError = true ;
		$error = "You can insert 100 characters only !";
	}
	if($count_phone > '15'){
	$isError = true ;
	$error = "You can insert fifteen numbers only !";
	}
	
	if($count_email > '100'){
	$isError = true ;
	$error = "You can insert hundrade characters only !";
	}
	
	if($count_message > '255'){
	$isError = true ;
	$error = "You can insert 255 characters only !";
	}
	//Check for blank string
	if($fname == ""){
		$isError = true ;
		$error = "Full Name required !";
	}
	if($phone ==""){
		$isError = true;
		$error = "Phone Number required !";
	}
	
	if($arDate == ""){
		$isError = true ;
		$error = "Arrival Date required !";
	} 
	
	if($depDate == ""){
		$isError = true ;
		$error = "Departure Date required !";
	} 
	
	if($apartment == ""){
		$isError = true ;
		$error = "Apartment required !";
	} 
	if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $emailid)){
		$isError = true ;
		$error .= "<br /> Email required !";
	}

	if($isError == false){
	$mail_to =  "info@livignorentals.com"; 
	//$mail_to = "tanzylife@yahoo.com";
	$mail_from = $emailid;
	$mail_sub="Livigno Rentals - Inforequest Form";
	$mail_mesg 	=  '<html>
<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f7f2e4;" bgcolor="#f7f2e4" leftmargin="0">
<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f7f2e4">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td valign="middle" align="center" height="45"><p style="font-size: 14px; line-height: 24px; font-family: Georgia, Times New Roman, Times, serif; color: #b0a08b; margin: 0px;">
              </webversion>
            </p></td>
        </tr>
      </table>
      <table style="background-repeat: no-repeat; background-position: center; background-color: #fffdf9;" width="684" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center" valign="top"><a href="http://www.livignorentals.com"><img src="http://www.livignorentals.com/images/logo.jpg" alt="Catherine Maxwell"/></a></td>
        </tr>
      </table>
      <table cellspacing="0" bgcolor="#fffdf9"  border="0" cellpadding="0" width="100%">
        <tr>
          <td align="center" valign="top"><h1 style="font-size: 36px; font-weight: normal; color: #333333; font-family: Georgia, Times New Roman, Times, serif; margin-top: 0px; margin-bottom: 20px;">Livigno Rentals.com : Info request form<em></em></h1>
            <table>
              <tr>
                <td style="padding:0 0 6px 0px;"  width="274" align="left">Email ID:</td>
                <td width="334" align="left" valign="top">'.$emailid.'</td>
              </tr>
              <tr>
                <td style="padding:0 0 6px 0px;"  width="274" align="left">Full Name:</td>
                <td width="334" align="left" valign="top"><a target="_blank" href="mailto:'.$quoteemailval.'">'.$fname.'</a></td>
              </tr>
              <tr>
                <td  style="padding:0 0 6px 0px;" width="274" align="left">Phone No:</td>
                <td width="334" align="left" valign="top">'.$phone.'</td>
              </tr>
              <tr>
                <td style="padding:0 0 6px 0px;"  width="274" align="left">Num Kids:</td>
                <td width="334" align="left" valign="top">'.$nkids.'</td>
              </tr>
              <tr>
                <td style="padding:0 0 6px 0px;"  width="274" align="left">Num Adults:</td>
                <td width="334" align="left" valign="top">'.$nadult.'</td>
              </tr>
              <tr>
                <td style="padding:0 0 6px 0px;"  width="274" align="left">Arrival Date:</td>
                <td width="334" align="left" valign="top">'.$arDate.'</td>
              </tr>
              <tr>
                <td valign="top" style="padding:0 0 6px 0px;"  width="274" align="left">Departure Date</td>
                <td width="334" align="left" valign="top">'.$depDate.'</td>
              </tr>
              <tr>
                <td valign="top" style="padding:0 0 6px 0px;"  width="274" align="left">Apartment</td>
                <td width="334" align="left" valign="top">'.$apartment.'</td>
              </tr>
              <tr>
                <td valign="top" style="padding:0 0 6px 0px;"  width="274" align="left">Other requests</td>
                <td width="334" align="left" valign="top">'.$message.'</td>
              </tr>

              <tr>
                <td colspan="2" height="72"><hr></td>
              </tr>
              <tr>
                <td  align="center" valign="top" colspan="2" height="30">&copy; '. date('Y').'  <a href="http://www.livignorentals.com">www.livignorentals.com</a>. </td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>';
	
	$headers="From: $mail_from" . "\r\n";
	$headers.='X-Mailer: PHP/' . phpversion().'\r\n';
	$headers.= 'MIME-Version: 1.0' . "\r\n";
	$headers.= 'Content-type: text/html; charset=iso-8859-1 \r\n'; 
	
		if (mail($mail_to,$mail_sub,$mail_mesg,$headers)){
			header("Location: InfoRequest.php?action=valid");
		} else {
		  echo "undefined error";
		}
	
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<title>Livigno vacation apartments Information Request | Rentals Livigno</title>
<meta name="description" content="Livigno vacation apartments Information Request. Book directly and save money"/>
<meta name="keywords" content="Livigno, Lombardy, Italy, Livigno Vacation Rentals, livigno rentals, Italy"/>
<meta http-equiv="expires" content="never" >
<meta name="content-language" content="EN" >
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/validation.js"></script>
<script language="javascript">

function check_quote(){

  var fname = trim(document.inforequestform.fname.value);
  var emailid=trim(document.inforequestform.emailid.value);
  var phone=trim(document.inforequestform.phone.value);
  var sel = document.inforequestform.Departure_year;
  var depy=trim(sel.options[sel.selectedIndex].text);
  sel = document.inforequestform.Departure_month;
  var depm=trim(sel.options[sel.selectedIndex].text);
  sel = document.inforequestform.Departure_day;
  var depd=trim(sel.options[sel.selectedIndex].text);
  sel = document.inforequestform.Arrival_year;
  var ary=trim(sel.options[sel.selectedIndex].text);
  sel = document.inforequestform.Arrival_month;
  var arm=trim(sel.options[sel.selectedIndex].text);
  sel = document.inforequestform.Arrival_day;
  var ard=trim(sel.options[sel.selectedIndex].text);
  sel = document.inforequestform.Apartment;
  var apartment=trim(sel.options[sel.selectedIndex].text);
  var message = trim(document.inforequestform.message.value);
  var temp_message = message;   
     
  if(is_empty(fname)){
    alert("Please enter your full name.");
	document.inforequestform.fname.focus();
	return false;
  }
  
  if(is_empty(phone)){
	  alert("Please enter your phone number.");
	  document.inforequestform.phone.focus();
	  return false;
  }
  
  if(is_empty(apartment)){
    alert("Please enter an Apartment.");
	document.inforequestform.Apartment.focus();
	return false;
  }
  
  if(is_empty(emailid) || !is_email(emailid)){
    alert("Please enter valid email address.");
	document.inforequestform.emailid.focus();
	return false;
  }
  
  if(is_empty(depy) || is_empty(depm)||is_empty(depd)){
    alert("Please enter Departure Date.");
  	document.inforequestform.Departure_year.focus();
	return false;
  }

  if(is_empty(ary) || is_empty(arm)||is_empty(ard)){
    alert("Please enter Arrival Date.");
  	document.inforequestform.Arrival_year.focus();
	return false;
  }
   return true;
}

</script>
<script type="text/javascript">

/***********************************************
* Textarea Maxlength script- � Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for legal use.
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
	function ismaxlength(obj){
		var mlength=obj.getAttribute? parseInt(obj.getAttribute("maxlength")) : ""
		if (obj.getAttribute && obj.value.length>mlength)
		obj.value=obj.value.substring(0,mlength)
	}

	function removeNL(s) {
	  /*
	  ** Remove NewLine, CarriageReturn and Tab characters from a String
	  **   s  string to be processed
	  ** returns new string
	  */
	
	  r = "";
	
	  for (i=0; i < s.length; i++) {
	
		if (s.charAt(i) != '\n' &&
	
			s.charAt(i) != '\r' &&
	
			s.charAt(i) != '\t') {
	
		  r += s.charAt(i);
	
		  }
	
		}
	
	  return r;

  	}
</script>
</head>

<body>
<?php include('includes/header-info.php') ;?>
<div class="content">
  <div class="c-outer">
    <div class="inn-hmt clearfix">
      <div class="rlt-con-r">
		<!-------START----------LINKS BOOKING ONLINE ----------------->
		<div class="book-on">
		<a href="https://livignorentals.beddy.io/#/(beddy:home)?lang=it" target="_blank">Book Online</a>
		</div>   
		<!-------END----------LINKS BOOKING ONLINE ----------------->
        <h2> Livigno vacation apartments Information Request</h2>
        <p>Please complete all the fields</p>
        <div class="bodytext">
          <?php if($_GET[action]=="valid") {?>
          <br />
          <table width="500px" border="0" align='center' cellpadding="0" cellspacing="0" class='btxt' style="border:1px solid #BDA879">
            <tr>
              <td height="20" align='center' style="color:green;"><strong class="font">Your Request has been submitted Successfully!</strong></td>
            </tr>
          </table>
          <br />
          <?php	} ?>
          <form action='InfoRequest.php?flg=submit' name="inforequestform" method="post" enctype="multipart/form-data" onSubmit="return check_quote();">
            <?php if($isError == true){ ?>
            <div id="leftform"> <span style="color:red;"><?php echo $error; ?></span> </div>
            <br />
            <?php 	}  ?>
            <div class="detail_ipt">
              <div class="left_cont clearfix">
                <label>Name*</label>
                <input name="fname" id="fname" type="text" class="texttyp form_input" maxlength="100" />
              </div>
              <div class="left_cont clearfix">
                <label>Phone</label>
                <input name="phone" id="phone" type="text" class="texttyp form_input" maxlength="60" />
              </div>
              <div class="left_cont clearfix">
                <label>E-mail*</label>
                <input name="emailid" id="emailid" type="text" class="texttyp form_input" maxlength="60" />
              </div>
              <div class="arri_cont clearfix">
                <label>Number of Children</label>
                <input NAME="numkids" size=2 class="select-t">
              </div>
              <div class="arri_cont clearfix">
                <label>Number of Adults</label>
                <input NAME="numadult" size=2 class="select-t">
              </div>
              <div class="arri_cont clearfix">
                <label>Arrival Date*</label>
                <select name="Arrival_month" class="select-t">
                  <option selected>
                  <option> January</option>
                  <option>February</option>
                  <option>March</option>
                  <option>April</option>
                  <option>May</option>
                  <option>June</option>
                  <option> July</option>
                  <option>August</option>
                  <option>September</option>
                  <option>October</option>
                  <option>November</option>
                  <option> December</option>
                </select>
                <select name="Arrival_day" class="select-t">
                  <option selected>
                  <option>01</option>
                  <option> 02</option>
                  <option>03</option>
                  <option>04</option>
                  <option>05</option>
                  <option>06</option>
                  <option>07</option>
                  <option>08</option>
                  <option>09</option>
                  <option> 10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option> 18</option>
                  <option>19</option>
                  <option>20</option>
                  <option>21</option>
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
                  <option> 26</option>
                  <option>27</option>
                  <option>28</option>
                  <option>29</option>
                  <option>30</option>
                  <option>31</option>
                </select>
                <select name="Arrival_year" class="select-t">
                  <option selected>
                  <option>2015</option>
                  <option>2016</option>
                  <option>2017</option>
                  <option>2018</option>
                  <option>2019</option>
                </select>
              </div>
              <div class="arri_cont clearfix">
                <label>Departure Date*</label>
                <select name="Departure_month" class="select-t">
                  <option selected>
                  <option>January</option>
                  <option>February</option>
                  <option>March</option>
                  <option>April</option>
                  <option>May</option>
                  <option>June</option>
                  <option> July</option>
                  <option>August</option>
                  <option>September</option>
                  <option>October</option>
                  <option>November</option>
                  <option> December</option>
                </select>
                <select name="Departure_day" class="select-t">
                  <option selected>
                  <option>01</option>
                  <option> 02</option>
                  <option>03</option>
                  <option>04</option>
                  <option>05</option>
                  <option>06</option>
                  <option>07</option>
                  <option>08</option>
                  <option>09</option>
                  <option> 10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option> 18</option>
                  <option>19</option>
                  <option>20</option>
                  <option>21</option>
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
                  <option> 26</option>
                  <option>27</option>
                  <option>28</option>
                  <option>29</option>
                  <option>30</option>
                  <option>31</option>
                </select>
                <select name="Departure_year" class="select-t">
                  <option selected>
                  <option> 2015</option>
                  <option>2016</option>
                  <option>2017</option>
                  <option>2018</option>
                  <option>2019</option>
                  <option>
                </select>
              </div>
              <div class="arri_cont clearfix">
                <label>Apartment*</label>
                <select name="Apartment" class="select-t">
                  <option selected>
                  <option> Igor 1</option>
                  <option> Marisol 2</option>
                  <option> Soliana 3</option>
                  <option> Stelvio 4</option>
                  <option> Nives 5</option>
                  <option> Antea 6</option>
                  <option> Vivien 7</option>
                  <option> Astrid 8</option>
                  <option> Kristel 9</option>
                  <option> Chalet Tea da Bondi</option>
                </select>
              </div>
              <div class="out_cont clearfix">
                <label>Other Requests</label>
                <textarea name="message" id="message" cols="" rows="" class="form_textarea text-text" maxlength="500" onkeyup="return ismaxlength(this)"></textarea>
              </div>
              <div class="left_cont clearfix">
                <input name="Submit" type="submit" value="Send" class="form_button cont_send" />
                <input name="reset" type="reset" value="Reset" class="form_button cont_delt" />
              </div>
            </div>
          </form>
        </div>
      </div>
      <?php include('includes/innleft.php');?>
    </div>
  </div>
</div>
<?php include('includes/footer.php') ;?>
</body>
</html>
