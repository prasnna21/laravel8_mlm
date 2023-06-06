<?php
namespace App\Http\Controllers\User\Dashboard\Groups;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Generation;
class UserGroupsController extends Controller
{
    public function direct_group()
    {
        $members = User::where('sponsor_code', Auth::user()->id)->get();
        return view('user.dashboard.directgroup', [
            'members' => $members
        ]);
    }

    public function level_group()
    {
        $members = Generation::where('main_id', Auth::user()->id)->get();
        return view('user.dashboard.levelgroup', [
            'members' => $members
        ]);
    }
}








