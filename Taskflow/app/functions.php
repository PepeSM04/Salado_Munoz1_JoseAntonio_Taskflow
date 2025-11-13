<?php
function obtenerClasePrioridad($prioridad)
{
    switch ($prioridad) {

        case 'alta':
            return ' priority-alta';

            case 'media':
                return ' priority-media';

        case 'baja':
            return ' priority-baja';

            default:
                return '';
    }
}

function renderizarTarea($tarea)
{
    $clasesTarea = 'task-item';

    if ($tarea['completed']) {
        $clasesTarea .= ' completed';
    }

    $clasesTarea .= obtenerClasePrioridad($tarea['priority']);

    $titulo = htmlspecialchars($tarea['title']);

    return '<li class="' . $clasesTarea . '">' . $titulo . '</li>';
}

?>
