<?php

namespace App\Http\Controllers;

use App\Models\WinkLink;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $links = WinkLink::all();
        return view('links.index', ['links' => $links]);
    }


    public function show($uuid)
    {
        $link = WinkLink::whereId($uuid)->firstOrFail();
        return view('links.show', ['link'=> $link]);
    }
}
