<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pendaftaran
 * @package App\Models
 * @version December 30, 2022, 10:11 am UTC
 *
 * @property integer $No
 * @property string $Nama
 * @property string $Kota
 * @property string $Jenis_Kelamin
 * @property string $Email
 */
class Pendaftaran extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'pendaftarans';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'No',
        'Nama',
        'Kota',
        'Jenis_Kelamin',
        'Email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'No' => 'integer',
        'Nama' => 'string',
        'Kota' => 'string',
        'Jenis_Kelamin' => 'string',
        'Email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'No' => 'required',
        'Nama' => 'required',
        'Kota' => 'required',
        'Jenis_Kelamin' => 'required',
        'Email' => 'required'
    ];

    
}
