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

class Customer_transection_historie extends Model
{
  public function getCustomerName(){
    return Customer::where('id', $this->customer_id)->first()->customer_name;
  }
}
