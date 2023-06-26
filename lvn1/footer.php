<div class="footer">
  <div class="footer-d">
    <div class="f-outer clearfix">
      <div class="foo-link clearfix">
        <ul>
          <li> <a href="http://www.livignorentals.com">Home</a></li>
          <li><a href="vacation-apartments-cest-la-vie-livigno.php">Chalet C'est la Vie</a></li>
          <li> <a href="vacation-apartments-tea-da-bondi-livigno.php">Chalet Tea da Bondi</a></li>
      <li> <a href="chalet-kiwi.php">Chalet Kiwi</a></li>
     <li> <a href="http://www.hotelalexanderlivigno.com/">Hotel Alexander</a></li>
          <li> <a href="livigno-surroundings.php">Livigno Surroundings</a></li>
          <li> <a href="InfoRequest.php">Info Request</a></li>
          <li> <a href="mailto:info@livignorentals.com">e-Mail</a></li>
          <li> <a href="links.php">Links</a> </li>
          <li> <a href="livigno-appartamenti-vacanza.php">Livigno 
            
            affitto case vacanza appartamenti</a></li>
        </ul>
      </div>
      <script type="text/javascript">
function newslettervalidation() {
	
	var user_name = document.getElementById('newsletter_text').value=='';
	if(user_name)
	{
		alert('Please Enter your name Here');
	return false;
	}
	
// var emailText = document.getElementById('newsletter_text').value;
//    var pattern = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
//    if (pattern.test(emailText)) {
//        return true;
//    } else {
//        alert('Please entr correct mail id');
//        return false;
//    }
}


    </script>
    
		<script type="text/javascript"> 

		function validate(val)
		{
			if($('#email').val()==""){
				$('#checkEmailMatch').fadeIn();
			return false;
			}
		return true;
		}

		
			   function checkEmail(email) {
			 
				var email=$('#email').val();
				var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			 
				 
				if (!filter.test(email)) {
				 $("#checkEmailMatch").fadeIn();
				return false;
			 }
			  else{
			 $('#checkEmailMatch').fadeOut();
			  }
			}
        </script>
      <div class="foo-nLetter clearfix"> 
        <form action="newsletter.php" name="formr1" id="formr1" method="post" onsubmit="return validate(document.formr1);">
        <span id="checkEmailMatch" class="ErrorMsg" style="display:none;">Please enter correct email address.</span> 
            <input type="text" onKeyUp="checkEmail();" name="email" id="email"  placeholder="Join our Newsletter">
            
            <input type="submit" value="Submit" onclick="return newslettervalidation(this.form);">
        </form>
        <!--     <a href="newsletter.php"><img src="images/newsleeter.png" /></a>--> 
        
      </div>
    </div>
  </div>
  <div class="foo-con">
    <div class="f-outer clearfix">
      <p>Livigno Vacation Rentals and Holiday Apartments, Livigno Vacation Rentals, Livigno appartamenti vacanza, Appartamenti Livigno in affitto per vacanze. Affitto Case Vacanze Livigno, livigno lodging and accommodations,  livigno affitti, Lombardy vacation apartments, mountain vacation rental, vacation rentals chalets apartments homes</p>
      <p><img src="images/foo-logo.png" alt="footer logo"></p>
    </div>
  </div>
</div>
<script type="text/javascript">
window.onload = function () {
	var currentTime = new Date();
	var day = currentTime.getDate();
	var month = currentTime.getMonth();
	var year = currentTime.getFullYear();

	  if (day < 10){
	  day = "0" + day;
	  }
	
	  if (month < 10){
	  month = "0" + month;
	  }

  	var today_date = day + "/" + month + "/" + year;

	  if(day>=31){
	   var today_datea = (parseInt(day)+1) + "/" + month + "/" + year;
		$("#to1").val(today_datea);
	  }

 	$("#from1").val(today_date);

};

