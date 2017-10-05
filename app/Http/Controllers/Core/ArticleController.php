<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ArticleController extends Controller
{
    public function index0(){

        //$arts = DB::select("SELECT * FROM `articles`");
        //$arts = DB::select("SELECT * FROM `articles` WHERE id = ?",[2]);
        $arts = DB::select("SELECT * FROM `articles` WHERE id = :id",['id' => 5]);

        //DB::insert("INSERT INTO `articles` (`title`,`text`,`img`) VALUES (?,?,?)",['title','text','img.jpg']);
        $last_id = DB::connection()->getPdo()->lastInsertId();

        $count = DB::update("UPDATE `articles` SET title = ? WHERE id = ?",["Heading title",5]);

        $count = DB::delete("DELETE FROM `articles` WHERE id = ?",[5]);

        dump($count);
        dump($last_id);
    }

    public function index(){

        $arts = DB::select("SELECT * FROM `articles`");
        return view('page',['title'=>'Статьи','articles'=>$arts]);
 
    }

    public function article($id){

        $art = DB::select("SELECT * FROM `articles` WHERE id = :id",['id' => $id]);
        //dump($art);
        return view('article-content',['title'=>'Статья','article'=>$art]);
    }
}
