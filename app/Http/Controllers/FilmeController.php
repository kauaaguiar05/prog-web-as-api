<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FilmeController extends Controller
{
    public function index()
    {
        $customers = Filme::all();
        return response()->json([
            'status' => true,
            'message' => 'Customers retrieved successfully',
            'data' => $customers
        ], 200);
    }

    public function show($id)
    {
        $customer = Filme::findOrFail($id);
        return response()->json([
            'status' => true,
            'message' => 'Customer found successfully',
            'data' => $customer
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|string',
            'ano' => 'required|integer',
            'genero' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $customer = Filme::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Customer created successfully',
            'data' => $customer
        ], 201);
    }

    public function update(Request $request, $id)

        {
            $Filme = Filme::findOrFail($id);
            $request->validate([
                'titulo' => 'required',
                'ano' => 'required',
                'genero' => 'required',
            ]);

                $Filme->titulo = $request->titulo;
                $Filme->ano = $request->ano;
                $Filme->genero = $request->genero;

            $Filme->save();
        
            return redirect('Diretor')->with('success', 'Diretor updated successfully.');
        }

    public function destroy($id)
    {
        $customer = Filme::findOrFail($id);
        $customer->delete();
        
        return response()->json([
            'status' => true,
            'message' => 'Customer deleted successfully'
        ], 204);
    }
}
