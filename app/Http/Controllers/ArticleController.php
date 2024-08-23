<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function tampil(){
    // pegunaan models harus dipanggil terlebih dahulu dan harus sesuai dengan nama file model
        $list_article = article::get();
        return view('admin.pages.index', ['list_article' => $list_article]);
    }

    public function simpan(Request $post){
        $data_article = new article();
        $data_article->penulis = $post->penulis;
        $data_article->judul = $post->judul;
        $data_article->konten = $post->konten;

    // simpan gambar
        if($post->hasFile('gambar'))
        {
            $destination_path = 'public/images/article';
            $gambar = $post->file('gambar');
            $gambar_nama = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->storeAs($destination_path, $gambar_nama);
            
            $data_article->gambar = $gambar_nama;
        }

        $data_article->created_at = date ('y-m-d');
        $data_article->updated_at = date ('y-m-d');
        $data_article->save();

        return redirect('/admin');
    }

    // edit gambar
    // update gambar


    // hapus gambar
    public function hapus($article){
        $edit_article = article::where('id',$article)->delete();

        return redirect('/admin');
    }


}
