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
        Schema::table('users', function (Blueprint $table) {
            $table->string('id_in_soc', 20)
                ->default('')
                ->comment('id в социальной сети');
            $table->enum('type_auth', ['site', 'facebook', 'vk'])
                ->default('site')
                ->comment('Указывает на то, какой тип авторизации использует пользователь');
            $table->string('avatar', 150)->default('')->comment('Ссылка на аватар');
            $table->index('id_in_soc');
        });

    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['id_in_soc', 'type_auth', 'avatar']);
        });
    }

};
