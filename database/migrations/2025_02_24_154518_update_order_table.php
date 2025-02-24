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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->integer('order_number')->nullable()->change();
            $table->decimal('total_amount', 8, 2)->nullable()->change();
            $table->string('payment_method')->nullable()->change();
            $table->integer('total_tax')->nullable()->index()->after('total_amount');
            $table->integer('total_shipping')->nullable()->index()->after('total_tax');
            $table->integer('total_price')->nullable()->index()->after('total_shipping');
            $table->string('order_note')->nullable()->after('total_price');
            $table->string('code')->nullable()->after('id');
            $table->unsignedInteger('user_id')->nullable()->after('id')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('name')->nullable(false)->change();
            $table->string('address')->nullable(false)->change();
            $table->string('phone')->nullable(false)->change();
            $table->integer('order_number')->nullable(false)->change();
            $table->decimal('total_amount', 8, 2)->nullable(false)->change();
            $table->string('payment_method')->nullable(false)->change();
            $table->dropColumn('total_tax');
            $table->dropColumn('total_shipping');
            $table->dropColumn('total_price');
            $table->dropColumn('order_note');
            $table->dropColumn('code');
        });
    }
};
