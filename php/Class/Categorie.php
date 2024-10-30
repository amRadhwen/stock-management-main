<?php

require_once("Dao.php");
require_once("AfficherTout.php");
class Categorie
{
    
    use AfiicherTout;

    public function __construct(
        private string $lib_cat,
        private string $desc_cat,
        private string $image
    ) {
    }

    
    public function ajouterCat()
    {
        Dao::ajouterCat($this->lib_cat, $this->desc_cat, $this->image);
    }

    
    public static function modifierCat($id_cat, $lib_cat, $desc_cat, $image)
    {
        Dao::modifierCat($id_cat, $lib_cat, $desc_cat, $image);
    }

    
    public static function supprimerCat($id_cat)
    {
        Dao::supprimerCat($id_cat);
    }

    
    public static function nbrDesCat()
    {
        return Dao::nbrDesCat();
    }

    

    public static function affichetCat($id_cat)
    {
        return Dao::affichetCat($id_cat);
    }
}