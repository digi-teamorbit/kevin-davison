<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\ArticleCategory;
use Illuminate\Http\Request;
use Image;
use File;

class ArticleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('article','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $article = Article::where('title', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $article = Article::paginate($perPage);
            }

            return view('admin.article.index', compact('article'));
        }
        return response(view('403'), 403);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('article','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {

            $items = ArticleCategory::pluck('category_name', 'id');

            return view('admin.article.create', compact('items'));
        }
        return response(view('403'), 403);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $model = str_slug('article','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'title' => 'required',
			'description' => 'required',
			'image' => 'required',
            'item_id' => 'required',
		]);

           $article = new article;
           
            $article->title = $request->input('title');        
            $article->description = $request->input('description');   
            $article->map = $request->input('map'); 
            $article->category = $request->input('item_id'); 
                
            $file = $request->file('image');

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $article_path = 'uploads/articles/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($article_path) . DIRECTORY_SEPARATOR. $profileImage);

                $article->image = $article_path.$profileImage;
            }
            
            $article->save();

            return redirect('admin/article')->with('flash_message', 'Article added!');
        }
        return response(view('403'), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('article','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $article = Article::findOrFail($id);
            return view('admin.article.show', compact('article'));
        }
        return response(view('403'), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('article','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $article = Article::findOrFail($id);

            $items = ArticleCategory::pluck('category_name', 'id');

            return view('admin.article.edit', compact('article', 'items'));
        }
        return response(view('403'), 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('article','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'title' => 'required',
			'description' => 'required',
            'item_id' => 'required',

		]);
        
        $requestData['title'] = $request->input('title');
        $requestData['description'] = $request->input('description');
        $requestData['map'] = $request->input('map');
        $requestData['category'] = $request->input('item_id');
            

        if ($request->hasFile('image')) {
            
            $article = article::where('id', $id)->first();
            $image_path = public_path($article->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/articles/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/articles/'.$fileNameToStore;               
        }


             article::where('id', $id)
                ->update($requestData);

             return redirect('admin/article')->with('flash_message', 'Article updated!');
        }
        return response(view('403'), 403);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('article','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Article::destroy($id);

            return redirect('admin/article')->with('flash_message', 'Article deleted!');
        }
        return response(view('403'), 403);

    }
}
