<?php
trait AfiicherTout {
    public static function afficher($nom_de_class) {
        return Dao::afficher($nom_de_class);
    }
}