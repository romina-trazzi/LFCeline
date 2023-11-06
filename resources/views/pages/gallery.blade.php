<!-- prende tutto quello che c'è nel file app della cartella layout -->
@extends('layout.app') 

<!-- si mette al posto dello yield del file app della cartella layout -->
@section('content')

<!-- Bootstrap cards -->
<section class="d_flex_center"  style="height:100%">

    <!-- First card -->
    <div class="card" style="max-width:200px">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Louisferdinandceline2.jpg/800px-Louisferdinandceline2.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>
    
    <!-- Second card -->
    <div class="card" style="max-width:200px">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Louisferdinandceline2.jpg/800px-Louisferdinandceline2.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>
    
    <!-- Third card -->
    <div class="card" style="max-width:200px">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Louisferdinandceline2.jpg/800px-Louisferdinandceline2.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>
  
  </section>

@endsection