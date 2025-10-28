<?php
#la class a l e
Class Ordinateur{
    # 
    private $_marque;
    private $_modele;
    private $_ecran;
    private $_statut = 0;

        
    public function allumer(){
         $this->_statut = 1;
    }
}
#
$poste = new Ordinateur();
$poste->allumer()
?>

Definir poo 
definir une class
pourquoi private 
pourquoi la fonction est public
que signifie $this