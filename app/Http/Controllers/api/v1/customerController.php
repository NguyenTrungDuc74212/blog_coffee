<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Resources\v1\customerResource;
use validator;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return customerResource::collection(Customer::paginate(5));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	/*get form create*/
    	$customer = array('name'=>'đức đẹp zai');
    	return new customerResource($customer) ; /*trả về dữ liệu customer vừa mới thêm*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$request->validate(
    		[
    			"name"=>"required",
    			"phone"=>"required",
    			"address"=>"required",
    			"email"=>"required",
    			"city"=>"required",
    		]
    	);
    	$customer = Customer::create($request->all());
    	return new customerResource($customer); /*trả về dữ liệu customer vừa mới thêm*/


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
    	$json = new customerResource($customer);   
        return $json;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($customer)
    {
        //get form-edit
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    /*customer ở đây là id, nó sẽ vào model tìm khách hàng tương ứng với id đó */
    {

    	$customer->update($request->all());
    	return new customerResource($customer);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
    	$customer->delete();
    	return new customerResource($customer);
    }
}
