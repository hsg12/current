<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>City of Clovis</title>
	<meta name="description" content="">
	<meta name="robots" content="index, follow">

	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
	<link rel="stylesheet" href="_assets_/fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="_assets_/plugins/ytplayer/jquery.mb.YTPlayer.min.css">
	<link rel="stylesheet" href="_assets_/css/layout.css">

	<link rel="shortcut icon" href="_assets_/images/favicon.ico">
	<link rel="apple-touch-icon" href="_assets_/images/touch-icon.png">
	<?php include "_includes_/calendar_css.php"; ?>	

</head>
<body id="homepage" class=""><!-- add user-logged-in class to test buttons and remove after sending to enabler -->

<header class="site-header">
	<div id="header-in">
		<div id="toggles" class="d-lg-none">
			<div id="nav-toggle" class="fa fa-bars"></div>
		</div><!--/#toggles-->
		<div id="logo-wrap">
			<a href="./" id="logo"><img src="_assets_/images/logo.png" alt="navigation logo"></a>
		</div>
		<nav class="has-edit-buttons">

			<div class="left-top">
				<div class="rz-btns-container">
					<span class="rzBtn rzBtn-sm">Edit Main Navigation</span>
				</div>				
			</div>

			<ul id="nav">
				<li><a href="./">Home</a></li>
				<li>
					<a href="./">Government</a>
					<ul>
						<li>
							<a href="./">Section Header</a>
							<ul>
								<li><a href="./">Page Link Title</a></li>
								<li><span>Page Link Title</span></li>
								<li><a href="./">Page Link Title</a></li>
								<li><a href="./">Page Link Title</a></li>
								<li><a href="./">Page Link Title</a></li>
								<li><a href="./">Page Link Title</a></li>
							</ul>
						</li>
						<li>
							<a href="./">Section Header</a>
							<ul>
								<li><a href="./">Page Link Title</a></li>
								<li><span>Page Link Title</span></li>
							</ul>
						</li>
						<li>
							<a href="./">Section Header</a>
							<ul>
								<li><a href="./">Page Link Title</a></li>
								<li><span>Page Link Title</span></li>
								<li><a href="./">Page Link Title</a></li>
								<li><a href="./">Page Link Title</a></li>
							</ul>
						</li>
						<li><a href="./">Section Header</a></li>
						<li><a href="./">Section Header</a></li>
						<li>
							<a href="./">Section Header</a>
							<ul>
								<li><a href="./">Page Link Title</a></li>
								<li><span>Page Link Title</span></li>
								<li><a href="./">Page Link Title</a></li>
								<li><a href="./">Page Link Title</a></li>
							</ul>
						</li>
						<li>
							<a href="./">Section Header</a>
							<ul>
								<li><a href="./">Page Link Title</a></li>
								<li><span>Page Link Title</span></li>
								<li><a href="./">Page Link Title</a></li>
							</ul>
						</li>
						<li>
							<a href="./">Section Header</a>
							<ul>
								<li><a href="./">Page Link Title</a></li>
								<li><span>Page Link Title</span></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="./">Residents</a></li>
				<li><a href="./">Businesses</a></li>
				<li><a href="./">Visitors</a></li>
				<li><a href="./">How Do I...</a></li>
			</ul>
		</nav>
		<div id="header-right-box">
			<div id="google-translate" class="hidden">
				<script>
					function googleTranslateElementInit() {
						new google.translate.TranslateElement({pagelanguage: 'en',
							layout: google.translate.TranslateElement.InlineLayout.SIMPLE},
							'google-translate');
					}
				</script>
			</div><!--/#google-translate-->
			<ul id="translation-links">
				<li>
					<button type="button" id="translate-button" aria-label="translate website" aria-haspopup="true" aria-expanded="false">
						<img src="_assets_/images/flags/English.png" class="translate-flag" alt="">
					</button>
					<button id="translate-reset" translate="no">Reset</button>
					<ul class="clearfix" aria-labelledby="translate-button">
						<li class="notranslate"><a href="#" class="English" data-lang="English">English</a></li>
						<li><a href="#" class="Afrikaans" data-lang="Afrikaans">Afrikaans</a></li>
						<li><a href="#" class="Albanian" data-lang="Albanian">Albanian</a></li>
						<li><a href="#" class="Arabic" data-lang="Arabic">Arabic</a></li>
						<li><a href="#" class="Armenian" data-lang="Armenian">Armenian</a></li>
						<li><a href="#" class="Azerbaijani" data-lang="Azerbaijani">Azerbaijani</a></li>
						<li><a href="#" class="Basque" data-lang="Basque">Basque</a></li>
						<li><a href="#" class="Belarusian" data-lang="Belarusian">Belarusian</a></li>
						<li><a href="#" class="Bengali" data-lang="Bengali">Bengali</a></li>
						<li><a href="#" class="Bosnian" data-lang="Bosnian">Bosnian</a></li>
						<li><a href="#" class="Bulgarian" data-lang="Bulgarian">Bulgarian</a></li>
						<li><a href="#" class="Catalan" data-lang="Catalan">Catalan</a></li>
						<li><a href="#" class="Cebuano" data-lang="Cebuano">Cebuano</a></li>
						<li><a href="#" class="Chinese" data-lang="Chinese (Simplified)">Chinese (Simplified)</a></li>
						<li><a href="#" class="Chinese" data-lang="Chinese (Traditional)">Chinese (Traditional)</a></li>
						<li><a href="#" class="Croatian" data-lang="Croatian">Croatian</a></li>
						<li><a href="#" class="Czech" data-lang="Czech">Czech</a></li>
						<li><a href="#" class="Danish" data-lang="Danish">Danish</a></li>
						<li><a href="#" class="Dutch" data-lang="Dutch">Dutch</a></li>
						<li><a href="#" class="Esperanto" data-lang="Esperanto">Esperanto</a></li>
						<li><a href="#" class="Estonian" data-lang="Estonian">Estonian</a></li>
						<li><a href="#" class="Filipino" data-lang="Filipino">Filipino</a></li>
						<li><a href="#" class="Finnish" data-lang="Finnish">Finnish</a></li>
						<li><a href="#" class="French" data-lang="French">French</a></li>
						<li><a href="#" class="Galician" data-lang="Galician">Galician</a></li>
						<li><a href="#" class="Georgian" data-lang="Georgian">Georgian</a></li>
						<li><a href="#" class="German" data-lang="German">German</a></li>
						<li><a href="#" class="Greek" data-lang="Greek">Greek</a></li>
						<li><a href="#" class="Gujarati" data-lang="Gujarati">Gujarati</a></li>
						<li><a href="#" class="Haitian Creole" data-lang="Haitian Creole">Haitian Creole</a></li>
						<li><a href="#" class="Hausa" data-lang="Hausa">Hausa</a></li>
						<li><a href="#" class="Hebrew" data-lang="Hebrew">Hebrew</a></li>
						<li><a href="#" class="Hindi" data-lang="Hindi">Hindi</a></li>
						<li><a href="#" class="Hmong" data-lang="Hmong">Hmong</a></li>
						<li><a href="#" class="Hungarian" data-lang="Hungarian">Hungarian</a></li>
						<li><a href="#" class="Icelandic" data-lang="Icelandic">Icelandic</a></li>
						<li><a href="#" class="Igbo" data-lang="Igbo">Igbo</a></li>
						<li><a href="#" class="Indonesian" data-lang="Indonesian">Indonesian</a></li>
						<li><a href="#" class="Irish" data-lang="Irish">Irish</a></li>
						<li><a href="#" class="Italian" data-lang="Italian">Italian</a></li>
						<li><a href="#" class="Japanese" data-lang="Japanese">Japanese</a></li>
						<li><a href="#" class="Javanese" data-lang="Javanese">Javanese</a></li>
						<li><a href="#" class="Kannada" data-lang="Kannada">Kannada</a></li>
						<li><a href="#" class="Khmer" data-lang="Khmer">Khmer</a></li>
						<li><a href="#" class="Korean" data-lang="Korean">Korean</a></li>
						<li><a href="#" class="Lao" data-lang="Lao">Lao</a></li>
						<li><a href="#" class="Latin" data-lang="Latin">Latin</a></li>
						<li><a href="#" class="Latvian" data-lang="Latvian">Latvian</a></li>
						<li><a href="#" class="Lithuanian" data-lang="Lithuanian">Lithuanian</a></li>
						<li><a href="#" class="Macedonian" data-lang="Macedonian">Macedonian</a></li>
						<li><a href="#" class="Malay" data-lang="Malay">Malay</a></li>
						<li><a href="#" class="Maltese" data-lang="Maltese">Maltese</a></li>
						<li><a href="#" class="Maori" data-lang="Maori">Maori</a></li>
						<li><a href="#" class="Marathi" data-lang="Marathi">Marathi</a></li>
						<li><a href="#" class="Mongolian" data-lang="Mongolian">Mongolian</a></li>
						<li><a href="#" class="Nepali" data-lang="Nepali">Nepali</a></li>
						<li><a href="#" class="Norwegian" data-lang="Norwegian">Norwegian</a></li>
						<li><a href="#" class="Persian" data-lang="Persian">Persian</a></li>
						<li><a href="#" class="Polish" data-lang="Polish">Polish</a></li>
						<li><a href="#" class="Portuguese" data-lang="Portuguese">Portuguese</a></li>
						<li><a href="#" class="Punjabi" data-lang="Punjabi">Punjabi</a></li>
						<li><a href="#" class="Romanian" data-lang="Romanian">Romanian</a></li>
						<li><a href="#" class="Russian" data-lang="Russian">Russian</a></li>
						<li><a href="#" class="Serbian" data-lang="Serbian">Serbian</a></li>
						<li><a href="#" class="Slovak" data-lang="Slovak">Slovak</a></li>
						<li><a href="#" class="Slovenian" data-lang="Slovenian">Slovenian</a></li>
						<li><a href="#" class="Somali" data-lang="Somali">Somali</a></li>
						<li><a href="#" class="Spanish" data-lang="Spanish">Spanish</a></li>
						<li><a href="#" class="Swahili" data-lang="Swahili">Swahili</a></li>
						<li><a href="#" class="Swedish" data-lang="Swedish">Swedish</a></li>
						<li><a href="#" class="Tamil" data-lang="Tamil">Tamil</a></li>
						<li><a href="#" class="Telugu" data-lang="Telugu">Telugu</a></li>
						<li><a href="#" class="Thai" data-lang="Thai">Thai</a></li>
						<li><a href="#" class="Turkish" data-lang="Turkish">Turkish</a></li>
						<li><a href="#" class="Ukrainian" data-lang="Ukrainian">Ukrainian</a></li>
						<li><a href="#" class="Urdu" data-lang="Urdu">Urdu</a></li>
						<li><a href="#" class="Vietnamese" data-lang="Vietnamese">Vietnamese</a></li>
						<li><a href="#" class="Welsh" data-lang="Welsh">Welsh</a></li>
						<li><a href="#" class="Yiddish" data-lang="Yiddish">Yiddish</a></li>
						<li><a href="#" class="Yoruba" data-lang="Yoruba">Yoruba</a></li>
						<li><a href="#" class="Zulu" data-lang="Zulu">Zulu</a></li>
					</ul>
				</li>
			</ul><!--/#translation-links-->
			<div id="header-search">
				<span id="header-search-toggle"><img src="_assets_/images/search-icon.png" alt="search"></span>
				<div id="search">
					<form class="search-form" method="GET" action="search.php" role="search" aria-label="sitewide">
						<label for="search-input"><span class="sr-only">Search</span></label>
						<input name="q" class="form-control search-input" placeholder="Enter search terms..." type="search" id="search-input">
						<button type="submit">Go</button>
					</form>
				</div><!-- /#search -->
			</div><!--/#header-search-->
		</div><!--/#header-right-box-->
	</div><!--/#header-in-->
