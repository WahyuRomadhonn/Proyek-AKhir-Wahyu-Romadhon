<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInformasiRequest;
use App\Http\Requests\UpdateInformasiRequest;
use App\Repositories\InformasiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class InformasiController extends AppBaseController
{
    /** @var InformasiRepository $informasiRepository*/
    private $informasiRepository;

    public function __construct(InformasiRepository $informasiRepo)
    {
        $this->informasiRepository = $informasiRepo;
    }

    /**
     * Display a listing of the Informasi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $informasis = $this->informasiRepository->all();

        return view('informasis.index')
            ->with('informasis', $informasis);
    }

    /**
     * Show the form for creating a new Informasi.
     *
     * @return Response
     */
    public function create()
    {
        return view('informasis.create');
    }

    /**
     * Store a newly created Informasi in storage.
     *
     * @param CreateInformasiRequest $request
     *
     * @return Response
     */
    public function store(CreateInformasiRequest $request)
    {
        $input = $request->all();

        $informasi = $this->informasiRepository->create($input);

        Flash::success('Informasi saved successfully.');

        return redirect(route('informasis.index'));
    }

    /**
     * Display the specified Informasi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $informasi = $this->informasiRepository->find($id);

        if (empty($informasi)) {
            Flash::error('Informasi not found');

            return redirect(route('informasis.index'));
        }

        return view('informasis.show')->with('informasi', $informasi);
    }

    /**
     * Show the form for editing the specified Informasi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $informasi = $this->informasiRepository->find($id);

        if (empty($informasi)) {
            Flash::error('Informasi not found');

            return redirect(route('informasis.index'));
        }

        return view('informasis.edit')->with('informasi', $informasi);
    }

    /**
     * Update the specified Informasi in storage.
     *
     * @param int $id
     * @param UpdateInformasiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInformasiRequest $request)
    {
        $informasi = $this->informasiRepository->find($id);

        if (empty($informasi)) {
            Flash::error('Informasi not found');

            return redirect(route('informasis.index'));
        }

        $informasi = $this->informasiRepository->update($request->all(), $id);

        Flash::success('Informasi updated successfully.');

        return redirect(route('informasis.index'));
    }

    /**
     * Remove the specified Informasi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $informasi = $this->informasiRepository->find($id);

        if (empty($informasi)) {
            Flash::error('Informasi not found');

            return redirect(route('informasis.index'));
        }

        $this->informasiRepository->delete($id);

        Flash::success('Informasi deleted successfully.');

        return redirect(route('informasis.index'));
    }
}
