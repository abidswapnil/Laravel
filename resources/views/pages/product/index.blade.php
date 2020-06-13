@extends('layout.master')

@section('content')

      <!-- <div class="list-group col-md-2">
        <a href="#" class="list-group-item list-group-item-warning">
          List
        </a>
        <a href="#" class="list-group-item list-group-item-action">list 1</a>
        <a href="#" class="list-group-item list-group-item-action">list 2</a>
        <a href="#" class="list-group-item list-group-item-action">list 3</a>
        <a href="#" class="list-group-item list-group-item-action">list 4</a>
        <a href="#" class="list-group-item list-group-item-action">list 5</a>
        <a href="#" class="list-group-item list-group-item-action">list 6</a>
        <a href="#" class="list-group-item list-group-item-action">list 7</a>
        <a href="#" class="list-group-item list-group-item-action">list 8</a>
        <a href="#" class="list-group-item list-group-item-action">list 9</a>
        <a href="#" class="list-group-item list-group-item-action">list 10</a>

      </div> -->
            <!-- @include('partials.product-sidebar') -->

            @foreach($products as $product)

                <div class="col-md-8">
                  <div class="widget">
                    <h3>All Products</h3>
                    <div class="row">
                      <div class="col-md-3">
                          <div class="card" style="width: 16rem;">
                            <img class="card-img-top" src="{{ asset('Images/Products/'. 'one.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">
                                {{$product->title}}
                              </h5>
                              <p class="card-text"></p>
                              <a href="#" class="btn btn-primary">Add to cart</a>
                            </div>
                          </div>

                      </div>

                    </div>

                  </div>

                </div>


            @endforeach

@endsection
