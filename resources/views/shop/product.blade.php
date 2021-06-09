@Extends('layouts/app')
@section('content')
<div class="card mb-3 mx-auto" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{asset('img/produits/'.$product->photo_produit)}}" alt="..." class="img-fluid">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"> {{$product->nom_produit}}</h5>
          <p class="card-text">{{$product->description_produit}}</p>
            <div class="card-footer">
              <div class="btn-toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-5" role="group">
                  <button type="button" class="btn btn-light">+</button>
                  <button type="button" class="btn btn-light">1</button>
                  <button type="button" class="btn btn-light">-</button>
                </div>
                <button type="button" class="btn text-muted">{{$product->prix_ht}}</button>                 
                </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
@stop