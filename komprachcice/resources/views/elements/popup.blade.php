<button type="button" class="btn btn-primary" id="welcomePopup"
        data-toggle="modal" data-target="#popup" style="display: none;">
</button>
<!--Bootstrap modal -->
<div class="modal fade" id="popup" tabindex="-1"
     role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Modal heading -->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    GKS
                </h5>
                <button type="button" class="close"
                        data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							×
						</span>
                </button>
            </div>
            <!-- Modal body with image -->
            <div class="modal-body">
                <img class="img-fluid" src="{{asset('storage/popup.jpg')}}" />
            </div>
        </div>
    </div>
</div>
<script src=
            "https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity=
            "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous">
</script>
<script src=
            "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity=
            "sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous">
</script>
<script src=
            "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity=
            "sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous">
</script>
