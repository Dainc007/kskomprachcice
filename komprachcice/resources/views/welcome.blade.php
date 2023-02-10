@extends('layouts.app')

@section('content')
    <style>
        /* GLOBAL STYLES
    -------------------------------------------------- */
        /* Padding below the footer and lighter body text */

        body {
            padding-top: 3rem;
            padding-bottom: 3rem;
            color: #5a5a5a;
        }


        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
            margin-bottom: 4rem;
        }

        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
            height: 32rem;
            background-color: #777;
        }

        .carousel-item > img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 100%;
        }


        /* MARKETING CONTENT
        -------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .marketing h2 {
            font-weight: 400;
        }

        .marketing .col-lg-4 p {
            margin-right: .75rem;
            margin-left: .75rem;
        }


        /* Featurettes
        ------------------------- */

        .featurette-divider {
            margin: 5rem 0; /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        .featurette-heading {
            font-weight: 300;
            line-height: 1;
            letter-spacing: -.05rem;
        }


        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 40em) {
            /* Bump up size of carousel content */
            .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;
            }

            .featurette-heading {
                font-size: 50px;
            }
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }

    </style>
    <script>
        window.onload = function () {
            if (localStorage.getItem('popState') != 'shown') {
                document.getElementById("xyz").click();
                localStorage.setItem('popState', 'shown')
            }

        };
    </script>
    <div class="container-fluid py-3">
        @include('elements.nav')
    </div>
    {{--   @include('elements.carousel')--}}
    @include('elements.sections')
    <div class="container">
        <div class="row">
            <h1 class="text-center">Grupy</h1>
        </div>

        @foreach($sectionGroups as $group)
            <div class="row" id="#{{$group['id']}}">
                <div class="col-4">
                    <img class="img img-fluid" src="{{asset($group['img_path'])}}">
                </div>
                <div class="col-8">
                    <h6 class="text-center">
                        {{$group['name']}}
                    </h6>
                    <p class="lead">
                        {{$group['lead']}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    @include('elements.footer')
    @include('elements.popup')
@endsection
