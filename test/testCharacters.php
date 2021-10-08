<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';
require_once dirname(__DIR__) . '/characters.php';

use PHPUnit\Framework\TestCase;

class TestCharacters extends TestCase
{
    public function testRevCharacters() {
        $this->assertContains('Тевирп! Онвад ен ьсиледив.', [preg_replace_callback('/(\w+)/u', ['characters', 'revertCharacters'], "Привет! Давно не виделись.")]);
    }
}