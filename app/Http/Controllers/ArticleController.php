<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Articles;
use DB;
use Intervention\Image\ImageManager;

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
        $destinationPath = public_path('/asset/upload/');
        $file->move($destinationPath, $fileName);  

             }
        $values =$request->rating;
        $text= implode(",",$values);
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

      $articles = DB::table('articles')->where('id', $id)->first();
      $rating = explode(",", $articles->rating);
      return view('articles.edit',compact('articles','rating'))->with('id',$id);
    }

 public function update(Request $request)
    {
        
        $data = $request->validate([
        'title' => 'required',
        'body' => 'required',
        'rating' => 'required',
        'writer' => 'required']);

         if (request()->hasFile('or_image'))
             {
        $file = request()->file('or_image');
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/asset/upload/');
        $file->move($destinationPath, $fileName);  
            }
        $values =$request->rating;
        $text= implode(",",$values);

        DB::table('articles')->where('id',$request->id)->update([ 
        'title' => request()->get('title'),
        'body' => request()->get('body'),
        'rating' => $text,
        'writer' => request()->get('writer'),]
        );   
        // DB::table('articles')->where('id',$request->id)->update($data);
         return redirect()->back()->with('update', 'article updated sucessfully');
    }

}