<?php

class Error404View {
    public function render(){
        http_response_code(404);
    }
}