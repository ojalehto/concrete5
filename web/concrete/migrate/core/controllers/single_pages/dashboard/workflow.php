<?php
defined('C5_EXECUTE') or die("Access Denied.");
class Concrete5_Controller_Page_Dashboard_Workflow extends DashboardController {
	
	public function view() {
		$this->redirect('/dashboard/workflow/list');
	}
	
}