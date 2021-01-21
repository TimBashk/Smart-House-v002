<?
include_once 'AccountComposition.php';

class Score{
	private $scoreNumber;
	private $scoreStatus;
	
	private $scoreDate;
	private $scoreDiscont;
	
	private $accountComposition = array();
	
	public function setScoreNumber($num){
		$this->scoreNumber = $num;
	}
	
	public function setScoreStatus($status){
		$this->scoreStatus = $status;
	}
	
	public function setScoreDate($date){
		$this->scoreDate = $date;
	}
	
	public function setScoreDiscont($discont){
		$this->scoreDiscont = $discont;
	}
	
	
	public function getScoreNumber(){
		return $this->scoreNumber;
	}
	
	public function getScoreStatus(){
		return $this->scoreStatus;
	}
	
	public function getScoreDate(){
		return $this->scoreDate;
	}
	
	public function getScoreDiscont(){
		return $this->scoreDiscont;
	}
	
	public function addNewAccountComposition($name,$amount,$quantity){
		$currentIndex = count($this->accountComposition);
		$accountComposition = new AccountComposition($currentIndex,$name,$amount,$quantity);
		$this->accountComposition[] = $accountComposition;
	}
	
	public function getAccountComposition(){
		if(count($this->accountComposition)== 0){
			echo "Account Composition is Empty";
		}else{
			for($i = 0;$i<count($this->accountComposition);$i++){
				echo $this->accountComposition[$i]->getName()."</br>";
			}
		}
	}
	
	
}
?>