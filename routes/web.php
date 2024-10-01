<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;

Route::get('/', function () {
    return view('welcome');
});
//!rotta di tipo get per vedere la pagina con gli articoli
Route::get('index/article',function(){
    $articles=Article::all();//*prende tutto quello che ce nel db
    return view('index',compact('articles'));

})->name('index.articles');//!metodo usato da roberto, "don't try this at home" è da pro player , meglio suddividere come sempre

//!rotta di tipo get parametrica che ci porterà al form per poter modificare l'articolo

Route::get("/article/{article}/change",function(Article $article){
return view("change",compact("article"));
})->name('change');