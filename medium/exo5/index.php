<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 5 : Private and Getters"; // Page title
?>

<!-- 
    1 : create a class Book, properties: name, edition, author, date
    2 : all atributes must be private
    3 : constructor and a function that allows to display a book
    4 : filter books by edition and date
    5 : use the method Post
 -->

<?php
class Book {
    private string $name;
    private string $edition;
    private string $author;
    private int $date;

    public function __construct ($name, $edition, $author, $date) {
        $this->name = $name;
        $this->edition = $edition;
        $this->author = $author;
        $this->date = $date;
    }

    // Getters allow to have access to the private properties outside the class
    public function getName(): string { return $this->name; }
    public function getEdition(): string { return $this->edition; }
    public function getAuthor(): string { return $this->author; }
    public function getDate(): int { return $this->date; }

    // function that converts object into string to display it, how it is printed each time we make a echo $object
    /* 
    public function __toString($txt): string 
    {
        $txt = 'Name : ' . $this->name . '<br>';
        $txt .= 'Edition : ' . $this->edition . '<br>';
        $txt .= 'Author : ' . $this->author . '<br>';
        $txt .= 'Date : ' . $this->date . '<br>';

        return $txt;
    }*/
}

// Instanciate animal
$book1 = new Book ("Tonton", "babibar", "Toto", 2000);
$book2 = new Book ( "Tonton2", 'babibar', "Tata", 2001 );
$book3 = new Book ( "Abelix", 'bebat', "Titi", 2000 );
$book4 = new Book ( "Abelix2", 'bebat', "Titi", 2000 );
$book5 = new Book ( "Abelix3", 'bebat', "Tutu", 2001 );

$books = [ $book1, $book2, $book3, $book4, $book5]; // put all animals objects into an array

// var_dump($book1->name); error because property is private
// var_dump($book1->getName()); no error beacuse the method to access the property is public
// echo '<pre>'; print_r($books); echo '</pre>';

function displayAllBooks(array $arr) {
    echo '----------------------------';
    foreach($arr as $book) {
        echo '<p>Name : ' . $book->getName() . '</p>';
        echo '<p>Edition : ' . $book->getEdition() . '</p>';
        echo '<p>Author : ' . $book->getAuthor() . '</p>';
        echo '<p>Date : ' . $book->getDate() . '</p>';
        echo '----------------------------';
    } 
}

function displayFiltered(array $arr, string $edition, $release_date ): void {
    echo '----------------------------';
    foreach($arr as $book) {
        if (($book->getEdition() === $edition || $edition === 'all' ) && ($book->getDate() === (int)$release_date) || $release_date === 'all') {
            echo '<p>Name : ' . $book->getName() . '</p>';
            echo '<p>Edition : ' . $book->getEdition() . '</p>';
            echo '<p>Author : ' . $book->getAuthor() . '</p>';
            echo '<p>Date : ' . $book->getDate() . '</p>';
            echo '----------------------------';
        }
    } 
}
?>

<!-- Form -->
<form action="" method="post">
    <div class="form-group">
        <label for="edition">Edition : </label>
        <select name="edition">
            <option value="all" <?php if(isset($_POST["edition"]) && $_POST["edition"] === "all") echo(" selected")?>>All</option>
            <option value="babibar" <?php if(isset($_POST["edition"]) && $_POST["edition"] === "babibar") echo(" selected")?>>Babibar</option>
            <option value="bebat" <?php if(isset($_POST["edition"]) && $_POST["edition"] === "bebat") echo(" selected")?>>Bebat</option>
        </select>
    </div>

    <div class="form-group">
        <label for="date">Release Date : </label>
        <select name="date">
            <option value="all" <?php if(isset($_POST["date"]) && $_POST["date"] === "all") echo(" selected")?>>All</option>
            <option value="2000" <?php if(isset($_POST["date"]) && $_POST["date"] === "2000") echo(" selected")?>>2000</option>
            <option value="2001" <?php if(isset($_POST["date"]) && $_POST["date"] === "2001") echo(" selected")?>>2001</option>
        </select>
    </div>
    <input type="submit" class="btn btn-primary" value="Search">
</form>

<?php
//echo '<pre>'; print_r($_POST); echo '</pre>';  data inside POST

if(
    isset($_POST['edition']) && !empty($_POST['edition']) &&
    isset($_POST['date']) && !empty($_POST['date'])
) { // filter books 
    displayFiltered($books, $_POST['edition'], $_POST['date']);
} else {
    displayAllBooks($books);
}

?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>