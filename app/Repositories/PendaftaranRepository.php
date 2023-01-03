<?php

namespace App\Repositories;

use App\Models\Pendaftaran;
use App\Repositories\BaseRepository;

/**
 * Class PendaftaranRepository
 * @package App\Repositories
 * @version December 30, 2022, 10:11 am UTC
*/

class PendaftaranRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'No',
        'Nama',
        'Kota',
        'Jenis_Kelamin',
        'Email'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pendaftaran::class;
    }
}
