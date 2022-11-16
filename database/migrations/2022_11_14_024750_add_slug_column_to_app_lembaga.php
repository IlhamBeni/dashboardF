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
        Schema::table('app_lembaga', function (Blueprint $table) {
            $table->string('slug', 255)->nullable()->after('ref_produk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('app_lembaga', function (Blueprint $table) {
            if(Schema::hasColumn('app_lembaga', 'slug')){
                $table->dropColumn('slig');
            }
        });
    }
};
