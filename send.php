<?php
// проверка на спам - просто прерываем выполнение кода, при желании можно и сообщение спамерам вывести
//if( isset( $_POST['comment'] ) || isset( $_POST['message'] ) )
//	exit;
 
// подключаем WP, можно конечно обойтись без этого, но зачем?
require( dirname(__FILE__) . '/wp-load.php');
 
// следующий шаг - проверка на обязательные поля, у нас это емайл, имя и сообщение
if( isset( $_POST['name'] )
  && isset( $_POST['email'] ) && is_email( $_POST['email'] ) // is_email() - встроенная функция WP для проверки корректности емайлов
  && isset( $_POST['soobschenie'] ) ) {
 
  $site_email = "site@top-instinkt.kl.com.ua";
	$headers = array(
		"Content-type: text/html; charset=utf-8",
		//"From: " . $_POST['name'] . " <" . $_POST['email'] . ">"
    "From: " . $site_email . " <" . $site_email . ">"
	);
  $current_url = $_POST['current_url'];
  
  $admin_email = 'top_instinkt@ukr.net';
  //$admin_email = 'dmvoloshin@gmail.com';
  
  $message = '<p>имя: '.$_POST['name'].'</p><p>email:'.$_POST['email'].'<p>'.$_POST['soobschenie'].'</p>';
  
  //if( wp_mail( $admin_email, 'Сообщение с сайта', wpautop( $_POST['soobschenie'] ), $headers ) ) {
    if( wp_mail( $admin_email, 'Сообщение с сайта', wpautop( $message ), $headers ) ) {
		//header('Location:' . site_url('/contact?msg=success') );
    header('Location:' . $current_url.'?msg=success' );
		exit;
	}
 
 
}
 
header('Location:' . site_url('/contact?msg=error') );
  //header('Location:' . $current_url );
exit;