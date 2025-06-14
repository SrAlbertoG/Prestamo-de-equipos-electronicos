<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Role extends Model
{
    protected $primaryKey = 'role_id';
    protected $fillable = ['role_name'];
    public function users(){
        return $this->hasMany(User::class,'user_rol','role_id');
    }
}
