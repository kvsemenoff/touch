<?php require_once('includes/header.php'); ?>
<?php require_once('includes/header_top.php'); ?>
<?php require_once('includes/header_bottom2.php'); ?>
<section class="payment">
    <div class="container payment__container">
        <h2 class="payment__head">Оформление заказа</h2>
            <div class="payment_block personal__block">
                <div class="container wrap__container">
                    <form action="#" class="form11">
                        <table class="payment__table personal__table">
                        <tbody>
                            <tr>
                                <td class="personal__info-item">
                                    <label class="personal__label" for="user__name">Введите имя</label>
                                    <input type="text" class="payment__input" id="user__name" name="user__name" placeholder="Greg" class="personal__info-text user__name">
                                    </td>
                                <td class="personal__info-item">
                                    <label class="personal__label" for="user__family">Введите фамилию</label>
                                    <input type="text" class="payment__input" id="user__family" name="user__family" placeholder="Doe" class="personal__info-text user__family">
                                </td>
                                <td class="personal__info-item">
                                    <label class="personal__label" for="user__phone">Введите ваш телефон</label>
                                    <input type="text" class="payment__input phone" id="user__phone" name="user__phone" placeholder="+7 00 000 000 00 00" class="personal__info-text user__phone">
                                </td>
                                <td class="personal__info-item">
                                    <label class="personal__label" for="user__email">Введите ваш e-mail</label>
                                    <input type="text" class="payment__input" id="user__email" name="user__email" placeholder="example@gmail.com" class="personal__info-text user__email">
                                </td>   
                            </tr>
                        </tbody>
                        </table>
                    </form>
                </div>
            </div>
            <div class="payment_block extra__block">
                <div class="container wrap__container">
                    <table class="payment__table extra__table">
                        <tbody>
                            <tr class="personal__info-bottom">
                                <td class="personal__info-item td__bg">
                                    <label class="personal__label data__arrow choose__date" for="personal__data">Выберите дату
                                    <span class="date__arow"></span>
                                    </label>
                                    <input type="text"  name="date" class="tcal personal__select" id="personal__data" value="13/09/2016">
                                    <label class="personal__label data__arrow" for="user__email">Выберите время
                                        <span class="date__arow"></span>

                                    </label>
                                    <select class="personal__select time__select" name="personal__time" id="personal__time">
                                        <option selected value="1">с 9 до 12:00</option>
                                        <option value="time__period2">с 12 до 15:00</option>
                                        <option value="time__period3">с 15:00 до 18:00</option>
                                    </select>
                                </td>
                                <td class="personal__info-item  extra__info">
                                    <label style="color: transparent; width: 100%; font-size: 0; line-height: 0; padding-bottom: 0" class="personal__label data__arrow">
                                    hyhyhyhyhyh hyhyhyhyh
                                        <span class="date__arow modified__arrow"></span>
                                    </label>
                                    <select class="personal__select choose__marina extra__select" name="marina" id="marina">
                                        <option value="choose__marina">Выберите марину</option>
                                    </select>
                                    <input type="text" class="payment__input extra__input" id="hotel__name" name="hotel__name" placeholder="Название чартерной компании или отеля" >
                                    <input type="text" class="payment__input extra__input" id="boat__name" name="boat__name" placeholder="Название лодки или отеля">
                                </td>
                                <td class="personal__info-item extra__info">
                                    <input type="text" class="payment__input promo__code extra__input" id="promo__code" name="promo__code" placeholder="Введите промокод">
                                    <a href="#" class="promo__activate">Активировать</a>
                                    <textarea name="addition" id="addition" class="payment__input extra__input" placeholder="Дополнительно"></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="payment__content">
                <div class="container wrap__container">
                    <h2 class="payment__head payment__title">Оплата</h2>
                    <div class="payment__check-block">
                        <input type="radio" name="card" id="card__checkbox" class="checked__box payment__checkbox">
                        <label for="card__checkbox" class="payment__label">
                            Оплата банковской карточкой
                            <span class="question__mark"></span>

                            <span class="payment__info">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, earum perferendis, ad animi pariatur sint quae expedita alias magni, inventore in? Odio, magnam quas animi minima, ullam asperiores nesciunt delectus.
                            </span>
                        </label>
                        
                    </div>
                     <div class="payment__check-block">    
                        <input type="radio" id="cash__checkbox" name="card" class="payment__checkbox">
                         <label for="cash__checkbox" class="payment__label">
                            Оплата при получении
                            <span class="question__mark"></span>

                            <span class="payment__info">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, earum perferendis, ad animi pariatur sint quae expedita alias magni, inventore in? Odio, magnam quas animi minima, ullam asperiores nesciunt delectus.
                            </span>
                        </label>
                       </div>
                       <div class="marg"> 
                        <ul class="logo__list">
                            <li class="logo__item"><a href="http://home.americanexpress.com/home/global_splash.html"><img src="img/AmericanExpress50.jpg" alt=""></a></li>
                            <li class="logo__item"><a href=" www.dinersclub.com"><img src="img/DCI-Logo-horz.jpg" alt=""></a></li>
                            <li class="logo__item"><a href="https://www.discover.com"><img src="img/DISCOVER.jpg" alt=""></a></li>
                            <li class="logo__item"><a href="http://www.mastercard.com"><img src="img/MasterCard50.gif" alt=""></a></li>
                            <li class="logo__item"><a href="http://www.maestrocard.com"><img src="img/Maestro50.gif" alt=""></a></li>
                            <li class="logo__item"><a href="http://www.visa.com"><img src="img/visa50.gif" alt=""></a></li>
                            <li class="logo__item"><a href="http://www.visa.com"><img src="img/VerifiedbyVisa.jpg" alt=""></a></li>
                            <li class="logo__item"><a href="http://www.mastercard.com"><img src="img/secureCode_logo.gif" alt=""></a></li>
                            <li class="logo__item"><a href="http://home.americanexpress.com/home/global_splash.html"><img src="img/ax_guarenteed.gif" alt=""></a></li>
                            <li class="logo__item corvus"><a href="http://www.corvuspay.hr"><img src="img/orvus.png" alt=""></a></li>
                            <li class="logo__item corvus"><a href="http://www.corvuspay.hr"><img src="img/orvus.png" alt=""></a></li>

                            <li class="logo__item corvus"><a href="http://www.corvuspay.hr"><img src="img/сorvuspay.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="agreement__block">
                        <input type="checkbox" id="agreement__checkbox" name="agreement__checkbox" class="agreement__checkbox">
                        <label for="agreement__checkbox" class="agreement__label">
                        </label>
                        <a href="#" class="agreement__link">Согласен с условиями и правилами</a>
                        <input type="submit" class="submit promo__activate payment__btn" value="Оплатить">
                    </div>
                </div>
            </div>
        <div class="conditions__block">
            <div class="container wrap__container">
                <h3 class="conditions__head">Если вы заказываете доставку на марину</h3>
                <p class="conditions__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est </p>
                <h3 class="conditions__head">Если вы заказываете доставку в отель</h3>
                <p class="conditions__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est </p>
            </div>
        </div>
    </div>    
</section>
<?php require_once('includes/footer.php'); ?>
