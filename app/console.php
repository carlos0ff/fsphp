<?php

declare(strict_types=1);

/**
 * Projeto Developer Console PHP
 * @author José Carlos
 *
 * Document content and charset
 */
header("Content-Type: text/html; charset=utf-8");

/**
 * [ PHP Basic Config ] Configurações básicas do sistema
 * Configura o timezone da aplicação
 * Define a função para output de erros.
 */
date_default_timezone_set("America/Sao_Paulo");
set_error_handler("errorHandler");

/**
 * [ php config ] Altera modo de erro e exibição do var_dump.
 */
ini_set("display_errors", 1);
ini_set("error_reporting", E_ALL);
ini_set('xdebug.overload_var_dump', 1);

/**
 * [ interface ] Style, icon and logo
 */
echo "<link rel='stylesheet' href='../../app/console.css'/>",
"<link rel='icon' href='https://www.upinside.com.br/uploads/fsphpicon.png'/>",
"<img class='logofsphp' src='https://www.upinside.com.br/uploads/fsphp.png'/>";

/**
 * [ Title Function ] Cria o título do arquivo para o browser
 */
function pageTitle(string $title): void
{
    echo "<title>{$title} | Developer Console PHP</title>";
}

/**
 * [ Debug session ] Cria uma linha de sessão para exemplos
 * @param string $section Nome da sessão
 * @param int|string $line Número da linha
 * @param string|null $color Cor de destaque
 */
function debugSession(string $section, $line, ?string $color = null): void
{
    $lineInfo  = !empty($line) ? " <span class='line-session'>| Linha {$line}</span>" : "";
    $session   = !empty($section) ? "[ {$section}{$lineInfo} ]" : "";
    $bgColor   = !empty($color) ? "var(--{$color})" : "";

    echo "<div class='code line' style='background-color: {$bgColor}'>{$session}</div>";
}

/**
 * [ Default errors ] Função para exibir erros do PHP
 */
function errorHandler(int $error, string $message, string $file, int $line): void
{
    $color = ($error === E_USER_ERROR ? "red" : "yellow");

    echo "<div class='trigger' style='border-color: var(--{$color}); color:var(--{$color});'>
            [ Linha {$line} ] {$message}
            <small>{$file}</small>
          </div>";
}

/**
 * [ App dump ] Função para exibir arrays e objetos com estilo
 * @param mixed $data
 * @param string|null $label
 * @return void
 */
function dump(mixed $data, string $label = null): void
{
    $label = $label ? "<strong>{$label}:</strong><br>" : "";
    echo "<div class='xdebug-var-dump'>";
    echo $label;
    echo "<pre>", htmlspecialchars(print_r($data, true)), "</pre>";
    echo "</div>";
}
