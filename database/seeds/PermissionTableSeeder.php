<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'name' => 'role-list',
                'display_name' => 'Exibição Listagem de Função',
                'description' => 'Ver apenas Listagem de Função'
            ],
            [
                'name' => 'role-create',
                'display_name' => 'Criar Função',
                'description' => 'Criar Nova Função'
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Editar Função',
                'description' => 'Editar Função'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Deletar Função',
                'description' => 'Deletar Função'
            ],
            [
                'name' => 'user-list',
                'display_name' => 'Exibir Listagem de Usuario',
                'description' => 'Ver Apenas Listagem do Item'
            ],
            [
                'name' => 'user-create',
                'display_name' => 'Criar Usuario',
                'description' => 'Criar Novo Usuario'
            ],
            [
                'name' => 'user-edit',
                'display_name' => 'Editar Usuario',
                'description' => 'Editar Usuario'
            ],
            [
                'name' => 'user-delete',
                'display_name' => 'Deletar Usuario',
                'description' => 'Deletar Usuario'
            ],
            [
                'name' => 'item-list',
                'display_name' => 'Exibir Listagem de Itens',
                'description' => 'Ver Apenas Listagem do Item'
            ],
            [
                'name' => 'item-create',
                'display_name' => 'Criar Itens',
                'description' => 'Criar Novo Itens'
            ],
            [
                'name' => 'item-edit',
                'display_name' => 'Editar Itens',
                'description' => 'Editar Itens'
            ],
            [
                'name' => 'item-delete',
                'display_name' => 'Deletar Itens',
                'description' => 'Deletar Itens'
            ]
        ];

        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}
