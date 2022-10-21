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

class Vendor extends Model
{
  protected $fillable = ['vendor_name', 'phone_number', 'address','email_address', 'created_at','soft_delete'];
  protected $table = 'vendors';
}
