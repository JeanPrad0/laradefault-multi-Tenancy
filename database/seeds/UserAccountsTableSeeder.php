<?php

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class UserAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        //ROLE ADMIN
        $role = new Role();
        $role->name = 'Admin';
        $role->account_id = 1;        
        $role->save();

        //ROLE ADMIN
        $role2 = new Role();
        $role2->name = 'Admin2';
        $role2->account_id = 2;        
        $role2->save();

        //USER
        $permission = new Permission();
        $permission->name = 'module_user';
        $permission->title = 'Acessar menu de usuário';
        $permission->save();
        $permission->role()->attach($role->id);
        $permission->role()->attach($role2->id);
        $permission = new Permission();
        $permission->name = 'module_user.create';
        $permission->title = 'Criar usuário';
        $permission->save();
        $permission->role()->attach($role->id);
        $permission->role()->attach($role2->id);
        $permission = new Permission();
        $permission->name = 'module_user.edit';
        $permission->title = 'Editar usuário';
        $permission->save();
        $permission->role()->attach($role->id);
        $permission->role()->attach($role2->id);
        $permission = new Permission();
        $permission->name = 'module_user.show';
        $permission->title = 'Ver usuário';
        $permission->save();
        $permission->role()->attach($role->id);
        $permission->role()->attach($role2->id);
        $permission = new Permission();
        $permission->name = 'module_user.delete';
        $permission->title = 'Deletar usuário';
        $permission->save();
        $permission->role()->attach($role->id);
        $permission->role()->attach($role2->id);


        //Role
        $permission = new Permission();
        $permission->name = 'module_role';
        $permission->title = 'Acessar menu de papel de acesso';
        $permission->save();
        $permission->role()->attach($role->id);
        $permission->role()->attach($role2->id);
        $permission = new Permission();
        $permission->name = 'module_role.create';
        $permission->title = 'Create papel de acesso';
        $permission->save();
        $permission->role()->attach($role->id);
        $permission->role()->attach($role2->id);
        $permission = new Permission();
        $permission->name = 'module_role.edit';
        $permission->title = 'Editar papel de acesso';
        $permission->save();
        $permission->role()->attach($role->id);
        $permission->role()->attach($role2->id);
        $permission = new Permission();
        $permission->name = 'module_user.show';
        $permission->title = 'Ver papel de acesso';
        $permission->save();
        $permission->role()->attach($role->id);
        $permission->role()->attach($role2->id);             
        $permission = new Permission();
        $permission->name = 'module_role.delete';
        $permission->title = 'Deletar papel de acesso';
        $permission->save();
        $permission->role()->attach($role->id);
        $permission->role()->attach($role2->id);

        //Permission
        $permission = new Permission();
        $permission->name = 'module_permission';
        $permission->title = 'Acessar menu de permissões';
        $permission->save();
        $permission->role()->attach($role->id);
        $permission->role()->attach($role2->id);        
        $permission = new Permission();
        $permission->name = 'module_permission.edit';
        $permission->title = 'Editar permissões';
        $permission->save();
        $permission->role()->attach($role->id);
        $permission->role()->attach($role2->id); 


       
       $user1 = factory(\App\Models\UserAccount::class,1)->create([
            'email' => 'client1@user.com',
            'account_id' => 1
        ]);

       

       $user2 = factory(\App\Models\UserAccount::class,1)->create([
            'email' => 'client2@user.com',
            'account_id' => 2
        ]);


    }
}
