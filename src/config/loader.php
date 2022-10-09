<?php

/**
 * Esse arquivo fica responsável por carregar nossas classes
 * 
 */

function carregaModel($caminhoDaModel) {
    require(MODEL_PATH . "/{$caminhoDaModel}.php");
}

function carregaView($caminhoDaView) {
    require(VIEW_PATH . "/{$caminhoDaView}.php");
}