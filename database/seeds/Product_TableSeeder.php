<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;
class Product_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $nuovo_progetto = new Product();
        // // istanza, oggetto del singolo prodotto
        // $nuovo_progetto->name= 'pippo';
        // $nuovo_progetto->description= 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        // $nuovo_progetto->price= 15.89;
        // $nuovo_progetto->save();

        // $dati_protoddo=config('prodottiRaccolta');
        // foreach ($dati_protoddo as  $dati) {
        //     $nuovo_progetto = new Product();
        //     // istanza, oggetto del singolo prodotto
        //     $nuovo_progetto->name= $dati['nome'];
        //     $nuovo_progetto->description= $dati['descrizione'];
        //     $nuovo_progetto->price= $dati['prezzo'];
        //     $nuovo_progetto->save();
        // }
        for ($i=0; $i < 10 ; $i++) {
                $nuovo_progetto = new Product();
                // istanza, oggetto del singolo prodotto
                $nuovo_progetto->name= $faker->sentence(4);
                $nuovo_progetto->description= $faker->text(100);
                $nuovo_progetto->price= $faker->randomFloat(2,0,100);
                $nuovo_progetto->save();

        }
    }
}
