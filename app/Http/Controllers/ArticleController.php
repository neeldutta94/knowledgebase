<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Article;
use Auth;
use Input;
use Validator;
use Redirect;
use View;

class ArticleController extends Controller
{
    public function index(){
        return view('article.index');
    }

    public function createArticle(Request $request){
        $userId = Auth::user()->id;
        $articleName = $request->input('name');
        $articleContents = $request->input('article');
        $imageFile = $request->file('image');
        $extension = $imageFile->getClientOriginalExtension();
        $filename = "something.".$extension;

        Storage::disk('public')->put('something',  \File::get($imageFile));
        $insertArray = array('name' => $articleName,
            'user_id' => $userId,
            'article' => $articleContents,
            'image' => $filename
        );
        $article = Article::insert($insertArray);
    }

    public function checkImage(Request $request){
        $this->validate($request, [
            'image'=>'required',
        ]);

        if($request->hasFile('image')){
            $allowedfileExtension=['pdf','jpg','png','docx'];
            $files = $request->file('image');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){
                    return response('Okay', 200);
                } else {
                    return response('Not Okay', 200);
                }
            }
        }
    }
}
