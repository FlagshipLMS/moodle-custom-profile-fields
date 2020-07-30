<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>
<header role="banner">
			<a class="logo" href="https://www.kenworth.com/">
	<img src="images/logo.png" alt="Kenworth. The World's Best.">
	<img src="images/logo-landscape.png" alt="Kenworth. The World's Best.">
</a>

<button id="primary-nav-btn" type="button"></button>

<nav id="primary-nav">
	<ul>
		<li>
			<form name="search-form" method="GET" action="/search-results/" novalidate="novalidate">
				<input type="text" name="search" placeholder="Search">
				<button type="submit"></button>
			</form>
		</li>

				<li class="has-menu">
					<a href="https://www.kenworth.com/trucks/">Trucks</a>
						<div class="megamenu clearfix">
							
								<ul>
									
											<li><a href="https://www.kenworth.com/trucks/truck-models/">Truck Models</a></li>
											<li><a href="https://www.kenworth.com/trucks/powertrain/">Powertrain</a></li>
											<li><a href="https://www.kenworth.com/trucks/technologies/">Technologies</a></li>
											<li><a href="https://www.kenworth.com/trucks/the-drivers-truck/">The Driver's Truck</a></li>
											<li><a href="https://www.kenworth.com/trucks/certified-pre-owned/">Certified Pre-owned</a></li>
									
								</ul>
							

							
						</div>
				</li>
				<li class="has-menu">
					<a href="https://www.kenworth.com/parts/">Parts</a>
						<div class="megamenu clearfix">
							
							

									<ul class="sublevel level-3">
				<li>
					<a href="https://partsandservice.kenworth.com/" target="_blank">Parts and Service</a>
				</li>
				<li>
					<a href="https://parts.kenworth.com/" target="_blank">Online Parts Counter</a>
				</li>
		</ul>

						</div>
				</li>
				<li class="has-menu">
					<a href="https://www.kenworth.com/service/">Service</a>
						<div class="megamenu clearfix">
							
							

									<ul class="sublevel level-3">
				<li>
					<a href="https://www.kenworth.com/service/service/">Service</a>
				</li>
				<li>
					<a href="https://www.kenworth.com/service/premiercare-gold/">PremierCare Gold</a>
				</li>
				<li>
					<a href="https://www.kenworth.com/service/loyalty-discounts/">Loyalty Discounts</a>
				</li>
				<li>
					<a href="https://www.kenworth.com/service/trucktechplus/">TruckTech+</a>
				</li>
		</ul>

						</div>
				</li>
				<li class="">
					<a href="https://www.kenworth.com/dealers/">Dealers</a>
				</li>
				<li class="">
					<a href="https://www.kenworth.com/resources/">Resources</a>
				</li>
				<li class="has-menu">
					<a href="https://www.kenworth.com/about-us/">About Us</a>
						<div class="megamenu clearfix">
							
							

									<ul class="sublevel level-3">
				<li>
					<a href="https://www.kenworth.com/about-us/kenworth-introduction/">Kenworth Introduction</a>
				</li>
				<li>
					<a href="https://www.kenworth.com/about-us/history/">History</a>
				</li>
				<li>
					<a href="https://www.kenworth.com/about-us/news/">News</a>
				</li>
				<li>
					<a href="https://www.kenworth.com/about-us/worlds-best-magazine/">World's Best Magazine</a>
				</li>
				<li>
					<a href="https://www.kenworth.com/about-us/careers/">Careers</a>
				</li>
		</ul>

						</div>
				</li>

	</ul>
</nav>
		</header>

<div class="loginbox">
	<form id="form" name="form" method="post" action="https://bendixdev.flagshiplms.com/newlogin.php">
        <div id="stylized" class="myform" align="center">
          
        
            <div align="center">
                <input type="text" id="name" name="username" align="left" placeholder="Student Username" />
                <input type="password" name="password" placeholder="Password" id="password" />
                <input type="hidden" name="url" value="kenworth">
                 <input type="hidden" name="ref" value="https://bendixdev.flagshiplms.com/testlogin.php">
                <div style="height: 20px"></div>
                <div align="center" style="text-align:center;">
                    <a href="https://bendixdev.flagshiplms.com/newregister.php" style="color: white; font-size: 12px;">Register</a>
                </div>
                <div class="spacer"></div>
                <div align="left"></div>
                <input type="submit" id="loginbtn" value="Login" />
               <?php
              
                 if(!empty($_GET['errorcode']) && $_GET['errorcode'] ==  '3')
                    { 
                         echo '<div class="error" style="color:red;padding-bottom:20px;padding-left:20px;padding-right:20px;padding-top:20px;">';
                        echo 'Unable to login. Please check username and password .';
                     echo '</div>';
                        
                    }
            ?>
            </div>
        </div>
    </form>
</div>

</body>
</html>

<script>
	(function () {
    var menu = $("#primary-nav");
    var menuButton = $("#primary-nav-btn");
    var activeClass = "nav-opened";
    var activeClassTablet = "menu-visible";
    var heroAspectRatio = 0.45625;

    // Event handler for 'menuButton'; it adds/removes 'activeClass' to 'menu';
    // CSS handles the actually display and hiding of the menu (see main.css)
    function toggleNav() {
        if (!menu.hasClass(activeClass)) {
            menu.addClass(activeClass);
        } else {
            menu.removeClass(activeClass);
        }
    }
    menuButton.on("click touchend", function (event) {
        event.preventDefault();
        toggleNav();
    });
    /**
	* Adds an event handler to the Document itself;
	* It removes 'activeClass' IF:
	*	1) 'menu' already contains it;
	*	2) the touch event occurred outside of #primary-nav and its descendants; and
	*	3) the user didn't click on the menu button itself
	*/
    $(document).on('click touchend', function (evt) {
        if (!$(evt.target).closest('#primary-nav').length && menu.hasClass(activeClass) && !$(evt.target).closest('#primary-nav-btn').length) {
            menu.removeClass(activeClass);
        }
        if (!$(evt.target).closest('#primary-nav').length && menu.find(".has-menu").hasClass(activeClassTablet)) {
            menu.find(".has-menu").each(function () { $(this).removeClass(activeClassTablet); });
        }
    });

    /* Desktop Menu support for touch devices */
    menu.find("ul > li > a").on("touchend", function (event) {
        if ($(window).width() > 767) {
            menu.find(".has-menu").each(function () { $(this).removeClass(activeClassTablet); });
            if (!$(this).parent().hasClass(activeClassTablet) && $(this).parent().hasClass("has-menu")) {
                event.preventDefault();
                $(this).parent().addClass(activeClassTablet);
            }
        }
    });


    /* Year/month menu on News Releases page */
    $(".year-menu > li > a").on("click", function (e) {
        //e.preventDefault();
        $(".year-menu > li").removeClass("active");
        $(this).parent().addClass("active");
        $(this).blur();
    });

    /* Insert truck images into forms */
    var baseImageUrl = "";
    var truckImages = {
        "T880": "/media/30531/truckselector-t880.png"
		, "T680": "/media/2583/truckselector-t680.png"
		, "T660": "/media/47092/T660-flatttop-Chooser-Thumb.png"
		, "W900": "/media/53188/truckselector-w900.png"
		, "T800": "/media/53186/truckselector-t800.png"
		, "C500": "/media/2877/truckselector-c500.png"
		, "T470": "/media/53189/truckselector-t470.png"
		, "T440": "/media/53190/truckselector-t440.png"
		, "T370": "/media/53187/truckselector-t370.png"
		, "T270": "/media/2897/truckselector-t270.png"
		, "T170": "/media/2902/truckselector-t170.png"
		, "K370": "/media/2912/k370_chooser_thumb.png"
		, "K270": "/media/2907/k270_chooser_thumb.png"
    };
    $(".selectatruck input[type=radio]").each(function (index) {
        var $this = $(this);
        var radioValue = $(this).val();
        for (key in truckImages) {
            if (key == radioValue) {
                $this.next().andSelf().wrapAll("<div class='imageGroup'></div>");
                $this.before("<img src='" + baseImageUrl + truckImages[radioValue] + "' alt='" + radioValue + "' />");
            }
        };
    });

    /* Page Headers - height adjustment for mobile */
    function adjustHeroHeight() {
        if ($(window).width() <= 767) {
            var heroWidth = $(".billboard").width();
            $(".subpage-billboard-content:not(.wysiwyg)").css("height", heroWidth * heroAspectRatio + "px");
        } else {
            $(".subpage-billboard-content:not(.wysiwyg)").css("height", "");
        }
    }

    adjustHeroHeight();
    $(window).on("resize", function (event) {
        adjustHeroHeight();
    });

    /*  Parse YouTube url for video id. Works for the following cases:
        - #[ID]
        - https://www.youtube.com/watch?v=[ID]
        - https://youtu.be/[ID]
    */
    function getYouTubeVideoId(url) {
        var ID = '';
        url = url.replace(/(>|<)/gi,'').split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
        if(url[2] !== undefined) {
            ID = url[2].split(/[^0-9a-z_\-]/i);
            ID = ID[0];
        } else {
            ID = url;
        }
        if (url[0].substring(0, 1) == '#') {
            return url[0].replace('#', '');
        }
        return ID;
    }

    // Launch modal with embedded youtube video
    $('a.yt-video').on('click touchend', function(e) {
        e.preventDefault();
        var videoId = getYouTubeVideoId( $(this).attr('href') );
        if (videoId != "") {
            if ($(window).width() <= 767) {
                window.location = "https://m.youtube.com/watch?v=" + videoId + "?rel=0&autoplay=1";
            } else {
                $.colorbox({
                      html: '<iframe class="cboxIframe" src="https://www.youtube-nocookie.com/embed/' + videoId + '?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
                      innerWidth:680,
                      innerHeight:410
                });
            }
        }
    });

    // Embed youtube video when link is clicked
    $("a.yt-embed").on("click touchend", function(e) {
        e.preventDefault();
        var videoId = getYouTubeVideoId( $(this).attr('href') );
        var embeddedVideo = '<div class="video-wrapper"><iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/'+ videoId +'?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>';
        $(this).replaceWith(embeddedVideo);
    });

    // Billboard video
    if ($("#billboard-video").length) {
        var player = videojs('billboard-video', {
            controls: false,
            autoplay: true,
            muted: true,
            preload: 'auto'
        });
    }
})();


