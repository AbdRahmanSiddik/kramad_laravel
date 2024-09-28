<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    protected $squad;

    function __construct(Request $request)
    {
        $team = $request->route('team');
        $this->squad = Team::getDetailTeam($team);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::getAllTeams()->get();

        return view('admin.team.team', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.add_team');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'about' => 'required'
        ]);

        $token = uniqid();
        $token_team = Str::random('15');
        $file = $request->file('picture');
        $name = $request->name;
        $position = $request->position;
        $about = $request->about;

        $file_name = $token.'.'.$file->getClientOriginalExtension();

        $data = [
            'token_team' => $token_team,
            'name' => $name,
            'position' => $position,
            'about' => $about,
            'picture' => $file_name
        ];

        $file->move('team', $file_name);
        Team::create($data);

        return redirect('/team_info')->with(['succes' => 'Berhasil Menambah Tim']);
    }

    /**
     * Display the specified resource.
     */
    public function show($team)
    {
        // $squad = Team::getDetailTeam($team)->first();
        $squad = $this->squad->first();

        return view('admin.team.detail_team', compact('squad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($team)
    {
        $squad = Team::getDetailTeam($team)->first();

        return view('admin.team.edit_team', compact('squad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $team)
    {
        $squad = Team::getDetailTeam($team)->first();

        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'about' => 'required'
        ]);

        $token = uniqid();
        $token_team = Str::random('15');
        $file = $request->file('picture');
        $name = $request->name;
        $position = $request->position;
        $about = $request->about;

        try {
            $file_name = $token.'.'.$file->getClientOriginalExtension();
            $file->move('team',$file_name);

            File::delete('team/'.$squad->picture);
        } catch (\Throwable $th) {
            $file_name = $squad->picture;
        }

        $data = [
            'token_team' => $token_team,
            'name' => $name,
            'position' => $position,
            'about' => $about,
            'picture' => $file_name
        ];

        Team::where('token_team', $team)->update($data);

        return redirect('/team_info')->with(['succes' => 'Berhasil Edit Tim']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($team)
    {
        $squad = Team::getDetailTeam($team);
        $file = $squad->first();

        File::delete('team/'.$file->picture);
        $squad->delete();

        return redirect('/team_info')->with(['succes'=>'Berhasil menghapus']);
    }
}
