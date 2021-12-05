<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $table = "absen";

    protected $guarded = [''];

    public $timestamps = false;

    public function getMurid(){
        return $this->belongsTo("use App\Models\Murid", "id", "id_murid" );
    }
}
