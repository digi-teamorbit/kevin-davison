<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AssetClass;
use Illuminate\Http\Request;
use Image;
use File;

class AssetClassController extends Controller
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
        $model = str_slug('assetclass','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $assetclass = AssetClass::where('title', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $assetclass = AssetClass::paginate($perPage);
            }

            return view('admin.asset-class.index', compact('assetclass'));
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
        $model = str_slug('assetclass','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('admin.asset-class.create');
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
        $model = str_slug('assetclass','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'title' => 'required',
			'description' => 'required',
			'image' => 'required'
		]);

            $assetclass = new assetclass($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $assetclass_path = 'uploads/assetclass/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($assetclass_path) . DIRECTORY_SEPARATOR. $profileImage);

                $assetclass->image = $assetclass_path.$profileImage;
            }
            
            $assetclass->save();

            return redirect('admin/asset-class')->with('flash_message', 'AssetClass added!');
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
        $model = str_slug('assetclass','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $assetclass = AssetClass::findOrFail($id);
            return view('admin.asset-class.show', compact('assetclass'));
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
        $model = str_slug('assetclass','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $assetclass = AssetClass::findOrFail($id);
            return view('admin.asset-class.edit', compact('assetclass'));
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
        $model = str_slug('assetclass','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'title' => 'required',
			'description' => 'required'
		]);
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $assetclass = assetclass::where('id', $id)->first();
            $image_path = public_path($assetclass->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/assetclasss/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/assetclass/'.$fileNameToStore;               
        }


            $assetclass = AssetClass::findOrFail($id);
             $assetclass->update($requestData);

             return redirect('admin/asset-class')->with('flash_message', 'AssetClass updated!');
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
        $model = str_slug('assetclass','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            AssetClass::destroy($id);

            return redirect('admin/asset-class')->with('flash_message', 'AssetClass deleted!');
        }
        return response(view('403'), 403);

    }
}
