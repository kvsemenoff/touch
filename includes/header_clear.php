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