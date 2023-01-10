<?

class Movie {
    private $title;
    private $originalTitle;
    private $year;
    public $language;
    public $overview;
    private $rating;
    public function __construct($title, $originalTitle, $year, $language, $rating)
    {
      $this->getTitle($title);
      $this->getOriginalTitle($originalTitle, $title);
      $this->getYear($year);
      $this->language = $language;
      $this->getRating($rating);
    }
    public function getTitle($title) {
        if(is_string($title)) {
            $this->title = $title;
        }
        return $title;
    }
    public function getOriginalTitle($originalTitle, $title) {
        if(is_string($originalTitle) && $originalTitle !== $title) {
            $this->originalTitle = $originalTitle;
        }
        return $originalTitle;
    }
    public function getYear($year) {
        if(is_integer($year) && strlen(strval($year)) === 4) {
            $this->year = $year;
        }
        return $year;
    }
    public function getRating($rating) {
        if(is_integer($rating) && ($rating >= 0 && $rating <=5)) {
            $this->rating = $rating;
        }
        return $rating;
    }
}


$apocalypseNow = new Movie('Apocalypse Now', 'Apocalypse Now', 1979, 'English', 5);

$apocalypseNow->overview = "A Saigon, durante la guerra in Vietnam il capitano dei corpi speciali Benjamin Willard riceve dai superiori l'ordine di trovare ed eliminare il colonnello Walter Kurtz che uscito con i suoi soldati dai ranghi dell'esercito americano, sta combattendo una guerra personale ai confini fra il Vietnam e la Cambogia. Scortato da alcuni uomini, Willard risale un fiume a caccia del colonnello. Dopo varie peripezie il capitano individua Kurtz all'interno di una sorta di reggia-tempio protetta dalla vegetazione e da numerosi indigeni armati. Willard non sa che fare, ma è lo stesso Kurtz che lo induce ad eseguire la condanna.";

var_dump($apocalypseNow);

$jaws = new Movie('Jaws', 'Lo squalo', 1974, 'English', 4);

$jaws->overview = "Ad Amity, cittadina balneare del New England, si sparge il terrore per gli attacchi di un terribile squalo bianco. Un poliziotto, un ittiologo e un cacciatore di squali si mettono in mare per dargli la caccia.";

var_dump($jaws);


?>