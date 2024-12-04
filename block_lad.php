<?php

require_once(__DIR__ . '/../../config.php');

class block_lad extends block_base {
	public function init() {
		$this->title = 'LAD'; 
	}
	
	public function get_content() {	
		$this->content = new stdClass;

		$this->content->text = "Learning Analytics Dashboard";

        $url = new moodle_url('/blocks/lad/view.php');
        $this->content->text .= html_writer::link($url, 'LAD');

		return $this->content;
	}
}
