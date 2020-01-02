<?php

class RedirectView {
    private $code;
    private $path;

    public function __construct($path, $code){
        $this->path = $path;
        $this->code = $code;
    }

    public function render(){
        http_response_code($this->code);
        header("Location: {$this->path}");
    }
}