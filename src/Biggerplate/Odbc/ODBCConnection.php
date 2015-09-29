<?php
namespace Biggerplate\Odbc;

use Illuminate\Database\Connection;
use Illuminate\Database\Query\Grammars\SqlServerGrammar;

class ODBCConnection extends Connection {

	/**
	 * Get the default query grammar instance.
	 *
	 * @return Illuminate\Database\Query\Grammars\Grammars\Grammar
	 */
	protected function getDefaultQueryGrammar()
	{
		return $this->withTablePrefix( new SqlServerGrammar );
	}

	/**
	 * Get the default schema grammar instance.
	 *
	 * @return Illuminate\Database\Schema\Grammars\Grammar
	 */
	protected function getDefaultSchemaGrammar()
	{
		return $this->withTablePrefix( new ODBCSchemaGrammar );
	}
}