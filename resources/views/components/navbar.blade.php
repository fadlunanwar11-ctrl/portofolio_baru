    <nav class="navbar navbar-expand-lg navbar-dark fixed-top mask-custom shadow-0">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#!"><span style="color: yellow;">MADIN</span><span
            style="color: #fff;">Putra</span></a>
        <button class="navbar-toggler " type="button" data-mdb-collapse-init
          data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto ">
            <li class="nav-item">
              <a class="nav-link " href="/">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=/gallery>galery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('posts.index') }}">post</a>
            </li>
          </ul>
          <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="#!">
                <i class="fab fa-facebook-square"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="#!">
                <i class="fab fa-whatsapp"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="">
                <i class="fab fa-user"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>