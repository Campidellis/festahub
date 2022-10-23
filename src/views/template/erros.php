<?php

$mensagem = [];
$erros = [];

if($exception) {
    $mensagem = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];

    if(get_class($exception) === 'ValidaCamposException') {
        $erros[] = $exception->getErros();
    }
}

?>

<?php  if(count($mensagem) > 0) { ?>

    <div role="alert" class="my-3 alert alert-<?= $mensagem['type'] == 'error' ? 'danger' : 'success' ?>" >

        <?= $mensagem['message'] ?>

    </div>

<?php } ?>