</script>

<style>
	* {
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
.loginbox {
    background-image: url(images/kenworthbg.jpg);
    background-size: cover;
    min-height: 800px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index:99;
}
input#name,input#password {
    padding: 10px 15px;
    border-radius: 5px;
    border: none;
}
form a {
    font-size: 18px !important;
    text-decoration: none;
    padding-bottom: 10px;
    margin-bottom: 10px !important;
    font-weight: bold;
}
input#loginbtn {
    padding: 10px 56px;
    border-radius: 2px;
    font-size: 22px;
    border: none;
    cursor: pointer;
    margin-top: 20px;
}
form#form {
    padding: 40px 48px;
    background: transparent;
    border: 1px solid white;
    background: rgba(0, 0, 0, .6) !important;
    border-radius: 10px;
}
input#loginbtn {
    padding: 10px 56px;
    border-radius: 2px;
    font-size: 22px;
    border: none;
}
form#form {
    padding: 40px 48px;
    background: transparent;
    border: 1px solid white;
}
body {
    background-color: #FFFFFF;
    background-image: url('../images/bkgrn.png');
    background-repeat: repeat-x;
    text-rendering: optimizeLegibility;
}
#primary-nav a {
    color: black;
    text-decoration: none;
}
body > * {
    max-width: 960px;
    margin: 0 auto;
}

img[align*="left"] {
    margin-right: 1em;
}

img[align*="right"] {
    margin-left: 1em;
}


/* SITEWIDE STYLES */
.row::before, .row::after {
    content: " ";
    display: table;
}

.row::after {
    clear: both;
}

.row .col {
    float: left;
    padding: 0 0.5em;
    width: 100%;
}

.screen-only {
    display: block;
}

.mobile-hide {
    display: none !important;
}

.print-only,
.print-header {
    display: none;
}

