<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><img class="img-fluid" width="48" height="48" src="{{asset('storage/logogks.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                @foreach($nav as $element)
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{$element}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>
