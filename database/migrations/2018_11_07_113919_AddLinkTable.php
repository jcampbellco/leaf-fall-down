<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('links');

        Schema::create('links', function(Blueprint $schema) {
            $schema->string('slug', 8);
            $schema->longText('url');

            $schema->unique(['slug'], 'UNIQ_LINKS_ID');

            $schema->primary(['slug']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links');
    }
}
