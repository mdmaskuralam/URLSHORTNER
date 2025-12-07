<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    public function shorten(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        // Generate a unique short code
        $code = Str::random(6);

        // Save to database (assuming you have a Url model)
        \App\Models\Url::create([
            'original_url' => $request->url,
            'short_code' => $code
        ]);

        // Return the shortened URL to the session
        $shortUrl = url("/$code");
        return redirect()->back()->with('short_url', $shortUrl);
    }
}
