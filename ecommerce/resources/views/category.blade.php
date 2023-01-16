@extends('layouts.master')
@section('title','Kategori')
@section('content')

    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Anasayfa</a></li>
            <li class="active"></li>
        </ol>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <h3>Alt Kategoriler</h3>
                        <div class="list-group categories">
                            @foreach($sub_categories as $sub_category)
                            <a href="{{route('category',$sub_category)}}" class="list-group-item">
                                <i class="fa fa-television"></i>
                                {{$sub_category->category_name}}
                            </a>

                        </div>
                        <h3>Fiyat Aralığı</h3>
                        <form>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 100-200
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 200-300
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="products bg-content">
                    @if(count($products)>0)
                    Sırala
                    <a href="#" class="btn btn-default">Çok Satanlar</a>
                    <a href="#" class="btn btn-default">Yeni Ürünler</a>
                    <hr>
                    @endif
                    <div class="row">
                        @if(count($products)==0)
                            <div class="col-md-12">There are no prooducts in this category yet.</div>
                            @endif
                        @foreach($products as $product)
                        <div class="col-md-3 product">
                            <a href="{{route('product',$product->slug)}}"><img src="http://lorempixel.com/400/400/food/1"></a>
                            <p><a href="{{route('product',$product->slug)}}">{{$product->product_name}}</a></p>
                            <p class="price">{{$product->price}} ₺</p>
                            <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
