@foreach($products as $product)
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
              	 <a href="{{route('product', [$product->id])}}">
                <div class="block-4 text-center border">
                       <figure class="block-4-image">
                         <a href="{{route('product', [$product->id])}}"><img src="{{ asset('public/images/'. $product->image) }}" alt="Image placeholder" class="img-fluid"></a>
                        </figure>
                    <div class="block-4-text p-4">
                    <h3><a href="{{route('product',  [$product->id])}}">{{$product->name}}</a></h3> <!--{{$product['name']}} -- second type!--> 
                      <p class="text-primary font-weight-bold">{{$product->price}}</p>
                    </div>
                </div>

                </a>

              </div>
@endforeach