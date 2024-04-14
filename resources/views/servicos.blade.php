@extends('layout')

@section('body')
    <section id="team" class="team">
        
        <div class="section-header">
            <h2>Our Team</h2>
            <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
        </div>
        
        <div class="container" data-aos="fade-up">

            <div class="row gy-5">

                <div class="col-xl-4 col-md-6 d-flex">
                    <div class="team-member">
                    <div class="member-img">
                        <img src="assets/img/team01.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                        <h4>Gelson Nobre</h4>
                        <span>Chief Executive Officer</span>
                    </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
                    <div class="team-member">
                    <div class="member-img">
                        <img src="assets/img/team02.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                        <h4>Lucas Junio</h4>
                        <span>Product Manager</span>
                    </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
                    <div class="team-member">
                    <div class="member-img">
                        <img src="assets/img/team03.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                        <h4>João Paulo</h4>
                        <span>CTO</span>
                    </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

      </div>
    </section>
@endsection