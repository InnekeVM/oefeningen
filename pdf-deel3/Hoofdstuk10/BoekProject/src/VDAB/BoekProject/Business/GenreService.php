<?php
namespace VDAB\BoekProject\Business;

use VDAB\BoekProject\Data\GenreDAO;


class GenreService {
    
    public function getGenresOverzicht () {
        $genreDAO = new GenreDAO();
        $lijst = $genreDAO->getAll();
        return $lijst;
    }
}
