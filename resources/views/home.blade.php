@Extends('layouts\app')
@section('content')

 <!-- <div class="carousel">
        <button class="carousel__button previous" id="previous"></button>
        <div class="carousel__images">
          <img src="../img/media-1.jpg" alt="">
          <img src="../img/media-2.jpg" alt="">
          <img src="../img/media-3.jpg" alt="">
          <img src="../img/media-4.jpg" alt="">
          <img src="../img/media-5.jpg" alt="">
        </div>
        <button class="carousel__button next" id="next">></button>
      </div> -->


      <div class="desc-home">
        <p class="text-desc">Les courses camarguaises opposent dans un affrontement spectaculaire les raseteurs à des
          taureaux de Camargue. Il s'agit pour les raseteurs, à l’aide d’un crochet en métal, d'attraper les attributs :
          (cocarde, glands et ficelles accrochés aux cornes du taureau). Pour y parvenir, les raseteurs disposent
          seulement de leur courage, de leur vitesse et de leur agilité.

          Le tourneur, un ancien raseteur, attire l'attention du taureau, par des gestes et par la voix, pour bien le
          placer et préparer une course favorable au raseteur.
          Le raseteur démarre sa course et déclenche la charge du taureau.

          Au moment du "raset" (lorsque le taureau et le raseteur se croisent), à l'aide de son crochet, le raseteur
          essaie d'enlever un attribut. La cocarde d'abord,puis les glands et enfin la 1ère et 2eme ficelle.
          Dégagement du raseteur vers la barrière. Le bon cocardier le poursuit jusqu'aux planches.
          C'est "Le coup de barrière", salué par l'air du toréador de l'opéra Carmen de Bizet.</p>
      </div>

      <hr>

      <div class="content-card">
        <h1 class="title-desc">Nos produits recommandés : </h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <img src="https://fakeimg.pl/80x80/" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Produit 1</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, numquam
                  laudantium! Quidem sequi expedita saepe quaerat provident, repellat perferendis cum similique aliquam
                  delectus facilis quis voluptate libero officiis magnam fugit.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">50€</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="https://fakeimg.pl/80x80/" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Produit 2</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, suscipit ducimus
                  tempora nihil at consequuntur et? Aspernatur assumenda dignissimos voluptate nobis ullam, eaque velit
                  doloremque nesciunt quisquam doloribus laboriosam aliquid?</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">30€</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="https://fakeimg.pl/80x80/" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Produit 3</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, illo! Praesentium
                  tenetur nesciunt, tempore beatae eveniet doloremque reiciendis, optio debitis quibusdam ex quo
                  dignissimos? Earum illum explicabo omnis atque aliquam.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">15€</small>
              </div>
            </div>
          </div>
        </div>
      </div>
@stop