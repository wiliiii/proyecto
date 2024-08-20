<?php

namespace App\Http\Controllers;

use App\Models\Datper;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DatperRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DatperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
            $datpers = Datper::orderBy('no_historia','asc')
            ->paginate(15);

            return view('datper.index', compact('datpers'))
                ->with('i', ($request->input('page', 1) - 1) * $datpers->perPage());

            $search = $request->input('search');

            // Busca en el título y el contenido del post
            $posts = Datper::query()
                ->when($search, function ($query, $search) {
                    return $query->where('no_historia', 'like', "%{$search}%")
                                 ->orWhere('nombre', 'like', "%{$search}%");
                })
                ->paginate(10); // Puedes ajustar el número de publicaciones por página
        
            return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $datper = new Datper();

        return view('datper.create', compact('datper'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DatperRequest $request): RedirectResponse
    {
        Datper::create($request->validated());

        return Redirect::route('datpers.index')
            ->with('success', 'Datper created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $datper = Datper::find($id);

        return view('datper.show', compact('datper'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $datper = Datper::find($id);

        return view('datper.edit', compact('datper'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DatperRequest $request, Datper $datper): RedirectResponse
    {
        $datper->update($request->validated());

        return Redirect::route('datpers.index')
            ->with('success', 'Datper updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Datper::find($id)->delete();

        return Redirect::route('datpers.index')
            ->with('success', 'Datper deleted successfully');
    }

}
