<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobPosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job = new \App\Models\JobsPoster();
        $job->user_id = 1;
        $job->job_title = 'Web Developer';
        $job->company_location = 'Phnom Penh';
        $job->job_type = 'Part-Time';
        $job->company_name = 'Atech Group';
        $job->contact_name = 'Ulvy Romy';
        $job->contact_email = 'ulvy@gmail.com';
        $job->company_address = 'In Phnom Penh, In the center of the cit.';
        $job->job_description = 'We need your good at laravel and vue, c# and agular.';
        $job->job_requirement = 'We need your CV, CL and good at team work.';
        $job->save();

        $job = new \App\Models\JobsPoster();
        $job->user_id = 1;
        $job->job_title = 'Web Designer';
        $job->company_location = 'Pursat Province';
        $job->job_type = 'Full-time';
        $job->company_name = 'Techbodia';
        $job->contact_name = 'Phandy Ph';
        $job->contact_email = 'phandy@gmail.com';
        $job->company_address = 'In Phnom Penh, In the center of the cit.';
        $job->job_description = 'We need your good at laravel and vue, c# and agular.';
        $job->job_requirement = 'We need your CV, CL and good at team work.';
        $job->save();

        $job = new \App\Models\JobsPoster();
        $job->user_id = 1;
        $job->job_title = 'Sale Product.';
        $job->company_location = 'Battembong';
        $job->job_type = 'Training';
        $job->company_name = 'Cathay';
        $job->contact_name = 'Sokchan';
        $job->contact_email = 'sokchan@gmail.com';
        $job->company_address = 'In Phnom Penh, In the center of the cit.';
        $job->job_description = 'We need your good at laravel and vue, c# and agular.';
        $job->job_requirement = 'We need your CV, CL and good at team work.';
        $job->save();
    }
}
