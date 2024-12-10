<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('country')->get();
        $countries = Country::all();
        return view('users.index', compact('users', 'countries'));
    }

    public function create()
    {
        $countries = Country::all();
        return view('users.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'names' => 'required|string|max:45',
            'lastname' => 'required|string|max:45',
            'email' => 'required|string|email|max:45',
            'gender' => 'required|string|max:45',
            'phone' => 'required|string|max:45',
            'country_id' => 'required|exists:countries,id',
        ]);

        User::create($request->all());

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        $countries = Country::all();
        return view('users.edit', compact('user', 'countries'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'names' => 'required|string|max:45',
            'lastname' => 'required|string|max:45',
            'email' => 'required|string|email|max:45',
            'gender' => 'required|string|max:45',
            'phone' => 'required|string|max:45',
            'country_id' => 'required|exists:countries,id',
        ]);

        $user->update($request->all());

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
