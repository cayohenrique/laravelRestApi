<?php

class Usuario extends Eloquent{
	public $table = "usuario";
	public $timestamps  = false;
	protected $fillable = ["Perfil_idPerfil", "login", "senha", "dataUltimoAcesso"];
	public function allUsers(){
		return self::all();
	}

	public function saveUser(){
		$input = Input::all();
		$input["senha"] = Hash::make($input["senha"]);
		$user = new Usuario();
		$user->fill($input);
		$user->save();
		return $user;
	}

	public function getUser($id){
		$user = self::find($id);
		if(is_null($user)){
			return false;
		}
		return $user;
	}

	public function updateUser($id){
		$user = self::find($id);
		if(is_null($user)){
			return false;
		}
		$input = Input::all();
		if(isset($input['senha'])){
			$input["senha"] = Hash::make($input["senha"]);
		}
		$user->fill($input);
		$user->save();
		return $user;
		
	}

	public function deleteUser($id){
		$user = self::find($id);
		if(is_null($user)){
			return false;
		}
		return $user->delete();
	}

}