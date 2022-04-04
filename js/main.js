$().ready(function(){
    //botao do menu
        $('.abrir').click(function(){
            $(this).addClass('d-none');
            //adiciono a classe block no X
            $('.fechar').addClass('d-block');
            $('.fechar').removeClass('d-none')
            $('.menu-principal').addClass('open');
            $('body').addClass('overflow-hidden');
        });
        $('.fechar').click(function(){
            $(this).removeClass('d-block');//aqui para fechar o menu
            $('.menu-principal').removeClass('d-block open').show('slow');//aqui para fechar o menu
            $('.abrir').removeClass('d-none');//para aparecer o menu 
            $('.fechar').addClass('d-none');
            $('body').removeClass('overflow-hidden');
        });
    //sub-menus
      /*  $('.abrir-menu').click(function(){
            $(this).addClass('d-none');
            $('.fechar-menu').removeClass('d-none');
            $('.abrir-menu').addClass('fas fa-angle-down').show('slow');
            $('.fechar-menu').addClass('d-inline-block');

            
        });
        $('.fechar-menu').click(function(){
            $(this).addClass('d-none');
            $('.abrir-menu').removeClass('d-none');
            $('.fechar-menu').addClass('fas fa-angle-right').show('slow');
            $('.abrir-menu').addClass('d-inline-block');
            
        });*/
        $('.lisa-carroucel').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false,
            dots: true,
            dotsClass:"numeros-lisa"
        });

});
// função acima serve para o menu mobile 
