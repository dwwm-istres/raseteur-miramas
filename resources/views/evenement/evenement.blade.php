@Extends('layouts\app')
@section('content')


<!-- <div class="container bg-white"> -->

<section class="section-asymetrique" id="asym">

  <h2>Évenements à venir</h2>

  <div class="bloc-left bloc-1">
    <div class="bloc-txt-left">
      <h3>Lorem ipsum dolor</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia amet cumque rem corporis odit illum sint
        totam. Reiciendis, porro sit! Commodi incidunt distinctio ipsa molestias pariatur illo veniam veritatis
        voluptate voluptatum aspernatur, odit repellat porro fugit in dolor, tempora atque necessitatibus quibusdam
        et facilis libero delectus fugiat hic! Perferendis, error!</p>
      <button id="btn-hover" class="btn-bloc-left" type="button">En savoir plus</button>
    </div>
    <img src="{{asset('img/img-course/img-1.jpg')}}" alt="couloir d'un temple de kyoto">
  </div>

  <div class="bloc-2">
    <div class="bloc-txt-2">
      <h3>Lorem ipsum dolor</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia amet cumque rem corporis odit illum sint
        totam. Reiciendis, porro sit! Commodi incidunt distinctio ipsa molestias pariatur illo veniam veritatis
        voluptate voluptatum aspernatur, odit repellat porro fugit in dolor, tempora atque necessitatibus quibusdam
        et facilis libero delectus fugiat hic! Perferendis, error!</p>
      <button id="btn-hover" type="button">En savoir plus</button>
    </div>
    <img src="{{asset('img/img-course/img-1.jpg')}}" alt="un château à Kyoto">
  </div>

  <div class="bloc-left bloc-3">
    <div class="bloc-txt-left">
      <h3>Lorem ipsum dolor</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia amet cumque rem corporis odit illum sint
        totam. Reiciendis, porro sit! Commodi incidunt distinctio ipsa molestias pariatur illo veniam veritatis
        voluptate voluptatum aspernatur, odit repellat porro fugit in dolor, tempora atque necessitatibus quibusdam
        et facilis libero delectus fugiat hic! Perferendis, error!</p>
      <button id="btn-hover" class="btn-bloc-left" type="button">En savoir plus</button>
    </div>
    <img src="{{asset('img/img-course/img-1.jpg')}}" alt="une geisha">
  </div>

  <div class="ligne-gauche"></div>
  <div class="ligne-milieu"></div>
  <!-- <div class="ligne-droite"></div> -->
</section>



<button class="btn-bloc-bottom" type="button">Proposer un évenement</button>

<!-- </div> -->



<!-- Script -->

<script src="carousel.js"></script>
<scrip src="assets/bundle.js"></scrip>


@endsection