<!-- Marketing messaging and featurettes
    ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing">
    <!-- START THE FEATURETTES -->
    @php($imgOnLeft = true)
@foreach($sections as $section)
        <hr class="featurette-divider" id="{{$section['id']}}">
        <div class="row featurette">
            @if($imgOnLeft)
                <div class="col-md-7">
                    <h2 class="featurette-heading" style="margin-top:0rem;">
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
                @php($imgOnLeft = false)
            @else
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="{{asset($section['img_path'])}}"
                         alt="Generic placeholder image">
                </div>
                <div class="col-md-7">
                    <h2 class="featurette-heading" style="margin-top:0rem;">
                        {{$section['heading']}}<span class="text-muted">
                            <br>{{$section['span']}}
                        </span>
                    </h2>
                    <p class="lead">{{$section['lead']}}</p>
                </div>
                @php($imgOnLeft = true)
            @endif
        </div>

    @endforeach
    <!-- /END THE FEATURETTES -->
</div><!-- /.container -->
