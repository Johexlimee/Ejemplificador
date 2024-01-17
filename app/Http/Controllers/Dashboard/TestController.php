<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = [1,2,3,4,5];
        $name = "Jahecke";
        $age = 25;
        $sex = "si";
        //return view("dashboard.test.index",['name' => 'Johelimxeeee','age' => '25','sex' => '<h1>Buenas</h1>','array' => [1,2,3,4,5],'array2' => []]);
        //return view("dashboard.test.new",['name' => 'Johelimxeeee','age' => '25','sex' => '<h1>Buenas</h1>','array' => [1,2,3,4,5],'array2' => []]);
        return view("dashboard.test.new",compact('posts', 'name', 'age', 'sex'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
