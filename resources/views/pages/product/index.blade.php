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

                <div class="col-md-3">
                  <div class="card" style="width: 16rem;">

                    <!-- @php $i=1; @endphp -->

                    @foreach($product->images as $image)

                      <!-- @if($i > 0) -->
                       <img class="card-img-top" src="{{ asset('Images/Products/'. $image->image)}}" alt="Card image cap">
                      <!-- @endif -->

                    <!-- @php $i--; $endphp -->

                  <!-- @endforeach -->
                   <!-- <img class="card-img-top" src="{{ asset('Images/Products/'. 'one.jpg')}}" alt="Card image cap"> -->
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
