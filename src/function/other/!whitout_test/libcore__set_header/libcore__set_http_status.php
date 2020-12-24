//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * set header
 * \param[in] http_status, see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes
 * \param[in] http_version
 * \return nothing
 */
function libcore__set_http_status($http_status, $http_version = "HTTP/1.0")
{
	settype($http_status, "integer");


	$http_status_list =
	[
		(object)[ 'key'=> 100, 'val'=> "Continue" ],
		(object)[ 'key'=> 101, 'val'=> "Switching Protocols" ],
		(object)[ 'key'=> 102, 'val'=> "Processing" ],
		(object)[ 'key'=> 103, 'val'=> "Early Hints" ],


		(object)[ 'key'=> 200, 'val'=> "OK" ],
		(object)[ 'key'=> 201, 'val'=> "Created" ],
		(object)[ 'key'=> 202, 'val'=> "Accepted" ],
		(object)[ 'key'=> 203, 'val'=> "Non-Authoritative Information" ],
		(object)[ 'key'=> 204, 'val'=> "No Content" ],
		(object)[ 'key'=> 205, 'val'=> "Reset Content" ],
		(object)[ 'key'=> 206, 'val'=> "Partial Content" ],
		(object)[ 'key'=> 207, 'val'=> "Multi-Status" ],
		(object)[ 'key'=> 208, 'val'=> "Already Reported" ],
		(object)[ 'key'=> 226, 'val'=> "IM Used" ],


		(object)[ 'key'=> 300, 'val'=> "Multiple Choices" ],
		(object)[ 'key'=> 301, 'val'=> "Moved Permanently" ],
		(object)[ 'key'=> 302, 'val'=> "Found" ],
		(object)[ 'key'=> 303, 'val'=> "See Other" ],
		(object)[ 'key'=> 304, 'val'=> "Not Modified" ],
		(object)[ 'key'=> 305, 'val'=> "Use Proxy" ],
		(object)[ 'key'=> 306, 'val'=> "Switch Proxy" ],
		(object)[ 'key'=> 307, 'val'=> "Temporary Redirect" ],
		(object)[ 'key'=> 308, 'val'=> "Permanent Redirect" ],


		(object)[ 'key'=> 400, 'val'=> "Bad Request" ],
		(object)[ 'key'=> 401, 'val'=> "Unauthorized" ],
		(object)[ 'key'=> 402, 'val'=> "Payment Required" ],
		(object)[ 'key'=> 403, 'val'=> "Forbidden" ],
		(object)[ 'key'=> 404, 'val'=> "Not Found" ],
		(object)[ 'key'=> 405, 'val'=> "Method Not Allowed" ],
		(object)[ 'key'=> 406, 'val'=> "Not Acceptable" ],
		(object)[ 'key'=> 407, 'val'=> "Proxy Authentication Required" ],
		(object)[ 'key'=> 408, 'val'=> "Request Timeout" ],
		(object)[ 'key'=> 409, 'val'=> "Conflict" ],
		(object)[ 'key'=> 410, 'val'=> "Gone" ],
		(object)[ 'key'=> 411, 'val'=> "Length Required" ],
		(object)[ 'key'=> 412, 'val'=> "Precondition Failed" ],
		(object)[ 'key'=> 413, 'val'=> "Payload Too Large" ],
		(object)[ 'key'=> 414, 'val'=> "URI Too Long" ],
		(object)[ 'key'=> 415, 'val'=> "Unsupported Media Type" ],
		(object)[ 'key'=> 416, 'val'=> "Range Not Satisfiable" ],
		(object)[ 'key'=> 417, 'val'=> "Expectation Failed" ],
		(object)[ 'key'=> 418, 'val'=> "I'm a teapot" ],
		(object)[ 'key'=> 421, 'val'=> "Misdirected Request" ],
		(object)[ 'key'=> 422, 'val'=> "Unprocessable Entity" ],
		(object)[ 'key'=> 423, 'val'=> "Locked" ],
		(object)[ 'key'=> 424, 'val'=> "Failed Dependency" ],
		(object)[ 'key'=> 425, 'val'=> "Too Early" ],
		(object)[ 'key'=> 426, 'val'=> "Upgrade Required" ],
		(object)[ 'key'=> 428, 'val'=> "Precondition Required" ],
		(object)[ 'key'=> 429, 'val'=> "Too Many Requests" ],
		(object)[ 'key'=> 431, 'val'=> "Request Header Fields Too Large" ],
		(object)[ 'key'=> 451, 'val'=> "Unavailable For Legal Reasons" ],


		(object)[ 'key'=> 500, 'val'=> "Internal Server Error" ],
		(object)[ 'key'=> 501, 'val'=> "Not Implemented" ],
		(object)[ 'key'=> 502, 'val'=> "Bad Gateway" ],
		(object)[ 'key'=> 503, 'val'=> "Service Unavailable" ],
		(object)[ 'key'=> 504, 'val'=> "Gateway Timeout" ],
		(object)[ 'key'=> 505, 'val'=> "HTTP Version Not Supported" ],
		(object)[ 'key'=> 506, 'val'=> "Variant Also Negotiates (RFC 2295)" ],
		(object)[ 'key'=> 507, 'val'=> "Insufficient Storage (WebDAV; RFC 4918)" ],
		(object)[ 'key'=> 508, 'val'=> "Loop Detected (WebDAV; RFC 5842)" ],
		(object)[ 'key'=> 510, 'val'=> "Not Extended (RFC 2774)" ],
		(object)[ 'key'=> 511, 'val'=> "Network Authentication Required (RFC 6585)" ]
	];


	$note = "";
    foreach ($http_status_list as $status)
	{
		if ($status->{'key'} === $http_status)
		{
			$note = $status->{'val'};
			break;
		}
	}


	header($http_version." ".$http_status." ".$note);
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
