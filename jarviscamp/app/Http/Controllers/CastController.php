<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data = DB::table('cast')->get();
        $data = Cast::get();
        return view('cast',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createCast');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = [
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio
        ];
        // $data = DB::table('cast')->insert($input);
        $data = Cast::insert($input);

        return redirect('/cast');
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
        // $data = DB::table('cast')->where('id',$id)->get();
        $data = Cast::find($id);
        // dd($data);
        return view('showCast', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // $data = DB::table('cast')->where('id',$id)->get();
        $data = Cast::find($id);
        return view('editCast',compact('data'));
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
        $data = [
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio
        ];
        // DB::table('cast')->where('id',$id)->update($data);
        Cast::find($id)->update($data);
        return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('cast')->where('id',$id)->delete();
        Cast::find($id)->delete();
        return redirect('/cast');
    }
}
