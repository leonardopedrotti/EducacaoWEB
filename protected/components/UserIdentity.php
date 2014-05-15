<?php

class UserIdentity extends CUserIdentity
{
	/**
	 * Autenticação do Usuário
	 */
	public function authenticate()
	{
		$dataProvider = new CActiveDataProvider('tusuarios');
		$iterator = new CDataProviderIterator($dataProvider);
		foreach($iterator as $tusuarios) {
			if($this->username == ($tusuarios->login)){
				if($this->password == ($tusuarios->senha)){
					
					session_start();
					$_SESSION['usuario'] = $tusuarios;
					$_SESSION['logado'] = true;

					$this->errorCode=self::ERROR_NONE;
					return true;
				}
			}
		}

		return false;
	}
}