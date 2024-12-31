<?php

namespace src;

class MessageEnGras extends MessageDecorator {
    public function show()
    {
        $this->setTitre('<b>'.$this->messageVue->getTitre().'</b>');        
        $this->setContenu('<b>'.$this->messageVue->getContenu().'</b>');
        echo $this->getTitre();
        echo '<br>';
        echo $this->getContenu();
    }
}