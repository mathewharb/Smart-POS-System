<?php
/*

 # APPLICATION NAME: Smart-POS System
 # AUTHOR:           Mathew Harb
 # SITE:             https://github.com/mathewharb
 # EMAIL:            harbmathew@yahoo.com
 # CONTACT:          +2207425159

*/
namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
  public function getProductName(){
    return Product::where('id', $this->product_id)->first()->product_name;
  }
}
