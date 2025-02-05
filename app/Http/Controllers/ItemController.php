<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\ItemRequest; // Usando um Form Request para validação
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Método index permanece o mesmo, sem alterações necessárias
    public function index()
    {
        $itens = Item::all();
        return view('items.index', compact('itens'));
    }

    public function create()
    {
        return view('items.create');
    }

    // Usando um Form Request para validação
    public function store(ItemRequest $request)
    {
        // A validação é feita automaticamente no ItemRequest
        Item::create($request->validated());

        return redirect()->route('items.index')
            ->with('success', 'Item criado com sucesso.');
    }

    // Usando findOrFail para buscar diretamente o item e gerar erro 404 se não encontrado
    public function show($id)
    {
        $item = Item::findOrFail($id);

        return view('items.show', compact('item'));
    }

    // Usando findOrFail para buscar diretamente o item e gerar erro 404 se não encontrado
    public function edit($id)
    {
        $item = Item::findOrFail($id);

        return view('items.edit', compact('item'));
    }

    // Usando o Form Request para validar os dados
    public function update(ItemRequest $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update($request->validated());

        return redirect()->route('items.index')
            ->with('success', 'Item atualizado com sucesso.');
    }

    // Usando findOrFail para buscar diretamente o item e gerar erro 404 se não encontrado
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('items.index')
            ->with('success', 'Item deletado com sucesso.');
    }
}
