<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the number of students to create
        $numberOfStudents = 20;

        // Generate and create students
        for ($i = 1; $i <= $numberOfStudents; $i++) {
            $this->createStudent($i);
        }
    }

    /**
     * Create a new student record.
     *
     * @param  int  $index
     * @return void
     */
    private function createStudent($index)
    {
        // Define student details
        $studentData = [
            'name' => 'Student ' . $index,
            'email' => 'student' . $index . '@example.com',
            'password' => bcrypt('password'),
        ];

        // Create the student record
        Student::create($studentData);
    }
}
