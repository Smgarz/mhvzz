<?php
$site_url =  'http://www.livignorentals.com/';
?>
<meta name="viewport" content="width=device-width" />

<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

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
	function page_pop(pop_id){
		$('html, body').animate({
			scrollTop: $(".search-popup").offset().top-(30)
        }, 800);
		$(".popup-box-bg").css({'visibility':'visible','opacity':'1'});
		$(pop_id).css({'visibility':'visible','opacity':'1'});
		$(".close_pop").click(function(){
			$(".popup-box-bg").css({'visibility':'hidden','opacity':'0'});
			$(pop_id).css({'visibility':'hidden','opacity':'0'});
		});
		$(".popup-box-bg").click(function(){
			$(".popup-box-bg").css({'visibility':'hidden','opacity':'0'});
			$(pop_id).css({'visibility':'hidden','opacity':'0'});
		});
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
      <div class="logo"><a href="<?php echo $site_url;?>"><img src="images/logo.jpg"></a></div>
      <a href="javascript:void(0)" class="menuImage"><img src="images/menuIcon.png" alt="Top Menus" title="Top Menus" /></a>
      <div class="top-rt"> <span>Livigno vacation rentals apartments</span>
        <ul>
          <li><img src="images/ph-icon.png">
            <label>+39</label>
            0342 996 550</li>
          <li><a class="menu" href="mailto:info@livignorentals.com"><img src="images/msg-icon.png">Email</a></li>
        </ul>
      </div>
    </div>
    <div class="iphonNav navigation clearfix menu">
      <ul>
        <li> <a class="topmenu" href="index.php">Home</a></li>
        <li> <a class="topmenu" href="vacation-apartments-cest-la-vie-livigno.php">Chalet C'est la Vie</a></li>
        <li> <a class="topmenu" href="vacation-apartments-tea-da-bondi-livigno.php">Chalet Tea da Bondi</a></li>
        <li> <a class="topmenu" href="chalet-kiwi.php">Chalet Kiwi </a> 
          


  

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
      <div class="hm-slider">
        <?php
	  
$rsscat_url      =  	explode('/', $_SERVER['REQUEST_URI']);
$countcat_ur     =  	count($rsscat_url);  
$get_nms  =  	$rsscat_url[$countcat_ur-1]; 
	if($get_nms=='contact.php')
	
{
echo '<img src="images/contact.jpg">';
}
		
elseif($get_nms=='vacation-apartments-cest-la-vie-livigno.php')
	
{
echo '<img src="images/cest-la-vie-banner.jpg">';
}
		
elseif($get_nms=='vacation-apartments-tea-da-bondi-livigno.php')
	
{
echo '<img src="images/tea-da-bondi-banner.jpg">';

}

elseif($get_nms=='chalet-kiwi.php')
	
{
echo '<img src="images/kiwi-banner.jpg">';
}
 

elseif($get_nms=='InfoRequest.php')
	
{
echo '<img src="images/bannerr.jpg">';
	}


elseif($get_nms=='directions-livigno.php')
	
{
echo '<img src="images/directions-banner.jpg">';
	}


	 elseif($get_nms=='livigno-surroundings.php')
	
           {
		echo '<img src="images/banner2.jpg">';
		
}



elseif($get_nms=='livigno-winter-gallery.php')
	
       {
		echo '<img src="images/banner2-winter.jpg">';
	}


elseif($get_nms=='vacation-apartments-cest-la-vie-livigno-marisol2.php')
	
       {
		echo '<img src="images/banner-marisol.jpg">';
	}


elseif($get_nms=='vacation-apartments-cest-la-vie-livigno-soliana3.php')
	
       {
                                    echo '<img src="images/banner-soliana3.jpg">';	
                  }



elseif($get_nms=='vacation-apartments-cest-la-vie-livigno-astrid8.php')
	
       {
                                    echo '<img src="images/banner-astrid8.jpg">';	
                  }


elseif($get_nms=='vacation-apartments-cest-la-vie-livigno-kristel9.php')
	
       {
                                    echo '<img src="images/banner-kristel9.jpg">';	
                  }

elseif($get_nms=='vacation-apartments-cest-la-vie-livigno-vivien7.php')
	
       {
                                    echo '<img src="images/banner-vivien7.jpg">';	
                  }

elseif($get_nms=='vacation-apartments-cest-la-vie-livigno-nives5.php')
	
       {
                                    echo '<img src="images/banner-nives5.jpg">';	
                  }

elseif($get_nms=='vacation-apartments-cest-la-vie-livigno-antea6.php')
	
       {
                                    echo '<img src="images/banner-antea6.jpg">';	
                  }


elseif($get_nms=='vacation-apartments-cest-la-vie-livigno-igor1.php')
	
       {
                                    echo '<img src="images/banner-igor1.jpg">';	
                  }


elseif($get_nms=='vacation-apartments-cest-la-vie-livigno-stelvio4.php')
	
       {
                                    echo '<img src="images/banner-stelvio4.jpg">';	
                  }


elseif($get_nms=='vacation-apartments-tea-da-bondi-livigno1.php')
	
       {
                                    echo '<img src="images/banner-teadabondi1.jpg">';	
                  }


elseif($get_nms=='vacation-apartments-tea-da-bondi-livigno2.php')
	
       {
                                    echo '<img src="images/banner-teadabondi2.jpg">';	
                  }


elseif($get_nms=='vacation-apartments-tea-da-bondi-livigno3.php')
	
       {
                                    echo '<img src="images/banner-teadabondi3.jpg">';	
                  }


elseif($get_nms=='chalet-kiwi1.php')
	
       {
                                    echo '<img src="images/banner-kiwi1.jpg">';	
                  }

elseif($get_nms=='chalet-kiwi2.php')
	
       {
                                    echo '<img src="images/banner-kiwi2.jpg">';	
                  }




	else{
		echo '<img src="images/banner.jpg"> ';
 }
	?>
      
</div>
    
</div>
  
</div>

</div>
