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
         $data = $request->validate([
        'title' => 'required',
        'body' => 'required',
        'or_image' => 'required',
        'rating' => 'required',
        'writer' => 'required']);

         if (request()->hasFile('or_image'))
             {
        $file = request()->file('or_image');
        $fileName = time().'.'.$file->getClientOriginalName();
        $destinationPath = public_path('/asset/upload');
        $file->move($destinationPath, $fileName);  

            }

        
        $text="good";
        DB::table('articles')->insert([
        'title' => request()->get('title'),
        'body' => request()->get('body'),
        'or_image' =>$fileName,
        'rating' => $text,
        'writer' => request()->get('writer')]
        );   
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
    }

 public function update(Request $request)
    {
        
        $data = $request->validate([
        'title' => 'required',
        'body' => 'required',]);
        DB::table('articles')->where('id',$request->id)->update($data);
         return redirect()->back()->with('update', 'article updated sucessfully');
    }

}