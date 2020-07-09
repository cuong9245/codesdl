<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatewhySelectRequest;
use App\Http\Requests\UpdatewhySelectRequest;
use App\Repositories\whySelectRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class whySelectController extends AppBaseController
{
    /** @var  whySelectRepository */
    private $whySelectRepository;

    public function __construct(whySelectRepository $whySelectRepo)
    {
        $this->whySelectRepository = $whySelectRepo;
    }

    /**
     * Display a listing of the whySelect.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->whySelectRepository->pushCriteria(new RequestCriteria($request));
        $whySelects = $this->whySelectRepository->all();

        return view('why_selects.index')
            ->with('whySelects', $whySelects);
    }

    /**
     * Show the form for creating a new whySelect.
     *
     * @return Response
     */
    public function create()
    {
        return view('why_selects.create');
    }

    /**
     * Store a newly created whySelect in storage.
     *
     * @param CreatewhySelectRequest $request
     *
     * @return Response
     */
    public function store(CreatewhySelectRequest $request)
    {
        $input = $request->all();

        $whySelect = $this->whySelectRepository->create($input);

        Flash::success('Why Select saved successfully.');

        return redirect(route('whySelects.index'));
    }

    /**
     * Display the specified whySelect.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $whySelect = $this->whySelectRepository->findWithoutFail($id);

        if (empty($whySelect)) {
            Flash::error('Why Select not found');

            return redirect(route('whySelects.index'));
        }

        return view('why_selects.show')->with('whySelect', $whySelect);
    }

    /**
     * Show the form for editing the specified whySelect.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $whySelect = $this->whySelectRepository->findWithoutFail($id);

        if (empty($whySelect)) {
            Flash::error('Why Select not found');

            return redirect(route('whySelects.index'));
        }

        return view('why_selects.edit')->with('whySelect', $whySelect);
    }

    /**
     * Update the specified whySelect in storage.
     *
     * @param  int              $id
     * @param UpdatewhySelectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatewhySelectRequest $request)
    {
        $whySelect = $this->whySelectRepository->findWithoutFail($id);

        if (empty($whySelect)) {
            Flash::error('Why Select not found');

            return redirect(route('whySelects.index'));
        }

        $whySelect = $this->whySelectRepository->update($request->all(), $id);

        Flash::success('Why Select updated successfully.');

        return redirect(route('whySelects.index'));
    }

    /**
     * Remove the specified whySelect from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $whySelect = $this->whySelectRepository->findWithoutFail($id);

        if (empty($whySelect)) {
            Flash::error('Why Select not found');

            return redirect(route('whySelects.index'));
        }

        $this->whySelectRepository->delete($id);

        Flash::success('Why Select deleted successfully.');

        return redirect(route('whySelects.index'));
    }
}
