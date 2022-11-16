<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class post extends Model
{
    use HasFactory;
    protected $table = "ref_produk";
    protected $primaryKey = 'id_ref_produk';
    protected $guarded = [];

    public function satu(){
        return $this->hasMany(Post::class, 'id_ref_produk', 'ref_produk');
    }
}