.ctaMain {
    background: #1E7CBB;
    background: linear-gradient(to bottom, #439bd4 0%, #1E7CBB 100%);
}

.ctaSub {
    background: #a9a9a9;
    background: linear-gradient(to bottom, #c2c2c2 0%, #a9a9a9 100%);
}

.divider {
    padding: 0 20px;
    margin: 25px 0;
}

.divider hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 2px solid #e9e9e9;
    padding: 0;
    margin: 0;
}

.wysiwyg-block > .thin-line-top {
    display: table;
    width: 100%;
}

.thin-line-top {
	border-top: 1px solid #dfdfdf; 
	padding: 10px;
}

.thin-line-bottom {
	border-bottom: 1px solid #dfdfdf; 
	padding: 10px;
}

a.button:link, a.button:visited {
    color: #FFF;
    text-decoration: none;
    position: relative;
    display: inline-block;
    font-weight: bold;
    margin: 0 auto;
    padding: 9px 18px;
    
}

a.button:hover, a.button:focus, a.button:active {
    background: #B63637;
    text-decoration: none;
}

.big-button {
    background-color: #3E8EC4;
    color: #FFFFFF;
    display: inline-block;
    font-size: 20px;
    padding: 0.625em 2em;
}

.big-button:hover, .big-button:focus, .big-button:active {
    background-color: #B63637;
    color: #FFFFFF;
}

a.more-link:link, a.more-link:visited {
    color: #B63637;
}

a.more-link:hover, a.more-link:focus, a.more-link:active {
    color: #333333;
}

.more-link::before {
    content: "\00bb";
    display: inline-block;
    margin-right: 0.33em;
    vertical-align: top;
}


/* ICOMOON */
@font-face {
    font-family: 'icomoon';
    src: url('../Content/fonts/icomoon.eot?-eyud4d');
    src: url('../Content/fonts/icomoon.eot?#iefix-eyud4d') format('embedded-opentype'), url('../Content/fonts/icomoon.woff?-eyud4d') format('woff'), url('../Content/fonts/icomoon.ttf?-eyud4d') format('truetype'), url('../Content/fonts/icomoon.svg?-eyud4d#icomoon') format('svg');
    font-weight: normal;
    font-style: normal;
}

[class^="icon-"],
[class*=" icon-"] {
    font-family: 'icomoon';
    font-style: normal;
    font-variant: normal;
    font-weight: normal;
    line-height: 1;
    speak: none;
    text-transform: none;
    /* Better Font Rendering =========== */    
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.icon-search:before {
    content: "\f002";
}

.icon-envelope-o:before {
    content: "\f003";
}

.icon-print:before {
    content: "\f02f";
}

.icon-map-marker:before {
    content: "\f041";
}

.icon-times-circle:before {
    content: "\f057";
}

.icon-check-circle:before {
    content: "\f058";
}

.icon-twitter:before {
    content: "\f099";
}

.icon-facebook:before {
    content: "\f09a";
}

.icon-caret-down:before {
    content: "\f0d7";
}

.icon-caret-up:before {
    content: "\f0d8";
}

.icon-caret-left:before {
    content: "\f0d9";
}

.icon-caret-right:before {
    content: "\f0da";
}

.icon-linkedin:before {
    content: "\f0e1";
}

.icon-angle-left:before {
    content: "\f104";
}

.icon-angle-right:before {
    content: "\f105";
}

.icon-angle-up:before {
    content: "\f106";
}

.icon-angle-down:before {
    content: "\f107";
}

.icon-circle:before {
    content: "\f111";
}

.icon-chevron-circle-up:before {
    content: "\f139";
}

.icon-youtube:before {
    content: "\f167";
}

.icon-instagram:before {
    content: "\f16d";
}

/* HEADER */
[role="banner"] {
    position: relative;
    padding: 15px;
    z-index: 100;
}

.logo img:first-child {
    display: none;
}

[role="banner"] > button {
    position: relative;
    float: right;
    vertical-align: top;
    cursor: pointer;
    outline: none;
    padding: 0;
    background-image: url('../images/icon-hamburger.png');
    border: 0;
    background-color: transparent;
    background-repeat: no-repeat;
    background-position: 50% 50%;
    background-size: cover;
    width: 32px;
    height: 32px;
}

[role="banner"] > button:before {
    content: "MENU";
    font-size: 1.1em;
    position: absolute;
    top: 90%;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
}

[role="banner"] nav {
    display: none;
    position: absolute;
    right: 0;
    top: 100%;
    z-index: 300;
    background-color: #e9e9e9;
    padding: 15px;
    box-shadow: -1px 1px 6px rgba(0, 0, 0, 0.5);
    width: 100%;
}

[role="banner"] nav.nav-opened {
    display: block;
}

[role="banner"] nav ul {
    list-style-type: none;
    text-align: left;
}

[role="banner"] nav > ul > li:nth-child(2) {
    margin-left: 40%;
}

[role="banner"] nav li {
    color: #111;
}

[role="banner"] nav li + li {
    margin-top: 20px;
}

[role="banner"] nav ul li a {
    text-transform: uppercase;
    font-weight: bold;
    padding: 0 13px;
}

[role="banner"] nav ul li:hover > a, [role="banner"] nav ul li a.selected {
    color: rgb(182, 54, 55);
}

[role="banner"] nav li:hover ul, [role="banner"] nav li.menu-visible .megamenu, [role="banner"] nav li:hover .megamenu {
	opacity: 1;
    top: 50px;
	z-index: 100;
}

[role="banner"] nav ul li:focus-within > a {
    color: rgb(182, 54, 55);
}

[role="banner"] nav li:focus-within ul, [role="banner"] nav li:focus-within .megamenu {
	opacity: 1;
    top: 50px;
	z-index: 100;
}

[role="banner"] nav .links .truck-showcase {
    display: none;
}

form[name="search-form"] > * {
    display: inline-block;
    vertical-align: middle;
}

form[name="search-form"] input {
    border: 1px solid #CCC;
    color: #888;
    padding: 6px 5px;
    width: 137px;
}

form[name="search-form"] button {
    height: 25px;
    width: 25px;
    border: 0;
    background-image: url('../images/btn-search.gif');
    background-position: 50% 50%;
    background-size: contain;
    background-repeat: no-repeat;
}


/* BODY ELEMENTS & CONTAINERS */
[role="main"] {
    position: relative;
    background-color: #FFFFFF;
    box-shadow: 0 2px 4px rgba(65, 65, 65, 0.35);
    padding-bottom: 20px;
    z-index: 0;
	 top: 11px;
}

[role="main"] header {
    text-align: center;
    padding: 1em 2em 0;
    margin-bottom: 1em;
}

[role="main"] header h1 {
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-weight: normal;
}

[role="main"] header h2 {
    color: #999;
    line-height: 1.3;
    font-weight: normal;
}

[role="main"] header h1 + h2 {
    margin-top: 20px;
}

[role="main"] section > a:first-child {
    display: inline-block;
    color: #FFF;
    font-weight: bold;
    font-size: 11px;
    margin: 0 auto;
    padding: 6px 15px;
    background-color: #1E7CBB;
    background-image: linear-gradient(to bottom, #439BD4 0%, #1E7CBB 100%);
}

[role="main"] header + section > a:hover {
    background-color: #b63637;
    background-image: none;
}

[role="main"] header + section > a + * {
    margin-top: 20px;
}

[role="main"] sup, [role="main"] sub {
    font-size: 50%;
}

header > *:empty:not(button) {
    display: none;
}


/* BILLBOARD & GALLERY TRAY */
.home-billboard {
 }

.home-billboard .owl-controls {
    position: absolute;
    bottom: 10px;
    left: 20px;
}

.home-billboard .owl-controls .owl-dot {
    display: inline-block;
    vertical-align: middle;
}

.home-billboard .owl-controls .owl-dot + .owl-dot {
    margin-left: 5px;
}

.home-billboard .owl-controls .owl-dot span {
    background: #f1f1f1;
    border-top: 1px solid #999;
    border-left: 1px solid #999;
    border-right: 1px solid #d1d1d1;
    border-bottom: 1px solid #d1d1d1;
    display: block;
    height: 10px;
    width: 10px;
}

.home-billboard .owl-controls .owl-dot.active span {
    background: #1C7FBA;
}

.home-billboard + .gallery-tray, .about-us .gallery-tray {
    position: relative;
    padding: 15px 20px 5px 20px;
    border-top: 6px solid #adadad;
    margin-top: -3px;
}

.home-billboard + .gallery-tray .gallery-wrapper {
    width: 85%;
    margin: 0 auto;
}

.home-billboard + .gallery-tray .owl-item {
    text-align: center;
    background: url('../images/chooseTruck-vertRule.png') no-repeat 0 0;
}

.home-billboard + .gallery-tray .owl-prev, .home-billboard + .gallery-tray .owl-next, .about-us .gallery-tray .owl-prev, .about-us .gallery-tray .owl-next {
    font-family: 'Quicksand', arial, helvetica, sans-serif;
    font-weight: bold;
    font-size: 42px;
    color: #adadad;
    padding: 2px 8px;
    text-decoration: none;
    text-transform: uppercase;
    vertical-align: middle;
    cursor: pointer;
}

.home-billboard + .gallery-tray .owl-prev, .home-billboard + .gallery-tray .owl-next, .about-us .gallery-tray .owl-prev, .about-us .gallery-tray .owl-next {
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

.home-billboard + .gallery-tray .owl-prev, .about-us .gallery-tray .owl-prev {
    left: 3%;
}

.home-billboard + .gallery-tray .owl-next, .about-us .gallery-tray .owl-next {
    right: 3%;
}

.home-billboard + .gallery-tray .gallery-carousel, .about-us .gallery-tray .gallery-carousel {
    list-style-type: none;
}

.home-billboard + .gallery-tray .gallery-carousel a {
    padding: 0 15%;
}

.home-billboard + .gallery-tray .gallery-carousel a, .about-us .gallery-tray .gallery-carousel a {
    color: #111111;
    display: block;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-size: 13px;
    margin: 0 auto;
    width: 82%;
}

.home-billboard + .gallery-tray .gallery-carousel a:hover {
    background: url('../images/chooseTruck-glow.png') no-repeat center;
    background-size: contain;
    color: #B63637;
}

.about-us .gallery-tray .gallery-wrapper {
    width: 91%;
    margin: 0 auto;
}

.about-us .gallery-tray .gallery-carousel a {
    padding: 0 6.8%;
}

.subpage-billboard {
    background-position: 0 0;
    background-size: cover;
    position: relative;
}

.subpage-billboard-content {
    max-width: 100%;
    min-height: 400px;
    padding: 50px 25px 25px 25px;
    width: 350px;
}

.subpage-billboard-content.wysiwyg {
 }


.subpage-billboard h1 {
    color: #000000;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    text-transform: uppercase;
    font-size: 5em;
    font-weight: 700;
    line-height: 1.2em;
    padding-left: 40px;
}

.subpage-billboard h4 {
    color: #000000;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-size: 2em;
    font-weight: 700;
    margin: 0.5em 0 1em 0;
}

.subpage-billboard .breadcrumbs {
    border-bottom: 2px solid #c9c7c8;
    list-style: none;
    margin-bottom: 1.5em;
    padding-bottom: 1.5em;
    padding-left: 40px;
    text-transform: uppercase;
}

.subpage-billboard .breadcrumbs li {
    display: inline-block;
}

.subpage-billboard .breadcrumbs li:not(:first-child)::before {
    content: "/";
    display: inline-block;
    margin: 0 0.25em;
}

.subpage-billboard .breadcrumbs li:last-child a {
    color: #5e5e5e;
}

.subpage-billboard .breadcrumbs a {
    color: #999999;
}


/* 3 Up Promo Boxes */
.promo-boxes {
    padding: 0 20px;
}

.promo-boxes:last-child {
    margin-bottom: 0;
}

.promo-boxes + div {
    display: none;
}

.promo-boxes article {
}

.promo-boxes article div {
    position: relative;
    display: block;
    vertical-align: top;
}

.promo-boxes article div + div {
    text-align: left;
}

.promo-boxes img {
    height: 100%;
}

.promo-boxes h3 {
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-size: 20px;
    font-weight: normal;
    color: #1C7FBA;
    margin: 0.5em 0;
}

.promo-boxes p {
    font-size: 14px;
    margin: 5px 0;
    line-height: 1.4;
}

.promo-boxes article + article {
    margin-top: 0;
}

.promo-boxes article:not(.mobile-hide) + article {
    padding-top: 15px;
    padding-bottom: 15px;
}

.promo-boxes:not(:first-child) article:first-child {
    padding-top: 15px;
    padding-bottom: 15px;
}

.promo-boxes article a {
    font-weight: 400;
}

.promo-boxes article a.blue-button, .promo-boxes article a.gray-button, .promo-boxes article a.button.ctaSub {
    display: inline-block;
    margin: 1em 0;
}

/*.promo-boxes article a.blue-button::before, .promo-boxes article a.button.ctaSub::before {
    content: "\00bb";
    margin-right: 0.25em;
}*/

.billboard + .promo-boxes {
    background: linear-gradient(to bottom, rgba(159, 160, 162, 0.32) 0%, transparent 100%);
    padding: 0;
    margin-top: 0;
}

div + .promo-boxes {
    margin-top: 50px;
}


/* Testimonial Panel */
.testimonial-panel {
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 465px;
    width: 100%;
}

.testimonial-panel a:link, .testimonial-panel a:visited {
    background-color: #3e8ec4;
    background-image: linear-gradient(to bottom, #439BD4 0%, #1E7CBB 100%);
    color: #ffffff;
    display: inline-block;
    font-size: 15px;
    font-weight: 400;
    line-height: 1.5em;
    padding: 0.625em 1em;
}

.testimonial-panel a:hover, .testimonial-panel a:focus, .testimonial-panel a:active {
    background-color: #b63637;
    background-image: none;
}

/*.testimonial-panel a::before {
    content: "\00bb";
    margin-right: 0.5em;
}*/

.testimonial-panel article {
    background-color: rgba(255, 255, 255, 0.9);
    border-top: 5px solid #bd3b3c;
    box-shadow: -6.553px 4.589px 6.44px 0.56px rgba(0, 0, 0, 0.10);
    margin: 40px 35px;
    padding: 30px 25px;
    position: relative;
    width: 350px;
}

.testimonial-panel .quote {
    color: #111111;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-size: 26px;
    font-weight: 400;
    line-height: 1.4em;
    margin-bottom: 0.5em;
    margin-top: 0;
}

.testimonial-panel .quote::before {
    content: "\201C";
    left: 13px;
    position: absolute;
}

.testimonial-panel .quote::after {
    content: "\201D";
}

.testimonial-panel .quote-credit {
    color: #111111;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-size: 18px;
    font-weight: 400;
}


/* Locate Dealer Panel - normal & premierecare */
.locate-dealer {
    background-color: #b63637;
    background-image: url("../images/locator-icon-large.png");
    background-position: calc(10% - 11px) 10px;
    background-repeat: no-repeat;
    border-top: 1px solid #ffffff;
    box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, 0.26), inset 0px 3px 7px 0px rgba(20, 29, 63, 0.18);
    min-height: 135px;
    position: relative;
}

.locate-dealer:after {
    background-image: url("../images/triangle-down-red.png");
    background-repeat: no-repeat;
    bottom: -23px;
    height: 23px;
    left: calc(10% - 5px);
    position: absolute;
    width: 41px;
    z-index: 0;
}

.locate-dealer article {
    margin: 1.5em 0;
    padding-left: 170px;
    width: 100%;
}

.locate-dealer h2 {
    color: #ffffff;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-size: 36px;
    font-weight: 400;
    letter-spacing: 0.05em;
}

.locate-dealer p {
    color: #ffffff;
    font-size: 22px;
    letter-spacing: 0.025em;
    line-height: 1.4em;
    margin: 0.5em 0;
}

.locate-dealer a:link, .locate-dealer a:visited {
    background-color: #b5b5b5;
    color: #ffffff;
    display: block;
    font-size: 18px;
    margin: 1em 0;
    padding: 0.5em 1em;
    max-width: 200px;
}

.locate-dealer a:hover, .locate-dealer a:focus, .locate-dealer a:active {
    background-color: #ffffff;
    color: #b63637;
}

.locate-dealer.premierecare {
    background-color: #000000;
    background-image: url("../images/locator-icon-large-gold.png");
}

.locate-dealer.premierecare:after {
    background-image: url("../images/triangle-down-black.png");
}

.locate-dealer.premierecare a:link, .locate-dealer.premierecare a:visited {
    background-color: #be8f3c;
}

.locate-dealer.premierecare a:hover, .locate-dealer.premierecare a:focus, .locate-dealer.premierecare a:active {
    background-color: #b63637;
    color: #ffffff;
}
/* Special case for location on bottom of home page */
.locate-dealer.premierecare:last-child::after {
    background-image: none;
}
.locate-dealer.premierecare:last-child article {
    margin-bottom: -20px;
}

/* Single Promo Boxes */
.single-promo-a {
    margin: 30px 0;
}

.single-promo-a article {
    padding: 15px 27px 15px 27px;
}

.single-promo-a .left {
    width: 100%;
    float: none;
}

.single-promo-a .right {
    width: 100%;
    float: none;
    margin-top: 15px;
}

.single-promo-a h2 {
    color: #000000;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-size: 36px;
    font-weight: 400;
}

.single-promo-a p {
    color: #000000;
    font-size: 18px;
    line-height: 1.4em;
    margin: 1em 0;
}

.single-promo-a a:link, .single-promo-a a:visited {
    color: #b63637;
    font-weight: 700;
}

.single-promo-a a:hover, .single-promo-a a:focus, .single-promo-a a:active {
    color: #111111;
}

.single-promo-b {
    background-position: 0 62.5%;
    background-repeat: no-repeat;
}

.single-promo-b article {
    padding: 100px 5% 75px 50%;
}

.single-promo-b h2 {
    color: #000000;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-size: 36px;
    font-weight: 400;
    margin-bottom: 1em;
}

.single-promo-b p {
    color: #000000;
    font-size: 18px;
    line-height: 1.4em;
    margin: 1em 0;
}

.single-promo-b a:link, .single-promo-b a:visited {
    color: #b63637;
}

.single-promo-b a:hover, .single-promo-b a:focus, .single-promo-b a:active {
    color: #111111;
}

.single-promo-b a.blue-button:link, .single-promo-b a.blue-button:visited {
    background-color: #3e8ec4;
    color: #ffffff;
    display: inline-block;
    font-size: 20px;
    padding: 0.625em 2em;
}

.single-promo-b a.blue-button:hover, .single-promo-b a.blue-button:focus, .single-promo-b a.blue-button:active {
    background-color: #b63637;
}

.single-promo-bottom {
    background-position: 0 100%;
    background-repeat: no-repeat;
    background-size: 100%;
    min-height: 575px;
}

.single-promo-bottom:last-child {
    margin-bottom: -20px;
}

.single-promo-bottom article {
    padding: 35px 55px;
}

.single-promo-bottom article > img {
    float: right;
    margin-left: 2em;
}

.single-promo-bottom h2 {
    color: #000000;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-size: 36px;
    font-weight: 400;
}

.single-promo-bottom p {
    color: #000000;
    font-size: 18px;
    line-height: 1.4em;
    margin: 1em 0;
}

.single-promo-bottom a:link, .single-promo-bottom a:visited {
    color: #b63637;
    font-weight: 700;
}

.single-promo-bottom a:hover, .single-promo-bottom a:focus, .single-promo-bottom a:active {
    color: #111111;
}

.single-promo-bottom a.blue-button:link, .single-promo-bottom a.blue-button:visited {
    background-color: #3E8EC4;
    color: #ffffff;
    display: inline-block;
    font-size: 20px;
    font-weight: 400;
    padding: 0.625em 2em;
}

.single-promo-bottom a.blue-button:hover, .single-promo-bottom a.blue-button:focus, .single-promo-bottom a.blue-button:active {
    color: #ffffff;
    background-color: #B63637;
}

.single-promo-bottom.shorter {
    min-height: 400px;
}

.single-promo-bottom.shorter article {
    max-width: 60%;
}

/* Video Embed (For RTE) */
.embedded-video {
    text-align: center;
}

.embedded-video .yt-embed {
    position: relative;
	display: inline-block;
}

.embedded-video .yt-embed:before {
    -webkit-transform: translateX(-50%) translateY(-50%);
    content: url("../images/video-play-icon.png");
    height: 190px;
    left: 50%;
    pointer-events: none;
    position: absolute;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    width: 190px;
}
.embedded-video a.yt-embed img {
    margin: 0;
}


.video-block {
    padding: 15px 27px;
}

.video-block .video {
    position: relative;
}

.video-block .video::before {
    content: url("../images/play-button.png");
    left: 50%;
    pointer-events: none;
    position: absolute;
    top: 50%;
    -ms-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}

.video-block .video a {
    max-width: 100%;
}

.video-block .caption h4 {
    color: #bbbbbb;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-size: 2em;
    font-weight: 400;
    letter-spacing: 0.04em;
    margin: 0.5em 0;
}

/* Default to 16:9 aspect ratio */
.video-wrapper {
    height: 0; 
    overflow: hidden; 
    padding: 0 0 56.25% 0; 
    position: relative; 
}

.video-wrapper.ratio2-1 {
    padding: 0 0 50% 0; 
}

.video-wrapper.ratio4-3 {
    padding: 0 0 75% 0; 
}

.video-wrapper .yt-video {
    display: block !important;
}

.video-wrapper iframe {
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

.video-wrapper .video-js, .video-wrapper iframe {
    height: 100% !important; 
    left: 0; 
    position: absolute; 
    top: 0; 
    width: 100% !important; 
}

.video-wrapper .video-js .vjs-big-play-button {
    top: 50%;
    left: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}

.video-wrapper .video-js.vjs-ended .vjs-poster {
    display: block;
}




/* World's Best Magazine Panel */
.worlds-best {
    background-color: #939699;
    box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, 0.26);
    color: #ffffff;
    margin-bottom: 4em;
}
.worlds-best:last-child {
    margin-bottom: -20px;
}

.worlds-best article {
    margin: 1.5em 0 0 0;
    padding-left: 200px;
    position: relative;
    width: 100%;
}

.worlds-best article > img {
    left: 20px;
    position: absolute;
    top: -15px;
    max-width: 160px;
}

.worlds-best h2 {
    color: #ffffff;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-size: 36px;
    font-weight: 400;
    margin: 0.5em 0 0.25em 0;
}

.worlds-best p {
    color: #ffffff;
    font-size: 20px;
    letter-spacing: 0.025em;
    line-height: 1.4em;
    margin: 0.5em 0 1em 0;
}

.worlds-best a:link, .worlds-best a:visited {
    background-color: #3e8ec4;
    color: #ffffff;
    display: block;
    font-size: 18px;
    padding: 0.5em 1em;
    margin: 1em 0;
    max-width: 230px;
}

.worlds-best a:hover, .worlds-best a:focus, .worlds-best a:active {
    background-color: #B63637;
}

/* TRUCKS INDIVIDUAL */
.trucks-individual .truck-billboard > img:first-child {
    width: 100%;
}

.gallery-tray {
    background: #e9e9e9 url(../images/galleryBar-bkgrn.png) repeat-x;
    border: 1px solid #dfdfdf;
    border-width: 0 1px;
    font-size: 16px;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    margin: 0 auto;
    padding: 15px 20px 10px;
    margin-top: -3px;
}

.trucks-individual .gallery-wrapper {
    width: 100%;
    float: left;
}

.trucks-individual .gallery-wrapper img {
    border: 1px solid #a9a9a9;
}

.trucks-individual .gallery-wrapper img:hover {
    border-color: #b63637;
}

.gallery-cta {
    position: relative;
    left: 50%;
    display: inline-block;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    margin-top: 15px;
}

.gallery-cta a {
    float: left;
}

.gallery-cta .explore {
    background-image: url('../images/trucks-individual/overlay-exploreBtn.png');
    width: 50px;
    height: 30px;
    display: block;
    position: absolute;
}

.yt-video-mobile {
    display: inherit;
}

.yt-video {
    display: none !important;
}

.gallery-cta .yt-video-mobile {
    display: table-cell;
}

.gallery-cta .yt-video-mobile > * {
    display: block;
    margin: 0 auto;
    text-align: center;
}

.tooltip {
    position: relative;
}

.tooltip .tip {
    display: none;
    position: absolute;
    color: #333;
    font: italic 11px arial, helvetica, sans-serif;
    right: 0;
    bottom: -19px;
    white-space: nowrap;
    z-index: 100;
}

.tooltip:hover .tip {
    display: block;
}

.gallery-cta h3 {
    font-size: 16px;
    color: #1C7FBA;
    font-weight: normal;
}

.gallery-cta h3, .gallery-cta h3 + div {
    display: inline-block;
    vertical-align: top;
}

.gallery-cta h3 + div {
    margin-left: 5px;
}

.gallery-tray .header-text {
    position: relative;
    margin-top: 10px;
}

.gallery-tray .header-text h1 {
    font-size: 24px;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    color: #1C7FBA;
    font-weight: normal;
}

.gallery-tray .header-text p {
    font-size: 14px;
    font-family: Arial, Helvetica, sans-serif;
    color: inherit;
    line-height: 1.4;
}

.trucks-individual > a {
    position: relative;
    z-index: 100;
    padding: 6px 15px;
    color: #FFF;
    font-weight: bold;
    margin: 1em auto 0;
    text-decoration: none;
    display: table;
    background: #1E7CBB;
    background: linear-gradient(to bottom, #439bd4 0%, #1E7CBB 100%);
}


/* NEWS & NEWS ARTICLES */
.column {
    display: block;
    width: 100%;
    vertical-align: top;
    padding: 0 0 4% 0;
}

.column:not(:first-child) {
    padding: 4% 0;
}


/* News Releases Section */
.news-listing {
    display: table;
    width: 100%;
}

.news-listing .row, .news-detail .row {
    padding: 0 4%;
    width: 100%;
}

.news-listing .column:nth-child(1) {
    width: 100%;
}

.news-listing .column:nth-child(2) {
    width: 100%;
    border-top: 1px solid #cccccc;
}

.news-listing h2 {
    color: #111111;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    margin: 0 0 1em 0;
}

.news-listing h4 {
    color: #111111;
    font-size: 1.167em;
    font-weight: 600;
    margin-top: 1.33em;
    margin-bottom: 3px;
}

.news-listing p {
    margin-top: 0;
    margin-bottom: 1.25em;
    font-size: 1.167em;
    color: #111111;
}

.news-listing p.date {
    margin-bottom: 0.5em;
    font-size: 1em;
    color: #666666;
}

.news-detail .column:nth-child(1) {
    width: 100%;
    padding: 0;
}

.news-detail .column:nth-child(2) {
    width: 100%;
    border-top: 1px solid #cccccc;
}

.news-detail h2 {
    color: #1C7FBA;
    font-size: 26px;
    font-weight: bold;
    line-height: 1.2;
    padding-bottom: 15px;
}

.news-detail h3 {
    color: #111;
    font-style: italic;
    line-height: 1.2em;
    padding-bottom: 15px;
    font-size: 1.5em;
    font-weight: 400;
}

.news-detail h4 {
    color: #111111;
    font-size: 1.167em;
    font-weight: 600;
    margin-bottom: 3px;
}

.news-detail p {
    font-size: 14px;
    line-height: 1.5;
}

.news-detail .locationDate {
    font-weight: bold;
}

.news-detail img {
    max-width: 100%;
    height: auto !important;
}

.news-detail a:link, .news-detail a:visited {
    color: #B23539;
}

.news-detail a:hover, .news-detail a:focus, .news-detail a:active {
    color: #B23539;
}

.news-detail a.pdf {
    background: url("../images/icon-pdf.png") no-repeat;
    color: #111;
    display: block;
    line-height: 20px;
    padding-left: 25px;
    text-decoration: none;
    font-size: 11px;
}

.news-detail .backTop {
    color: #B23539;
    background: url("../images/icon-arrowUp.png") no-repeat 0 -2px;
    line-height: 16px;
    padding-left: 20px;
    text-decoration: none;
}

#downloadPDF, .share-wrapper {
    border-top: 1px solid #cccccc;
    padding: 0 0 1em 2em;
    width: 40%;
    float: right;
}

#downloadPDF {
    display: none;
}


/* Reusable Year/Month menu */
.year-menu {
    list-style: none;
    width: 100%;
    display: none;
}

.year-menu a:link, .year-menu a:visited {
    display: inline-block;
    width: 100%;
}

.year-menu a:hover, .year-menu a:focus, .year-menu a:active {
    background-color: #F1F1F1;
}

.year-menu ul {
    list-style: none;
    overflow: hidden;
    max-height: 0;
    transition: max-height 0.5s ease 0s, padding 0.5s ease 0s;
}

.year-menu li a:link, .year-menu li a:visited {
    color: #111111;
    font-size: 1.167em;
    font-weight: 600;
    padding: 5px 0 5px 5px;
}

.year-menu li a:hover, .year-menu li a:focus, .year-menu li a:active {
    color: #B23539;
}

.year-menu li.active ul {
    max-height: 400px;
    padding-bottom: 0.5em;
    padding-right: 1em;
}

.year-menu ul a:link, .year-menu ul a:visited {
    color: #666666;
    font-size: 1em;
    font-weight: 400;
    padding: 10px;
}

.year-menu ul a:hover, .year-menu ul a:focus, .year-menu ul a:active {
    color: #B23539;
}

.year-menu ul li {
    display: inline-block;
}

.year-menu-mobile {
    border: 0;
    background-color: #F0F0F0;
    font-size: 13px;
    margin-bottom: 1em;
}

.news-nav-title-mobile {
    display: block;
}


/* SITE MAP */
.sitemap {
    padding: 0 20px;
}

.sitemap ul {
    list-style-type: none;
    font-size: 18px;
    text-align: center;
}

.sitemap li {
    color: #111111;
}

.sitemap li + li {
    margin-top: 15px;
}

.sitemap ul ul {
    font-size: 1em;
}

.sitemap ul > li li {
    font-weight: normal;
    color: #868686;
}

.sitemap ul > li li + li {
    margin-top: 10px;
}


/* ABOUT US PAGE */
.hero-text-list {
    background-color: #B4B5B8;
    color: #111111;
    padding: 15px 20px;
}

.hero-text-list h1 {
    font-size: 20px;
}

.hero-text-list p {
    font-size: 1.167em;
    line-height: 1.5em;
    margin: 10px 0 0;
}

.about-us {
    margin-bottom: -20px;
}

.about-us .secondary-nav {
    position: static;
    right: auto;
    top: auto;
    z-index: 100;
    text-align: center;
    padding: 1em;
}

.about-us .secondary-nav > a {
    padding: 6px 15px;
}

.about-us .gallery-tray .owl-item {
    background: none;
}

.about-us .gallery-tray .gallery-carousel a {
    width: 100%;
    text-align: center;
}

.about-us .gallery-tray .gallery-carousel a:hover {
    background: none;
}

.about-us .threeColContainer {
    display: table;
    margin: 0 4%;
}

.about-us .row {
    padding-bottom: 3%;
    padding-left: 0;
    padding-right: 0;
}

.about-us .row:last-child .column:last-child {
    padding: 4% 0 2% 0;
}

.about-us .row:not(:last-child) {
    border-bottom: 3px solid #E6E6E6;
}

.about-us .column {
    padding: 0 0 2% 0;
}

.about-us .column:not(:first-child) {
    padding: 4% 0;
}

.about-us .column h4 {
    color: #1C7FBA;
    font: 30px/1.3 'Oswald', arial, helvetica, sans-serif;
    margin-bottom: 0;
    margin-top: 1em;
}

.about-us .column p {
    font-size: 1.167em;
    line-height: 1.5em;
    margin: 0;
}

.about-us .column img {
    max-width: 100%;
}


/* TRUCKS LISTING PAGE */
.truck-listing {
    position: relative;
    padding-bottom: 2em;
}

.sectionNav {
    display: none;
}

.sectionNav li {
    display: inline-block;
}

.sectionNav a, #subsectionNav a {
    cursor: pointer;
}

.sectionNav a:link, .sectionNav a:visited {
    color: #000000;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-size: 1.35em;
    font-weight: 400;
    padding-left: 3em;
}

.sectionNav a:hover, .sectionNav a:active {
    color: #b23539;
}

.sectionNav a.current {
    font-weight: 700;
    text-transform: uppercase;
    padding-left: 2em;
}

#subsectionNav a:link, #subsectionNav a:visited {
    color: #888;
}

#subsectionNav a:hover, #subsectionNav a:active {
    color: #b23539;
}


