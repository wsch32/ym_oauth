kingcms qq��¼ by helong

2012��5��13��22:11:45
----------------

����ΪqqȺ��һ����д��kingcms qq��¼���,��ɵĺܴ�æ,���д���,�����,�ٷ��汾Ҳ�úܿ����,

http://t.qq.com/tohelong

tohelong@gmail.com

http://helong.org
----------------

ʹ��ǰ,���ȱ�������ļ�,��������û���ݾͺ��Ī��....

��һ��  ����qq/config.php �ļ� ,��д�����appid,appkey �����ַ:http://opensns.qq.com

        ��д��������ݿ� ��ַ �û��� ���� ���ݱ�������Ϣ

�ڶ���  ������ùٷ���css�ļ�,�ϴ�html_public����ļ������ϴ����ռ�
         
        ������޸ù�css ,��ο�����˵��


������  ����http//����/qq/sql.php ,��ʾ����openid�ֶγɹ�,�粻�ɹ�,����phpmyadmin�ȷ�ʽ�������ݿ��king_user�ֶ��в���openid�ֶ�,����Ϊchar(40) 


----------------

�ڶ�����,��Ҳ�����ֶ��޸���Ϣ,����:

templates/orange/include/head.php

43��  <a href="qq/callback.php?qq=login"><img src="qq/63X24.png" border='0' alt='�ãѣ��˺ŵ�¼' title='�ãѣ��˺ŵ�¼' /></a>

templates/orange/images/style.css

204��  #top .left{width:500px;text-align:left;line-height:25px;}
219��  #top .right{text-align:right;width:470px;}

library/user.class.php

42��			$user=array('userpass'=>'x','openid'=>'xx');
45��		if(empty($user))  $user=array('userpass'=>'x','openid'=>'xx');
49��	  if (md5($user['userpass'])==$cookiePass || $ischeck==false || md5($user['openid'])==$cookiePass) {


�����ݿ��king_user�ֶ��в���openid�ֶ�,����Ϊchar(40) 
$sql = "ALTER TABLE 'king_user' ADD 'openid' CHAR(40) NOT NULL AFTER 'userid'";


--------------
Ϊ��ֹ����,���˺ź��������һ��randֵ,���������޸�
