<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateintroduceRequest;
use App\Http\Requests\UpdateintroduceRequest;
use App\Repositories\introduceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class introduceController extends AppBaseController
{
    /** @var  introduceRepository */
    private $introduceRepository;

    public function __construct(introduceRepository $introduceRepo)
    {
        $this->introduceRepository = $introduceRepo;
    }

    /**
     * Display a listing of the introduce.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->introduceRepository->pushCriteria(new RequestCriteria($request));
        $introduces = $this->introduceRepository->all();

        return view('introduces.index')
            ->with('introduces', $introduces);
    }

    /**
     * Show the form for creating a new introduce.
     *
     * @return Response
     */
    public function create()
    {
        return view('introduces.create');
    }

    /**
     * Store a newly created introduce in storage.
     *
     * @param CreateintroduceRequest $request
     *
     * @return Response
     */
    public function store(CreateintroduceRequest $request)
    {
        $input = $request->all();

        $introduce = $this->introduceRepository->create($input);

        if($request->file('image')){

            $path = Storage::disk('public')->put('images',  $request->file('image'));

            $introduce->fill(['image' => asset($path)])->save();
        }  

        Flash::success('Introduce saved successfully.');

        return redirect(route('introduces.index'));
    }

    /**
     * Display the specified introduce.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $introduce = $this->introduceRepository->findWithoutFail($id);

        if (empty($introduce)) {
            Flash::error('Introduce not found');

            return redirect(route('introduces.index'));
        }

        return view('introduces.show')->with('introduce', $introduce);
    }

    /**
     * Show the form for editing the specified introduce.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $introduce = $this->introduceRepository->findWithoutFail($id);

        if (empty($introduce)) {
            Flash::error('Introduce not found');

            return redirect(route('introduces.index'));
        }

        return view('introduces.edit')->with('introduce', $introduce);
    }

    /**
     * Update the specified introduce in storage.
     *
     * @param  int              $id
     * @param UpdateintroduceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateintroduceRequest $request)
    {
        $introduce = $this->introduceRepository->findWithoutFail($id);

        if (empty($introduce)) {
            Flash::error('Introduce not found');

            return redirect(route('introduces.index'));
        }

        $introduce = $this->introduceRepository->update($request->all(), $id);

        if($request->file('image')){

            if (Storage::disk('public')->exists('/images/'.basename($introduce->image))) {
            
                Storage::delete(basename($introduce->image));

                Storage::disk('public')->delete('images/'.basename($introduce->image));
            }

            $path = Storage::disk('public')->put('images',  $request->file('image'));

            $introduce->fill(['image' => asset($path)])->save();
        }


        Flash::success('Introduce updated successfully.');

        return redirect(route('introduces.index'));
    }

    /**
     * Remove the specified introduce from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $introduce = $this->introduceRepository->findWithoutFail($id);

        if (empty($introduce)) {
            Flash::error('Introduce not found');

            return redirect(route('introduces.index'));
        }

        $this->introduceRepository->delete($id);

        Flash::success('Introduce deleted successfully.');

        return redirect(route('introduces.index'));
    }
}
