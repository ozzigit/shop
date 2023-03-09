<?php
/*

//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// it's examle don't use                  //
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
namespace App\Services\Admin;

use App\Http\Resources\Admin\ListingTableResource;
use App\Models\Listing;
use App\Repositories\ListingRepository;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ListingService
{
    private ListingRepository $repository;

    public function __construct(ListingRepository $repository)
    {
        $this->repository = $repository;
    }

    //  * @param Request $request
    //  * @return Response
    public function ajaxTable(Request $request): Response
    {
        $listingQuery = $this->repository->getTableQuery($request);
        $listings = $listingQuery->paginate($request->input("length"));

        return response([
            "data" => ListingTableResource::collection($listings->items()),
            "recordsTotal" => $listings->total(),
            "recordsFiltered" => $listings->total(),
            "start" =>
                $listings->currentPage() * (int) $request->input("length"),
        ]);
    }
}
*/
?>
