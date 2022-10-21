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

class Inventorie extends Model
{
  protected $fillable = ['product_id', 'quantity',  'created_at'];
  protected $table = 'inventories';

  public function product(){
        return $this->belongsTo('App\Product');
  }

}
