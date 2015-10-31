<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use View;
use App\Http\Models\User as User;
use App\Http\Models\Category as Category;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $categories;

    public function __construct()
    {
        $this->categories = User::find(Auth::user()->id)->category()->get();
        View::share('categories', $this->categories);
    }
}
