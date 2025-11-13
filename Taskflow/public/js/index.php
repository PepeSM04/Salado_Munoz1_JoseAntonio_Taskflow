<?php

require_once '../app/functions.php';

$tasks = [
        [
                'title' => 'Completar la práctica de TaskFlow (UD2)',
                'completed' => true,
                'priority' => 'alta'
        ],
        [
                'title' => 'Hacer la compra semanal',
                'completed' => false,
                'priority' => 'media'
        ],
        [
                'title' => 'Llamar al cliente para reunión',
                'completed' => false,
                'priority' => 'alta'
        ],
        [
                'title' => 'Estudiar para el examen de Sistemas',
                'completed' => false,
                'priority' => 'media'
        ],
        [
                'title' => 'Pagar la factura de la luz',
                'completed' => true,
                'priority' => 'baja'
        ]
];

include '../app/views/header.php';

?>

<h2>Tareas Pendientes</h2>

<ul class="task-list">
    <?php
    foreach ($tasks as $task) {

        echo renderizarTarea($task);
    }
    ?>
</ul>

<?php
include '../app/views/footer.php';
?>
