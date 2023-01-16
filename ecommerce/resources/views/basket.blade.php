@extends('layouts.master')
@section('title','Sepet')
@section('content')



    <div class="container">
        <div class="bg-content">
            <h2>Sepet</h2>
            <table class="table table-bordererd table-hover">
                <tr>
                    <th>Ürün</th>
                    <th>Tutar</th>
                    <th>Adet</th>
                    <th>Ara Toplam</th>
                    <th>İşlem</th>
                </tr>
                <tr>
                    <td colspan="5">Henüz sepette ürün yok</td>
                </tr>
                <tr>
                    <td> <img src="http://lorempixel.com/120/100/food/2"> Ürün adı</td>
                    <td>18.99</td>
                    <td>
                        <a href="#" class="btn btn-xs btn-default">-</a>
                        <span style="padding: 10px 20px">1</span>
                        <a href="#" class="btn btn-xs btn-default">+</a>
                    </td>
                    <td>18.99</td>
                    <td>
                        <a href="#">Sil</a>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Toplam Tutar (KDV Dahil)</th>
                    <th>18.99</th>
                    <th></th>
                </tr>
            </table>
            <div>
                <a href="#" class="btn btn-info pull-left">Sepeti Boşalt</a>
                <a href="#" class="btn btn-success pull-right btn-lg">Ödeme Yap</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="bg-content">
            <h2>Ödeme</h2>
            <div class="row">
                <div class="col-md-5">
                    <h3>Ödeme Bilgileri</h3>
                    <div class="form-group">
                        <label for="kartno">Kredi Kartı Numarası</label>
                        <input type="text" class="form-control kredikarti" id="kartno" name="cardnumber" style="font-size:20px;" required>
                    </div>
                    <div class="form-group">
                        <label for="cardexpiredatemonth">Son Kullanma Tarihi</label>
                        <div class="row">
                            <div class="col-md-6">
                                Ay
                                <select name="cardexpiredatemonth" id="cardexpiredatemonth" class="form-control" required>
                                    <option>1</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                Yıl
                                <select name="cardexpiredateyear" class="form-control" required>
                                    <option>2017</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cardcvv2">CVV (Güvenlik Numarası)</label>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control kredikarti_cvv" name="cardcvv2" id="cardcvv2" required>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Ön bilgilendirme formunu okudum ve kabul ediyorum.</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Mesafeli satış sözleşmesini okudum ve kabul ediyorum.</label>
                            </div>
                        </div>
                    </form>
                    <button type="submit" class="btn btn-success btn-lg">Ödeme Yap</button>
                </div>
                <div class="col-md-7">
                    <h4>Ödenecek Tutar</h4>
                    <span class="price">18.92 <small>TL</small></span>

                    <h4>Kargo</h4>
                    <span class="price">0 <small>TL</small></span>

                    <h4>Teslimat Bilgileri</h4>
                    <p>Teslimat Adresi </p>
                    <a href="#">Değiştir</a>

                    <h4>Kargo</h4>
                    <p>Ücretsiz
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="bg-content">
            <h2>Siparişler</h2>
            <p>Henüz siparişiniz yok</p>
            <table class="table table-bordererd table-hover">
                <tr>
                    <th>Sipariş Kodu</th>
                    <th>Sipariş Tarihi</th>
                    <th>KDV</th>
                    <th>Kargo</th>
                    <th>Toplam Tutar</th>
                    <th>Durum</th>
                    <th>İşlem</th>
                </tr>
                <tr>
                    <td>SP-00123</td>
                    <td>25.09.2017</td>
                    <td>2.99</td>
                    <td>0</td>
                    <td>18.99</td>
                    <td>
                        Sipariş alındı, <br> Onaylandı, <br> Kargoya verildi, <br> Bir sorun var. İletişime geçin!
                    </td>
                    <td><a href="#" class="btn btn-sm btn-success">Detay</a></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="bg-content">
            <h2>Sipariş (SP-00123)</h2>
            <table class="table table-bordererd table-hover">
                <tr>
                    <th>Ürün</th>
                    <th>Tutar</th>
                    <th>Adet</th>
                    <th>Ara Toplam</th>
                    <th>Durum</th>
                </tr>
                <tr>
                    <td> <img src="http://lorempixel.com/120/100/food/2"> Ürün adı</td>
                    <td>18.99</td>
                    <td>1</td>
                    <td>18.99</td>
                    <td>
                        Sipariş alındı, <br> Onaylandı, <br> Kargoya verildi, <br> Bir sorun var. İletişime geçin!
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Toplam Tutar (KDV Dahil)</th>
                    <th>18.99</th>
                    <th></th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Kargo</th>
                    <th>Ücretsiz</th>
                    <th></th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Sipariş Toplamı</th>
                    <th>18.99</th>
                    <th></th>
                </tr>

            </table>
        </div>
    </div>

@endsection
