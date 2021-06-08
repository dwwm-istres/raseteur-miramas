@Extends("layouts\app")
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel= "stylescheet" href="../ecole_raseteur/_style.scss">
    <title>A Propos</title>
</head>
<body>
<h1 style="text-align: center;">Nos Actualités Articles</h1>                      
     <!-- body  -->
     <div class="row row-cols-1 row-cols-md-2">
        <div class="col mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Titre Article</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam dignissimos nesciunt animi ad sint excepturi, placeat vitae sapiente porro, molestiae voluptas est quam neque sit totam! Eaque doloremque a architecto?.</p>
            </div>
              <img src="../img/contact.jpg" class="card-img-top" alt="...">
           
          </div>
        </div>
        
        
        
            <div class="col mb-4"> 
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Titre Article</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam dignissimos nesciunt animi ad sint excepturi, placeat vitae sapiente porro, molestiae voluptas est quam neque sit totam! Eaque doloremque a architecto?.</p>
            </div>
              <img src="../img/contact.jpg" class="card-img-top" alt="...">
           
          </div>
        </div>
</body>
</html>
@stop