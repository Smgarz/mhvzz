<?php
$site_url =  'http://www.livignorentals.com/';
?>
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="css/bjqs.css">
<link rel="stylesheet" href="css/demo.css">
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="js/bjqs-1.3.min.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-ui.js"></script>
<script type="text/javascript">
<!--
	function setIPhoneMenu(){
		
		jQuery('.subItem').remove();
		jQuery(".iphonNav").css("display", "none");
		jQuery(".iphonNav").addClass("iphon_navigation");
				jQuery(".iphonNav").removeClass("navigation");
				jQuery(".iphonNav > ul").attr("id","");
				jQuery(".menuImage").css("display","block");
				jQuery(".iphonNav ul li").each(function(){
					if(jQuery(this).children("ul").length >0)
					{
						jQuery(this).addClass("parentMenu");
						jQuery(this).prepend("<div class='subItem'></div>");
						jQuery(this).children("ul").addClass("subMenu");
					}
				});
				jQuery(".subMenu").css("display","none");
				jQuery(".menuImage img").unbind("click");
				jQuery(".menuImage img").click(function(){
					jQuery(".iphonNav").slideToggle(300, function(){
						if(!jQuery(this).is(":visible")){
							jQuery(this).find(".subMenu").each(function(){
								jQuery(this).css("display","none");
								jQuery(this).parent().removeClass("parentMenuActive");
							});
						}
					});
				});
				jQuery(".subItem").unbind("click");
				jQuery(".subItem").click(function(e){
					jQuery(this).parent().children(".subMenu").slideToggle(300, function(){
						if(jQuery(this).is(":visible")){
								jQuery(this).parent().parent().children(".parentMenuActive").find(".subMenu").each(function(){
										jQuery(this).slideUp(300);
										jQuery(this).css("display","none");
										jQuery(this).parent().removeClass("parentMenuActive");
									});
								jQuery(this).parent().parent().children(".parentMenuActive").removeClass("parentMenuActive");
							jQuery(this).parent().addClass("parentMenuActive");
							
						}else{
							jQuery(this).parent().removeClass("parentMenuActive");
							jQuery(this).find(".subMenu").each(function(){
								jQuery(this).css("display","none");
								jQuery(this).parent().removeClass("parentMenuActive");
								
							});
						}
					});
					
					e.stopPropagation();
				});
	}
	function setDesktopMenu(){
		jQuery(".iphonNav ul li").find(".subMenu").each(function(){
			jQuery(this).css("display","none");
			jQuery(this).parent().removeClass("parentMenuActive");
		});
		jQuery(".iphonNav").addClass("navigation");
		jQuery(".iphonNav").css("display", "block");
		jQuery(".iphonNav").removeClass("iphon_navigation");
		jQuery(".iphonNav>ul").attr("id","nav");
		jQuery(".menuImage").css("display","none");
	}
	
	jQuery(document).ready(function(){
		if(jQuery(window).width()<650)
		{
			setIPhoneMenu();
		}else{
			setDesktopMenu();
		}
	
	});
	jQuery(window).resize(function(){
		if(jQuery(window).width()<650)
		{
			setIPhoneMenu();
		}else{
			setDesktopMenu();
		}
	});
-->


</script>
<style type="text/css">
<!--
.show {
	display: block;
}
.hide, .hide1 {
	display: none;
}
-->
</style>
<!--[if lt IE 10]>
<style type="text/css">
	select{
    	padding-right:0!important;
    }
