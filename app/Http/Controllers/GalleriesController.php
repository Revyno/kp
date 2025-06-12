<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galleries;

class GalleriesController extends Controller
{
    //
    public function index()
    {
        return view('galleries.index');
    }

    public function show(Galleries $gallery)
    {
        // Check if gallery is public
        if (!$gallery->is_public) {
            abort(404);
        }

        return view('galleries.show', compact('gallery'));
    }

    public function api()
    {
        $galleries = Galleries::public()
                             ->with('media')
                             ->latest('taken_date')
                             ->latest('created_at')
                             ->paginate(20);

        return response()->json($galleries);
    }

    public function featured()
    {
        $galleries = Galleries::public()
                             ->featured()
                             ->latest('taken_date')
                             ->latest('created_at')
                             ->get();

        return response()->json($galleries);
    }
}
