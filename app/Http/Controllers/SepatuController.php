<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sepatu;

class SepatuController extends Controller
{
    public function index()
    {
        $sepatu = Sepatu::all();
        return view('sepatu.index', compact('sepatu'));
    }

    public function create()
    {
        return view('sepatu.create');
    }

    public function store(Request $request)
    {
        Sepatu::create($request->all());
        return redirect('/sepatu');
    }

    public function edit($id)
    {
        $sepatu = Sepatu::findOrFail($id);
        return view('sepatu.edit', compact('sepatu'));
    }

    public function update(Request $request, $id)
    {
        $sepatu = Sepatu::findOrFail($id);
        $sepatu->update($request->all());
        return redirect('/sepatu');
    }

    public function destroy($id)
    {
        $sepatu = Sepatu::findOrFail($id);
        $sepatu->delete();
        return redirect('/sepatu');
    }
}