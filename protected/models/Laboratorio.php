<?php

class Laboratorio extends CActiveRecord
{
	public function getDbConnection()
	{
		return Yii::app()->db;
	}
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
	public function tableName()
	{
		return 'laboratorios';
	}

	public function createLaboratory($idLaboratory = null, $dataForm = null)
	{

		$add					=  new Laboratorio;
		$add->laboratorio       =  'Laboratorio 55';
		if ($add->save()) {
			$rs = [
				'status'	=>	'success',
				'msg'		=>	'Procesado correctamente',
				'data'		=>	$dataForm
			];
		}else{
			$rs = [
				'status'	=>	'error',
				'msg'		=>	'La información no fue almacenada',
			];
		}

		return $rs;
	}
}
