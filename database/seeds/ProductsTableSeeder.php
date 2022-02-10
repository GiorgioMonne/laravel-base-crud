<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config("comics");

        foreach($products as $product){

            $newProduct = new Product();

            $newProduct->title = $product["title"];
            $newProduct->type = $product["type"];
            $newProduct->series = $product["series"];
            $newProduct->sale_date = $product["sale_date"];;
            $newProduct->description = $product["description"];
            $newProduct->price = $product["price"];
            $newProduct->image = $product["thumb"];

            $newProduct->save();
        }
    }
}
