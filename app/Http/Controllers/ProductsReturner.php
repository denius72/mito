<?
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Models\Product as Product;
use App\Models\Category as Category;
use DB;

class ProductsController {

    public function getname($id)
    {
        return DB::table('products')->select('nome')->where('id','=',$id);
    }

    public function getvalue($id)
    {
        return DB::table('products')->select('valor')->where('id','=',$id);
    }

}