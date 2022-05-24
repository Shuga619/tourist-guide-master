<section id="footer">
    <div class="container footer">
      <div class="row">
        <div class="col-md-4">
          <h2 class="head">Types Of Places</h2>
          @forelse ($placetypes as $placetype)
            <p><i class="fas fa-check"> </i>  <a href="{{ route('placetype.wise.place', $placetype->id) }}">{{ $placetype->name }}</a></p>
          @empty 
            <p class="text-center m-auto p-3 text-white bg-dark"><strong>No Placetype found right now</strong></p>
          @endforelse
        </div>
        <div class="col-md-4">
          <h2 class="head">Services</h2>
          <p><i class="fas fa-check"> </i> <a>Safe</a></p>
           <p><i class="fas fa-check"> </i>  <a>Low Cost Packages</a></p>
           <p><i class="fas fa-check"> </i> <a>Amazing Places</a></p>
           <p><i class="fas fa-check"> </i> <a>Secure</a></p>
           <p><i class="fas fa-check"> </i> <a>Talented Guides</a></p>
           <p><i class="fas fa-check"> </i> <a>24/7 Support</a></p>
        </div>

       
        <div class="col-md-4">
          <h2 class="head">Contact Us</h2>
          <p> <i class="fas fa-map-marker-alt"></i> Thimphu, Bhutan</p>
          <p><i class="fas fa-phone"></i>+975 17952356</p>
          <p><i class="fas fa-envelope"></i>bhutanrojatourstreks@gmail.com</p>
        </div>
      </div>
      <hr style="background-color: white;" class="pb-0">
      <p class="text-center p-3 mb-0"> &copy;<b>Bhutan Roja Tours and Treks</b></p>
    </div>
  </section>