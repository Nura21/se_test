<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grades = Grade::all();

        foreach($grades ?? [] as $key => $item){
            Student::create([
                'name' => fake()->name(),
                'grade_id' => $item['id'],
                'address' => 'address '.$key,
            ]);
        }
    }
}
