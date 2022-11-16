<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\post;
use Cviebrock\EloquentSluggable\Sluggable;

class satu extends Model
{
    use HasFactory, Sluggable;
    protected $table = "app_lembaga";
    protected $primaryKey = 'id_app_lembaga';
    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKey()
    {
        return 'slug';
    }

    public function post(){
        return $this->belongsTo(Post::class, 'ref_produk', 'id_ref_produk');
    }

    public function tiga(){
        return $this->belongsTo(Tiga::class, 'server_service', 'id_server_service');
    }

    public function empat(){
        return $this->belongsTo(Empat::class, 'template_ibslite', 'id_template_ibslite');
    }
    public function lima(){
        return $this->belongsTo(Lima::class, 'client', 'id_sc');
    }

};
