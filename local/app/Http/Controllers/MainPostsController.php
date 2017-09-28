<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostsRequest;

use App\Posts;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class MainPostsController extends Controller
{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)
    {

        $posts = Posts::where('category_post_id','=',2)->orderBy('id', 'DESC')->paginate(5);

        return view('backend.admin.mainposts.index', compact('posts'))

            ->with('i', ($request->input('page', 1) - 1) * 5);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('backend.admin.mainposts.create', compact('roles'));

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request $request

     * @return \Illuminate\Http\Response

     */

    public function store(PostsRequest $request)

    {

        $posts = new Posts();

        $title = $request->input('title');

        $content = $request->input('content');

        $image = $request->input('image');

        $image = substr($image, strpos($image, 'images'), strlen($image) - 1);

        $posts->title = $title;

        $posts->path=chuyen_chuoi_thanh_path($title);

        $posts->content = $content;

        $posts->image = $image;
        $posts->category_post_id=2;

        $posts->user_id = Auth::user()->id;

        $posts->save();

        return redirect()->route('main-posts.index')

            ->with('success', 'Tạo Mới Thành Công Bài Viết');



    }



    /**

     * Display the specified resource.

     *

     * @param  int $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $posts = Posts::find($id);

        return view('backend.admin.mainposts.edit', compact('posts'));

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request $request

     * @param  int $id

     * @return \Illuminate\Http\Response

     */

    public function update(PostsRequest $request, $id)

    {

        $posts = Posts::find($id);

        $title = $request->input('title');

        $content = $request->input('content');

        $image = $request->input('image');

        $image = substr($image, strpos($image, 'images'), strlen($image) - 1);

        $posts->title = $title;

        $posts->content = $content;

        $posts->image = $image;

        $posts->path=chuyen_chuoi_thanh_path($title);

        $posts->user_id = Auth::user()->id;

        $posts->save();

        return redirect()->route('main-posts.index')

            ->with('success', 'Cập Nhật Thành Công Tin Tức');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        $posts = Posts::find($id);

        $posts->delete();

        return redirect()->route('main-posts.index')

            ->with('success', 'Đã Xóa Bài Viết Thành Công');

    }



    public function search(Request $request)

    {

        $keywords = preg_replace('/\s+/', ' ',$request->input('txtSearch'));

        $posts = Posts::where('title', 'like', '%' . $keywords . '%')->where('category_post_id','=',2)->orderBy('id', 'DESC')->paginate(5);

        return view('backend.admin.mainposts.index', compact('posts', 'keywords'))

            ->with('i', ($request->input('page', 1) - 1) * 5);

    }

}
