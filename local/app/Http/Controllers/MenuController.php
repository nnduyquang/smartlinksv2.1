<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        // Lay List Menu Trong DB Sau Do Add Item 'Menu Goc' Len Dau Tien
//        $dd_menus = Menu::all()->pluck('name', 'id')->prepend('Menu Gốc','-1');
        $dd_menus = Menu::all();
        foreach ($dd_menus as $key => $data) {
            if ($data->level == MENU_CAP_1) {
                $data->name = ' ---- ' . $data->name;
            }
            else if ($data->level == MENU_CAP_2) {
                $data->name = ' --------- ' . $data->name;
            }
        }
//        foreach($dd_menus as $key => $data){
//            $parentID=$data->parent_id;
//            foreach ($dd_menus as $key =>$sortData){
//                if($sortData->id==$parentID){
//
//                }
//            }
//        }
        dd($dd_menus);
        $dd_menus = $dd_menus->pluck('name', 'id')->prepend('Menu Gốc', '-1');

        $dd_menus=$dd_menus->slice(1,2);
        dd($dd_menus);
        return view('backend.admin.menu.index', compact('dd_menus'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.menu.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new Menu();
        $name = $request->input('name');
        $path = chuyen_chuoi_thanh_path($name);
        $order = $request->input('order');
        $parentID = $request->input('level');
        if ($parentID != MENU_CHINH) {
            $menu->parent_id = $parentID;
            $level = Menu::where('id', '=', $parentID)->first()->level;
            $menu->level = (int)$level + 1;
        } else
            $menu->level = 0;
        $menu->name = $name;
        $menu->path = $path;
        $menu->order = $order;
        $menu->save();
        return redirect()->route('menu.index')
            ->with('success', 'Thêm Menu Thành Công');
        //dd($request);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
