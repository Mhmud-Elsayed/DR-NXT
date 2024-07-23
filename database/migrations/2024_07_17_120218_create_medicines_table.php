<?php

use App\Models\MedicineCompany;
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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string("ar_name")->unique();
            $table->string("en_name")->unique();
            $table->string("scientific_name")->nullable();
            $table->float("price")->nullable();
            $table->string("usage")->nullable();
            $table->foreignId("medicine_company_id")->constrained("medicine_companies");
            $table->foreignId("medicine_unit_id")->constrained("medicine_units");
            $table->integer("units_number");
            $table->string("barcode")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }




};
