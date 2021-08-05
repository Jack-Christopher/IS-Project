<?php

class Button
{
    public $content;
    public $bootstrap_class;
    public $html_id;
    public $type;

    public function __construct($contenido, $b_class, $id, $t)
    {
        $this->content = $contenido;
        $this->bootstrap_class = $b_class;
        $this->html_id = $id;
        $this->type = $t;
    }


    function printHTMLButton()
    {
        
            echo "<button type=\"button\" id=\"" . $this->html_id . "\"type=\"" . $this->type . "\"";
            echo "class=\"" . $this->bootstrap_class . "\" > " . $this->content . " </button>";
        

    }
}