/* truck selector results */
.truckSelector_results {
    left: 0;
    margin: 0;
    min-height: 300px;
    overflow: auto;
    position: relative;
    padding: 0 35px;
}

.truckSelector_results ul {
    padding: 0;
}

.truckSelector_results li {
    border-top: 1px solid #e9e9e9;
    float: left;
    list-style: none;
    padding: 0 0 1em 2.2%}
.truckSelector_results h2 {
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-size: 2.5em;
    margin: 1em 0 0.5em 0;
    text-transform: uppercase;
}

.truckSelector_results h2 sup {
    top: -1em;
}

.truckSelector_results h3 {
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-size: 20px;
    line-height: 1.3;
    margin: 1em 0.5em 0 0.5em;
    position: relative;
}

.truckSelector_results h3 a {
    font-family: arial, helvetica, sans-serif;
    font-size: 0.625em;
    font-weight: 700;
    padding: 0 0.5em;
    text-transform: uppercase;
}

.truckSelector_results h3 a::after {
    content: "\203a";
    display: inline-block;
    margin-left: 0.25em;
}

.truckSelector_results h3 a:link, .truckSelector_results h3 a:visited {
    color: #7f7f7f;
}

.truckSelector_results h3 a:hover, .truckSelector_results h3 a:active {
    color: #b23539;
}

