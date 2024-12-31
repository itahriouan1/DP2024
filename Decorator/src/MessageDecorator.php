<?php

namespace src;

abstract class MessageDecorator extends AbstractMessageVue{
    protected AbstractMessageVue $messageVue;

    public function __construct(AbstractMessageVue $messageVue){
        $this->messageVue = $messageVue;
    }
    abstract public function show();
}