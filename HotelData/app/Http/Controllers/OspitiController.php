<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ospite;

class OspitiController extends Controller
{
  public function home() {

    $ospiti = Ospite::all();
    // dd($ospiti);
    return view('pages.home', compact('ospiti'));
  }

  public function ospite($id) {
    $ospite = Ospite::findorFail($id);
    // dd($ospite);

    return view('pages.ospite', compact('ospite'));
  }

  public function create() {

    return view ('pages.create');
  }

  public function newOspite(Request $request) {


    $validate = $request -> validate ([
      'name' => 'min:2|max:50',
      'lastname' => 'min:2|max:50',
      'date_of_birth' => 'nullable|date',
      'document_type' => 'nullable|max:25',
      'document_number' => 'nullable|max:20',
    ]);

    $ospite = Ospite::create($validate);
    return redirect() -> route('ospite', $ospite -> id);
  }
}
