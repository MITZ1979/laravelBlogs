<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // 首先类定义中，有两个方法，up()可以理解为正向操作：创建表，而 down()可以理解为回滚操作：删除表。
    // up()
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            // $table->id();
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });
    }

    // down() 已经自动帮我们写好了。
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
