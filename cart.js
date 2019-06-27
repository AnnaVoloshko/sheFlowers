var card={}; //корзина
checkCard();
showCard();

function showCard(){
    var out='';
    for (var art in card){
        out += art + '---' +card[art]+'<br>';
        out += card[art];
    }
    $('.mini-card').html(out);
}


function checkCard(){
    //наличие корзины в localStorage
    if (localStorage.getItem(card) != null) {
        card = parse(localStorage.setItem('card'));
    }
}