@extends("layouts.admin")
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin.ozellik.create')}}" class="btn btn-success">Yeni Yurt Ekle</a>

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Özellikler</h4>
                            <p class="category">Burada yurtlara ait özellikleri bulabilirsiniz</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <tr><th>Yurdun İsmi</th>
                                    <th>Kişi Sayısı</th>
                                    <th>Resimler</th>
                                    <th>İletişim Numarası</th>
                                    <th>Açıklama</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $key =>$value)
                                    <tr>
                                        <td>{{$value['name']}}</td>
                                        <td>{{$value['kisisayisi']}}</td>
                                        <td>{{$value['image']}}</td>
                                        <td>{{$value['telno']}}</td>
                                        <td>{{$value['aciklama']}}</td>
                                        <td><a href="{{route('admin.ozellik.edit',['id'=>$value['id']])}}">Düzenle</a></td>
                                        <td><a href="{{route('admin.ozellik.delete',['id'=>$value['id']])}}">Sil</a></td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                            {{$data->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