</style>
<![endif]-->
<div class="header">
  <div class="h-outer">
    <div class="head-d clearfix">
      <div class="logo"><a href="<?php echo $site_url;?>"><img src="images/logo.jpg" alt="logo"></a></div>
      <a href="javascript:void(0)" class="menuImage"><img src="images/menuIcon.png" alt="Top Menus" title="Top Menus" /></a>
      <div class="top-rt"> <span>Livigno vacation rentals apartments</span>
        <ul>
          <li><img src="images/ph-icon.png" alt="phone icon">
            <label>+39</label>
            0342 996 550</li>
          <li><a class="menu" href="mailto:info@livignorentals.com"><img src="images/msg-icon.png" alt="MSG Icon">Email</a></li>
        </ul>
      </div>
    </div>
    <div class="iphonNav navigation clearfix menu">
      <ul >
        <li> <a class="topmenu" href="index.php">Home</a></li>
        <li> <a class="topmenu" href="vacation-apartments-cest-la-vie-livigno.php">Chalet C'est la Vie</a></li>
        <li> <a class="topmenu" href="vacation-apartments-tea-da-bondi-livigno.php">Chalet Tea da Bondi</a></li>
       <li> <a class="topmenu" href="chalet-kiwi.php">Chalet Kiwi </a>
         <!-- <ul class="sub-menu">
            <li><a href="summer-prices-cestlavie-apartments.php">Summer Prices C'est la Vie</a></li>
            <li><a href="winter-prices-cestlavie-apartments.php">Winter Prices C'est la Vie</a></li>
            <li><a href="summer-prices-apartments-teadabondi.php">Summer Prices Tea da Bondi</a></li>
            <li><a href="winter-prices-apartments-teadabondi.php">Winter Prices Tea da Bondi</a></li>
          </ul>-->
        </li>
        <li> <a class="topmenu" href="http://www.hotelalexanderlivigno.com/">Hotel Alexander</a></li>
        <li> <a class="topmenu" href="livigno-surroundings.php">Livigno Surroundings</a></li>
        <li> <a class="topmenu" href="InfoRequest.php">Request</a></li>
        <li> <a class="topmenu" href="directions-livigno.php">Directions</a></li>
        <li> <a class="topmenu" href="contact.php">Contact</a></li>
        <li> <a class="topmenu" href="blog.php">Blog</a></li>
      </ul>
    </div>
    <div class="slider_d">
      <div class="hm-slider" id="banner-fade">
        <ul class="bjqs">
          <li><img src="banners/Image1.jpg" alt="livigno ski rental" border="0"/></li>
          <li><img src="banners/Image2.jpg" alt="livigno accommodation apartments" border="0"/></li>
          <li><img src="banners/Image4.jpg" alt="hotels in livigno italy" border="0"/></li>
          <li><img src="banners/Image5.jpg" alt="ski accommodation" border="0"/></li>
          <li><img src="banners/Image6.jpg" alt="livigno ski holidays" border="0"/></li>
          <li><img src="banners/Image7.jpg" alt="accommodation in livigno" border="0"/></li>
          <li><img src="banners/Image8.jpg" alt="livigno ski holidays" border="0"/></li>
          <li><img src="banners/Image9.jpg" alt="accommodation in livigno" border="0"/></li>
          <li><img src="banners/Image10.jpg" alt="livigno ski resort" border="0"/></li>
          <li><img src="banners/Image12.jpg" alt="ski apartments" border="0"/></li>
        </ul>
        

  
      </div>
      

<form action="http://www.charmehotelalexander.com/booking-online" method="post">
  

<input type="hidden" value="" name="update">
  
