@Extends('layouts\app')
@section('content')
<<<<<<< Updated upstream
<div class="row row-cols-1 row-cols-md-4">
  @foreach($products as $produit)
  <div class="col mb-5">
    <div class="card h-100">
      <img src="{{asset('img/produits/'.$produit->photo_produit)}}" alt="" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h5>
            {{$produit->nom_produit}}
          </h5>
        </div>
        <p>{{$produit->description_produit}}</p>
      </div>
      <div class="card-footer text-right">
        <a href="#" class="btn btn-primary">Voir ce produit</a>
=======
  <div class="row row-cols-1 row-cols-md-3">
@foreach($products as $produit)   
    <div class="col mb-5">
      <div class="card h-100">
        <img src="{{asset('img/produits/'.$produit->photo_produit)}}" alt="" class="img-fluid">
        <div class="card-body">
          <div class="card-title">
            <h5>
              {{$produit->nom_produit}}
            </h5>
          </div>
          <p>{{$produit->description_produit}}</p>
        </div>
        <div class="card-footer text-right">
        <a href="{{route('Product',['id'=>$produit->id])}}" class="btn btn-primary">Voir ce produit</a>
        </div>
>>>>>>> Stashed changes
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection