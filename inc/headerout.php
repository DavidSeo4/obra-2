<style>
  .buscador{
    margin-right: 30px;
  }

  .nav-item+:hover{
    text-decoration:underline;
  }

</style>


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
      <div class="container-fluid">
        <a class="navbar-brand mx-4" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg></a>




        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="input-group">
            <input class="form-control border rounded-start" type="text" placeholder="..." id="example-search-input" alt="Barra de búsqueda">
            <span class="input-group-append">
            <button  class="btn btn-secondary rounded-0 rounded-end buscador" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"  class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
            </button>
        </span>
          </div>
        </form>

      </div>
  </div>
</nav>
