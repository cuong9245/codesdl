<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Repositories\NewsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Storage;
use Response;

class NewsController extends AppBaseController
{
    /** @var  NewsRepository */
    private $newsRepository;

    public function __construct(NewsRepository $newsRepo)
    {
        $this->newsRepository = $newsRepo;
    }

    /**
     * Display a listing of the News.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->newsRepository->pushCriteria(new RequestCriteria($request));
        $news = $this->newsRepository->all();

        return view('news.index')
            ->with('news', $news);
    }

    /**
     * Show the form for creating a new News.
     *
     * @return Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created News in storage.
     *
     * @param CreateNewsRequest $request
     *
     * @return Response
     */
    public function store(CreateNewsRequest $request)
    {
        $input = $request->all();



        $url         = $this->newsRepository->stripUnicode(str_replace(' - ', ' ', trim($request->title, ' ')));

        $arrayUrl    = array('url_rewrite' => strtolower($url));

        $save        = array_merge($request->all(), $arrayUrl);
       
        $news =  $this->newsRepository->create($save);

        if($request->file('image')){

            $path = Storage::disk('public')->put('images',  $request->file('image'));
            $news->fill(['image' => '/'.$path])->save();
        }  

        Flash::success('News saved successfully.');

        return redirect(route('news.index'));
    }

    /**
     * Display the specified News.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $news = $this->newsRepository->findWithoutFail($id);

        if (empty($news)) {
            Flash::error('News not found');

            return redirect(route('news.index'));
        }

        return view('news.show')->with('news', $news);
    }

    /**
     * Show the form for editing the specified News.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $news = $this->newsRepository->findWithoutFail($id);

        if (empty($news)) {
            Flash::error('News not found');

            return redirect(route('news.index'));
        }

        return view('news.edit')->with('news', $news);
    }

    /**
     * Update the specified News in storage.
     *
     * @param  int              $id
     * @param UpdateNewsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNewsRequest $request)
    {
        $news = $this->newsRepository->findWithoutFail($id);

        if (empty($news)) {
            Flash::error('News not found');

            return redirect(route('news.index'));
        }

        $news = $this->newsRepository->update($request->all(), $id);

        if($request->file('image')){

            if (Storage::disk('public')->exists('/images/'.basename($news->image))) {
            
                Storage::delete(basename($news->image));

                Storage::disk('public')->delete('images/'.basename($news->image));
            }

            $path = Storage::disk('public')->put('images',  $request->file('image'));

            $news->fill(['image' => '/'.$path])->save();
        }  

        Flash::success('News updated successfully.');

        return redirect(route('news.index'));
    }

    /**
     * Remove the specified News from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $news = $this->newsRepository->findWithoutFail($id);

        if (empty($news)) {
            Flash::error('News not found');

            return redirect(route('news.index'));
        }

        $this->newsRepository->delete($id);

        if (Storage::disk('public')->exists('/images/'.basename($news->image))) {

            Storage::delete(basename($news->image));

            Storage::disk('public')->delete('images/'.basename($news->image));

            Flash::success('News deleted successfully.');

            return redirect(route('news.index'));
        }
        else{
            Flash::success('image is empty!');

            return redirect(route('news.index'));
        }
        
    }
}
