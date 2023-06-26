<?php 

include("includes/config.php");

$newsLetter = $_REQUEST['email'];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

<title>Subscribe Newsletter :: Livigno Rentals - Livigno Hotel</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/validation.js"></script>

<script type="text/javascript" language="javascript">

function check_quote(){
	var flag =0;
	
	var new_name = $("#name").val();
	var new_nameregex =/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
	var new_nameabc = new_nameregex.test(new_name); 
	if(new_nameabc ==''){
		$('#new_namemsg').fadeIn();
		$('#new_namemsg').delay(2000).fadeOut();
		$('html, body').animate({scrollTop: jQuery('#new_name').offset().top -100 }, 'slow');
		flag =1;
		return false;
	} 
	
	var new_email = $("#emailid").val();
	var new_emailregex =/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var new_emailabc = new_emailregex.test(new_email); 
	if(new_emailabc ==''){
		$('#new_emailmsg').fadeIn();
		$('#new_emailmsg').delay(2000).fadeOut();
		$('html, body').animate({scrollTop: jQuery('#new_email').offset().top -100 }, 'slow');
		flag =1;
		return false;
	} 

	if(flag == 0){
		$.ajax({
		type: 'post',
		url: 'administrator/newsletter/code/subscribe.php',
		data: ($("#new_news").serialize()),
		beforeSend:function(){$('#loadingimage').fadeIn();},
			success: function(msg){
			var msg = msg.trim(); 
				if(msg=='success'){
				//alert(msg);	
				$("#loadingimage").fadeOut();	
				$("#emailid").val("");
				}
			}
		});
	}	
	return false;	
}	
	


</script>

<style>

.error {

	clear: both;

	display: block;

}

td {

	font-size: 8.5pt !important;

}

.myinput{

    border: 1px solid #a9a9a9 !important;

    color: #313131 !important;

    float: left;

    font-family: Tahoma,Geneva,sans-serif !important;

    font-size: 12px !important;

    outline: medium none !important;

    padding: 4px !important;

    

}



.border6 {

  clear: both;

}

</style>

</head>

<body>

<?php include('includes/header-inn.php') ;?>

<div class="content">

  <div class="c-outer">

    <div class="inn-hmt clearfix" style="font-size:0px;">

      <?php include('includes/innleft.php');?>

      <div class="rlt-con-r">
		<!-------START----------LINKS BOOKING ONLINE ----------------->
		<div class="book-on">
		<a href="https://reservations.verticalbooking.com/reservations/gruppo_index.html?id_stile=14805&lingua_int=eng&id_gruppo=19803&dc_gruppo=4215&id_brand=98" target="_blank">Book Online</a>
		</div>   
		<!-------END----------LINKS BOOKING ONLINE ----------------->
        <h2>Subscribe to Livigno Rentals Newsletter</h2>

        	
        <!-- Start newsletter form -->

        <?php if($_GET[action]=="valid")

					{?>

        <br />

        <h1 style="color:green;">Thanks for your Subscription!</h1>

        <br />

        <br />

        <table   border="0" align='center' cellpadding="0" cellspacing="0" class='btxt' style="border:1px solid #BDA879">

          <tr>

            <td height="20" align='center' style="color:green;" ><strong class="font">Successfully Subscribed!</strong></td>

          </tr>

          <tr>

            <td height="20" align='center' ><strong class="font"><a href="<?php print ROOT_DIR ?>newsletter.php">Back To Subscribe Newsletter</a></strong></td>

          </tr>

        </table>

        <br />

        <?php } else { ?>

        <br />

        <div class="bodytext">

          <form action='thanks.php?flg=submit' name="newsletterform" method="post" enctype="multipart/form-data">

            <table   style="padding-left:5px" cellspacing="0" cellpadding="0" border="0" align="center" class="border6">

              <?php 

					if($isError == true)

					{

				?>

              <div id="leftform"> <span style="color:red;"><?php echo $error; ?></span> </div>

              <br />

              <?php 

			   		}

			   ?>

              <tr class="bggrey4">

                <td width="400" height="35" align="left" class="hd4">&nbsp;&nbsp;<strong>Please fill in the form below to register your details.</strong></td>

                <td width="61" align="left"></td>

                <td width="103" align="left">&nbsp;</td>

              </tr>

              <tr class="bggrey5">

                <td valign="top" height="21" align="left" class="bggrey5" colspan="3"><img width="1" height="21" title="" alt="" src="<?php print ROOT_DIR ?>images/pixel.gif" /></td>

              </tr>

              <tr class="bggrey5">

                <td valign="top" align="left" class="bggrey5" colspan="3"><table width="405" border="0" cellspacing="0" cellpadding="0">

                    <tr>

                      <td align="right" valign="top" width="55" class="formtext" height="30">Name*</td>

                      <td align="right" valign="top" width="10" class="formtext">&nbsp;</td>

                      <td align="left" valign="top"><input name="name" id="name" value="" type="text" class="texttyp" maxlength="60" />

                        &nbsp;&nbsp;&nbsp;<font class="error">(Maximum 60 Characters Allowed)</font>
                         <span class="claimdesign" id="new_namemsg" style="display:none; color:#C00">Please Enter Your Name Here.</span>
                        </td>

                    </tr>

                    <tr>

                      <td align="right" valign="top" width="55" class="formtext" height="30">Email ID*</td>

                      <td align="right" valign="top" width="10" class="formtext">&nbsp;</td>

                      <td align="left" valign="top"><input name="emailid" id="emailid" type="text" value="<?php echo $newsLetter ; ?>" class="texttyp" maxlength="100" />

                        &nbsp;&nbsp;&nbsp;<font class="error">(Maximum 100 Characters Allowed)</font>
                         <span class="claimdesign" id="new_emailmsg" style="display:none; color:#C00">Please Enter Your E-mail Id.</span>
                        </td>

                    </tr>

                    <tr>

                      <td>&nbsp;</td>

                      <td>&nbsp;</td>

                      <td align="left" valign="top"><input name="Submit" type="submit" value="Submit" class="cont_send"  onClick="check_quote();"/>

                        <input name="reset" type="reset" value="Reset" class="cont_delt" /></td>

                    </tr>

                    <tr>

                      <td>&nbsp;</td>

                      <td>&nbsp;</td>

                      <td align="left" valign="top">&nbsp;</td>

                    </tr>

                  </table></td>

              </tr>

                </tbody>

              

            </table>

          </form>

          <br />

          (<font>*</font>) Mandatory fields</div>

        <?php } ?>

        <!-- End newsletter form --> 

      </div>

    </div>

  </div>

</div>

<?php include('includes/footer.php') ;?>

</body>

</html>

