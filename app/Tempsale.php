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

class Tempsale extends Model
{
  public function giveMeStaffNameWhoseInvoiceIsPending(){
    return User::where('id', $this->user_id)->first()->name;
  }
}
