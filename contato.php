<?php 
    include 'header/index.php';
    include 'header/menu.php';
?>
<main>
    <div class="container-fluid ">
        <div class="row cabecalho-contato">
            <div class="col-12 text-contato d-flex justify-content-center">
            </div>
            <div class="col-12 formulario-contato d-flex flex-column align-items-center ">
                <h1 class="text-white text-center">Contato</h1>
                <h3 class="text-white text-center">Fale Com a Up</h3>
                <p class="text-white text-center">Para conhecer nossas soluções, tirar dúvidas, solicitar orçamentos e melhorar a segurança da sua em</p>
                <form>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NOME:">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="TELEFONE:">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-MAIL:">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="EMPRESA:">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CARGO:">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CIDADE:">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="DEIXE SUA MENSAGEM:"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-3">Enviar</button>
                </form>
            </div>
            <div class="col-12 text-center text-white contato">
                <h1 class="text-uppercase">Contatos</h1>
                <p class="mb-0">E-MAIL</p>
                <p>comercial@underprotection.com.br</p>
                <h4 class="text-uppercase">Contatos</h4>
                <ul>
                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-12 d-flex justify-content-center text-white telefones">
                <h1 class="text-uppercase mt-3">Telefones</h1>
            </div>   
            <div class="curitiba text-white col-6">
                <h5>Curitiba</h5>
                <p>+55 (41) 3051-8450</p>
                <div class="joinville">
                    <h5>Joinville</h5>
                    <p>+55 (47) 4063-9485</p>
                </div>
            </div>
            <div class="sao-paulo text-white col-6">
                <h5>São Paulo</h5>
                <p>+55 (11) 3522-8008</p>
                <div class="">
                    <h5>Porto Alegre</h5>
                    <p>+55 (51) 4063-8814</p>
                </div>
            </div>
            <div class="col-12 fale-conosco text-white"> 
                <h1 class="text-uppercase">Fale Com a DPO</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni voluptatem ipsam ipsum? Facilis</p>
                <span>Envie sua solititação atraves do formulario abaixo:</span>
                <p class="link-contato"><a href="#">link de formulario</a></p> 
            </div>
        </div>
    </div>
</main>
<?php 
    include 'footer/index.php';  
?>