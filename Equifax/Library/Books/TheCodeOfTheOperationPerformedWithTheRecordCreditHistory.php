<?php

namespace Equifax\ReferenceBooks\Books;

use \Equifax\ReferenceBooks\Books;

/**
 * Класс TheCodeOfTheOperationPerformedWithTheRecordCreditHistory
 * @version 0.0.1
 * @package Equifax\ReferenceBooks\Books\TheCodeOfTheOperationPerformedWithTheRecordCreditHistory
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
class TheCodeOfTheOperationPerformedWithTheRecordCreditHistory
{

    use Books;

    /**
     * Значение по умолчанию
     * @var string
     */
    private static string $default = 'B';

    /**
     * Коллекция возможных значений
     * @var array
     */
    private static array $data = [
        'Источник направляет кредитную историю о субъекте или его отдельном обязательстве впервые' => 'A',
        'Кредитная история изменяется или дополняется' => 'B',
        'Исправляется ошибка в кредитной информации или представляется непринятая бюро кредитная информация' => 'C',
        'Аннулируются сведения' => 'D'
    ];

}
