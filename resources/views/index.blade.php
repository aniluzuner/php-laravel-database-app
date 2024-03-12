@extends('sidebar')

@section('content')
<section>
  <div class="container-fluid">
    <div class="row justify-content-around align-items-center" style="height: 100vh;">

      <div class="col-8 col-xl-5 d-flex" onclick="window.location.href='/calisanlar'" style="cursor:pointer; background: #1c1c1c; color:white; height: 25%;">
        <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
          <i class="fas fa-address-card" style="font-size:8vw;"></i>
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center">
          <h3 style="font-size:2vw;"> Çalışanlar <br><br><span style="font-size: 3vw; padding-left:0.6vw;"> {{$calisanlar->count()}} </span> </h3>
        </div>
      </div>

      <div class="col-8 col-xl-5 d-flex" onclick="window.location.href='/musteriler'" style="cursor:pointer; background: #1c1c1c; color:white; height: 25%;">
        <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
          <i class="fas fa-users" style="font-size:8vw;"></i>
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center">
          <h3 style="font-size:2vw;"> Müşteriler <br><br><span style="font-size: 3vw; padding-left:0.6vw;"> {{$musteriler->count()}} </span> </h3>
        </div>
      </div>

      <div class="col-8 col-xl-5 d-flex" onclick="window.location.href='/araclar'" style="cursor:pointer; background: #1c1c1c; color:white; height: 25%;">
        <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
          <i class="fas fa-truck" style="font-size:8vw;"></i>
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center">
          <h3 style="font-size:2vw;"> Araçlar <br><br><span style="font-size: 3vw; padding-left:0.6vw;"> {{$araclar->count()}} </span> </h3>
        </div>
      </div>

    </div>
  </div>


</section>
@stop
