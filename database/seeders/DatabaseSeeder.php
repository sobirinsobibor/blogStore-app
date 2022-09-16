<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PostModel;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "name" => "Imam Wahyu Sobirin",
            "username" => "Wahyu-sobirin",
            "email" => "wsobirin2@gmail.com",
            "password" => bcrypt("12345")
        ]);

        // User::create([
        //     "name" => "Doddy Sanjaya",
        //     "email" => "sanjaya14@gmail.com",
        //     "password" => bcrypt("54321")
        // ]);

        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming"
        ]);

        category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        category::create([
            "name" => "Web Design",
            "slug" => "web-design"
        ]);

        PostModel::factory(20)-> create();
        // PostModel::create([
        //     "title" => "Judul Pertama",
        //     "slug" => "judul-pertama",
        //     "excerpt" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac metus viverra, scelerisque urna a, efficitur est. Curabitur porttitor fermentum purus vel cursus. Nulla facilisi. Nullam eget vulputate dui.",
        //     "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac metus viverra, scelerisque urna a, efficitur est. Curabitur porttitor fermentum purus vel cursus. Nulla facilisi. Nullam eget vulputate dui. Aenean lobortis hendrerit felis, vehicula iaculis ligula hendrerit non. Nullam ornare est augue, in rhoncus tortor dapibus pretium. Mauris felis mi, imperdiet non leo consectetur, mollis sollicitudin ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent viverra sed tortor at tempor. Vestibulum est enim, tincidunt in tristique vel, finibus eu est. Suspendisse vel mi sed nulla mollis imperdiet quis id ex. Praesent lectus nisi, faucibus ac nibh vel, finibus facilisis leo. Vestibulum accumsan risus non neque rutrum bibendum. Vestibulum vestibulum varius magna in fringilla. Sed id est eget urna placerat fermentum ut varius tortor. Curabitur pulvinar, ante a commodo luctus, purus velit consectetur nisl, quis fringilla neque eros lacinia quam. Nullam mollis",
        //     "category_id" => 1,
        //     "user_id" => 1

        // ]);

        // PostModel::create([
        //     "title" => "Judul Kedua",
        //     "slug" => "judul-kedua",
        //     "excerpt" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac metus viverra, scelerisque urna a, efficitur est. Curabitur porttitor fermentum purus vel cursus. Nulla facilisi. Nullam eget vulputate dui.",
        //     "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac metus viverra, scelerisque urna a, efficitur est. Curabitur porttitor fermentum purus vel cursus. Nulla facilisi. Nullam eget vulputate dui. Aenean lobortis hendrerit felis, vehicula iaculis ligula hendrerit non. Nullam ornare est augue, in rhoncus tortor dapibus pretium. Mauris felis mi, imperdiet non leo consectetur, mollis sollicitudin ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent viverra sed tortor at tempor. Vestibulum est enim, tincidunt in tristique vel, finibus eu est. Suspendisse vel mi sed nulla mollis imperdiet quis id ex. Praesent lectus nisi, faucibus ac nibh vel, finibus facilisis leo. Vestibulum accumsan risus non neque rutrum bibendum. Vestibulum vestibulum varius magna in fringilla. Sed id est eget urna placerat fermentum ut varius tortor. Curabitur pulvinar, ante a commodo luctus, purus velit consectetur nisl, quis fringilla neque eros lacinia quam. Nullam mollis",
        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);

        // PostModel::create([
        //     "title" => "Judul Ketiga",
        //     "slug" => "judul-ketiga",
        //     "excerpt" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac metus viverra, scelerisque urna a, efficitur est. Curabitur porttitor fermentum purus vel cursus. Nulla facilisi. Nullam eget vulputate dui.",
        //     "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac metus viverra, scelerisque urna a, efficitur est. Curabitur porttitor fermentum purus vel cursus. Nulla facilisi. Nullam eget vulputate dui. Aenean lobortis hendrerit felis, vehicula iaculis ligula hendrerit non. Nullam ornare est augue, in rhoncus tortor dapibus pretium. Mauris felis mi, imperdiet non leo consectetur, mollis sollicitudin ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent viverra sed tortor at tempor. Vestibulum est enim, tincidunt in tristique vel, finibus eu est. Suspendisse vel mi sed nulla mollis imperdiet quis id ex. Praesent lectus nisi, faucibus ac nibh vel, finibus facilisis leo. Vestibulum accumsan risus non neque rutrum bibendum. Vestibulum vestibulum varius magna in fringilla. Sed id est eget urna placerat fermentum ut varius tortor. Curabitur pulvinar, ante a commodo luctus, purus velit consectetur nisl, quis fringilla neque eros lacinia quam. Nullam mollis",
        //     "category_id" => 2,
        //     "user_id" => 1

        // ]);

        // PostModel::create([
        //     "title" => "Judul Keempat",
        //     "slug" => "judul-keempat",
        //     "excerpt" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac metus viverra, scelerisque urna a, efficitur est. Curabitur porttitor fermentum purus vel cursus. Nulla facilisi. Nullam eget vulputate dui.",
        //     "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac metus viverra, scelerisque urna a, efficitur est. Curabitur porttitor fermentum purus vel cursus. Nulla facilisi. Nullam eget vulputate dui. Aenean lobortis hendrerit felis, vehicula iaculis ligula hendrerit non. Nullam ornare est augue, in rhoncus tortor dapibus pretium. Mauris felis mi, imperdiet non leo consectetur, mollis sollicitudin ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent viverra sed tortor at tempor. Vestibulum est enim, tincidunt in tristique vel, finibus eu est. Suspendisse vel mi sed nulla mollis imperdiet quis id ex. Praesent lectus nisi, faucibus ac nibh vel, finibus facilisis leo. Vestibulum accumsan risus non neque rutrum bibendum. Vestibulum vestibulum varius magna in fringilla. Sed id est eget urna placerat fermentum ut varius tortor. Curabitur pulvinar, ante a commodo luctus, purus velit consectetur nisl, quis fringilla neque eros lacinia quam. Nullam mollis",
        //     "category_id" => 2,
        //     "user_id" => 2
        // ]);
    }
}
