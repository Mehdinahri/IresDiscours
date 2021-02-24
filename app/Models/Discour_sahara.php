<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discour_sahara extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_discours';
    protected $table = 'territoriale_sahara_dans_les_dr_ms_ry_17_07_2018_fr_ang';
}
