<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Local;

class LocalController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Editor/CreateContent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $local = Local::create([
            'name' => $request->name,
            'address' => $request->address,
        ]);

        return response()->json([
            'msg' => 'New Local Type record has been added to DB',
            'status' => 201,
        ]);
    }
}
