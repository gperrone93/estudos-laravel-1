<x-layout title="Nova Serie">
    <form action="/series/salvar" method="post">
        <div class="mb-3">
            @csrf
            <label class="form-label">Nome: </label>
            <input class="form-control" type="text" id="nome" name="nome">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>

    </form>
</x-layout>
