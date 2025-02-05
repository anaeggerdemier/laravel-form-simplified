<?php

namespace App\Models;

class Item
{
    private static $itens = [
        ['id' => 1, 'nome' => 'Item 1', 'descricao' => 'Descrição do Item 1'],
        ['id' => 2, 'nome' => 'Item 2', 'descricao' => 'Descrição do Item 2'],
        ['id' => 3, 'nome' => 'Item 3', 'descricao' => 'Descrição do Item 3'],
    ];

    public static function all()
    {
        return self::$itens;
    }

    public static function find($id)
    {
        foreach (self::$itens as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }
        return null;
    }

    public static function create($data)
    {
        $newItem = [
            'id' => count(self::$itens) + 1,
            'nome' => $data['nome'],
            'descricao' => $data['descricao'],
        ];

        self::$itens[] = $newItem;

        return $newItem;
    }

    public static function update($id, $data)
    {
        foreach (self::$itens as &$item) {
            if ($item['id'] == $id) {
                $item['nome'] = $data['nome'];
                $item['descricao'] = $data['descricao'];
                return $item;
            }
        }
        return null;
    }

    public static function delete($id)
    {
        foreach (self::$itens as $key => $item) {
            if ($item['id'] == $id) {
                unset(self::$itens[$key]);
                self::$itens = array_values(self::$itens);
                return true;
            }
        }
        return false;
    }
}