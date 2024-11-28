@extends('layouts.base')
    @section('content')
        <form class="max-w-sm mx-auto" action="{{ url('Filme/'.$Filme->id) }}" method="POST">
                @csrf
                @method ('PUT')
                <div class="mb-5">
                    <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo</label>
                    <input type="text" name="titulo" id="titulo" value="{{$Filme->titulo}}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="ano" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ano</label>
                    <input type="number" name="ano" id="ano" value="{{$Filme->ano}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="genero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gênero</label>
                    <input type="text" name="genero"  id="genero" value="{{$Filme->genero}}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <br>
                <button type="submit" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Update</button>
        </form>
    @endsection

<form action="{{ url('Filme/'.$Filme->id) }}" method="POST">
    @csrf
    @method ('PUT')
    <input type="text" name="titulo" placeholder="titulo" value="{{$Filme->titulo}}" required>
    <input type="number" name="ano" placeholder="ano" value="{{$Filme->ano}}" required>
    <input type="text" name="genero" placeholder="genero" value="{{$Filme->genero}}" required>

    <button type="submit">Create</button>
</form>