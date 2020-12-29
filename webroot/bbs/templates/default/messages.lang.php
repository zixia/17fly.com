<?php

// Message Pack for Discuz! Version 1.0.0
// Created by Crossday

$language = array
(
	'undefined_action' => '未定义操作，请返回。',
	'group_nopermission' => '您所在的用户组($grouptitle)无法进行此操作。',
	'group_expiry_disabled' => '您目前没有即将到期的用户组，请返回。',
	'period_nopermission' => '对不起，管理员设置了每日 $banperiods 不能进行此操作或访问此页面，请其他时间再试。',
	'submit_seccode_invalid' => '您输入的验证码不正确，无法提交，请返回修改。',
	'submit_secqaa_invalid' => '验证问答回答错误，无法提交，请返回修改。',
	'submit_invalid' => '您的请求来路不正确，无法提交。',
	'not_loggedin' => '对不起，您还没有登录，无法进行此操作。',
	'action_closed' => '论坛尚未开启此功能，或者此功能已经被管理员禁止，请返回。',
	'board_closed' => '对不起，本论坛暂时关闭，详情请<a href=\"mailto:$adminemail\">联系管理员</a>。',
	'max_pages' => '管理员设置了本内容可以被翻阅到的最大页数为 $pages 页，如需查看相关内容，请返回并指定查询条件后再试。',

	'login_invalid' => '登录失败，您还可以尝试 $loginperm 次',
	'login_question_empty' => '请填写安全提问以及正确的答案',
	'login_question_invalid' => '安全提问选择错误，请重新填写',
	'login_strike' => '密码错误次数过多，请 15 分钟后重新登陆',
	'login_succeed' => '欢迎您回来，{$discuz_userss}。现在将转入登录前页面。 $ucsynlogin ',
	'login_succeed_inactive_member' => '欢迎您回来，{$discuz_userss}。您的帐号处于非激活状态，现在将转入控制面板。 $ucsynlogin ',
	'logout_succeed' => '您已退出论坛，现在将以游客身份转入退出前页面。 $ucsynlogout ',
	'login_activation' => '您的帐号未在本论坛激活，现在将转入帐号激活页面。',

	'user_banned' => '对不起，您的 IP 地址不在被允许的范围内，或您的账号被禁用，无法访问本论坛。',
	'word_banned' => '对不起，您填写的内容(如签名、帖子、短消息等)包含不良内容而无法提交，请返回修改。',

	'forum_nonexistence' => '指定的版块不存在，请返回。',
	'forum_passwd' => '本版块需要密码',
	'forum_passwd_correct' => '密码验证成功，现在将转入主题列表。',
	'forum_passwd_incorrect' => '您输入的密码不正确，不能访问这个版块。',
	'forum_nopermission' => '本版块只有特定用户组可以访问。',
	'forum_permforum_nopermission' => '您不满足访问这个版块所需的条件。</b><br />&nbsp;&nbsp;&nbsp;访问条件: $formulamessage<br />&nbsp;&nbsp;&nbsp;您的信息: $usermsg<b>',
	'forum_disablepost' => '本版块禁止发帖。',
	'forum_access_disallow' => '对不起，您在本版无权进行此操作，请返回',
	'forum_access_view_disallow' => '对不起，您在本版无权进行此操作，请返回',
	'forum_access_post_disallow' => '对不起，版主已经禁止您在本版发布新主题，请返回',
	'forum_access_reply_disallow' => '对不起，版主已经禁止您回复本版的帖子，请返回',
	'forum_access_postattach_disallow' => '对不起，版主已经禁止您上传附件，请返回',
	'forum_access_getattach_disallow' => '对不起，版主已经禁止您下载附件，请返回',

	'thread_nonexistence' => '指定的主题不存在或已被删除或正在被审核，请返回。',
	'thread_nopermission' => '对不起，本帖要求阅读权限高于 $thread[readperm] 才可浏览，请返回。',
	'thread_poll_closed' => '本主题已关闭，无法继续投票，请返回。',
	'thread_poll_voted' => '您已参与过这个投票，请返回。',
	'thread_poll_invalid' => '您没有选择投票选项，请返回修改。',
	'thread_poll_succeed' => '您的投票成功提交，现在将转入主题页。',
	'thread_rate_moderator_invalid' => '对不起，作为版主您只能在自己的管辖范围内评分，请返回。',
	'ajax_thread_rate_moderator_invalid' => '对不起，作为版主您只能在自己的管辖范围内评分。',
	'thread_rate_range_invalid' => '您未输入分值或超过每次评分范围限制，请返回修改。',
	'ajax_thread_rate_range_invalid' => '分值超过限制。',
	'thread_rate_timelimit' => '对不起，您不能对发表于 $karmaratelimit 小时前的帖子进行评分，请返回。',
	'ajax_thread_rate_timelimit' => '对不起，您不能对发表于 $karmaratelimit 小时前的帖子进行评分。',
	'thread_rate_member_invalid' => '对不起，您不能给自己发表的帖子评分，请返回。',
	'ajax_thread_rate_member_invalid' => '对不起，您不能给自己发表的帖子评分。',
	'thread_rate_ctrl' => '24 小时评分数超过限制，请返回修改。',
	'thread_rate_duplicate' => '对不起，您不能对同一个帖子重复评分，请返回。',
	'ajax_thread_rate_duplicate' => '对不起，您不能对同一个帖子重复评分。',
	'thread_rate_succeed' => '感谢您的参与，现在将转入评分前页面。',
	'ajax_thread_rate_succeed' => '感谢您的参与。',
	'thread_rate_removesucceed' => '评分已成功撤销，现在将转入评分前页面。',
	'thread_rate_anonymous' => '对不起，您不能对匿名帖评分，请返回。',
	'ajax_thread_rate_anonymous' => '对不起，您不能对匿名帖评分。',
	'thread_rate_banned' => '对不起，您不能对屏蔽帖评分，请返回。',
	'ajax_thread_rate_banned' => '对不起，您不能对屏蔽帖评分。',
	'thread_rate_log_nonexistence' => '对不起，指定帖子在近一年内没有评分记录，请返回。',
	'thread_pay_succeed' => '您已成功购买本主题，现在将转入主题页面。',
	'thread_report_disabled' => '对不起，管理员关闭了报告帖子功能，请返回。',
	'thread_report_existence' => '对不起，您已经报告过这篇帖子，请返回。',
	'ajax_thread_report_disabled' => '对不起，管理员关闭了报告帖子功能。',
	'thread_report_flood_ctrl' => '对不起，您两次报告间隔不得少于 $floodctrl 秒，请返回。',
	'ajax_thread_report_flood_ctrl' => '对不起，您两次报告间隔不得少于 $floodctrl 秒。',
	'thread_maxpostsperhour_invalid' => '对不起，本站规定会员每小时最多只能发表 $maxpostsperhour 个帖子。',
	'thread_report_invalid' => '您没有选择对谁报告本帖，请返回修改。',
	'thread_report_succeed' => '您的意见已经报告给版主和管理员，现在将转入主题页面。',
	'ajax_thread_report_succeed' => '您的意见已经报告给版主和管理员。',
	'thread_warning_nonexistence' => '指定帖子没有警告记录，请返回。',
	'thread_warning_existence' => '对不起，本帖已经被警告过，请返回。',

	'digest_nonexistence' => '对不起，指定范围内没有精华帖，请返回。',
	'customtopics_updated' => '用户专题更新完毕。',

	'view_log_invalid' => '浏览量记录文件($logfile)无法写入，请设置其属性 777 或删除后重新建立。',

	'attachment_referer_invalid' => '对不起，请不要从外部链接下载本论坛的附件。',
	'attachment_nopermission' => '对不起，本附件要求阅读权限高于 $attach[readperm] 才可下载，请返回。',
	'attachment_forum_nopermission' => '对不起，只有特定用户可以下载本论坛的附件，请返回。',
	'attachment_nonexistence' => '附件文件不存在或无法读入，请与管理员联系。',
	'attachment_payto' => '附件所在主题需要付费，请您付费后下载。',
	'attachement_payto_attach' => '附件需要付费，请您付费后下载。',
	'attachment_yetpay' => '对不起，您已经购买过此附件，请勿重复付费。',
	'attachment_buy' => '您已成功购买本附件，现在将转入附件下载。',
	'attachment_expired' => '附件链接已失效，<a href=\"attachment.php?aid=$aid&k=$key&t=$timestamp\">点这里重新下载</a>',
	'attachment_credit' => '已扣除{$policymsg}，现在将转入附件下载。',

	'post_hide_nopermission' => '对不起，您没有权限使用 [hide] 代码，请返回修改。',
	'post_newbie_span' => '对不起，您只在注册时间起 $newbiespan 小时后才有发帖权限，请返回。',
	'post_allowspecialonly' => '对不起，本论坛只允许发布特殊类型主题，请返回。',
	'post_forum_newthread_nopermission' => '对不起，本版块只有特定用户组可以发新话题，请返回。',
	'post_forum_newreply_nopermission' => '对不起，本版块只有特定用户组可以回复，请返回。',
	'post_thread_closed' => '对不起，本主题已关闭，不再接受新回复，请返回。',
	'post_thread_closed_by_dateline' => '对不起，管理员设置了本版块发表于 $forum[autoclose] 天以前的主题自动关闭，不再接受新回复，请返回。',
	'post_thread_closed_by_lastpost' => '对不起，管理员设置了本版块最后回复于 $forum[autoclose] 天以前的主题自动关闭，不再接受新回复，请返回。',
	'post_subject_toolong' => '对不起，您的标题超过 80 个字符，请返回修改标题长度。',
	'post_message_tooshort' => '对不起，您的帖子小于 $minpostsize 个字符的限制，请返回修改。',
	'post_message_toolong' => '对不起，您的帖子超过 $maxpostsize 个字符的限制，请返回修改。',
	'post_sm_isnull' => '您没有输入标题或内容，请返回填写。',
	'post_type_isnull' => '您没有选择主题的类别，请返回修改。',
	'post_sort_isnull' => '您没有选择主题的分类，请返回修改。',
	'post_flood_ctrl' => '对不起，您两次发表间隔少于 $floodctrl 秒，请不要灌水！',
	'post_net_price_iszero' => '您的主题售价扣除积分交易税后为 0，请返回修改。',
	'post_poll_option_toomany' => '对不起，您的投票选项超过 $maxpolloptions 个，请返回修改。',
	'post_edit_reward_nopermission' => '对不起，悬赏已经结束，无法退还积分，请返回。',
	'post_edit_reward_already_reply' => '对不起，您不能删除已经有回复的悬赏，请返回。',
	'post_edit_thread_already_reply' => '对不起，您不能删除已经有回复的主题，请返回。',
	'post_edit_nopermission' => '对不起，您无权编辑他人发表的帖子，请返回。',
	'post_edit_timelimit' => '对不起，您的帖子从发表到现在已超过 $edittimelimit 分钟，不能再进行编辑，请返回。',
	'post_edit_moderate' => '对不起，管理员设置了需要对发帖进行审核，您无权编辑已通过审核的帖子，请返回。',
	'post_edit_delete_succeed' => '主题删除成功，现在将转入主题列表。',
	'post_attachment_toobig' => '对不起，您的附件大小超过论坛限制，请返回修改。',
	'post_attachment_type_toobig' => '对不起，您的附件超过 \".$extension\" 类型 $typemaxsize 的限制，请返回修改。',
	'post_attachment_ext_notallowed' => '对不起，不支持上传此类扩展名的附件，请返回修改。',
	'post_attachment_size_invalid' => '对不起，您上传的附件尺寸为 0，系统不允许上传此类附件，请返回修改。',
	'post_attachment_quota_exceed' => '对不起，您最近 24 小时上传的附件已超过 $maxsizeperday 的限制，无法继续上传，请返回或稍后再试。',
	'post_attachment_save_error' => '附件文件无法保存到服务器，可能是目录属性设置问题，请与管理员联系。',
	'post_attachment_remote_save_error' => '附件文件无法保存到远程服务器，请与管理员联系。',
	'post_attachment_image_checkerror' => '图片附件不合法(类型 $type, 宽 $width, 高 $height)，请返回修改。',
	'post_edit_succeed' => '您的帖子编辑成功，现在将转入主题页。<br /><br /><a href=\"forumdisplay.php?fid=$fid\">[ 需要转入主题列表请点击这里 ]</a>',
	'post_reply_succeed' => '非常感谢，您的回复已经发布，现在将转入主题页。<br /><br /><a href=\"forumdisplay.php?fid=$fid\">[ 需要转入主题列表请点击这里 ]</a>',
	'post_check' => '指定的帖子不存在或已被删除或正在被审核。<br /><br /><a href=\"viewthread.php?tid=$ptid\">[ 尝试转入主题请点击这里 ]</a>',
	'post_reply_mod_succeed' => '非常感谢，管理员设置了需要对新回复进行审核，您的帖子通过审核后将被显示出来，现在将转入主题列表。',
	'post_newthread_succeed' => '非常感谢，您的主题已经发布，现在将转入主题页。<br /><br /><a href=\"forumdisplay.php?fid=$fid\">[ 需要转入主题列表请点击这里 ]</a>',
	'post_newthread_blog_succeed' => '非常感谢，您的文章已经发布，现在将转入文集。',
	'post_newthread_blog_invalid' => '对不起，您没有权限或管理员设置了禁止在本版发表文章，请返回。',
	'post_newthread_mod_succeed' => '非常感谢，管理员设置了需要对新主题进行审核，现在将转入主题列表，您的帖子通过审核后将被显示出来。',

	'register_disable' => '对不起，目前论坛禁止新用户注册，请返回。',
	'register_rules_agree' => '您必须同意服务条款后才能注册',
	'register_disable_activation' => '对不起，目前论坛禁止激活，请返回。',
	'register_ctrl' => 'IP 地址在 $regctrl 小时内无法注册',
	'register_flood_ctrl' => 'IP 地址在 24 小时内只能注册 $regfloodctrl 次',
	'register_check_found' => '用户名已经被他人使用',
	'register_invite_notfound' => '没有填写邀请码不能注册',
	'register_invite_error' => '邀请码不正确',
	'register_invite_iperror' => '注册用户 IP 和邀请码拥有者 IP 相同',
	'register_invite_expiration' => '邀请码已过期',
	'register_check_notfound' => '恭喜您，您输入的用户名 \"$username\" 没有人使用，可以继续注册。',
	'register_manual_verify' => '非常感谢您的注册，管理员设置了人工验证新注册用户，请等待审核通过，现在将转入控制面板首页。',
	'register_succeed' => '感谢您注册 $bbname，现在将以会员身份登录论坛。',
	'register_succeed_newbietask' => '感谢您的注册，我们诚邀您参与新手任务 $task[name]，现在将转入任务详情页面。',
	'register_activation' => '用户名已经存在',
	'register_activation_message' => '对不起，您输入的用户名 \"$username\" 已经存在，请登录论坛激活此帐号。',
	'register_activation_invalid' => '激活失败，请重新登录验证需要激活的用户。',

	'profile_username_toolong' => '对不起，您的用户名超过 15 个字符，请返回输入一个较短的用户名。',
	'profile_username_tooshort' => '对不起，您输入的用户名小于 3 个字符, 请返回输入一个较长的用户名。',
	'profile_passwd_notmatch' => '两次输入的密码不一致',
	'profile_passwd_wrong' => '原密码不正确，您不能修改密码或 Email 或安全提问，请返回。',
	'profile_passwd_empty_wrong' => '您没有填写新密码，请返回。',
	'profile_admin_security_invalid' => '作为管理者之一，您需要填写安全提问和答案以保障论坛的安全，请返回。',
	'profile_username_duplicate' => '该用户名已经被注册',
	'profile_uid_duplicate' => '用户 ID $uid 已经被占用',
	'profile_email_duplicate' => '该 Email 地址已经被注册',
	'profile_username_illegal' => '用户名包含敏感字符',
	'profile_username_protect' => '用户名包含被系统屏蔽的字符',
	'profile_nickname_cstatus_illegal' => '昵称或自定义头衔包含敏感字符或被系统屏蔽，请返回重新填写。',
	'profile_passwd_illegal' => '密码空或包含非法字符',
	'profile_email_illegal' => 'Email 地址无效',
	'profile_email_domain_illegal' => 'Email 包含不可使用的邮箱域名',
	'profile_alipay_illegal' => '支付宝账号无效，请返回重新填写。',
	'profile_alipay_msn' => 'MSN 账号无效，请返回重新填写。',
	'profile_required_info_invalid' => '您没有填写必填项目，请返回修改。',
	'profile_sig_toolong' => '您的签名长度超过 $maxsigsize 字符的限制，请返回修改。',
	'profile_avatar_invalid' => '您设置的头像类型无效，请返回修改。',
	'profile_avatar_toobig' => '您设置的头像超过 $maxavatarsize 字节大小，请返回修改。',
	'profile_avatar_size_invalid' => '读取远程头像尺寸失败，如确认头像地址无误，请返回输入头像的宽、高代替原有的“*”。',
	'profile_avatardir_nonexistence' => '头像目录 ./images/avatars 不存在，请联系管理员。',
	'profile_avatar_succeed' => '您头像设置已成功更新，现在将转入个人资料页。',
	'profile_email_verify' => '确认 Email 已经发送，请用邮件中提供的方法激活您的帐号。如果您没有收到我们发送的系统邮件，请点击控制面板首页中的“重新验证 Email 有效性”，或尝试更换另外一个地址。注意：在完成激活之前，根据管理员设置，您将只能以待验证会员的身份访问论坛，您可能不能进行发帖等操作。激活成功后，上述限制将自动取消。',
	'profile_succeed' => '个人资料已成功保存。',

	'credits_disabled' => '对不起，管理员没有启用论坛积分。',
	'credits_transaction_disabled' => '对不起，交易积分没有被启用，无法使用此功能，请返回或与管理员联系。',
	'credits_transaction_amount_invalid' => '您要转账或兑换的积分数量输入有误，请返回修改。',
	'credits_password_invalid' => '您没有输入密码或密码错误，请返回。',
	'credits_policy_lowerlimit' => '对不起，您的{$extcredits[$id][title]}不足(小于 {$extcredits[$id][lowerlimit]} {$extcredits[$id][unit]})。',
	'credits_policy_num_lowerlimit' => '对不起，您的{$extcredits[$id][title]}不足，无法进行本操作(小于 {$extcredits[$id][lowerlimit]} {$extcredits[$id][unit]})，请返回。',
	'credits_balance_insufficient' => '对不起，您的账户余额不足(少于 $minbalance)，请返回。',
	'credits_buy_thread' => '对不起，您已经购买过此主题，请勿重复付费。',
	'credits_net_amount_iszero' => '本交易扣除积分交易税后的净值为 0，请返回修改。',
	'credits_transfer_send_nonexistence' => '您没有输入接收人或接收人不存在，请返回修改。',
	'credits_transfer_self' => '对不起，您不能对自己转账',
	'credits_exchange_invalid' => '您选择原积分和目标积分相同，不能进行兑换，请返回修改。',
	'credits_transaction_succeed' => '积分操作成功',
	'credits_addfunds_amount_invalid' => '您单次购买的积分数量超出最大值 $ec_maxcredits 或最小值 $ec_mincredits 的限制。',
	'credits_addfunds_ctrl' => '您两次提交订单间隔小于 180 秒，请稍后再试。',
	'credits_addfunds_toomuch' => '您超出本月允许购买 $ec_maxcreditspermonth 的限额。',
	'credits_addfunds_order_invalid' => '当前订单号无效，请在上一页重新提交，给您带来不便敬请谅解。',
	'credits_addfunds_succeed' => '订单提交成功，请<a href=\"{$requesturl}\" target=\"_blank\">点击此处</a>支付',

	'usergroups_toomany' => '您设置的扩展用户组超过系统存储容量，请返回修改。',
	'usergroups_span_invalid' => '对不起，您至少需要支付 $group[minspan] 天的积分价格，请返回。',
	'usergroups_join_succeed' => '成功加入用户组，现在将转入公众用户组设置。',
	'usergroups_exit_succeed' => '成功退出用户组，现在将转入公众用户组设置。',
	'usergroups_update_succeed' => '公众用户组成功更新，现在将转入公众用户组设置。',
	'usergroups_nonexistence' => '对不起，没有这个用户组，请返回。',

	'username_nonexistence' => '指定用户不存在，请返回修改。',

	'buddy_add_invalid' => '用户已存在于您的好友列表中。',
	'buddy_add_toomany' => '您已经设定了超过 20 位好友。',
	'buddy_update_succeed' => '好友列表成功更新。',
	'buddy_add_ignore' => '用户拒绝加您为好友。',

	'redirect_nextnewset_nonexistence' => '没有比当前更新的主题，请返回。',
	'redirect_nextoldset_nonexistence' => '没有比当前更早的主题，请返回。',

	'favorite_exists' => '您过去已经收藏过这个主题或版块。',
	'favorite_add_succeed' => '指定主题或版块已成功添加到收藏夹中。',
	'favorite_update_succeed' => '收藏夹已成功更新，现在将转入更新后的收藏夹。',
	'favorite_is_full' => '您的收藏夹已满，请在继续操作前删除一些不用的收藏。',

	'subscription_exists' => '您过去已经订阅过这个主题。',
	'subscription_add_succeed' => '您选择的主题已经成功订阅。',
	'subscription_update_succeed' => '订阅列表已经成功更新，现在将转入更新后的订阅列表。',
	'subscription_nopermission' => '对不起，您无权订阅该主题。',
	'subscription_is_full' => '您的订阅列表已满，请在继续操作前删除一些不用的订阅。',

	'search_ctrl' => '对不起，您在 $searchctrl 秒内只能进行一次搜索，请返回。',
	'search_toomany' => '对不起，管理员设置了每分钟系统最多响应搜索请求 $maxspm 次，请返回并稍后再试。',
	'search_invalid' => '您没有指定要搜索的关键字或用户名，请返回重新填写。',
	'search_threadtype_invalid' => '您没有输入要搜索的分类信息项目，请返回重新填写。',
	'search_forum_invalid' => '您没有指定搜索论坛的范围，请返回重新填写。',
	'search_id_invalid' => '您指定的搜索不存在或已过期，请返回。',
	'search_redirect' => '搜索成功完成，现在将转入结果页面。',

	'member_nonexistence' => '指定的用户不存在或已被删除，请返回。',
	'member_list_disable' => '对不起，管理员禁止了会员列表功能。',
	'email_friend_invalid' => '相关项目没有填写完整，请返回修改。',
	'ajax_email_friend_invalid' => '相关项目没有填写完整。',
	'email_friend_succeed' => '您的推荐已经通过 Email 发给朋友，现在将转入原帖。',
	'ajax_email_friend_succeed' => '您的推荐已经通过 Email 发给朋友。',
	'email_invite_succeed' => '您的邀请码已经通过 Email 发给朋友。',
	'announcement_nonexistence' => '目前没有公告供查看，请返回。',
	'mark_read_succeed' => '所有版块已被标记已读。',
	'register_verify_invalid' => '管理员设置了人工验证新注册用户，请返回等待审核通过。',
	'email_verify_invalid' => '您在 24 小时内只能提交一次验证 Email 请求，请返回。',
	'email_verify_succeed' => '确认 Email 已经发送，请用邮件中提供的方法激活您的帐号。',
	'submit_verify_succeed' => '审核请求提交成功，现在将返回控制面板首页。',
	'activate_succeed' => '您好，$member[username]，您的帐号已被成功激活，现在将转入论坛首页。',
	'activate_illegal' => '您所用的 ID 不存在或您不是等待验证会员。',
	'poll_overdue' => '投票已经过期，请返回。',
	'poll_choose_most' => '此投票最多只能选择 {$pollarray[maxchoices]} 项，请返回修改。',
	'poll_maxchoices_expiration_invalid' => '对不起，最多可选项数与有效记票天数只接受数字，请返回修改。',
	'poll_end' => '投票已经结束，不能再投票。',

	'trade_closed' => '本交易已关闭',
	'trade_invalid' => '无效的交易请求',
	'trade_credits_no_enough' => '您的 {$extcredits[$creditstrans][title]} 不足，无法用 {$extcredits[$creditstrans][title]} 换取商品的优惠，请返回修改。',
	'trade_by_myself' => '您无法购买自己的商品，请返回修改。',
	'trade_input_no' => '请输入正确的商品数，请返回修改。',
	'trade_lack' => '商品剩余数量不足，请返回修改。',
	'trade_alipay_please' => '对不起，支付宝账户不能为空，请返回修改。',
	'trade_please_name' => '对不起，商品名称不能为空，请返回修改。',
	'trade_price_between' => '对不起，商品价格必须在 '.$mintradeprice.' 元至 '.$maxtradeprice.' 元之间，请返回修改。',
	'trade_price_more_than' => '对不起，商品价格必须大于 $mintradeprice 元，请返回修改。',
	'trade_please_locus' => '对不起，商品所在地不能为空，请返回修改。',
	'tread_please_number' => '对不起，商品数量不能为空，请返回修改。',
	'trade_orderstatus_updated' => '交易单状态已更新。',
	'trade_displayorder_updated' => '柜台商品摆放顺序已更新。',
	'trade_order_created' => '交易单已创建，现在将转入交易单页面。',
	'trade_password_error' => '您输入的密码不正确，不能修改订单状态，请返回修改。',
	'trade_thread_succeed' => '非常感谢，您的商品主题已经发布，现在将转入添加商品页。',
	'trade_add_succeed' => '非常感谢，您的商品已经发布，现在将转入商品主题页。<br /><br /><a href=\"post.php?action=reply&fid=$fid&tid=$tid&addtrade=yes\">[ 继续添加商品请点击这里 ]</a><br /><br /><a href=\"forumdisplay.php?fid=$fid\">[ 需要转入主题列表请点击这里 ]</a>',
	'trade_newreply_nopermission' => '对不起，只有已开放的商品主题可以回复，请返回。',
	'trade_directtopay' => '订单提交成功，现在将跳转到支付页面。',

	'reward_cant_operate' => '对不起，您不能设置最佳答案, 请返回。',
	'reward_cant_self' => '对不起，您不能把自己的回复设置成最佳答案, 请返回。',
	'reward_repeat_selection' => '不能重复选定最佳答案, 请返回。',
	'reward_completion' => '最佳答案设置成功，请返回。',
	'reward_credits_invalid' => '对不起，悬赏积分设置不合理，请返回修改。',
	'reward_credits_please' => '对不起，悬赏积分不能为空，请返回修改。',
	'reward_credits_fall' => '对不起，悬赏积分不能降低, 请返回修改。',
	'reward_credits_overflow' => '对不起，悬赏积分不能高于 32767，请返回修改。',
	'reward_credits_between' => '对不起，悬赏积分必须在 $minrewardprice 与 $maxrewardprice 之间, 请返回修改。',
	'reward_credits_lower' => '对不起，悬赏积分必须大于 $minrewardprice, 请返回修改。',
	'reward_credits_shortage' => '对不起，积分余额不足，请返回修改。',
	'reward_end' => '对不起，请确认是否是悬赏帖或者悬赏已经结束。',
	'reward_remove_succeed' => '悬赏已取消。',


	'activity_stop' => '对不起，活动已停止申请，请返回。',
	'activity_repeat_apply' => '对不起，活动不能重复申请。',
	'activity_completion' => '活动申请成功，请等待发起人审核。',
	'activity_choice_applicant' => '请选择活动的申请者。',
	'activity_auditing_completion' => '活动人员审核完毕。',
	'activity_delete_completion' => '活动列表清理完毕。',
	'activity_fromtime_please' => '对不起，活动开始时间不能为空，请返回修改。',
	'activity_fromtime_error' => '对不起，活动开始时间格式不正确，请返回修改。',
	'activity_sort_please' => '对不起，活动所属类别不能为空，请返回修改。',
	'activity_address_please' => '对不起，活动地点不能为空，请返回修改。',
	'activity_totime_error' => '对不起，活动征集截止日期格式不正确，请返回修改。',
	'activity_smaller_current' => '对不起，活动开始时间不能小于当前时间',
	'post_poll_inputmore' => '对不起，您至少应当填写 2 个投票选项，请返回修改。',


	'getpasswd_account_notmatch' => '用户名，Email 地址或安全提问不匹配，请返回修改。',
	'getpasswd_account_invalid' => '管理员和超级版主不能使用取回密码功能，请返回。',
	'getpasswd_illegal' => '您所用的 ID 不存在或已经过期，无法取回密码。',
	'getpasswd_send_succeed' => '取回密码的方法发送到您的信箱中。',
	'getpasswd_succeed' => '您的密码已重新设置，请使用新密码登录。',

	'blog_nonexistence' => '指定的用户不存在，或其文集中没有文章。',
	'blog_topic_nonexistence' => '指定的文章不存在或已被删除，请返回。',
	'blog_category_isnull' => '当前作者在指定栏目内没有文集，请返回。',
	'blog_add_illegal' => '对不起，您不是本主题的作者，无法进行此操作。',
	'blog_add_succeed' => '操作成功。',

	'threadmod_nonexistence' => '主题管理记录不存在，或管理记录已经过期并删除，请返回。',

	'pm_newbie_span' => '对不起，您只在注册时间起 $newbiespan 小时后才有发短消息权限，请返回。',
	'pm_send_disable' => '对不起，您没有发短消息的权限。',
	'pm_nonexistence' => '对不起，短消息不存在或已被删除。',
	'pm_send_nonexistence' => '收件人不存在或存在重复，请返回修改。',
	'pm_send_self_ignore' => '您不能给自己发消息，请返回修改。',
	'pm_send_invalid' => '短消息发送失败，收件人拒收您发的消息，请返回。',
	'pm_send_limit1day_error' => '对不起，超出了您24小时最大发送短消息数，请返回。',
	'pm_send_floodctrl_error' => '对不起，您两次发送短消息间隔太短，请返回。',
	'pm_send_batnotfriend_error' => '对不起，您不能给非好友批量发送短消息，请返回。',
	'pm_send_pmsendregdays_error' => '对不起，您目前还不能发送短消息，请返回。',
	'pm_send_succeed' => '短消息发送成功。',
	'pm_send_empty' => '您没有填写短消息内容，请返回。',
	'pm_delete_succeed' => '指定消息成功删除。',
	'pm_mark_read_succeed' => '指定消息已标记为已读状态。',
	'pm_mark_unread_succeed' => '指定消息已标记为未读状态。',
	'pm_ignore_succeed' => '忽略列表已成功更新，现在将转入消息列表。',
	'pm_addblack_succeed' => '指定用户的消息已被屏蔽',
	'pm_addblackall_succeed' => '您已屏蔽所有人消息',
	'pm_delblack_succeed' => '屏蔽设置已移除',

	'plugin_nopermission' => '对不起，您没有权限使用此插件模块。',
	'plugin_module_nonexistence' => '指定的插件模块文件($modfile)不存在或存在语法错误，请检查是否已将插件完整上传。',

	'admin_nopermission' => '您没有权限使用管理功能。',
	'admin_nonexistence' => '您没有选择操作项目。',
	'admin_expiration_invalid' => '有效期无效。',
	'admin_reason_invalid' => '请输入原因。',
	'admin_moderate_invalid' => '您没有选择主题。',
	'admin_getip_nopermission' => '对不起，您没有权限查看比您高级的管理员 IP，请返回。',
	'admin_delpost_invalid' => '您没有选择要删除的帖子。',
	'admin_banpost_invalid' => '您没有选择要屏蔽的帖子。',
	'admin_move_illegal' => '目标版块与原版块相同。',
	'admin_split_invalid' => '主题没有回复，无法分割。',
	'admin_split_subject_invalid' => '您没有输入标题。',
	'admin_split_new_invalid' => '您没有选择要分割入新主题的帖子，请返回修改。',
	'admin_merge_nonexistence' => '主题 ID (tid) 不存在。',
	'admin_merge_invalid' => '请选择其他主题进行合并。',
	'admin_succeed' => '管理操作成功，现在将返回论坛。',
	'admin_succeed_next' => '管理操作成功，现在将转入后续操作。',
	'admin_move_invalid' => '目标版块不存在。',
	'admin_move_have_mod' => '目标版块需要内容审核。',
	'admin_move_nopermission' => '目标版块无发帖权。',
	'admin_type_invalid' => '目标分类无效。',
	'admin_repair_succeed' => '主题修复完成。',
	'admin_warn_invalid' => '您没有选择要警告的帖子。',
	'admin_warn_nopermission' => '您无权警告该作者的帖子。',

	'special_noaction' => '无法操作特殊主题。',
	'special_refundment_invalid' => '特殊主题不能执行强制退款！',
	'auditstatuson_succeed' => '审核成功，点击查看该帖。',
	'audit_edit_succeed' => '<a href=\"javascript:if(opener)opener.location.reload();window.close();\">编辑成功， 点击关闭本页。</a>',

	'todays_birthdays_banned' => '对不起，管理员禁止了显示生日会员功能。',
	'switch_status_now' => '正在切换您的状态。',

	'magics_close' => '道具中心关闭，请返回。',
	'magics_market_close' => '道具市场关闭，请返回。',
	'magics_market_operation_error' => '道具市场关闭，请返回。',
	'magics_perm' => '您所在的用户组不允许使用道具系统，请返回。',
	'magics_nonexistence' => '道具不存在或者不可用，请返回。',
	'magics_filename_nonexistence' => '道具文件所需文件 {$magicfile} 不存在。',
	'magics_info_nonexistence' => '相关资料填写不全，请返回。',
	'magics_nopermission' => '你所在的用户组不允许进行该操作，请返回。',
	'magics_credits_no_enough' => '{$extcredits[$creditstransextra[3]][title]} 不足，请修改购买道具数量。',
	'magics_num_no_enough' => '库存不足，请修改购买道具数量。',
	'magics_amount_no_enough' => '没有足够的道具可以操作，请修改。',
	'magics_num_invalid' => '操作数量不合法，请返回修改。',
	'magics_succeed' => '道具操作成功。',
	'magics_post_anonymous' => '匿名帖不允许使用此道具，请返回。',
	'magics_price_iszero' => '您的道具售价扣除积分交易税后为 0，请修改。',
	'magics_price_invalid' => '道具设置价格不正确，请返回修改。',
	'magics_price_high' => '道具设置价格过高，请返回修改。',
	'magics_username_nonexistence' => '您没有输入要赠送的用户名，请返回。',
	'magics_target_nopermission' => '对不起，不允许对目标对象使用该道具，请返回。',
	'magics_target_nonexistence' => '对不起，您所指定的目标不存在，请返回。',
	'magics_weight_range_invalid' => '超过最大负载量，请返回。',
	'magics_give_myself' => '对不起，不能赠送给自己，请返回修改。',
	'magics_give_succeed' => '赠送成功',
	'magics_mod_forbidden' => '对不起，此帖已被版主操作，禁止使用道具，请返回。',
	'magics_operation_succeed' => '道具使用成功。',
	'magics_operation_nopermission' => '对不起，此道具只能操作自己发的主题和帖子，请返回。',
	'magics_use_nopermission' => '无权使用该道具，请返回。',
	'magics_MOK_message' => '恭喜您，获得 {$getmoney} {$extcredits[$creditstransextra[3]][title]}',
	'magics_SEK_message' => '此人的IP为: {$post[useip]}',
	'magics_RTK_on_message' => '你查询的会员不在线。',
	'magics_RTK_off_message' => '你查询的会员在线，所在位置 {$actioncode[$msession[action]]}',

	'task_close' => '论坛任务关闭，请返回。',
	'task_nonexistence' => '该任务不存在或已被删除！请返回。',
	'task_up_to_limit' => '对不起，该任务仅限 $task[tasklimits] 人领取奖励，按照先到先得的原则，您无法领取奖励，请下次再来吧！',
	'task_completed' => '恭喜您，任务已成功完成，您将收到奖励通知短消息，请注意查收！',
	'task_failed' => '对不起，您没能在指定时间内完成任务！',
	'task_doing' => '您已完成该任务的 {$result[csc]}%，加油啊！',
	'task_doing_rt' => '您已完成该任务的 {$result[csc]}%，还有{$result[t]}时间，加油啊！',
	'task_waiting' => '您还没有开始执行任务，赶快哦！',
	'task_waiting_rt' => '您还没有开始执行任务，还有{$result[t]}时间，赶快哦！',
	'task_giveup' => '您已放弃此任务。',
	'task_offline' => '该任务未上线或已下线！',
	'task_full' => '该任务申请人数已满！',
	'task_relatedtask' => '申请此任务需先完成一个任务，现在将转入这个任务页面。',
	'task_grouplimit' => '您所在的用户组不允许申请此任务！',
	'task_duplicate' => '您已经申请过此任务，请不要重复申请！',
	'task_nextperiod' => '本期您已经申请过此任务，请下期再来申请吧！',
	'task_applied' => '任务申请成功！',
	'task_reward_credit' => '恭喜您完成任务，您已得到的积分奖励如下：{$extcredits[$task[prize]][title]} {$task[bonus]} {$extcredits[$task[prize]][unit]}，详情请查阅短消息。',
	'task_reward_magic' => '恭喜您完成任务，您已得到的道具奖励如下：{$magicname} {$task[bonus]} 枚，详情请查阅短消息。',
	'task_reward_medal' => '恭喜您完成任务，您已得到的勋章奖励如下：{$medalname} 有效期 {$task[bonus]} 天，详情请查阅短消息。',
	'task_reward_invite' => '恭喜您完成任务，您已得到的邀请码奖励如下：共 {$task[prize]} 个 有效期 {$task[bonus]} 天，详情请查阅短消息。',
	'task_reward_group' => '恭喜您完成任务，您已得到的特殊用户组奖励如下：用户组 {$grouptitle} 有效期 {$task[bonus]} 天，详情请查阅短消息。',

	'faq_content_empty' => '指定的帮助项目不存在，请返回。',
	'faq_search_help' => '搜索帮助',
	'faq_keywords_empty' => '您没有指定要搜索的关键字，请返回重新填写。',

	'frame_off' => '对不起，没有开启左右分栏功能，请返回。',

	'extcredits_disallowexchangeout' => '$extcredits[$fromcredits][title] 不允许兑出',
	'extcredits_disallowexchangein' => '$extcredits[$tocredits][title] 不允许兑入',
	'extcredits_dataerror' => '兑换失败，请与管理员联系。',

	'tag_closed' => '对不起，管理员锁定了此 TAG。',

	'eccredit_order_notfound' => '指定的订单不存在或已被删除。',
	'eccredit_rate_repeat' => '不能重复评价。',
	'eccredit_succees' => '您的评价已经成功。',
	'eccredit_nofound'=> '指定的评价不存在或已被删除。',
	'eccredit_reexplanation_repeat' => '请勿重复解释。',
	'eccredit_reexplanation_closed' => '对不起，允许解释的有效期已过！',

	'invite_send' => '{$inviteuser}邀请您注册{$bbname}',
	'invite_invalid' => '您填写的邀请码无效。',
	'invite_close' => '邀请注册功能已关闭，请返回。',
	'invite_nopermission' => '您所在的用户组不允许使用邀请注册。',
	'invite_num_invalid' => '<span class=\"onerror\">购买数量非法</span>',
	'invite_buy_succeed' => '<span class=\"onright\">购买成功<script type=\"text/JavaScript\">setTimeout(\"window.location.reload()\", 1000);</script></span>',
	'invite_mark_succeed' => '标记操作成功。',
	'invite_num_buy_range_invalid' => '<span class=\"onerror\">超过您所在用户组允许拥有的邀请码数量的最大值，请修改购买数量。</span>',
	'invite_num_range_invalid' => '<span class=\"onerror\">您所拥有的邀请码数量已经到达最大值，请返回。</span>',
	'invite_credits_no_enough' => '<span class=\"onerror\">您的 {$extcredits[$creditstransextra[4]][title]} 不足。</span>',

	'debate_end' => '辩论已经结束，请返回。',
	'debate_position_nofound' => '对不起，发表辩论主题需要输入正方和反方观点，请返回修改。',
	'debate_endtime_invalid' => '对不起，您设置辩论的结束时间小于当前时间，请返回修改。',
	'debate_nofound' => '对不起，该辩论主题不存在。',
	'debate_poll_nopermission' => '对不起，请您先登陆，然后再进行投票。',
	'debate_poll_voted' => '您已经投过票。',
	'debate_poll_end' => '投票已经结束，不能再投票。',
	'debate_poll_succeed' => '投票成功。',
	'debate_poll_myself' => '对不起，您不能给自己投票。',
	'debate_umpire_invalid' => '对不起，你指定的裁判 (<b>{$umpire}</b>) 不存在或者被删除，请返回修改。',
	'debate_umpire_edit_invalid' => '您发表的评论已经超出了一个小时，您不能再进行编辑。',
	'debate_umpire_nopermission' => '您不是裁判，不能对此辩论进行评判，请返回。',
	'debate_umpire_nofound_bestdebater' => '您没有填写最佳辩手，请返回。',
	'debate_umpire_nofound_winner' => '您没有填写获胜方，请返回。',
	'debate_umpire_nofound_point' => '您没填写您的观点，请返回。',
	'debate_umpire_bestdebater_invalid' => '您指定的最佳辩手不存在或者不合法，请返回修改。',
	'debate_umpire_comment_succeed' => '评判成功。',
	'debate_umpire_comment_invalid' => '裁判已经进行了评判，您不能再进行编辑，请返回。',
	'debate_stand_invalid' => '您没有选择立场，请返回。',
	'debate_stand_incorrect' => '您选择的立场与上一次不一致，请返回确认。',

	'threadtype_required_invalid' => '资料填写不全，请返回检查{$checkoption[$var][title]}选项。',
	'threadtype_format_invalid' => '资料格式不正确，请返回检查{$checkoption[$var][title]}选项。',
	'threadtype_toolong_invalid' => '资料长度过长，请返回检查{$checkoption[$var][title]}选项。',
	'threadtype_num_invalid' => '资料数值不正确，请返回检查{$checkoption[$var][title]}选项。',
	'threadtype_unchangeable_invalid' => '资料不得修改，请返回检查{$checkoption[$var][title]}选项。',
	'threadtype_expiration_invalid' => '此主题必须指定有效期，请返回修改。',

	'video_del_succeed' => '视频成功被删除。',
	'video_invalid' => '指定的视频不存在或已被删除。',
	'video_required_invalid' => '视频信息填写不全，请返回。',

	'reprint_invalid' => '转帖数据不存在，请返回。',
	'rate_view' => '查看评分记录',

	'seccode_player' => '',
	'ajax_seccode_player' => '<div style=\"width:90px;padding:2px\">{$flashcode}<img border=\"0\" style=\"vertical-align:middle\" src=\"images/common/seccodeplayer.gif\" /> <a href=\"javascript:;\" onclick=\"updateseccode{$secchecktype}(1)\">播放验证码</a></div>',

	'medal_permforum_nopermission' => '您不满足领取这个勋章所需的条件。</b><br />&nbsp;&nbsp;&nbsp;领取条件: $formulamessage<br />&nbsp;&nbsp;&nbsp;您的信息: $usermsg<b>',
	'medal_apply_invalid' => '对不起此勋章不可申请，请返回。',
	'medal_apply_existence' => '您已经申请此勋章，请不要重复申请。',
	'medal_apply_succeed' => '申请勋章成功,正在等待管理员审核。',

	'modcp_moduser_invalid' => '审核失败, 没有找到相应的用户， 请返回',
	'modcp_moduser_succeed' => '审核处理完毕',
	'modcp_ann_empty' => '您必须输入公告标题和内容，请返回修改。',
	'modcp_ann_urlerror' => '网址链接无效，请返回修改。',
	'modcp_ann_nofound' => '该公告已经删除或您无权编辑它，请返回',
	'modcp_logout_succeed' => '成功退出管理面板，返回论坛',
	'modcp_mod_succeed' => '审核处理完毕',
	'modcp_noaction' => '您没有选择执行任何操作',

	'members_edit_succeed' => '用户信息成功更新，请继续操作',
	'modcp_member_ban_successed' => '用户资料成功更新',
	'admin_cpanel_noaccess' => '您无权访问管理面板，请重新登录论坛，然后重试',
	'admin_cpanel_locked' => '对不起，由于您多次输入错误密码，所以管理面板暂时锁定，您现在无法进入管理面板。<br />30 分钟以后，锁定会自动解除',
	'admin_cpanel_noaccess_ip' => '对不起，管理员设定了只有特定 IP 地址范围才能访问系统设置，您的地址不在被允许的范围内',

	'msn_binding_succeed' => '您已成功绑定/更换 MSN 账号！',

);

?>