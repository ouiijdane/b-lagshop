<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $data['page_title']?> | eShop</title>
    <link href="<?= ASSETS . THEME ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME ?>css/price-range.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME ?>css/animate.css" rel="stylesheet">
	<link href="<?= ASSETS . THEME ?>css/main.css" rel="stylesheet">
	<link href="<?= ASSETS . THEME ?>css/responsive.css" rel="stylesheet">
	<link href="<?= ASSETS . THEME ?>css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?= ASSETS . THEME ?>js/html5shiv.js"></script>
    <script src="<?= ASSETS . THEME ?>js/respond.min.js"></script>
    <![endif]-->     
 
    <link rel="shortcut icon" href="<?= ASSETS . THEME ?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= ASSETS . THEME ?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= ASSETS . THEME ?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= ASSETS . THEME ?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= ASSETS . THEME ?>images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<div class ="promo">
       <span> VENTE FLASH 60% De Réduction !!  </span>
     </div>
	 <nav style="position:relative">
      <div>
        <img src="../public/assets/eshop/images/photo.png" id="logo">
        <h1 style="font-weight:600" ><span>B-</span>Lag Cosmetics</h1>
      </div>
      
          <div class="onglets">
          <p class="link" ><strong><a href="<?=ROOT?>">ACCUEIL</a></strong></p>
          <p class="link"> <a href="<?=ROOT?>product.inc">Visage</a></p>
          <p class="link"><a href="<?=ROOT?>cheveux">Cheveux</a></p>
          <p class="link"><a href="<?=ROOT?>corps">Corps</a></p>
          <p class="link"><a href="<?=ROOT?>parfums">Parfums</a></p>
          <p class="link"><a href="<?=ROOT?>accessoires">Accessoires</a></p>
          <p class="link"><a href="<?=ROOT?>contact-us">Contacts</a></p>
          <p class="link"><a href="<?=ROOT?>about-us">A propos de nous</a></p>
          <form>
            <input type="search" placeholder="Rechercher">
          </form>
          
          <p><i class="fa fa-heart"></i></p>
          <p><i class="fa fa-shopping-cart"></i></p>
        </div>
      </nav>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> <?=Settings::phone_number()?></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> <?=Settings::email()?></a></li>
								<?php if(isset($data['user_data'])): ?>
									<li><a href="#"><i class="fa fa-user"></i> <?= $data['user_data']->name ?></a></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a target="_new" href="<?=Settings::facebook_link()?>"><i class="fa fa-facebook"></i></a></li>
								<li><a target="_new" href="<?=Settings::twitter_link()?>"><i class="fa fa-twitter"></i></a></li>
								<li><a target="_new" href="<?=Settings::linkedin_link()?>"><i class="fa fa-linkedin"></i></a></li>
								<li><a target="_new" href="<?=Settings::website_link()?>"><i class="fa fa-dribbble"></i></a></li>
								<li><a target="_new" href="<?=Settings::google_plus_link()?>"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
				</div>
			</div>
		</div>
	</header>

	<style type="text/css">
		.product-image{
			transition: all 1s ease;
		}
		.product-image:hover{
			transform: scale(1.5);
		}
	</style>
	