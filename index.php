<?php
require_once 'characters.php';

echo preg_replace_callback('/(\w+)/u', ['characters', 'revertCharacters'], "Привет! Давно не виделись."); // Тевирп! Онвад ен ьсиледив.