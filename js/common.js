

$(document).ready(function(){
    $('.header__menu_mobile').click(function(e){
        e.preventDefault();
        $('.section_padding-db-header_bottom2').slideToggle();
    });
    $('.header__menu_mobile').click(function(e){
        e.preventDefault();
        $('.m__hidden').slideToggle();
    });
    $(window).resize(function(){
        var $this = $(this);
        if($this.width() > 1248){
         $('.section_padding-db-header_bottom2').css("display" , "block");
     }
     else{
        $('.section_padding-db-header_bottom2').css("display" , "none");
    }
});
    $('.az-select').each(function(){
        var select = $(this);    
        var option = select.find('select option');
        var str = '<div class="az-options">';
        select.find('option').each(function(){
            str+= '<div data-val="' +$(this).val() + '">' + $(this).text() + '</div>'
        });
        str+= '</div>';
        select.html(select.html() + str);

        select.find('select').mousedown(function(){
            return false;
        });
        select.mouseup(function(){
            select.find('select').focus();
        });
        select.find('.az-options div[data-val]').click(function(){
            select.find('select').val($(this).attr('data-val'));
        });
        select.find('select').focusout(function(){
            if(!select.is(':hover')){
                select.find('.az-options').slideUp(0);
                select.removeClass('az-select-focus');
            }
        });
    });

    $(".az-select").click(function(){
        $(this).find('.az-options').slideToggle(0);
        $(this).toggleClass('az-select-focus');
    });

    $(".payment__checkbox").on("click", function(){
        $(this).closest(".payment__check-block").toggleClass("checked__box").siblings().removeClass("checked__box");
    })
    $(".checkbox").on("click", function(){
        if($(this).parent().parent().hasClass("dc-li")) {
            $(this).parent().parent().toggleClass("checked__box").siblings().removeClass("checked__box");
            $(this).parent().parent().parent().parent().parent().parent().parent().find(".button-4").toggleClass("hover");
        }
        else if($(this).parent().parent().hasClass("dc-li1")) {
            $(this).parent().parent().toggleClass("checked__box1").siblings().removeClass("checked__box1");
            $(this).parent().parent().parent().parent().parent().parent().parent().find(".button-4").toggleClass("hover");
        }
    })

    $("select option[value=1]").hide();

    // Changing language (showing options)

    (function () {
        var showList = false;
        $(".header__language_btn").click(function (e) {
            e.preventDefault();

            var list = $(".header__language_list");

            var language = window.location.pathname;

            if (language == "en"){
                $(this).css({"background-image":"../img/eng.png"})
            } else {
                $(this).css({"background-image":"../img/russia.png"})
            }

            if (!showList){
                list.css({"display":"flex"});
                showList = true;
            } else {
                list.css({"display":"none"});
                showList = false;
            }
        })
    })();
    $(".phone").mask("+ 7 (999) 999 - 99 - 99?");
    $(".form11").submit(function() { 
      var tel = $(this).find('input[name="user__phone"]');
      var empty = false;
      if (tel.val() == ""){
        empty = true;
    }
    if (empty == true){
        tel.addClass("error-input");
        tel.focus();
    }else{
        var form_data = $(this).serialize(); 
        $.ajax({
          type: "POST", 
          url: "/sendmessage.php", 
          data: form_data,
          success: function() {
            cleanTnanks(this);
        }
    });
    }
    return false;
});

    var basketNumber = $(".basket__number"),

    onepriceArray = [],
    totalInput = $(".basket__totalprice-text"),
    numberInput = $('.number__input'),
    totalprice = 0;


        onepriceArray = [],
        totalInput = $(".basket__totalprice-text"),
        numberInput = $('.basket__list .number__input'),
        totalprice = 0;

    for(var i=0; i<basketNumber.length;i++) {
        onepriceArray.push($(basketNumber[i]).text());
    }
    $(".df-number .dfbutton").on("click", function() {

        var totalInputOne = $(this).parent().parent().parent().find(".basket__totalprice-text"),
        inputParent = $(this).parent().parent().parent(),
        inputId = $(inputParent).attr("class");
        var inputIdLength;
        if (inputId) {
            inputIdLength = inputId[inputId.length-1];

            var idx = inputId[inputId.length-1];
            $(totalInputOne).text(onepriceArray[inputIdLength]);
            if(totalprice == 0)
                totalprice = parseFloat(onepriceArray[idx-1]);

            var inputParent = $(this).parent().parent().parent(),
                inputId = $(inputParent).attr("class"),
                inputIdLength = inputId[inputId.length-1],
                totalInputOne = totalInput[inputIdLength - 1];
                console.log(totalInputOne);
                $(totalInputOne).text(onepriceArray[inputIdLength]);
            if(totalprice == 0)
                totalprice = parseFloat(onepriceArray[inputIdLength]);

            var $button = $(this);
            var oldValue = $button.parent().find(".number__input").val();
            if ($button.attr("mark") == "+") {
                    var newVal = parseFloat(oldValue) + 1;
                    $(numberInput[inputIdLength-1]).val(newVal);
                    totalprice += parseFloat(onepriceArray[inputIdLength]);
                    $(totalInputOne).text(totalprice + '$');
            }
            else {
                if (oldValue > 1) {
                    var newVal = parseFloat(oldValue) - 1;
                    $(numberInput[inputIdLength-1]).val(newVal);
                    totalprice -= parseFloat(onepriceArray[inputIdLength]);
                    $(totalInputOne).text(totalprice +'$');
                }
            }
        }
    });
    $(".close__btn").on("click", function() {
       $(this).closest(".basket__item").empty();
   });

    // Каталог......................................//
    $('.tab a').click(function(e) {
        e.preventDefault();
        $('a').removeClass('active');
        $(this).addClass('active');
        var tab = $(this).attr('href');
        $('.t1').not(tab).css({'display':'none'});
        $(tab).fadeIn(400);       
    });
    $('.tab a:first').click();

    $(".df-number .dfbutton").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();  

        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        }  
        else {
     // Don't allow decrementing below zero
     if (oldValue > 1) {
        var newVal = parseFloat(oldValue) - 1;
    } else {
        newVal = 1;
    }
}

$button.parent().find("input").val(newVal);
});
    $(function() {
        $(".dd-a-border").click(function(e){
            e.preventDefault();
            var $this = $(this);
            answerId = $this.attr("href");

            if( !$this.hasClass("active")){
                $(".dd-sub-menu").slideUp();
                $(".dd-a-border").removeClass("active");
            }

            $this.toggleClass("active"); 
            $(answerId).slideToggle();

        });
    });
});


