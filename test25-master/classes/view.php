<?
class View implements Countable{

	protected $data = [];
	
	public function __set($k, $v){
		$this->data[$k] = $v;
	}
	
	public function __get($k){
		return $this->data[$k];
	}
	
	public function display($template){
		foreach ($this->data as $key => $val){
			$$key = $val;
		}
		include __DIR__ . '/../views/' . $template;
	}
	
	public function count(){	
		return count($this->data);
	}
}
