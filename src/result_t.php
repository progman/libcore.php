//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * result object
 */
class result_t
{
	private $flag_skip;
	private $err_code;
	private $msg;
	private $msg_private;
	private $arg_name;
	private $file_name;
	private $line_number;
	private $function_name;
	private $value;
	private $flag_value;

	function get_object()
	{
		$result                = new stdClass();
		$result->err_code      = $this->get_err_code();
		$result->msg           = $this->get_msg();
		$result->msg_private   = $this->get_msg_private();
		$result->arg_name      = $this->get_arg_name();
		$result->file_name     = $this->get_file_name();
		$result->line_number   = $this->get_line_number();
		$result->function_name = $this->get_function_name();
		return $result;
	}

	function __construct($function_name = "unknown", $file_name = "unknown", $line_number = "unknown") // work in php5 and php7
	{
		$this->set_err(1, "unknown");

		$this->file_name     = $file_name;
		$this->line_number   = $line_number;
		$this->function_name = $function_name;

		$this->value         = null;
		$this->flag_value    = false;

		$this->flag_skip     = false;
	}
/*
	function copy($err_code, $msg, $msg_private, $arg_name, $file_name, $function_name, $value)
	{
		$this->set_err($err_code, $msg, $msg_private, $arg_name);

		$this->file_name     = $file_name;
		$this->function_name = $function_name;

		$this->set_value($value);
	}
*/
	function is_ok()
	{
		return ($this->err_code === 0) ? true : false;
	}

	function set_err($err_code = 1, $msg = "unknown", $msg_private = "", $arg_name = "")
	{
		$this->err_code     = $err_code;
		$this->msg          = $msg;
		$this->msg_private  = $msg_private;
		$this->arg_name     = $arg_name;

		if ($this->msg_private == '')
		{
			$this->msg_private = $this->msg;
		}
	}

	function set_ok()
	{
		$this->set_err(0, "ok");
	}

	function get_err_code()
	{
		return $this->err_code;
	}

	function get_msg()
	{
		return $this->msg;
	}

	function get_msg_private()
	{
		return $this->msg_private;
	}

	function get_arg_name()
	{
		return $this->arg_name;
	}

	function get_file_name()
	{
		return $this->file_name;
	}

	function get_line_number()
	{
		return $this->line_number;
	}

	function get_function_name()
	{
		return $this->function_name;
	}

	function is_value()
	{
		return $this->flag_value;
	}

	function set_value($value)
	{
		$this->value = $value;
		$this->flag_value = true;
	}

	function get_value()
	{
		return $this->value;
	}

	function is_skip()
	{
		return $this->flag_skip;
	}

	function set_skip($flag_skip = true)
	{
		$this->flag_skip = $flag_skip;
	}
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
