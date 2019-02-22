<?php

class content
{

    var $vars = array();
    var $content = '';

    function set($name, $val)
    {
        $this->vars[$name] = $val;
    }

    function out_content($tpl)
    {
        $this->content = file_get_contents($tpl);
		
		preg_match_all('/([a-zA-Z0-9\/\_\-]*)\.([a-z]*)/i', $this->content, $arr);
		
		if ($arr[2][0] == 'css')
	print_r($arr);
		{
			foreach($arr[0] as $key => $val)
			{
				$this->content = str_replace('['.$val.']', '<link rel="stylesheet" href="'.$val.'" type="text/css" />', $this->content);
			}
		}	

        foreach ($this->vars as $key => $val) {
            $this->content = str_replace($key, $val, $this->content);
        }

        echo $this->content;
    }


}

$content = new content();


?>


