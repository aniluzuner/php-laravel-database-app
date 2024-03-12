@extends('sidebar')

@section('content')
<section class="p-3">

  <div class="display-2 font-weight-bold d-flex justify-content-center mt-5" style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color: #fff;">
    @if(isset($id))
      Araç Düzenle
    @else
      Araç Ekle
    @endif
  </div>

  <form action="{{url('/araclar/post')}}/{{@$id[0]}}" method="post" autocomplete="off">

    {{csrf_field()}}

    <div class="row justify-content-center">
      <div class="col-11 col-md-5 col-lg-4 col-xxl-2">
        <label>MARKA</label>
        <input type="text" name="marka" class="form-control" value="{{@$data[0]}}" required>
      </div>
      <div class="col-11 col-md-5 col-lg-4 col-xxl-2">
        <label>MODEL</label>
        <input type="text" name="model" class="form-control" value="{{@$data[1]}}" required>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-11 col-md-5 col-lg-4 col-xxl-2">
        <label>ŞOFÖR</label>
        <input type="text" name="sofor" class="form-control" value="{{@$data[2]}}" required>
      </div>
      <div class="col-11 col-md-5 col-lg-4 col-xxl-2">
        <label>YIL</label>
        <input type="text" name="yil" maxlength="4" pattern="[0-9]{4}" class="form-control" value="{{@$data[3]}}" required>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-11 col-md-10 col-lg-8 col-xxl-4">
        <label>ARAÇ TİPİ</label>
        <select class="form-select" name="tip" style="background-color:#ECF0F1; border:0; border-radius: 10px; font-family: roboto; " required>
          <option value="" selected>Araç Tipi Seçiniz</option>
          <option value="Otomobil">Otomobil</option>
          <option value="Panelvan">Panelvan</option>
          <option value="Minibüs">Minibüs</option>
          <option value="Otobüs">Otobüs</option>
          <option value="Kamyon">Kamyon</option>
          <option value="Çekici">Çekici</option>
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
