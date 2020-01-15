<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Petugas_model::insert([
            [
                'nama_petugas' => 'Salsa',
                'alamat' => 'Tubannn',
                'telp' => '086557876778',
                'username' => 'Salsabilaa12',
                'password' => 'salsa123',
                'created_at' => date('Y-m-d H:i:s'), 

            ],
            [
                'nama_petugas' => 'Puput',
                'alamat' => 'Komplek Amarta',
                'telp' => '089765446788',
                'username' => 'puputttt',
                'password' => 'akudankamu',
                'created_at' => date('Y-m-d H:i:s'), 
            ],
            [
                'nama_petugas' => 'Putri Puspita Sari',
                'alamat' => 'Jalan Tangkilisan blok A ',
                'telp' => '085224345678',
                'username' => 'putri.puspita',
                'password' => 'putri1234',
                'created_at' => date('Y-m-d H:i:s'), 
            ],
            [
                'nama_petugas' => 'Nafarras',
                'alamat' => 'Magetan',
                'telp' => '089667778888',
                'username' => 'farrassz',
                'password' => 'faras123',
                'created_at' => date('Y-m-d H:i:s'), 
            ],
            [
                'nama_petugas' => 'Salsabila Gemintang',
                'alamat' => 'Sawojajarr',
                'telp' => '0877769977899',
                'username' => 'salsaaaz',
                'password' => 'salsas1223',
                'created_at' => date('Y-m-d H:i:s'), 
            ]
        ]);
    }
}
