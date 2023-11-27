<?php
class produit
{
    private $reference;
    private $libelle;
    private $prix;
    private $qte;
    private $image;
    private $promo;
    private $description;


    public function __construct($r, $l, $p, $q, $i, $pr, $des)
    {
        $this->reference = $r;
        $this->libelle = $l;
        $this->prix = $p;
        $this->qte = $q;
        $this->image = $i;
        $this->promo = $pr;
        $this->description = $des;
    }
    /**
     * Get the value of reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     */
    public function setReference($reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the value of libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     */
    public function setLibelle($libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     */
    public function setPrix($prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of qte
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set the value of qte
     */
    public function setQte($qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of promo
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set the value of promo
     */
    public function setPromo($promo): self
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }
}
