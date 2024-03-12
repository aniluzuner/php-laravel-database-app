<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calisanlar;
use App\Models\Musteriler;
use App\Models\Araclar;

class MainController extends Controller{

    public function index(){
      $calisanlar = Calisanlar::pluck('id');
      $musteriler = Musteriler::pluck('id');
      $araclar = Araclar::pluck('id');
      return view('index',compact('calisanlar','musteriler','araclar'));
    }

    public function CalisanListe(){
      $calisanlar = Calisanlar::all();
      return view('tablo',compact('calisanlar'),['data'=> ['ÇALIŞANLAR','<th>Ad</th>','<th>Soyad</th>','<th>GSM</th>','<th>E-Posta</th>','<th>Yaş</th>','<th>Ehliyet</th>','<th>İngilizce</th>','<th>Maaş</th>']]);
    }

    public function MusteriListe(){
      $musteriler = Musteriler::all();
      return view('tablo',compact('musteriler'),['data'=> ['MÜŞTERİLER','<th>Ad</th>','<th>Soyad</th>','<th>GSM</th>','<th>E-Posta</th>']]);
    }

    public function AracListe(){
      $araclar = Araclar::all();
      return view('tablo',compact('araclar'),['data'=> ['ARAÇLAR','<th>Marka</th>','<th>Model</th>','<th>Yıl</th>','<th>Araç Tipi</th>','<th>Şoför</th>']]);
    }

    public function CalisanPost(Request $request){
      for ($i=1;$i<=3;$i++)
        $bol=explode("-",$request->dogumTarih);

      $dogumTarih="$bol[2]-$bol[1]-$bol[0]";
      $bugun=date("Y-m-d");
      $diff= date_diff(date_create($dogumTarih),date_create($bugun));
      $yas=$diff->format('%y');

      $calisanlar = new Calisanlar();
      $calisanlar->ad = $request->ad;
      $calisanlar->soyad = $request->soyad;
      $calisanlar->gsm = $request->gsm;
      $calisanlar->email = $request->email;
      $calisanlar->yas = $yas;
      $calisanlar->ehliyet = $request->ehliyet;
      $calisanlar->ingilizce = $request->ingilizce;
      $calisanlar->maas = ($request->maas." TL");
      $calisanlar->save();

      return redirect()->route('calisanlar');
    }

    public function MusteriPost(Request $request){
      $musteriler = new Musteriler();
      $musteriler->ad = $request->ad;
      $musteriler->soyad = $request->soyad;
      $musteriler->gsm = $request->gsm;
      $musteriler->email = $request->email;
      $musteriler->save();

      return redirect()->route('musteriler');
    }

    public function AracPost(Request $request){
      $araclar = new Araclar();
      $araclar->marka = $request->marka;
      $araclar->model = $request->model;
      $araclar->yil = $request->yil;
      $araclar->sofor = $request->sofor;
      $araclar->tip = $request->tip;
      $araclar->save();

      return redirect()->route('araclar');
    }

    public function CalisanDuzenle($id){
      $calisan = Calisanlar::find($id);
      return view('CalisanEkle',['id'=>[$id],'data'=>[$calisan->ad,$calisan->soyad,$calisan->gsm,$calisan->email,$calisan->maas]]);
    }

    public function MusteriDuzenle($id){
      $musteri = Musteriler::find($id);
      return view('MusteriEkle',['id'=>[$id],'data'=>[$musteri->ad,$musteri->soyad,$musteri->gsm,$musteri->email]]);
    }

    public function AracDuzenle($id){
      $arac = Araclar::find($id);
      return view('AracEkle',['id'=>[$id],'data'=>[$arac->marka,$arac->model,$arac->sofor,$arac->yil]]);
    }

    public function CalisanGuncelle(Request $request, $id){
      for ($i=1;$i<=3;$i++)
        $bol=explode("-",$request->dogumTarih);

      $dogumTarih="$bol[2]-$bol[1]-$bol[0]";
      $bugun=date("Y-m-d");
      $diff= date_diff(date_create($dogumTarih),date_create($bugun));
      $yas=$diff->format('%y');

      $calisan = Calisanlar::find($id);
      $calisan->ad = $request->ad;
      $calisan->soyad = $request->soyad;
      $calisan->gsm = $request->gsm;
      $calisan->email = $request->email;
      $calisan->yas = $yas;
      $calisan->ehliyet = $request->ehliyet;
      $calisan->ingilizce = $request->ingilizce;
      $calisan->maas = ($request->maas." TL");
      $calisan->save();

      return redirect()->route('calisanlar');
    }

    public function MusteriGuncelle(Request $request, $id){
      $musteri = Musteriler::find($id);
      $musteri->ad = $request->ad;
      $musteri->soyad = $request->soyad;
      $musteri->gsm = $request->gsm;
      $musteri->email = $request->email;
      $musteri->save();

      return redirect()->route('musteriler');
    }

    public function AracGuncelle(Request $request, $id){
      $arac = Araclar::find($id);
      $arac->marka = $request->marka;
      $arac->model = $request->model;
      $arac->sofor = $request->sofor;
      $arac->yil = $request->yil;
      $arac->tip = $request->tip;
      $arac->save();

      return redirect()->route('araclar');
    }

    public function CalisanSil($id){
      $calisan = Calisanlar::find($id);
      $calisan->delete();
      return redirect()->route('calisanlar');
    }

    public function MusteriSil($id){
      $musteri = Musteriler::find($id);
      $musteri->delete();
      return redirect()->route('musteriler');
    }

    public function AracSil($id){
      $arac = Araclar::find($id);
      $arac->delete();
      return redirect()->route('araclar');
    }

}
