<?php

$mensagem = [];
if($exception) {
    $mensagem = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];
}

?>

<?php  if(count($mensagem) > 0) { ?>

    <div role="alert" class="my-3 alert alert-<?= $mensagem['type'] == 'error' ? 'danger' : 'success' ?>" >

        <?= $mensagem['message'] ?>

    </div>

<?php } ?>