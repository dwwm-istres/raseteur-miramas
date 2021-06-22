@Extends('layouts\app')
@section('content')
<nav class="navbar navbar-light bg-light mb-5">
  @foreach ($categories as $category )
      <li class="nav-item">
          <a href="{{route('category' , ['id'=>$category->id])}}" class="nav-link">{{$category->nom_categories}}</a>
      </li>
  @endforeach   
</nav>

  <div class="row row-cols-1 row-cols-md-4">
@foreach($products as $produit)   
    <div class="col mb-5">
      <div class="card h-100">
          <img src="{{asset('img/produits/'.$produit->photo_produit)}}" alt="{{$produit->nom_produit}}" class="img-fluid">
          <div class="card-body">
            <div class="card-title">
              <h5>
                {{$produit->nom_produit}}
              </h5>
            </div>
            <p>{{$produit->description_produit}} <br>
           
              <a href="{{route('category' , ['id'=>$produit->category_id])}}" class="nav-link"><b>{{$produit->category->nom_categories}}</b></a>
              
            </p>
          </div>
          <div class="card-footer text-right">
          <a href="{{route('Product',['id'=>$produit->id])}}" class="btn btn-primary">Voir ce produit</a>
          </div>
      </div>
    </div>
@endforeach
  </div>
@endsection
{{-- vu pour afficher un produit --}}