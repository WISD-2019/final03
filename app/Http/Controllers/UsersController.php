<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::orderBy('created_at', 'ASC')->get();
        $data=['users'=>$users];
        return view('admin.posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //單元練習< 練習4-4> 設定 AdminPostsController對應的 function
    //單元練習< 練習5-1> 將表單送過來的資料用 Model 寫入資料庫
    //單元練習< 練習5-2>  設定頁面跳轉
    //單元2 < 練習2-3> 編輯 PostsController 裡設定 typehinting
    public function store(PostRequest $request)
    {
        User::create($request->all());
        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $users
     * @return \Illuminate\Http\Response
     */
    public function show(User $users)
    {
        return view('admin.posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $users
     * @return \Illuminate\Http\Response
     */
    //單元練習< 練習6-1>  在 PostsController的 edit內取得舊資料
    public function edit($id)
    {
        $users=User::find($id);
        $data=['post'=>$users];
        return view('admin.posts.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    //單元練習< 練習6-5> 在 PostsController的 update內更新資料
    //單元2 < 練習2-3> 編輯 PostsController 裡設定 typehinting
    public function update(PostRequest $request,$id)
    {
        $users=User::find($id);
        $users->update($request->all());
        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    //單元練習< 練習7-3> 在 PostsController的 destroy內刪除資料
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.posts.index');
    }

}
