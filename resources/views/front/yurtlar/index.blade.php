@extends('layouts.app')
@section('content')

    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div>
                        <img src="{{asset('images/product-1-720x480.jpg')}}" alt="" class="img-fluid wc-image">
                    </div>
                    <br>
                    <div class="row"> {{--eklenen yurtların resımlerı --}}
                        <div class="col-sm-4 col-6">
                            <div>
                                <img src="assets/images/product-1-720x480.jpg" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div>
                                <img src="assets/images/product-2-720x480.jpg" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div>
                                <img src="assets/images/product-3-720x480.jpg" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>

                        <div class="col-sm-4 col-6">
                            <div>
                                <img src="assets/images/product-4-720x480.jpg" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div>
                                <img src="assets/images/product-5-720x480.jpg" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div>
                                <img src="assets/images/product-6-720x480.jpg" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>
                    </div>

                    <br>
                </div>

                <div class="col-md-5">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">Tip</span>

                                <strong class="pull-right">Yurt</strong>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">Yurdun Adı</span>

                                <strong class="pull-right">{{$data[0]['name']}}</strong>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">Yatak Sayısı</span>

                                <strong class="pull-right">{{$data[0]['yataksayisi']}}</strong>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">Fiyat(Yıllık)</span>

                                <strong class="pull-right">{{$data[0]['fiyat']}} TL</strong>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">İl</span>

                                <strong class="pull-right">{{$data[0]['bulunduguil']}}</strong>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">İlçe</span>

                                <strong class="pull-right">{{$data[0]['bulunduguilce']}}</strong>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">Adres</span>

                                <strong class="pull-right">{{$data[0]['adres']}}</strong>
                            </div>
                        </li>
                    </ul>

                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>


    <div class="section contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="sidebar-item recent-posts">
                        <div class="sidebar-heading">
                            <h2>Açıklamalar : </h2>
                            <hr>
                        </div>
                        <br>
                        <div class="content">
                            <p>{{$data[0]['aciklama']}}</p>
                        </div>

                        <br>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sidebar-item recent-posts">
                        <div class="sidebar-heading">
                            <h2>İletişim Bilgileri</h2>
                            <hr>
                        </div>
                        <br>
                        <div class="content">
                            <p>
                                <span>Yurdun İsmi</span>
                                <br>
                                <strong>{{$data[0]['name']}}</strong>
                            </p>

                            <p>
                                <span>Telefon</span>

                                <br>

                                <strong>
                                    <a href="tel">{{$data[0]['telno']}}</a>
                                </strong>
                            </p>

                            <p>
                                <span>Email</span>

                                <br>

                                <strong>
                                    <a href="mailto">{{$data[0]['email']}}</a>
                                </strong>
                            </p>
                        </div>
                    </div>

                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection

