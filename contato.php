<?php 
    include 'header/index.php';
    include 'header/menu.php';
?>
<main>
    <div class="container-fluid ">
        <div class="row cabecalho-contato">
            <!-- teste da linha com as redes sociais vertical-->
            <div class="col-12 linha-redes d-none text-white">
                <ul class="">
                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <!-- aqui fecha-->
            <div class="col-12 d-flex justify-content-center text-contato">
                <h1 class="text-white text-center mt-md-2">Contato</h1>
            </div>
            <div class=" formulario-contato col-lg-8">
                <h3 class="text-white text-center">Fale Com a Up</h3>
                <p class="text-white text-center">Para conhecer nossas soluções, tirar dúvidas, solicitar orçamentos e melhorar a segUrança da sua empresa, fale com a <strong>Under Protection</strong>.</p>
                <form class="row">
                    <div class="mb-2 col-12">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="text" class="form-control"  placeholder="NOME:" require>
                    </div>
                    <div class="col-12 mb-2">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="text" class="form-control"  placeholder="TELEFONE:" require>
                    </div>
                    <div class="col-12 mb-2">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="text" class="form-control"  placeholder="E-MAIL:" require>
                    </div>
                    <div class="col-12 mb-2">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="text" class="form-control"  placeholder="EMPRESA:" require>
                    </div>
                    <div class="col-12 col-md-6 mb-2">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="text" class="form-control"  placeholder="CARGO:" require>
                    </div>
                    <div class="col-12 col-md-6 mb-2">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="text" class="form-control"  placeholder="CIDADE:" require>
                    </div>
                    <div class="col-12 mb-2">
                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="DEIXE SUA MENSAGEM:" require></textarea>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-12 text-white d-flex justify-content-center">
                <h4 class="text-uppercase">Contatos</h4>
            </div>
            <div class="col-12 col-md-6 text-center text-white contato align-self-md-center">  
                <p class="mb-0">E-MAIL</p>
                <p>comercial@underprotection.com.br</p>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center flex-column text-white telefones">
                <h4 class="text-uppercase text-center mt-3">Telefones</h4>  
                <div class="col-12 d-flex">
                    <div class="curitiba text-white col-md-6 ms-auto">
                        <h5>Curitiba</h5>
                        <p>+55 (41) 3051-8450</p>
                        <div class="joinville">
                            <h5>Joinville</h5>
                            <p>+55 (47) 4063-9485</p>
                        </div>  
                    </div>
                    <div class="sao-paulo text-white col-md-6 ms-auto me-auto">
                        <h5>São Paulo</h5>
                        <p>+55 (11) 3522-8008</p>
                        <div class="porto-alegre">
                            <h5>Porto Alegre</h5>
                            <p>+55 (51) 4063-8814</p>
                        </div>
                    </div>  
                </div> 
            </div>   
            <div class="col-12 fale-conosco text-white"> 
                <h4 class="text-uppercase">Fale Com a DPO</h4>
                <p class="text-dpo">A DPO (Data Protection Officer) é a área responsável pelo tratamento dos dados na Under Protection. Para saber mais informações, acessar, corrigir, restringir, excluir, realizar a portabilidade, conhecer sobre ou revogar o consentimento a respeito de qualquer tratamento realizado com os seus dados pessoais, fale com a DPO.  </p>
                <span>Envie sua solititação através do formulario abaixo:</span>
                <p class="link-contato"><a href="#">https://bo.underprotection.com.br/form/4618/ </a></p> 
            </div>
        </div>
    </div>
</main>
<?php 
    include 'footer/index.php';  
?>