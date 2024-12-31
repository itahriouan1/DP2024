<?php

namespace src;

class MessageEnItalique extends MessageDecorator {
    public function show()
    {
        $this->setTitre('<i>'.$this->messageVue->getTitre().'</i>');        
        $this->setContenu('<i>'.$this->messageVue->getContenu().'</i>');
        echo $this->getTitre();
        echo '<br>';
        echo $this->getContenu();
    }
}