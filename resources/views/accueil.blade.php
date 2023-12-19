@extends('../template')

@section('titre')
    Accueil
@endsection
@section('contenu')
    <section id="hero" class="d-flex align-items-center">

        <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">


            <img src="{{ asset('img/welcome.jpg') }}" class="img-fluid hero-img" alt="" data-aos="zoom-in"
                data-aos-delay="150">
        </div>

    </section><!-- End Hero -->
@endsection
