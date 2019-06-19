<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;
use app\models\LogisticInfo;
/**
 * Description of AddLogisticsForm
 *
 * @author Granik
 */
class LogisticsForm extends LogisticInfo {
    
    public function rules() {
        return [
            [['event_id', 'type_id', 'to_means', 'between_means', 'home_means'], 'integer'],
            [['persons', 'type_id'], 'required'],
            [['persons'], 'string', 'min' => 3, 'max' => 70],
            [['to_date', 'between_date', 'home_date', 'living_from', 'living_to'], 'date', 'format' => 'yyyy-MM-dd'],
            [['to_time', 'between_time', 'home_time', 'to_arrival' , 'between_arrival', 'home_arrival'], 'string', 'min' => 5, 'max' => 5],
            [['to_time', 'between_time', 'home_time', 'to_arrival', 'between_arrival', 'home_arrival'], 'trim']
        ];
    }
    
    public function attributeLabels() {
        return [
            'event_id' => '',
            'type_id' => 'Тип',
            'persons' => 'Имена',
            'to_means' => 'Дорога туда',
            'to_date' => 'Туда (дата выезда)',
            'to_time' => 'Туда (время выезда)',
            'to_arrival' => 'Туда (прибытие)',
            'between_arrival' => 'Между городами (прибытие)',
            'home_arrival' => 'Домой (прибытие)',
            'living_from' => 'Проживание с',
            'living_to' => 'Проживание по',
            'between_means' => 'Между городами',
            'between_date' => 'Между городами (дата выезда)',
            'between_time' => 'Между городами (время выезда)',
            'home_means' => 'Домой',
            'home_date' => 'Домой (дата выезда)',
            'home_time' => 'Домой (время выезда)',
            ];
    }
    
    public function updateData($id) {
        if(!$this->validate()) {
            throw new \yii\base\ErrorException(print_r($this->errors));
        }
        $row = $this->findOne($id);
        $row->persons = $this->persons;
        $row->to_means = $this->to_means;
        $row->to_date = $this->to_date;
        $row->to_time = $this->to_time;
        $row->to_arrival = $this->to_arrival;
        $row->between_arrival = $this->between_arrival;
        $row->home_arrival = $this->home_arrival;
        $row->living_from = $this->living_from;
        $row->living_to = $this->living_to;
        $row->between_means = $this->between_means;
        $row->between_date = $this->between_date;
        $row->between_time = $this->between_time;
        $row->home_means = $this->home_means;
        $row->home_date = $this->home_date;
        $row->home_time = $this->home_time;
        
        return $row->save() ? true : false;
    }
}
