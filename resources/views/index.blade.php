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
</main>

<section class="container-fluid hero d-flex align-items-center justify-content-center">
    <div class="text-center text-white fw-semibold py-5">
        <div class="my-5">
            <h1>CRIAÇÃO DE SITES PARA PROFISSIONAIS LIBERAIS</h1>
        </div>
        <div class="separador mx-auto my-5"></div>
        <div>
            <h4 class="my-4">A Barezzi Services ajuda Profissionais Autonomos e Liberais a encontrarem mais clientes através da Internet.</h4>
        </div>
        <button class="hero-button px-4 py-3 fw-semibold fs-5 mx-auto my-5 bg-transparent">
            <a class="text-decoration-none text-light text-uppercase" href="./servicos.html">Saiba Mais</a>
        </button>
    </div>
</section>

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