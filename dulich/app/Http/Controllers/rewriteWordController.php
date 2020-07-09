<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterewriteWordRequest;
use App\Http\Requests\UpdaterewriteWordRequest;
use App\Repositories\rewriteWordRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Storage;

class rewriteWordController extends AppBaseController
{
    /** @var  rewriteWordRepository */
    private $rewriteWordRepository;

    public function __construct(rewriteWordRepository $rewriteWordRepo)
    {
        $this->rewriteWordRepository = $rewriteWordRepo;
    }

    /**
     * Display a listing of the rewriteWord.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rewriteWordRepository->pushCriteria(new RequestCriteria($request));
        $rewriteWords = $this->rewriteWordRepository->all();

        return view('rewrite_words.index')
            ->with('rewriteWords', $rewriteWords);
    }

    /**
     * Show the form for creating a new rewriteWord.
     *
     * @return Response
     */
    public function create()
    {
        return view('rewrite_words.create');
    }

    /**
     * Store a newly created rewriteWord in storage.
     *
     * @param CreaterewriteWordRequest $request
     *
     * @return Response
     */
    public function store(CreaterewriteWordRequest $request)
    {
        $input = $request->all();

        $content = Storage::disk('views')->get($request->page);


        if (strpos($content , $request->word) === false) {

           
           Flash::error('Từ ko tồn tại');
        }
        else{

            $rewrite = str_replace($request->word, $request->rewrite,  $content);


            $file  = fopen(base_path('resources/views/Frontend/'.$request->page),"w");

            fwrite( $file, $rewrite);

            $rewriteWord = $this->rewriteWordRepository->create($input);

            Flash::success('Rewrite Word saved successfully.');
        }

        return redirect(route('rewriteWords.index'));
    }

    /**
     * Display the specified rewriteWord.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rewriteWord = $this->rewriteWordRepository->findWithoutFail($id);

        if (empty($rewriteWord)) {
            Flash::error('Rewrite Word not found');

            return redirect(route('rewriteWords.index'));
        }

        return view('rewrite_words.show')->with('rewriteWord', $rewriteWord);
    }

    /**
     * Show the form for editing the specified rewriteWord.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rewriteWord = $this->rewriteWordRepository->findWithoutFail($id);

        if (empty($rewriteWord)) {
            Flash::error('Rewrite Word not found');

            return redirect(route('rewriteWords.index'));
        }

        return view('rewrite_words.edit')->with('rewriteWord', $rewriteWord);
    }

    /**
     * Update the specified rewriteWord in storage.
     *
     * @param  int              $id
     * @param UpdaterewriteWordRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterewriteWordRequest $request)
    {
        $rewriteWord = $this->rewriteWordRepository->findWithoutFail($id);

        if (empty($rewriteWord)) {
            Flash::error('Rewrite Word not found');

            return redirect(route('rewriteWords.index'));
        }

        $rewriteWord = $this->rewriteWordRepository->update($request->all(), $id);

        Flash::success('Rewrite Word updated successfully.');

        return redirect(route('rewriteWords.index'));
    }

    /**
     * Remove the specified rewriteWord from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rewriteWord = $this->rewriteWordRepository->findWithoutFail($id);

        if (empty($rewriteWord)) {
            Flash::error('Rewrite Word not found');

            return redirect(route('rewriteWords.index'));
        }

        $this->rewriteWordRepository->delete($id);

        Flash::success('Rewrite Word deleted successfully.');

        return redirect(route('rewriteWords.index'));
    }
}
