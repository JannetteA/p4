<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectBrandsAndItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {

            # Remove the field associated with the old way we were storing brands
            # Whether you need this or not depends on whether your items table is built with an brands column
            # $table->dropColumn('brand');

            # Add a new INT field called `brand_id` that has to be unsigned (i.e. positive)
            $table->integer('brand_id')->unsigned();

            # This field `brand_id` is a foreign key that connects to the `id` field in the `brands` table
            $table->foreign('brand_id')->references('id')->on('brands');

        });
    }

public function down()
    {
        Schema::table('items', function (Blueprint $table) {

            # ref: http://laravel.com/docs/migrations#dropping-indexes
            # combine tablename + fk field name + the word "foreign"
            $table->dropForeign('items_brand_id_foreign');

            $table->dropColumn('brand_id');
        });
    }

}
