$(document).ready(function(){
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items:1,autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,loop:true
    });
    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            },
        }
    })
    $("#blogs .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            
        }
    })

    $("#fab .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            },
        }
    });

    var $grid =$(".grid").isotope({
        itemSelector:'.grid-item',
        layoutMode:'fitRows'
    });
    $(".button-group").on("click","button",function(){
        var filterValue=$(this).attr('data-filter');
        $grid.isotope({filter:filterValue});
    })

    let $qty_up=$(".qty .qty-up");
    let $qty_down=$(".qty .qty-down");
    let $qty=1;
    let $deal_price=$('#deal_price');


    $qty_up.click(function(e){


        //ajax
        let $input=$(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price=$(`.product_price[data-id='${$(this).data("id")}']`);


        $.ajax({url:"template/ajax.php",type:'post',data:{id_item:$(this).data("id")},success:function (result){
            console.log(result);
            let obj = JSON.parse(result);
            let item_price=obj[0]['Prix_produit'];
                if($input.val()>=1 && $input.val()<=9){
                    $input.val(function(i,oldval){
                        return ++oldval;
                    })
                    $price.text(parseInt(item_price*$input.val()).toFixed(2));

                let subtotal = parseInt($deal_price.text())+parseInt(item_price);
                $deal_price.text(subtotal.toFixed(2));
                };
                
            }})
        return $qty=$input.val();

    });
    $qty_down.on("click",function(e){
        let $input=$(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price=$(`.product_price[data-id='${$(this).data("id")}']`);


        $.ajax({url:"template/ajax.php",type:'post',data:{id_item:$(this).data("id")},success:function (result){
                let obj = JSON.parse(result);
                let item_price=obj[0]['Prix_produit'];
                if($input.val()>1 && $input.val()<=10){
                    $input.val(function(i,oldval){
                        return --oldval;
                    })
                    $price.text(parseInt(item_price*$input.val()).toFixed(2));

                let subtotal = parseInt($deal_price.text())-parseInt(item_price);
                $deal_price.text(subtotal.toFixed(2));
                };
                
            }})

        return $qty=$input.val();
    });
    console.log($qty);
    //confirmer la commande
     $("#confirmer").click(function (){

         $.post({url:"ajax.php",type:'post',data:{action:$(this).val()},success:function (result){
             alert("Commande passer avec succé !!");
                 return result;
             }})
     });

   
     $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[1000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })
});