<?php global $view;

use Copper\Component\HTML\HTML;

$title = $view->dataBag->get('title', $view->appConfig->title);
$description = $view->dataBag->get('description', $view->appConfig->description);
$author = $view->dataBag->get('author', $view->appConfig->author);
$keywords = $view->dataBag->get('keywords', $view->appConfig->bag->get('keywords'));

?>

    <!doctype html>
    <html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $view->out($title) ?></title>
    <?= HTML::meta('description', $description) ?>
    <?= HTML::meta('author', $author) ?>
    <?= HTML::meta('keywords', $keywords) ?>
    <style>
        body {
            background-color: #fff;
            color: #24292e;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
            font-size: 16px;
            word-wrap: break-word;
        }

        code {
            font-family: SFMono-Regular, Consolas, Liberation Mono, Menlo, Courier, monospace;
            background-color: rgba(27, 31, 35, .05);
            border-radius: 3px;
            font-size: 85%;
            margin: 0;
            padding: .2em .4em
        }

        form {
            margin: 0;
        }
    </style>
    <style>
        .text_success {
            color: #007bff !important
        }

        .text_error {
            color: #dc3545 !important;
        }

        .text_info {
            color: #17a2b8 !important;
        }

        .text_warning {
            color: #ffc107 !important;
        }

        .bg_success {
            background: #007bff !important;
            color: #fff;
        }

        .bg_error {
            background: #dc3545 !important;
            color: #fff;
        }

        .bg_info {
            background: #17a2b8 !important;
        }

        .bg_warning {
            background: #ffc107 !important;
        }
    </style>
    <style>
        .content_wrapper {
            width: 1280px;
            margin: 0 auto;
        }

        table.collection {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        table.collection td, table.collection th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table.collection tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table.collection tr:not(:first-child):hover {
            background-color: #ddd;
        }

        table.collection th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            padding-right: 12px;
            background-color: #4CAF50;
            color: white;
        }

        table.collection th:not(.empty) {
            cursor: pointer;
        }

        table.collection th.sort.desc:after {
            content: "⇣";
            position: absolute;
        }

        table.collection th.sort.asc:after {
            content: "⇡";
            position: absolute;
        }
    </style>
</head>

<?php
if ($view->auth->check())
    echo 'Welcome, ' . $view->auth->user()->login;
?>