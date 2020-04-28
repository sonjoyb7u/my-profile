<?php

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [

            [
                'skill_name' => 'PSD MOCKUP',
                'skill_percent' => 70,
                'skill_color_code' => 'color_code_1',
            ],
            [
                'skill_name' => 'UI/UX MARKUP',
                'skill_percent' => 60,
                'skill_color_code' => 'color_code_2',
            ],
            [
                'skill_name' => 'WEB DEVELOPMENT',
                'skill_percent' => 80,
                'skill_color_code' => 'color_code_3',
            ],
            [
                'skill_name' => 'IT SYSTEM MANAGEMENT',
                'skill_percent' => 60,
                'skill_color_code' => 'color_code_4',
            ],

        ];

        foreach($skills as $key => $skill) {
            Skill::create($skill);
        }
    }
}
