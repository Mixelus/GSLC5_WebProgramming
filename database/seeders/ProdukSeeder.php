<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::query() -> insert(
            [
                [
                    "id" => 1,
                    "name" => "Coca Cola",
                    "type" => "drink",
                    "price" => 12000,
                    "image" => "https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/D8LeTajQpFSuUbAsugUq.png"
                ],
                [
                    "id" => 2,
                    "name" => "Milo",
                    "type" => "drink",
                    "price" => 8000,
                    "image" => "https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/qiex9z1po0AbZv5PDIhd.png"
                ],
                [
                    "id" => 3,
                    "name" => "Burger",
                    "type" => "main",
                    "price" => 26000,
                    "image" => "https://nos.jkt-1.neo.id/mcdonalds/foods/August2020/8d2xhfpKHuHnJANcaMZ7.png"
                ],
                [
                    "id" => 4,
                    "name" => "Paket nasi 1",
                    "type" => "food",
                    "price" => 40000,
                    "image" => "https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/QhZI0YBTJ3VLWbAqcdIK.png"
                ],
                [
                    "id" => 5,
                    "name" => "Hashbrown",
                    "type" => "side",
                    "price" => 15000,
                    "image" => "https://nos.jkt-1.neo.id/mcdonalds/foods/August2019/H5uo107Z3k8lUlhFKsM5.png"
                ],
                [
                    "id" => 6,
                    "name" => "Ice Cream",
                    "type" => "side",
                    "price" => 12000,
                    "image" => "https://nos.jkt-1.neo.id/mcdonalds/foods/August2019/eO8BGkwAqrXH7y0MYJ3K.png"
                ]
            ]
        );
    }
}
