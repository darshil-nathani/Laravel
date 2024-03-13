<?php

namespace App\Http\Controllers;
use \App\Models\Myblog;
use Illuminate\Http\Request;

class MyblogController extends Controller
{
    public function index(){
        $myposts = Myblog::paginate(5);
        return view('user.index', compact('myposts'));

    }
    public function contactUs(){
        return view('user.contactus');
    }
    public function aboutUs(){
        return view('user.aboutus');
    }
    public function create(){
        return view('user.create');
    }

    public function edit(Myblog $mypost){
        return view('user.edit', compact('mypost'));
    }
    public function update(Request $request, Myblog $mypost){
        $mypost->title = $request->title;
        $mypost->subtitle = $request->subtitle;
        $mypost->body_content = $request->body_content;
        $mypost->save();
        return redirect()->route('mypost.index');
    }
    public function destroy(Myblog $mypost){
        $mypost->delete();
        return redirect()->route('mypost.index');
    }
    public function store(Request $request){
        $myblog = new Myblog();
        $myblog->title = $request->title;
        $myblog->subtitle = $request->subtitle;
        $myblog->body_content = $request->body_content;
        $myblog->save();
        return redirect()->route('mypost.index');
    }
    public function show(Myblog $mypost){
        return view('user.show', compact('mypost'));
    }
}
