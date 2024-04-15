@extends('layout')

@section('body')
<main>
    <div id="carouselExampleControls" class="carousel slide w-100" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/img/b01.png" class="d-block w-100" alt="Imagem Barezzi 01">
            </div>
            <div class="carousel-item">
                <img src="/assets/img/b02.png" class="d-block w-100" alt="Imagem Barezzi 02">
            </div>
            <div class="carousel-item">
                <img src="/assets/img/barezzi03.jpg" class="d-block w-100" alt="Imagem Barezzi 03">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section id="about" class="about">
        
        <div class="section-header">
            <h2>Nossa historia</h2>
            <p>A Barezzi Services ajuda Profissionais Autonomos e Liberais a encontrarem mais clientes através da Internet.</p>
        </div>

        <div class="container" data-aos="fade-up">

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-5">
            <div class="about-img">
              <img src="/assets/img/about.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-7">
            <h3 class="pt-0 pt-lg-5">Um pequeno grupo de estudantes que decidiram inovar</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Coragem</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Mudança</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Simplicidade</a></li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">

                <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                </div>
                <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error voluptatem eum.</p>

              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">

                <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                </div>
                <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error voluptatem eum.</p>

              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">

                <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                </div>
                <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error voluptatem eum.</p>

              </div><!-- End Tab 3 Content -->

            </div>

          </div>

        </div>

      </div>
    </section>

    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-out">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Alias sunt quas <em>Cupiditate</em> oluptas hic minima</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn align-self-start" href="#">Call To Action</a>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="/assets/img/cta2.jpg" alt="" class="img-fluid">
            </div>
          </div>

        </div>

      </div>
    </section>

</main>

<!-- Serviços Barezzi -->

<section class="container-fluid d-flex flex-column align-items-center" id="servicos">
    <p class="h3 text-center text-light d-flex align-items-center" style="height: 100px;">Serviços</p>
    <div class="row d-md-flex d-lg-flex justify-content-center w-100">
        <a class="mb-3 col-12 col-md-6 mx-md-2" style="max-width: 26rem;" href="./servicos.html">

            <div class="card text-center text-bg-light" id="criacao">

                <div class="card-header text-center">
                    <h5 class="card-title text-uppercase text-info-emphasis">Criação de sites</h5>
                </div>
                <div class="card-body">
                    <i class="bi bi-display card-text text-info-emphasis"></i>
                    <p class="card-text">Institucionais, prontos para qualquer negócio.</p>
                </div>
                <div class="precos">
                    <p class="fs-5 fw-lighter lh-1">à vista</p>
                    <p class="fs-3 text-secondary lh-1"><strong>R$****,00</strong></p>
                    <p class="fs-5 fw-lighter lh-1">sob consulta</p>
                </div>
            </div>
        </a>

        <a class="mb-3 col-12 col-md-6 mx-md-2" style="max-width: 26rem;" href="./servicos.html">

            <div class="card text-center text-bg-light">
                <div class="card-header text-center">
                    <h5 class="card-title text-info-emphasis">Power Automate</h5>

                </div>
                <div class="card-body">
                    <i class="bi bi-cpu card-text text-info-emphasis"></i>
                    <p class="card-text">Automação rápida e segura.</p>
                </div>
                <div class="precos">
                    <p class="fs-5 fw-lighter lh-1">à vista</p>
                    <p class="fs-3 text-secondary lh-1"><strong>R$****,00</strong></p>
                    <p class="fs-5 fw-lighter lh-1">sob consulta</p>
                </div>
            </div>
        </a>
    </div>
    <div class="row d-md-flex d-lg-flex justify-content-center w-100">

        <a class="mb-3 col-12 col-md-6 mx-md-2" style="max-width: 26rem;" href="./servicos.html">
            <div class="card text-center text-bg-light">
                <div class="card-header text-center">
                    <h5 class="card-title text-info-emphasis">Power BI</h5>

                </div>
                <div class="card-body">
                    <i class="bi bi-boxes card-text text-info-emphasis"></i>
                    <p class="card-text">Capacidade de visualizar facilmente seus dados.</p>
                </div>
                <div class="precos">
                    <p class="fs-5 fw-lighter lh-1">à vista</p>
                    <p class="fs-3 text-secondary lh-1"><strong>R$****,00</strong></p>
                    <p class="fs-5 fw-lighter lh-1">sob consulta</p>
                </div>
            </div>
        </a>
        <a class="mb-3 col-12 col-md-6 mx-md-2" style="max-width: 26rem;" href="./servicos.html">
            <div class="card text-center text-bg-light">
                <div class="card-header text-center">
                    <h5 class="card-title text-info-emphasis">Consultoria</h5>

                </div>
                <div class="card-body">
                    <i class="bi bi-boxes card-text text-info-emphasis"></i>
                    <p class="card-text">Automação e Visibilidade na Web.</p>
                </div>
                <div class="precos">
                    <p class="fs-5 fw-lighter lh-1">à vista</p>
                    <p class="fs-3 text-secondary lh-1"><strong>R$****,00</strong></p>
                    <p class="fs-5 fw-lighter lh-1">sob consulta</p>
                </div>
            </div>
        </a>
    </div>
</section>
<div>
    <a href="https://wa.me/5561996946810?text=Olá%20vi%20os%20serviços%20no%20seu%20site,%20gostaria%20de%20mais%20informações." style="position:fixed;width:60px;height:60px;bottom:80px;right:20px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:40px;box-shadow: 1px 1px 2px #ffffff; z-index:1000;" target="_blank"><i style="margin: 10px 0 0 2px" class="fa fa-whatsapp"></i></a>
</div>
@endsection