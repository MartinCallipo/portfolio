<header>
    <nav class="navbar navbar-expand-md">
      <div class="container">
        <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>

        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">
            <li class="nav-item">
              <a class="nav-link px-4 py-1 <?php echo ($pg == "home") ? "active" : "" ?>" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-1 <?php echo ($pg == "about-me") ? "active" : "" ?>" aria-current="page" href="about_me.php">About me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-1 <?php echo ($pg == "projects") ? "active" : "" ?>" aria-current="page" href="projects.php">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-1 <?php echo ($pg == "contact") ? "active" : "" ?>" aria-current="page" href="contact.php">Contact</a>
            </li>
          </ul>
          <form class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../contacto.php">ES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link activado" aria-current="page" href="">EN</a>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </nav>
  </header> 