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
        return view('article.create');
    }

    public function createArticle(Request $request){
        $rules = array(
          'image' => 'mimes:jpeg,jpg,png,gif|required|max:2048' // max 10000kb
        );
        $userId = Auth::user()->id;
        $username = Auth::user()->name;
        $articleName = $request->input('name');
        $articleContents = $request->input('article');
        $tagId = $request->input('tag');
        $imageFile = $request->file('image');
        $i = 1;
        $randomString = $this->fileNameGenerator();
        $filenames = array();
        foreach($imageFile as $value){
            $fileArray = array('image' => $value);
            $validator = Validator::make($fileArray, $rules);
            if ($validator->fails()) {
                $errors = $validator->errors();
                $errorMessage = $errors->first('image');
                return redirect()->back()->with('errormessage', $errorMessage);
            } else {
                $extension = $value->getClientOriginalExtension();
                $filename = $randomString."_".$i.".".$extension;
                $value->storeAs('public/images', $filename);
                $filenames[] = $filename;
                $i++;
            }
        }
        $filenames = json_encode($filenames);
        $insertArray = array('name' => $articleName,
            'user_id' => $userId,
            'article' => $articleContents,
            'image' => $filenames,
            'tag_id' => $tagId,
            'created_by' => $username
        );

        $article = Article::insert($insertArray);
        return redirect()->back()->with('message', 'Article Created Successfully');
    }

    function fileNameGenerator($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
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

    public function showArticle(){
        $articles = Article::orderByDesc('created_at')->get();
        return view('home', compact('articles'));
    }
}
