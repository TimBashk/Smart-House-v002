<?
class AccountComposition{
	
	private $id;
	private $amount;
	private $quantity;
	private $name;
	
	public function __construct($id,$name,$amount,$quantity){
		$this->id = $id;
		$this->amount = $amount;
		$this->quantity = $quantity;
		$this->name = $name;
	}
	
	public function getAmount(){
		return $this->amount;
	}
	
	public function getQuantity(){
		return $this->quantity;
	}
	
	public function getName(){
		return $this->name;
	}
}
?>