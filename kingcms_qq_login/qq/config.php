<?php
//$appid = '100266408';
$appid = '100270662';//��дappid
//$appkey = '682afb633bec5b7322f1c507e15af64b';
$appkey = 'c18cbb62664a5900cd4f2e3c8c5334bf';//��дappkey

$db_host='localhost';  //���ݿ��ַ
$db_user='root';//���ݿ��û���
$db_pass='root';//���ݿ�����
$db_name='hunchun123'; //���ݿ�����

$link=mysql_connect($db_host,$db_user,$db_pass);//�������ݿ�
if(!$link){echo "���ݿ����Ӵ���";mysql_error();}
mysql_select_db($db_name,$link);//ѡ�����ݿ�
mysql_query("SET NAMES UTF8");