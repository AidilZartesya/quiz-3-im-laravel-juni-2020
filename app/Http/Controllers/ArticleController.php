<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index(){
        $articles =  ArticleModel::get_all();
        return view('article.index',compact('articles'));
    }
    public function create(){
        return view('article.form');
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data['_token']);
        $data['slug'] = Str::slug($request['judul'], '-');
        $article = ArticleModel::save($data);
		return redirect('/article');
    }

    public function show($id){
        $article = ArticleModel::find_by_id($id);
        return view('article.show', compact('article'));
    }

    public function edit($id){
        $article = ArticleModel::find_by_id($id);
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id){
    	$article = ArticleModel::update($id, $request->all());
    	return redirect('/article');
    }

    public function destroy($id){
        $article = ArticleModel::destroy($id);
        return redirect('/article');
    }
}

?>
