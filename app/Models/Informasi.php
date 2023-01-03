<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Informasi
 * @package App\Models
 * @version January 3, 2023, 12:07 am UTC
 *
 * @property integer $No
 * @property string $Fakultas
 * @property string $Prodi
 * @property string $Kelas
 * @property string $Keterangan
 */
class Informasi extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'informasis';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'No',
        'Fakultas',
        'Prodi',
        'Kelas',
        'Keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'No' => 'integer',
        'Fakultas' => 'string',
        'Prodi' => 'string',
        'Kelas' => 'string',
        'Keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'No' => 'required',
        'Fakultas' => 'required',
        'Prodi' => 'required',
        'Kelas' => 'required',
        'Keterangan' => 'required'
    ];

    
}
