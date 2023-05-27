<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //customer home page
    public function home(){
        return view('customer.insert');
    }



    //create customer data
    public function insert(Request $request){
        // dd($request->all());

        // display current date
        // dd(Carbon::now());

        //first way => MVC=>Model+View+Controller
        //using model

        $data=[

            'name'=>$request->customerName,
            'address'=>$request->customerAddress,
            'phone'=>$request->customerPhone,
            'created_at'=>Carbon::now(),
            'updated_at'=>'2028-10-10 10:10:10'

        ];
        Customer::create($data);
        return "Create Success..";


        // second way 
        // $record=new Customer;
        // $record->name=$request->customerName;
        // $record->address=$request->customerAddress;
        // $record->phone=$request->customerPhone;
        // $record->created_at=Carbon::now();
        // $record->updated_at=Carbon::now();
        // $record->save();

        // return "created success.......";


    }


    //get customer data
    public function read(){
        $data=new Customer;
        // 4 mean id number 4
        // to array is mean that changing to array format.
        // $result=$data->find(4)->toArray();

        //first array of database
        // $result=$data->first()->toArray();


        //find hasnot array into database
        $result=$data->findOrFail(1);

        // dd($result);



        // another way to ouput from database to browser.
        dd(Customer::find(1)->toArray());



         // another way to ouput using with where condition key word from database to browser.
        dd(Customer::where('address','2')->get()->toArray());
    }


}
