<?php

class Persona extends AppModel {
    public $name = 'Persona';
    public $hasAndBelongsToMany = 'Grupo';
    
    public $validate = array(
        'nombre' => array(
            'rule' => 'notEmpty'
        ),
        'apellido' => array(
            'rule' => 'notEmpty'
        )
    );
}