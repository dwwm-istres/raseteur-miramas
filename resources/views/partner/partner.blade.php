@Extends('layouts\app')
@section('content')


<h1 style="" class="partner__title">Nos partenaires</h1>

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card mb-4 shadow">
      <img src="{{asset('img/partner/inter.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title border-top">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>

@endsection