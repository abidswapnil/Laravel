@include('partials.header')
@include('partials.style')

      <!-- @include('partials.product-sidebar') -->

      <div class="container-fluid">
        <div class="row">

          @include('partials.sidebar')

          <div class="col-md-8">
            <h3 class="display-4">Products</h3><hr>
            <div class="row">

              @foreach($products as $product)

                <div class="cols">
                  <div class="card" style="width: 13rem;">

                    @foreach($product->images as $image)

                       <img class="card-img-top" src="{{ asset('Images/Products/'. $image->image)}}" alt="Card image cap">

                    @endforeach

                   <div class="card-body">
                     <h5 class="card-title">{{ $product->title }}</h5>
                     <p class="card-text">Price : {{ $product->price }} Tk</p>
                     <a href="#" class="btn btn-outline-warning">Add to cart</a>
                   </div>
                 </div>
                </div>

              @endforeach

            </div>
          </div>
        </div>
      </div>

@include('partials.script')
