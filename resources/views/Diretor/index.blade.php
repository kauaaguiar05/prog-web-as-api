@section('content')
    <div class="flex flex-wrap justify-center gap-4 mt-10">
        @foreach($Diretor as $entity)
            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center pb-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Bonnie image" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{$entity->nome}}</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{$entity->descricao}}</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{$entity->ano_de_nascimento}}</span>
                    <div class="flex mt-4 md:mt-6 gap-2">
                        <a href="{{ url('filme/'.$entity->id.'/edit') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                        <form action="{{ url('filme/'.$entity->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">Remove</button>
                        </form>a
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@foreach($products as $product) 
    <div>
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->description }}</p>
        <a href="{{ url('products/'.$product->id.'/edit') }}">Edit</a>
        <form action="{{ url('products/'.$product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach