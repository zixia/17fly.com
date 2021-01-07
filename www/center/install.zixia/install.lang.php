<?php

define('UC_VERNAME', '中文版');

$lang = array(

	'message_title' => '提示信息',
	'error_message' => '错误信息',
	'message_return' => '返回',
	'return' => '返回',
	'install_wizard' => '安装向导',
	'config_nonexistence' => '配置文件不存在',
	'short_open_tag_invalid' => '对不起，请将 php.ini 中的 short_open_tag 设置为 On，否则无法继续安装。',
	'redirect' => '浏览器会自动跳转页面，无需人工干预。<br>除非当您的浏览器没有自动跳转时，请点击这里',

	'database_errno_2003' => '无法连接数据库，请检查数据库是否启动，数据库服务器地址是否正确',
	'database_errno_1044' => '无法创建新的数据库，请检查数据库名称填写是否正确',
	'database_errno_1045' => '无法连接数据库，请检查数据库用户名或者密码是否正确',
	'database_errno_1064' => 'SQL 语法错误',

	'dbpriv_createtable' => '没有CREATE TABLE权限，无法继续安装',
	'dbpriv_insert' => '没有INSERT权限，无法继续安装',
	'dbpriv_select' => '没有SELECT权限，无法继续安装',
	'dbpriv_update' => '没有UPDATE权限，无法继续安装',
	'dbpriv_delete' => '没有DELETE权限，无法继续安装',
	'dbpriv_droptable' => '没有DROP TABLE权限，无法安装',

	'db_not_null' => '数据库中已经安装过 UCenter, 继续安装会清空原有数据。',
	'db_drop_table_confirm' => '继续安装会清空全部原有数据，您确定要继续吗?',

	'writeable' => '可写',
	'unwriteable' => '不可写',
	'old_step' => '上一步',
	'new_step' => '下一步',

	'database_errno_2003' => '无法连接数据库，请检查数据库是否启动，数据库服务器地址是否正确',
	'database_errno_1044' => '无法创建新的数据库，请检查数据库名称填写是否正确',
	'database_errno_1045' => '无法连接数据库，请检查数据库用户名或者密码是否正确',

	'step1_title' => '开始安装',
	'step1_desc' => 'UCenter 文件目录权限检查',
	'step1_file' => '目录文件',
	'step1_need_status' => '所需状态',
	'step1_status' => '当前状态',
	'step1_unwriteable' => '请将以上目录权限全部设置为 777，然后进行下一步安装。',

	'step2_title' => '填写相关配置',
	'step2_desc' => 'UCenter 数据库配置',
	'step2_dbhost' => '数据库服务器',
	'step2_dbuser' => '数据库用户名',
	'step2_dbpw' => '数据库密码',
	'step2_dbname' => '数据库名',
	'step2_tablepre' => '表名前缀',

	'step3_error_dbname_empty' => '数据库名为空',
	'step3_title' => '填写相关配置',
	'step3_founder' => '创始人用户名',
	'step3_desc' => '设置 UCenter 创始人密码',
	'step3_comment' => '<li>创始人用户名为系统内置，不可修改。</li><li>请牢记 UCenter 创始人密码，凭该密码登陆 UCenter。</li>',
	'step3_username' => '管理员帐号',
	'step3_password' => '创始人密码',
	'step3_repeatpw' => '重复创始人密码',

	'step4_error_password_invalid' => '两次输入密码不一致，请返回。',
	'step4_error_config_unwriteable1' => 'UCenter 的配置文件 ',
	'step4_error_config_unwriteable2' => ' 不可写，请返回设置为可写状态。',
	'step4_title' => '最后一步',
	'step4_desc' => '创建更新 UCenter 数据库',

	'install_in_processed' => '正在安装...',
	'install_succeed' => '安装用户中心成功，点击进入下一步',
	'license' => '<div class="license"><h1>中文版授权协议 适用于中文用户</h1>

<p>版权所有 (c) 2001-2008，康盛创想（北京）科技有限公司保留所有权利。</p>

<p>感谢您选择 UCenter 产品。希望我们的努力能为您提供一个高效快速和强大的站点解决方案。</p>

<p>康盛创想（北京）科技有限公司为 UCenter 产品的开发商，依法独立拥有 UCenter 产品著作权。康盛创想（北京）科技有限公司网址为 http://www.comsenz.com，UCenter 官方网站网址为 http://www.discuz.com，UCenter 官方讨论区网址为 http://www.discuz.net。</p>

<p>UCenter 著作权已在中华人民共和国国家版权局注册，著作权受到法律和国际公约保护。使用者：无论个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，在理解、同意、并遵守本协议的全部条款后，方可开始使用 UCenter 软件。</p>

<p>本授权协议适用且仅适用于 UCenter 1.x 版本，康盛创想（北京）科技有限公司拥有对本授权协议的最终解释权。</p>

<h3>I. 协议许可的权利</h3>
<ol>
<li>您可以在完全遵守本最终用户授权协议的基础上，将本软件应用于非商业用途，而不必支付软件版权授权费用。</li>
<li>您可以在协议规定的约束和限制范围内修改 UCenter 源代码(如果被提供的话)或界面风格以适应您的网站要求。</li>
<li>您拥有使用本软件构建的网站中全部会员资料、文章及相关信息的所有权，并独立承担与文章内容的相关法律义务。</li>
<li>获得商业授权之后，您可以将本软件应用于商业用途，同时依据所购买的授权类型中确定的技术支持期限、技术支持方式和技术支持内容，自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。</li>
</ol>

<h3>II. 协议规定的约束和限制</h3>
<ol>
<li>未获商业授权之前，不得将本软件用于商业用途（包括但不限于企业网站、经营性网站、以营利为目或实现盈利的网站）。购买商业授权请登陆http://www.discuz.com参考相关说明，也可以致电8610-51657885了解详情。</li>
<li>不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。</li>
<li>无论如何，即无论用途如何、是否经过修改或美化、修改程度如何，只要使用 UCenter 的整体或任何部分，未经书面许可，页面页脚处的 UCenter 名称和康盛创想（北京）科技有限公司下属网站（http://www.comsenz.com、http://www.discuz.com 或 http://www.discuz.net） 的链接都必须保留，而不能清除或修改。</li>
<li>禁止在 UCenter 的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。</li>
<li>如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。</li>
</ol>

<h3>III. 有限担保和免责声明</h3>
<ol>
<li>本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。</li>
<li>用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。</li>
<li>康盛创想（北京）科技有限公司不对使用本软件构建的网站中的文章或信息承担责任。</li>
</ol>

<p>有关 UCenter 最终用户授权协议、商业授权与技术服务的详细内容，均由 UCenter 官方网站独家提供。康盛创想（北京）科技有限公司拥有在不事先通知的情况下，修改授权协议和服务价目表的权力，修改后的协议或价目表对自改变之日起的新授权用户生效。</p>

<p>电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始安装 UCenter，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。</p></div>',

	'uc_installed' => '您已经安装过 UCenter，如果需要重新安装，请删除 data/install.lock 文件',
	'i_agree' => '我已仔细阅读，并同意上述条款中的所有内容',
	'supportted' => '支持',
	'unsupportted' => '不支持',
	'max_size' => '支持/最大尺寸',
	'project' => '项目',
	'ucenter_required' => 'UCenter 所需配置',
	'ucenter_best' => 'UCenter 最佳',
	'curr_server' => '当前服务器',
	'env_check' => '环境检查',
	'os' => '操作系统',
	'unlimit' => '不限制',
	'version' => '版本',
	'attach_upload' => '附件上传',
	'allow' => '允许',
	'disk_free' => '磁盘空间',
	'priv_check' => '目录、文件权限检查',
	'func_depend' => '函数依赖性检查',
	'func_name' => '函数名称',
	'check_result' => '检查结果',
	'suggestion' => '建议',
	'advice_mysql' => '请检查 mysql 模块是否正确加载',
	'advice_fopen' => '该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系空间商，确定开启了此项功能',
	'advice_file_get_contents' => '该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系空间商，确定开启了此项功能',
	'advice_xml' => '该函数需要 PHP 支持 XML。请联系空间商，确定开启了此项功能',
	'none' => '无',
	'diskfreespace_unsupportted' => '无法检测剩余空间',
);