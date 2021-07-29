<?php 

namespace Hcode;

class Model {

	private $values = [];// aqui passa todos os dados e valores dos campos

	public function __call($name, $args)// __call recebe parametros

	{
        //detectar se é um metodo get ou set
		$method = substr($name, 0, 3);
		$fieldName = substr($name, 3, strlen($name));//strlen para contar e conta a parti da terceira posição

		switch ($method)
		{

			case "get":
				return (isset($this->values[$fieldName])) ? $this->values[$fieldName] : NULL;
			break;

			case "set":
				$this->values[$fieldName] = $args[0];
			break;

		}

	}

	public function setData($data = array())
	{

		foreach ($data as $key => $value) {
			
			$this->{"set".$key}($value);

		}

	}

	public function getValues()
	{

		return $this->values;

	}

}

 ?>