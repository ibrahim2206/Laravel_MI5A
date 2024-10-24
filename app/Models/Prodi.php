<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ["nama", "kaprodi", "singkatan", "fakultas_id"];

    public function fakultas(){
        return $this->belongsTo(Fakultas::class, 'fakultas_id', 'id');
    }
}
