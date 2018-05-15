<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    public function getListInId(String $ids){
        return $this::whereRaw('id IN (?)',[$ids])->get();
    }
}
