<?session_start();?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>she.flowers.ua</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/style__basket.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="cover-blok">
                <a href="sheFlowers.html" class="logo"><img src="http://x-lines.ru/letters/i/cyrillicscript/2779/000000/42/0/kpwgkengptzzq3m1qc.png"></a>
                <nav class="nav">
                    <ul class="nav__menu">
                        <li class="li dropdown">Товары
                            <ul class="menu__submenu types">
                                <li class="submenu-li"> <a href="flowers/flowers.html" class="link--1">Букеты</a> </li>
                                <li class="submenu-li"> <a href="candles/candles.html" class="link--1">Свечи</a> </li>
                                <li class="submenu-li"> <a href="aroma/aroma.html" class="link--1">Саше</a> </li>
                            </ul>
                        </li>
                        <li class="li dropdown">Информация
                            <ul class="menu__submenu">
                                <li class="submenu-li"> <a href="pay-info.html" class="link--1">Оплата</a> </li>
                                <li class="submenu-li"> <a href="delivery.html" class="link--1">Доставка</a> </li>
                            </ul>
                        </li>
                        <li class="li"><a href="about-us.html" class="link">О нас</a></li>
                        <div class="fas fa-shopping-basket"></div>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


    <main class="main">

        <?if(!empty($_SESSION['my_cart'])):?>
            <div class="container">
            <div class="basket__title">Оформление заказа</div>
            <div class="basket__container">
                <div class="cart-list">
                    <table>
                        <thead>
                            <tr class="table">
                                <td></td>
                                <td class="table">Стоимость</td>
                                <td class="table">Кол-во</td>
                                <td class="table">Сумма</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody id="cart_ordering_content">
                            <?
                            foreach($_SESSION['my_cart'] as $arr_prod):?>

                                <tr>
                                    <td class="goods align">
                                        <img src="../images/<?=$arr_prod['type']?>/<?=$arr_prod['type']?>_buy_<?=$arr_prod['id_prod']?>.jpg" width="100px">
                                        <div class="item-props">
                                            <div class="name"><?=$arr_prod['name']?></div>
                                        </div>
                                    </td>
                                    <td class="goods cost_cur" data-val="<?=$arr_prod['cost']?>" id="cost_<?=$arr_prod['id_prod']?>"><?=$arr_prod['cost']?> грн.</td>
                                    <td class="goods">
                                        <input type="number" style="outline:none"min="1" class="cost " value="1" data-row-id="5cd0d62d7cec0dd9ab3110af2f9254c7"
                                               data-id="<?=$arr_prod['id_prod']?>">
                                    </td>
                                    <td class="goods all_cost_prod" data-val="<?=($arr_prod['cost'])?>" id="pluc_col_<?=$arr_prod['id_prod']?>"><?=($arr_prod['cost'])?> грн.</td>
                                    <td  class="goods">
                                        <a href="javascript:void(0);" data-val="<?=$arr_prod['id_prod']?>" class="del_prod">
                                            <img src="https://www.kvitopolito.com/img/delete-cart-item.png">
                                        </a>
                                    </td>
                                </tr>
                            <?endforeach?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="cover-blok cover-blok--2">
                <div class="buy-blok">
                    <div class="buy-blok__title">Контактные данные</div>
                    <input type="text" name="name" class="buy-blok__name" placeholder="Ваше имя и фамилия">
                    <input type="email" name="email" class="buy-blok__email" placeholder="Ваш адрес электронной почты">
                    <input type="phone" name="phone" class="buy-blok__phone" placeholder="Ваш номер телефона">
                    <div class="buy-blok__check">
                        <input type="checkbox" id="mailing" class="mailing">
                        <label for="mailing" class="check__checkbox">Я соглашаюсь на рассылку новостей сайта</label>
                    </div>
                </div>
                <div class="all-delivery-cost clearfix">
                    <div class="left">
                        <div class="products-cost">
                            Стоимость товаров: <span id="product_bottom_cost" data-cost="1094">165 грн</span>
                        </div>
                        <div class="delivery-cost">
                            Стоимость доставки: <span id="delivery_bottom_cost">по тарифам почты</span>
                        </div>
                    </div>
                    <div class="full-cost">
                        <div class="full-cost__text">
                            К оплате: <span id="total_bottom_count">165 грн</span></div>
                        <a href="" class="btn btn--2 right" id="ordering_btn" >оформить заказ</a>
                    </div>
                </div>
            </div>


            <div class="contact-with-us">
                <div class="contact-with-us__title">Задать вопрос</div>
                <form id="contactForm" class="main-blok" action="handler.php" method="POST">
                    <input id="theme" type="text" name="theme" placeholder="Введите тему вашего вопроса" class="main-blok__input">
                    <input id="email" type="email" name="email" placeholder="Введите ваш электронный адрес" class="main-blok__input">
                    <textarea id="message" rows="4" type="text" name="question" placeholder="Задайте ваш вопрос" class="main-blok__input"></textarea>
                    <button id="button" class="button__question" type="submit">Отправить</button>
                    <div class="result">
                        <span id="answer"></span>
                        <span id="loader"><img src="images/loader.gif" alt=""></span>
                    </div>
                </form>
            </div>
        </div>
        <?else:?>
            <div class="basket__title">Корзина пуста!</div>
        <?endif?>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="some-info">
                <div class="some-info__blok">
                    <i class="fas fa-map-marker-alt"></i>
                    <p class="blok__location title">Шоу рум</p>
                    <p class="blok__location">Украина, г. Одесса,</p>
                    <p class="blok__location">ул. Преображенская, 34</p>
                </div>
                <div class="some-info__blok">
                    <i class="fas fa-mobile-alt"></i>
                    <p class="blok__contacts title">Контакты</p>
                    <p class="blok__contacts">+38 097 942 73 73</p>
                    <p class="blok__contacts">+38 063 476 50 99</p>
                </div>
                <div class="some-info__blok">
                    <i class="fas fa-user-friends footer"></i>
                    <p class="blok__social-network title">Социальные сети</p>
                    <div class="blok__social-network">
                        <a href="https://instagram.com/she.flowers.ua?igshid=1pt9jz3irooej" class="fab fa-instagram"></a>
                        <a href="https://www.facebook.com/she.flowers.ua/" class="fab fa-facebook-f left"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" ></script>
