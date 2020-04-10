<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Menampilkan semua kategori
    public function index()
    {
        // "TODO: menampilkan semua kategori dari DB";
        return Category::all();

        // return Category::all(); menampilkan semua kategori
        // return Category::withTrashed()->get(); menampilkan semua kategori beserta soft deleted
        // return Category::onlyTrashed()->get(); menampilkan hanya kategori soft deleted
    }

    // Mencari kategori berdasarkan nama
    public function search(Request $request)
    {
        // "TODO: menampilkan hasil search berdasarkan nama kategori";
        $keyword = $request->get("name");
        return Category::where("name", "LIKE", "%$keyword%")->get();
    }

    // Delete kategori
    public function delete($id)
    {
        // "TODO: menghapus(soft delete) kategori berdasarkan ID";
        $category = Category::findOrFail($id);

        if (!$category->trashed()) {
            $category->delete();
            return "Kategori $category->name berhasil dihapus";
        }
    }

    // Restore kategori yang telah didelete
    public function restore($id)
    {
        // "TODO: merestore kategori yang statusnya dihapus (soft delete)";
        $category = Category::withTrashed()->findOrFail($id);

        if (!$category->trashed()) {
            return "Kategori tidak perlu direstore";
        }
        return "Kategori $category->name berhasil direstore";
    }

    // Permanent delete (tidak bisa di restore)
    public function permanentDelete($id)
    {
        // "TODO: hapus secara permanent sebuah kategori dari DB. Tidak bisa direstore";
        $category = Category::withTrashed()->findOrFail($id);
        $category->forceDelete();

        return "Kategori $category->name berhasil dihapus permanent. Tidak bisa direstore";
    }
}
