<?php

namespace App\Http\Controllers;

use App\Models\tasks;
use Illuminate\Support\Facades\DB;
use App\Models\AppUsers;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showForm()
    {
        return view('login');
    }


    public function submitForm(Request $request)
    {

        $validated = $request->validate([
            'password' => 'required|string|max:255',
            'email' => 'required|string|max:255',
        ]);


        $user = AppUsers::where('email', $validated['email'])->first();

        if (!$user || $user->password !== $validated['password']) {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }

        session(['user_id' => $user->id]);
        return redirect()->route('projects.show');
    }


    public function showProjects() {

        if (!session('user_id')) {
            return redirect()->route('login.form')->with('error', 'You must be logged in to view this page.');
        }

        $projects = DB::table("tasks")
            ->select("project_name")
            ->distinct()
            ->get();


        return view('projects', compact('projects'));
    }


    public function selectProject(Request $request) {

        if (!session('user_id')) {
            return redirect()->route('login.form')->with('error', 'You must be logged in to view this page.');
        }

        $projectName = $request->input('project_name');
        $projectStatus = $request->input('status');

        return redirect()->route('projects.details', ['projectName' => $projectName, 'projectStatus' => $projectStatus]);
    }


    public function showProjectDetails($projectName, $projectStatus) {

        if (!session('user_id')) {
            return redirect()->route('form.show')->with('error', 'You must be logged in to view this page.');
        }

        $filteredTasks = DB::table("tasks")
            ->where("project_name", $projectName)
            ->where("status", $projectStatus)
            ->get();


        $namesList = [];
        foreach ($filteredTasks as $task) {

            $userFromID = DB::table("app_users")
                ->where("id", $task->user+1)
                ->first();

            $userName = $userFromID -> name;
            $namesList[] = $userName;

        }

        return view('project-details', compact('filteredTasks', 'projectName', 'projectStatus', 'namesList'));
    }


    public function logout()
    {
        session()->forget('user_id');
        return redirect()->route('login.form')->with('success', 'You have been logged out.');
    }

}
