<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\mapel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(30)->create();

        mapel::create([
            'name' => 'Matematika',
            'teacher_id' => 1,
            'room_id' => 101,
            'max_students' => 30,
        ]);

        mapel::create([
            'name' => 'Bahasa Indonesia',
            'teacher_id' => 2,
            'room_id' => 102,
            'max_students' => 2,
        ]);

        mapel::create([
            'name' => 'Bahasa Inggris',
            'teacher_id' => 3,
            'room_id' => 103,
            'max_students' => 30,
        ]);

        mapel::create([
            'name' => 'IPA',
            'teacher_id' => 4,
            'room_id' => 201,
            'max_students' => 28,
        ]);

        mapel::create([
            'name' => 'IPS',
            'teacher_id' => 5,
            'room_id' => 202,
            'max_students' => 28,
        ]);

        mapel::create([
            'name' => 'Pendidikan Agama',
            'teacher_id' => 6,
            'room_id' => 203,
            'max_students' => 30,
        ]);

        mapel::create([
            'name' => 'Seni Budaya',
            'teacher_id' => 7,
            'room_id' => 301,
            'max_students' => 25,
        ]);

        mapel::create([
            'name' => 'Pendidikan Jasmani',
            'teacher_id' => 8,
            'room_id' => 'GYM',
            'max_students' => 35,
        ]);

        mapel::create([
            'name' => 'Informatika',
            'teacher_id' => 9,
            'room_id' => 'LAB1',
            'max_students' => 25,
        ]);

        mapel::create([
            'name' => 'Kewarganegaraan',
            'teacher_id' => 10,
            'room_id' => 204,
            'max_students' => 30,
        ]);
    }
}
