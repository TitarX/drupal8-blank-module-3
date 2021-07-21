<?php

namespace Drupal\less_css\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class LessCssConfigForm extends FormBase
{
	public function buildForm(array $form, FormStateInterface $form_state)
	{
		$form['#method'] = 'post';
		
		$form['regenerate-checkbox'] = array(
			'#type' => 'checkbox',
			'#title' => 'Регенировать файлы CSS',
			'#description' => 'Установите флажок, если требуется регенерировать файлы CSS при каждом запросе страниц.',
			'#default_value' => 1
		);
		
		$form['actions']['submit'] = array(
			'#type' => 'submit',
			'#value' =>'Сохранить'
		);
		
		return $form;
	}
	
	public function getFormId()
	{
		return 'less_css_config_form';
	}
	
	public function validateForm(array &$form, FormStateInterface $form_state)
	{
		/* Пример проверки поля title >>>
		$title = $form_state->getValue('title');
		$is_number = preg_match("/[\d]+/", $title, $match);

		if ($is_number > 0)
		{
			$form_state->setErrorByName('title', $this->'Строка содержит цифру');
		}
		<<< Пример проверки поля title */
	}
	
	public function submitForm(array &$form, FormStateInterface $form_state)
	{
		// Действие по сабмиту
	}
}
