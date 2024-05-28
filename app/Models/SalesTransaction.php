<?php

public function up()
{
    Schema::create('sales_transactions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->decimal('amount', 8, 2);
        $table->string('description');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('sales_transactions');
}
