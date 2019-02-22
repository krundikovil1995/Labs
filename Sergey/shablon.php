<?php  
class content {  
	var $vars = array();
	var $content = '';
	
	public function set($name, $val) 
	{ 
		$this->vars[$name] = $val;
	}
	
	public function out_content($tpl) 
	{ 
		$this->content = file_get_contents($tpl);	
		foreach($this->vars as $key => $val){
			$this->content = str_replace($key, $val, $this->content);
		}
		echo $this->content;
	}
}

$content = new content();
?>