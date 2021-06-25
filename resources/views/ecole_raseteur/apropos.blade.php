@Extends("layouts\app")
@section("content")


<h1 style="text-align: center">Nos Actualités Articles</h1>                      
<div class="card">
  <div class="card-body">
    <h5 class="card-title"style="text-align: center">Deroulement de l'epreuve</h5>
    <p class="card-text">Les courses camarguaises opposent dans un affrontement spectaculaire les raseteurs à des
        taureaux de Camargue. Il s'agit pour les raseteurs, à l’aide d’un crochet en métal, d'attraper les attributs :
        (cocarde, glands et ficelles accrochés aux cornes du taureau). Pour y parvenir, les raseteurs disposent
        seulement de leur courage, de leur vitesse et de leur agilité.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  </div>
          <h2 style="text-align: center">Petite video d'exemple</h2>     
        <video id="video" src="{{asset('video/Le razet - Ecole Miramas.mp4')}}" autoplay loop muted ></video>
  </div>     
  
@stop