<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Module_Pdf extends Module {
	
	public $template = 'module/pdf/index';
	const PDF_SALT = '7wdjkri5j';

		public function before() {
		parent::before();
		
		
	}
	
	public function action_index() {
		
		$params = array(
			'module' => $this->request->param('param1'),
			'method' => $this->request->param('param2'),
			'param1' => $this->request->param('param3'),
			'param2' => $this->request->param('param4'),
			'param3' => $this->request->param('param5'),
			'param4' => $this->request->param('param6'),
			'param5' => $this->request->param('param7'),
			'param6' => $this->request->param(md5(Module_Pdf::PDF_SALT)),
		);
		
		$url = Route::url('system', $params, TRUE);
		
		$data = Request::factory($url)->execute();
		$this->template->data = $data;
		
		$html = $this->template->render();
		$mpdf = new mPDF();
		$mpdf->WriteHTML($html);
		$mpdf->Output();
		exit();
		
	}

	public function after() {
		parent::after();
	}
	
}