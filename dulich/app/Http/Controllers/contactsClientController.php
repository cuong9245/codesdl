<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecontactsClientRequest;
use App\Http\Requests\UpdatecontactsClientRequest;
use App\Repositories\contactsClientRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class contactsClientController extends AppBaseController
{
    /** @var  contactsClientRepository */
    private $contactsClientRepository;

    public function __construct(contactsClientRepository $contactsClientRepo)
    {
        $this->contactsClientRepository = $contactsClientRepo;
    }

    /**
     * Display a listing of the contactsClient.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->contactsClientRepository->pushCriteria(new RequestCriteria($request));
        $contactsClients = $this->contactsClientRepository->all();

        return view('contacts_clients.index')
            ->with('contactsClients', $contactsClients);
    }

    /**
     * Show the form for creating a new contactsClient.
     *
     * @return Response
     */
    public function create()
    {
        return view('contacts_clients.create');
    }

    /**
     * Store a newly created contactsClient in storage.
     *
     * @param CreatecontactsClientRequest $request
     *
     * @return Response
     */
    public function store(CreatecontactsClientRequest $request)
    {
        $input = $request->all();

        $contactsClient = $this->contactsClientRepository->create($input);

        // Flash::success('Contacts Client saved successfully.');

        // return redirect(route('contactsClients.index'));
        return redirect()->back()->with('contact','send success!');
    }

    /**
     * Display the specified contactsClient.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contactsClient = $this->contactsClientRepository->findWithoutFail($id);

        if (empty($contactsClient)) {
            Flash::error('Contacts Client not found');

            return redirect(route('contactsClients.index'));
        }

        return view('contacts_clients.show')->with('contactsClient', $contactsClient);
    }

    /**
     * Show the form for editing the specified contactsClient.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contactsClient = $this->contactsClientRepository->findWithoutFail($id);

        if (empty($contactsClient)) {
            Flash::error('Contacts Client not found');

            return redirect(route('contactsClients.index'));
        }

        return view('contacts_clients.edit')->with('contactsClient', $contactsClient);
    }

    /**
     * Update the specified contactsClient in storage.
     *
     * @param  int              $id
     * @param UpdatecontactsClientRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecontactsClientRequest $request)
    {
        $contactsClient = $this->contactsClientRepository->findWithoutFail($id);

        if (empty($contactsClient)) {
            Flash::error('Contacts Client not found');

            return redirect(route('contactsClients.index'));
        }

        $contactsClient = $this->contactsClientRepository->update($request->all(), $id);

        Flash::success('Contacts Client updated successfully.');

        return redirect(route('contactsClients.index'));
    }

    /**
     * Remove the specified contactsClient from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contactsClient = $this->contactsClientRepository->findWithoutFail($id);

        if (empty($contactsClient)) {
            Flash::error('Contacts Client not found');

            return redirect(route('contactsClients.index'));
        }

        $this->contactsClientRepository->delete($id);

        Flash::success('Contacts Client deleted successfully.');

        return redirect(route('contactsClients.index'));
    }
}
