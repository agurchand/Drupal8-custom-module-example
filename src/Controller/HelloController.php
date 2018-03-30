<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase{
	public function display_content(){
		return array(
			'#type' => 'markup',
			'#markup' => t('Hello World from custom module!')
		);
	}
}