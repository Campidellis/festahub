<?php

/**
 * Neste arquivo criamos constantes de arquivos e pastas que são necessários para nossa aplicacao
 * Uma vez que dermos include nesse arquivo, temos acesso a todas as models, views, controllers e o arquivo de database
 * que faz a conexão com o banco de dados
 * 
 */

// Pastas
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));

// Arquivos
require_once(realpath(dirname(__FILE__)) . '/database.php');
require_once(realpath(dirname(__FILE__)) . '/loader.php');
require_once(realpath(MODEL_PATH . '/Model.php'));