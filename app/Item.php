<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Item extends Model
{
    public $timestamps = false;
    
   public function mark() {
       $this->done = $this->done ? false : true;
       $this->save();
   }
}
