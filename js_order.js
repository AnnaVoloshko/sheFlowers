$(document).ready(function(){
    $("#buy").click(function(){
        $.ajax({
            type:"post",
            url: '/func.php',
            data:{
                'name':$('#name_prod').html(),
                'type':$(this).attr('data-type'),
                'id_product':$(this).attr('data-val'),
                'cost':$(this).attr('data-cost'),
                'add_backet':1
            },
            success:function(data){
                console.log(data);
                alert('Товар добавлен в корзину!');
            }
        });
    });
});