<div class="modal-header">
    <h5 class="modal-title text-center" id="exampleModalLabel">Pridávanie používateľov</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="container-fluid">
        <form method="post" action="{{url('reality')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-2"></div>
                <div class="form-group col-md-8">
                    <label for="login">Login:</label>
                    <input type="text" class="form-control" name="login" id="login">
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="form-group col-md-8">
                    <label for="heslo">Heslo:</label>
                    <input type="text" class="form-control" name="heslo" id="heslo">
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="form-group col-md-8">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="form-group col-md-8">
                    <button type="button" class="btn btn-secondary float-left" data-dismiss="modal">Zavrieť</button>
                    <button type="submit" class="btn btn-success float-right">PRIDAŤ</button>
                </div>

                <div class="col-md-2"></div>
            </div>
        </form>
    </div>
</div>