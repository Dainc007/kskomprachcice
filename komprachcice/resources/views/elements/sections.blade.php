<!-- Marketing messaging and featurettes
    ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing">
    <!-- Three columns of text below the carousel -->
    @include('elements.coaches')
    <!-- START THE FEATURETTES -->
    @foreach($sections as $section)
        <hr class="featurette-divider">
        <div class="row featurette" id="{{$section['id']}}">
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    {{$section['heading']}}<span class="text-muted">
                            <br>{{$section['span']}}
                        </span>
                </h2>
                <p class="lead">{{$section['lead']}}</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="{{asset($section['img_path'])}}"
                     alt="Generic placeholder image">
            </div>
        </div>
    @endforeach
    <!-- /END THE FEATURETTES -->
</div><!-- /.container -->
