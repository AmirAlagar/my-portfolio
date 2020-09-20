<nav class="navbar navbar-expand-lg">
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link font-color" href="{{ route('show.home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-color" href="#">My Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-color" href="{{ route('show.resume') }}" target="_blank">Resume</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-color" href="#">Contact Me</a>
      </li>
    </ul>
  </div>
</nav>