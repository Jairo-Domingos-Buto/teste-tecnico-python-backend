<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foco extends Model
{
    protected $table = "focos";
    public $fillable = ["nivel_foco", "tempo_minutos", "observacoes"];
}
