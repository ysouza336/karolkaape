<?php    
    include "./header/index.php";
    include "./header/menu.php";
?>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 img-fluid" src="./imgs/Posts/post-1.png" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="./imgs/Posts/post-2.png" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="./imgs/Posts/post-3.png" alt="Terceiro Slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>
        </div>
      </div>
      <!-- formulario de contato -->
      <div id="contato" class="row">
        <form class="col-12 col-md-6 ml-md-auto mr-md-auto">
            <h1 class="mt-2 contato text-center">Contato</h1>
            <div class="mb-3">
                <input type="text" class="form-control"  placeholder="Nome">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Telefone" >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Email" >
            </div>
            <div class="mb-3">
                <textarea class="form-control"  rows="4" placeholder="Mensagem" ></textarea>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mb-2">Enviar</button>
            </div>
        </form>
      </div>
    </div>
  </main>
<?php   
  include "./footer/index.php";
?>