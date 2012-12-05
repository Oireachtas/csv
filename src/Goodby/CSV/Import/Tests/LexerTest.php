<?php

namespace Goodby\CSV\Import\Tests;

use Mockery as m;

/**
 * unit test for CSV Lexer
 *
 * @author suin
 */
class LexerTest extends \PHPUnit_Framework_TestCase
{
	public function testInterface()
	{
        $lexer       = m::mock('\Goodby\CSV\Import\Protocol\LexerInterface');
        $interpreter = m::mock('\Goodby\CSV\Import\Protocol\InterpreterInterface');

        $path = 'dummy.csv';

        $lexer->shouldReceive('parse')->with($path, $interpreter);

        $lexer->parse($path, $interpreter);
	}
}