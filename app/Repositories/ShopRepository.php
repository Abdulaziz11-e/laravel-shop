<?php

namespace App\Repositories;

use App\Models\ {
    Product,
    Cart,
    Message
};

//use Illuminate\Support\Facades\DB;

class ShopRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
   // protected $model; // было изначально
     protected $model_product;
     protected $model_cart;
     protected $model_message;
    

    /**
     * Create a new ProductRepository instance.
     *
     * @param  \App\Models\Product $product
     */
    public function __construct(Product $product, Cart $cart, Message $message)
    {
        //$this->model = $product; //было изначально
        $this->model_product = $product; // стало
        $this->model_cart = $cart;  //стало
        $this->model_message = $message;  //стало
    }

    /**
     * Create a query for Products.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcSelect($request)
    {
        //$query = $this->model //было изначально
         $query = $this->model_product //стало

        //$query = Product:: //->second type!
        //$query = DB::table('products') //->third type!
            ->select('id', 'name', 'price', 'image');
            //->where('top9', 1); //where('top9','=' 1); second type!
            //->where('price', '<', 80)
            //->orderBy('price', 'asc'); 

        if(isset($request->search)) $query->where('name', 'like', '%' . $request->search . '%');
        return $query->get();

        return $query->get();
    }

     /**
     * Create a query for Product.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcSelectOne($id)
    {
        //$query = $this->model //было изначально
         $query = $this->model_product //стало
            ->select('id', 'name', 'price', 'image')
            ->where('top9', 1) //where('top9','=' 1); second type!
            ->where('id', $id); 
        return $query->get();
    }

    /**
     * Store data to cart.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function store($request)
    {
      //Cart::create($request->all()); //было изначально
         //$this->model_cart->user_id = auth()->user()->id; // пример который будет!
        $this->model_cart->name = $request->name;
        $this->model_cart->price = $request->price;
        $this->model_cart->image = $request->image;
        $this->model_cart->save(); //--> заменитель create|
        
    }

    /**
     * Create a query for Carts.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function fromCart()
    {
        //$query = $this->model //было изначально
         $query = $this->model_cart //стало
            ->select('id', 'name', 'price', 'image');
        return $query->get();
    }

    /**
     * Remove all cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clearall()
    {
        $this->model_cart->truncate();
    }

    /**
     * Remove one from cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clearone($request)
    {
        $cart = $this->model_cart->find($request->id);
        $cart->delete();
    }

    /**
     * Mailer of sending message.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function mailer($request)
    {  
        //Message::create($request->all());
        $this->model_message->email = $request->email;
        $this->model_message->save();
          
        $title = 'Message of your registration - ' . date('d-m-Y H:i:s');
        $message = 'You has been successfully registred!';
        $client = new \GuzzleHttp\Client([
           'headers' => [
               //'Authorization' => '9267585bb333341dc049321d4e74398f',
               //'Content-Type' => 'application/json',
            ]
        ]);
        $response = $client->request('GET', 'http://api.25one.com.ua/api_mail.php?email_to=' . $request->email . '&title=' . $title . '&message=' . $message,
         [
            //...
         ]);    
        //return json_decode($response->getBody()->getContents());  
        return response()->json([
                'answer' => $response->getBody()->getContents(),
            ]);
    }

}
