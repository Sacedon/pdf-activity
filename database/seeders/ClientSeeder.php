<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cl = [
            [
                'last_name' => 'Sacedon',
                'first_name' => 'Christian James',
                'middle_name' => 'Rulona',
                'address' => 'Purok 3. Tinangnan, Tubigon, Bohol',
                'birth_date' => '2001-10-18',
                'phone_number' => '09486306766',
                'email' => 'christiansacedon3@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Jack',
                'first_name' => 'Ripper',
                'middle_name' => 'Mercha',
                'address' => ' Clover, Japan',
                'birth_date' => '1967-11-03',
                'phone_number' => '09307665033',
                'email' => 'christiansacedon5@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Villarmia',
                'first_name' => 'Ace Joy',
                'middle_name' => 'Mejares',
                'address' => 'Bastasan, Bohol',
                'birth_date' => '1998-9-17',
                'phone_number' => '09465789094',
                'email' => 'acejoygwapo123@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name'         => 'Batausa',
                'first_name'        => 'Nathaniel',
                'middle_name'       => 'Roba',
                'address'           => '#166 Cancunay Tinangnan, Tubigon, Bohol',
                'birth_date'        => '2002-11-16',
                'phone_number'      => '09201295969',
                'email'             => 'nathanielbatausafgo@gmail.com',
                'initial_deposit'   => 10000
            ],
            [
                'last_name'         => 'Mejias',
                'first_name'        => 'Francis Michael',
                'middle_name'       => 'Cabrera',
                'address'           => 'Inabanga, Bohol',
                'birth_date'        => '2002-07-08',
                'phone_number'      => '09445647784',
                'email'             => 'mejiasfranzsaijem@gmail.com',
                'initial_deposit'   => 10000
            ],
            [
                'last_name'         => 'Alboroto',
                'first_name'        => 'Trixie Mae',
                'middle_name'       => 'Lauron',
                'address'           => 'Sagbayan, Bohol',
                'birth_date'        => '2001-09-05',
                'phone_number'      => '09445647784',
                'email'             => 'trixiealboroto06@gmail.com',
                'initial_deposit'   => 10000
            ],
            [
                'last_name' => 'Mueblas',
                'first_name' => 'Mark Lister',
                'middle_name' => 'Tero',
                'address' => 'Purok 3. Tinangnan, Tubigon, Bohol',
                'birth_date' => '2001-11-13',
                'phone_number' => '09685326466',
                'email' => 'marklistermueblas3@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Wolfrod',
                'first_name' => 'Shin',
                'middle_name' => 'Rulona',
                'address' => 'Purok 3. Tinangnan, Tubigon, Japan',
                'birth_date' => '2001-10-18',
                'phone_number' => '09636344766',
                'email' => 'sacedonchristian71@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name'         => 'Pongase',
                'first_name'        => 'John Ivan',
                'middle_name'       => 'Sumipo',
                'address'           => 'Cabulijan, Tubigon, Bohol',
                'birth_date'        => '2000-03-02',
                'phone_number'      => '09546574582',
                'email'             => 'sumipo231@gmail.com',
                'initial_deposit'   => 10000
            ],
            [
                'last_name'         => 'Flores',
                'first_name'        => 'Rosalino',
                'middle_name'       => 'Mecha',
                'address'           => 'Bakong, Bohol',
                'birth_date'        => '2001-09-05',
                'phone_number'      => '09463743474',
                'email'             => 'fross0988@gmail.com',
                'initial_deposit'   => 10000
            ],


        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
