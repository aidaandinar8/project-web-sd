<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Banner;
use App\Models\Event;
use App\Models\Guru;
use App\Models\Motivasi;
use App\Models\Pengumuman;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class DashboardAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::count();
        $motivasi = Motivasi::count();
        $pengumuman = Pengumuman::count();
        $arsip = Arsip::count();
        $event = Event::count();
        $prestasi = Prestasi::count();
        $banner = Banner::count();
        return view('admin.index', compact('guru', 'motivasi', 'pengumuman', 'arsip', 'event', 'prestasi', 'banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
