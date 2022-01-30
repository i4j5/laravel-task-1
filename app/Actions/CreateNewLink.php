<?php

namespace App\Actions;

use Illuminate\Support\Facades\Validator;
use App\Models\Link;

class CreateNewLink
{
    public function create(array $input)
    {

        $validator = Validator::make($input, [
            'link' => ['required', 'url'],
        ]);

        if ($validator->fails()) {
            return false;
        }

        $url = $this->generateURL();
        while ( isset(Link::where('url', $url)->first()->id) ) {
            $url = $this->generateURL();
        }

        Link::create([
            'url' => $url,
            'link' => $input['link'],
        ]);

        return $url;
    }

    private function generateURL() {
        return substr(
            bin2hex(
                random_bytes(5)
            ), 0, rand(1, 5)
        );
    }
}
