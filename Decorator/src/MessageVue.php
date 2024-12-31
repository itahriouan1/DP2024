<?php

namespace src;

class MessageVue extends AbstractMessageVue {


    public function __construct(string $titre, string $contenu){
        $this->Titre = $titre;
        $this->contenu = $contenu;
    }

    

    public function show(){
        echo $this->Titre;
        echo "<br>";
        echo $this->contenu;
    }
}