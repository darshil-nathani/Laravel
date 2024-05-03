<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{ route('mypost.index') }}">Home</a>
          <a class="nav-link" href="{{route('mypost.create')}}">Add Post</a>
          <a class="nav-link" href="{{route('aboutus')}}">About Us</a>
          <a class="nav-link" href="{{route('contactus')}}">Contact Us</a>
          {{-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}
        </div>
        <form class="d-flex ms-auto">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
