@extends('sidebar')

@section('content')
<section class="p-3">

  <div class="display-2 font-weight-bold d-flex justify-content-center mt-5" style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color: #fff;">
    @if(isset($id))
      Müşteri Düzenle
    @else
      Müşteri Ekle
    @endif
  </div>

  <form action="{{url('/musteriler/post')}}/{{@$id[0]}}" method="post" autocomplete="off">

    {{csrf_field()}}

    <div class="row justify-content-center">
      <div class="col-11 col-lg-4 col-xxl-2">
        <label>AD</label>
        <input type="text" name="ad" class="form-control" value="{{@$data[0]}}" required>
      </div>
      <div class="col-11 col-lg-4 col-xxl-2">
        <label>SOYAD</label>
        <input type="text" name="soyad" class="form-control" value="{{@$data[1]}}" required>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-11 col-lg-4 col-xxl-2">
        <label>GSM</label>
        <input type="text" name="gsm" value="{{@$data[2]}}" maxlength="11" pattern="[0-9]{11}" class="form-control" required>
      </div>
      <div class="col-11 col-lg-4 col-xxl-2">
        <label>E-POSTA</label>
        <input type="email" name="email" class="form-control" value="{{@$data[3]}}" required>
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
