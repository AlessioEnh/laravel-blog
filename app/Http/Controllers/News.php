<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ValidFormArticle;
use App\Http\Controllers\Controller;

class News extends Controller
{   

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index() {

        // dd(Article::all());

        return view('News', ['data' => Article::all()]);
    }

    public function get($id) {
        
        // dump(Article::find($id));

        return view('articles', ['data' => Article::find($id)]);
    }

    public function create(){

        if($this->request->isMethod('post')){

            // $rules = [
            //     'title'=>'required|max:255',
            //     'text'=>'required',
            // ];

            // $this->request, $rules()

            // $this->validate();

            dump($this->request->all());

            $data = new Article;
            $data->title = $this->request->title;
            $data->author = $this->request->author;
            $data->description = $this->request->description;
            $data->text = $this->request->text;
            $data->save();

        }

        return view('Form');
    }

}
