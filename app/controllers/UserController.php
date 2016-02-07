<?php

class UserController extends BaseController{

	protected $user = null;

	public function __construct(Usuario $user){
		$this->user = $user;
	}

	public function allUser(){
		return $this->user->allUsers();
	}


	public function getUser($id){
		$user = $this->user->getUser($id);	
		if(!$user){
			return Response::json(["response" => "Usuario nao encontrado"], 400);
		}
		return $user;

	}

	public function saveUser(){
		$this->user->saveUser();
	}

	public function updateUser($id){
		$user = $this->user->updateUser($id);	
		if(!$user){
			return Response::json(["response" => "Usuario nao encontrado"], 400);
		}
		return $user;
	}

	public function deleteUser($id){
		$user = $this->user->deleteUser($id);
		if(!$user){
			return Response::json(['response' => 'usuario não encontrado'], 400);
		}
		return Response::json($user, 200);
	}
}