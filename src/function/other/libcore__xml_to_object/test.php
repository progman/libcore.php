//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__xml_to_object()
 */
(function()
{
	$__FUNCTION__='libcore__xml_to_object';
	$start = libcore__get_unixmicrotime();


	$requestXml = '';
	$requestXml .= '<?xml version="1.0" encoding="UTF-8"?>';
	$requestXml .= '<Order>';
	$requestXml .= '    <row>';
	$requestXml .= '        <id>771</id>';
	$requestXml .= '        <OrderParams>';
	$requestXml .= '            <Paramname>email</Paramname>';
	$requestXml .= '            <Val>user@domen.com</Val>';
	$requestXml .= '            <Paramname>phone</Paramname>';
	$requestXml .= '            <Val>1234567890</Val>';
	$requestXml .= '        </OrderParams>';
	$requestXml .= '    </row>';
	$requestXml .= '</Order>';

	$rc = libcore__xml_to_object($requestXml);
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	$response = $rc->get_value();

	if (@is_object($response) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (@is_object($response->{'row'}) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (@is_string($response->{'row'}->{'id'}) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}

	if (@is_object($response->{'row'}->{'OrderParams'}) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}

	if (@is_array($response->{'row'}->{'OrderParams'}->{'Paramname'}) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}

	if (@is_string($response->{'row'}->{'OrderParams'}->{'Paramname'}[0]) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}

	if (strcmp($response->{'row'}->{'OrderParams'}->{'Paramname'}[0], 'email') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}

	if (@is_string($response->{'row'}->{'OrderParams'}->{'Paramname'}[1]) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}

	if (strcmp($response->{'row'}->{'OrderParams'}->{'Paramname'}[1], 'phone') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		exit(1);
	}

	if (@is_array($response->{'row'}->{'OrderParams'}->{'Val'}) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step011\n";
		exit(1);
	}

	if (@is_string($response->{'row'}->{'OrderParams'}->{'Val'}[0]) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step012\n";
		exit(1);
	}

	if (strcmp($response->{'row'}->{'OrderParams'}->{'Val'}[0], 'user@domen.com') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step013\n";
		exit(1);
	}

	if (@is_string($response->{'row'}->{'OrderParams'}->{'Val'}[1]) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step014\n";
		exit(1);
	}

	if (strcmp($response->{'row'}->{'OrderParams'}->{'Val'}[1], '1234567890') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step015\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
