<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
 public function index(){
print_r(route('products'));
    return view('products.index');
 }
 public function detail($productName, $id){
//    $phone =[
//       'samsung'=>'samsung galaxy',
//       'iphone'=> 'iphone X'
//    ];
// return view('products.index', [
//    'product'=>$phone[$productName] ?? 'unknow product'
// ]);
return "product name is ".$productName.", id is ".$id; 
 }
}
