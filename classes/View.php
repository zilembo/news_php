<?php

class View
{
    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function render($template)
    {
        foreach ($this->data as $key => $val) {
            $$key = $val;
        }
        ob_start();
        include __DIR__ . '/../views/news/' . $template;
        $template_content = ob_get_contents();
        ob_end_clean();
        return $template_content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }
}


