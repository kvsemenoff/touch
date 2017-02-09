

$(document).ready(function(){
    $('.header__menu_mobile').click(function(e){
            e.preventDefault();
            $('.section_padding-db-header_bottom2').slideToggle();
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

    let basketNumber = $(".basket__number"),
        onepriceArray = [],
        totalInput = $(".basket__totalprice-text"),
        numberInput = $('.number__input'),
        totalprice = 0;

    for(let i=0; i<basketNumber.length;i++) {
        onepriceArray.push($(basketNumber[i]).text());
    }
    $(".df-number .dfbutton").on("click", function() {
        var totalInputOne = $(this).parent().parent().parent().find(".basket__totalprice-text"),
            inputParent = $(this).parent().parent().parent(),
            inputId = $(inputParent).attr("class"),
            inputIdLength = inputId[inputId.length-1];
            $(totalInputOne).text(onepriceArray[inputIdLength]);
        if(totalprice == 0)
            totalprice = parseFloat(onepriceArray[inputIdLength]);
        var $button = $(this);
        var oldValue = $button.parent().find(".number__input").val();
        if ($button.attr("mark") == "+") {
                var newVal = parseFloat(oldValue) + 1;
                $(numberInput[inputIdLength]).val(newVal);
                totalprice += parseFloat(onepriceArray[inputIdLength]);
                $(totalInputOne).text(totalprice + '$');            
        }
        // else {
        //     if (oldValue > 1) {
        //         var newVal = parseFloat(oldValue) - 1;
        //         $(numberInput[inputIdLength]).val(newVal);
        //         totalprice -= parseFloat(onepriceArray[inputIdLength]);
        //         $(totalInputOne).text(totalprice +'$');
        //     }
        // }
     })
    $(".close__btn").on("click", function() {
       $(this).closest(".basket__item").empty();
    })
 });


