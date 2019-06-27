<?php
session_start();

if(isset($_POST['add_backet'])){
    try{
        $flag= true;

        $tmp_arr =  [
            'type' => $_POST['type'],
            'name' => $_POST['name'],
            'id_prod'=> $_POST['id_product'],
            'cost'=> $_POST['cost'],
            'col' => '1',

        ];

        $cart = [];


        if(isset($_SESSION['my_cart'])){

            foreach ($_SESSION['my_cart'] as $v){
                if($v['id_prod'] == $tmp_arr['id_prod']){
                    die();
                }
            }

            $cart = $_SESSION['my_cart'];
        }

        array_push($cart,$tmp_arr);


        $_SESSION['my_cart'] =$cart;


        print_r($_SESSION['my_cart']);
        echo('1');
    }
   catch(Exception $e){
        echo('0');
   }

}

if(isset($_POST['del_backet'])){
    try{
        foreach ($_SESSION['my_cart'] as $k=>$v){
            if($v['id_prod'] == $_POST['del_backet']){
                unset($_SESSION['my_cart'][$k]);
            }
        }
        print_r($_SESSION['my_cart']);
        echo("1");
    }
    catch(Exception $e){
        echo("0");
    }
}

if(isset($_POST['create_order'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $all_order = $_POST['all_order'];


    $order = json_decode($_POST['order']);

    $mes_or = "";
    foreach ($order as $or){
        $mes_or .= $or->name." - ".$or->cost." - ".$or->num." шт. - ".$or->all_cost."\n";
    }

    $message = "Заказ с сайта!\nИмя: {$name}, Телефон: {$phone},\nEmail: {$email},\nЗаказ: {$mes_or} \nОбщая стоимость заказа: {$all_order}";

    $mailing = $_POST['mailing'];
    if ($mailing){
        $message .="\n Клиент подписался на рассылку новостей";
    }

   if( mail (  "avoloch19@gmail.com", "Тема письма", $message)){
       session_unset();
       echo('1');
   }
}