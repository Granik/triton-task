<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models\event\logistics;
use yii\db\ActiveRecord;

/**
 * Description of LogisticFields
 *
 * @author Granik
 */
class LogisticFields extends ActiveRecord{
    public static function tableName() {
        return 'logistic_fields';
    }
}