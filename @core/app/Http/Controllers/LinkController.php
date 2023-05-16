<?php

namespace App\Http\Controllers;

use App\Language;
use App\LinkCategory;
use App\Links;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class LinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Create ImportantLinksCategory
        $all_docs = Links::orderBy('updated_at', 'DESC')->get();
        return view('backend.pages.link.index', compact('all_docs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create ImportantLinksCategory
        $all_docs = Links::orderBy('updated_at', 'DESC')->get();
        $categories = LinkCategory::all();
        return view('backend.pages.link.create', compact(['categories', 'all_docs']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'file' => 'mimes:pdf,doc,docx,xls,xlsx|max:50000',
            // 'categories' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $title = $request->title;
            $url = $request->customurl;
            $file = $request->file('file');
            // $name = sha1(date('YmdHis') . Str::random(30));
            $fileSizeInByte = File::size($file);

            // Store File
            if (file_exists($file)) {
                $originalFile = basename($file->getClientOriginalName());
                $newFile = $file->getClientOriginalExtension();
                $file->storeAs('public/important_documents', $file->getClientOriginalName());
            } else {
                $originalFile = '';
                $newFile = '';
            }

            $upload = new Links();
            $upload->title = $title;
            $upload->original_filename = $originalFile;
            $upload->file_extension = $newFile;
            // $upload->filename = $newFile;
            $upload->file_size = $fileSizeInByte;
            $upload->url = $url;
            $upload->expired_at = Carbon::now()->addDays(10);
            $upload->save();

            $upload->LinkCategory()->attach($request->categories);

            return redirect()->back()->with([
                'msg' => __('New Document or Link Added...'),
                'type' => 'success'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $links = Links::find($id);
        $categories = LinkCategory::all();
        return view('backend.pages.link.edit', compact(['links', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Update File
        $upload = Links::find($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'file' => 'mimes:pdf,doc,docx,xls,xlsx|max:50000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $title = $request->title;
            $url = $request->customurl;
            $update_at = $upload->updated_at;

            $upload->title = $title;
            $upload->url = $url;
            $upload->expired_at = $update_at->addDays(10);
            $upload->update();

            $upload->LinkCategory()->attach($request->categories);

            return redirect()->route('admin.links')->with([
                'msg' => __('New Document or Link Updated...'),
                'type' => 'success'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Links::where('id', $id)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Document or Link Not Found !!');
        } else {
            $data->LinkCategory()->detach();
            Links::where('id', $id)->delete();
            $file = "/public/important_documents/" . $data->original_filename;

            if (Storage::exists($file)) {
                Storage::delete($file);
            }
        }

        return redirect()->back()->with([
            'msg' => __('Document or Link Deleted...'),
            'type' => 'success'
        ]);
    }
}
