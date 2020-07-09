<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecommentClientRequest;
use App\Http\Requests\UpdatecommentClientRequest;
use App\Repositories\commentClientRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Carbon\Carbon;

class commentClientController extends AppBaseController
{
    /** @var  commentClientRepository */
    private $commentClientRepository;

    public function __construct(commentClientRepository $commentClientRepo)
    {
        $this->commentClientRepository = $commentClientRepo;
    }

    /**
     * Display a listing of the commentClient.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->commentClientRepository->pushCriteria(new RequestCriteria($request));
        $commentClients = $this->commentClientRepository->all();

        return view('comment_clients.index')
            ->with('commentClients', $commentClients);
    }

    /**
     * Show the form for creating a new commentClient.
     *
     * @return Response
     */
    public function create()
    {
        return view('comment_clients.create');
    }

    /**
     * Store a newly created commentClient in storage.
     *
     * @param CreatecommentClientRequest $request
     *
     * @return Response
     */
    public function store(CreatecommentClientRequest $request)
    {
        $input = $request->all();

        $star  = ((int)$input['service']+(int)$input['organization']+(int)$input['friendliness']+(int)$input['area-expert']+(int)$input['safety'])/5;

        $input['star'] = $star;

        $input['liked'] = 0;

        $input['status'] =0;

        $dt = Carbon::now('Asia/Ho_Chi_Minh');

        $input['date']  = $dt->format('d M Y');

        $commentClient = $this->commentClientRepository->create($input);

        $alert ="Bình luận của bạn đang được chờ để hiển thị, thanks!";
       

        return redirect()->back()->with('alert', $alert);

    }

    /**
     * Display the specified commentClient.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $commentClient = $this->commentClientRepository->findWithoutFail($id);

        if (empty($commentClient)) {
            Flash::error('Comment Client not found');

            return redirect(route('commentClients.index'));
        }

        return view('comment_clients.show')->with('commentClient', $commentClient);
    }

    /**
     * Show the form for editing the specified commentClient.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $commentClient = $this->commentClientRepository->findWithoutFail($id);

        if (empty($commentClient)) {
            Flash::error('Comment Client not found');

            return redirect(route('commentClients.index'));
        }

        if($commentClient->status ==0){

            $commentClient->status = 1;
        }
        else{

            $commentClient->status = 0;
        }

       

        $commentClient->save();

        return redirect(route('commentClients.index'));
    }

    /**
     * Update the specified commentClient in storage.
     *
     * @param  int              $id
     * @param UpdatecommentClientRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecommentClientRequest $request)
    {
        $commentClient = $this->commentClientRepository->findWithoutFail($id);

        if (empty($commentClient)) {
            Flash::error('Comment Client not found');

            return redirect(route('commentClients.index'));
        }

        $commentClient = $this->commentClientRepository->update($request->all(), $id);

        Flash::success('Comment Client updated successfully.');

        return redirect(route('commentClients.index'));
    }

    /**
     * Remove the specified commentClient from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $commentClient = $this->commentClientRepository->findWithoutFail($id);

        if (empty($commentClient)) {
            Flash::error('Comment Client not found');

            return redirect(route('commentClients.index'));
        }

        $this->commentClientRepository->delete($id);

        Flash::success('Comment Client deleted successfully.');

        return redirect(route('commentClients.index'));
    }
}
