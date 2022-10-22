<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mentor;
use App\Models\Position;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentors = Mentor::all();
        return view('admin.mentor.index', compact('mentors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::role(['user'])->get();
        $positions = Position::all();
        $programs = Program::all();
        return view('admin.mentor.create', compact( 'users', 'positions', 'programs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $user = User::find($request->user_id);
        $position = Position::find($request->position_id);
        $program = Program::find($request->program_id);

        $data = $request->validate([
            'user_id' => 'required',
            'position_id' => 'required',
            'program_id' => 'required'
        ]);

        Mentor::create([
            'user_id' => $request->user_id,
            'position_id' => $request->position_id,
            'program_id' => $request->program_id,
        ], $data);
        return redirect()->route('admin.mentor.index', compact('user', 'position', 'program'));

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
        $mentor = Mentor::find($id);
        $users = User::role(['user'])->get();
        $positions = Position::all();
        $programs = Program::all();
        return view('admin.mentor.edit', compact('mentor', 'users', 'positions', 'programs'));
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
        $user = User::find($request->user_id);
        $position = Position::find($request->position_id);
        $program = Program::find($request->program_id);

        $data = $request->validate([
            'user_id' => 'required',
            'position_id' => 'required',
            'program_id' => 'required'
        ]);

        $mentor = Mentor::find($id);
        $mentor->update([
            'user_id' => $request->user_id,
            'position_id' => $request->position_id,
            'program_id' => $request->program_id,
        ], $data);
        return redirect()->route('admin.mentor.index', compact('user', 'position', 'program'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mentor = Mentor::findOrFail($id);

        $mentor->delete();

        return redirect()->route('admin.mentor.index');
    }
}
