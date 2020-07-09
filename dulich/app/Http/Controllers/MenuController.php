<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Repositories\MenuRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Storage;

class MenuController extends AppBaseController
{
    /** @var  MenuRepository */
    private $menuRepository;



    public function __construct(MenuRepository $menuRepo)
    {
        $this->menuRepository = $menuRepo;
    }

    /**
     * Display a listing of the Menu.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->menuRepository->pushCriteria(new RequestCriteria($request));
        $menus = $this->menuRepository->all();

        return view('menus.index')
            ->with('menus', $menus);
    }

    /**
     * Show the form for creating a new Menu.
     *
     * @return Response
     */
    public function create()
    {
        return view('menus.create');
    }

    /**
     * Store a newly created Menu in storage.
     *
     * @param CreateMenuRequest $request
     *
     * @return Response
     */
    public function store(CreateMenuRequest $request)
    {


        $input = $request->all();

        $menu = $this->menuRepository->create($input);

        $this->ghiFile($input['originalMenu'], $input['Link']);

        Flash::success('Menu saved successfully.');

        return redirect(route('menus.index'));
    }

    /**
     * Display the specified Menu.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $menu = $this->menuRepository->findWithoutFail($id);

        if (empty($menu)) {
            Flash::error('Menu not found');

            return redirect(route('menus.index'));
        }

        return view('menus.show')->with('menu', $menu);
    }

    /**
     * Show the form for editing the specified Menu.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $menu = $this->menuRepository->findWithoutFail($id);

        if (empty($menu)) {
            Flash::error('Menu not found');

            return redirect(route('menus.index'));
        }

        return view('menus.edit')->with('menu', $menu);
    }

    /**
     * Update the specified Menu in storage.
     *
     * @param  int              $id
     * @param UpdateMenuRequest $request
     *
     * @return Response
     */


    public function update($id, UpdateMenuRequest $request)
    {
        $menu = $this->menuRepository->findWithoutFail($id);

        if (empty($menu)) {
            Flash::error('Menu not found');

            return redirect(route('menus.index'));
        }

        $menu = $this->menuRepository->update($request->all(), $id);

        $this->ghiFile($menu['originalMenu'], $menu['Link']);

        Flash::success('Menu updated successfully.');

        return redirect(route('menus.index'));
    }

    /**
     * Remove the specified Menu from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $menu = $this->menuRepository->findWithoutFail($id);

        if (empty($menu)) {
            Flash::error('Menu not found');

            return redirect(route('menus.index'));
        }

        $this->menuRepository->delete($id);

        $this->ghiFile();

        Flash::success('Menu deleted successfully.');

        return redirect(route('menus.index'));
    }

    public function ghiFile($originalMenu, $Link)
    {
        $menus = $this->menuRepository->get();

        $routes = array("'Frontend\FrontendController@homes'","'Frontend\FrontendController@aboutUs'","'Frontend\FrontendController@blog'","'Frontend\FrontendController@becomeLocalExpress'","'Frontend\FrontendController@contact'", "'Frontend\FrontendController@faq'", "'Frontend\FrontendController@faq'");

        $nameRoute = array("'home'","'about us'","'blog'","'become local express'","'contact'","'Faqs'","'tour'");

        $menus[$originalMenu]->Link  = $Link;

        foreach ($menus as $key => $value) {

            $link           =  "'".$value->Link."'";

            $originalMenu   =  $value->originalMenu;

            $route[]        = "Route::get(".$link.",".$routes[$originalMenu].")->name(".$nameRoute[$originalMenu]."); ";
        }
           
        $routeConverse     =  implode(" ", $route);

        // ghi file 
        if(Storage::disk('route')->exists('route-user.php')){

            $file  = fopen(base_path('routes/frontend/route-user.php'),"w");

            fwrite( $file, "<?php ". $routeConverse);
           
        }   
    }
}
