@extends('layouts.app')
@section('content')
    <div id="demo-1" data-zs-src='["{{asset('images/r5.jpg')}}","{{asset('images/r3.jpg')}}","{{asset('images/r4.jpg')}}","{{asset('images/r1.jpeg')}}", "{{asset('images/r6.jpg')}}" ]'
         data-zs-overlay="dots">
        <div class="demo-inner-content">
            <!--/banner-info-->
            <div class="baner-info">
                <h3>Bİr <span>Yer</span> Hayal <span>Et</span></h3>
                <h4>Rahatlığın ve Güvenilirliğin Adresi</h4>
                <span><img src="{{asset('images/logo2.png')}}" alt=""></span>
            </div>
            <!--/banner-ingo-->
        </div>
    </div>

    <div class="price-section">
        <div class="container">
            <div class="col-md-6 price">
                <h3><span>Yurt Ara</span></h3>
                <div class="reservation">
                    <div class="section_room">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                        <select id="country" name="sehir" onchange="change_country(this.value)" class="frm-field required">
                                <option value="0">Şehir Seçiniz</option>
                                <option value="1">Adana</option>
                                <option value="2">Adıyaman</option>
                                <option value="3">Afyonkarahisar</option>
                                <option value="4">Ağrı</option>
                                <option value="5">Amasya</option>
                                <option value="6">Ankara</option>
                                <option value="7">Antalya</option>
                                <option value="8">Artvin</option>
                                <option value="9">Aydın</option>
                                <option value="10">Balıkesir</option>
                                <option value="11">Bilecik</option>
                                <option value="12">Bingöl</option>
                                <option value="13">Bitlis</option>
                                <option value="14">Bolu</option>
                                <option value="15">Burdur</option>
                                <option value="16">Bursa</option>
                                <option value="17">Çanakkale</option>
                                <option value="18">Çankırı</option>
                                <option value="19">Çorum</option>
                                <option value="20">Denizli</option>
                                <option value="21">Diyarbakır</option>
                                <option value="22">Edirne</option>
                                <option value="23">Elazığ</option>
                                <option value="24">Erzincan</option>
                                <option value="25">Erzurum</option>
                                <option value="26">Eskişehir</option>
                                <option value="27">Gaziantep</option>
                                <option value="28">Giresun</option>
                                <option value="29">Gümüşhane</option>
                                <option value="30">Hakkâri</option>
                                <option value="31">Hatay</option>
                                <option value="32">Isparta</option>
                                <option value="33">Mersin</option>
                                <option value="34">İstanbul</option>
                                <option value="35">İzmir</option>
                                <option value="36">Kars</option>
                                <option value="37">Kastamonu</option>
                                <option value="38">Kayseri</option>
                                <option value="39">Kırklareli</option>
                                <option value="40">Kırşehir</option>
                                <option value="41">Kocaeli</option>
                                <option value="42">Konya</option>
                                <option value="43">Kütahya</option>
                                <option value="44">Malatya</option>
                                <option value="45">Manisa</option>
                                <option value="46">Kahramanmaraş</option>
                                <option value="47">Mardin</option>
                                <option value="48">Muğla</option>
                                <option value="49">Muş</option>
                                <option value="50">Nevşehir</option>
                                <option value="51">Niğde</option>
                                <option value="52">Ordu</option>
                                <option value="53">Rize</option>
                                <option value="54">Sakarya</option>
                                <option value="55">Samsun</option>
                                <option value="56">Siirt</option>
                                <option value="57">Sinop</option>
                                <option value="58">Sivas</option>
                                <option value="59">Tekirdağ</option>
                                <option value="60">Tokat</option>
                                <option value="61">Trabzon</option>
                                <option value="62">Tunceli</option>
                                <option value="63">Şanlıurfa</option>
                                <option value="64">Uşak</option>
                                <option value="65">Van</option>
                                <option value="66">Yozgat</option>
                                <option value="67">Zonguldak</option>
                                <option value="68">Aksaray</option>
                                <option value="69">Bayburt</option>
                                <option value="70">Karaman</option>
                                <option value="71">Kırıkkale</option>
                                <option value="72">Batman</option>
                                <option value="73">Şırnak</option>
                                <option value="74">Bartın</option>
                                <option value="75">Ardahan</option>
                                <option value="76">Iğdır</option>
                                <option value="77">Yalova</option>
                                <option value="78">Karabük</option>
                                <option value="79">Kilis</option>
                                <option value="80">Osmaniye</option>
                                <option value="81">Düzce</option>
                        </select>
                    </div>
                    <div class="section_room">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        <select id="country1" onchange="change_country(this.value)" class="frm-field required">
                            <option value="null">Cinsiyet Seçiniz</option>
                            <option value="AX">Kız</option>
                            <option value="AX">Erkek</option>
                            <option value="AX">Karışık</option>
                        </select>
                    </div>
                    <div class="reservation-grids">
                        <div class="reservation-grid-left">
                            <div class="section_room">
                                <span class="fa fa-bed" aria-hidden="true"> </span>
                                <select id="country2" onchange="change_country(this.value)" class="frm-field required">
                                    <option value="null">Yatak Sayısını Seçiniz</option>
                                    <option value="null">1</option>
                                    <option value="AX">2</option>
                                    <option value="AX">3</option>
                                    <option value="AX">4</option>
                                    <option value="AX">Daha Fazla+</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="reservation-grids">
                        <div class="reservation-grid-left">
                            <div class="section_room">
                                <span class="glyphicon glyphicon-yen" aria-hidden="true"></span>
                                <select id="country2" onchange="change_country(this.value)" class="frm-field required">
                                    <option value="null">Min. Fiyat</option>
                                    <option value="null">No Minimum</option>
                                    <option value="AX">1000Yen</option>
                                    <option value="AX">3000Yen</option>
                                    <option value="AX">4000Yen</option>
                                    <option value="AX">5000Yen</option>
                                </select>
                            </div>
                        </div>
                        <div class="reservation-grid-right">
                            <div class="section_room">
                                <span class="glyphicon glyphicon-yen" aria-hidden="true"></span>
                                <select id="country3" onchange="change_country(this.value)" class="frm-field required">
                                    <option value="null">Max. Fiyat</option>
                                    <option value="null">Any</option>
                                    <option value="AX">15000Yen</option>
                                    <option value="AX">25000Yen</option>
                                    <option value="AX">35000Yen</option>
                                    <option value="AX">More</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="keywords">
                        <form action="#" method="post">
                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                            <input type="text" name="Key Words" placeholder="Key Words" required=" ">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-md-6 plat">
                <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="2000" data-pause="hover">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel1" data-slide-to="1"></li>
                        <li data-target="#myCarousel1" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->

                    <div class="carousel-inner" role="listbox">

                        <div class="item active">


                            <div class="serv-w3ls1">

                                <img src="images/r3.jpg" alt="w3ls" class="img-responsive">
                                <span class="four">40,000$</span>

                                <div class="rent-bottom">
                                    <h4>Nerima Sanam St, Tokyo,TM 3020</h4>
                                    <h5>For Rent</h5>
                                    <p>Etiam elit felis, porta ut massa in, consectetur<p>
                                    <div class="rent-icons">
                                        <h6 class="area">Area: 450m1</h6>
                                        <div class="r-icons">
                                            <ul class="icons-right">
                                                <li><i class="fa fa-bed" aria-hidden="true"></i> 3</li>
                                                <li><i class="fa fa-wheelchair-alt" aria-hidden="true"></i> 2</li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>


                </div>
            </div>


            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="featured-section" id="projects">
        <div class="container">
            <h3 class="tittle">Sİzİn <span>İÇİN </span> Önerİlenler</h3>
            <div class="content-bottom-in">
                @foreach(\App\Models\Yurtlar::all()->chunk(8) as $chunk) {{-- tum yurtları sectık ve chunk ile 4'lu gruplara ayırdık--}}
                <ul id="flexiselDemo1">
                    @foreach($chunk as $key =>$value )
                        <li>
                            <div class="project-fur">
                                <a href="#" data-toggle="modal" data-target="#myModal1"><img class="img-responsive" src="{{asset($value['image'])}}"/> </a>
                                <div class="fur">
                                    <div class="fur1">
                                        <span>{{$value['name']}}</span>
                                        <span class="fur-money"></span>
                                        <span>{{$value['bulunduguil']}}</span>
                                        <span>{{$value['bulunduguilce']}}</span>
                                        <span>{{$value['aciklama']}}</span>
                                        <h6 class="fur-name">
                                            <a class="mask" href="{{route('yurtlar.detay',['selflink'=>$value['selflink']])}}" data-toggle="modal" >Detay..</a>
                                        </h6>
                                    </div>
                                </div>
                                <span class="five item_price">{{$value['fiyat']}} TL</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
                @endforeach
            </div>
        </div>
    </div>

    <div class="product " >
        <div class="container">
            <div class="product-top">
                @foreach(\App\Models\Yurtlar::all()->chunk(4) as $chunk) {{-- tum kıtapları sectık ve chunk ile 4'lu gruplara ayırdık--}}
                <div class="product-one" style="margin:5px">
                    @foreach($chunk as $key =>$value )
                        <div class="col-md-3 product-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="{{route('yurtlar.detay',['selflink'=>$value['selflink']])}}" class="mask">
                                    <img class="img-responsive zoom-img" style="width: 200px;height: 200px" src="{{asset($value['image'])}}"
                                         alt=""/>
                                </a>
                                <div class="product-bottom">
                                    <h3>{{$value['name']}}</h3>

                                    <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">{{$value['fiyat']}} TL (Yıllık)</span></h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
