<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProgramTourRequest;
use App\Http\Requests\UpdateProgramTourRequest;
use App\Repositories\ProgramTourRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\TourRepository;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProgramTourController extends AppBaseController
{
    /** @var  ProgramTourRepository */
    private $programTourRepository;

    public function __construct(ProgramTourRepository $programTourRepo,tourRepository $tourRepo)
    {
        $this->programTourRepository = $programTourRepo;
        $this->tourRepository = $tourRepo;

    }

    /**
     * Display a listing of the ProgramTour.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->programTourRepository->pushCriteria(new RequestCriteria($request));
        $programTours = $this->programTourRepository->all();

        return view('program_tours.index')
            ->with('programTours', $programTours);
    }

    /**
     * Show the form for creating a new ProgramTour.
     *
     * @return Response
     */
    public function create($id)
    {   
        $programTour1 = $this->tourRepository->findWithoutFail($id);

        if (empty($programTour1)) {

            Flash::error('ProgramTour not found');
        }
        else{
            return view('program_tours.create',compact('id'));
        }    
    }

    /**
     * Store a newly created ProgramTour in storage.
     *
     * @param CreateProgramTourRequest $request
     *
     * @return Response
     */
    public function store(CreateProgramTourRequest $request)
    {
        $input = $request->all();

        $programTour = $this->programTourRepository->create($input);

        Flash::success('Program Tour saved successfully.');

       return redirect(route('programTours.show',[$request->tour_id]));
    }

    /**
     * Display the specified ProgramTour.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {

        $programTour1 = $this->tourRepository->findWithoutFail($id);

        $array = array('tour_id' => $id);

        $programTours = $this->programTourRepository->filterId($array);

        
        if (empty($programTour1)) {

            Flash::error('Program not found');

           

            // return redirect(route('Program.index'));
        }



        return view('program_tours.index',compact('programTours','id'));
    }

    /**
     * Show the form for editing the specified ProgramTour.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $programTour = $this->programTourRepository->findWithoutFail($id);

        if (empty($programTour)) {
            Flash::error('Program Tour not found');

            return redirect(route('programTours.index'));
        }

        return view('program_tours.edit')->with('programTour', $programTour);
    }

    /**
     * Update the specified ProgramTour in storage.
     *
     * @param  int              $id
     * @param UpdateProgramTourRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProgramTourRequest $request)
    {
        $programTour = $this->programTourRepository->findWithoutFail($id);

        if (empty($programTour)) {
            Flash::error('Program Tour not found');

            return redirect(route('programTours.index'));
        }

        $programTour = $this->programTourRepository->update($request->all(), $id);

        Flash::success('Program Tour updated successfully.');

        return redirect(route('programTours.show',[$programTour->tour_id]));
    }

    /**
     * Remove the specified ProgramTour from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $programTour = $this->programTourRepository->findWithoutFail($id);

        if (empty($programTour)) {
            Flash::error('Program Tour not found');

            return redirect(route('programTours.index'));
        }

        $this->programTourRepository->delete($id);

        Flash::success('Program Tour deleted successfully.');

        return redirect(route('programTours.show',[$programTour->tour_id]));
    }
}
