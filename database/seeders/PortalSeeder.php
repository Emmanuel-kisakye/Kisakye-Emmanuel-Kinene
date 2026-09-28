<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Department;
use Illuminate\Database\Seeder;
class PortalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Estates' => [
                'slug' => 'estates',
                'categories' => [
                    'plumbing' => 'Plumbing',
                    'electrical' => 'Electrical',
                    'hvac' => 'Air conditioning',
                    'furniture' => 'Furniture & fittings',
                ],
            ],
            'ICT Support' => [
                'slug' => 'ict',
                'categories' => [
                    'network' => 'Network / Wi-Fi',
                    'projector' => 'Projectors & AV',
                    'accounts' => 'Accounts & access',
                    'hardware' => 'Hardware repair',
                ],
            ],
            'Halls' => [
                'slug' => 'halls',
                'categories' => [
                    'lecture' => 'Lecture hall booking',
                    'lab' => 'Lab reservation',
                    'event' => 'Event space',
                ],
            ],
            'Hostels' => [
                'slug' => 'hostel',
                'categories' => [
                    'room' => 'Room issue',
                    'water' => 'Water & sanitation',
                    'security' => 'Security concern',
                ],
            ],
            'Administration' => [
                'slug' => 'admin',
                'categories' => [
                    'appointment' => 'Appointment',
                    'document' => 'Document request',
                    'other' => 'Other',
                ],
            ],
        ];

        foreach ($data as $name => $departmentData) {
            $department = Department::query()->updateOrCreate(
                ['slug' => $departmentData['slug']],
                ['name' => $name]
            );

            foreach ($departmentData['categories'] as $slug => $categoryName) {
                Category::query()->updateOrCreate(
                    [
                        'department_id' => $department->id,
                        'slug' => $slug,
                    ],
                    ['name' => $categoryName]
                );
            }
        }
    }
}
