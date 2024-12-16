<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Division;
use App\Models\Department;
use App\Models\Team;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // 1. factory 사용
        // division 생성
        // $divisions = Division::create([
        //     'name' => '서비스 개발 본부'
        // ]);
        
        // $divisions = Division::create([
        //     'name' => '기술개발연구소'
        // ]);

        // foreach ($divisions as $division) {
        //     // 각 division 마다 2개의 department 생성
        //     $departments = Department::factory(2)->create([
        //         'division_id' => $division->id,
        //     ]);

        //     foreach ($departments as $department) {
        //         // 각 department 마다 2개의 team 생성
        //         $teams = Team::factory(2)->create([
        //             'department_id' => $department->id,
        //         ]);

        //         foreach ($teams as $team) {
        //             // 각 team 마다 2명의 user 생성
        //             User::factory(2)->create([
        //                 'team_id' => $team->id,
        //             ]);
        //         }
        //     }
        // }

        //2. 직접 data 추가
        $divisions = [
            [
                'name' => '서비스개발본부',
                'departments' => [
                    [
                        'name' => '개발실',
                        'teams' => [
                            ['name' => '플랫폼 서비스 개발팀', 'users' => ['정지원', '이서진']],
                            ['name' => '모바일 서비스 개발팀', 'users' => ['장상훈', '조봉희']],
                        ],
                    ],
                    [
                        'name' => '디자인실',
                        'teams' => [
                            ['name' => 'UX/UI 1팀', 'users' => ['정연경', '이윤지']],
                            ['name' => 'UX/UI 2팀', 'users' => ['신응수', '조은주']],
                        ],
                    ],
                ],
            ],
            [
                'name' => '기술개발연구소',
                'departments' => [
                    [
                        'name' => '선행제어',
                        'teams' => [
                            ['name' => '선행제어1', 'users' => ['장주환', '임채준']],
                            ['name' => '선행제어2', 'users' => ['남지수', '남수지']],
                        ],
                    ],
                    [
                        'name' => '제조경쟁력 강화',
                        'teams' => [
                            ['name' => '제조경쟁력강화1', 'users' => ['김성훈', '채지연']],
                            ['name' => '제조경쟁력강화2', 'users' => ['서준형', '박준형']],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($divisions as $divisionData) {
            $division = Division::create(['name' => $divisionData['name']]);
            foreach ($divisionData['departments'] as $departmentData) {
                $department = Department::create([
                    'name' => $departmentData['name'],
                    'division_id' => $division->id,
                ]);
                foreach ($departmentData['teams'] as $teamData) {
                    $team = Team::create([
                        'name' => $teamData['name'],
                        'department_id' => $department->id,
                    ]);
                    foreach ($teamData['users'] as $userName) {
                        User::create([
                            'name' => $userName,
                            'team_id' => $team->id,
                        ]);
                    }
                }
            }
        }
    }
}
