<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AttributeController extends Controller
{
    //
    public function attribute_form(){
        return view('admin.add_attribute');
    }
    
    public function setData(Request $request){
        $data = [
            'name' => $request->attr_name,
            'value' => $request->attribute_values
        ];
      Session::put('attributes', $data);
      return redirect()->route('admin_prod_form')->with('success','Attributes');
    //   return response()->json(['session successfully saved']);
    }
}
