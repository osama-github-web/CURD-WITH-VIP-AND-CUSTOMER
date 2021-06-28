<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vip;

class VipController extends Controller
{
    public function index(){
        return view('curd.vip.index');
    }

    public function all(){
        $vips = Vip::all();
        return view('curd.vip.all',compact('vips'));
    }

    public function create(Request $request){
        Vip::create($request->except('_token'));
        return redirect()->route('vip/all');
    }

    public function edit($id){
        $vip = Vip::find($id);
        // return view('curd.vip.edit',['vip' => $vip]);
        return view('curd.vip.edit',compact('vip'));
    }

    public function update(Request $request){
        Vip::where("id",$request->id)->update($request->except('_token','id'));
        return redirect()->route('vip/all');
    }

    public function destroy($id){
        // Vip::find($id)->delete();
        // Vip::where('id',$id)->delete();
        Vip::destroy($id);
        return redirect()->route('vip/all');
    }
}