.truckSelector_results h3 img {
    padding-right: 3px;
}

.truckSelector_results p {
    font-size: 12px;
    margin: 0;
    padding: 0;
    text-transform: uppercase;
}

.truckSelector_results a {
    text-decoration: none;
    text-transform: none;
    line-height: 1.5;
    color: #B63637;
    margin-top: 3px;
    display: inline;
}

.truckSelector_results a:hover {
    color: #111;
}

.noResults {
    display: none;
    text-align: center;
}

.noResults p {
    text-transform: none;
    margin: 0 0 1em 0;
    font-size: 1em;
}

.mobileTruckNav {
    text-align: center;
    padding: 20px 0;
}

.mobileTruckNav select {
    font-size: 2em;
    border: 1px solid #E1E1E1;
    color: #000;
    background-color: #FFF;
}


/* INDIVIDUAL TRUCKS PAGE */
.truck-features {
    list-style-type: none;
    margin-top: 30px;
    padding: 0 10px;
    text-align: center;
}

.truck-features li {
    position: relative;
}

.truck-features > *, .truck-features li > * {
    display: block;
}

.truck-features li + li {
    margin-top: 60px;
}

.truck-features h3 {
    font-family: 'Oswald', arial, helvetica, sans-serif;
    color: #1C7FBA;
    font-size: 1.6em;
    font-weight: normal;
}

.truck-features a {
    margin: 0 auto;
    color: #B63637;
}

.truck-features .yt-video-mobile {
    display: inline;
}

.truck-features .yt-video {
    display: none;
}

