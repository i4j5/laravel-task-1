<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class LinkController extends Controller
{
    public function index($url)
    {
        $link = Link::where('url', $url)->first();

        if ($link) {
            $link->transitions++;
            $link->save();

            return redirect()->away(
                (is_null(parse_url($link->link, PHP_URL_HOST)) ? '//' : '') . $link->link
            );
        }

        abort(404);
    }
}
