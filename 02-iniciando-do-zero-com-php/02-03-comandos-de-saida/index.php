<?php

declare(strict_types=1);

require __DIR__ . '/../../app/console.php'; // antes era fullstackphp/fsphp.php
pageTitle("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
debugSession("echo", __LINE__);

echo "<h3>Olá Mundo!</h3>";
echo "<p>Olá ", "Mundo", "!", "</p>";

$hello = "Olá";
$world = "Mundo";

echo "<p>{$hello} {$world}!</p>";

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
debugSession("print", __LINE__,);



/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
debugSession("print_r", __LINE__);


/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
debugSession("printf", __LINE__);


/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
debugSession("vprintf", __LINE__);


/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
debugSession("var_dump", __LINE__);

var_dump([$_SERVER, "Server information"]);

echo "<br />";

dump($_SERVER, "Server information");