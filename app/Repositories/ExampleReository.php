<?php
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// it's examle don't use                  //
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
namespace App\Repositories;

use App\Models\Favorite;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class FavoriteRepository extends Repository
{
    public function __construct(Favorite $model)
    {
        parent::__construct($model);
    }

    /**
     * @param Request $request
     * @return Builder
     */
    public function getTableQuery(Request $request): Builder
    {
        return Favorite::query()
            ->when($request->filled("search.value"), function ($q) use (
                $request
            ) {
                $search = $request->input("search.value");
                $q->where("title", "LIKE", "%$search%")->orWhere("id", $search);
            })
            ->when($request->has("orderColumn"), function ($q) use ($request) {
                $q->orderBy(
                    $request->input("orderColumn"),
                    $request->input("orderDir")
                );
            });
    }
}
