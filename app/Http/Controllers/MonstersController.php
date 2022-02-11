<?php

namespace App\Http\Controllers;

use App\Models\Monsters;
use Exception;
use Illuminate\Http\Request;

class MonstersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('monsters.index', [
            'monsters' => Monsters::paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monsters.create', [
            'monsters' => Monsters::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $monsters = new Monsters($request->all());
        $monsters->save();
        return redirect(route('monsters.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monsters  $monsters
     * @return \Illuminate\Http\Response
     */
    public function show(Monsters $monsters)
    {
        return view('monsters.show', [
            'monsters' => $monsters
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monsters  $monsters
     * @return \Illuminate\Http\Response
     */
    public function edit(Monsters $monsters)
    {
        return view('monsters.edit', [
            'monsters' => $monsters
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Monsters  $monsters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monsters $monsters)
    {
        $monsters->fill($request->all());
        $monsters->save();
        return redirect(route('monsters.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monsters  $monsters
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monsters $monsters)
    {
        try {
            $monsters->delete();
            return response()->json([
                'status' => 'success'
            ]);
        } catch (Exception $e) {
            return response()->json([

                'status' => 'error',
                'message' => 'wystąpił błąd'
            ])->setStatusCode(500);
        }
    }
}
