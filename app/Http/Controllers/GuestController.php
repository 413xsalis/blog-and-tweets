<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Entry;
class GuestController extends Controller
{
    public function index()
    {
        // dd('GuestController');
        // $entries = Entry::paginate(perPage: 10);
        $entries = Entry::with('user')->paginate(10);
        return view('welcome', compact('entries'));
    }

    public function show(Entry $entry){
        return view('entries.show', compact('entry'));
    }
}
