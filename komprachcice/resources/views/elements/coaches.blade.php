<div class="row" id="coaches">
    @foreach($coaches as $coach)
        <div class="col-lg-3">
            <img style="object-fit: cover;" class="mx-auto d-block rounded-circle" src="{{asset($coach['img_path'])}}"
                 alt="Generic placeholder image" width="300" height="300">
            <h2 class="text-center">{{$coach['surname']}}</h2>
            <h3 class="text-center">{{$coach['name']}}</h3>
            <p class="text-left">{{ \Illuminate\Support\Str::limit($coach['desc'], 300, $end='...') }}</p>
            <p class="text-center"><a class="btn btn-secondary" data-toggle="modal" data-target="#{{$coach['name']}}"
                                      role="button">Więcej &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="modal fade" id="{{$coach['name']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$coach['name']}} {{$coach['surname']}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card mb-3">
                            <img class="card-img-top" src="{{asset($coach['img_path'])}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$coach['name']}} {{$coach['surname']}}</h5>
                                <p class="card-text">{{$coach['desc']}}</p>
                            </div>
                        </div>
                    </div>
                    {{--            <div class="modal-footer">--}}
                    {{--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                    {{--                <button type="button" class="btn btn-primary">Send message</button>--}}
                    {{--            </div>--}}
                </div>
            </div>
        </div>
    @endforeach
</div><!-- /.row -->


