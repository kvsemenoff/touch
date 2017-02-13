<?php require_once('includes/header.php'); ?>
<?php require_once('includes/header_top.php'); ?>
<?php require_once('includes/header_bottom2.php'); ?>
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
<?php require_once('includes/footer.php'); ?>
