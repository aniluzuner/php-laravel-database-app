@extends('sidebar')

@section('content')
<section class="p-3">

  <div class="display-2 font-weight-bold d-flex justify-content-center mt-5" style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color: #fff;">
    @if(isset($id))
      Çalışan Düzenle
    @else
      Çalışan Ekle
    @endif
  </div>

  <form action="{{url('/calisanlar/post')}}/{{@$id[0]}}" method="post" autocomplete="off">

    {{csrf_field()}}

    <div class="row justify-content-center">
      <div class="col-11 col-lg-4 col-xxl-3">
        <label>AD</label>
        <input type="text" name="ad" class="form-control" value="{{@$data[0]}}" required>
      </div>
      <div class="col-11 col-lg-4 col-xxl-3">
        <label>SOYAD</label>
        <input type="text" name="soyad" class="form-control" value="{{@$data[1]}}" required>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-11 col-lg-4 col-xxl-3">
        <label>GSM</label>
        <input type="text" name="gsm" value="{{@$data[2]}}" maxlength="11" pattern="[0-9]{11}" class="form-control" required>
      </div>
      <div class="col-11 col-lg-4 col-xxl-3">
        <label>E-POSTA</label>
        <input type="email" name="email" class="form-control" value="{{@$data[3]}}" required>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-11 col-lg-4 col-xxl-3">
        <label>DOĞUM TARİHİ</label>
        <input type="date" max="<?php echo date("Y-m-d") ?>" name="dogumTarih" class="form-control" required>
      </div>
      <div class="col-11 col-lg-4 col-xxl-3">
        <label>MAAŞ</label>
        <input type="text" name="maas" maxlength="5" pattern="[0-9]{5}" class="form-control" required>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-11 col-lg-4 col-xxl-3">
        <label>EHLİYET</label>
        <select class="form-select" name="ehliyet" style="background-color:#ECF0F1; border:0; border-radius: 10px; font-family: roboto; " required>
          <option value="" selected>Ehliyet Sınıfı Seçiniz</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="F">F</option>
          <option value="G">G</option>
        </select>
      </div>
      <div class="col-11 col-lg-4 col-xxl-3">
        <label>İNGİLİZCE SEVİYESİ</label>
        <select class="form-select" name="ingilizce" style="background-color:#ECF0F1; border:0; border-radius: 10px; font-family: roboto;" required>
          <option value="" selected>İngilizce seviyeniz nedir?</option>
          <option value="A1">A1 - Başlangıç Seviyesi</option>
          <option value="A2">A2 - Temel Seviye</option>
          <option value="B1">B1 - Orta Seviye Öncesi</option>
          <option value="B2">B2 - Orta Seviye</option>
          <option value="C1">C1 - Orta Seviye Üstü</option>
          <option value="C2">C2 - İleri Seviye</option>
        </select>
      </div>
    </div>

    <div class="row justify-content-center mt-4">
      <div class="col d-flex justify-content-center">
        <button type="submit" class="btn btn-primary px-4 py-2">GÖNDER</button>
      </div>
    </div>

  </form>
</section>
@stop
