<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RedirectController extends Controller
{
    public function redirect(Request $request, string $slug)
    {
        $link = Link::query()->find($slug);

        return redirect()->away($link->url);
    }
}