.careers #promoBoxes .yt-video {
    display: none;
}

.truck-features a:hover {
    	color: #000;
}
.truck-features .content > div {
    font-size: 14px;
    line-height: 21px;
}

.truck-features .content a + a {
    margin-top: 15px;
}

.truck-features .content + img {
    margin-top: 20px;
    width: 60%;
    max-width: 190px;
    margin-left: auto;
    margin-right: auto;
}


/* truck offer boxes */
.truck-offer-boxes {
    margin: 40px auto 0;
    display: block;
    text-align: center;
    border-top: 1px solid #dfdfdf;
    padding: 30px 20px;
    list-style-type: none;
}

.truck-offer-boxes li ~ li {
    margin-top: 50px;
    border-top: 1px solid #e9e9e9;
    padding-top: 50px;
}

.truck-offer-boxes h3 {
    color: #111;
    font-size: 20px;
    font-weight: normal;
    font-family: 'Oswald', arial, helvetica, sans-serif;
}

.truck-offer-boxes > li + div {
    display: none;
}

.truck-offer-boxes p {
    font-size: 14px;
}

.truck-offer-boxes h3 + p {
    margin-top: 8px;
}

.truck-offer-boxes a {
    position: relative;
    color: #FFF;
    font-weight: bold;
    margin: 0 auto;
    padding: 9px 18px;
    background: linear-gradient(to bottom, #c2c2c2 0%, #a9a9a9 100%);
    background-color: #a9a9a9;
}

.truck-offer-boxes a:hover {
    background: #B63637;
}

.truck-offer-boxes a.yt-video-mobile {
    display: inline-block;
}

.truck-offer-boxes a.yt-video {
    display: none;
}

.cta-tray {
    list-style-type: none;
    text-align: center;
    border-top: 4px solid #dfdfdf;
    margin: 0 30px;
    padding-top: 20px;
}

.cta-tray li {
    display: block;
    vertical-align: middle;
    width: 185px;
    margin: 0 auto;
}

.cta-tray li + li {
    margin-top: 20px;
}

.cta-tray li a {
    position: relative;
    display: inline-block;
    color: #FFF;
    font-weight: bold;
    font-size: 12px;
    width: 100%;
    margin: 0 auto;
    padding: 10px 20px 7px;
    background-color: #1E7CBB;
    background-image: linear-gradient(to bottom, #439BD4 0%, #1E7CBB 100%);
}

.cta-tray li a:hover {
    background-color: #b63637;
    background-image: none;
}

span.download {
    position: relative;
    display: inline-block;
    vertical-align: top;
    background: url(../images/icon-download.png) no-repeat;
    width: 20px;
    height: 20px;
    z-index: 200;
    top: 2px;
    left: 0;
    margin-right: 4px;
}

span.request {
    background: url(../images/icon-envelope-whtX.png) no-repeat;
    position: relative;
    display: inline-block;
    vertical-align: top;
    width: 20px;
    height: 20px;
    z-index: 200;
    top: 0px;
    left: -3px;
}


/* FORMS */
.contour {
    padding: 0;
}

.contour .contourPage {
    padding-top: 20px;
}

.contour .contourPageName {
    display: none;
}

.contour label.fieldLabel {
    float: left;
    font-weight: bold;
    padding-right: 15px;
    padding-top: 8px;
    text-align: right;
    width: 30%;
}

.contour label.fieldLabel + div {
    float: left;
    width: 70%;
}

.contour .contourField {
    border-top: 1px dotted #CCCCCC;
    padding: 12px 10px;
}

.contour .contourField::after {
    content: " ";
    display: table;
    clear: both;
}

.contour .contourField:first-child {
    border-top: none;
}

.contour .contourField.checkbox {
    border-top: none;
    padding: 0 0 12px 0;
}

.contour .contourField.checkbox span.help-block {
    float: right;
    width: 67%;
    padding-top: 2px;
}

.contour .contourField.checkbox span.help-block + div {
    float: left;
    width: 3%;
}

.contour .contourField.singlechoice .radiobuttonlist label {
    margin-left: 5px;
    margin-right: 10px;
}

.contour .contourField.singlechoice .radiobuttonlist br {
    display: none;
}

.contour .contourField.fileupload {
    position: relative;
    min-height: 75px;
}

.contour .contourField.fileupload span.help-block {
    position: relative;
    top: 28px;
    color: #CCCCCC;
}

.contour .contourField.fileupload span.help-block + div {
    position: absolute;
    top: 12px;
    left: 30%;
}

.contour .contourField.selectedlocations {
    border-top: none;
    padding-top: 0;
    padding-bottom: 0;
}

.contour .contourField.receiveemailupdatesfromkenworth label {
    visibility: hidden;
    height: 1em;
}

.contour #locations ul {
    list-style: none;
    margin-left: 30%;
}

.contour #locations ul::after {
    content: " ";
    display: table;
    clear: both;
}

.contour #locations label {
    float: left;
    width: 100%;
    font-weight: normal;
    text-align: left;
    line-height: 1.6em;
    margin: 0 3px;
}

.contour #locations label span.town {
    display: block;
    float: left;
    width: 100%;
    padding: 0;
    font-size: 15px;
    font-weight: bold;
    text-align: left;
    margin-top: 0;
}

.contour #locations li {
    border: none;
    float: left;
}

.contour #locations li:nth-child(odd) {
    width: 5%;
}

.contour #locations li:nth-child(even) {
    width: 95%;
}

.contour label.inline {
    font-weight: bold;
    padding-right: 0;
    padding-top: 8px;
    width: 100%;
    text-align: left;
}

.contour label.inline + div {
    width: 100%;
}

.contour input[type="text"], .contour input[type="password"], .contour input.ui-autocomplete-input, .contour textarea {
    border: 1px solid #ccc;
    color: #666;
    font: 12px/1 arial, helvetica, sans-serif;
    padding: 5px 8px;
    width: 100%;
    max-width: 300px;
}

.contour textarea {
    height: 140px;
}

.contour .contourIndicator, .contour label em {
    color: #C00;
    font-weight: bold;
}

.contour .field-validation-error {
    color: #B63637;
    display: block;
    padding-top: 5px;
}

.contour .contourNavigation {
    text-align: center;
    padding-top: 15px;
    padding-bottom: 5px;
}

.contour .contourNavigation input[type="submit"] {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background: #1F7DBC;
    background: linear-gradient(to bottom, #439bd4 0%, #1E7CBB 100%);
    border: none;
    color: #FFF;
    cursor: pointer;
    font-size: 13px;
    padding: 9px 18px;
}

.contour .contourNavigation input[type="submit"]:hover {
    background: #B63637;
}

.contour .contourField.selectatruck .radiobuttonlist::after {
    content: " ";
    display: table;
    clear: both;
}

.contour .contourField.selectatruck .imageGroup {
    width: 50%;
    float: left;
}

.contour .contourField.selectatruck img {
    width: 60px;
    margin-right: 3px;
}

.contour .contourField.selectatruck label {
    padding-right: 15px;
    padding-top: 8px;
}

.contour .contourField.selectatruck input[type="radio"] {
    margin: 3px;
}


/* DEALERS PAGE */
.dealers {
    overflow: auto;
    padding: 0;
}

#findDealers {
    border: 1px solid #dfdfdf;
    height: auto;
    overflow: hidden;
}

#findMap {
    display: none;
}

#findUI {
    position: relative;
    z-index: 200;
    float: none;
    width: 100%;
    height: 100%;
}

#findSearch {
    background: #e9e9e9;
    font-size: 11px;
    padding: 10px;
}

#findSearch > div {
    text-align: center;
}

#findSearchBox {
    border: 1px solid #CCC;
    color: #888;
    font: 12px/1.3 arial, helvetica, sans-serif;
    padding: 6px;
    margin-bottom: 8px;
    width: 60%;
}

#findSearchBox.alert {
    background: #FFF url(../images/icon-alert.png) no-repeat 6px center;
    border: 1px solid #b23539;
    padding-left: 28px;
}

#findSearch .button {
    margin-left: 5px;
    padding: 7px 12px;
    color: #ffffff;
    font-weight: bold;
}

#findSearch label {
    margin-right: 12px;
    margin-left: 2px;
}

#findResults {
    height: auto;
    padding: 15px;
    overflow: auto;
    background-color: white;
}

.search-premier article > * {
    display: inline-block;
    vertical-align: top;
}

.search-premier article > label {
    width: 70%;
}

.search-premier article + a {
    color: #B63637;
    margin-top: 20px;
    display: inline-block;
}

.search-premier article + a:hover {
    color: inherit;
}

ul#findLocations {
    margin: 0;
}

a.dealerPin {
    color: #FFF;
    display: block;
    float: left;
    font-weight: bold;
    padding: 3px 0;
    margin-right: 6px;
    text-align: center;
    text-decoration: none;
    width: 24px;
}

.dealerPin {
    background: #b23539;
    /* Old browsers */ /* FF3.6+ */ /* Chrome, Safari4+ */ /* Chrome10+, Safari5.1+ */ /* Opera 11.10+ */ /* IE10+ */
    background: linear-gradient(to bottom, #d83036 0%, #b23539 100%);
    /* W3C */}
#dealerInfo {
    line-height: 1.3;
}

.dealerInfo {
    line-height: 1.3;
    margin-left: 35px;
}

.dealerInfo.directionsPopup {
    margin-left: 0;
}

.dealerInfo h3 {
    color: #111;
    font-weight: bold;
}

#findLocations li {
    border-top: 1px solid #e9e9e9;
    list-style: none;
    padding-top: 8px;
}

