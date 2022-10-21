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

class Expense extends Model
{
  public function giveMeExpenseCategoryName(){
    return Expense_categorie::where('id', $this->expense_categorie_id)->first()->category_name;
  }
}