<input type="hidden" value="ricerca_rapida" name="do">
  <input type="hidden" value="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" name="jFormSignature">
  <div class="res-frm">
    <div class="res-heading"> <span>Reserve Online</span> </div>
    <div class="res-input clearfix slct">
      <select class="res-sel res-cat htl" name="bookingForm.selectedStructureCode">
        <option value="CHA-H,CHA-C,CHA-R,CHA-S">Select Structure</option>
        <option value="CHA-H">Charme Hotel Alexander</option>
        <option value="CHA-C">Chalet Tea da Bondi</option>
        <option value="CHA-R">Chalet Kiwi</option>
        <option value="CHA-S">Chalet C'est la Vie</option>
      </select>
    </div>
    <div class="res-input clearfix slct">
      <div class="res-date">
        <label>Arrivals</label>
        <input class="res-inp from1" name="bookingForm.arrival" type="text" id="from1">
        </div>
      <div class="res-date middle">
        <label>Departure</label>
        <input class="res-inp to1" name="bookingForm.departure" type="text" id="to1">
        </div>
        <div class="res-date right">
        <label>Rooms</label>
      <select class="res-sel room" name="bookingForm.roomNumber"  onChange="chk(divs); prechk(this.value);">
        <option value="1">1 Room / 1 Apartment</option>
        <option value="2">2 Rooms / 2 Apartments</option>
        <option value="3">3 Rooms / 3 Apartments</option>
      </select>
        </div>
    </div>
    <div id="div0" class="hide"></div>

          <div id="div1" class="slct_p hide res-input res-room clearfix " style="display: block;">
            <hr class="slct_hr">
            <span>Room1 /  Apartment1</span>
            <label><strong>Adults </strong></label>
            <select name="bookingForm.rooms[0].adults" >
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <label class="chilrd_p"><strong>Children</strong> </label>
            <select  class="room1" name="bookingForm.rooms[0].children" onChange="chk1(divs1); prechk1(this.value);">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <div id="div00" class="hide"></div>
            <div id="div01" class="hide l_padd">
              <label class="chilrd_p"><strong>Age</strong> </label>
              <select name="bookingForm.rooms[0].ages[0]">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div id="div02" class="hide l_padd">
              <label class="chilrd_p"><strong>Age</strong> </label>
              <select name="bookingForm.rooms[0].ages[1]">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div id="div03" class="hide l_padd">
              <label class="chilrd_p"><strong>Age</strong> </label>
              <select name="bookingForm.rooms[0].ages[2]">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div id="div04" class="hide l_padd">
              <label class="chilrd_p"><strong>Age</strong> </label>
              <select name="bookingForm.rooms[0].ages[3]">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>
          <div id="div2" class="slct_p hide res-input res-room clearfix "> <span>Room2 /  Apartment 2</span>
            <label><strong>Adults </strong></label>
            <select name="bookingForm.rooms[1].adults">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <label class="chilrd_p"><strong>Children</strong> </label>
            <select  class="room1" name="bookingForm.rooms[1].children" onChange="chk2(divs2); prechk2(this.value);">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <div id="div000" class="hide"></div>
            <div id="div001" class="hide l_padd">
              <label class="chilrd_p"><strong>Age</strong> </label>
              <select name="bookingForm.rooms[1].ages[0]">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div id="div002" class="hide l_padd">
              <label class="chilrd_p"><strong>Age</strong> </label>
              <select name="bookingForm.rooms[1].ages[1]">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div id="div003" class="hide l_padd">
              <label class="chilrd_p"><strong>Age</strong> </label>
              <select  name="bookingForm.rooms[1].ages[2]">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div id="div004" class="hide l_padd">
              <label class="chilrd_p"><strong>Age</strong> </label>
              <select  name="bookingForm.rooms[1].ages[3]">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>
          <div id="div3" class="slct_p hide res-input res-room clearfix "> <span>Room3 /  Apartment3</span>
            <label><strong>Adults </strong></label>
            <select name="bookingForm.rooms[2].adults">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <label class="chilrd_p"><strong>Children</strong> </label>
            <select  class="room1" name="bookingForm.rooms[2].children" onChange="chk3(divs3); prechk3(this.value);">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <div id="div0000" class="hide"></div>
            <div id="div0001" class="hide l_padd">
              <label class="chilrd_p"><strong>Age</strong> </label>
              <select name="bookingForm.rooms[2].ages[0]">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div id="div0002" class="hide l_padd">
              <label class="chilrd_p"><strong>Age</strong> </label>
              <select name="bookingForm.rooms[2].ages[1]">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div id="div0003" class="hide l_padd">
              <label class="chilrd_p"><strong>Age</strong> </label>
              <select name="bookingForm.rooms[2].ages[2]">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div id="div0004" class="hide l_padd">
              <label class="chilrd_p"><strong>Age</strong> </label>
              <select name="bookingForm.rooms[2].ages[3]">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>
          <div id="div4" class="slct_p hide res-input res-room clearfix "> <span>Room4 /  Apartment4</span>
            <label><strong>Adults </strong></label>
            <select>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <label class="chilrd_p"><strong>Children</strong> </label>
            <select  class="room1" name="list1" onChange="chk4(divs4); prechk4(this.value);">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <div id="div00000" class="hide"></div>
            <div id="div00001" class="hide l_padd">
              <label class="chilrd_p"><strong>Age</strong> </label>
              <select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div id="div00002" class="hide l_padd">
              <label class="chilrd_p"><strong>Age</strong> </label>
              <select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div id="div00003" class="hide l_padd">
              <label class="chilrd_p"><strong>Age</strong> </label>
              <select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div id="div00004" class="hide l_padd">
              <label class="chilrd_p"><strong>Age</strong> </label>
              <select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>
    <div class="res-input promo-code clearfix">
      <label>Promo Code</label>
      <input class="res-inp promo_txt" name="promoCode" value="" type="text">
    </div>
    <div class="res-input search-btn clearfix" style="padding:0;">
      <input type="submit" value="Search" class="res-sub sarch" />
    </div>
    <div class="res-txt"><a href="#">Existing Reservation</a></div>
    </div>
</form>
    </div>
  </div>
</div>
<style>
.bjqs-controls, .bjqs-markers{
	display:none !important;
}
 </style>
<script>
        jQuery(document).ready(function($) {
          $('#banner-fade').bjqs({
            height      : 447,
            width       : 1047,
            responsive  : true
          });

        });
      </script>