</header>
	
<section id="slider" class="tiny-slider-wrap has-edit-buttons">

	<div class="center-center">
		<div class="rz-btns-container">
			<span class="rzBtn">Edit Slider</span>
			<span class="rzBtn">Edit Slider Video</span>
		</div>				
	</div>
	
	<!-- ENABLERS: remove #hero-video-box{display:none} from the CSS when starting to enable this -->
	<div id="hero-video-box">
		<div id="sliderVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=EzKImzjwGyM', coverImage:'_assets_/images/slide-1.jpg', containment:'#hero-video-box', autoPlay:true, mute:true, startAt:0, opacity:1, useOnMobile:true, showControls:false, loop:true, stopMovieOnBlur:false}"></div>
	</div>
	<div id="hero-slider-box">
		<ul class="tiny-slider">
			<li class='tiny-item'>
				<div class="tns-lazy-img tns-bg-slide" data-style="background:url(_assets_/images/slide-1.jpg) center/cover no-repeat" role="img" aria-label="Slide image"></div>
			</li>
			<li class='tiny-item'>
				<div class="tns-lazy-img tns-bg-slide" data-style="background:url(_assets_/images/slide-1.jpg) center/cover no-repeat" role="img" aria-label="Slide image"></div>
			</li>
		</ul><!--/.tiny-slider-->
		<div id="slider-btns">
			<button id="slider-prev">
				<img src="_assets_/images/slider-prev.png" alt="prev">
			</button>
			<button id="slider-next">
				<img src="_assets_/images/slider-next.png" alt="next">
			</button>
		</div><!--/#slider-btns-->
	</div><!--/#hero-slider-box-->
	<div id="top-links">
		<div id="top-links-in" class="has-edit-buttons">

			<div class="center-top">
				<div class="rz-btns-container">
					<span class="rzBtn">Edit</span>
				</div>				
			</div>

			<div id="top-links-slider">
				<div class="top-link-wrap">
					<a href="./" class="top-link">
						<div class="top-link-txt">Now Hiring: City of Clovis Employment Opportunities</div>
					</a><!-- /.top-link -->
				</div><!-- /.top-link-wrap -->
				<div class="top-link-wrap">
					<a href="./" class="top-link">
						<div class="top-link-txt">Featured Career Opportunity: Police Officer Recruit/Lateral</div>
					</a><!-- /.top-link -->
				</div><!-- /.top-link-wrap -->
				<div class="top-link-wrap">
					<a href="./" class="top-link">
						<div class="top-link-txt">City of Clovis Events & Activities</div>
					</a><!-- /.top-link -->
				</div><!-- /.top-link-wrap -->
				<div class="top-link-wrap">
					<a href="./" class="top-link">
						<div class="top-link-txt">NEW: Utility Billing System & Online Self-Service Portal!</div>
					</a><!-- /.top-link -->
				</div><!-- /.top-link-wrap -->
				<div class="top-link-wrap">
					<a href="./" class="top-link">
						<div class="top-link-txt">Cooling Center Information</div>
					</a><!-- /.top-link -->
				</div><!-- /.top-link-wrap -->
			</div><!--/#top-links-slider-->
		</div><!--/#top-links-in-->
	</div><!--/#top-links-->
	<div id="slider-caption-search-wrap" class="container">
		<h1 id="slider-caption">City <span>of</span> Clovis</h1>
		<div id="slider-search">
			<form class="search-form" method="GET" action="search.php" role="search" aria-label="sitewide">
				<label class="sr-only" for="slider-search-input">Search</label>
				<input name="q" class="form-control search-input" placeholder="How can we assist you today?" type="search" id="slider-search-input">
				<button type="submit">
					<img src="_assets_/images/slider-search-icon.png" alt="GO">
				</button>
			</form>
		</div><!-- /#slider-search -->
	</div><!-- /#slider-caption-search-wrap -->
	<div class="scroll-down-wrap">
		<div class="scroll-down-box">
			<div class="scroll-down">
				<img src="_assets_/images/arrow-down.png" alt="scroll">
			</div>
		</div>
	</div><!--/.scroll-down-wrap-->
