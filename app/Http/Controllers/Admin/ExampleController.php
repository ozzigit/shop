<?php
namespace App\Http\Controllers\Admin;
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// it's examle don't use                  //
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

use App\Http\Controllers\Controller;
use App\Services\Admin\ListingService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ListingController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view("admin.listing.index");
    }

    /**
     * @param Request $request
     * @param ListingService $service
     * @return Response
     */
    public function ajaxTable(
        Request $request,
        ListingService $service
    ): Response {
        return $service->ajaxTable($request);
    }
}
