<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.1.1.343
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Отправка Форма Домашняя',
	'heading' => 'Отправка новой формы',
	'success_redirect' => 'spasibo.html',
	'resources' => array(
		'checkbox_checked' => 'Отмечено',
		'checkbox_unchecked' => 'Флажок не установлен',
		'submitted_from' => 'Формы, отправленные с веб-сайта: %s',
		'submitted_by' => 'IP-адрес посетителя: %s',
		'too_many_submissions' => 'Недопустимо высокое количество отправок с этого IP-адреса за последнее время',
		'failed_to_send_email' => 'Не удалось отправить сообщение эл. почты',
		'invalid_reCAPTCHA_private_key' => 'Недействительный закрытый ключ reCAPTCHA.',
		'invalid_field_type' => 'Неизвестный тип поля \'%s\'.',
		'invalid_form_config' => 'Недопустимая конфигурация поля \"%s\".',
		'unknown_method' => 'Неизвестный метод запроса сервера'
	),
	'email' => array(
		'from' => '',
		'to' => ''
	),
	'fields' => array(
		'custom_U223' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Имя',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Имя\' не может быть пустым.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Электронная почта',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Электронная почта\' не может быть пустым.',
				'format' => 'Поле \'Электронная почта\' содержит недействительное сообщение эл. почты.'
			)
		),
		'custom_U271' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Сотовый телефон',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Сотовый телефон\' не может быть пустым.'
			)
		)
	)
);

process_form($form);
?>