#findLocations li:first-child {
    border: 0;
    padding-top: 0;
}

#findLocations h3 {
    color: #1c7fba;
    font: 18px/1.5 'Oswald', arial, helvetica, sans-serif;
}

#findLocations h4 {
    color: #333;
    font-weight: bold;
    margin: 0.25em 0 0 0;
}

#findCTAs {
    display: block;
    margin-bottom: 15px;
    margin-top: 10px;
}

#findCTAs .button {
    font-size: 11px;
    padding: 6px 10px;
    color: #ffffff;
    font-weight: bold;
}

#findDirections {
    background: #e9e9e9;
    border: 1px solid #888;
    padding: 5px 8px;
    margin-bottom: 15px;
}

#findDirectionsBox {
    border: 1px solid #CCC;
    color: #888;
    font: 11px/1.3 arial, helvetica, sans-serif;
    padding: 2px 4px;
    width: 155px;
}

#findDirectionsBox.alert {
    background: #FFF url("../images/icon-alert.png") no-repeat 6px center;
    border: 1px solid #b23539;
    padding-left: 28px;
    padding-top: 3px;
    padding-bottom: 3px;
    width: 130px;
}

#findDirections .button {
    margin-left: 5px;
    padding: 4px 10px;
    color: #ffffff;
    font-weight: bold;
}

#findDirections span {
    display: block;
    font-size: 11px;
    padding-top: 3px;
}

#findResults h5 {
    font-size: 11px;
    margin-bottom: 15px;
}

.app-badges dt {
    border-top: 1px solid #e1e1e1;
    color: #1c7fba;
    font: 14px/1.4 'Oswald', arial, helvetica, sans-serif;
    margin-bottom: 12px;
    padding-top: 15px;
    text-align: center;
}

.app-badges dd {
    text-align: center;
    margin: 0;
}

#findRoute {
    border-top: 1px solid #e6e6e6;
    margin: 20px 0;
}

#findRoute li {
    border-bottom: 1px solid #e6e6e6;
    color: #111;
    font-weight: bold;
    list-style: decimal inside;
    padding: 10px 0;
}

#findRoute li span {
    color: #666;
    font-weight: normal;
    padding-left: 10px;
}

/* GENERIC CONTENT PAGE / ENGINES PAGE */
[role="main"] .content-page > a:first-child {
    position: relative;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    margin: 15px 0;
    font-size: 12px;
}

[role="main"] .content-page > a:first-child:hover {
    background-color: #b63637;
    background-image: none;
}

.content-billboard img {
    width: 100%;
}

.body-content {
    font-size: 14px;
    line-height: 1.6;
    margin: 10px 55px 0;
    padding-bottom: 30px;
    border-bottom: 1px dotted #D4CDCD;
}

.body-content h1 {
    font-family: 'Oswald', arial, helvetica, sans-serif;
    color: #1C7FBA;
    font-size: 1.6em;
    font-weight: normal;
}

.body-content img, .body-content .premier-care-wording {
    margin-top: 30px;
}

.body-content .premier-care-wording {
    display: inline-block;
    vertical-align: text-bottom;
    margin-left: 10px;
}

.body-content .premier-care-wording h2 {
    color: #E23940;
    font-family: 'Oswald', arial, helvetica, sans-serif;
}

.body-content .premier-care-wording p {
    margin: 0;
}

.content-features {
    list-style-type: none;
    margin-top: 30px;
    padding: 0 70px;
    text-align: center;
}

.content-features li {
    position: relative;
}

.content-features > *, .content-features li > * {
    display: block;
}

.content-features li + li {
    margin-top: 60px;
}

.content-features h3 {
    font-family: 'Oswald', arial, helvetica, sans-serif;
    color: #1C7FBA;
    font-size: 1.6em;
    font-weight: normal;
}

/*.content-features a {
    display: inline;
    margin: 0 auto;
    color: #B63637;
}

.content-features a:hover {
    color: #000;
}*/

.content-features .content > div {
    font-size: 14px;
    line-height: 21px;
}

.content-features .content a + a {
    top: 10px;
}

.content-features .content + img {
    margin-top: 30px;
    margin-left: auto;
    margin-right: auto;
}

.content-features .blue-button, .content-features .gray-button {
    background-color: #1E7CBB;
    background-image: linear-gradient(to bottom, #439BD4 0%, #1E7CBB 100%);
    color: #FFF;
    display: inline-block;
    float: left;
    font-size: 12px;
    font-weight: bold;
    margin: 10px 16px 0 0;
    min-width: 180px;
    padding: 9px 5px;
    position: relative;
    text-align: center;
    width: auto;
}

.content-features .blue-button:hover, .content-features .gray-button:hover {
    background-color: #b63637;
    background-image: none;
    color: #FFF;
}

.content-features .gray-button {
    background-color: #a9a9a9;
    background-image: linear-gradient(to bottom, #c2c2c2 0%, #a9a9a9 100%);
}



/* LEADERSHIP & AWARDS PAGE */
.lead-and-awards {
    padding: 0 20px;
    position: relative;
}

.lead-and-awards .billboard {
    position: relative;
}

.lead-and-awards > a:first-child {
    left: 50%;
    position: relative;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
}

.lead-and-awards .billboard > * {
    text-align: center;
}

.lead-and-awards .billboard article h2 {
    position: relative;
    z-index: 100;
    color: #111;
    font: 16px 'Oswald', arial, helvetica, sans-serif;
}

.lead-and-awards .billboard article p {
    position: relative;
    z-index: 100;
    margin: 15px auto 0;
    line-height: 1.4;
    width: 90%;
}

.lead-and-awards .billboard > img {
    position: relative;
    bottom: 22px;
    width: 100%;
}

.lead-and-awards .hero-anchors {
    margin: 25px auto 0;
    position: relative;
    bottom: 15px;
    z-index: 10;
    list-style-type: none;
    text-align: center;
}

.lead-and-awards .hero-anchors > * {
    position: relative;
    display: block;
    margin: 0 auto;
    font-size: 12px;
}

.lead-and-awards .hero-anchors > * + * {
    margin-top: 30px;
}

.hero-anchors img {
    width: 120px;
    border: 1px solid #d6d6d6;
}

.award-features + .award-features {
    border-top: 3px solid #e6e6e6;
    margin-top: 20px;
    padding-top: 20px;
}

.award-features img {
    width: 100%;
}

.award-features h4 {
    font-size: 18px;
    color: #111111;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-weight: normal;
    margin: 0;
    line-height: 1.3;
}

.award-features p {
    line-height: 1.4;
    font-size: 13px;
    color: #999999;
}

.award-features h6 {
    font-size: 12px;
    margin: 0;
}

.award-features .col-1 {
    text-align: center;
}

.award-features .col-2 {
    margin: 0 auto;
    width: 55%;
}

.award-features .col-3 {
    margin: 20px auto 0;
    width: 70%;
    height: 258px;
}

.lead-and-awards .award-features .list-wrap {
    height: 100%;
    padding-right: 20px;
    overflow: auto;
}

.lead-and-awards .award-features .list-wrap dt {
    margin-top: 15px;
}

.lead-and-awards .award-features .list-wrap dd {
    margin-top: 5px;
    margin-left: 15px;
    color: #111111;
}

/* CAREERS PAGE */
.careers .half, .careers .third, .careers .two-thirds {
    width: 100%;
}

.careers .border-right {
    border-right: none;
}

.careers .border-dot {
    border: 1px dotted #dfdfdf;
}

.careers .txt-center {
    text-align: center;
}

.careers .wysiwyg-block {
    overflow: auto;
    margin: 0;
    width: 100%;
    padding: 4%;
}

.careers.school .wysiwyg-block {
    border-bottom: none;
}

.careers .wysiwyg-block h1 {
    color: #1c7fba;
    font: 28px/1.35 'Oswald', arial, helvetica, sans-serif;
    margin-bottom: 4%;
}

.careers .wysiwyg-block h2 {
    color: #1c7fba;
    font: 22px/1.25 'Oswald', arial, helvetica, sans-serif;
    margin-bottom: 4%;
    margin-top: 12px;
}

.careers .wysiwyg-block h3 {
    color: #111;
    font: 18px/1.125  'Oswald', arial, helvetica, sans-serif;
    margin: 4% 0;
}

.careers .wysiwyg-block h3:first-child {
    margin-top: 0;
}

.careers .wysiwyg img {
    max-width: 100%;
}

.careers .wysiwyg-block p a {
    font-size: 14px;
    text-decoration: none;
    text-transform: none;
}

.careers ul.school, .careers ul.recruitment {
    overflow: auto;
    width: 100%;
    margin: 0;
    list-style: none;
}

.careers ul.recruitment a {
    color: #B63637;
}

.careers ul.school li {
    float: left;
    padding: 4%;
    box-sizing: border-box;
}

.careers ul.recruitment li {
    float: left;
    box-sizing: border-box;
}

.careers ul.recruitment ul.list {
    line-height: 3em;
    padding: 0 30px;
    list-style: none;
}

.careers ul.recruitment ul.list li {
    text-align: center;
    width: 100%;
}

.careers ul.recruitment li h2 {
    padding: 0;
}

.careers li.two-thirds p {
    margin-right: 0;
    line-height: 1.5em;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
}

.careers ul#promoBoxes {
    margin: 0;
	padding-left: 20px;
    overflow: auto;
}

.careers #promoBoxes li {
    float: left;
    list-style: none;
    margin: 0% 4% 4% 2%;
    min-height: 14em;
    padding-left: 2%;
    padding-top: 4%;
    width: 96%;
}

.careers #promoBoxes li:first-child {
    border: 0;
}

.careers #promoBoxes img {
    float: left;
}

