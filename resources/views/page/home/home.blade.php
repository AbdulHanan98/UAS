@extends('index')
@section('content')
<section class="slider mb-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="slide-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="slide-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="slide-3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section class="tiga mb-5">
    <div class="container pb-0">
        <div class="row pb-0">
            <div class="col pb-0" style="
            border-bottom: 1px solid rgb(0, 122, 255);">
                <nav class="navbar navbar-expand-lg navbar-light pb-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item pr-3 active pr-3">
                                <p class="nav-link" href="#">BERANDA <span class="sr-only">(current)</span></p>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item pr-3 active pr-3">
                                <p class="nav-link" href="#">Terakhir diperbaharui: Kamis, 7 Januari 2021
                                </p>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col bg-light">
                <div class="atas pt-4 p-2 d-flex flex-row ">
                    <div class="logo d-flex flex-row mr-auto">
                        <img src="emas.jpg" style="width: 80px;" alt="">
                        <h3 class="ml-3 my-auto">Emas</h3>
                    </div>
                    <div class="link my-auto">
                        <a href="">Lihat Semua</a>
                    </div>
                </div>
                <div class="bawah p-2">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Produk</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Terakhir</th>
                                <th scope="col">Persentase</th>
                                <th scope="col">Perubahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($emas as $item)
                            <tr>
                                <th scope="row">{{$item->produk}}</th>
                                <td>{{$item->bulan}}</td>
                                <td>{{$item->terakhir}}</td>
                                <td>{{$item->persentase}}%</td>
                                <td>{{$item->perubahan}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col bg-light ml-4">
                <div class="atas pt-4 p-2 d-flex flex-row ">
                    <div class="logo d-flex flex-row mr-auto">
                        <img src="emas.jpg" style="width: 80px;" alt="">
                        <h3 class="ml-3 my-auto">Pertanian</h3>
                    </div>
                    <div class="link my-auto">
                        <a href="">Lihat Semua</a>
                    </div>
                </div>
                <div class="bawah p-2">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Produk</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Terakhir</th>
                                <th scope="col">Persentase</th>
                                <th scope="col">Perubahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pertanian as $item)
                            <tr>
                                <th scope="row">{{$item->produk}}</th>
                                <td>{{$item->bulan}}</td>
                                <td>{{$item->terakhir}}</td>
                                <td>{{$item->persentase}}%</td>
                                <td>{{$item->perubahan}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="empat">
    <div class="jumbotron"
        style="background: url(https://jfx.co.id//storage/settings/September2020/Fm57a90xl7DrqkyJYHdA.jpg);">
        <div class="row p-5">
            <div class="col-md-6">
                <h3 class="title text-white" style="font-size: 35px">Bagaimana cara JFX Bekerja?</h3>
                <p class="text-white">JFX adalah pertukaran untuk transaksi kontrak berjangka</p>
                <p class="text-white">yang dibuat oleh peserta anggota.</p>
                <p class="text-white">&nbsp;</p>
                <p class="text-white">JFX memiliki 3 (tiga) peran utama, yaitu menyediakan</p>
                <p class="text-white">mekanisme penemuan harga, referensi harga dan fasilitas lindung nilai.</p>
                <p class="text-white">&nbsp;</p>
                <p class="text-white">JFX memiliki sekitar 64 broker dan 16 pedagang aktif,</p>
                <p class="text-white">dan ratusan ribu pelanggan yang tersebar di seluruh Indonesia.</p>
                <span class="margin-top-20"></span>
            </div>
            <div class="col-md-6 text-center">
                <a data-fancybox="" class="btn btn-play btn-yellow" href="https://youtu.be/wyOq8L02-Jo" alt=""></a>
            </div>
        </div>
    </div>
</section>

<section class="agenda">
    <div class="container pb-0">
        <div class="row pb-0">
            <div class="col col-8 pb-0">
                <nav class="navbar navbar-expand-lg navbar-light pb-0" style="
                border-bottom: 1px solid rgb(0, 122, 255);">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <p class="nav-link" href="#">AGENDA <span class="sr-only">(current)</span></p>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="" href="#">Lihat Semua
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="bawah border p-3 ">
                    <p class="my-auto">Agenda tidak ditemukan</p>
                </div>
            </div>
            <div class="col col-4 bg-light  ">
                <nav class="navbar navbar-expand-lg navbar-light pb-0 mb-3" style="
                border-bottom: 1px solid rgb(0, 122, 255);">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <p class="nav-link" href="#">Berita Terbaru <span class="sr-only">(current)</span></p>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="" href="#">Lihat Semua
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                @foreach ($berita as $item)
                <div class="bawah d-flex flex-row mb-4 p-1 ">
                    <img src="{{Storage::url($item->image)}}" style="width: 80px;" alt="">
                    <div class="isi">
                    <p class="my-auto ml-4" style="line-height: 1.2">{{$item->text}}</p>
                    <h6 class="my-auto ml-4">{{$item->date}}</h6>
                </div>
                </div>
                @endforeach

                {{-- <div class="bawah d-flex flex-row mb-4 p-1 ">
                    <img src="emas.jpg" style="width: 80px;" alt="">
                    <p class="my-auto ml-4" style="line-height: 1.2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, rem.</p>
                </div>
                <div class="bawah d-flex flex-row mb-4 p-1 ">
                    <img src="emas.jpg" style="width: 80px;" alt="">
                    <p class="my-auto ml-4" style="line-height: 1.2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, rem.</p>
                </div> --}}
            </div>
        </div>
    </div>
</section>

@endsection
