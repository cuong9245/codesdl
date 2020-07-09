<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateimageTourRequest;
use App\Http\Requests\UpdateimageTourRequest;
use App\Repositories\imageTourRepository;
use App\Repositories\TourRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Storage;
use Response;

class imageTourController extends AppBaseController
{
    /** @var  imageTourRepository */
    private $imageTourRepository;

    public function __construct(imageTourRepository $imageTourRepo, tourRepository $tourRepo)
    {
        $this->imageTourRepository = $imageTourRepo;
        $this->tourRepository = $tourRepo;
    }

    /**
     * Display a listing of the imageTour.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->imageTourRepository->pushCriteria(new RequestCriteria($request));
        $imageTours = $this->imageTourRepository->all();

        return view('image_tours.index')
            ->with('imageTours', $imageTours);
    }

    /**
     * Show the form for creating a new imageTour.
     *
     * @return Response
     */
    public function create($id)
    {
        $tour = $this->tourRepository->findWithoutFail($id);

        if (empty($tour)) {

            Flash::error('imageTour not found');
        }
        else{

            return view('image_tours.create',compact('id'));
        }
        
    }

    /**
     * Store a newly created imageTour in storage.
     *
     * @param CreateimageTourRequest $request
     *
     * @return Response
     */
    public function store(CreateimageTourRequest $request)
    {
        // print_r($request->file('image'));

        $input = $request->all();

        $imageTour = $this->imageTourRepository->create($input);

        $path = Storage::disk('public')->put('images',  $request->file('image'));


        $imageTour->fill(['image' => '/'.$path])->save();
       

        Flash::success('Image Tour saved successfully.');

         return redirect(route('imageTours.show', [$imageTour->imageTour_id]));
    }

    /**
     * Display the specified imageTour.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $imageTour = $this->tourRepository->findWithoutFail($id);

        $array = array('imageTour_id' => $id);

        $imageTours = $this->imageTourRepository->filterId($array);


        if (empty($imageTour)) {
            Flash::error('Image Tour not found');

            return redirect(route('imageTours.index'));
        }

        return view('image_tours.index',compact('imageTours', 'id'));

    }

    /**
     * Show the form for editing the specified imageTour.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $imageTour = $this->imageTourRepository->findWithoutFail($id);

        if (empty($imageTour)) {
            Flash::error('Image Tour not found');

            return redirect(route('imageTours.index'));
        }

        return view('image_tours.edit')->with('imageTour', $imageTour);
    }

    /**
     * Update the specified imageTour in storage.
     *
     * @param  int              $id
     * @param UpdateimageTourRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateimageTourRequest $request)
    {
        $imageTour = $this->imageTourRepository->findWithoutFail($id);

        if (empty($imageTour)) {
            Flash::error('Image Tour not found');

            return redirect(route('imageTours.index'));
        }

        if (Storage::disk('public')->exists('/images/'.basename($imageTour->image))) {
            
            Storage::delete(basename($imageTour->image));

            Storage::disk('public')->delete('images/'.basename($imageTour->image));
        }

        $path = Storage::disk('public')->put('images',  $request->file('image'));

        $imageTour->fill(['image' => "/".$path])->save();


        Flash::success('Image Tour updated successfully.');

        return redirect(route('imageTour.show', [$imageTour->imageTour_id]));

    }

    /**
     * Remove the specified imageTour from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $imageTour = $this->imageTourRepository->findWithoutFail($id);

        if (empty($imageTour)) {
            Flash::error('Image Tour not found');

            return redirect(route('imageTours.index'));
        }

        $this->imageTourRepository->delete($id);

        if (Storage::disk('public')->exists('/images/'.basename($imageTour->image))) {

            Storage::delete(basename($imageTour->image));

            Storage::disk('public')->delete('images/'.basename($imageTour->image));

            Flash::success('imageTours deleted successfully.');

            return redirect(route('imageTours.show', [$imageTour->imageTour_id]));
        }
        else{
            Flash::error('image is empty!');

            return redirect(route('imageTours.show', [$imageTour->imageTour_id]));
        }

    }
}
