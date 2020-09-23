<nav class="navbar navbar-expand-lg mynav">
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link font-color" href="{{ route('show.home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-color" href="{{ route('show.projects') }}">My Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-color" href="{{ route('show.resume') }}" target="_blank">Resume</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-color" href="{{ route('show.contact') }}">Contact Me</a>
      </li>
    </ul>
  </div>
</nav>

<script>
  const currentLocation = location.href;
  const menuItem = document.querySelectorAll('a');
  const menuLength = menuItem.length
  for (let i = 0; i<menuLength; i++){
    if(menuItem[i].href === currentLocation){
      menuItem[i].className = "active nav-link font-color"
    }
  }
</script>