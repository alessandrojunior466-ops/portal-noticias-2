<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Categoria
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between items-center">
                    <h1 class="text-[18px]">Lista de categoria</h1>
                    <a href="{{ route('admin.categorias.cadastrar') }}"
                        class="bg-slate-950 text-white px-4 py-2 rounded ">+ Adicionar categoria</a>
                </div>

                <div class="p-6 overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>nome</th>
                                <th class="hidden sm:table-cell">descricao</th>
                                <th class="hidden sm:table-cell">cor</th>
                                <th class="text-center">AÇÃO</th>


                            </tr>

                        </thead>
                        <tbody>
                            @forelse ($categorias as $c)
                                <tr>
                                    <td>{{ $c->id }}</td>
                                    <td>{{ $c->nome }}</td>
                                    <td>{{ $c->descricao }}</td>
                                    <td>{{ $c->cor }}</td>

                                    <td class="text-center flex gap-1">
                                        <a href="{{ route('admin.categorias.editar', $c->id) }}"
                                            class="btn-editar">Editar</a>

                                        <form action="{{ route('admin.categorias.excluir', $c->id) }}" method="post">
                                            @method('delete')
                                            @csrf

                                            <button type="submit" class="btn-excluir"
                                                onclick="return confirm('Deseja Excluir o registro?')">Excluir </button>

                                        </form>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center text-slate-400" colspan="6">
                                        <p>Nenhuma notícia cadastrada</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-center p-6 pt-0">
                    //paginação
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
