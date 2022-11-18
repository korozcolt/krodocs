<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("documents", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->string("title");
            $table->string("path");
            $table->string("extension");
            $table->json("properties");
            $table->foreignId("user_id")->constrained();
            $table->foreignId("tag_id")->constrained();
            $table->foreignId("file_id")->constrained();
            $table->foreignId("category_id")->constrained();
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
        Schema::dropIfExists("documents");
    }
};