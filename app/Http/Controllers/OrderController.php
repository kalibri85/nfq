<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Order;
use App\Models\Customer;
use DB; 
use Validator;
class OrderController extends Controller
{
    //
	function __construct()
	{

		// Validation messages
		$this->messages = array(
			'required'		=> 'Būtina užpildyti',
			'email'			=> 'Netinkamas el. pašto adresas',
			'min'			=> 'Reikškmė turi susidaryti bent iš :min simbolių',
			'numeric'       => 'Pašto kodą sudaro 5 skaitmenys, pvz.: 00001',
		);
	}
	public function index()
   {
         return view('index');
   }
   public function create()
   {
       return view('order.create');
   }

   public function store(Order $orderModel, Request $request)
   {
	    $validation = Validator::make($request->all(), array(
			'name' 					=> 'required',
			'surname' 				=> 'required',
			'email' 				=> 'required|email',
			'phone' 				=> 'required',
			'address' 				=> 'required',
			'zipcode' 				=> 'numeric',
			
		), $this->messages);

		if ($validation->fails())
		{
			return redirect()->route('index#uzsakyti')->withInput()->withErrors($validation->messages());
		}
		else
		{
	        $new_customer 	= 0;
			
			$customer  = DB::table('customers')->where('email', $request->input('email'))->first();;
            
			if ( ! $customer)
			{
				$new_customer 	= 1;
				$customer 		= new Customer;
		

			    $customer->name 			= $request->input('name');
			    $customer->surname 			= $request->input('surname');
			    $customer->email 			= $request->input('email');
			    $customer->phone	 		= $request->input('phone');
			    $customer->address	 		= $request->input('address');
			    $customer->city	 		= $request->input('city');
			    $customer->zipcode	 		= $request->input('zipcode');
			    $customer->save();
		
		    }
	
            $order = new Order;
     
			$order->id_customer	= $customer->id;
			$order->title 		= "TOSHIBA SATELLITE RADIUS 14 E45W-C4200X";
			$order->quantity 	= $request->input('quantity');
			$order->amount 	= round(1200);
			$order->save();
		
			return redirect()->route('index');
        }
   }
   public function show(Request $request)
   {
    $orders = DB::table('orders')->where(function ($q) use($request)
		{
		
			if ($request->get('id') != null){
				$id = substr($request->get('id'), 4);
				$q->where('id', $id);
			}
		})
		
			->orderBy('created_at', $request->get('sort'))
			->paginate(10);

		
            return view("uzsakymu_sarasas",compact('orders'));
    }
	public function detail($id)
   {
   // $orders = DB::table('orders')->where('id', $id)->with('customers')->get();
    $orders = Order::with('customers')->where('id', $id)->get();
    //dd($orders);
		
            return view("detail",compact('orders'));
    }
}
						