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
});
// função acima serve para o menu mobile 
