<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="libs/wow/animate.css">
	<link rel="stylesheet" href="css/tcal.css">
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="libs/wow/wow.min.js"></script>
	<script src="js/tcal.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>

	<script>
    	new WOW().init();
    </script>

	<script src="js/responsiveTabs.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/common.js"></script>

	

<div class="container payment__container">
    <header class="header">
        <div class="header__left_wrapper header__inner_wrapper">
            <a href="#" class="img-link-header"><img src="img/logo.png" alt="img" class="img-responsive"></a>
            <div class="header__lang">
                <a href="#" class="header__language_btn">
                    <span class="language_text">ru</span>
                </a>
                <ul class="header__language_list">
                    <li class="header__language_item"><a href="#" class="language__option">ru</a></li>
                    <li class="header__language_item"><a href="#" class="language__option">en</a></li>
                </ul>
            </div>


        </div>
        <div class="header__right_wrapper header__inner_wrapper">

            <a href="mailto:example@mail.com" class="header__mail"><div class="header__mailing_icon"></div>
                example@mail.com</a>
            <a href="basket.php" class="header__basket">
            </a>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</div>

            <a href="#" class="header__menu_mobile"></a>
        </div>

    </header>

</div>



<script type="text/javascript">
    $(document).ready(function() {
        $(".header__basket").click(function function_name(argument) {
            if ($(".header__popup").is(":visible")) {
                $(".header__popup").hide();
            } else {     
                $(".header__popup").show();
                $(".header__popup").css("display", "block");
            }
        });
    });
</script>
<section class=" section section_padding section_padding-db-header_bottom2">
	<div class="container payment__container">
		<ul class="pad">
			<li><a href="#">Каталог</a></li>
			<li><a href="#">Готовые наборы</a></li>
			<li><a href="#">Спецпредложения для регат</a></li>
			<li><a href="#">Оформление заказа</a></li>
			<li><a href="#">Доставка и оплата</a></li>
		</ul>
	</div>
</section>

<div class="container payment__container">
	<h2 class="basket__title">Корзина</h2>
	<form action="#" name="basket__form">
		<table class="basket__list">
				<tr class="basket__item basket__item1">
					<td class="basket__item-info">
						<span class="basket__item-title">Вино Кастелло Дель Соль</span>
						<p class="basket__item-description">Вино красное полусухое</p>
					</td>
					<td class="basket__item-oneprice modified__item desktop__shown">
						<span class="basket__oneprice-text">$<span class="basket__number">50</span></span>
					</td>
					<td class="basket__item-count modified__item">
						<div class="df-number">
							<span class="dfbutton dfbutton2" mark="-"></span>
							<input type="text" value="1" disabled="disabled" class="number__input">  
							<span class="dfbutton dfbutton3" mark="+"></span>
						</div>
					</td>
					<td class="basket__item-oneprice modified__item mobile__shown">
						<span class="basket__oneprice-text">$50</span>
					</td>
					<td class="basket__item-totalprice modified__item">
						<a href="#" class="close__btn"></a>
						<p class="basket__totalprice-text">50$</p>
					</td>
				</tr>
				<tr class="basket__item basket__item2">
					<td class="basket__item-info">
						<span class="basket__item-title">Вино Кастелло Дель Соль</span>
						<p class="basket__item-description">Вино красное полусухое</p>
					</td>
					<td class="basket__item-oneprice modified__item desktop__shown">
						<span class="basket__oneprice-text">$<span class="basket__number">50</span></span>
					</td>
					<td class="basket__item-count modified__item">
						<div class="df-number">
							<span class="dfbutton dfbutton2" mark="-"></span>
							<input type="text" value="1" disabled="disabled" class="number__input">  
							<span class="dfbutton dfbutton3" mark="+"></span>
						</div>
					</td>
					<td class="basket__item-oneprice modified__item mobile__shown">
						<span class="basket__oneprice-text">$50</span>
					</td>
					<td class="basket__item-totalprice modified__item">
						<a href="#" class="close__btn"></a>
						<span class="basket__totalprice-text">50$</span>
					</td>
				</tr>
				<tr class="basket__item basket__item3">
					<td class="basket__item-info">
						<span class="basket__item-title">Вино Кастелло Дель Соль</span>
						<p class="basket__item-description">Вино красное полусухое</p>
					</td>
					<td class="basket__item-oneprice modified__item desktop__shown">
						<span class="basket__oneprice-text">$<span class="basket__number">50</span></span>
					</td>
					<td class="basket__item-count modified__item">
						<div class="df-number">
							<span class="dfbutton dfbutton2" mark="-"></span>
							<input type="text" value="1" disabled="disabled" class="number__input">  
							<span class="dfbutton dfbutton3" mark="+"></span>
						</div>
					</td>
					<td class="basket__item-oneprice modified__item mobile__shown">
						<span class="basket__oneprice-text">$50</span>
					</td>
					<td class="basket__item-totalprice modified__item">
						<a href="#" class="close__btn"></a>
						<span class="basket__totalprice-text">50$</span>
					</td>
				</tr>
			</table>
			<div class="basket__total">
				<span class="total__text">ВСЕГО</span>
				<span class="total__number">350шт</span>
				<span class="total__totalprice">40 000$</span>
			</div>
			<div class="promo__block">
					<input type="text" name="promo__input" class="promo__input" placeholder="Введите промокод">
					<input type="submit" name="promo__submit" class="submit promo__submit" value="Активировать">
			</div>
			<div class="basket__bottom">
				<a href="#" class="basket__continue-purchase">Продолжить покупки</a>
				<input type="submit" class="submit basket__submit" name="basket__submit" id="basket__submit-id" value="Оформить заказ">
			</div>	
		</form>	
</div>
<section class="section dc_footer_view">
    <hr class="dc_footer_hr">    
    <div class="container">
        <div class="row">                    
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <a class="dc-text" href="#">Как это работает</a>
            </div>    
            <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                <a class="dc-text" href="#">Контакты</a>
            </div>    
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <a class="dc-text" class="dc-long-padding" href="#">Условия&nbspиспользования</a>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">                
                <a class="dc-socitem dc-instagram" href="#">
                </a>                                
                <a class="dc-socitem dc-facebook" href="#">
                </a>                                                
            </div>    
        </div>
    </div>
</section>
