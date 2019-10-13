<?php

use Illuminate\Database\Migrations\Migration;

class CreateViewProductsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW info_products AS
        SELECT 
                    products.id AS product_id,
                    products.name AS product_name,
                    categories.name AS category_name,
                    categories.id AS category_id,
                    variants.id AS variant_id,
                    variants.name AS variant_name,
                    variants.created_at AS variant_created_at,
                    variants.description AS variant_description,
                    variants.ref AS variant_ref,
                    variants.color AS variant_color,
                    variant_prices.id AS variant_prices_id,
                    variant_prices.price AS variant_prices_price,
                    countries.id AS country_id,
                    countries.name AS country_name,
                    countries.currency AS country_currency,
                    countries.currency_value AS country_currency_value,
                    countries.code AS country_code
        FROM      products 
        LEFT JOIN categories ON categories.id = products.category_id
        LEFT JOIN variants ON variants.product_id = products.id
        INNER JOIN variant_prices ON variant_prices.variant_id = variants.id 
        INNER JOIN countries ON variant_prices.country_id = countries.id 
        ORDER BY  variant_created_at DESC");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW info_products");
    }
}
