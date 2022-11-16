<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiga extends Model
{
    use HasFactory;
    protected $table = "server_service";
    protected $primaryKey = 'id_server_service';
    protected $guarded = [];

    public function satu(){
        return $this->hasMany(Post::class, 'id_server_service', 'server_service');
    }
}

