@extends('layout')

@section('body')
<section id="contact" class="contact">
    <div class="container">

        <div class="section-header">
            <h2>Fale Conosco</h2>
            <p>Este canal não informa sobre situação específica de contribuinte, que exija análise de documentação, questões que envolvam sigilo fiscal ou assuntos não listados nos quadros Cidadão e Empresa.</p>
        </div>

    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div><!-- End Google Maps -->

    <div class="container">

        <div class="row gy-5 gx-lg-5">

            <div class="col-lg-4">

                <div class="info">
                    <h3>Entre em contato</h3>
                    <p>Sugestões, dúvidas ou reclamações envie-nos um e-mail.</p>

                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>Asa Sul - Setor de Clubes, Brasília, DF 72155814</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>contato@barezzi.com.br</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Ligue:</h4>
                            <p>+55 61 99694-6810</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>

            <div class="col-lg-8">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" placeholder="Mensagem" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>
</section>
@endsection