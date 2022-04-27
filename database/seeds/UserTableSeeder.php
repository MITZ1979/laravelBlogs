<?php

use Illuminate\Database\Seeder;
// 在 class 关键字前面，引用一下 User 模型
use App\User; 

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create(); //向users表中插入50条模拟数据
        $user = User::find(1); //插入完后，找到 id 为 1 的用户
        $user->name = "najiuyuanzou"; //设置 用户名
        $user->email = "najiuyuanzou@test.com"; //设置 邮箱
        $user->password = bcrypt('liuhaoyu'); //设置 密码
        $user->save(); //保存
    }
}
