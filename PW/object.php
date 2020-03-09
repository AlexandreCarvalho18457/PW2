<?php  
class Book {
	//Properties
	private $title;
	private $author;
	private $price;

	//constructor
	function __construct($title, $author, $price){
		$this-> title = $title;
		$this-> author = $author;
		$this-> price = $price;
	}

	//Methods
	function getTitle(){
		return $this->title;
	}
	function getAuthor(){
		return $this->author;
	}
	function getPrice(){
		return $this->price;
	}
	
}

function Total($carrinhoCompras){
		$total = 0;
		foreach ($carrinhoCompras as $livro){
			$total += $livro -> getPrice();
		}
		return $total;
	}

	function descontoTotal($carrinhoCompras){
		$totalsdesc = 0;
		$desc =0;
		$totaldesc=0;
		$total = 0;
		foreach ($carrinhoCompras as $livro){
			if ($livro -> getPrice() > 20) {	
			$desc = $livro -> getPrice() * 0.1;
			$totaldesc += $desc;
			}else
			$totalsdesc += $livro -> getPrice();
			
		}
		$total = $totaldesc +$totalsdesc;
		return $totalsdesc;
	}

function livrosDesconto($carrinhoCompras){
	$arrayLivros = array();
	foreach ($carrinhoCompras as $livro){
		if ($livro -> getPrice() > 20) {
			array_push($arrayLivros,($livro -> getTitle()));
		}
	}
 
	return $arrayLivros;
}



//intance a new book
$livro1 = new Book("Harry Potter", "J.K.Rowling", 20.79);
$livro2 = new Book("Biblia", "Deus", 99.99);
$livro3 = new Book("Momo", "Thomas Mann", 15.68);
$livro4 = new Book("Ensaio sobre a cegueira", "Saramago", 23.77);

$carrinhoCompras = array($livro1, $livro2, $livro3, $livro4);
?>


<!DOCTYPE html>
<html>
<head>
	<title> PHP Objects</title>
</head>
<body>
	<h1>Carrinho de Compras</h1>

	<?php foreach ($carrinhoCompras as $livro){?>
	
	<h1> <?php echo $livro -> getTitle();?></h1>
	Author: <?php echo $livro -> getAuthor();?>
	<br>
	<strong><?php echo $livro -> getPrice();?></strong>Euros
	<?php } ?>
	
	<h3>Total:<?php echo Total($carrinhoCompras)?> </h3>

	<h3>Livros com desconto:
		<?php 
		foreach (livrosDesconto($carrinhoCompras) as $arrayLivros) {
			echo '<br>' . $arrayLivros;
		} 
			
		 ?>

	 </h3>

	 <h3>Total:<?php echo descontoTotal($carrinhoCompras)?> </h3>

</body>
</html>