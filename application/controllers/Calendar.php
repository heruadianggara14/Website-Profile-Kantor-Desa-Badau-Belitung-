<?php 

class Calendar extends CI_Controller {
	public function display($year = NULL, $month = NULL){
		$config['start_day'] = 'monday';
		$config['show_next_prev'] = true;
		$config['next_prev_url'] = base_url() . "calendar/display";

		$this->load->library('calendar', $config);
		
		$data['calendar'] = $this->calendar->generate($year, $month);
		$this->load->view('kalender_view', $data);
	}
}

 ?>