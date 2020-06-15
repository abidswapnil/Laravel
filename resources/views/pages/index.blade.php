@include('partials.header')
@include('partials.style')

    <div class="container-fluid">
      <div class="row">
        @include('partials.sidebar')
        <div class="col-md-8">
            <h3 class="display-4">Featured Products</h3><hr>
            <div class="row">
              <div class="col-md-3">
                <div class="card" style="width: 16rem;">
                 <img class="card-img-top" src="{{ asset('Images/Products/'. 'sony.jpg')}}" alt="Card image cap">
                 <div class="card-body">
                   <h5 class="card-title">Sony Xperia</h5>
                   <p class="card-text"></p>
                   <a href="#" class="btn btn-outline-warning">Add to cart</a>
                 </div>
               </div>
              </div>
              <div class="col-md-3">
                <div class="card" style="width: 16rem;">
                 <img class="card-img-top" src="{{ asset('Images/Products/'. 'htc.jpg')}}" alt="Card image cap">
                 <div class="card-body">
                   <h5 class="card-title">Htc Desire816</h5>
                   <p class="card-text"></p>
                   <a href="#" class="btn btn-outline-warning">Add to cart</a>
                 </div>
               </div>
              </div>
              <div class="col-md-3">
                <div class="card" style="width: 16rem;">
                 <img class="card-img-top" src="{{ asset('Images/Products/'. 'oneplus.jpg')}}" alt="Card image cap">
                 <div class="card-body">
                   <h5 class="card-title">OnePlus 7 pro</h5>
                   <p class="card-text"></p>
                   <a href="#" class="btn btn-outline-warning">Add to cart</a>
                 </div>
               </div>
              </div>
            </div>
         </div>
      </div>
    </div>



@include('partials.script')
@include('partials.footer')