</section><!--/#slider-->

<main id="main">
	<section id="quick-links">
		<div class="container">
			<div id="quick-links-in" class="has-edit-buttons">

				<div class="center-center">
					<div class="rz-btns-container">
						<span class="rzBtn">Edit Quick Links</span>
					</div>				
				</div>
				
				<div class="quick-links-slider">
					<div class="quick-link-wrap">
						<a href="./" class="quick-link" aria-label="Pay Online">
							<div class="quick-link-bg-img" data-style="background:url('_assets_/images/quick-link-img-1.jpg') center/cover no-repeat" role="img" aria-label="Background image for quick link"></div>
							<div class="quick-link-text">Pay Online</div>
						</a><!-- /.quick-link -->
					</div><!-- /.quick-link-wrap -->
					<div class="quick-link-wrap">
						<a href="./" class="quick-link" aria-label="Permits and Licenses">
							<div class="quick-link-bg-img" data-style="background:url('_assets_/images/quick-link-img-2.jpg') center/cover no-repeat" role="img" aria-label="Background image for quick link"></div>
							<div class="quick-link-text">Permits and Licenses</div>
						</a><!-- /.quick-link -->
					</div><!-- /.quick-link-wrap -->
					<div class="quick-link-wrap">
						<a href="./" class="quick-link" aria-label="Public Safety">
							<div class="quick-link-bg-img" data-style="background:url('_assets_/images/quick-link-img-3.jpg') center/cover no-repeat" role="img" aria-label="Background image for quick link"></div>
							<div class="quick-link-text">Public Safety</div>
						</a><!-- /.quick-link -->
					</div><!-- /.quick-link-wrap -->
					<div class="quick-link-wrap">
						<a href="./" class="quick-link" aria-label="Employment">
							<div class="quick-link-bg-img" data-style="background:url('_assets_/images/quick-link-img-4.jpg') center/cover no-repeat" role="img" aria-label="Background image for quick link"></div>
							<div class="quick-link-text">Employment</div>
						</a><!-- /.quick-link -->
					</div><!-- /.quick-link-wrap -->
					<div class="quick-link-wrap">
						<a href="./" class="quick-link" aria-label="Agendas">
							<div class="quick-link-bg-img" data-style="background:url('_assets_/images/quick-link-img-5.jpg') center/cover no-repeat" role="img" aria-label="Background image for quick link"></div>
							<div class="quick-link-text">Agendas</div>
						</a><!-- /.quick-link -->
					</div><!-- /.quick-link-wrap -->
					<div class="quick-link-wrap">
						<a href="./" class="quick-link" aria-label="Pay Online">
							<div class="quick-link-bg-img" data-style="background:url('_assets_/images/quick-link-img-1.jpg') center/cover no-repeat" role="img" aria-label="Background image for quick link"></div>
							<div class="quick-link-text">Pay Online</div>
						</a><!-- /.quick-link -->
					</div><!-- /.quick-link-wrap -->
				</div><!--/.quick-links-slider-->
			</div><!--/#quick-links-in-->
		</div><!--/.container-->
	</section><!--/#quick-links-->
	<section id="news">
		<div class="container">
			<div class="section-top">
				<div class="has-edit-buttons">

					<div class="left-top">
						<div class="rz-btns-container">
							<span class="rzBtn">Edit Header</span>
						</div>				
					</div>

					<h2 class="section-title editable">Latest news</h2>
				</div>
				<a href="./" class="section-btn">View all news</a>
			</div><!--/.section-top-->
			<div id="news-in">
				<div id="news-left" class="has-edit-buttons">

					<div class="left-top">
						<div class="rz-btns-container">
							<span class="rzBtn">Edit News Articles</span>
						</div>				
					</div>

					<div class="featured-news-slider">
						<div class="featured-news-wrap">
							<a href="./" class="featured-news" aria-label="Featured news: Featured/pinned post lorem metus eu hendrerit posuere arcu pharetra dolor">
								<div class="featured-news-banner" data-style="background:url('_assets_/images/featured-news-img.jpg') center/cover no-repeat" role="img" aria-label="Featured news image"></div>
								<div class="featured-news-info">
									<time datetime="2024-04-05">April 5, 2024</time>
									<h3 class="featured-news-title">Featured/pinned post lorem metus eu hendrerit posuere arcu pharetra dolor</h3>
								</div><!--/.featured-news-info-->
							</a><!--/.featured-news-->
						</div><!--/.featured-news-wrap-->
						<div class="featured-news-wrap">
							<a href="./" class="featured-news" aria-label="Featured news: Featured/pinned post lorem metus eu hendrerit posuere arcu pharetra dolor">
								<div class="featured-news-banner" data-style="background:url('_assets_/images/featured-news-img.jpg') center/cover no-repeat" role="img" aria-label="Featured news image"></div>
								<div class="featured-news-info">
									<time datetime="2024-04-05">April 5, 2024</time>
									<h3 class="featured-news-title">Featured/pinned post lorem metus eu hendrerit posuere arcu pharetra dolor</h3>
								</div><!--/.featured-news-info-->
							</a><!--/.featured-news-->
						</div><!--/.featured-news-wrap-->
					</div><!-- /.featured-news-slider -->
				</div><!--/#news-left-->
				<div id="news-right" class="has-edit-buttons">

					<div class="right-top">
						<div class="rz-btns-container">
							<span class="rzBtn">Edit News Articles</span>
						</div>				
					</div>

					<div id="news-box">
						<!-- max count 3 -->
						<a href="./" class="h-news" aria-label="News: Ipsum metus eu hendrerit posuere arcu pharetra dolor">
							<div class="h-news-banner" style="background:url('_assets_/images/news-img-1.jpg') center/cover no-repeat" role="img" aria-label="News image"></div>
							<div class="h-news-info">
								<div class="h-news-info-in">
									<time datetime="2024-04-05">April 5, 2024</time>
									<h3 class="h-news-title">Ipsum metus eu hendrerit posuere arcu pharetra dolor</h3>
								</div><!--/.h-news-info-in-->
							</div><!--/.h-news-info-->
						</a><!--/.h-news-->
						<a href="./" class="h-news" aria-label="News: Ipsum metus eu hendrerit posuere arcu pharetra dolor">
							<div class="h-news-banner" style="background:url('_assets_/images/news-img-2.jpg') center/cover no-repeat" role="img" aria-label="News image"></div>
							<div class="h-news-info">
								<div class="h-news-info-in">
									<time datetime="2024-04-05">April 5, 2024</time>
									<h3 class="h-news-title">Ipsum metus eu hendrerit posuere arcu pharetra dolor</h3>
								</div><!--/.h-news-info-in-->
							</div><!--/.h-news-info-->
						</a><!--/.h-news-->
						<a href="./" class="h-news" aria-label="News: Ipsum metus eu hendrerit posuere arcu pharetra dolor">
							<div class="h-news-banner" style="background:url('_assets_/images/news-img-3.jpg') center/cover no-repeat" role="img" aria-label="News image"></div>
							<div class="h-news-info">
								<div class="h-news-info-in">
									<time datetime="2024-04-05">April 5, 2024</time>
									<h3 class="h-news-title">Ipsum metus eu hendrerit posuere arcu pharetra dolor</h3>
								</div><!--/.h-news-info-in-->
							</div><!--/.h-news-info-->
						</a><!--/.h-news-->
					</div><!--/#news-box-->
				</div><!--/#news-right-->
			</div><!--/#news-in-->
		</div><!--/.container-->
	</section><!--/#news-->
	<section id="events" class="has-edit-buttons">

		<div class="left-top">
			<div class="rz-btns-container">
				<span class="rzBtn">Edit Background Image</span>
			</div>				
		</div>

		<div id="events-banner" style="background:url('_assets_/images/events-bg-img.jpg') center/cover no-repeat"></div>
		<div class="scroll-down-wrap">
			<div class="scroll-down-box">
				<div class="scroll-down">
					<img src="_assets_/images/arrow-down.png" alt="scroll">
				</div>
			</div>
		</div><!--/.scroll-down-wrap-->
		<div class="container">
			<div id="events-in">
				<div id="events-top">
					<div class="section-top">
						<div class="has-edit-buttons">
	
							<div class="left-top">
								<div class="rz-btns-container">
									<span class="rzBtn">Edit Header</span>
								</div>				
							</div>
	
							<h2 class="section-title">Coming Events</h2>
						</div>
					</div><!--/.section-top-->
					<div id="event-tabs-box-wrap" class="has-edit-buttons">

						<div class="right-top">
							<div class="rz-btns-container">
								<span class="rzBtn">Edit Tabs</span>
							</div>				
						</div>

						<div id="event-tabs-box">
							<div id="event-filter"></div>
							<div id="event-tabs-wrap">
								<ul id="event-tabs" role="tablist">
									<li role="tab" aria-selected="true" tabindex="0" class="event-tab current">Meetings</li>
									<li role="tab" aria-selected="false" tabindex="0" class="event-tab">Events</li>
									<li role="tab" aria-selected="false" tabindex="0" class="event-tab">Holidays</li>
								</ul>
							</div><!--/#event-tabs-wrap-->
						</div><!--/#event-tabs-box-->
					</div><!--/#event-tabs-box-wrap-->
				</div><!--/#events-top-->
				<div id="events-box">
					<div id="mini-events" data-template-file="template.html"></div>
				</div><!-- /#events-box -->
				<div class="section-btn-wrap">
					<a href="./" class="section-btn">View All Events</a>
				</div>
			</div><!--/#events-in-->
		</div><!--/.container-->
	</section><!--/#events-->

	<!-- This section can be toggled on/off -->
	<section id="bottom-quick-links">
		<div class="container">
			<div id="b-quick-links-in">
				<div class="section-top">
					<div class="has-edit-buttons">
		
						<div class="left-top">
							<div class="rz-btns-container">
								<span class="rzBtn">Edit Header</span>
							</div>				
						</div>
		
						<h2 class="section-title editable">Quick Links</h2>
					</div>
				</div><!--/.section-top-->
				<div class="quick-links-slider-wrap has-edit-buttons">

					<div class="center-center">
						<div class="rz-btns-container">
							<span class="rzBtn">Edit Quick Links</span>
						</div>				
					</div>

					<div class="quick-links-slider">
						<div class="quick-link-wrap">
							<a href="./" class="quick-link" aria-label="Visit Clovis">
								<div class="quick-link-bg-img" data-style="background:url('_assets_/images/b-quick-link-img-1.jpg') center/cover no-repeat" role="img" aria-label="Background image for quick link"></div>
								<div class="quick-link-text">Visit Clovis</div>
							</a><!-- /.quick-link -->
						</div><!-- /.quick-link-wrap -->
						<div class="quick-link-wrap">
							<a href="./" class="quick-link" aria-label="Economic Development">
								<div class="quick-link-bg-img" data-style="background:url('_assets_/images/b-quick-link-img-2.jpg') center/cover no-repeat" role="img" aria-label="Background image for quick link"></div>
								<div class="quick-link-text">Economic Development</div>
							</a><!-- /.quick-link -->
						</div><!-- /.quick-link-wrap -->
						<div class="quick-link-wrap">
							<a href="./" class="quick-link" aria-label="Senior Activity Center">
								<div class="quick-link-bg-img" data-style="background:url('_assets_/images/b-quick-link-img-3.jpg') center/cover no-repeat" role="img" aria-label="Background image for quick link"></div>
								<div class="quick-link-text">Senior Activity Center</div>
							</a><!-- /.quick-link -->
						</div><!-- /.quick-link-wrap -->
						<div class="quick-link-wrap">
							<a href="./" class="quick-link" aria-label="Police Department">
								<div class="quick-link-bg-img" data-style="background:url('_assets_/images/b-quick-link-img-4.jpg') center/cover no-repeat" role="img" aria-label="Background image for quick link"></div>
								<div class="quick-link-text">Police Department</div>
							</a><!-- /.quick-link -->
						</div><!-- /.quick-link-wrap -->
						<div class="quick-link-wrap">
							<a href="./" class="quick-link" aria-label="Fire Department">
								<div class="quick-link-bg-img" data-style="background:url('_assets_/images/b-quick-link-img-5.jpg') center/cover no-repeat" role="img" aria-label="Background image for quick link"></div>
								<div class="quick-link-text">Fire Department</div>
							</a><!-- /.quick-link -->
						</div><!-- /.quick-link-wrap -->
					</div><!--/.quick-links-slider-->
				</div><!--/.quick-links-slider-wrap-->
			</div><!--/#b-quick-links-in-->
		</div><!--/.container-->
	</section><!--/#bottom-quick-links-->
	<section id="stay-informed">
		<div id="stay-informed-bg-img" style="background:url('_assets_/images/stay-informed-bg-img.jpg') center/cover no-repeat"></div>
		<div class="container">
			<div id="stay-informed-in" class="has-edit-buttons">

				<div class="left-top">
					<div class="rz-btns-container">
						<span class="rzBtn">Edit</span>
					</div>				
				</div>

				<div class="stay-informed-data">
					<img src="_assets_/images/stay-informed-icon.png" alt="">
					<div>
						<h2 class="section-title">Stay Up to Date</h2>
						<p>Sign up for eNotify to be in the know!</p>
					</div>
				</div>
				<a href="./" class="section-btn">Sign Up Today</a>
			</div><!--/#stay-informed-in-->
		</div><!--/.container-->
	</section><!--/#stay-informed-->
