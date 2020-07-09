<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGroupTourRequest;
use App\Http\Requests\UpdateGroupTourRequest;
use App\Repositories\GroupTourRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Storage;
use Response;

class GroupTourController extends AppBaseController
{
    /** @var  GroupTourRepository */
    private $groupTourRepository;

    public function __construct(GroupTourRepository $groupTourRepo)
    {
        $this->groupTourRepository = $groupTourRepo;
    }

    /**
     * Display a listing of the GroupTour.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->groupTourRepository->pushCriteria(new RequestCriteria($request));
        $groupTours = $this->groupTourRepository->all();

        return view('group_tours.index')
            ->with('groupTours', $groupTours);
    }

    /**
     * Show the form for creating a new GroupTour.
     *
     * @return Response
     */
    public function create()
    {
        return view('group_tours.create');
    }

    /**
     * Store a newly created GroupTour in storage.
     *
     * @param CreateGroupTourRequest $request
     *
     * @return Response
     */
    public function store(CreateGroupTourRequest $request)
    {
        
            
        $url  = array('url_rewrite' => $this->groupTourRepository->stripUnicode(str_replace(' - ', ' ', trim($request->Name, ' '))));

        $input = array_merge($request->all(), $url);

        $groupTour = $this->groupTourRepository->create($input);

        if($request->file('image')){

            $path = Storage::disk('public')->put('images',  $request->file('image'));

            $groupTour->fill(['image' => '/'.$path])->save();
        }  

        Flash::success('Group Tour saved successfully.');

        return redirect(route('groupTours.index'));
    }

    /**
     * Display the specified GroupTour.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $groupTour = $this->groupTourRepository->findWithoutFail($id);

        if (empty($groupTour)) {
            Flash::error('Group Tour not found');

            return redirect(route('groupTours.index'));
        }

        return view('group_tours.show')->with('groupTour', $groupTour);
    }

    /**
     * Show the form for editing the specified GroupTour.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $groupTour = $this->groupTourRepository->findWithoutFail($id);

        if (empty($groupTour)) {
            Flash::error('Group Tour not found');

            return redirect(route('groupTours.index'));
        }

        return view('group_tours.edit')->with('groupTour', $groupTour);
    }

    /**
     * Update the specified GroupTour in storage.
     *
     * @param  int              $id
     * @param UpdateGroupTourRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGroupTourRequest $request)
    {
        $groupTour = $this->groupTourRepository->findWithoutFail($id);

        if (empty($groupTour)) {
            Flash::error('Group Tour not found');

            return redirect(route('groupTours.index'));
        }

        $url  = array('url_rewrite' => $this->groupTourRepository->stripUnicode(str_replace(' - ', ' ', trim($request->Title, ' '))));

        $input = array_merge($request->all(), $url);


        $groupTour = $this->groupTourRepository->update($input, $id);

        if($request->file('image')){

            $path = Storage::disk('public')->put('images',  $request->file('image'));
            $groupTour->fill(['image' => '/'.$path])->save();
        }  

        Flash::success('Group Tour updated successfully.');

        return redirect(route('groupTours.index'));
    }

    /**
     * Remove the specified GroupTour from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $groupTour = $this->groupTourRepository->findWithoutFail($id);

        if (empty($groupTour)) {
            Flash::error('Group Tour not found');

            return redirect(route('groupTours.index'));
        }

        $this->groupTourRepository->delete($id);

        if (Storage::disk('public')->exists('/images/'.basename($groupTour->image))) {

            Storage::delete(basename($groupTour->image));

            Storage::disk('public')->delete('images/'.basename($groupTour->image));

            Flash::success('Group Tour deleted successfully.');

            return redirect(route('groupTours.index'));
        }
        else{
            Flash::success('image is empty!');

            return redirect(route('groupTours.index'));
        }

    }
}
