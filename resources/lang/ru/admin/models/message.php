<?php

return array(

    'does_not_exist' => 'Модель не существует.',
    'no_association' => 'НЕТ СВЯЗАННОЙ МОДЕЛИ.',
    'no_association_fix' => 'Это странно и ужасно сломает вещи. Отредактируйте этот актив сейчас, чтобы назначить ему модель.',
    'assoc_users'	 => 'Данная модель связана с одним или несколькими активами, и не может быть удалена. Удалите либо измените связанные активы. ',


    'create' => array(
        'error'   => 'Модель не была создана, повторите еще раз.',
        'success' => 'Модель успешно создана.',
        'duplicate_set' => 'Модель с таким именем, производителем и номером уже существует.',
    ),

    'update' => array(
        'error'   => 'Невозможно обновить Модель, повторите еще раз',
        'success' => 'Модель успешно обновлена.',
    ),

    'delete' => array(
        'confirm'   => 'Вы уверены, что хотите удалить данную модель актива?',
        'error'   => 'При удалении модели возникла ошибка. Повторите еще раз.',
        'success' => 'Модель успешно удалена.'
    ),

    'restore' => array(
        'error'   		=> 'Модель не была восстановлена, повторите попытку',
        'success' 		=> 'Модель успешно восстановлена.'
    ),

    'bulkedit' => array(
        'error'   		=> 'Никаких изменений нет, поэтому ничего не обновлено.',
        'success' 		=> 'Model successfully updated. |:model_count models successfully updated.',
        'warn'          => 'You are about to update the properies of the following model: |You are about to edit the properties of the following :model_count models:',

    ),

    'bulkdelete' => array(
        'error'   		    => 'Ни одна модель не выбрана, поэтому нечего удалить.',
        'success' 		    => 'Model deleted!|:success_count models deleted!',
        'success_partial' 	=> 'Удалено : success_count моделей(ль), однако: fail_count моделей не удалены, потому что они всё ещё имеют связанные с ними активы.'
    ),

);
