<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Movies;

class MoviesController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "string";die();
        $movies = Movies::all();
        return response()->json([
            'status' => 'success',
            'data' => $movies,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'rating' => 'required',
            'image' => 'required',
        ]);
 
        if ($validator->fails()) {
                        // ->withErrors($validator)
                        // ->withInput();

            return response()->json([
                'status' => 'error',
                'message' => $validator->errors(),
            ]);
        }

        $movies = Movies::create([
            'title' => $request->title,
            'description' => $request->description,
            'rating' => $request->rating,
            'image' => $request->image,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Movies berhasil ditambah',
            'data' => $movies,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $movies = Movies::find($id);
        
        return response()->json([
            'status' => 'success',
            'data' => $movies,
        ]);
    }

    public function destroy($id)
    {
        $movies = Movies::find($id);
        $movies->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Movies berhasil dihapus',
            'data' => $movies,
        ]);
    }
}