</main>

<footer class="site-footer">
	<div id="footer-bg-img" style="background:url('_assets_/images/footer-bg-img.jpg') center/cover no-repeat"></div>
	<div class="container">
		<div id="footer-top">
			<div class="footer-top-box">
				<div id="footer-logo-wrap">
					<a href="./" id="footer-logo"><img src="_assets_/images/footer-logo.png" alt="navigation logo"></a>
				</div>
				<div class="has-edit-buttons">

					<div class="right-top">
						<div class="rz-btns-container">
							<span class="rzBtn rzBtn-sm">Edit</span>
						</div>				
					</div>

					<a href="./" class="footer-social-btn" aria-label="Follow us on social media">
						<img src="_assets_/images/plus-solid.png" class="footer-social-btn-plus" alt="+">
						<div class="footer-social-btn-txt">Follow us on social media!</div>
					</a>
				</div>
			</div><!-- /.footer-top-box -->
			<div class="footer-top-box has-edit-buttons">

				<div class="right-top">
					<div class="rz-btns-container rz-btns-stacked">
						<span class="rzBtn rzBtn-sm">Edit Header</span>
						<span class="rzBtn rzBtn-sm">Edit Content</span>
					</div>				
				</div>

				<h3 class="footer-top-header">Contact</h3>
				<ul class="footer-list">
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
				</ul>
			</div><!-- /.footer-top-box -->
			<div class="footer-top-box has-edit-buttons">

				<div class="right-top">
					<div class="rz-btns-container rz-btns-stacked">
						<span class="rzBtn rzBtn-sm">Edit Header</span>
						<span class="rzBtn rzBtn-sm">Edit Content</span>
					</div>				
				</div>

				<h3 class="footer-top-header">Section Header</h3>
				<ul class="footer-list">
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
				</ul>
			</div><!-- /.footer-top-box -->
			<div class="footer-top-box has-edit-buttons">

				<div class="right-top">
					<div class="rz-btns-container rz-btns-stacked">
						<span class="rzBtn rzBtn-sm">Edit Header</span>
						<span class="rzBtn rzBtn-sm">Edit Content</span>
					</div>				
				</div>

				<h3 class="footer-top-header">Section Header</h3>
				<ul class="footer-list">
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
				</ul>
			</div><!-- /.footer-top-box -->
			<div class="footer-top-box has-edit-buttons">

				<div class="right-top">
					<div class="rz-btns-container rz-btns-stacked">
						<span class="rzBtn rzBtn-sm">Edit Header</span>
						<span class="rzBtn rzBtn-sm">Edit Content</span>
					</div>				
				</div>

				<h3 class="footer-top-header">Section Header</h3>
				<ul class="footer-list">
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
					<li><a href="./" class="footer-list-link">Link Name Lorem Ipsum</a></li>
				</ul>
			</div><!-- /.footer-top-box -->
		</div><!--/#footer-top-->
		<div id="footer-bottom">
			<span class="footer-spacer">
				Powered by 
				<a href="https://www.revize.com" id="revize-link" target="_blank" aria-label="Revize, the Government Website Experts">
					<img src="_assets_/images/revize-logo.png" alt="revize.">
				</a>, the Government Website Experts
			</span>
			<span class="footer-spacer">
				<a href="./" id="revize-login" aria-label="Login to site">Login</a>
			</span>
			<a href="./" class="privacy-policy" aria-label="Disclaimer of Privacy Policy">Disclaimer of Privacy Policy</a>
		</div><!--/#footer-bottom-->
	</div><!--/.container-->
</footer>

<script src="//development.revize.com/revize/plugins/revize_calendar/index.v2.js"></script>
<script src="_assets_/plugins/tiny-slider/dist/min/tiny-slider.js"></script>
<script src="_assets_/plugins/ytplayer/jquery.mb.YTPlayer.min.js"></script>
<script src="_assets_/js/scripts.js"></script>

</body>
</html>
