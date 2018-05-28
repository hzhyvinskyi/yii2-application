<?php

use yii\db\Migration;

/**
 * Class m180526_221002_shop_example
 */
class m180526_221002_shop_example extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    	$this->createProduct();
    	$this->createManufacturer();
    	$this->createCategory();
    	$this->createProductsToManufacturers();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
		$this->dropTable('manufacturer');
		$this->dropTable('category');
		$this->dropTable('products_to_manufacturers');
	}

	private function createProduct()
	{
		$this->createTable('product', [
			'id' => $this->primaryKey(),
			'name' => $this->string(),
			'price' => $this->decimal(),
			'category_id' => $this->tinyInteger(2),
			'availability' => $this->tinyInteger(1),
		]);

		$this->insert('product', [
			'id' => 1,
			'name' => 'Marlboro Gold',
			'price' => 10,
			'category_id' => 2,
			'availability' => 1,
		]);

		$this->insert('product', [
			'id' => 2,
			'name' => 'Whiskey',
			'price' => 58,
			'category_id' => 1,
			'availability' => 1,
		]);

		$this->insert('product', [
			'id' => 3,
			'name' => 'T-shirt Golden Age',
			'price' => 17,
			'category_id' => 3,
			'availability' => 1,
		]);

		$this->insert('product', [
			'id' => 4,
			'name' => 'Cardigan Kingston',
			'price' => 42,
			'category_id' => 3,
			'availability' => 0,
		]);

		$this->insert('product', [
			'id' => 5,
			'name' => 'Beer',
			'price' => 3,
			'category_id' => 1,
			'availability' => 1,
		]);

		$this->insert('product', [
			'id' => 6,
			'name' => 'Table brown runner',
			'price' => 180,
			'category_id' => 4,
			'availability' => 1,
		]);

		$this->insert('product', [
			'id' => 7,
			'name' => 'Chair Executive X',
			'price' => 120,
			'category_id' => 4,
			'availability' => 1,
		]);

		$this->insert('product', [
			'id' => 8,
			'name' => 'Headphones ASR-117',
			'price' => 105,
			'category_id' => 5,
			'availability' => 1,
		]);

		$this->insert('product', [
			'id' => 9,
			'name' => 'Keyboard z510',
			'price' => 70,
			'category_id' => 5,
			'availability' => 1,
		]);

		$this->insert('product', [
			'id' => 10,
			'name' => 'Monitor a300',
			'price' => 299,
			'category_id' => 5,
			'availability' => 1,
		]);
	}

	private function createManufacturer()
	{
		$this->createTable('manufacturer', [
			'id' => $this->primaryKey(),
			'name' => $this->string(),
			'founded' => $this->date(),
			'origin' => $this->string(),
			'number_of_locations' => $this->integer(),
		]);

		$this->insert('manufacturer', [
			'id' => 1,
			'name' => 'Heres',
			'founded' => '1973-03-11',
			'origin' => 'Spain',
			'number_of_locations' => 103,
		]);

		$this->insert('manufacturer', [
			'id' => 2,
			'name' => 'Tobacco ltd.',
			'founded' => '1946-04-16',
			'origin' => 'USA',
			'number_of_locations' => 3067,
		]);

		$this->insert('manufacturer', [
			'id' => 3,
			'name' => 'Elex',
			'founded' => '1993-12-20',
			'origin' => 'Hungary',
			'number_of_locations' => 81,
		]);

		$this->insert('manufacturer', [
			'id' => 4,
			'name' => 'JYSK',
			'founded' => '1996-07-11',
			'origin' => 'Denmark',
			'number_of_locations' => 1192,
		]);

		$this->insert('manufacturer', [
			'id' => 5,
			'name' => 'Clos',
			'founded' => '1982-01-12',
			'origin' => 'The Netherlands',
			'number_of_locations' => 750,
		]);

		$this->insert('manufacturer', [
			'id' => 6,
			'name' => 'ACC',
			'founded' => '1911-02-01',
			'origin' => 'Germany',
			'number_of_locations' => 919,
		]);
	}

	private function createCategory()
	{
		$this->createTable('category', [
			'id' => $this->primaryKey(),
			'name' => $this->string(),
			'status' => $this->tinyInteger(1),
		]);

		$this->insert('category', [
			'id' => 1,
			'name' => 'Alcohol',
			'status' => 1,
		]);

		$this->insert('category', [
			'id' => 2,
			'name' => 'Cigarettes',
			'status' => 1,
		]);

		$this->insert('category', [
			'id' => 3,
			'name' => 'Clothes',
			'status' => 1,
		]);

		$this->insert('category', [
			'id' => 4,
			'name' => 'Furniture',
			'status' => 1,
		]);

		$this->insert('category', [
			'id' => 5,
			'name' => 'Electronics',
			'status' => 1,
		]);
	}

	private function createProductsToManufacturers()
	{
		$this->createTable('products_to_manufacturers', [
			'id' => $this->primaryKey(),
			'product_id' => $this->integer(),
			'manufacturer_id' => $this->integer(),
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 1,
			'product_id' => 1,
			'manufacturer_id' => 1,
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 2,
			'product_id' => 1,
			'manufacturer_id' => 2,
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 3,
			'product_id' => 2,
			'manufacturer_id' => 1,
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 4,
			'product_id' => 3,
			'manufacturer_id' => 5,
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 5,
			'product_id' => 3,
			'manufacturer_id' => 6,
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 6,
			'product_id' => 4,
			'manufacturer_id' => 5,
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 7,
			'product_id' => 4,
			'manufacturer_id' => 6,
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 8,
			'product_id' => 5,
			'manufacturer_id' => 1,
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 9,
			'product_id' => 6,
			'manufacturer_id' => 6,
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 10,
			'product_id' => 6,
			'manufacturer_id' => 7,
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 11,
			'product_id' => 7,
			'manufacturer_id' => 6,
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 12,
			'product_id' => 7,
			'manufacturer_id' => 7,
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 13,
			'product_id' => 8,
			'manufacturer_id' => 3,
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 14,
			'product_id' => 8,
			'manufacturer_id' => 6,
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 15,
			'product_id' => 9,
			'manufacturer_id' => 6,
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 16,
			'product_id' => 9,
			'manufacturer_id' => 3,
		]);

		$this->insert('products_to_manufacturers', [
			'id' => 17,
			'product_id' => 10,
			'manufacturer_id' => 3,
		]);
	}
}
