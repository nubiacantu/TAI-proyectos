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
        Schema::table('products', function (Blueprint $table) {
            $table-> string('descripcion_corta');
            $table-> string('descripcion_larga');
            $table-> float('precio_venta');
            $table-> float('precio_compra');
            $table-> integer('stock');
            $table-> float('peso');

            //fecha de registro del producto
            $table->timestamp('fecha_registro')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //

            $table->dropColumn('descripcion_corta');
            $table->dropColumn('descripcion_larga');
            $table->dropColumn('precio_venta');
            $table->dropColumn('precio_compra');
            $table->dropColumn('stock');
            $table->dropColumn('peso');
            $table->dropColumn('fecha_registro');
        });
    }
};
