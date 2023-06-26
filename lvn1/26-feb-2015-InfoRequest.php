<?php error_reporting(0); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<title>Livigno vacation apartments Information Request | Rentals Livigno</title>
<meta name="description" content="Livigno vacation apartments Information Request. Book directly and save money" >
<meta name="keywords" content="Livigno, Lombardy, Italy, Livigno Vacation Rentals, livigno rentals, Italy" >
<meta http-equiv="expires" content="never" >
<meta name="content-language" content="EN" >
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/validation.js"></script>
<script type="text/javascript">

function informationrequest(value)
{
	
var firstname = $("#fname").val();

var firstnameex =/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;

var firstnameabc = firstnameex.test(firstname);	


var phone = $("#phone").val();

var phoneregex =/^[\s()+-]*([0-9][\s()+-]*){6,20}$/;

var phoneabc = phoneregex.test(phone);


var email = $("#emailid").val();

var emailregex =/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

var emailabc = emailregex.test(email);


var numkids = $("#numkids").val();

var numkidsregex =/^[\s()+-]*([0-9][\s()+-]*){2,2}$/;

var numkidsabc = numkidsregex.test(numkids);


var numadult = $("#numadult").val();

var numadultregex =/^[\s()+-]*([0-9][\s()+-]*){2,2}$/;

var numadultabc = numadultregex.test(numadult);

var Arrival_month = $("#Arrival_month").val();

var Arrival_day = $("#Arrival_day").val();

var Arrival_year = $("#Arrival_year").val();

var Departure_month = $("#Departure_month").val()

var Departure_day = $("#Departure_day").val()

var Departure_year = $("#Departure_year").val()

var Apartment = $("#Apartment").val()

var message = $("#message").val()

if((firstnameabc == '') && (phoneabc =='') && (emailabc =='')){

alert("Please Enter All Fields.");

jQuery("#fname").focus();

}

var flag =0;	


if(firstnameabc ==false)

	{

	$('#fnamemsg').fadeIn();

	$('#fnamemsg').delay(2000).fadeOut();

	$('html, body').animate({scrollTop: $('#fname').offset().top -100 }, 'slow');

	flag =1;

	return false;

	} 
	
if(phoneabc ==false)

	{

	$('#phonemsg').fadeIn();

	$('#phonemsg').delay(2000).fadeOut();

	$('html, body').animate({scrollTop: $('#phone').offset().top -100 }, 'slow');

	flag =1;

	return false;

	} 	
	
if(emailabc ==false)

	{

	$('#emailidmsg').fadeIn();

	$('#emailidmsg').delay(2000).fadeOut();

	$('html, body').animate({scrollTop: $('#emailid').offset().top -100 }, 'slow');

	flag =1;

	return false;

	}	
	
	
if(numkidsabc ==false)

	{

	$('#numkidsmsg').fadeIn();

	$('#numkidsmsg').delay(2000).fadeOut();

	$('html, body').animate({scrollTop: $('#numkids').offset().top -100 }, 'slow');

	flag =1;

	return false;

	}	
	
if(numadultabc ==false)

	{

	$('#numadultmsg').fadeIn();

	$('#numadultmsg').delay(2000).fadeOut();

	$('html, body').animate({scrollTop: $('#numadult').offset().top -100 }, 'slow');

	flag =1;

	return false;

	}	
	
if(Arrival_month =='')

	{

	$('#Arrival_monthmsg').fadeIn();

	$('#Arrival_monthmsg').delay(2000).fadeOut();

	$('html, body').animate({scrollTop: $('#Arrival_month').offset().top -100 }, 'slow');

	flag =1;

	return false;

	}									

if(Arrival_day =='')

	{

	$('#Arrival_daymsg').fadeIn();

	$('#Arrival_daymsg').delay(2000).fadeOut();

	$('html, body').animate({scrollTop: $('#Arrival_day').offset().top -100 }, 'slow');

	flag =1;

	return false;

	}									

if(Arrival_year =='')

	{

	$('#Arrival_yearmsg').fadeIn();

	$('#Arrival_yearmsg').delay(2000).fadeOut();

	$('html, body').animate({scrollTop: $('#Arrival_year').offset().top -100 }, 'slow');

	flag =1;

	return false;

	}
	
if(Departure_month =='')

	{

	$('#Departure_monthmsg').fadeIn();

	$('#Departure_monthmsg').delay(2000).fadeOut();

	$('html, body').animate({scrollTop: $('#Departure_month').offset().top -100 }, 'slow');

	flag =1;

	return false;

	}	
if(Departure_day =='')

	{

	$('#Departure_daymsg').fadeIn();

	$('#Departure_daymsg').delay(2000).fadeOut();

	$('html, body').animate({scrollTop: $('#Departure_day').offset().top -100 }, 'slow');

	flag =1;

	return false;

	}	
	
if(Departure_year =='')

	{

	$('#Departure_yearmsg').fadeIn();

	$('#Departure_yearmsg').delay(2000).fadeOut();

	$('html, body').animate({scrollTop: $('#Departure_year').offset().top -100 }, 'slow');

	flag =1;

	return false;

	}	
	
if(Apartment =='')

	{

	$('#Apartmentmsg').fadeIn();

	$('#Apartmentmsg').delay(2000).fadeOut();

	$('html, body').animate({scrollTop: $('#Apartment').offset().top -100 }, 'slow');

	flag =1;

	return false;

	}		
	
if(message =='')

	{

	$('#messagemsg').fadeIn();

	$('#messagemsg').delay(2000).fadeOut();

	$('html, body').animate({scrollTop: $('#message').offset().top -100 }, 'slow');

	flag =1;

	return false;

	}
	
						
if(flag == '0')

{

	$.ajax({

	type: 'post',

	url: 'sendcontactpage_mail.php',

	data: ($("#inforequestform").serialize()),

	beforeSend:function(){$('#loadingimagesauto').fadeIn();},

	success: function(msg){

	var msg = msg.trim();
	

	var arr =msg.split('****') ;

if(arr[0] =='securitynot')

{

	$('#capimg').html(arr[1]);

			$('#securitymsg').fadeIn();

			$('#securitymsg').delay(2000).fadeOut();

			$('#security_code').val("");

			$('#loadingimagesauto').fadeOut();

	

	}

	

	 if(arr[0] =='test')

	  {

		alert(arr[1]);

	 }

	 

	if(arr[0]=='success'){

$('#thkx_msg').fadeIn();

	$('#thkx_msg').delay(4000).fadeOut();

	$('#capimg').html(arr[1]);
	
	$('#loadingimagesauto').fadeOut();

	$("#fname").val("");

	$("#phone").val("");

	$("#emailid").val("");

	$("#numkids").val("");

	$("#numadult").val("");

	$("#message").val("");

	}

	}

	});

}

return false;						
				

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
        <div class="book-on"><a href="javascript:;" class="popup-window" onclick="page_pop('#popup-box');" >Book Online</a></div>
        <h2> Livigno vacation apartments Information Request</h2>
        <p>Please complete all the fields</p>
        <div class="bodytext">
          <div id="thkx_msg" style="display:none;">
            <table width="500px" border="0" align='center' cellpadding="0" cellspacing="0" class='btxt' style="border:1px solid #BDA879">
              <tr>
                <td height="20" align='center' style="color:green;"><strong class="font">Your Request has been submitted Successfully!</strong></td>
              </tr>
            </table>
          </div>
       
          <form name="inforequestform" id="inforequestform" method="post" enctype="multipart/form-data">
            <?php 

					if($isError == true)

					{

				?>
            <div id="leftform"> <span style="color:red;"><?php echo $error; ?></span> </div>
            <br />
            <?php 

			   		}

			   ?>
            <div class="detail_ipt">
              <div class="left_cont clearfix">
                <label>Name*</label>
                <input name="fname" id="fname" type="text" class="texttyp form_input" />
                <span style="color:#ffffff; margin-left:108px; display:none" class="claimdesign" id="fnamemsg">Please Enter Your Name</span> </div>
              <div class="left_cont clearfix">
                <label>Phone</label>
                <input name="phone" id="phone" type="text" class="texttyp form_input"  />
                <span style="color:#ffffff; margin-left:108px; display:none" class="claimdesign" id="phonemsg">Please Enter Your Phone Number</span> </div>
              <div class="left_cont clearfix">
                <label>E-mail*</label>
                <input name="emailid" id="emailid" type="text" class="texttyp form_input" />
                <span style="color:#ffffff; margin-left:108px; display:none" class="claimdesign" id="emailidmsg">Please Enter Your Email Id</span> </div>
              <div class="arri_cont clearfix">
                <label>Number of Children*</label>
                <input type="text" name="numkids" id="numkids" class="select-t">
                <span style="color:#ffffff; margin-left:108px; display:none" class="claimdesign" id="numkidsmsg">Please Enter Number of Children</span> </div>
              <div class="arri_cont clearfix">
                <label>Number of Adults*</label>
                <input type="text" name="numadult" id="numadult" class="select-t">
                <span style="color:#ffffff; margin-left:108px; display:none" class="claimdesign" id="numadultmsg">Please Enter Number of Adults</span> </div>
              <div class="arri_cont clearfix">
                <label>Arrival Date*</label>
                <select name="Arrival_month" id="Arrival_month" class="select-t">
                  <option selected value="">-Select-</option>
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
                <span style="color:#ffffff; margin-left:108px; display:none" class="claimdesign" id="Arrival_monthmsg">Please Select Month</span>
                <select name="Arrival_day" id="Arrival_day" class="select-t">
                  <option selected value="">-Select-</option>
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
                <span style="color:#ffffff; margin-left:108px; display:none" class="claimdesign" id="Arrival_daymsg">Please Select Days</span>
                <select name="Arrival_year" id="Arrival_year" class="select-t">
                  <option selected value="">-Select-</option>
                  <option> 2014</option>
                  <option>2015</option>
                  <option>2016</option>
                  <option>2017</option>
                  <option>2018</option>
                </select>
                <span style="color:#ffffff; margin-left:108px; display:none" class="claimdesign" id="Arrival_yearmsg">Please Select Year</span> </div>
              <div class="arri_cont clearfix">
                <label>Departure Date*</label>
                <select name="Departure_month" id="Departure_month" class="select-t">
                  <option selected value="">-Select-</option>
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
                <span style="color:#ffffff; margin-left:108px; display:none" class="claimdesign" id="Departure_monthmsg">Please Select Month</span>
                <select name="Departure_day" id="Departure_day" class="select-t">
                  <option selected value="">-Select-</option>
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
                <span style="color:#ffffff; margin-left:108px; display:none" class="claimdesign" id="Departure_daymsg">Please Select Month</span>
                <select name="Departure_year" id="Departure_year" class="select-t">
                  <option selected value="">-Select-</option>
                  <option> 2014</option>
                  <option>2015</option>
                  <option>2016</option>
                  <option>2017</option>
                  <option>2018</option>
                  <option>
                </select>
                <span style="color:#ffffff; margin-left:108px; display:none" class="claimdesign" id="Departure_yearmsg">Please Select Year</span> </div>
              <div class="arri_cont clearfix">
                <label>Apartment*</label>
                <select name="Apartment" id="Apartment" class="select-t">
                  <option selected value="">-Select-</option>
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
                <span style="color:#ffffff; margin-left:108px; display:none" class="claimdesign" id="Apartmentmsg">Please Select Apartment</span> </div>
              <div class="out_cont clearfix">
                <label>Other Requests</label>
                <textarea name="message" id="message" class="form_textarea text-text"></textarea>
                <span style="color:#ffffff; margin-left:108px; display:none" class="claimdesign" id="messagemsg">Please Enter Other Requests</span> </div>
              <div class="arri_cont clearfix">
                <label class="seccap" for="cforms_captcha2" id="label-2-18"><span>Verification</span></label>
                <input name="security_code" id="security_code" maxlength="6"  type="text" class="cforms_captcha2" placeholder="Enter Code">
              </div>
              <div class="capcha_img"><span id="capimg"><img alt="code" src="CaptchaSecurityImages.php?width=120&height=40&characters=6"></span></div>
              <span class="formvald" style="display:none" id="securitymsg">Please enter correct security code</span>
              <div class="left_cont clearfix">
                <input name="Submit" type="button" value="Send" class="form_button cont_send"  onclick="informationrequest()"/>
                <input name="reset" type="reset" value="Reset" class="form_button cont_delt" />
                <img src="images/clock.gif" class="contact_ldimg" style="display:none;" id="loadingimagesauto"/> </div>
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
