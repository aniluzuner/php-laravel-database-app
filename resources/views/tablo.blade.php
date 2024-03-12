@extends('sidebar')

@section('content')
<script language="javascript">
function confirmDel() {
  var agree=confirm("Bu içeriği silmek istediğinizden emin misiniz? Bu işlem geri alınamaz.");
  if (agree) {
    return true; }
  else {
    return false; }
}
</script>
<section class="p-3">

    <div class="display-2 font-weight-bold d-flex justify-content-center mt-5" style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color: #fff;"> {{$data[0]}} </div>

    <div class="d-flex justify-content-center mb-5">
      <table>
        <thead>
          <tr>
            <th>#</th>
            <?php echo @$data[1],@$data[2],@$data[3],@$data[4],@$data[5],@$data[6],@$data[7],@$data[8] ?>
            <th>İşlem</th>
          </tr>
        </thead>
        <tbody>
          @if(isset($calisanlar))
            @foreach($calisanlar as $calisan)
              <tr>
                <td>{{$calisan->id}}</td>
                <td>{{$calisan->ad}}</td>
                <td>{{$calisan->soyad}}</td>
                <td>{{$calisan->gsm}}</td>
                <td>{{$calisan->email}}</td>
                <td>{{$calisan->yas}}</td>
                <td>{{$calisan->ehliyet}}</td>
                <td>{{$calisan->ingilizce}}</td>
                <td>{{$calisan->maas}}</td>
                <td>
                  <a class="icon" href="/calisanlar/duzenle/{{$calisan->id}}"><i class='fas fa-edit' style="font-size:1.4vw; margin-right:0.4vw;"></i></a>
                  <a class="icon" href="/calisanlar/sil/{{$calisan->id}}" onClick="return confirmDel();"><i class='fas fa-trash' style="font-size:1.2vw;"></i></a>
                </td>
              </tr>
            @endforeach
          @endif
          @if(isset($musteriler))
            @foreach($musteriler as $musteri)
              <tr>
                <td>{{$musteri->id}}</td>
                <td>{{$musteri->ad}}</td>
                <td>{{$musteri->soyad}}</td>
                <td>{{$musteri->gsm}}</td>
                <td>{{$musteri->email}}</td>
                <td>
                  <a class="icon" href="/musteriler/duzenle/{{$musteri->id}}"><i class='fas fa-edit' style="font-size:1.4vw; margin-right:0.4vw;"></i></a>
                  <a class="icon" href="/musteriler/sil/{{$musteri->id}}" onClick="return confirmDel();"><i class='fas fa-trash' style="font-size:1.2vw;"></i></a>
                </td>
              </tr>
            @endforeach
          @endif
          @if(isset($araclar))
            @foreach($araclar as $arac)
              <tr>
                <td>{{$arac->id}}</td>
                <td>{{$arac->marka}}</td>
                <td>{{$arac->model}}</td>
                <td>{{$arac->yil}}</td>
                <td>{{$arac->tip}}</td>
                <td>{{$arac->sofor}}</td>
                <td>
                  <a class="icon" href="/araclar/duzenle/{{$arac->id}}"><i class='fas fa-edit' style="font-size:1.4vw; margin-right:0.4vw;"></i></a>
                  <a class="icon" href="/araclar/sil/{{$arac->id}}" onClick="return confirmDel();"><i class='fas fa-trash' style="font-size:1.2vw;"></i></a>
                </td>
              </tr>
            @endforeach
          @endif
        </tbody>
        <tr class='son'><td colspan="2" style="text-align:left;"> <div style='padding-bottom: 12px; padding-top: 5px;'> <a href='
          @if(isset($calisanlar)) calisanlar/ekle @endif
          @if(isset($musteriler)) musteriler/ekle @endif
          @if(isset($araclar)) araclar/ekle @endif
          '>Ekle</a></div></td></tr>
      </table>
    </div>

</section>
@stop
