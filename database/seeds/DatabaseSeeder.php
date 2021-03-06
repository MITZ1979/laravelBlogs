<?php

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
        // $this->call(UserSeeder::class);

    // $this->call(UsersTableSeeder::class); 
    // 这里给我们举例了如何引用其他Seeder    
    $this->call(UserTableSeeder::class);    
    $this->call(BlogTableSeeder::class);    
    $this->call(CommentTableSeeder::class);// 这里有先后关系需要注意一下：评论n : 1文章/用户，所以应该把它写在最后
    }
}
