<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createmodel=CountryAPIRequest;
use App\Http\Requests\API\Updatemodel=CountryAPIRequest;
use App\Models\model=Country;
use App\Repositories\model=CountryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class model=CountryController
 * @package App\Http\Controllers\API
 */

class model=CountryAPIController extends AppBaseController
{
    /** @var  model=CountryRepository */
    private $model=CountryRepository;

    public function __construct(model=CountryRepository $model=CountryRepo)
    {
        $this->model=CountryRepository = $model=CountryRepo;
    }

    /**
     * Display a listing of the model=Country.
     * GET|HEAD /model=Countries
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->model=CountryRepository->pushCriteria(new RequestCriteria($request));
        $this->model=CountryRepository->pushCriteria(new LimitOffsetCriteria($request));
        $model=Countries = $this->model=CountryRepository->all();

        return $this->sendResponse($model=Countries->toArray(), 'Model= Countries retrieved successfully');
    }

    /**
     * Store a newly created model=Country in storage.
     * POST /model=Countries
     *
     * @param Createmodel=CountryAPIRequest $request
     *
     * @return Response
     */
    public function store(Createmodel=CountryAPIRequest $request)
    {
        $input = $request->all();

        $model=Countries = $this->model=CountryRepository->create($input);

        return $this->sendResponse($model=Countries->toArray(), 'Model= Country saved successfully');
    }

    /**
     * Display the specified model=Country.
     * GET|HEAD /model=Countries/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var model=Country $model=Country */
        $model=Country = $this->model=CountryRepository->findWithoutFail($id);

        if (empty($model=Country)) {
            return $this->sendError('Model= Country not found');
        }

        return $this->sendResponse($model=Country->toArray(), 'Model= Country retrieved successfully');
    }

    /**
     * Update the specified model=Country in storage.
     * PUT/PATCH /model=Countries/{id}
     *
     * @param  int $id
     * @param Updatemodel=CountryAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updatemodel=CountryAPIRequest $request)
    {
        $input = $request->all();

        /** @var model=Country $model=Country */
        $model=Country = $this->model=CountryRepository->findWithoutFail($id);

        if (empty($model=Country)) {
            return $this->sendError('Model= Country not found');
        }

        $model=Country = $this->model=CountryRepository->update($input, $id);

        return $this->sendResponse($model=Country->toArray(), 'model=Country updated successfully');
    }

    /**
     * Remove the specified model=Country from storage.
     * DELETE /model=Countries/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var model=Country $model=Country */
        $model=Country = $this->model=CountryRepository->findWithoutFail($id);

        if (empty($model=Country)) {
            return $this->sendError('Model= Country not found');
        }

        $model=Country->delete();

        return $this->sendResponse($id, 'Model= Country deleted successfully');
    }
}
