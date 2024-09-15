<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'flats';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'link',
        'adress',
        'description',
        'foto1',
        'foto2',
        'foto3',
        'foto4',
        'foto5',
        'foto6',
        'foto7',
        'foto8',
        'foto9',
        'foto10',
        'foto11',
        'foto12',
        'foto13',
        'foto14',
        'foto15',
        'foto16',
        'foto17',
        'foto18',
        'foto19',
        'foto20',
        'foto21',
        'foto22',
    ];
}
