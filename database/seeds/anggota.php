<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota_model::insert([
            [
                'nama_anggota' => 'Puput',
                'alamat' => 'Malang',
                'telp' => '085345678909',
                'created_at' => date('Y-m-d H:i:s'),

            ],
            [
                'nama_anggota' => 'Putri',
                'alamat' => 'Jogja',
                'telp' => '0897654356777',
                'created_at' => date('Y-m-d H:i:s'), 
            ],
            [
                'nama_anggota' => 'Puspita',
                'alamat' => 'Surabaya',
                'telp' => '082122345567',
                'created_at' => date('Y-m-d H:i:s'), 
            ],
            [
                'nama_anggota' => 'Putri Puspita',
                'alamat' => 'Abd Saleh',
                'telp' => '12345678',
                'created_at' => date('Y-m-d H:i:s'), 
            ],
            [
                'nama_anggota' => 'Salsabila',
                'alamat' => 'Tuban',
                'telp' => '098765432',
                'created_at' => date('Y-m-d H:i:s'), 
            ]
        ]);
    }
}
