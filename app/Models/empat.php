<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empat extends Model
{
    use HasFactory;
    protected $table = "template_ibslite";
    protected $primaryKey = 'id_template_ibslite';
    protected $guarded = [];

    public function satu(){
        return $this->hasMany(Post::class, 'id_template_ibslite', 'template_ibslite');
    }
}
