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

class Vendor_transection extends Model
{
  public function getVendorName(){
    return Vendor::where('id', $this->vendor_id)->first()->vendor_name;
  }
}
