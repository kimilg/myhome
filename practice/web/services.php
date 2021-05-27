<?php 
require("page.inc");
class ServicesPage extends Page{
	private $row2buttons = array(
							"Re-engineering"=>"reengineering.php",
							"Standards Compliance"=>"standards.php",
							"Buzzword Compliance"=>"buzzword.php",
							"Mission Statements"=>"mission.php"
						);
	public function Display(){
		echo "<html><br /><head><br />";
		$this->DisplayTitle();
		$this->DisplayKeywords();
		$this->DisplayStyles();
		echo "</head><br /><body><br />";
		$this->DisplayHeader();
		$this->DisplayMenu($this->buttons);
		$this->DisplayMenu($this->row2buttons);
		echo $this->content;
		$this->DisplayFooter();
		echo "</body><br /></html><br />";
	}
}

$services = new ServicesPage();

$services->content="<p>blah</p>";
$services->Display();
?>