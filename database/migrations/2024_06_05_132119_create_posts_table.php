<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    // Post::create([
    //     'title' => 'Judul Ketiga',
    //     'slug' => 'judul-ketiga',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis placeat tenetur, commodi quia dignissimos repellendus quaerat iusto vero hic atque.',
    //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro fugiat cum cupiditate! Aliquid sit accusantium repudiandae eveniet totam ipsam veniam fugiat culpa, sapiente nesciunt odio quia voluptatem a non quae illo earum, impedit quaerat debitis, dolorum qui dolorem atque. Impedit eos sint minus commodi repudiandae natus temporibus repellendus similique expedita, facilis porro voluptatum, officiis explicabo officia inventore totam? Labore perspiciatis aliquam eligendi adipisci eos voluptatibus, cum facilis accusantium eaque ex, ullam nihil nulla quisquam mollitia. Quas esse voluptates, et dicta saepe porro quis reiciendis possimus ratione magni voluptatibus id, corrupti ab temporibus optio ad. Eaque earum nisi blanditiis eum eos.'
    // ])

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
