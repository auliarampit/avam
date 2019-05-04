<!DOCTYPE html>
<html>
<head>
	<title>Quick Count</title>

	<style type="text/css">
		td{
			width: 25%;
			height: 35px;
			text-align: center;
		}
		a{
			color: white;
			background-color: red;
			text-decoration: none;
			text-transform: uppercase; 
		}
	</style>
</head>
<?php
	error_reporting( E_ALL );

	Class conn
	{
		public function __construct()
		{
			$this->conn = new mysqli('localhost', 'root', '', 'nomor_6');
		}
		public function select($select, $from)
		{
			//products.id as id, products.name as name, product_categories.name as category
			//products INNER JOIN product_categories ON products.category_id = product_categories.id

			$query = $this->conn->query('SELECT '.$select.' FROM '.$from);
			return $query;
		}

		public function insert($value)
		{
			$query = $this->conn->query("INSERT products(name, category_id) VALUE($value)");
			return $query;
		}
	}
?>
<body>
	<table border="1">
		<tr>
			<td>Calon</td>
			<td rowspan="2">
				<a href="">Tombol Tambah</a>
			</td>
		</tr>
		<tr>
			<td>Earned Vote</td>
		</tr>
	</table>
</body>
</html>