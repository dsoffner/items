<?php
App::uses('HttpSocket', 'Network/Http');
class ClientController extends AppController {
	public $components = array('Security', 'RequestHandler');
	
	public function index(){
		
	}

	public function request_index(){
	
		// remotely post the information to the server
		$link =  "http://" . $_SERVER['HTTP_HOST'] . $this->webroot.'rest_items.json';
		
		$data = null;
		$httpSocket = new HttpSocket();
		$response = $httpSocket->get($link, $data );
		$this->set('response_code', $response->code);
		$this->set('response_body', $response->body);
		
		$this -> render('/Client/request_response');
	}
	
	public function request_view($id){
	
		// remotely post the information to the server
		$link =  "http://" . $_SERVER['HTTP_HOST'] . $this->webroot.'rest_items/'.$id.'.json';

		$data = null;
		$httpSocket = new HttpSocket();
		$response = $httpSocket->get($link, $data );
		$this->set('response_code', $response->code);
		$this->set('response_body', $response->body);
		
		$this -> render('/Client/request_response');
	}
	
	public function request_edit($id){
	
		// remotely post the information to the server
		$link =  "http://" . $_SERVER['HTTP_HOST'] . $this->webroot.'rest_items/'.$id.'.json';

		$data = null;
		$httpSocket = new HttpSocket();
		$data['Item']['name'] = 'Updated Itam Name';
		$data['Item']['theme'] = 'Updated Item Theme';
		$data['Item']['rank'] = 'Updated Item Rank';
		$data['Item']['name'] = 'Updated Item Trivia';
		$response = $httpSocket->put($link, $data );
		$this->set('response_code', $response->code);
		$this->set('response_body', $response->body);
		
		$this -> render('/Client/request_response');
	}
	
	public function request_add(){
	
		// remotely post the information to the server
		$link =  "http://" . $_SERVER['HTTP_HOST'] . $this->webroot.'rest_items.json';

		$data = null;
		$httpSocket = new HttpSocket();
		$data['Item']['name'] = 'New Item';
		$data['Item']['theme'] = 'New Item Theme';
		$data['Item']['rank'] = 'New Item Rank';
		$data['Item']['name'] = 'New Item Trivia';
		$response = $httpSocket->post($link, $data );
		$this->set('response_code', $response->code);
		$this->set('response_body', $response->body);
		
		$this -> render('/Client/request_response');
	}
	
	public function request_delete($id){
	
		// remotely post the information to the server
		$link =  "http://" . $_SERVER['HTTP_HOST'] . $this->webroot.'rest_items/'.$id.'.json';

		$data = null;
		$httpSocket = new HttpSocket();
		$response = $httpSocket->delete($link, $data );
		$this->set('response_code', $response->code);
		$this->set('response_body', $response->body);
		
		$this -> render('/Client/request_response');
	}
}