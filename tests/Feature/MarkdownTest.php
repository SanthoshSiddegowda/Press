<?php

namespace santhosh\Press\Tests;

use Orchestra\Testbench\TestCase;

class markdownTest extends TestCase
{
	
	/** @test */
	public function simple_markdown_is_parse()
	{
			
		$this->assertEquals("<h1>Hello me</h1>",\santhosh\Press\MarkdownParser::parse('# Hello me'));
							
	}
}
