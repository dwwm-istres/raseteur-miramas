@Extends('layouts\app');
@section('content');

 <div class="album py-5 bg-light">
    <div class="container">
      @foreach($Products as $Product);
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="{{asset('produits/'.$produit->photo_produit)}}" alt="" srcset="">

            <div class="card-body">
              <h4>{{(($produit->nom))}}</h4>
              <p class="card-text">{{(($produit->description))}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">+</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary disable">1</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">-</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>
  </div>

@endsection