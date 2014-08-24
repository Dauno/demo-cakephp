<?php

class Grupo extends AppModel {
    public $name = 'Grupo';
    public $hasAndBelongsToMany = 'Persona';
    
    public $validate = array(
        'nombre' => array(
            'rule' => 'notEmpty'
        )
    );
}