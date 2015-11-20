<?php
namespace Hoofdstuk10\BoekProject\Business;

use Hoofdstuk10\BoekProject\Data\GenreDAO;


class GenreService {
    
    public function getGenresOverzicht () {
        $genreDAO = new GenreDAO();
        $lijst = $genreDAO->getAll();
        return $lijst;
    }
}
