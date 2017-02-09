<div class="container payment__container">
    <header class="header">
        <div class="header__left_wrapper header__inner_wrapper">
            <a href="#" class="header__logo"></a>
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
            <a href="#" class="header__basket"></a>
            <a href="#" class="header__menu_mobile"></a>
        </div>

    </header>
</div>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<div class="header__popup">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-md-offset-5 col-lg-offset-5 col-sm-12 col-xs-12">
                <table class="table table-responsive">
                    <tbody>
                        <tr>
                            <td>
                                <div class="header__wine">
                                    Вино Кастелло Дель Соль
                                </div>
                                <br>
                                <div class="header__wine_small">
                                    Вино красное полусухое
                                </div>
                            </td>
                            <td>
                                <div class="header__dollar">
                                    $50    
                                </div>
                            </td>
                            <td>
                                <div class="df-number">
                                    <span class="dfbutton dfbutton2">+</span>
                                    <input type="text" value="140" disabled="disabled" class="number__input">  
                                    <span class="dfbutton dfbutton3">-</span>
                                </div>                                
                            </td>
                            <td>
                                <div class="header__price">
                                    15000$
                                </div>
                            </td>                            
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <div class="header__all">
                                    ВСЕГО
                                </div>
                            </td>
                            <td rowspan="2">
                                <div class="header__count">
                                    350шт
                                </div>
                            </td>
                           <td>
                                <div class="header__price">
                                    15000$
                                </div>
                            </td>                            
                        </tr>                      
                    </tfoot>
                </table>          
            </div>
            
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <input type="text" name="" value="Введите промокод">
            </div>

            <div class="col-md-4 col-lg-4 col-md-offset-8 col-lg-offset-8 col-sm-12 col-xs-12">
                <a href="">Продолжить покупки</a>
            </div>
             
            <div class="col-md-4 col-lg-4 col-sm-12"> 
                <form>
                    <input type="button" name="" value="Активировать" class="button-6">
                </form>
            </div>    

            <div class="col-md-4 col-lg-4 col-sm-12"> 
                <form>
                    <input type="button" name="" value="Перейти в корзину" class="button-7">
                </form>
            </div>    
            
            <div class="col-md-4 col-lg-4 col-sm-12"> 
                <form>
                    <input type="button" name=""  value="Оформить заказ" class="button-6">
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(".header__basket").click(function function_name(argument) {
            if ($(".header__popup").is(":visible")) {
                $(".header__popup").hide();
            } else {     
                $(".header__popup").show();
            }
        });
    });
</script>