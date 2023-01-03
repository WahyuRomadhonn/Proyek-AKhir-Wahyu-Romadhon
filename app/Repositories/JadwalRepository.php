<?php

namespace App\Repositories;

use App\Models\Jadwal;
use App\Repositories\BaseRepository;

/**
 * Class JadwalRepository
 * @package App\Repositories
 * @version January 2, 2023, 11:55 pm UTC
*/

class JadwalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'No',
        'Matkul',
        'Keterangan',
        'Jam',
        'Ruangan'
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
        return Jadwal::class;
    }
}
