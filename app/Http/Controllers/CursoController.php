<?php

namespace App\Http\Controllers;

use App\Models\invoke;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function index()
    {
        return view('cursos.index');
    }


    public function create()
    {
        return view('cursos.create');
    }


    public function store(Request $request)
    {
        //
    }

    public function show($curso)
    {
        return view('cursos.show');
    }


    public function edit(invoke $invoke)
    {
        //
    }


    public function update(Request $request, invoke $invoke)
    {
        //
    }


    public function destroy(invoke $invoke)
    {
        //
    }
}
