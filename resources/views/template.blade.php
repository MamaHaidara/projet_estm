<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Evaluations EC</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<title>@yield('titre')</title>
<style>
  #button1:hover, #button2:hover{
    border: 1px ;
    border-radius: 4px; 
    background-color: green; 
  }

  #lien1:hover, #lien2:hover
  {
    color: white ;
  }

</style>

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-secondary" id="navbar">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand fw-bold fs-3 text-success text-uppercase" href="/">Gestion EC's</a>
            <div class="offset-1">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                    <li id="button1" class="nav-item dropdown offset-1">
                      <a id="lien1" class="nav-link dropdown-toggle text-uppercase fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Lister
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('utilisateurs.index') }}">les utilisateurs</a></li>
                        <li><a class="dropdown-item" href="{{ route('formations.index') }}">les Formations</a></li>
                        <li><a class="dropdown-item" href="{{ route('EtreResponsables.index') }}" >les responsables</a></li>
                        <li><a class="dropdown-item" href="{{ route('evaluers.index') }}">les évaluations</a></li>
                        <li><a class="dropdown-item" href="{{ route('ECS.index') }}">les EC</a></li>
                        <li><a class="dropdown-item" href="{{ route('UES.index') }}">les UE</a></li>
                        <li><a class="dropdown-item" href="{{ route('classes.index') }}">les classes</a></li>
                        <li><a class="dropdown-item" href="{{ route('inscrires.index') }}">les inscrits</a></li>
                        <li><a class="dropdown-item" href="{{ route('enseigners.index') }}">les enseignements</a></li>
                      </ul>
                    </li>
                    <li id="button2" class="nav-item dropdown offset-1">
                        <a id="lien2"  class="nav-link text-uppercase fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Ajouter
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('utilisateurs.create') }}">Un utilisateur</a></li>
                          <li><a class="dropdown-item" href="{{ route('formations.create') }}">Une formation</a></li>
                          <li><a class="dropdown-item" href="{{ route('EtreResponsables.create') }}">Un responsable</a></li>
                          <li><a class="dropdown-item" href="{{ route('evaluers.create') }}">Une évaluation</a></li>
                          <li><a class="dropdown-item" href="{{ route('ECS.create') }}">Un EC</a></li>
                          <li><a class="dropdown-item" href="{{ route('UES.create') }}">Une UE</a></li>
                          <li><a class="dropdown-item" href="{{ route('classes.create') }}">Une classe</a></li>
                          <li><a class="dropdown-item" href="{{ route('inscrires.create') }}">Une inscription</a></li>
                          <li><a class="dropdown-item" href="{{ route('enseigners.create') }}">Un enseignement</a></li>
                        </ul>
                      </li>
                  </ul>
            </div>
          </div>
        </div>
      </nav>
<section>    
    <div class="my-5">
        @yield('contenu')
    </div>
</section>


<div class="mt-5" th:fragment="footer">

    <footer class="bg-dark text-center text-lg-start text-white">
      <!-- Grid container -->
      <div class="container p-4 ">
        <!--Grid row-->
        <div class="row mt-4">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase btn btn-success">
                <a href="/" class="text-white fw-bold">GESTIONEC'S</a>
            </h5>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Nos parténaires</h5>
  
            <ul class="list-unstyled align-center">
              <li>
                <a href="https://www.estm.sn/" target="blank" class="text-white">ESTM</a>
              </li>
              <li>
                <a href="https://esp.sn/" target="blank" class="text-white">ESP</a>
              </li>
              <li>
                <a href="https://mesr.gouv.sn/" target="blank" class="text-white text-break">MESR</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Liens utiles</h5>
  
            <ul class="list-unstyled align-center">
              <li>
                <a href="#" class="text-white">....</a>
              </li>
              <li>
                <a href="#" class="text-white">....</a>
              </li>
              <li>
                <a href="#" class="text-white text-break">....</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Nos réseaux sociaux</h5>
  
            <ul class="list-unstyled mt-4 list-inline">
              <li class="list-inline-item px-2">
                <a href="#!" class="text-white"><i class="bi bi-facebook h3"></i></a>
              </li>
              <li class="list-inline-item px-2">
                <a href="#!" class="text-white"><i class="bi bi-twitter-x h3"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#!" class="text-white"><i class="bi bi-linkedin h3"></i></a>
              </li>
              <li class="list-inline-item px-2">
                <a href="#!" class="text-white"><i class="bi bi-google h3"></i></a>
              </li>
              <li class="list-inline-item px-2">
                <a href="#!" class="text-white"><i class="bi bi-github h3"></i></a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2023 Copyright:
        <a class="text-white" href="https://gestock.com/">www.gestionec.com</a>
      </div>
      <!-- Copyright -->
    </footer>
  
  </div>
  <!-- End of .container -->


<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
</body>
</html>
