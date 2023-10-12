<?php

namespace Database\Seeders;

use App\Enums\GradeCodeEnum;
use App\Enums\GradeEnum;
use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grades = [
            GradeEnum::FIRST_GRADE,
            GradeEnum::SECOND_GRADE,
            GradeEnum::THIRD_GRADE,
        ];

        $gradeCodes = [
            GradeCodeEnum::A_GRADE,
            GradeCodeEnum::B_GRADE,
            GradeCodeEnum::C_GRADE,
        ];

        foreach($grades ?? [] as $key => $item){
            Grade::create([
                'code' => $gradeCodes[$key],
                'name' => $item,
            ]);
        }
    }
}
