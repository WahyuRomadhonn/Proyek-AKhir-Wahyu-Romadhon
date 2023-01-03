<?php

namespace App\Repositories;

use App\Models\Informasi;
use App\Repositories\BaseRepository;

/**
 * Class InformasiRepository
 * @package App\Repositories
 * @version January 3, 2023, 12:07 am UTC
*/

class InformasiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'No',
        'Fakultas',
        'Prodi',
        'Kelas',
        'Keterangan'
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
        return Informasi::class;
    }
}
