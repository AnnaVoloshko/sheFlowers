function buttonOnClick(){
    var block=document.getElementById('hidded-blok');
        style=block.style;
        button=document.getElementsByClassName('button__more-info');
        buttonStyle=button[0].style;

    style.display="block";
    buttonStyle.display="none";
}

function filterVisiable(){
    var filter=document.getElementsByClassName('filter__hidden');
        filterStyle=filter[0].style;

    filterStyle.display="block";
}

function registration(){
    var registrVisible=document.getElementsByClassName('registration-form');
        styleRegistr=registrVisible[0].style;

    styleRegistr.display="block";
}

function registrationClose(){
    var registrClose=document.getElementsByClassName('registration-form');
        styleRegistrClose=registrClose[0].style;

    styleRegistrClose.display="none";
}

function basketVisiable(){
    var basketVisible=document.getElementsByClassName('basket-form');
        styleBasket=basketVisible[0].style;

    styleBasket.display="block";
}
function basketClose(){
    var basketClose=document.getElementsByClassName('basket-form');
        styleBasketClose=basketClose[0].style;

    styleBasketClose.display="none";
}

