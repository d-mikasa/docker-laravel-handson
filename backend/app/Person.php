<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    // protected $table = 'hoge';
    public function getData()
{

    return $this -> id . ':' . $this->name . '(' . $this->age . ')';
}
}
