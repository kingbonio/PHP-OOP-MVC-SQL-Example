A simple test to show database access using MVC and OOP.


Application allows creation, deletion and alteration of products.


Product objects contain:

Part Number
Description
Image
Stock
Cost Price
Sale Price
VAT Rate


Images should be placed in the img/products/ folder and their file names only should be provided in the "Image" field while editing or creating a new product.


A database is necessary the details are listed below:

Database Name: 'toolsdatabase',

Table Name: 'products',

Columns:

	-partnumber (int, length=8, auto-increment, primary key, unique, unsigned zerofill)

	-description (varchar, length=256)

	-image (varchar, length=256)

	-stock (int, length=8)

	-costprice (float)

	-saleprice (float)

	-vatrate (float)

Username: 'root',

Password: '' (blank)
