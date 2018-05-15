<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Service\MenuService;

class LeftMenuComposer
{
    private $request;
    private $thisPath;
    private $menuService;

    public function __construct(Request $request , MenuService $menuService)
    {
        $this->request = $request;
        $this->thisPath = $request->path();
        $this->menuService = $menuService;
    }

    public function compose(View $view)
    {
        $view->with('leftMenu',$this->menuService->getLeftMenu());
        $view->with('thisMenu', $this->thisPath);
    }
}
