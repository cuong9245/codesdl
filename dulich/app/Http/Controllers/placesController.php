<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateplacesRequest;
use App\Http\Requests\UpdateplacesRequest;
use App\Repositories\placesRepository;
use App\Repositories\TourRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Storage;
use Response;

class placesController extends AppBaseController
{
    /** @var  placesRepository */
    private $placesRepository;

    public function __construct(placesRepository $placesRepo, tourRepository $tourRepo)
    {
        $this->placesRepository = $placesRepo;
        $this->tourRepository = $tourRepo;
    }

    /**
     * Display a listing of the places.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->placesRepository->pushCriteria(new RequestCriteria($request));
        $places = $this->placesRepository->all();

        return view('places.index')
            ->with('places', $places);
    }

    /**
     * Show the form for creating a new places.
     *
     * @return Response
     */
    public function create($id)
    {
        $places1 = $this->tourRepository->findWithoutFail($id);

        if (empty($places1)) {

            Flash::error('Places not found');
        }
        else{

            return view('places.create',compact('id'));
        }
    }

    /**
     * Store a newly created places in storage.
     *
     * @param CreateplacesRequest $request
     *
     * @return Response
     */
    public function store(CreateplacesRequest $request)
    {
        $input = $request->all();

        $places = $this->placesRepository->create($input);

        if($request->file('image')){

            $path = Storage::disk('public')->put('images',  $request->file('image'));
            $places->fill(['image' => asset($path)])->save();
        }  

        Flash::success('Places saved successfully.');


        return redirect(route('places.show',[$request->places_id]));
    }

    /**
     * Display the specified places.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $places1 = $this->tourRepository->findWithoutFail($id);

        $array = array('places_id' => $id);

        $places = $this->placesRepository->filterId($array);
        
        if (empty($places1)) {
            Flash::error('Places not found');
            return redirect(route('places.index'));
        }
        return view('places.index',compact('places', 'id'));
            
    }

    /**
     * Show the form for editing the specified places.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $places = $this->placesRepository->findWithoutFail($id);

        if (empty($places)) {
            Flash::error('Places not found');

            return redirect(route('places.index'));
        }

        return view('places.edit')->with('places', $places);
    }

    /**
     * Update the specified places in storage.
     *
     * @param  int              $id
     * @param UpdateplacesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateplacesRequest $request)
    {
        $places = $this->placesRepository->findWithoutFail($id);

        if (empty($places)) {
            Flash::error('Places not found');

            return redirect(route('places.index'));
        }

        $places = $this->placesRepository->update($request->all(), $id);

        if($request->file('image')){

            if (Storage::disk('public')->exists('/images/'.basename($places->image))) {
            
                Storage::delete(basename($places->image));

                Storage::disk('public')->delete('images/'.basename($places->image));
            }

            $path = Storage::disk('public')->put('images',  $request->file('image'));

            $places->fill(['image' => asset($path)])->save();
        }  



        Flash::success('Places updated successfully.');

        return redirect(route('places.show', [$places->places_id]));

    }

    /**
     * Remove the specified places from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $places = $this->placesRepository->findWithoutFail($id);

        if (empty($places)) {
            Flash::error('Places not found');

            return redirect(route('places.index'));
        }

        $this->placesRepository->delete($id);

        if (Storage::disk('public')->exists('/images/'.basename($places->image))) {

            Storage::delete(basename($places->image));

            Storage::disk('public')->delete('images/'.basename($places->image));

            Flash::success('places deleted successfully.');

            return redirect(route('places.show', [$places->places_id]));
        }
        else{
            Flash::error('image is empty!');

            return redirect(route('places.show', [$places->places_id]));
        }
    }
}
