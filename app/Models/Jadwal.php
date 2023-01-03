<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Jadwal
 * @package App\Models
 * @version January 2, 2023, 11:55 pm UTC
 *
 * @property integer $No
 * @property string $Matkul
 * @property string $Keterangan
 * @property integer $Jam
 * @property string $Ruangan
 */
class Jadwal extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'jadwals';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'No',
        'Matkul',
        'Keterangan',
        'Jam',
        'Ruangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'No' => 'integer',
        'Matkul' => 'string',
        'Keterangan' => 'string',
        'Jam' => 'integer',
        'Ruangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'No' => 'required',
        'Matkul' => 'required',
        'Keterangan' => 'required',
        'Jam' => 'required',
        'Ruangan' => 'required'
    ];

    
}
