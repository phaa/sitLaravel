<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CredenciamentoController extends Controller
{

    public function index()
    {
        return view('credenciamento');
    }

    public function activation(Request $request)
    {

        $user = User::findOrFail($request->user_id);

        if($user->active == 1){
            $user->active = 0;
        } else {
            $user->active = 1;
        }

        return response()->json([
          'data' => [
            'success' => $user->save(),
          ]
        ]);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
