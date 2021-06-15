<?php

class Panier

{
    public $tableau = [];
    public $article_quantite;

    public function add($article_id)
    {

        if (isset ($this->tableau[$article_id])) {

            $this->article_quantite += 1;

        } else {

            $this->tableau [$article_id] = 1;
        }
    }

    public function update($article_id, $quantite_ajoutee)
    {
        $this->tableau [$article_id] += $quantite_ajoutee;
    }

    public function delete($article_id)
    {

        if (isset ($this->tableau[$article_id])) {

            unset($this->tableau[$article_id]);

        }
    }

}

 function displayPanier(Panier $tableau) {
    foreach ($tableau as $id=>$quantite){
                 echo $id;
                 echo $quantite;

   }

    }
