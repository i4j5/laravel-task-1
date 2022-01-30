<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actions\CreateNewLink;

class LinkController extends Controller
{
    public function addLink(Request $request, CreateNewLink $createNewLink)
    {

        $url = $createNewLink->create($request->all());

        if (!$url) {
            return false;
        }

        return "{$request->server('HTTP_HOST')}/$url";
    }
}
