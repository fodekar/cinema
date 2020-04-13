<style type="text/css">
    header {
        position: fixed;
        background: #563d7c !important;
        text-transform: uppercase;
        background-color: #563d7c;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,.05), inset 0 -1px 0 rgba(0,0,0,.1);
        z-index: 100000;
        top: 0;
        right: 0;
        border: 0;
        width: 100%;
    }

    .btn-outline-success{
        color: #fff !important;
        border-color: #fff !important;
    }

    .bg-light{
        background: #563d7c !important;
    }

    .navbar-light .navbar-brand{
        color: #fff !important;
    }

    .nav-link{
        color: #fff !important;
    }

    header h1 {
        font-weight: 100;
        color: #fff !important;
        padding: 5px 10px 10px 10px;
    }

</style>

<header>

    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Cinémathèque</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
    </form>
  </div>
</nav>
</header>