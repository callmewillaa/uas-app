<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    use HasFactory;
    protected $fillable = ['kode', 'nama', 'bobot'];

    public function subkriteria(){
        return $this->hasMany(subkriteria::class, 'kriteria_id', 'id');
    }
}
