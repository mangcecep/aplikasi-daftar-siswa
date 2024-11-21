<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activity = new Activity;
        $data = $activity->all();
        return view('home', compact('data'));
    }

    public function add()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'activity_name' => 'required|min:4|max:20'
        ], [
            'activity_name.required' => 'activity name mus be filled!',
            'activity_name.min' => 'activity name min 4 char!',
            'activity_name.max' => 'activity name max 20 char!',
            // 'activity_name.alpha' => 'activity name must be string!',
        ]);

        $activity = new Activity;

        $activity->activity_name = $request->activity_name;
        $activity->save();

        // $activity->create([
        //     'activity_name' => $request->activity_name
        // ]);

        return redirect('/')->with('success', 'Activity has added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activity = new Activity;
        $data = $activity->find($id);
        if (!isset($data)) {
            return abort(404, 'Activity not found');
        }
        return view('update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'activity_name' => 'required|min:4|max:20'
        ], [
            'activity_name.required' => 'activity name mus be filled!',
            'activity_name.min' => 'activity name min 4 char!',
            'activity_name.max' => 'activity name max 20 char!',
            // 'activity_name.alpha' => 'activity name must be string!',
        ]);
        $activity = new Activity;
        $data = $activity->find($id);
        $data->activity_name = $request->activity_name;
        $data->save();
        return redirect('/')->with('success', 'Activity has updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = new Activity;
        $data = $activity->find($id);
        $data->delete();
        return redirect('/')->with('success', 'Activity has deleted!');
    }
}
