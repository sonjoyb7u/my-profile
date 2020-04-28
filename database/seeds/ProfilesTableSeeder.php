<?php

use Illuminate\Database\Seeder;
use App\Models\Profile;


class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile = [
            'first_name' => 'Sonjoy',
            'middle_name' => 'Barua',
            'last_name' => 'John',
            'age' => 32,
            'gender' => 'Male',
            'phone' => '+880 1915 464958',
            'address' => '799-1 No Lane, Dhampara, Wasa, Chittagong, Bangladesh',
            'designation' => 'Web Developer & IT System Supporter',
            'Bio' => '<p>I\'m a Mid Level Web Designer And Web Developer With 2 Year\'s Experience</p>'.
'<p>I Successfully Done Design and Development Wide Project Like E-Commerce, Blog Site, Business Site, Student Manage System, Library Management System, Portfolio, And Many More. The Work I Done Is In High Quality, Fully Responsive And Tested On Wide Range Devices. I Take Great Care About My Each And Every Project That I Done</p>'.
'<p>I Provide A Perfect Website With Client Requirements. I Am Very Compatible And Familiar With HTML, CSS, JAVASCRIPT, JQUERY, CORE PHP With MVC Pattern, BOOTSTRAP-3 & 4, & LARAVEL Framework(PHP)</p>',

        ];

        Profile::create($profile);


    }
}
