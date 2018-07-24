<?php
return array(	
	// Generic/Misc.
	'YesLabel'                => 'Yes',
	'NoLabel'                 => 'No',
	'NoteLabel'               => 'Note',
	'GenderTypeMale'          => '男生',
	'GenderTypeFemale'        => '女生',
	'GenderTypeServer'        => 'Server',
	'RefreshSecurityCode'     => '刷新验证码',
	'NoneLabel'               => 'None',
	'NeverLabel'              => 'Never',
	'NotApplicableLabel'      => 'Not Applicable',
	'UnknownLabel'            => 'Unknown',
	'IsEqualToLabel'          => '等于',
	'IsGreaterThanLabel'      => '大于',
	'IsLessThanLabel'         => '小于',
	'AllLabel'                => 'All',
	'SearchLabel'             => '搜索…',
	'GoBackLabel'             => '返回…',
	'SearchButton'            => '搜索',
	'ResetButton'             => '重置',
	'FilterButton'            => '搜索',
	'NotAcceptingDonations'   => "We're sorry, but we are currently not accepting any donations.  We apologize for the inconvenience.",
	//'NotAcceptingDonations'   => "We're sorry, but our donation system is currently undergoing maintenance, please try again later.",
	'FoundSearchResults'      => '总共 (%笔)(%d页).显示结果(%d-%d).',
	'LoginToDonate'           => 'Please log-in to make a donation.',
	'UnknownCharacter'        => 'No such character found.',
	'AccountIdLabel'          => 'Account ID',
	'AccountGroupIDLabel'     => '权限级别',
	'AccountStateLabel'       => '状态',
	'CreditBalanceLabel'      => '信用卡余额',
	'UsernameLabel'           => '使用者账号',
	'PasswordLabel'           => '使用者密码',
	'EmailAddressLabel'       => 'E-mail',
	'GenderLabel'             => '性別',
	'LoginCountLabel'         => '登录次數',
	'LastLoginDateLabel'      => '最后登录时间',
	'LastUsedIpLabel'         => '最后登录 IP',
	'AccountStateNormal'      => '正常',
	'AccountStatePending'     => 'Pending',
	'AccountStatePermBanned'  => 'Permanently Banned',
	'AccountStateTempBanLbl'  => 'Temporarily Banned',
	'AccountStateTempBanned'  => 'Temp. Banned (unban: %s)',
	'OnlineLabel'             => 'Online',
	'OfflineLabel'            => 'Offline',
	'ItemIdLabel'             => '道具 ID',
	'ItemNameLabel'           => '道具名称',
	'ItemAmountLabel'         => '數量',
	'ItemIdentifyLabel'       => '鉴定状态',
	'ItemRefineLabel'         => '精炼級別',
	'ItemBrokenLabel'         => '损坏状态',
	'ItemCard0Label'          => '卡槽 0',
	'ItemCard1Label'          => '卡槽 1',
	'ItemCard2Label'          => '卡槽 2',
	'ItemCard3Label'          => '卡槽 3',
	
	// Module: account
	// - account/changemail
	'EmailChangeTitle'        => 'Change E-mail',
	'EnterEmailAddress'       => 'Please enter an e-mail address.',
	'EmailCannotBeSame'       => 'Your new e-mail cannot be the same as your current.',
	'EmailInvalid'            => 'Invalid e-mail address.',
	'EmailAlreadyRegistered'  => "The e-mail address you've entered is already registered to another account.",
	'EmailChangeSent'         => 'An e-mail has been sent to your new address with a link that will confirm the change.',
	'EmailAddressChanged'     => 'Your e-mail address has been changed!',
	'EmailChangeFailed'       => 'Failed to change e-mail address.  Please try again later.',
	'EmailChangeHeading'      => '修改電子郵件信箱',
	'EmailChangeInfo'         => '如果你想改變你的帳戶下註冊的E-mail地址，您可以填寫下面的表單',
	'EmailChangeInfo2'        => 'After submitting the form, you will be required to confirm your new e-mail address (an e-mail will be sent to the new address with a link).',
	'EmailChangeLabel'        => '新的電子郵件地址',
	'EmailChangeInputNote'    => '必須是有效的電子郵件地址！',
	'EmailChangeButton'       => '確認修改電子郵件地址',
	// - account/changepass
	'PasswordChangeTitle'     => 'Change Password',
	'NeedCurrentPassword'     => 'Please enter your current password.',
	'NeedNewPassword'         => 'Please enter your new password.',
	'OldPasswordInvalid'      => "The password you provided doesn't match the one we have on record.",
	'ConfirmNewPassword'      => 'Please confirm your new password.',
	'NewPasswordHasUsername'  => 'Your new password must not contain your username.',
	'NewPasswordInvalid'      => 'Your new password contains invalid characters.',
	'NewPasswordSameAsOld'    => 'New password cannot be the same as your current password.',
	'NewPasswordNeedUpper'    => 'Your new password must contain at least %d uppercase letter(s).',
	'NewPasswordNeedLower'    => 'Your new password must contain at least %d lowercase letter(s).',
	'NewPasswordNeedNumber'   => 'Your new password must contain at least %d number(s).',
	'NewPasswordNeedSymbol'   => 'Your new password must contain at least %d symbol(s).',
	'PasswordHasBeenChanged'  => 'Your password has been changed, please log-in again.',
	'FailedToChangePassword'  => 'Failed to change your password.  Please contact an admin.',
	'PasswordChangeHeading'   => '修改遊戲密碼',
	'PasswordChangeInfo'      => '請輸入您的當前密碼，然後輸入新的密碼，您想使用並重新輸入以確認。',
	'CurrentPasswordLabel'    => '舊密碼',
	'NewPasswordLabel'        => '新密碼',
	'NewPasswordConfirmLabel' => '確認新密碼',
	'PasswordChangeNote'      => '請務必輸入正確的訊息。',
	'PasswordChangeNote2'     => '修改密碼後您將會自動跳轉登出！',
	'PasswordChangeButton'    => '確認修改密碼',
	// - account/changesex
	'GenderChangeTitle'       => 'Change Gender',
	'GenderChangeBadChars'    => 'You cannot change your gender if any of your characters is a: %s',
	'GenderChanged'           => 'Your gender has been changed and %d credit(s) have been deducted from your account.',
	'GenderChangedForFree'    => 'Your gender has been changed.',
	'GenderChangeHeading'     => '修改性別',
	'GenderChangeCost'        => 'Gender changes cost %s credit(s).',
	'GenderChangeBalance'     => 'Your current balance is %s credit(s).',
	'GenderChangeNoFunds'     => 'You do not have enough credits to perform a gender change at this time.',
	'GenderChangeNoCost'      => 'For you, gender changes are free.',
	'GenderChangeCharInfo'    => '如果你有如下的職業，擇不能修改性別: %s',
	'GenderChangeSubHeading'  => '請確認您真的想要轉換性別!',
	'GenderChangeFormText'    => '您想將您的性別更改至 %s?',
	'GenderChangeConfirm'     => 'Are you absolutely sure you want to change your gender?',
	'GenderChangeButton'      => '是的，我確定',
	// - account/confirm
	'AccountConfirmTitle'     => 'Confirm Account',
	'AccountConfirmUnban'     => 'Account has been confirmed and activated.',
	'AccountConfirmMessage'   => 'Your account has been confirmed and activated, you may now log-in.',
	// - account/confirmemail
	'EmailConfirmTitle'       => 'Confirm E-mail',
	'EmailConfirmFailed'      => 'There has been a technical difficulty while updating your e-mail address, please contact an admin.',
	'EmailConfirmChanged'     => 'Your e-mail address has been changed!',
	// - account/create
	'AccountCreateTitle'      => 'Create an Account',
	'AccountConfirmBan'       => 'Awaiting account activation: %s',
	'AccountCreateEmailSent'  => 'An e-mail has been sent containing account activation details, please check your e-mail and activate your account to log-in.',
	'AccountCreateFailed'     => 'Your account has been created, but unfortunately we failed to send an e-mail due to technical difficulties. Please contact a staff member and request for assistance.',
	'AccountCreated'          => 'Congratulations, you have been registered successfully and automatically logged in.',
	'AccountCreateHeading'    => '註冊帳號',
	'AccountCreateTerms'      => '遊戲規章',
	'AccountCreateInfo'       => '請先閱讀我們的 %s 之後在註冊帳號,已確保您了解我們私人伺服器的各項規定。',
	'AccountCreateInfo2'      => '通過點擊 "建立帳號" 代表你已經同意我們的 %s.',
	'AccountCreateGenderInfo' => "The gender you choose here will affect your in-game character's gender!",
	'AccountServerLabel'      => 'Server',
	'AccountUsernameLabel'    => '遊戲帳號',
	'AccountPasswordLabel'    => '遊戲密碼',
	'AccountPassConfirmLabel' => '確認密碼',
	'AccountEmailLabel'       => 'E-mail',
	'AccountGenderLabel'      => '遊戲性別',
	'AccountBirthdateLabel'   => '生日',
	'AccountSecurityLabel'    => '驗證碼',
	'AccountCreateButton'     => '建立帳號',
	'AccountInvalidChars'     => "A username can only contain these characters: '%s'",
	'InvalidLoginServer'      => 'Invalid login server selected, please try again with a valid server.',
	'InvalidLoginCredentials' => '無效的登錄帳號或密碼,可能您輸入錯誤,請重新輸入',
	'UnexpectedLoginError'    => 'Unexpected error occurred, please try again or report to an admin.',
	'CriticalLoginError'      => 'Something bad happened.  Report to an administrator ASAP.',
	'UsernameAlreadyTaken'    => "The username you've chosen has already been taken by another user.",
	'UsernameTooShort'        => sprintf('Your username should be around %d to %d characters long.', Flux::config('MinUsernameLength'), Flux::config('MaxUsernameLength')),
	'UsernameTooLong'         => sprintf('Your username should be around %d to %d characters long.', Flux::config('MinUsernameLength'), Flux::config('MaxUsernameLength')),
	'PasswordContainsUser'    => '您的密碼不能使用與帳號相同.',
	'PasswordHasUsername'     => 'Your password must not contain your username.',
	'PasswordTooShort'        => 'Your password should be around %d to %d characters long.',
	'PasswordTooLong'         => 'Your password should be around %d to %d characters long.',
	'PasswordsDoNotMatch'     => "Your passwords do not match, please make sure that you've typed them both correctly.",
	'PasswordNeedUpper'       => 'Your password must contain at least %d uppercase letter(s).',
	'PasswordNeedLower'       => 'Your password must contain at least %d lowercase letter(s).',
	'PasswordNeedNumber'      => 'Your password must contain at least %d number(s).',
	'PasswordNeedSymbol'      => 'Your password must contain at least %d symbol(s).',
	'EmailAddressInUse'       => "The e-mail address you've entered is already registered to another account.  Please use a different e-mail address.",
	'InvalidEmailAddress'     => "The e-mail address you've entered is not in a valid e-mail address format.",
	'InvalidGender'           => 'Gender should be "M" or "F"',
	'InvalidServer'           => "The server you've selected does not exist.",
	'InvalidSecurityCode'     => 'Please enter the security code correctly.',
	'InvalidPassword'         => 'Your password contains invalid characters.',
	'InvalidBirthdate'        => 'Invalid birthdate input.',
	'CriticalRegisterError'   => 'Something bad happened.  Report to an administrator ASAP.',
	// - account/edit
	'AccountEditTitle'        => 'Modify Account',
	'AccountEditTitle2'       => 'Modifying My Account',
	'AccountEditTitle3'       => 'Modifiying Account (%s)',
	'CannotModifyOwnGroupID'  => 'You cannot modify your own account group ID.',
	'CannotModifyAnyGroupID'  => 'You cannot modify account group IDs.',
	'CannotModifyGroupIDHigh' => 'You cannot set an account group ID to be higher than your own.',
	'InvalidGroupID'          => 'Invalid group ID.',
	'CannotModifyBalance'     => 'You cannot modify account balances.',
	'InvalidLastLoginDate'    => 'Invalid last login date.',
	'AccountModified'         => 'Account has been modified.',
	'AccountEditHeading'      => '修改帳戶訊息',
	'AccountEditButton'       => 'Modify Account',
	'AccountEditNotFound'     => 'No such account.',
	// - account/index
	'AccountIndexTitle'       => 'List Accounts',
	'AccountIndexHeading'     => 'Accounts',
	'LoginBetweenLabel'       => '登錄區間',
	'BirthdateBetweenLabel'   => '生日區間',
	'AccountIndexNotFound'    => 'No such account.',
	// - account/login
	'LoginTitle'              => 'Log In',
	'LoginHeading'            => '登錄帳號',
	'LoginButton'             => '登錄',
	'LoginPageMakeAccount'    => '還沒有帳號嗎? <a href="%s">建立帳號!</a>',
	'TemporarilyBanned'       => 'Your account is temporarily banned.',
	'PermanentlyBanned'       => 'Your account is permanently banned.',
	'IpBanned'                => 'The IP address you are behind is banned.',
	'PendingConfirmation'     => 'Your account is pending e-mail confirmation.',
	// - account/logout
	'LogoutTitle'             => 'Logout',
	'LogoutHeading'           => '登出帳號',
	'LogoutInfo'              => '您已經登出帳號',
	'LogoutInfo2'             => '稍後為您 <a href="%s">跳轉</a>…',
	// - account/resend
	'ResendTitle'             => 'Resend Confirmation E-mail',
	'ResendEnterUsername'     => 'Please enter your account username.',
	'ResendEnterEmail'        => 'Please enter your e-mail address.',
	'ResendFailed'            => 'Failed to resend confirmation code.',
	'ResendEmailSent'         => 'Your confirmation code has been resent, please check your e-mail and proceed to activate your account.',
	'ResendHeading'           => 'Resend Confirmation E-mail',
	'ResendInfo'              => 'Please enter your account name and e-mail address you used during the registration of the account to have us resend your confirmation e-mail.',
	'ResendServerLabel'       => 'Registered Server',
	'ResendAccountLabel'      => 'Account Username',
	'ResendEmailLabel'        => 'E-mail Address',
	'ResendServerInfo'        => 'This is the server the account was registered on.',
	'ResendAccountInfo'       => 'This is the account name you registered.',
	'ResendEmailInfo'         => 'This is the e-mail address you used during the registration of the above account.',
	'ResendButton'            => 'Resend Confirmation E-mail',
	// - account/resetpass
	'ResetPassTitle'          => 'Reset Password',
	'ResetPassEnterAccount'   => 'Please enter your account username.',
	'ResetPassEnterEmail'     => 'Please enter your e-mail address.',
	'ResetPassDisallowed'     => 'Password recovery cannot be used for this account.',
	'ResetPassFailed'         => 'Failed to send reset password e-mail.',
	'ResetPassEmailSent'      => 'An e-mail has been sent with details on how to reset your password.',
	'ResetPassTitle'          => 'Reset Password',
	'ResetPassInfo'           => 'If you lost your password, you can re-set it by entering the e-mail address you used to register your account.',
	'ResetPassInfo2'          => 'An e-mail will then be sent to the specified address with a link allowing you to reset your password, therefore a valid e-mail address is required.',
	'ResetPassServerLabel'    => 'Registered Server',
	'ResetPassAccountLabel'   => 'Account Username',
	'ResetPassEmailLabel'     => 'E-mail Address',
	'ResetPassServerInfo'     => 'This is the server the account was registered on.',
	'ResetPassAccountInfo'    => 'This is the account name you registered.',
	'ResetPassEmailInfo'      => 'This is the e-mail address you used during the registration of the above account.',
	'ResetPassButton'         => 'Send Reset Password E-mail',
	// - account/resetpw
	'ResetPwTitle'            => 'Reset Password',
	'ResetPwFailed'           => 'Failed to re-set password, please try again later.',
	'ResetPwDone'             => 'Your password has been reset and an e-mail containing your new password has been sent to you.',
	'ResetPwDone2'            => 'Your password has been reset, but we failed to deliver the e-mail containing your new password.  Please reset again to resolve this issue.',
	// - account/transfer
	'TransferTitle'           => 'Transfer Donation Credits',
	'TransferGreaterThanOne'  => 'You can only transfer credits in amounts greater than 1.',
	'TransferEnterCharName'   => 'You must input the character name of who will receive the credits.',
	'TransferNoCharExists'    => "Character '%s' does not exist. Please make sure you typed it correctly.",
	'TransferNoBalance'       => 'You do not have a sufficient balance to make the transfer.',
	'TransferUnexpectedError' => 'Unexpected error occurred.',
	'TransferSuccessful'      => 'Credits have been transferred!',
	'TransferHeading'         => '積分轉帳',
	'TransferSubHeading'      => 'Credits will be transferred to a character on the %s server.',
	'TransferInfo'            => 'You currently have %s credit(s).',
	'TransferInfo2'           => 'Enter the amount you would like to transfer and the character name belonging to the account you would like your credits transferred to.',
	'TransferAmountLabel'     => 'Amount of Credits',
	'TransferCharNameLabel'   => 'Character Name',
	'TransferAmountInfo'      => 'This is the amount of credits you would like to send.',
	'TransferCharNameInfo'    => 'This is the character name of who will be receiving the credits.',
	'TransferConfirm'         => 'Are you sure you want to do this?',
	'TransferButton'          => 'Transfer',
	'TransferNoCredits'       => '您的帳戶沒有任何的積分.',
	// - account/view
	// * account/view submenus
	'ModifyAccountLink'       => '修改帳戶訊息',
	'AccountViewTitle'        => 'View Account',
	'AccountViewTitle2'       => 'Viewing Account (%s)',
	'AccountViewTitle3'       => '查看我的帳戶',
	'AccountTempBanFailed'    => 'Failed to temporarily ban account.',
	'AccountPermBanFailed'    => 'Failed to permanently ban account.',
	'AccountTempBanUnauth'    => 'You are unauthorized to place temporary bans on this account.',
	'AccountPermBanUnauth'    => 'You are unauthorized to place permanent bans on this account.',
	'AccountLiftTempBan'      => 'Account has been unbanned.',
	'AccountLiftPermBan'      => 'Account has been unbanned.',
	'AccountLiftBanUnauth'    => "You are unauthorized to remove this account's ban status.",
	'AccountViewHeading'      => '帳號訊息',
	'AccountViewDonateLink'   => '(Donate!)',
	'AccountViewTempBanLabel' => 'Temporary Ban',
	'AccountViewPermBanLabel' => 'Permanent Ban',
	'AccountViewUnbanLabel'   => 'Remove Ban',
	'AccountBanReasonLabel'   => 'Reason:',
	'AccountBanUntilLabel'    => 'Ban Until:',
	'AccountTempBanButton'    => 'Ban Account',
	'AccountPermBanButton'    => 'Permanently Ban Account',
	'AccountTempUnbanButton'  => 'Remove Temporary Ban',
	'AccountPermUnbanButton'  => 'Remove Permanent Ban',
	'AccountBanConfirm'       => 'Are you sure?',
	'AccountBanLogSubHeading' => 'Ban Log for %s (recent to oldest)',
	'BanLogBanTypeLabel'      => 'Ban Type',
	'BanLogBanDateLabel'      => 'Ban Date',
	'BanLogBanReasonLabel'    => 'Ban Reason',
	'BanLogBannedByLabel'     => 'Banned By',
	'BanLogBannedByCP'        => 'Control Panel',
	'BanTypeUnbanned'         => 'Unbanned',
	'BanTypePermBanned'       => 'Permanently Banned',
	'BanTypeTempBanned'       => 'Temporarily Banned',
	'AccountViewCharSubHead'  => '●角色訊息',
	'AccountViewSlotLabel'    => '欄位',
	'AccountViewCharLabel'    => '角色名稱',
	'AccountViewClassLabel'   => '職業',
	'AccountViewLvlLabel'     => '基本等級',
	'AccountViewJlvlLabel'    => '職業等級',
	'AccountViewZenyLabel'    => '金錢',
	'AccountViewGuildLabel'   => '公會',
	'AccountViewStatusLabel'  => '狀態',
	'AccountViewPrefsLabel'   => '進階設置',
	'CharModifyPrefsLink'     => '修改進階設置',
	'AccountViewNoChars'      => 'This account has no characters on %s.',
	'AccountViewStorage'      => '●倉庫訊息',
	'AccountViewStorageCount' => '%s 有 %s 個道具在倉庫.',
	'AccountViewNoStorage'    => '沒有倉庫訊息資訊.',
	'AccountViewNotFound'     => "Records indicate that the account you're trying to view does not exist.",
	// - account/xferlog
	'XferLogTitle'            => 'Credit Transfer History',
	'XferLogHeading'          => '信用卡轉帳紀錄',
	'XferLogReceivedSubHead'  => '轉帳: 接收',
	'XferLogSentSubHead'      => '轉帳: 發送',
	'XferLogCreditsLabel'     => 'Credits',
	'XferLogFromLabel'        => 'From E-mail',
	'XferLogDateLabel'        => 'Transfer Date',
	'XferLogCharNameLabel'    => 'To Character',
	'XferLogNotReceived'      => '您還沒有收到任何信貸轉帳.',
	'XferLogNotSent'          => '您還沒有發送任何信貸轉帳.',
	
	// Module: character
	// - character/changeslot
	// - character/index
	// - character/mapstats
	// - character/online
	// - character/prefs
	// - character/resetlook
	'CantResetLookWhenOnline' => '不能重置 %s 角色外觀,角色必須離線.',
	'ResetLookSuccessful'     => "%s 的外觀已重置!",
	'ResetLookFailed'         => "無法重置 %s 的角色外觀.",
	// - character/resetpos
	'CantResetPosWhenOnline'  => '不能解除 %s 角色卡點,角色必須離線.',
	'CantResetFromCurrentMap' => "當前位置，不允許解除 %s 卡點.",
	'ResetPositionSuccessful' => "%s 的卡點位置已解除!",
	'ResetPositionFailed'     => "無法解除 %s 的卡點位置.",
	// - character/view
	// - character/divorce
	'DivorceTitle'            => 'Divorce',
	'DivorceHeading'          => 'Divorce',
	'DivorceNotMarried'       => '%s is not married.',
	'DivorceInvalidPartner'   => 'Invalid partner ID.',
	'DivorceInvalidChild'     => 'Invalid child ID.',
	'DivorceMustBeOffline'    => 'Both %s and his/her partner must be off-line.',
	'DivorceMustBeOffline2'   => '%s, his/her partner and their child must be off-line.',
	'DivorceText1'            => "Are you sure you want to divorce %s and his/her partner?",
	'DivorceText2'            => 'If %s has a child, the child will also be orphaned.',
	'DivorceText3'            => 'Wedding rings will also be deleted.',
	'DivorceButton'           => 'Yes, do it please.',
	'DivorceSuccessful'       => '%s has been divorced!',
	
	// Module: cplog
	// - cplog/index.php
	// - cplog/login.php
	// - cplog/paypal.php
	// - cplog/resetpass.php
	// - cplog/txnview.php
	
	// Module: donate
	// - donate/complete
	// - donate/history
	// - donate/index
	// - donate/trusted
	
	// Module: errors
	// - errors/missing_action
	'MissingActionTitle'      => 'Missing Action',
	'MissingActionHeading'    => 'Missing Action!',
	'MissingActionModLabel'   => 'Module:',
	'MissingActionActLabel'   => 'Action:',
	'MissingActionReqLabel'   => 'Request URI:',
	'MissingActionLocLabel'   => 'File system location:',
	// - errors/missing_view
	'MissingViewTitle'        => 'Missing View',
	'MissingViewHeading'      => 'Missing View!',
	'MissingViewModLabel'     => 'Module:',
	'MissingViewActLabel'     => 'Action:',
	'MissingViewReqLabel'     => 'Request URI:',
	'MissingViewLocLabel'     => 'File system location:',
	
	// Module: guild
	// - guild/export
	// - guild/index
	// - guild/view
	
	// Module: history
	// - history/cplogin
	'HistoryCpLoginTitle'     => 'Control Panel Logins',
	'HistoryCpLoginHeading'   => '控制面板登錄記錄',
	'HistoryLoginDateLabel'   => '登錄日期/時間',
	'HistoryIpAddrLabel'      => 'IP 位址',
	'HistoryErrorCodeLabel'   => '錯誤代碼',
	'HistoryNoCpLogins'       => 'No control panel login attempts found.',
	// -history/emailchange
	'HistoryEmailTitle'       => 'E-Mail Changes',
	'HistoryEmailHeading'     => '電子信箱修改記錄',
	'HistoryEmailRequestDate' => 'Request Date/Time',
	'HistoryEmailRequestIp'   => 'Request IP',
	'HistoryEmailOldAddress'  => 'Old E-Mail',
	'HistoryEmailNewAddress'  => 'New E-Mail',
	'HistoryEmailChangeDate'  => 'Change Date',
	'HistoryEmailChangeIp'    => 'Change IP',
	'HistoryNoEmailChanges'   => '沒有電子信箱修改記錄訊息.',
	// - history/gamelogin
	'HistoryGameLoginTitle'   => 'Game Logins',
	'HistoryGameLoginHeading' => '遊戲登錄記錄',
	'HistoryRepsCodeLabel'    => '響應代碼',
	'HistoryLogMessageLabel'  => '日誌訊息',
	'HistoryNoGameLogins'     => 'No in-game login attempts found.',
	// - history/index
	'HistoryIndexTitle'       => 'My Account History',
	'HistoryIndexHeading'     => '我的帳號日誌',
	'HistoryIndexInfo'        => '從這裡可以查看你的帳戶過去的操作動作記錄',
	'HistoryIndexInfo2'       => '請從選單中選擇一個動作.',
	// - history/passchange
	'HistoryPassChangeTitle'      => 'Password Changes',
	'HistoryPassChangeHeading'    => '密碼修改記錄',
	'HistoryPassChangeChangeDate' => 'Change Date',
	'HistoryPassChangeChangeIp'   => 'Change IP',
	'HistoryNoPassChanges'        => '沒有修改密碼記錄訊息.',
	// -history/passreset
	'HistoryPassResetTitle'       => 'Password Resets',
	'HistoryPassResetHeading'     => '密碼重置記錄',
	'HistoryPassResetRequestDate' => 'Request Date/Time',
	'HistoryPassResetRequestIp'   => 'Request IP',
	'HistoryPassResetResetDate'   => 'Reset Date',
	'HistoryPassResetResetIp'     => 'Reset IP',
	'HistoryNoPassResets'         => '沒有重置密碼訊息',
	
	// Module: ipban
	// - ipban/add
	'IpbanAddTitle'           => 'Add IP Ban',
	'IpbanEnterIpPattern'     => 'Please input an IP address or pattern.',
	'IpbanInvalidPattern'     => 'Invalid IP address or pattern.',
	'IpbanWhitelistedPattern' => 'This pattern is whitelisted and cannot be blocked.',
	'IpbanEnterReason'        => 'Please enter a reason for the IP ban.',
	'IpbanSelectUnbanDate'    => 'Unban date is required.',
	'IpbanFutureDate'         => 'Unban date must be specified to a future date.',
	'IpbanAlreadyBanned'      => 'A matching IP (%s) has already been banned.',
	'IpbanPatternBanned'      => "The IP address/pattern '%s' has been banned.",
	'IpbanAddFailed'          => 'Failed to add IP ban.',
	'IpbanAddHeading'         => 'Add IP Ban',
	'IpbanIpAddressLabel'     => 'IP Address',
	'IpbanReasonLabel'        => 'Ban Reason',
	'IpbanUnbanDateLabel'     => 'Unban Date',
	'IpbanIpAddressInfo'      => 'You may specify a pattern such as 218.139.*.*',
	'IpbanAddButton'          => 'Add IP Ban',
	// - ipban/edit
	'IpbanEditTitle'          => 'Modify IP Ban',
	'IpbanEnterEditReason'    => 'Please enter a reason for the IP ban modification.',
	'IpbanEditFailed'         => 'Failed to modify IP ban.',
	'IpbanEditHeading'        => 'Modify IP Ban',
	'IpbanEditReasonLabel'    => 'Edit Reason',
	'IpbanEditButton'         => 'Modify IP Ban',
	// - ipban/index
	'IpbanListTitle'          => 'IP Ban List',
	'IpbanListHeading'        => 'IP Ban List',
	'IpbanBannedIpLabel'      => 'Banned IP',
	'IpbanBanDateLabel'       => 'Ban Date',
	'IpbanBanReasonLabel'     => 'Ban Reason',
	'IpbanBanExpireLabel'     => 'Ban Expiration Date',
	'IpbanModifyLink'         => 'Modify',
	'IpbanRemoveLink'         => 'Remove',
	'IpbanUnbanButton'        => 'Unban Selected',
	'IpbanListNoBans'         => 'There are currently no IP bans.',
	// - ipban/remove
	'IpbanRemoveTitle'        => 'Remove IP Ban',
	'IpbanEnterRemoveReason'  => 'Please enter a reason for the IP ban removal.',
	'IpbanNotBanned'          => 'No matching IP (%s) is currently banned.',
	'IpbanPatternUnbanned'    => "The IP address/pattern '%s' has been unbanned.",
	'IpbanRemoveFailed'       => 'Failed to remove IP ban.',
	'IpbanRemoveHeading'      => 'Remove IP Ban',
	'IpbanRemoveReasonLabel'  => 'Unban Reason',
	'IpbanRemoveButton'       => 'Remove IP Ban',
	// - ipban/unban
	'IpbanNothingToUnban'     => 'Nothing to unban.',
	'IpbanEnterUnbanReason'   => 'Please enter a reason for lifting the IP ban(s).',
	'IpbanUnbanned'           => 'Lifted selected IP ban(s)!',
	'IpbanUnbanFailed'        => 'Failed to lift %d of the specified IP unban(s)!',
	
	// Module: item
	// - item/add
	// - item/copy
	// - item/edit
	// - item/index
	// - item/view
	
	// Module: itemshop
	// - itemshop/add
	// - itemshop/delete
	// - itemshop/edit
	// - itemshop/imagedel
	
	// Module: logdata
	// - logdata/chat
	// - logdata/command
	'CommandLogTitle'         => 'List Commands',
	'CommandLogHeading'       => 'Commands',
	'CommandLogNotFound'      => 'No commands found.',
	'CommandLogDateLabel'     => 'Date/Time',
	'CommandLogAccountIdLabel'=> 'Account ID',
	'CommandLogCharIdLabel'   => 'Character ID',
	'CommandLogCharNameLabel' => 'Character Name',
	'CommandLogCommandLabel'  => 'Command',
	'CommandLogMapLabel'      => 'Map',
	// - logdata/index
	// - logdata/login
	// - logdata/pick
	'PickLogTitle'            => 'List Item Picks',
	'PickLogHeading'          => 'Item Picks',
	'PickLogNotFound'         => 'No item picks found.',
	'PickLogDateLabel'        => 'Date/Time',
	'PickLogCharacterLabel'   => 'Character',
	'PickLogTypeLabel'        => 'Type',
	'PickLogItemLabel'        => 'Item Name',
	'PickLogAmountLabel'      => 'Amount',
	'PickLogRefineLabel'      => 'Refine',
	'PickLogCard0Label'       => 'Card 0',
	'PickLogCard1Label'       => 'Card 1',
	'PickLogCard2Label'       => 'Card 2',
	'PickLogCard3Label'       => 'Card 3',
	'PickLogMapLabel'         => 'Map',
	// - logdata/zeny
	'ZenyLogTitle'            => 'List Zeny Log',
	'ZenyLogHeading'          => 'Zeny Log',
	'ZenyLogNotFound'         => 'No zeny logs found.',
	'ZenyLogDateLabel'        => 'Date/Time',
	'ZenyLogCharacterLabel'   => 'Character',
	'ZenyLogSourceLabel'      => 'Source',
	'ZenyLogTypeLabel'        => 'Type',
	'ZenyLogAmountLabel'      => 'Amount',
	'ZenyLogMapLabel'         => 'Map',
	
	// Module: mail
	// - mail/index
	'MailerTitle'             => 'Form Mailer',
	'MailerHeading'           => 'Form Mailer',
	'MailerEnterToAddress'    => 'Please enter a "to" address.',
	'MailerEnterSubject'      => 'Please enter a subject.',
	'MailerEnterBodyText'     => 'Please enter some body text.',
	'MailerEmailHasBeenSent'  => 'Your e-mail has been successfully sent to %s.',
	'MailerFailedToSend'      => 'The mailer system failed to send the e-mail.  This could be a misconfiguration.',
	'MailerInfo'              => 'You may use the below mail form to send an e-mail using the control panel.',
	'MailerFromLabel'         => 'From',
	'MailerToLabel'           => 'To',
	'MailerSubjectLabel'      => 'Subject',
	'MailerBodyLabel'         => 'Body',
	'MailerBodyInfo'          => 'Body is in Markdown syntax.',
	
	// Module: main
	// - main/index
	'MainPageHeading'         => 'Flux Control Panel',
	'MainPageInfo'            => "If you are seeing this page, it's likely that you've successfully installed Flux.",
	'MainPageInfo2'           => "Would you like to change this page? Well, here's how you can:",
	'MainPageStep1'           => 'Open "%s" in your text editor.',
	'MainPageStep2'           => 'Edit the file from your editor and save your changes.',
	'MainPageThanks'          => 'Thanks for using Flux!',
	// - main/pagenotfound
	'PageNotFoundTitle'       => '404 Page Not Found',
	'PageNotFoundHeading'     => 'Page Not Found',
	'PageNotFoundInfo'        => 'The page you have requested was not found on our server.  Please check the address and make sure it is correct, and try again.',
	// - main/preprocess
	'DisallowedDuringWoE'     => 'The page you have requested is not accessible during WoE.',
	
	// Module: monster
	// - monster/index
	// - monster/view
	
	// Module: purchase
	// - purchase/add
	// - purchase/cart
	// - purchase/checkout
	// - purchase/clear
	// - purchase/index
	// - purchase/pending
	// - purchase/remove
	
	// Module: ranking
	// - ranking/character
	// - ranking/guild
	// - ranking/zeny
	
	// Module: server
	// - server/info
	'ServerInfoTitle'         => 'Server Information',
	'ServerInfoHeading'       => '伺服器訊息統計',
	'ServerInfoSubHeading2'   => '●職業統計',
	'ServerInfoAccountLabel'  => '帳號統計',
	'ServerInfoCharLabel'     => '角色統計',
	'ServerInfoGuildLabel'    => '公會統計',
	'ServerInfoPartyLabel'    => '隊伍統計',
	'ServerInfoZenyLabel'     => '金錢統計',
	// - server/status
	'ServerStatusTitle'       => 'Current Server Status',
	'ServerStatusHeading'     => '伺服器狀態',
	'ServerStatusServerLabel' => '伺服器',
	'ServerStatusLoginLabel'  => '登錄服務器',
	'ServerStatusCharLabel'   => '角色服務器',
	'ServerStatusMapLabel'    => '地圖服務器',
	'ServerStatusOnlineLabel' => '在線人數',
	
	// Module: service
	// - service/tos
	'TermsTitle'              => 'Terms of Service',
	'TermsHeading'            => 'Terms of Service',
	'TermsInfo'               => 'Please read before creating an account!',
	'TermsInfo2'              => "FOR CONTROL PANEL ADMINISTRATOR:  You may add your server's ToS in this view file directly.  The location of the view file is: %s",
	
	// Module: unauthorized
	// - unauthorized/index
	'UnauthorizedTitle'       => 'Unauthorized',
	'UnauthorizedHeading'     => 'Unauthorized',
	'UnauthorizedInfo'        => 'You are unauthorized to view this page. <a href="%s">Redirecting…</a>',
	
	// Module: woe
	// - woe/index
	'WoeTitle'                => 'WoE Hours',
	'WoeHeading'              => '攻城戰開放時間',
	'WoeServerTimeInfo'       => '當前伺服器時間是:',
	'WoeServerLabel'          => '伺服器',
	'WoeTimesLabel'           => '開放時間',
	'WoeNotScheduledInfo'     => '沒有開放攻城戰時間.',
);
?>