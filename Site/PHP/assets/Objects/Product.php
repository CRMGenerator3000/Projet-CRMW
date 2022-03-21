<?php
class Product // TODO extend a superclass shared with service too, so both services and product can be seen as the same object
{
    # All mandatory attributes for an object creation

    private $nom_produit;
    private $ref_utilisateur;
    private $ref_fournisseur;

    # All optionnal attributes

    private $nom_fournisseur;
    private $prix_fournisseur;
    private $description;
    private $texte_predef;
    private $marge;
    private $historique_prix;


    /**
     * Generic get function 
     * @param name of the attribute
     * 
     * @return return equivalent to getAttribute() for any attribute 
     */
    public function get($attribute)
    {
        if (property_exists($this, $attribute)) {
            if (is_null($this->$attribute)) {
                # TODO get the attribute of the database
            }
            return $this->$attribute;
        }
    }






}


?>