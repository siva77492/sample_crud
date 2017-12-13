<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Articles;
use DB;
class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 public function index2()
            {
         
         $articles=DB::table('articles')->get();
         return view('articles.index',compact('articles'))->with('i');
             }
    
public function create()
    {
        return view('articles.create');
    }


 public function add(Request $request) 
    {
         $data = ['title'=>$request->title, 'body'=>$request->body];
         DB::table('articles')->insert($data);
       return redirect()->back()->with('message', 'article added sucessfully');
    }   

public function delete($id)
    {
       DB::table('articles')->where('id',$id)->delete();
      return redirect()->back()->with('delete', 'article deleted sucessfully');
    }

  public function edit($id)
    {

      $article = DB::table('articles')->where('id', $id)->first();
            return view('articles.edit',compact('article'))->with('id',$id);
           // $data= Articles::find($id);
        // if(count($data)>0)
        // {
        //     return view('articles.edit',['data'=>dat])

        // }
    }

 public function update(Request $request)
    {
        
        $data = ['title'=>$request->title, 'body'=>$request->body];
        DB::table('articles')->where('id',$request->id)->update($data);
         return redirect()->back()->with('update', 'article updated sucessfully');
    }

}