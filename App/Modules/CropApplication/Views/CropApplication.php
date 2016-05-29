<?php
use System\Template\Template;

    $template = new Template();
    $template->open();
    
    $template->openMain($this->route->getName); 
    $template->closeMain(); 
    $template->close();
    

 ?>