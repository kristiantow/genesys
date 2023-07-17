<?php

use Illuminate\Database\Seeder;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array("nama"=>"baju","harga"=>"70000","stok"=>"5"),
            array("nama"=>"celana","harga"=>"120000","stok"=>"5")
        );

        foreach ($data as $raw_data) {
            DB::table('inventory')->insert($raw_data);
        }

    }
}
