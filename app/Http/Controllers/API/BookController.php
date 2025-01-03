<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Book\StoreRequest;
use App\Http\Requests\Book\UpdateRequest;
use App\Models\Buku;
use App\Models\Kategoris;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $buku = Buku::all();

            return response()->json([
                'suceess' => true,
                'data' => $buku,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {
            $category = Kategoris::where('nama_kategori', $request->nama_kategori)->first();
            if (!$category) {
                return response()->json([
                    'success' => false,
                    'message' => 'Category not found',
                ], 404);
            }
            $buku = Buku::create($request->validated());

            return response()->json([
                'success' => true,
                'data' => $buku,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $buku = Buku::find($id);
            if (!$buku) {
                return response()->json([
                    'success' => false,
                    'message' => 'Book not found',
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => $buku,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        try {
            $buku = Buku::find($id);
            if ($request->has('nama_kategori') && !$category = Kategoris::where('nama_kategori', $request->nama_kategori)->first()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Category not found',
                ], 404);
            }
            if (!$buku) {
                return response()->json([
                    'success' => false,
                    'message' => 'Book not found',
                ], 404);
            }
            $buku->update($request->validated());

            return response()->json([
                'success' => true,
                'data' => $buku,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $buku = Buku::find($id);
            if (!$buku) {
                return response()->json([
                    'success' => false,
                    'message' => 'Book not found',
                ], 404);
            }
            $buku->delete();

            return response()->json([
                'success' => true,
                'message' => 'Book deleted',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function getByCategory(string $category)
    {
        try {
            $books = Buku::where('nama_kategori', $category)->get();

            return response()->json([
                'success' => true,
                'data' => $books,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function search(string $keyword)
    {
        try {
            $books = Buku::where('judul', 'like', "%$keyword%")->get();

            return response()->json([
                'success' => true,
                'data' => $books,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
