

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

 });


