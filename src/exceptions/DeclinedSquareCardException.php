<?php

namespace Nikolag\Square\Exceptions;

use Nikolag\Square\Exception;

class DeclinedSquareCardException extends Exception {

	public function __construct($message = null, $code = 0, Exception $previous = null) 
	{
		parent::__construct($message, $code, $previous);
	}
	
}