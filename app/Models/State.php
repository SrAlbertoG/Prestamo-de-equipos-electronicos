<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class State extends Model
{
    protected $primaryKey = 'state_id';
    protected $fillable= ['state_name'];
    public function users(){
        return $this->hasMany(User::class);
    }
}
