<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;//inseriamo le caratteristiche che vogliamo dare al nostro modello

    protected $fillable=["titolo","trama","genere"];

}
