@php($imgOnLeft = true)
@foreach($sectionGroups as $group)
    @if($imgOnLeft)
        <div class="row shadow-lg mb-5 p-4" id="{{$group['id']}}">
            <div class="col-lg-6 col-sm-12">
                <img class="img img-fluid" src="{{asset($group['img_path'])}}">
            </div>
            <div class="col-sm-12 col-lg-6">
                <h2 class="text-center">
                    {{$group['name']}}
                </h2>
                <p class="lead">
                    {{$group['lead']}}
                </p>
            </div>
        </div>
        @php($imgOnLeft = false)
    @else
        <div class="row shadow-lg mb-5  p-4" id="{{$group['id']}}">
            <div class="col-lg-6 col-sm-12">
                <h2 class="text-center">
                    {{$group['name']}}
                </h2>
                <p class="lead">
                    {{$group['lead']}}
                </p>
            </div>
            <div class="col-lg-6 col-sm-12">
                <img class="img img-fluid" src="{{asset($group['img_path'])}}">
            </div>
        </div>
        @php($imgOnLeft = true)
    @endif
@endforeach
