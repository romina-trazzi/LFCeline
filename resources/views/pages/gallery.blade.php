<!-- prende tutto quello che c'è nel file app della cartella layout -->
@extends('layout.app') 


<!-- si mette al posto dello yield "stylecss" del file app della cartella layout -->

@section('stylecss')

<link rel="stylesheet" href="{{asset('css/gallery.css')}}" type="text/css">

@endsection

<!-- si mette al posto dello yield "mediquerycss" del file app della cartella layout -->

@section('mediquerycss')

<link rel="stylesheet" href="{{asset('css/mqGallery.css')}}" type="text/css">

@endsection


<!-- si mette al posto dello yield del file app della cartella layout -->
@section('content')

<!-- Bootstrap cards -->
<section class="d_flex_center" style="height:100%">

  <div class="card_wrapper d_flex">

    <!-- 1 card -->
    <div class="card" style="max-width:200px">
      <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Louisferdinandceline2.jpg/800px-Louisferdinandceline2.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">John Doe</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>
  
    <!-- 2 card -->
    <div class="card" style="max-width:200px">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Louisferdinandceline2.jpg/800px-Louisferdinandceline2.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>
  
    <!-- 3 card -->
    <div class="card" style="max-width:200px">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Louisferdinandceline2.jpg/800px-Louisferdinandceline2.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>

    <!-- 4 card -->
    <div class="card" style="max-width:200px">
      <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Louisferdinandceline2.jpg/800px-Louisferdinandceline2.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">John Doe</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>

    <!-- 5 card -->
    <div class="card" style="max-width:200px">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Louisferdinandceline2.jpg/800px-Louisferdinandceline2.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>
  
    <!-- 6 card -->
    <div class="card" style="max-width:200px">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Louisferdinandceline2.jpg/800px-Louisferdinandceline2.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>

    <!-- 7 card -->
    <div class="card" style="max-width:200px">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Louisferdinandceline2.jpg/800px-Louisferdinandceline2.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>
      
    <!-- 8 card -->
    <div class="card" style="max-width:200px">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Louisferdinandceline2.jpg/800px-Louisferdinandceline2.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>
    
    <!-- 9 card -->
    <div class="card" style="max-width:200px">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Louisferdinandceline2.jpg/800px-Louisferdinandceline2.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>

    <!-- 10 card -->
    <div class="card" style="max-width:200px">
      <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Louisferdinandceline2.jpg/800px-Louisferdinandceline2.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">John Doe</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>
    
    <!-- 11 card -->
    <div class="card" style="max-width:200px">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Louisferdinandceline2.jpg/800px-Louisferdinandceline2.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>
    
    <!-- 12 card -->
    <div class="card" style="max-width:200px">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Louisferdinandceline2.jpg/800px-Louisferdinandceline2.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>

    <!-- 13 card -->
    <div class="card" style="max-width:200px">
      <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Louisferdinandceline2.jpg/800px-Louisferdinandceline2.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">John Doe</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>


  </div>


   
</section>

@endsection