.careers #promoBoxes h4 {
    color: #111;
    font: 17px/1.3 'Oswald', arial, helvetica, sans-serif;
    margin-bottom: 8px;
    margin-left: 165px;
    margin-top: 0;
}

.careers #promoBoxes p {
    font-size: 12px;
    margin-left: 165px;
    padding-bottom: 0;
    line-height: 1.5em;
}

.careers #promoBoxes b {
    display: block;
    margin-left: 165px;
}

.careers #promoBoxes  p a {
    text-decoration: none;
    text-transform: none;
}

.careers #promoBoxes .yt-video-mobile {
    display: inline-block;
}

.careers #promoBoxes .yt-video {
    display: none;
}

.careers.drivers-truck h2 {
    text-align: center;
}


/* THANK YOU / FORM SUBMITTED PAGES */
.thank-you > article {
    background: #f1f1f1 url('../images/icon-checkmark.png') no-repeat 15px 40px;
    border: 1px solid #ccc;
    color: #666;
    font-size: 24px;
    margin: 0 auto 30px;
    padding: 15px 15px 15px 80px;
    width: 77%;
}

/* SEARCH RESULTS */
.search-results {
    max-width: 740px;
    width: 80%;
    margin: 0 auto;
}

.search-results #contentArea_searchBox {
    position: relative;
    width: 65%;
    padding: 9px 8px 7px 30px;
    background-position: 8px 8px;
    display: inline-block;
    vertical-align: middle;
    font-size: 12px;
    float: left;
}

.search-results #searchBtn {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    float: right;
    color: #FFF;
    font-size: 12px;
    font-weight: bold;
    border: 0;
    padding: 9px 15px;
    background-color: #1E7CBB;
    background-image: linear-gradient(to bottom, #439BD4 0%, #1E7CBB 100%);
}

#searchResults dt a {
    font-size: 15px;
    line-height: 1.5;
    text-decoration: none;
    color: #b63637;
}

#searchResults dt a:hover {
    color: #111111;
}

#searchResults dd {
    line-height: 1.5;
    font-size: 12px;
    margin-left: 0;
}

#searchResults dd + dt {
    margin-top: 20px;
}

.ezsearch-pager {
    line-height: 2;
}

.ezsearch-pager a {
    color: #b63637;
}

.ezsearch-pager a:hover {
    color: #111111;
}

.ezsearch-pager .page,
.ezsearch-pager a + a {
    margin-left: 10px;
}


/* FOOTER */
footer {
    padding: 40px 0;
    font-size: 15px;
    line-height: 1.7;
}

footer:after {
    content: " ";
    clear: both;
    display: table;
}

footer nav * {
    display: block;
    margin: 0 auto;
    text-align: center;
}

footer nav > * + * {
    margin-top: 20px;
}

footer nav h5 {
    text-transform: uppercase;
}

footer nav h5 a {
    font-size: 15px;
    font-weight: normal;
    color: #111111;
}

footer nav a {
    display: table;
    font-size: 12px;
    color: #868686;
}

.footer-links > img + div {
    margin-top: 20px;
}

.footer-truck-links ul {
    width: 55%;
}

.footer-truck-links li {
    position: relative;
    float: left;
    display: inline;
    width: 50%;
}

.footer-truck-links li:nth-child(n+3) {
    margin-top: 5px;
}

.footer-misc-links * + h5 {
    margin-top: 10px;
}

.footer-social-links a {
    position: relative;
    left: 50%;
    float: left;
    clear: left;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
}

.footer-social-links #shop::before,
.footer-social-links #facebook::before,
.footer-social-links #twitter::before,
.footer-social-links #rss::before,
.footer-social-links #linkedIn::before,
.footer-social-links #youtube::before {
    margin-right: 5px;
    vertical-align: middle;
}

.footer-social-links #shop::before {
    content: url('../images/icon-shop-off.png');
}

.footer-social-links #shop:hover::before {
    content: url('../images/icon-shop-on.png');
}

.footer-social-links #facebook::before {
    content: url('../images/icon-facebook-off.png');
}

.footer-social-links #facebook:hover::before {
    content: url('../images/icon-facebook-on.png');
}

.footer-social-links #twitter::before {
    content: url('../images/icon-twitter-off.png');
}

.footer-social-links #twitter:hover::before {
    content: url('../images/icon-twitter-on.png');
}

.footer-social-links #rss::before {
    content: url('../images/icon-rss-off.png');
}

.footer-social-links #rss:hover::before {
    content: url('../images/icon-rss-on.png');
}

.footer-social-links #linkedIn::before {
    content: url('../images/icon-linkedin-off.png');
}

.footer-social-links #linkedIn:hover::before {
    content: url('../images/icon-linkedin-on.png');
}

.footer-social-links #youtube::before {
    content: url('../images/icon-youtube-off.png');
}

.footer-social-links #youtube:hover::before {
    content: url('../images/icon-youtube-on.png');
}


/* ERROR 404 PAGE */
.error-page {
    margin: 0 40px;
    text-align: center;
    line-height: 1.4;
}

.error-page h2 {
    color: #1c7fba;
    font-size: 18px;
    font-weight: bold;
    font-family: arial, helvetica, sans-serif;
}

.error-page h2 + * {
    margin-top: 30px;
}

.error-page a {
    color: #B63637;
    text-decoration: underline;
}

.error-page a:hover {
    color: #111111;
}

.error-page #searchBtn {
    display: inline-block;
    vertical-align: middle;
    color: #FFF;
    font-size: 12px;
    font-weight: bold;
    margin-top: 15px;
    border: 0;
    padding: 10px 15px;
    background-color: #1E7CBB;
    background-image: linear-gradient(to bottom, #439BD4 0%, #1E7CBB 100%);
}

#contentArea_search {
    position: relative;
    background: #f1f1f1;
    border: 1px solid #dfdfdf;
    margin-bottom: 20px;
    padding: 12px 10px 8px;
}

#contentArea_searchBox {
    background: #FFF url(../images/icon-magnify.png) no-repeat 8px 3px;
    border: 1px solid #CCC;
    color: #111111;
    font-size: 16px;
    font-family: arial, helvetica, sans-serif;
    width: 100%;
    margin: 0 auto;
    padding-left: 35px;
    display: block;
}


/* Drivers Landing Page */
.drivers h1 sup {
    font-size: medium;
}

.drivers h4 {
    line-height: 1.5em;
}

.drivers h4 sup {
    font-size: x-small;
}

.drivers .row {
    display: table-row;
    width: 100%;
}

.drivers .column {
    /*float: left;*/
    display: table-cell;
    line-height: 1.4;
    padding: 1em 2% 1em 0%;
    vertical-align: top;
    width: 50%;
}

.drivers .column p:first-of-type {
    font-size: 14px;
    margin-top: 0;
}

.drivers .wysiwyg-block {
    font-size: 16px;
}

.drivers .wysiwyg-block h2 {
    color: #666666;
    font-family: arial, helvetica, sans-serif;
    font-size: 1.6em;
    font-weight: bold;
    margin: 0 !important;
}

.drivers .wysiwyg-block h3 {
    color: #1C7FBA;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-size: 1.4em;
    font-weight: normal;
    line-height: 1.3;
    margin: 1rem 0 !important;
}

.drivers .wysiwyg-block h3:first-child {
    margin-top: 0 !important;
    padding-top: 0;
}

.drivers .wysiwyg-block img {
    margin-right: 20px;
}

.drivers .wysiwyg-block .content-features .gray-button {
    float: none;
    font-size: 12px;
    line-height: 1.2;
}

.drivers .read-more, .read-more {
    color: #b23539;
}

.drivers .wysiwyg-block .content-features {
    margin-top: 0.5em;
    padding: 0;
    text-align: left;
}

.drivers .wysiwyg-block .content-features li {
    padding: 0;
    width: 100%;
}

.drivers .wysiwyg-block .content-features li > * {
    width: 100%;
}

.mobile-app header[role="banner"],
.mobile-app footer {
    display: none;
}

.blue-button {
    color: #FFF;
    font-weight: bold;
    font-size: 12px;
    padding: 10px 20px;
    background-color: #1E7CBB;
    background-image: linear-gradient(to bottom, #439BD4 0%, #1E7CBB 100%);
}

.blue-button:hover {
    background-color: #b63637;
    background-image: none;
    color: #FFF;
}

.gray-button {
    color: #FFF;
    font-weight: bold;
    padding: 9px 18px;
    background: linear-gradient(to bottom, #c2c2c2 0%, #a9a9a9 100%);
    background-color: #a9a9a9;
}

.gray-button:hover {
    background: #B63637;
    color: #FFF;
}

.red-link {
    color: #B63637;
    text-decoration: none;
}

.red-link:hover {
    color: #000;
}

/* WORLD'S BEST MAGAZINE PAGE */
.subpage-billboard-bottom {
    background-position: 50% 50%;
    background-size: cover;
    position: relative;
}

.subpage-billboard-bottom .billboard-content {
    background-color: rgba(0, 0, 0, 0.75);
    margin-top: 240px;
    min-height: 190px;
    position: relative;
}

.subpage-billboard-bottom .billboard-content .top-left {
    left: 0;
    padding: 0.5em 1em;
    position: absolute;
    top: 0;
}

.subpage-billboard-bottom .billboard-content .bottom-right {
    bottom: 0;
    padding: 1em;
    position: absolute;
    right: 0;
    text-align: right;
}

.subpage-billboard-bottom .billboard-content h1 {
    color: #ffffff;
    font-family: 'Oswald', arial, helvetica, sans-serif;
    font-size: 6em;
    font-weight: bold;
    text-tran