<script src="../buttonClick.js"></script>
    <script>
        $(document).ready(function(){
            all_costs = 0;
            $(".all_cost_prod").each(function(){

                all_costs += parseInt($(this).attr('data-val'));
                $("#total_bottom_count").html(all_costs+ " грн.");
                $("#product_bottom_cost").html(all_costs+ " грн.");
            });

            $(".cost").change(function(){
                var id_prod = $(this).attr("data-id");


                $("#pluc_col_"+id_prod).html(
                    $(this).val()*$("#cost_"+id_prod).attr('data-val')+ " грн."
                );

                $("#pluc_col_"+id_prod).attr("data-val",
                    $(this).val()*$("#cost_"+id_prod).attr('data-val')+ " грн."
                );

                all_costs = 0;
                $(".all_cost_prod").each(function(){

                    all_costs += parseInt($(this).attr('data-val'));
                    $("#total_bottom_count").html(all_costs+ " грн.");
                    $("#product_bottom_cost").html(all_costs+ " грн.");
                });
            });

            $(".del_prod").click(function(){
                id_del = $(this).attr('data-val');
                but_del = $(this);

                $.ajax({
                    type:"post",
                    url: '/func.php',
                    data:{
                        'del_backet':id_del
                    },
                    success:function(data){
                        window.location.reload()
                    }
                });
            });

            $("#ordering_btn").click(function(e){
                e.preventDefault();

                var name = $(".buy-blok__name").val();
                var email = $(".buy-blok__email").val();
                var phone = $(".buy-blok__phone").val();

                if(name == "" || email == "" || phone == ""){
                    alert('Заполните контактные данные!');
                }
                else{
                    order = [];
                    $('tbody > tr').each(function(index){
                        order.push(
                            {
                                name:$(this).find(".name").html(),
                                cost:$(this).find(".cost_cur").html(),
                                num:$(this).find(".cost").val(),
                                all_cost:$(this).find(".all_cost_prod").html()
                            }
                        )
                    });

                    $.ajax({
                        url:'/func.php',
                        type:'post',
                        data:{
                            name:name,
                            email:email,
                            phone:phone,
                            mailing: $("#mailing").prop('checked'),
                            all_order:$("#total_bottom_count").html(),
                            order:JSON.stringify(order),
                            create_order: '1'
                        },
                        success:function(data){
                            //console.log(data);
                            if(data == '1'){
                                alert('Заказ оформлен!');
                                window.location.reload();
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>