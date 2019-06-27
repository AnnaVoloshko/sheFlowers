var card = {}; //корзина

$('document').ready(function(){
    checkCard(); //проверка пустая ли корзина
    showMiniCard();
})

function addToBasket(){
    //добавляем товар в корзину
    var articul = $(this).attr('id');
    if (card[articul] != undefined) {
        card[articul]++;
    } else {
        card[articul] = 1;
    }
    localStorage.setItem('card', String(card));
    //console.log(card);
    showMiniCard();
}

function checkCard(){
    //наличие корзины в localStorage
    if (localStorage.getItem(card) != null) {
        card = parse(localStorage.setItem('card'));
    }
}

function showMiniCard(){
    //показывает содержимое корзины
    var out='';
    for (var art in card){
        out += art + '---' +card[art]+'<br>';
    }
    $('.mini-card').html(out);
}