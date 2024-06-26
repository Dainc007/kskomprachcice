@extends('layouts.app')

@section('content')
    <style>
        /* GLOBAL STYLES
    -------------------------------------------------- */
        /* Padding below the footer and lighter body text */

        /*@import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);*/
        @import url(https://fonts.googleapis.com/css2?family=Open+Sans&display=swap);
        body {
            padding-bottom: 3rem;
            color: #5a5a5a;
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
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
        .lead {
            /*font-size: 2.5vh;*/
            font-size: 14px;
        }

        p {
            text-align: justify;
            text-justify: inter-word;
            font-size: 14px;
        }

        .gradient {
            background: #b92b27;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #1565C0, #b92b27);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #1565C0, #b92b27); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .custom-heading {
            margin-top : 0rem;
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
                document.getElementById("welcomePopup").click();
                localStorage.setItem('popState', 'shown')
            }
        };
    </script>
    @include('elements.nav')
    @include('elements.cover')
    @include('elements.groups')
    <!-- Three columns of text below the carousel -->
    @include('elements.coaches')
    @include('elements.sections')
    @include('elements.footer')
    @include('elements.popup')
@endsection
