<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models\event\finance;
use yii\db\ActiveRecord;

/**
 * Description of financeFields
 *
 * @author Granik
 */
class FinanceFields extends ActiveRecord {
    public static function tableName() {
        return 'finance_fields';
    }
//    public function getInfo() {
//        return $this->hasOne(FinanceInfo::className(), ['type_id' => 'id']);
//    }
}