<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Input1;

use App\Models\Input2;

use App\Models\Item;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;

class DatabseExchange extends Controller
{
    public function submit(Request $request){
        $input1s = Input1::all();
        if(!empty($input1s)){//if Input1 still have data
            foreach($input1s as $input1){
                $input2 = Input2::create([
                    'name'=>$input1['name'],//input 2 data "name" is same as input1 data "name" value
                    'itemname'=>$input1['itemname'],
                    'itemcode'=>$input1['itemcode']
                ]);
            }
        }
        Input1::truncate();//delete all Input1's data
        return view('welcome');

    }

    public function addInput1(Request $request){
        Session::put('name1','John Doe');
        $search_item = $request->input('ScanCode');//ScanCode is search's input name
        $itemName = Item::where('code',$search_item)->first()->value('name'); //get that item's name
        $itemcode = Item::where('code',$search_item)->first()->value('code'); //get that item's code

        $input1 = Input1::create([
            'name'=>Session::get('name1'), //input1's name is John Doe (because of Session::put('name1','John Doe');)
            'itemname'=>$itemName,//input1's itemname is $itemName
            'itemcode'=>$itemcode//input1's itemcode is $itemCode
        ]);


        $inputdatas = Input1::all();//show all Input1's data
        return view('welcome',compact('inputdatas'));
    }
}
