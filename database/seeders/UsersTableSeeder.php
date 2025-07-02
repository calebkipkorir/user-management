<?php

namespace Database\Seeders;



use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('users')->truncate();
        
        DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Test name',
                'email' => 'testname@example.com',
                'email_verified_at' => '2025-07-01 05:30:19',
                'password' => '$2y$12$Jzp2/Dv16WrmhtXuD18zDet.Gp0VObr6i9HJIQ5PkQcWCSuRMikx2',
                'remember_token' => 'DLm38w14bW',
                'created_at' => '2025-07-01 05:30:19',
                'updated_at' => '2025-07-01 07:08:17',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Dorris Hand',
                'email' => 'Dorris42@example.net',
                'email_verified_at' => '2025-07-01 05:30:19',
                'password' => '$2y$12$Jzp2/Dv16WrmhtXuD18zDet.Gp0VObr6i9HJIQ5PkQcWCSuRMikx2',
                'remember_token' => 'hakGnvikbd',
                'created_at' => '2025-07-01 05:30:19',
                'updated_at' => '2025-07-01 08:21:41',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Ronaldo Jast PhD',
                'email' => 'rolfson.carmel@example.org',
                'email_verified_at' => '2025-07-01 05:30:19',
                'password' => '$2y$12$Jzp2/Dv16WrmhtXuD18zDet.Gp0VObr6i9HJIQ5PkQcWCSuRMikx2',
                'remember_token' => 'IlDiB8P1mu',
                'created_at' => '2025-07-01 05:30:19',
                'updated_at' => '2025-07-01 05:30:19',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Ms. Beryl Wuckert MD',
                'email' => 'dashawn.klocko@example.net',
                'email_verified_at' => '2025-07-01 05:30:19',
                'password' => '$2y$12$Jzp2/Dv16WrmhtXuD18zDet.Gp0VObr6i9HJIQ5PkQcWCSuRMikx2',
                'remember_token' => 'ZpX9hluWLe',
                'created_at' => '2025-07-01 05:30:19',
                'updated_at' => '2025-07-01 05:30:19',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Ewell Koss',
                'email' => 'marques31@example.com',
                'email_verified_at' => '2025-07-01 05:30:19',
                'password' => '$2y$12$Jzp2/Dv16WrmhtXuD18zDet.Gp0VObr6i9HJIQ5PkQcWCSuRMikx2',
                'remember_token' => 'VgEvYRULkH',
                'created_at' => '2025-07-01 05:30:19',
                'updated_at' => '2025-07-01 11:14:11',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Gerson Waters',
                'email' => 'maggio.manuel@example.com',
                'email_verified_at' => '2025-07-01 05:30:19',
                'password' => '$2y$12$Jzp2/Dv16WrmhtXuD18zDet.Gp0VObr6i9HJIQ5PkQcWCSuRMikx2',
                'remember_token' => 'tLDHFjFL9O',
                'created_at' => '2025-07-01 05:30:19',
                'updated_at' => '2025-07-01 05:30:19',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Keenan Zemlak',
                'email' => 'tamara54@example.net',
                'email_verified_at' => '2025-07-01 05:30:19',
                'password' => '$2y$12$Jzp2/Dv16WrmhtXuD18zDet.Gp0VObr6i9HJIQ5PkQcWCSuRMikx2',
                'remember_token' => 'aq6qctz9Oq',
                'created_at' => '2025-07-01 05:30:19',
                'updated_at' => '2025-07-01 05:30:19',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Destany Barrows',
                'email' => 'brandt38@example.net',
                'email_verified_at' => '2025-07-01 05:30:19',
                'password' => '$2y$12$Jzp2/Dv16WrmhtXuD18zDet.Gp0VObr6i9HJIQ5PkQcWCSuRMikx2',
                'remember_token' => 'sqbXZ4XXLm',
                'created_at' => '2025-07-01 05:30:19',
                'updated_at' => '2025-07-01 05:30:19',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Arlie Kerluke',
                'email' => 'monty.towne@example.com',
                'email_verified_at' => '2025-07-01 05:30:19',
                'password' => '$2y$12$Jzp2/Dv16WrmhtXuD18zDet.Gp0VObr6i9HJIQ5PkQcWCSuRMikx2',
                'remember_token' => 'oA2huDFHKU',
                'created_at' => '2025-07-01 05:30:19',
                'updated_at' => '2025-07-01 05:30:19',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Miss Josiane Donnelly',
                'email' => 'xparker@example.com',
                'email_verified_at' => '2025-07-01 05:30:19',
                'password' => '$2y$12$Jzp2/Dv16WrmhtXuD18zDet.Gp0VObr6i9HJIQ5PkQcWCSuRMikx2',
                'remember_token' => 'yarYLS0Rnj',
                'created_at' => '2025-07-01 05:30:19',
                'updated_at' => '2025-07-01 05:30:19',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Caleb kipkorir',
                'email' => 'kipkorircaleb3@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$H3RC60Jfmpojvu.2Twn2K.u9kHaxQ/QSy5pTjOvC.0kyVlNEdMA8q',
                'remember_token' => 'rPjHkvCdS4Nmc1G3k9u6MFR38JqX9HUAnclOLYgzpp0SG2vn0aRVlOS2CCLY',
                'created_at' => '2025-07-01 05:32:32',
                'updated_at' => '2025-07-01 08:59:08',
            ),
        ));
        
        
    }
}