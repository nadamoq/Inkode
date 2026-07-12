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
        Schema::table('roles', function (Blueprint $table) {
            //
            $table->string('type')->after('name');
            
        });
        Schema::table('users',function(Blueprint $table){

            $table->enum('type',['user','admin','super-admin'])->default('user')->after('name');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropColumns('roles','type');
        Schema::dropColumns('users','type');
       
        //    Schema::table('users', function (Blueprint $table) {
        //     //
           
        //     $table->dropColumn('type');
        // });
        

    }
};
