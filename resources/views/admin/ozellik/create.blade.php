@extends("layouts.admin")
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(session("status"))
                        <div class="alert alert-primary" role="alert">
                            {{session("status")}}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Yurt Özelliği Ekleyin</h4>
                        </div>
                        <div class="card-content">
                            <form enctype="multipart/form-data" action="{{route("admin.ozellik.create.post")}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Yurdun İsmi</label>
                                            <input type="text" name="name" class="form-control">
                                            <span class="material-input"></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Kişi Sayısı</label>
                                            <input type="text" name="kisisayisi" class="form-control">
                                            <span class="material-input"></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">

                                            <input style="opacity: 1;position: inherit" type="file" name="image" >
                                            <span class="material-input"></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">İletişim Numarası</label>
                                            <input type="phone" name="telno" class="form-control">
                                            <span class="material-input"></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Açıklama</label>
                                            <textarea name="aciklama" id="" cols="30" rows="10" class="form-control"> </textarea>
                                            <span class="material-input"></span>
                                        </div>

                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Yurt Ekle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
