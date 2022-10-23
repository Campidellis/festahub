<?php

/**
 * Esse arquivo fica responsável por carregar nossas models e views
 * 
 */

function carregaModel($caminhoDaModel) {
    require(MODEL_PATH . "/{$caminhoDaModel}.php");
}

function carregaView($caminhoDaView, $params = []) {

    if(count($params) > 0) {

        foreach ($params as $key => $value) {
            if(strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }

    require(VIEW_PATH . "/{$caminhoDaView}.php");
}

function carregaTemplateView($caminhoDaView, $params = []) {

    if(count($params) > 0) {

        foreach ($params as $key => $value) {
            if(strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }

    require(TEMPLATE_PATH . "/header.php");
    require(TEMPLATE_PATH . "/menu.php");
    require(VIEW_PATH . "/{$caminhoDaView}.php");
    require(TEMPLATE_PATH . "/footer.php");
}