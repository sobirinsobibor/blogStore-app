<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('title');
            // $table->string('author');
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_models');
    }
};


// PostModel::create([
//     'title' => 'Judul Tiga',
//     'slug' => 'judul-Tiga',
//     'excerpt' => 'Lorem ipsum Tiga',
//     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, alias. Maxime a aliquid tempore praesentium corrupti exercitationem, iste asperiores autem? Asperiores aspernatur et laborum necessitatibus eos ab voluptatum veniam quod, exercitationem eaque deserunt architecto laboriosam similique sint esse placeat ducimus quaerat error repellat quidem optio quas aut?</p><p> Doloribus sunt fuga, qui nostrum veniam in soluta ad vel dolores ipsam, unde explicabo, numquam ut similique! Nisi placeat possimus quae libero blanditiis amet totam aperiam, id labore nobis ab perspiciatis velit nulla eius commodi maxime ipsa deserunt minima cum fugiat vero! Et consequatur eum blanditiis earum reprehenderit voluptate optio esse omnis repellendus reiciendis, aliquam odio, cum dicta. Possimus sit quos quaerat minus hic.</p><p> In voluptate ex nam velit cupiditate doloremque labore doloribus aliquid iusto. Ad odit officiis delectus fugit cum natus consectetur! Dolorum laboriosam molestiae sint aspernatur exercitationem nostrum repudiandae officiis repellat, ipsum optio laudantium doloremque eveniet in eaque qui dolor. Expedita.</p>'
// ])