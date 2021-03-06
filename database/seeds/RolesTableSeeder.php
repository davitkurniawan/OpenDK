<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'super-admin',
                'name' => 'Super Administrator',
                'permissions' => '{"admin":true}',
                'created_at' => '2018-05-11 04:30:16',
                'updated_at' => '2018-05-11 04:30:16',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'admin-desa',
                'name' => 'Admin Desa',
                'permissions' => '{"data-penduduk":true,"data-programbantuan":true,"data-anggarandesa":true}',
                'created_at' => '2018-05-31 09:42:14',
                'updated_at' => '2018-06-16 00:17:48',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'admin-kecamatan',
                'name' => 'Admin Kecamatan',
                'permissions' => '{"data-kecamatan":true,"data-anggaranrealisasi":true,"data-layanan":true}',
                'created_at' => '2018-05-31 09:42:29',
                'updated_at' => '2018-06-16 00:17:20',
            ),
            3 => 
            array (
                'id' => 5,
                'slug' => 'admin-puskesmas',
                'name' => 'Admin Puskesmas',
                'permissions' => '{"data-kesehatan":true}',
                'created_at' => '2018-06-15 23:55:21',
                'updated_at' => '2018-06-15 23:58:31',
            ),
            4 => 
            array (
                'id' => 6,
                'slug' => 'admin-pendidikan',
                'name' => 'Admin Pendidikan',
                'permissions' => '{"data-pendidikan":true}',
                'created_at' => '2018-06-15 23:55:44',
                'updated_at' => '2018-06-16 00:03:38',
            ),
            5 => 
            array (
                'id' => 7,
                'slug' => 'admin-komplain',
                'name' => 'Admin Komplain',
                'permissions' => '{"adminsikoma":true}',
                'created_at' => '2018-06-16 00:22:15',
                'updated_at' => '2018-06-16 00:22:15',
            ),
            6 => 
            array (
                'id' => 8,
                'slug' => 'administrator-website',
                'name' => 'Administrator Website',
                'permissions' => '{"data":true,"data-kecamatan":true,"data-penduduk":true,"data-kesehatan":true,"data-pendidikan":true,"data-programbantuan":true,"data-anggaranrealisasi":true,"data-anggarandesa":true,"data-layanan":true,"adminsikoma":true,"setting":true,"setting-kategorikomplain":true,"setting-tiperegulasi":true,"setting-jenispenyakit":true,"setting-coa":true,"setting-gruppengguna":true,"setting-pengguna":true}',
                'created_at' => '2018-06-16 00:36:43',
                'updated_at' => '2018-06-16 00:52:26',
            ),
        ));
        
        
    }
}