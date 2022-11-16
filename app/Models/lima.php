<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lima extends Model
{
    use HasFactory;
    protected $table = "sister_company";
    protected $primaryKey = 'id_sc';
    protected $guarded = [];

    public function satu(){
        return $this->hasMany(Post::class, 'id_sc', 'client');
    }
}