function getNewTime(e){
 	var parts =e.split('/');
	var tomorrow = new Date(parts[2],parts[0],parts[1]).add(1).day();
	return tomorrow.toString();
}
function padStr(i) {
    return (i < 10) ? "0" + i : "" + i;
}
$(function() {

	$(".from1").datepicker({
		minDate: 0,
		showOn: "button",
		buttonImage: "images/cel-icon.png",
		buttonImageOnly: true,
		buttonText: "Select date",
			onSelect:function(e){
				var parts =e.split('/');
				var someDate = new Date(parts[2],parts[1]-1,parts[0]); 
				console.log(someDate);
				var numberOfDaysToAdd = 1;
				someDate.setDate(someDate.getDate() + numberOfDaysToAdd); 
				var newdate = padStr(padStr(someDate.getDate()+ "/" + padStr(1 + someDate.getMonth()) + "/" + someDate.getFullYear()));
				 var today_datea = newdate;
				$("#to1").val(today_datea);
			}
	});

	$( ".to1" ).datepicker({
		minDate: 0,
		showOn: "button",
			buttonImage: "images/cel-icon.png",
			buttonImageOnly: true,
			buttonText: "Select date"	
	});
});

$(document).ready(function() {	
	$(".from1, .to1").click(function(e) {
	$(this).next("img").click();
	});
});

//***Need the following DIVs hidden until used****
var divs = ["div0", "div1", "div2", "div3", "div4", ];

function visiblox(arrDiv, hs) {
	var disp = (hs) ? "none" : "block";
	for(var x = 0; x < arrDiv.length; x++) {
	document.getElementById(arrDiv[x]).style.display = disp;
	}
}

function prechk(v){
	for(var i = 0; i <= v; ++i){
	chk([divs[i]], true);
	}
}

function chk(what, item) {
	if(item) {
		visiblox(what, false);
	} else {
		visiblox(what, true);
	}
}

//***Need the following DIVs hidden until used****
var divs1 = ["div00", "div01", "div02", "div03", "div04", ];
function visiblox1(arrDiv, hs) {
 var disp1 = (hs) ? "none" : "block";
 for(var x = 0; x < arrDiv.length; x++) {
  document.getElementById(arrDiv[x]).style.display = disp1;
 }
}

function prechk1(v){
 for(var i = 0; i <= v; ++i){
  chk([divs1[i]], true);
 }
}

function chk1(what, item) {
 if(item) {
  	visiblox1(what, false);
 } else {
  	visiblox1(what, true);
 }
}

//***Need the following DIVs hidden until used****
var divs2 = ["div000", "div001", "div002", "div003", "div004", ];

function visiblox2(arrDiv, hs) {
 var disp2 = (hs) ? "none" : "block";
 for(var x = 0; x < arrDiv.length; x++) {
  document.getElementById(arrDiv[x]).style.display = disp2;
 }
}

function prechk2(v){
 for(var i = 0; i <= v; ++i){
  chk([divs2[i]], true);
 }
}

function chk2(what, item) {
 if(item) {
  	visiblox2(what, false);
 } else {
  	visiblox2(what, true);
 }
}

//***Need the following DIVs hidden until used****
var divs3 = ["div0000", "div0001", "div0002", "div0003", "div0004", ];

function visiblox3(arrDiv, hs) {
 	var disp3 = (hs) ? "none" : "block";
 for(var x = 0; x < arrDiv.length; x++) {
  	document.getElementById(arrDiv[x]).style.display = disp3;
 }
}

function prechk3(v){
 for(var i = 0; i <= v; ++i){
  	chk([divs3[i]], true);
 }
}

function chk3(what, item) {
 if(item) {
  	visiblox3(what, false);
 } else {
  	visiblox3(what, true);
 }
}

//***Need the following DIVs hidden until used****
var divs4 = ["div00000", "div00001", "div00002", "div00003", "div00004", ];

function visiblox4(arrDiv, hs) {
 var disp4 = (hs) ? "none" : "block";
 for(var x = 0; x < arrDiv.length; x++) {
  	document.getElementById(arrDiv[x]).style.display = disp4;
 }
}

function prechk4(v){
 for(var i = 0; i <= v; ++i){
  	chk([divs4[i]], true);
 }
}

function chk4(what, item) {
 if(item) {
  	visiblox4(what, false);
 } else {
  	visiblox4(what, true);
 }
}
</script>