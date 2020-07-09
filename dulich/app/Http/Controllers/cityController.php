<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecityRequest;
use App\Http\Requests\UpdatecityRequest;
use App\Repositories\cityRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Storage;
use App\Models\Tour;
use Response;

class cityController extends AppBaseController
{
    /** @var  cityRepository */
    private $cityRepository;

    public function __construct(cityRepository $cityRepo)
    {
        $this->cityRepository = $cityRepo;
    }

    /**
     * Display a listing of the city.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->cityRepository->pushCriteria(new RequestCriteria($request));
        $cities = $this->cityRepository->all();

        return view('cities.index')
            ->with('cities', $cities);
    }

    /**
     * Show the form for creating a new city.
     *
     * @return Response
     */
    public function create()
    {
        return view('cities.create');
    }

    /**
     * Store a newly created city in storage.
     *
     * @param CreatecityRequest $request
     *
     * @return Response
     */
    public function store(CreatecityRequest $request)
    {
        $input = $request->all();

        $url         = $this->cityRepository->stripUnicode(str_replace(' - ', ' ', trim($request->name, ' ')));

        $arrayUrl    = array('url_rewrite' => strtolower($url));

        $save        = array_merge($input, $arrayUrl);
       

        $city = $this->cityRepository->create($save);

        if($request->file('image')){

            $path = Storage::disk('public')->put('images',  $request->file('image'));
            $city->fill(['image' => asset($path)])->save();
        }  

        Flash::success('City saved successfully.');

        return redirect(route('cities.index'));
    }

    /**
     * Display the specified city.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $city = $this->cityRepository->findWithoutFail($id);

        if (empty($city)) {
            Flash::error('City not found');

            return redirect(route('cities.index'));
        }

        return view('cities.show')->with('city', $city);
    }

    /**
     * Show the form for editing the specified city.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $city = $this->cityRepository->findWithoutFail($id);

        if (empty($city)) {
            Flash::error('City not found');

            return redirect(route('cities.index'));
        }

        return view('cities.edit')->with('city', $city);
    }

    /**
     * Update the specified city in storage.
     *
     * @param  int              $id
     * @param UpdatecityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecityRequest $request)
    {
        $city = $this->cityRepository->findWithoutFail($id);

        if (empty($city)) {
            Flash::error('City not found');

            return redirect(route('cities.index'));
        }

        $city = $this->cityRepository->update($request->all(), $id);


        if($request->file('image')){

            if (Storage::disk('public')->exists('/images/'.basename($city->image))) {
            
                Storage::delete(basename($city->image));

                Storage::disk('public')->delete('images/'.basename($city->image));
            }

            $path = Storage::disk('public')->put('images',  $request->file('image'));

            $city->fill(['image' => asset($path)])->save();
        }

        Flash::success('City updated successfully.');

        return redirect(route('cities.index'));
    }

    /**
     * Remove the specified city from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $city = $this->cityRepository->findWithoutFail($id);

        $tourRelation = Tour::find($id);

        if (empty($city)) {
            Flash::error('City not found');

            return redirect(route('cities.index'));
        }

        if(!empty($tourRelation->city)){
            Flash::error('Cannot Delete, Please try again');

            return redirect(route('cities.index'));

        }

        $this->cityRepository->delete($id);

        Flash::success('City deleted successfully.');

        return redirect(route('cities.index'));
    }
}
