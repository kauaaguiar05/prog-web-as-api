<?php

namespace App\Http\Controllers;

use App\Models\Diretor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DiretorController extends Controller
{
        public function index()
        {
            $customers = Diretor::all();
            return response()->json([
                'status' => true,
                'message' => 'Customers retrieved successfully',
                'data' => $customers
            ], 200);
        }
    
        public function show($id)
        {
            $customer = Diretor::findOrFail($id);
            return response()->json([
                'status' => true,
                'message' => 'Customer found successfully',
                'data' => $customer
            ], 200);
        }
    
        public function store(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'nome' => 'required|string',
                'descricao' => 'required|string',
                'ano_de_nascimento' => 'required|integer'
            ]);
    
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation error',
                    'errors' => $validator->errors()
                ], 422);
            }
    
            $customer = Diretor::create($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Customer created successfully',
                'data' => $customer
            ], 201);
        }
    
        public function update(Request $request, $id)

            {
                $Diretor = Diretor::findOrFail($id);
                $request->validate([
                    'nome' => 'required',
                    'descricao' => 'required',
                    'ano_de_nascimento' => 'required',
                ]);

                    $Diretor->name = $request->name;
                    $Diretor->descricao = $request->descricao;
                    $Diretor->ano_de_nascimento = $request->ano_de_nascimento;

                $Diretor->save();
            
                return redirect('Diretor')->with('success', 'Diretor updated successfully.');
            }
    
        public function destroy($id)
        {
            $customer = Diretor::findOrFail($id);
            $customer->delete();
            
            return response()->json([
                'status' => true,
                'message' => 'Customer deleted successfully'
            ], 204);
        }
    }

