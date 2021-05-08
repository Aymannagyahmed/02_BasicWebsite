    

<nav class="navbar n-bar   site-header sticky-top py-1">

      <div class="container d-flex flex-column flex-md-row justify-content-between">
            <ul class="nav">
                  <li class="nav-item"><a class=" nav-link {{Request::is('/')?      'nav-link active':''}}" href="/">Home</a></li>
                  <li class="nav-item"><a class=" nav-link {{Request::is('about')?   'nav-link active':''}}" href="/about">About</a></li>

                  <li class="nav-item"><a class=" nav-link {{Request::is('contact')? 'nav-link active':''}}" href="/contact">Contact</a></li>
            </ul>

      </div>
</nav>