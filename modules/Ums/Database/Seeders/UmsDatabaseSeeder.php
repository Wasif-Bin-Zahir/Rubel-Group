<?php

namespace Modules\Ums\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;

// Models
use Modules\Ums\Entities\AcademicSession;
use Modules\Ums\Entities\Batch;
use Modules\Ums\Entities\User;
use Modules\Ums\Entities\Role;
use Modules\Ums\Entities\Permission;

class UmsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // seed roles
        $this->seedRoles();

        // seed permissions
        $this->seedPermissions();

        // seed users
        $this->seedUsers();

        // seed user profiles
        $this->seedUserProfiles();

        // seed batches
        $this->seedBatches();

        // seed sessions
        $this->seedSessions();

        //[FACTORY_REGISTER]

    }

    private function seedRoles()
    {
        $data = json_decode(File::get(resource_path('seed/ums/role.json')), true);
        foreach ($data as $datum) {
            Role::create($datum);
        }
    }

    private function seedPermissions()
    {
        $data = json_decode(File::get(resource_path('seed/ums/permission.json')), true);
        foreach ($data as $datum) {
            $roles = $datum['roles'];
            unset($datum['roles']);
            $permission = Permission::create($datum);
            $permission->assignRole($roles);
        }
    }

    private function seedBatches()
    {
        $data = json_decode(File::get(resource_path('seed/ums/batch.json')), true);
        foreach ($data as $datum) {
            Batch::create($datum);
        }
    }

    private function seedSessions()
    {
        $year = 2000;
        for($i = 0; $i < 30; $i++) {
            AcademicSession::create([
                'name' => ($year + $i) . "-" . ($year + $i + 1),
                'code' => ($year + $i) . "-" . substr(($year + $i + 1), 2, 2)
            ]);
        }
    }

    private function seedUsers()
    {
        // seed super admin
        $users = factory(\Modules\Ums\Entities\User::class, 1)->create([
            'username' => 'superadmin',
            'email' => 'superadmin@example.com',
        ]);
        $users->each(function ($user) {
            $user->assignRole(['Super Admin']);
        });

        // seed admin
        $users = factory(\Modules\Ums\Entities\User::class, 1)->create([
            'username' => 'admin',
            'email' => 'admin@example.com',
        ]);
        $users->each(function ($user) {
            $user->assignRole(['Admin']);
        });

        // seed editor
        $users = factory(\Modules\Ums\Entities\User::class, 1)->create([
            'username' => 'editor',
            'email' => 'editor@example.com',
        ]);
        $users->each(function ($user) {
            $user->assignRole(['Editor']);
        });

        // seed user
        $users = factory(\Modules\Ums\Entities\User::class, 1)->create([
            'username' => 'user',
            'email' => 'user@example.com',
        ]);
        $users->each(function ($user) {
            $user->assignRole(['User']);
        });
        foreach (range(1, 5) as $item) {
            $users = factory(\Modules\Ums\Entities\User::class, 1)->create([
                'username' => 'user' . $item,
                'email' => 'user' . $item . '@example.com',
            ]);
            $users->each(function ($user) {
                $user->assignRole(['User']);
            });
        }
    }

    private function seedUserProfiles()
    {
        $users = User::all();
        foreach ($users as $user) {
            factory(\Modules\Ums\Entities\UserPersonalInfo::class, 1)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
