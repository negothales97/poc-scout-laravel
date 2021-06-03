<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex mb-4">
                        <div class="w-full h-12">
                            <a href="{{url('post/create')}}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Adicionar
                            </a>
                        </div>
                    </div>
                    <div class="flex mb-6">
                        <div class="w-full h-12">
                            <form>
                                <div class="flex items-center border-b border-teal-500 py-2">
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                                        type="search" placeholder="Pesquisar" name="search"
                                        value="{{request('search')}}">
                                    <button
                                        class="ml-1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                        type="submit">
                                        Pesquisar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <table class="table-fixed rounded-md border-collapse border border-gray-800 w-full">
                        <thead>
                            <tr>
                                <th class="border border-gray-600 p-3 ">#</th>
                                <th class="border border-gray-600 p-3 ">SKU</th>
                                <th class="border border-gray-600 ">Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                            <tr>
                                <td class="border border-gray-600 p-3">{{$post->id}}</td>
                                <td class="border border-gray-600 p-3">{{$post->sku}}</td>
                                <td class="border border-gray-600 p-3">{{$post->name}}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="border border-gray-600 p-3 text-center">Nenhum dado
                                    cadastrado
                                </td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>