<?php

namespace App\Http\Controllers;

use App\Http\Requests\UrlRequest;
use App\Http\Services\UrlService;
use Str;

class HomeController extends Controller
{
    public function __construct(protected UrlService $urlService) {}

    public function index()
    {
        return view('encurtador.index');
    }

    public function store(UrlRequest $request)
    {
        return response()->json($this->urlService->storeUrl($request->all()));
    }

    public function show($url_enc)
    {
        $url = $this->urlService->findUrl($url_enc);

        if ($url['error']) {
            return redirect()->route('index')->with('message', $url['msg']);
        }

        return redirect($url->url);
    }
}
