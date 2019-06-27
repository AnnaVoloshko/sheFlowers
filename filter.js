$(document).ready(function(){
    $(".list__price_order").change(function(){

        //Собираю все значения в чекбоксах
        filter_costs = [];
        $(".list__price_order").each(function(index){
            if($(this).prop('checked') === true){
                filter_costs.push($(this).siblings('label').attr('data-cost'));
            }
        });

        //Все блоки скрыть
        $(".cards-blok__cards").hide();


        if(filter_costs.length == 0){
            //Если чекбоксы пустые
            $(".cards-blok__cards").show();
            $(".flex").css('justify-content','space-between');
            $(".cards-blok__cards").css({'margin-left':'0px','margin-right':'0px'});
            $(".cards-blok__cards").each(function(){
                $(this).removeClass('not_hidden');
                if($(this).hasClass('hidden')){
                    $(this).hide();
                }
            });
            $("#new_cart").show();
            return false;
        }
        else{
            //
            console.log(filter_costs);
            $(".cards-blok__cards").each(function(){
                $(this).removeClass('not_hidden');
                for (i = 0; i < filter_costs.length; i++) {
                    //Искать среди тех которые есть в наличие
                    if(!$(this).hasClass('false')){
                        if ($(this).attr('id') == filter_costs[i] ) {
                            $(this).show();
                            $(this).addClass('not_hidden');
                        }
                    }
                }
            });
        }


        //Магия! Чтобы все блоки становились ровно
        if($(".cards-blok__cards.not_hidden").length % 3 == 0){
            $(".cards-blok__cards").css({'margin-left':'0px','margin-right':'0px'});
            $(".flex").css('justify-content','space-between');
        }
        else{
            $(".flex").css('justify-content','flex-start');
            col = Math.ceil($(".not_hidden").length / 3)
            index_o = -2;
            $(".cards-blok__cards").css({'margin-left':'0px','margin-right':'0px'});
            for(i=0;i<col;i++){
                index_o += 3;
                $(".cards-blok__cards.not_hidden").eq(index_o).css('margin-right', '45px');
                $(".cards-blok__cards.not_hidden").eq(index_o).css('margin-left', '45px');
            }
        }
        //Скрыть кнопку показать еще
        $("#new_cart").hide();
    });


    $("#new_cart").click(function(){
        $(".cards-blok__cards").each(function(){
            $(".cards-blok__cards").show();
        });
        $(this).hide();
    });
});

function ShowNotFalse(){
    //Собираю все значения в чекбоксах
    filter_costs = [];
    $(".in__store").each(function(index){
        if($(this).prop('checked') === true){
            filter_costs.push($(this).siblings('label').attr('data-cost'));
        }
    });

    filter_costs1 = [];
    $(".list__price_order").each(function(index){
        if($(this).prop('checked') === true){
            filter_costs1.push($(this).siblings('label').attr('data-cost'));
        }
    });

    if(filter_costs1.length == 0){
        $(".cards-blok__cards").hide();


        if(filter_costs.length == 0){
            //Если чекбоксы пустые
            $(".cards-blok__cards").show();
            $(".flex").css('justify-content','space-between');
            $(".cards-blok__cards").css({'margin-left':'0px','margin-right':'0px'});
            $(".cards-blok__cards").each(function(){
                $(this).removeClass('not_hidden');
                if($(this).hasClass('hidden')){
                    $(this).hide();
                }
            });
            $("#new_cart").show();
            return false;
        }
        else{

            $(".cards-blok__cards").each(function(){
                $(this).removeClass('not_hidden');

                if(!$(this).hasClass('false')){
                    $(this).show();
                    $(this).addClass('not_hidden');
                }
            });
        }


        //Магия! Чтобы все блоки становились ровно
        if($(".cards-blok__cards.not_hidden").length % 3 == 0){
            $(".cards-blok__cards").css({'margin-left':'0px','margin-right':'0px'});
            $(".flex").css('justify-content','space-between');
        }
        else{
            $(".flex").css('justify-content','flex-start');
            col = Math.ceil($(".not_hidden").length / 3)
            index_o = -2;
            $(".cards-blok__cards").css({'margin-left':'0px','margin-right':'0px'});
            for(i=0;i<col;i++){
                index_o += 3;
                $(".cards-blok__cards.not_hidden").eq(index_o).css('margin-right', '45px');
                $(".cards-blok__cards.not_hidden").eq(index_o).css('margin-left', '45px');
            }
        }
        //Скрыть кнопку показать еще
        $("#new_cart").hide();
    }
    

}