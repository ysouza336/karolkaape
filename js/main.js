$().ready(function(){
    //botao do menu
        $('.abrir').click(function(){
            $(this).addClass('d-none');
            //adiciono a classe block no X
            $('.fechar').addClass('d-block');
            $('.menu').addClass('open');
            $('body').addClass('overflow-hidden');
        });
        $('.fechar').click(function(){
            $(this).removeClass('d-block');//aqui para fechar o menu
            $('.menu').removeClass('d-block open').show('slow');//aqui para fechar o menu
            $('.abrir').removeClass('d-none');//para aparecer o menu 
            $('body').removeClass('overflow-hidden');
        });
});
// função acima serve para o menu mobile 
