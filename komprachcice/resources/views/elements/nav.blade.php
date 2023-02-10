<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><img class="img-fluid" width="48" height="48"
                                              src="{{asset('storage/logogks.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                @foreach($nav as $element)
                    @if($element == 'groups')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#{{$element}}" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{__("lang.nav.$element")}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach($navGroups as $group)
                                    <a class="dropdown-item"
                                       href="#{{$group}}">{{__("lang.groups.$group")}}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="#{{$element}}">{{__("lang.nav.$element")}}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </nav>
</header>
