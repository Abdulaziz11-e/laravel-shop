                @foreach($carts as $cart)
                  <tr>
                    <td class="product-thumbnail">
                      <img src="{{ asset('public/images/' . $cart->image) }}" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{$cart->name}}</h2>
                    </td>
                    <td>{{$cart->price}}</td>
                    
                    <td>1</td>
                    <td><a href="#" class="btn btn-primary btn-sm listbuttonremove" id="{{$cart->id}}">X</a></td>
                  </tr>
               @endforeach