<?php

	$about = array(
		'name' => 'Русский',
		'author' => array(
			'name' => 'Александр Бирюков',
			'email' => 'info@alexbirukov.ru',
			'website' => 'http://alexbirukov.ru'
		),
		'release-date' => '2016-08-24'
	);

	/**
	 * Symphony Core
	 */
	$dictionary = array(

		'$param' =>
		'$param',

		'$param:default' =>
		'$param:default',

		'%1$s &ndash; %2$s' =>
		'%1$s &ndash; %2$s',

		'%1$s &ndash; %2$s &ndash; %3$s' =>
		'%1$s &ndash; %2$s &ndash; %3$s',

		'%1$s is not a supported encoding type. Please use %2$s or %3$s. You can also use %4$s for no encoding.' =>
		'%1$s неподдерживаемый тип кодировки. Используйте %2$s или %3$s. Так же вы можете использовать %4$s для работы без перекодирования.',

		'%1$s released on %2$s' =>
		'%1$s опубликовано на %2$s',

		'%d entries' =>
		'%d записей',

		'%d of %d entries (filtered)' =>
		'%d из %d записей (фильтрация)',

		'%s ' =>
		'%s ',

		'%s Allow remote login via' =>
		'%s Разрешить удаленный вход через',

		'%s Checked by default' =>
		'%s Включено по умолчанию',

		'%s Requires authentication' =>
		'%s Требуется аутентификация',

		'%s accepts strings only; arrays are not allowed.' =>
		'%s принимает только строки; массивы не поддерживаются.',

		'%s has timed out' =>
		'%s таймаут превышен',

		'%s is a reserved name used by the system and is not allowed for a field handle. Try using %s instead.' =>
		'%s зарезервированное системой имя и не может быть использовано. Попробуйте использовать другое имя %s.',

		'&larr; Previous' =>
		'&larr; Предыдущие',

		'\'%s\' contains invalid data. Please check the contents.' =>
		'\'%s\' содержит неверный формат данных. Пожалуйста проверьте содержимое.',

		'A 403 type page already exists.' =>
		'Страница для ошибки 403 уже существует.',

		'A 404 type page already exists.' =>
		'Страница для ошибки 404 уже существует.',

		'A Data source with the name %s already exists' =>
		'Источник данных с именем <code>%s</code> уже существует',

		'A Section with the handle %s already exists' =>
		'Раздел с указанным заголовком %s уже существует',

		'A database error occurred while attempting to reorder.' =>
		'При пересортировке в базе данных произошла ошибка.',

		'A field with that element name already exists. Please choose another.' =>
		'Поле с таким именем уже существует. Укажите другое имя.',

		'A field with this handle already exists. All handle must be unique.' =>
		'Поле с указаным именем уже существует. Имя должно быть уникальным.',

		'A fully qualified domain name (FQDN) of your server, e.g. "www.example.com". If left empty, Symphony will attempt to find an IP address for the EHLO/HELO greeting.' =>
		'Полное доменное имя (FQDN) вашего сервера, например "www.example.com". Если оставить поле пустым, то Symphony попытается самостоятельно определить адрес через EHLO/HELO.',

		'A message must be supplied unless the alert is of type Alert::ERROR' =>
		'Если сообщение имеет тип отличный от Alert::ERROR должно выводиться.',

		'A new password has been requested for your account. Login using the following link, and change your password via the Authors area:' =>
		'Поступил запрос на создание нового пароля для вашего аккаунта. Войдите в систему используя данную ссылку, и измените свой пароль в разделе для Авторов:',

		'A page number must be set' =>
		'Должен быть установлен номер страницы',

		'A page with that handle already exists' =>
		'Сраница с таким обработчиком уже существует.',

		'A page with that title already exists' =>
		'Страница с таким названием уже существует.',

		'A result limit must be set' =>
		'Должно быть установлено конечное ограничение',

		'Access Denied' =>
		'Доступ запрещён',

		'Actions' =>
		'Действия',

		'Add field' =>
		'Добавить поле',

		'Add fields' =>
		'Добавить поля',

		'Add filter' =>
		'Добавить фильтр',

		'Add item' =>
		'Добавить элемент',

		'Admin Only' =>
		'Только для администратора',

		'All' =>
		'Все',

		'All of these fields can be set dynamically using the exact field name of another field in the form as shown below in the example form:' =>
		'Все эти поля могут быть созданы динамически с использованием названия другого поля формы, как показано ниже в примере:',

		'Allow Multiple' =>
		'Разрешить множественный выбор',

		'Allow filtering of section entries' =>
		'Разрешить фильтрацию записей раздела',

		'Allow selection of multiple authors' =>
		'Разрешить множественное указание авторов',

		'Allow selection of multiple options' =>
		'Разрешить множественное выделение',

		'An Event with the name %s already exists' =>
		'Событие с именем %s уже существует',

		'An email containing a customised login link has been sent to %s. It will expire in 2 hours.' =>
		'Письмо, содержащее ссылку для авторизации было отправлено на %s. Ссылка для авторизации будет действительна в течение 2 часов.',

		'An error occurred while processing this form. See below for details.' =>
		'Во время обработки формы произошла ошибка. Для получения дополнительной информации смотрите детали обработки.',

		'An error occurred while retrieving filtered entries. Showing all entries instead.' =>
		'Во время обработки отфильтрованых записей произошли ошибки. Показаны все записи.',

		'An extension requires updating.' =>
		'Требуется обновить расширение.',

		'An index type page already exists.' =>
		'Страница и типом index уже существует.',

		'An unknown database occurred while attempting to create the section.' =>
		'Во время создания сущности произошла неизвестная ошибка базы данных.',

		'An update has been found in your installation to upgrade Symphony to %s.' =>
		'Найдено новое обновление для Symphony, %s.',

		'An update script has been found in your installation.' =>
		'Скрипт обновления найден в вашем установщике.',

		'Apply' =>
		'Применить',

		'Apply filters' =>
		'Применить фильтры',

		'Apr' =>
		'Апр',

		'April' =>
		'Апрель',

		'Are you sure you want to delete all entries in the selected sections?' =>
		'Вы уверены, что хотите удалить все записи в выбранном разделе?',

		'Are you sure you want to delete the selected entries?' =>
		'Вы уверены, что хотите удалить все выбранные записи?',

		'Are you sure you want to delete the selected pages?' =>
		'вы уверены, что хотите удалить выбранные страницы?',

		'Are you sure you want to delete the selected sections?' =>
		'Вы уверены, что хотите удалить раздел?',

		'Are you sure you want to delete this author?' =>
		'Вы уверены, что хотите удалить указанного автора?',

		'Are you sure you want to delete this data source?' =>
		'Вы уверены, что хотите удалить источник данных?',

		'Are you sure you want to delete this entry?' =>
		'Вы уверены, что хотите удалить запись?',

		'Are you sure you want to delete this event?' =>
		'Вы уверены, что хотите удалить событие?',

		'Are you sure you want to delete this page?' =>
		'Вы уверены, что хотите удалить страницу?',

		'Are you sure you want to delete this section?' =>
		'Вы уверены, что хотите удалить раздел?',

		'Are you sure you want to proceed?' =>
		'Вы уверены, что хотите продолжить?',

		'Are you sure you want to uninstall the selected extensions?' =>
		'Вы уверены, что хотите удалить выбранное расширение?',

		'Argument `$%1$s` is not of type `%2$s`, given `%3$s`.' =>
		'Аргумент `$%1$s` имеет тип отличный от `%2$s`, укажите `%3$s`.',

		'Association Editor' =>
		'Связанный автор',

		'Association Interface' =>
		'Связанный интерфейс',

		'At least one source must be specified, dynamic or static.' =>
		'По крайней мере один динамический или статический источник даных должен быть определен.',

		'Attach to Page' =>
		'Присоединить к странице',

		'Attach to Pages' =>
		'Присоединить к страницам',

		'Aug' =>
		'Авг',

		'August' =>
		'Август',

		'Author' =>
		'Автор',

		'Author ID' =>
		'ID Автора',

		'Author created at %s.' =>
		'Автор создан в %s.',

		'Author not found' =>
		'Автор не найден',

		'Author types' =>
		'Типы авторов',

		'Author updated at %s.' =>
		'Автор обновлен в %s.',

		'Authors' =>
		'Авторы',

		'Authors can set up a differing language in their profiles.' =>
		'Авторы могут сами выбирать системный язык для своих профилей.',

		'Best Regards,' =>
		'С уважением,',

		'Blueprints' =>
		'Структура',

		'Can not add the element itself as one of its child' =>
		'Невозможно добавить элемент, как собственного потомка',

		'Can not call AUTH again.' =>
		'Невозможно опять отправить AUTH',

		'Can not call HELO on existing session' =>
		'Не удалось отправить команду HELO в текущей сессии',

		'Cancel' =>
		'Отмена',

		'Cannot request a page callback without first specifying the page.' =>
		'Перед запросом вызова обратной связи страницы, сначала необходимо указать страницу.',

		'Change Password' =>
		'Смена пароля',

		'Check your activity log' =>
		'Проверьте лог активности',

		'Checkbox' =>
		'Чекбокс',

		'Children' =>
		'Потомок',

		'Clear' =>
		'Очистить',

		'Clear filter' =>
		'Очистить фильтр',

		'Clear filters' =>
		'Сбросить фильтры',

		'Click to select' =>
		'Нажмите для выбора',

		'Collapse all' =>
		'Свернуть все',

		'Comparison mode' =>
		'Режим сравнения',

		'Compatible' =>
		'Совместимый',

		'Conditions' =>
		'Условия',

		'Confirm Password' =>
		'Подтвердите пароль',

		'Confirmation' =>
		'Подтверждение',

		'Content' =>
		'Контент',

		'Could not find Data Source %s.' =>
		'Не удалось найти источник данных %s.',

		'Could not find Email Gateway %s.' =>
		'Не удаётся найти Email шлюз %s.',

		'Could not find Event %s.' =>
		'Не удаётся найти событие %s.',

		'Could not find Field %1$s at %2$s.' =>
		'Не удалось найти поле %1$s в %2$s.',

		'Could not find Text Formatter %s.' =>
		'Не удалось найти парсер текста %s.',

		'Could not find extension %s at location %s.' =>
		'Не удалось найти расширение %s в каталоге %s.',

		'Could not read from %s' =>
		'Не удалось прочитать из %s',

		'Could not send request: %s' =>
		'Не удаётся отправить запрос: %s',

		'Create Author' =>
		'Создать автора',

		'Create Data Source' =>
		'Создать источник данных',

		'Create Entry' =>
		'Создать запись',

		'Create Event' =>
		'Создать событие',

		'Create New' =>
		'Добавить',

		'Create Page' =>
		'Создать страницу',

		'Create Section' =>
		'Создать раздел',

		'Create a new author' =>
		'Добавить нового автора',

		'Create a new data source' =>
		'Добавить источник данных',

		'Create a new entry' =>
		'Создать новую запись',

		'Create a new event' =>
		'Создать событие',

		'Create a new page' =>
		'Создать новую страницу',

		'Create a section' =>
		'Создать раздел',

		'Create another?' =>
		'Создать ещё?',

		'Created by %1$s at %2$s' =>
		'Создано %1$s в %2$s',

		'Custom Preferences' =>
		'Пользовательские настройки',

		'Custom XML' =>
		'Пользовательский XML',

		'Data Source' =>
		'Источник данных',

		'Data Source created at %s.' =>
		'Источник данных создан %s.',

		'Data Source updated at %s.' =>
		'Источник данных обновлён %s.',

		'Data Sources' =>
		'Источники данных',

		'Data returned is invalid.' =>
		'Полученные данные некорректны.',

		'Data source not executed, forbidden parameter was found.' =>
		'Источник данных не выполнен т. к. был указан недопустимый параметр.',

		'Data source not executed, required parameter is missing.' =>
		'Источник данных не получен, не указан требуемый параметр.',

		'Data source output grouping is not supported by the %s field' =>
		'Вывод источника данных не поддерживает группировку по полю %s',

		'DataSource' =>
		'Источник данных',

		'Database Error' =>
		'Ошибка БД',

		'Date' =>
		'Дата',

		'Debug' =>
		'Отладчик',

		'Dec' =>
		'Дек',

		'December' =>
		'Декабрь',

		'Default Area' =>
		'Начальная страница',

		'Default Cache Settings' =>
		'Настройки кэша по умолчанию',

		'Default Email Settings' =>
		'Стандартные параметры Email',

		'Default date' =>
		'Дата по умолчению',

		'Delete' =>
		'Удалить',

		'Delete Entries' =>
		'Удалить записи',

		'Delete this author' =>
		'Удалить автора',

		'Delete this data source' =>
		'Удалить источник данных',

		'Delete this entry' =>
		'Удалить запись',

		'Delete this event' =>
		'Удалить событие',

		'Delete this page' =>
		'Удалить страницу',

		'Delete this section' =>
		'Удалить раздел',

		'Dependencies' =>
		'Зависимости',

		'Description' =>
		'Описание',

		'Destination Directory' =>
		'Целевой каталог',

		'Destination folder is not writable.' =>
		'Каталог не доступен для записи.',

		'Detach from Page' =>
		'Отсоединить от страницы',

		'Developer' =>
		'Разработчик',

		'Disable' =>
		'Выключить',

		'Disabled' =>
		'Выключено',

		'Discuss' =>
		'Обсудить',

		'Display associations in entries table' =>
		'Отображать смежные записи в таблице',

		'Display in entries table' =>
		'Отображать записи в таблице',

		'Display time' =>
		'Отображать время',

		'Documentation' =>
		'Документация',

		'Dynamic Values' =>
		'Динамические значения',

		'E-mail address entered is invalid' =>
		'Введён некорректный Email',

		'E-mail address is already taken' =>
		'Указанный Email уже используется',

		'E-mail address is required' =>
		'Укажите Email',

		'Edit' =>
		'Править',

		'Edit Section' =>
		'Редактировать раздел',

		'Edit Section Configuration' =>
		'Редактировать настройки раздела',

		'Email' =>
		'Email',

		'Email Address' =>
		'Email адрес',

		'Email Address or Username' =>
		'Адрес эл. почты или имя пользователя',

		'Email Gateway Error' =>
		'Ошибка шлюза Email',

		'Email subject cannot be empty.' =>
		'Тема письма не может быть пустой.',

		'Email this author' =>
		'Email автора',

		'Email: SMTP' =>
		'Email: SMTP',

		'Email: Sendmail' =>
		'Email: Sendmail',

		'Enable' =>
		'Включить',

		'Enable pagination' =>
		'Включить пагинацию',

		'Enabled' =>
		'Включено',

		'Enforced type `%1$s` for argument `$%2$s` does not match any known variable types.' =>
		'Указаный тип `%1$s` для аргумента `$%2$s` не совпадает ни с одним известным типом данных.',

		'Enter valid XML, exclude XML declaration' =>
		'Введите валидный XML, исключая XML декларацию',

		'Enter your email address or username to be sent further instructions for logging in.' =>
		'Укажите свой email или имя пользователя, чтобы получить инструкции по входу в систему.',

		'Entries' =>
		'Записи',

		'Entries per Page' =>
		'Записей на странице',

		'Entry [created | edited] successfully.' =>
		'Запись [создана | отредактирована] успешно.',

		'Entry created at %s.' =>
		'Запись создана в %s.',

		'Entry created successfully.' =>
		'Запись успешно создана.',

		'Entry edited successfully.' =>
		'Запись успешно отредактирована.',

		'Entry encountered errors when saving.' =>
		'При сохранении записи возникли ошибки.',

		'Entry limit specified was not a valid type. String or Integer expected.' =>
		'Неверно указан лимит записей. Необходимо указать строку или число.',

		'Entry updated at %s.' =>
		'Запись обновлена в %s.',

		'Error creating Symphony extension manager.' =>
		'Ошибка запуска менеджера расширений',

		'Error creating field object with id %1$d, for filtering in data source %2$s. Check this field exists.' =>
		'Ошибка создания поля объекта с ID %1$d для выполнения фильтрации в источнике данных %2$s. Проверьте наличие данного поля.',

		'Essentials' =>
		'Основное',

		'Event' =>
		'Событие',

		'Event Filters add additional conditions or actions to an event.' =>
		'Фильтр событий добавляет дополнительные условия или действия к событию.',

		'Event created at %s.' =>
		'Событие создано %s.',

		'Event updated at %s.' =>
		'Событие обновлено %s.',

		'Events' =>
		'События',

		'Example Front-end Form Markup' =>
		'Пример кода формы для клиентской страницы',

		'Example XML' =>
		'Пример XML',

		'Existing Values' =>
		'Существующие значения',

		'Expand all' =>
		'Развернуть все',

		'Extensions' =>
		'Расширения',

		'Failed to delete %s.' =>
		'Ошибка удаления %s.',

		'Failed to load URL, status code %d was returned.' =>
		'Ошибка загрузки URL, код ошибки %d.',

		'Failed to write Data source to disk.' =>
		'Ошибка записи источника данных на диск',

		'Failed to write Event to disk.' =>
		'Ошибка записи события на диск.',

		'Feb' =>
		'Фев',

		'February' =>
		'Февраль',

		'Fields' =>
		'Поля',

		'Fields must be added to this section before an entry can be created.' =>
		'Все поля должны быть добавлены перед тем, как ва начнёте добавлять записи в раздел.',

		'File Upload' =>
		'Загрузка файла',

		'File chosen in ‘%1$s’ exceeds the maximum allowed upload size of %2$s specified by your host.' =>
		'Выбранный файл ‘%1$s’ превышает максимально допустимое значение размера %2$s, установленное на вашем хостинге.',

		'File chosen in ‘%1$s’ exceeds the maximum allowed upload size of %2$s, specified by Symphony.' =>
		'Выбранный файл ‘%1$s’ превышает максимально допустимое значение размера %2$s, установленное в Symphony.',

		'File chosen in ‘%s’ does not match allowable file types for that field.' =>
		'Выбранный файл ‘%s’ не соответствует допустимым типам файлов для данного поля.',

		'File chosen in ‘%s’ is blacklisted for that field.' =>
		'Указанный файл ‘%s’ находится в чёрном списке данного поля.',

		'File chosen in ‘%s’ was only partially uploaded due to an error.' =>
		'Выбранный файл ‘%1$s’ превышает максимально допустимое значение размера %2$s, установленное в Symphony.',

		'Filter Entries' =>
		'Фильтрация записей',

		'Filters' =>
		'Фильтры',

		'Find files that are an exact match for the given string.' =>
		'Найти файлы, которые являются точным соответствием для данной строки.',

		'Find files that do not match the given <a href="%s">MySQL regular expressions</a>.' =>
		'Найти файлы, которые не попадают под <a href="%s">регулярное выражение MySQL</a>.',

		'Find files that match the given <a href="%s">MySQL regular expressions</a>.' =>
		'Найти файлы, которые попадают под <a href="%s">регулярное выражение MySQL</a>.',

		'Find files that match the given mimetype.' =>
		'Найти файлы, которые попадают под mime-типы.',

		'Find files that match the given size.' =>
		'Найти файлы, которые которые соответствуют размеру.',

		'Find values that are an exact match for the given string.' =>
		'Найти значения, которые являются точным соответствием для данной строки.',

		'Find values that do not match the given <a href="%s">MySQL regular expressions</a>.' =>
		'Найти значения, которые не попадают под <a href="%s">регулярное выражение MySQL</a>.',

		'Find values that match the given <a href="%s">MySQL regular expressions</a>.' =>
		'Найти значения, которые попадают под <a href="%s">регулярное выражение MySQL</a>.',

		'First' =>
		'Первый',

		'First Name' =>
		'Имя',

		'First name is required' =>
		'Укажите имя',

		'For a secure connection, SSL and TLS are supported. Please check the manual of your email provider for more details.' =>
		'Поддержка SSL и TLS для безопасного подключения. Проверьте минимальные требования у своего провайдера почты.',

		'Forbidden' =>
		'Доступ запрещён',

		'Forbidden Parameter' =>
		'Недопустимый параметр',

		'Formatting' =>
		'Форматирование',

		'Fri' =>
		'Пт.',

		'Friday' =>
		'Пятница',

		'From Email Address' =>
		'От адресата',

		'From Name' =>
		'От имени',

		'From extensions' =>
		'Из расширений',

		'Gateway' =>
		'Почтовый шлюз',

		'General' =>
		'Основные настройки',

		'GitHub' =>
		'GitHub',

		'Go to page …' =>
		'Перейти к странице …',

		'Group By' =>
		'Группировать по',

		'Grouping' =>
		'Группировка',

		'HELO Hostname' =>
		'HELO Hostname',

		'HTML-encode text' =>
		'HTML-кодировка текста',

		'Handle' =>
		'URI имя',

		'Header fields can only contain strings' =>
		'Поля заголовоков могут содержать только строки',

		'Hi %s,' =>
		'Привет, %s',

		'Hide this section from the back-end menu' =>
		'Скрыть данный раздел из бэк-энд меню',

		'Homepage' =>
		'Домашняя страница',

		'Host' =>
		'Хост',

		'ID' =>
		'ID',

		'If it was provided by an Extension, ensure that it is installed, and enabled.' =>
		'Предусматривалось использование расширения, проверьте установлено ли оно.',

		'Ignore?' =>
		'Игнорировать?',

		'Include a count of entries in associated sections' =>
		'Включить количество записей в связанном разделе',

		'Included Elements' =>
		'Подключенные элементы',

		'Install' =>
		'Установить',

		'Invalid URL' =>
		'Неверный URL',

		'Invalid element name. Must be valid %s.' =>
		'Неверное имя элемента. Укажите корректное имя %s.',

		'Invalid timezone %s' =>
		'Неверный часовой пояс %s',

		'Issues' =>
		'Замечания',

		'It currently does not work with ‘Allow Multiple’' =>
		'Работа с ‘Allow Multiple’ пока невозможна',

		'It will expire in 2 hours. If you did not ask for a new password, please disregard this email.' =>
		'Срок действия - два часа. Если вы не запрашивали смену пароля просто проигнорируйте это письмо',

		'JSON not formatted correctly' =>
		'Неверный формат JSON',

		'Jan' =>
		'Янв',

		'January' =>
		'Январь',

		'Jul' =>
		'Июль',

		'July' =>
		'Июль',

		'Jun' =>
		'Июнь',

		'June' =>
		'Июнь',

		'Label' =>
		'Наименование',

		'Language' =>
		'Язык',

		'Last' =>
		'Последний',

		'Last Name' =>
		'Фамилия',

		'Last Seen' =>
		'Последний визит',

		'Last modified on %s' =>
		'Последнее изменение %s',

		'Last name is required' =>
		'Укажите фамилию',

		'Leave password fields blank to keep the current password' =>
		'Оставьте поля пустыми, чтобы сохранить текущий пароль',

		'Leaving these fields empty will always execute the data source.' =>
		'Оставьте данное поле пустым, чтобы источник данных выполнялся всегда.',

		'Linked to %s in' =>
		'Ссылается на %s в',

		'Links' =>
		'Ссылки',

		'Links in %s' =>
		'Ссылок в %s',

		'Log out' =>
		'Выход',

		'Login' =>
		'Войти',

		'Login Details' =>
		'Детали',

		'Main content' =>
		'Основная панель',

		'Make this a required field' =>
		'Сделать обязательным полем',

		'Malformed UTF-8 characters, possibly incorrectly encoded.' =>
		'Неправильный UTF-8, возможно, неправильно закодирован.',

		'Manager' =>
		'Менеджер',

		'Mar' =>
		'Март',

		'March' =>
		'Март',

		'Maximum stack depth exceeded.' =>
		'Превышен максимальный размер стека.',

		'May' =>
		'Май',

		'Message' =>
		'Сообщение',

		'Missing default namespace definition.' =>
		'Отсутствует определение пространства имён.',

		'Mon' =>
		'Пн.',

		'Monday' =>
		'Понедельник',

		'Must be a valid number or parameter' =>
		'Должно быть числом или параметром',

		'Must call EHLO (or HELO) before calling AUTH' =>
		'Необходимо отправить EHLO (или HELO) перед вызовом AUTH',

		'Must call EHLO (or HELO) before calling MAIL' =>
		'Необходимо отправить EHLO (или HELO) перед вызовом MAIL',

		'Must call MAIL before calling RCPT' =>
		'Необходимо отправить MAIL перед вызовом RCPT',

		'Must call RCPT before calling DATA' =>
		'Необходимо отправить RCPT перед вызовом DATA',

		'MySQL Error (%1$s): %2$s in query: %3$s' =>
		'Ошибка MySQL (%1$s): %2$s в запросе: %3$s',

		'Name' =>
		'Имя',

		'Navigation' =>
		'Навигация',

		'Navigation Group' =>
		'Навигационная группа',

		'New Field' =>
		'Новое поле',

		'New Password' =>
		'Новый пароль',

		'New Symphony Account Password' =>
		'Новый пароль для профиля в Symphony',

		'Next &rarr;' =>
		'Далее &rarr;',

		'No' =>
		'Нет',

		'No Suggestions' =>
		'Нет предложений',

		'No attachments or body text was set. Can not send empty email.' =>
		'Нет текста письма или вложений. Пустое письмо не может быть отправлено.',

		'No connection has been established to %s' =>
		'Не удалось подключиться к %s',

		'No encryption' =>
		'Без шифрования',

		'No errors.' =>
		'Ошибок нет.',

		'No filters applied yet.' =>
		'Нет применённых фильтров',

		'No links in %s' =>
		'Нет ссылок в %s',

		'No password was entered.' =>
		'Не указан пароль.',

		'No records found.' =>
		'Записи не найдены.',

		'No suitable XSLT processor was found.' =>
		'Не найден подходящий XSLT процессор.',

		'No suitable engine object found' =>
		'Не найден подходящий объект движка',

		'No username was entered.' =>
		'Не указано имя пользователя.',

		'None' =>
		'Нет',

		'None found.' =>
		'Не найден',

		'Not installed' =>
		'Не установлено',

		'Notice that it is possible to get mixtures of success and failure messages when using the ‘Allow Multiple’ option.' =>
		'Обратите внимание, что при использовании опции ‘Разрешить множественное выделение’ могут появляться смешанные сообщение ошибок и успешных операций.',

		'Nov' =>
		'Нояб',

		'November' =>
		'Ноябрь',

		'Number of default rows' =>
		'Количество строк по умолчанию',

		'Oct' =>
		'Окт',

		'October' =>
		'Октябрь',

		'Often the cause of this error is a misnamed extension folder. You can try renaming %s to %s, or you can uninstall the extension to continue.' =>
		'Часто причиной данной ошибки является неверное имя папки расширения. Вы можете попробовать переименовать каталог %s в %s или удалить приложение для продолжения работы.',

		'Old Password' =>
		'Старый пароль',

		'One or more pages could not be deleted.' =>
		'Одна или более страниц не могут быть удалены.',

		'Only one call to MAIL may be made at a time.' =>
		'Только один вызов MAIL может быть выполнен за раз.',

		'Optional' =>
		'Необязательно',

		'Options' =>
		'Опции',

		'Page %1$s of %2$s' =>
		'Страница %1$s из %2$s',

		'Page ID' =>
		'ID Страницы',

		'Page Not Found' =>
		'Страница не найдена',

		'Page Number' =>
		'Номер страницы',

		'Page Resources' =>
		'Ресурсы страницы',

		'Page Settings' =>
		'Параметры страницы',

		'Page Template could not be written to disk.' =>
		'Шаблон страницы не может быть записан на диск.',

		'Page Type' =>
		'Тип страницы',

		'Page could not be deleted because it does not exist.' =>
		'Невозможно удалить страницу, поскольку она не существует.',

		'Page could not be deleted because it has children.' =>
		'Невозможно удалить страницу поскольку у нее есть дочерние элементы.',

		'Page created at %s.' =>
		'Страница создана в %s.',

		'Page updated at %s.' =>
		'Страница обновлена %s.',

		'Pages' =>
		'Страницы',

		'Pagination' =>
		'Пагинация',

		'Parameters' =>
		'Параметры',

		'Parent Page' =>
		'Родительская страница',

		'Password' =>
		'Пароль',

		'Password is required' =>
		'Укажите пароль',

		'Passwords did not match' =>
		'Пароли не совпадают',

		'PHP Compatibility' =>
		'Поддержка PHP',

		'Placement' =>
		'Расположение',

		'Please check permissions on %s' =>
		'Проверьте права на %s',

		'Please check permissions on %s.' =>
		'Проверьте права на %s.',

		'Please confirm changes to this author with your password.' =>
		'Подтвердите сохранение изменений для данного автора со своим паролем.',

		'Please ensure handle contains at least one Latin-based character.' =>
		'Удостоверьтесь, что адрес страницы содержит только латинские символы.',

		'Please ensure name contains at least one Latin-based character.' =>
		'Проверьте, что имя содержит только латинские символы.',

		'Please go back and try again.' =>
		'Пожалуйста вернитесь и попробуйте снова.',

		'Please login to view this page.' =>
		'Авторизуйтесь для доступа к странице.',

		'Please provide your own password to make changes to this author.' =>
		'Укажите ваш собственный пароль для внесения изменений для данного автора.',

		'Please remove it from your fields prior to uninstalling or disabling.' =>
		'Перед удалением, удалите его из всех разделов.',

		'Please remove it from your pages prior to uninstalling or disabling.' =>
		'Перед удалением, удалите его из всех разделов.',

		'Please remove it from your sections prior to uninstalling or disabling.' =>
		'Перед удалением, удалите его из всех разделов.',

		'Please reset your password' =>
		'Пожалуйста, сбросьте ваш пароль',

		'Port' =>
		'Порт',

		'Preferences' =>
		'Настройки',

		'Preferences saved.' =>
		'Настройки сохранены',

		'Recipient address can not contain carriage return or newlines.' =>
		'Адреса получателей не могут содержать символы переноса и новой строки.',

		'Recipient email address cannot be empty.' =>
		'Адрес получаетеля не может быть пустым.',

		'Recipient not found' =>
		'Получатель не найден',

		'Redirect to 404 page when no results are found' =>
		'Переадресовывать на страницу 404 когда отсутствуют результаты',

		'Redirect to 404 page when the forbidden parameter is present' =>
		'Переадресовывать на страницу 404 когда присутствует недопустимый параметр',

		'Redirect to 404 page when the required parameter is not present' =>
		'Переадресовывать на страницу 404 когда отсутствует необходимый параметр',

		'Remove File' =>
		'Удалить файл',

		'Remove field' =>
		'Удалить поле',

		'Remove filter' =>
		'Удалить фильтр',

		'Remove installer?' =>
		'Удалить установщик?',

		'Remove item' =>
		'Удалить элемент',

		'Rename folder' =>
		'Переименовать каталог',

		'Reordering was unsuccessful.' =>
		'Пересортировка не удалась.',

		'Reply-To Email Address can not contain carriage return or newlines.' =>
		'Адрес ответа не может содержать символов перевода строки или символов новой строки.',

		'Reply-To Name can not contain carriage return or newlines.' =>
		'Имя отправителя не может содержать символов перевода строки или символов новой строки.',

		'Request timed out. %d second limit reached.' =>
		'Время запроса истекло. Превышен лимит %d секунд.',

		'Request was rejected for having an invalid cross-site request forgery token.' =>
		'Запрос был отклонён т. к. имется признаки CSS атаки.',

		'Required Parameter' =>
		'Требуется параметр',

		'Requires PHP %s' =>
		'Требуется PHP %s',

		'Retrieve password?' =>
		'Восстановить пароль?',

		'SMTP' =>
		'SMTP',

		'SSL encryption' =>
		'SSL шифрование',

		'Sat' =>
		'Сб.',

		'Saturday' =>
		'Суббота',

		'Save Changes' =>
		'Сохранить',

		'Search for {$item}' =>
		'Поиск {$item}',

		'Section created at %s.' =>
		'Раздел создан в %s.',

		'Section updated at %s.' =>
		'Раздел обновлён в %s.',

		'Sections' =>
		'Разделы',

		'Sections Index' =>
		'Список разделов',

		'Select ' =>
		'Выбрать ',

		'Select %s Extension' =>
		'Выберите %s расширение',

		'Select Author %s' =>
		'Выбран автор %s',

		'Select Box' =>
		'Select Box',

		'Select Entry %d' =>
		'Выбрано записей %d',

		'Select Page %s' =>
		'Выберите страницу %s',

		'Select Section %s' =>
		'Выберите раздел %s',

		'Select current user by default' =>
		'Выбрать текущего пользователя по умолчанию',

		'Send Email' =>
		'Отправить Email',

		'Send Notification Email' =>
		'Отправить уведомление на почту',

		'Sender Email Address can not contain carriage return or newlines.' =>
		'Адрес отправителя не может содержать символов перевода строки или символов новой строки.',

		'Sender Name can not contain carriage return or newlines.' =>
		'Имя отправителя не может содержать символов перевода строки или символов новой строки.',

		'Sender email address cannot be empty.' =>
		'Адрес отправителя не может быть пустым.',

		'Sendmail (default)' =>
		'Sendmail (по умолчанию)',

		'Sep' =>
		'Сен',

		'September' =>
		'Сентябрь',

		'Set %s' =>
		'установить %s',

		'Set navigation group' =>
		'Установить навигационную группу',

		'Settings for field %s could not be found in table tbl_fields_%s.' =>
		'Настройки для поля %s не найдены в таблице tbl_fields_%s.',

		'Show Associations' =>
		'Показать связанные',

		'Show calendar' =>
		'Показать календарь',

		'Show debug view' =>
		'Показать окно отладчика',

		'Show debug view for %s' =>
		'Показать окно отладчика для %s',

		'Show line %d in debug view' =>
		'Показать строку %d в окне отладчика',

		'Show more entries' =>
		'Показать больше записей',

		'Sidebar' =>
		'Боковая панель',

		'Some SMTP connections require authentication. If that is the case, enter the username/password combination below.' =>
		'Для SMTP подключения требуется пройти аутентификацию. Сначала необходимо указать логин и пароль.',

		'Some errors were encountered while attempting to save.' =>
		'При попытке сохранить запись возникло несколько ошибок.',

		'Sorry, but Symphony was unable to rename the folder. You can try renaming %s to %s yourself, or you can uninstall the extension to continue.' =>
		'Извините, но Symphony не удалось переименовать каталог. Вы можете попробовать переименовать %s в %s самостоятельно или удалить приложение для продолжения работы.',

		'Sort By' =>
		'Сортировать по',

		'Sort Order' =>
		'Порядок сортировки',

		'Sort all options alphabetically' =>
		'Сортировать в алфавитном порядке',

		'Sort by %1$s %2$s' =>
		'Сортировать по %1$s %2$s',

		'Sorting' =>
		'Сортировка',

		'Source' =>
		'Источник',

		'Static Values' =>
		'Статическое значение',

		'Static XML' =>
		'Статический XML',

		'Status' =>
		'Статус',

		'Status unavailable' =>
		'Статус недоступен',

		'Submit' =>
		'Принять',

		'Success and Failure XML Examples' =>
		'Примеры успешного и неудачного XML кода',

		'Suggestion List' =>
		'Список предложений',

		'Sun' =>
		'Вс.',

		'Sunday' =>
		'Воскресенье',

		'Symphony' =>
		'Symphony',

		'Symphony Database Error' =>
		'Ошибка БД Symphony',

		'Symphony Extension Missing Error' =>
		'Ошибка поиска расширения',

		'Syntax error, malformed JSON.' =>
		'Синтаксические ошибки при разборе JSON.',

		'System' =>
		'Система',

		'System Creation Date' =>
		'Системная дата создания',

		'System Default' =>
		'Системные значения',

		'System ID' =>
		'Системный ID ',

		'System Language' =>
		'Системный язык',

		'System Modification Date' =>
		'Дата изменения системы',

		'TLS encryption' =>
		'TLS шифрование',

		'Tag List' =>
		'Список тегов',

		'Take me to the login page' =>
		'Перейти на страницу авторизации',

		'Target' =>
		'Цель',

		'Template' =>
		'Шаблон',

		'Text Formatter' =>
		'Парсер текста',

		'Text Input' =>
		'Текстовая строка',

		'Textarea' =>
		'Текстовое поле',

		'The %1$s file for the %2$s extension is not valid XML: %3$s' =>
		'Файл %1$s расширения %2$s имеет невалидный XML код: %3$s',

		'The %1$s gateway does not support the use of %2$s' =>
		'Шлюз %1$s не поддерживает работу с %2$s',

		'The %s class failed to acquire a lock, check that %s exists and is writable.' =>
		'Для класса %s не удалось получить блокировку, убедитесь, что %s существует и доступен для записи.',

		'The Data Source ‘%s’, provided by the Extension ‘%s’, is currently in use.' =>
		'Источник данных ‘%s’, предоставляется расширением ‘%s’, которое в данный момент используется.',

		'The Entry, %s, could not be found.' =>
		'Запись %s не найдена.',

		'The Envelope From Address can not contain carriage return or newlines.' =>
		'Поле обратного адреса не может содержать слэшей или символов новой строки.',

		'The Event ‘%s’, provided by the Extension ‘%s’, is currently in use.' =>
		'Событие ‘%s’, предоставляется расширением ‘%s’, которое в данный момент используется.',

		'The Section, %s, associated with the Data source, %s, could not be found.' =>
		'Не найден раздел %s, связанный с источником данных %s',

		'The Section, %s, could not be found.' =>
		'Раздел %s не найден.',

		'The Symphony Team' =>
		'Команда Symphony',

		'The Symphony calendar widget has been disabled because your system date format is currently not supported. Try one of the following instead or disable the calendar in the field settings:' =>
		'Виджет календаря Symphony был отключен, т. к. формат даты вашей системы не поддерживается. Попробуйте вместо этого использовать один из следующих вариантов или отключить календарь в настройках:',

		'The Symphony configuration file, %s, is not writable. The sort order cannot be modified.' =>
		'Файл конфигурации Symphony %s не доступен для записи. Порядок сортировки не может быть изменён.',

		'The Symphony configuration file, %s, or folder is not writable. You will not be able to save changes to preferences.' =>
		'Файл конфигурации Symphony, %s, или каталог не доступен для записи. Вы не сможете сохранить изменения в настройках.',

		'The Text Formatter ‘%s’, provided by the Extension ‘%s’, is currently in use.' =>
		'Парсер текста ‘%s’, предоставляется расширением ‘%s’, которое в данный момент используется.',

		'The author profile you requested does not exist.' =>
		'Профиль запрошенного автора не существует.',

		'The content of the file `%s` could not be loaded.' =>
		'Содержимое файла `%s` не может быть загружено.',

		'The data will only be available on the selected pages.' =>
		'Данные будут доступны только на выбранных страницах.',

		'The date specified in ‘%s’ is invalid.' =>
		'Даныне, переданые в ‘%s’, некорректны.',

		'The destination directory is not writable.' =>
		'Каталог назначения закрыт для записи.',

		'The destination directory, %s, does not exist.' =>
		'Целевой каталог, %s, не существует.',

		'The email address ‘%s’ is invalid.' =>
		'Неверный email ‘%s’.',

		'The event will only be available on the selected pages.' =>
		'События будут доступны только на выбранных страницах.',

		'The field ‘%s’, provided by the Extension ‘%s’, is currently in use.' =>
		'Поле ‘%s’, предоставляется расширением ‘%s’, которое в данный момент используется.',

		'The field “{$title}” ({$type}) has been removed.' =>
		'Поле “{$title}” ({$type}) будет удалено',

		'The file uploaded is no longer available. Please check that it exists, and is readable.' =>
		'Загруженный файл больше недоступен. Проверьте существует ли он и доступен ли для чтения.',

		'The following are the recognised fields:' =>
		'Следующие поля являются определенными:',

		'The following error was returned:' =>
		'Было получено следующее сообщение об ошибке:',

		'The following is an example of what is returned if any options return an error:' =>
		'Это пример кода возвращаемого, если хотя бы один из фильтров не сработает:',

		'The login details provided are incorrect.' =>
		'Указанные данные неверны.',

		'The page you requested does not exist.' =>
		'Запрашиваемая страница не существует.',

		'The page you requested, %s, does not exist.' =>
		'Запращиваемая страница %s не существует.',

		'The selected language, %s, could not be found. Using default English dictionary instead.' =>
		'Выбранный язык %s не найден. Используется Английский язык.',

		'There is already a field of type %s. There can only be one per section.' =>
		'Поле типа %s уже существует. В разделе возможно наличие только одного поля такого типа.',

		'There was a problem rendering this page. Please check the activity log for more details.' =>
		'Возникли проблемы с отображением страницы. Для получения более подробной информации см. логи.',

		'There was a problem whilst attempting to establish a database connection. Please check all connection information is correct.' =>
		'Ошибка возникла при попытке соединения с базой данных. Проверьте параметры подключения к базе данных.',

		'There was an error while trying to upload the file %1$s to the target directory %2$s.' =>
		'Возникла ошибка при попытке загрузить файл %1$s в каталог %2$s.',

		'There were some problems while attempting to save. Please check below for problem fields.' =>
		'Возникли некоторые проблемы при сохранении. Проверьте внимательно все поля.',

		'This Symphony instance has not been set up for emailing, %s' =>
		'Данный экземляр Symphony не может использовать электронную почту %s',

		'This document is not well formed.' =>
		'Данный документ был сформирован неправильно.',

		'This error occurred whilst attempting to resolve the 404 page for the original request.' =>
		'Данная ошибка возникает в результате получения ответа 404 на поступивший запрос.',

		'This event has been customised and cannot be viewed from Symphony.' =>
		'Данное событие было изменено и не может быть просмотрено через Symphony.',

		'This gateway can not be found. Can not save as default.' =>
		'Шлюз не найден. Использовать по умолчанию его нельзя.',

		'This is a required field' =>
		'Обязательное поле',

		'This is a required field.' =>
		'Данное поле является обязательным.',

		'This is an example of the form markup you can use on your frontend:' =>
		'Это пример кода формы, который вы можете использовать в клиентской части:',

		'This page could not be rendered due to the following XSLT processing errors:' =>
		'Данная страница не может быть обработана из-за ошибок XSLT:',

		'This request exceeds the maximum allowed request size of %s specified by your host.' =>
		'Этот запрос превышает максимально допустимый размер запроса %s определённого хостом.',

		'Thu' =>
		'Чт.',

		'Thursday' =>
		'Четверг',

		'To edit an existing entry, include the entry ID value of the entry in the form. This is best as a hidden field like so:' =>
		'Чтобы отредактировать существующую запись включите в форму ID записи. Лучше всего это сделать следующим образом:',

		'To redirect to a different location upon a successful save, include the redirect location in the form. This is best as a hidden field like so, where the value is the URL to redirect to:' =>
		'Для переадресации по новому адресу после успешного сохранения включите в форму ссылку на место переадресации. Лучше все это сделать при помощи скрытого поля, например таким образом, указав в качестве value URL:',

		'Transformed XML is invalid.' =>
		'XML код невалидный.',

		'Tue' =>
		'Вт.',

		'Tuesday' =>
		'Вторник',

		'Type' =>
		'Тип',

		'Type and hit enter to apply filter…' =>
		'Введите значение для фильтрации…',

		'Type to search' =>
		'Введите текст для поиска',

		'URL' =>
		'URL',

		'Unable to connect via TLS' =>
		'Не удалось подключиться через TLS',

		'Unable to create path - %s' =>
		'Не удалось создать - %s',

		'Unable to find a Manager class for this resource.' =>
		'Не удалось найти менеджер классов для данного ресурса.',

		'Unable to open socket. %s' =>
		'Не удалось открыть сокет. %s',

		'Unable to open socket. Unknown error' =>
		'Не удалось открыть сокет. Неизвестная ошибка',

		'Unable to remove - %s' =>
		'Не удалось удалить - %s',

		'Unable to remove file - %s' =>
		'Не удалось удалить файл - %s',

		'Unable to set timeout.' =>
		'Не удалось установить таймаут.',

		'Underflow or the modes mismatch.' =>
		'Неверный режим.',

		'Undo?' =>
		'Отменить?',

		'Unexpected control character found.' =>
		'Обнаружен некорректный символ.',

		'Unfortunately no account was found using this information.' =>
		'К сожалению, не найдено ни одной учётной записи, которая бы соответствовала указанным данным.',

		'Uninstall' =>
		'Удалить',

		'Uninstall extension' =>
		'Удалить расширение',

		'Uninstall this extension' =>
		'Удалить данное расширение',

		'Universal Resource Locator' =>
		'Universal Resource Locator',

		'Unknown' =>
		'Неизвестно',

		'Unknown Entry' =>
		'Неизвестная запись',

		'Unknown JSON error' =>
		'Неизвестная ошибка JSON',

		'Unknown Section' =>
		'Неизвестный раздел',

		'Unknown errors occurred while attempting to save.' =>
		'При попытке сохранить возникли неизвестные ошибки.',

		'Unknown errors where encountered when saving.' =>
		'Произошла неизвестная ошибка во время сохранения.',

		'Unsupported SSL type' =>
		'Неподдерживаемый тип SSL',

		'Untitled' =>
		'Без названия',

		'Untitled Field' =>
		'Поле без названия',

		'Update' =>
		'Обновить',

		'Update available' =>
		'Доступно обновление',

		'Uploading ‘%s’ failed. Could not write temporary file to disk.' =>
		'Загрузка ‘%s’ завершилась неудачно. Неудаётся записать временный файл на диск.',

		'Uploading ‘%s’ failed. File upload stopped by extension.' =>
		'Загрузка ‘%s’ завершилась неудачно. Загрузка файла прервана.',

		'Upon the event successfully saving the entry, this option takes input from the form and send an email to the desired recipient.' =>
		'В случае успешного сохранения записи, данная опция позволит получить данные из формы и отправить их на почту заданному получателю.',

		'Use %s syntax to filter by page parameters. A default value can be set using %s.' =>
		'Используйте синтаксис %s для фильтрации по параметрам страницы. Значения по умолчанию %s.',

		'Use %s syntax to limit by page parameters.' =>
		'Используйте синтаксис %s, чтобы ограничить количество параметров страницы.',

		'Use %s syntax to order by page parameters.' =>
		'Используйте синтаксис %s для сортировки параметров страницы.',

		'User Type' =>
		'Тип пользователя',

		'Username' =>
		'Имя пользователя',

		'Username is already taken' =>
		'Указанное имя пользователя уже используется',

		'Username is required' =>
		'Укажите имя пользователя',

		'Utility' =>
		'Утилита',

		'Validation Rule' =>
		'Правило валидации',

		'Validation rule is not a valid regular expression' =>
		'Регулярное выражение для правила валидации неверно',

		'Value' =>
		'Значение',

		'Version' =>
		'Версия',

		'View Entries' =>
		'Посмотреть записи',

		'View Page' =>
		'Просмотр страницы',

		'View Page on Frontend' =>
		'Просмотр страницы во фронт-энд',

		'View Section Entries' =>
		'Посмотреть записи раздела',

		'View all Authors' =>
		'Показать всех авторов',

		'View all Data Sources' =>
		'Отобразить все источники данных',

		'View all Entries' =>
		'Все записи',

		'View all Events' =>
		'Все события',

		'View all Pages' =>
		'Все страницы',

		'View all Sections' =>
		'Все разделы',

		'View extensions' =>
		'Посмотреть расширения',

		'View update.' =>
		'Посмотр расширения',

		'Viewing %1$s - %2$s of %3$s entries' =>
		'Показано %1$s - %2$s из %3$s записей',

		'Wed' =>
		'Ср.',

		'Wednesday' =>
		'Среда',

		'When an error occurs during saving, due to either missing or invalid fields, the following XML will be returned.' =>
		'Во время сохранения возникли проблемы, отсутствуют или потеряны значения полей, поэтому текущий XML будет возвращён.',

		'When saved successfully, the following XML will be returned:' =>
		'При успешном сохранении будет возвращен следующий XML:',

		'Wiki' =>
		'Wiki',

		'With Selected...' =>
		'С выбранными...',

		'Wrong password, please enter your own password to make changes to this author.' =>
		'Неверный пароль, пожалуйста, проверьте ваш пароль для сохранения изменений для данного автора.',

		'Wrong password. Enter old one to change email address.' =>
		'Неверный пароль. Укажите старый пароль для изменение email адреса.',

		'Wrong password. Enter old password to change it.' =>
		'Неверный пароль. Укажите старый пароль для его изменения.',

		'XML is invalid.' =>
		'Некорректный XML',

		'XSLT Processing Error' =>
		'Ошибка обработки XSLT',

		'Yes' =>
		'Да',

		'You are not authorised to access this page.' =>
		'Вы не имеете прав для доступа к данной странице.',

		'You are not authorised to edit other authors.' =>
		'Вы не авторизованы для редактирования авторов.',

		'You can try uninstalling the extension to continue, or you might want to ask on the forums' =>
		'Вы можете попробовать удалить расширение для продолжения или задать вопрос на форуме',

		'You cannot remove yourself as you are the active Author.' =>
		'Вы не можете удалить сами себя, т. к. вы являетесь текущим автором.',

		'Your Password' =>
		'Ваш пароль',

		'Your Symphony installation is up to date, but the installer was still detected. For security reasons, it should be removed.' =>
		'Ваша система Symphony уже установлена, но установщик не удалён. По соображениям безопасности его следует удалить.',

		'[Symphony] A new entry was created on %s' =>
		'[Symphony] Новая запись будет создана в %s',

		'a minute ago' =>
		'минуту назад',

		'about 1 hour ago' =>
		'час назад',

		'about {$hours} hours ago' =>
		'{$hours} час(ов) назад',

		'ascending' =>
		'по возрастанию',

		'at' =>
		'в',

		'day' =>
		'день',

		'days' =>
		'дней',

		'descending' =>
		'по убыванию',

		'drag to reorder' =>
		'перетащите для сортировки',

		'eighth' =>
		'восьмой',

		'eleventh' =>
		'одиннадцатый',

		'fifth' =>
		'пятый',

		'filtered' =>
		'фильтрация',

		'first' =>
		'первый',

		'forthnight' =>
		'недель',

		'forthnights' =>
		'вчера',

		'fortnight' =>
		'неделя',

		'fortnights' =>
		'2-х недель',

		'fourth' =>
		'четвертый',

		'hour' =>
		'час',

		'hours' =>
		'часов',

		'just now' =>
		'только что',

		'last' =>
		'последний',

		'list of comma-separated author usernames.' =>
		'список имен авторов, разделённых запятыми.',

		'min' =>
		'мин',

		'mins' =>
		'мин',

		'minute' =>
		'минута',

		'minutes' =>
		'минут',

		'month' =>
		'месяц',

		'months' =>
		'месяцев',

		'next' =>
		'далее',

		'ninth' =>
		'девятый',

		'No dependencies' =>
		'Нет зависимостей',

		'no leading zero' =>
		'не может начинаться с нуля',

		'no leading zeros' =>
		'без нулей',

		'now' =>
		'сейчас',

		'optional, accepts absolute or relative dates' =>
		'опционально, возможны абсолютные или относительные даты',

		'previous' =>
		'предыдущий',

		'read only' =>
		'только чтение',

		'required' =>
		'требуется',

		'requires Symphony %s' =>
		'требуется Symphony %s',

		'sec' =>
		'сек',

		'second' =>
		'секунда',

		'seconds' =>
		'секунд',

		'secs' =>
		'сек',

		'seventh' =>
		'седьмой',

		'sixth' =>
		'шестой',

		'tenth' =>
		'десятый',

		'third' =>
		'третий',

		'this' =>
		'текущий',

		'today' =>
		'сегодня',

		'tomorrow' =>
		'завтра',

		'twelfth' =>
		'двенадцатый',

		'untitled' =>
		'без названия',

		'week' =>
		'неделя',

		'weekday' =>
		'будний день',

		'weekdays' =>
		'будни',

		'weeks' =>
		'недель',

		'year' =>
		'год',

		'years' =>
		'лет',

		'yesterday' =>
		'вчера',

		'{$minutes} minutes ago' =>
		'{$minutes} минут(ы) назад',

		'{$param}' =>
		'{$param}',

		'‘%s’ contains invalid XML.' =>
		'‘%s’ содержит невалидный XML код.',

		'‘%s’ contains invalid data. Please check the contents.' =>
		'‘%s’ содержит некорректные данные. Проверьте содержимое.',

		'‘%s’ is a required field.' =>
		'Поле ‘%s’ обязательно для заполнения.',

	);

	/**
	 * Transliterations
	 */
	$straight = array(

		// Uppercase letters

	 	'À' => 'A', 	'Á' => 'A', 	'Â' => 'A', 	'Ã' => 'A', 	'Ä' => 'Ae',
	 	'Å' => 'A', 	'Ā' => 'A', 	'Ą' => 'A', 	'Ă' => 'A', 	'Æ' => 'Ae',
	 	'Ç' => 'C', 	'Ć' => 'C', 	'Č' => 'C', 	'Ĉ' => 'C', 	'Ċ' => 'C',
	 	'Ď' => 'D', 	'Đ' => 'D', 	'Ð' => 'D', 	'È' => 'E', 	'É' => 'E',
	 	'Ê' => 'E', 	'Ë' => 'E', 	'Ē' => 'E', 	'Ę' => 'E', 	'Ě' => 'E',
	 	'Ĕ' => 'E', 	'Ė' => 'E', 	'Ĝ' => 'G', 	'Ğ' => 'G', 	'Ġ' => 'G',
	 	'Ģ' => 'G', 	'Ĥ' => 'H', 	'Ħ' => 'H', 	'Ì' => 'I', 	'Í' => 'I',
	 	'Î' => 'I', 	'Ï' => 'I', 	'Ī' => 'I', 	'Ĩ' => 'I', 	'Ĭ' => 'I',
	 	'Į' => 'I', 	'İ' => 'I', 	'Ĳ' => 'Ij', 	'Ĵ' => 'J', 	'Ķ' => 'K',
	 	'Ł' => 'L', 	'Ľ' => 'L', 	'Ĺ' => 'L', 	'Ļ' => 'L', 	'Ŀ' => 'L',
	 	'Ñ' => 'N', 	'Ń' => 'N', 	'Ň' => 'N', 	'Ņ' => 'N', 	'Ŋ' => 'N',
	 	'Ò' => 'O', 	'Ó' => 'O', 	'Ô' => 'O', 	'Õ' => 'O', 	'Ö' => 'Oe',
	 	'Ø' => 'O', 	'Ō' => 'O', 	'Ő' => 'O', 	'Ŏ' => 'O', 	'Œ' => 'Oe',
	 	'Ŕ' => 'R', 	'Ř' => 'R', 	'Ŗ' => 'R', 	'Ś' => 'S', 	'Š' => 'S',
	 	'Ş' => 'S', 	'Ŝ' => 'S', 	'Ș' => 'S', 	'Ť' => 'T', 	'Ţ' => 'T',
	 	'Ŧ' => 'T', 	'Ț' => 'T', 	'Ù' => 'U', 	'Ú' => 'U', 	'Û' => 'U',
	 	'Ü' => 'Ue', 	'Ū' => 'U', 	'Ů' => 'U', 	'Ű' => 'U', 	'Ŭ' => 'U',
	 	'Ũ' => 'U', 	'Ų' => 'U', 	'Ŵ' => 'W', 	'Ý' => 'Y', 	'Ŷ' => 'Y',
	 	'Ÿ' => 'Y', 	'Y' => 'Y', 	'Ź' => 'Z', 	'Ž' => 'Z', 	'Ż' => 'Z',
	 	'Þ' => 'T',

		// Lowercase letters

	 	'à' => 'a', 	'á' => 'a', 	'â' => 'a', 	'ã' => 'a', 	'ä' => 'ae',
	 	'å' => 'a', 	'ā' => 'a', 	'ą' => 'a', 	'ă' => 'a', 	'æ' => 'ae',
	 	'ç' => 'c', 	'ć' => 'c', 	'č' => 'c', 	'ĉ' => 'c', 	'ċ' => 'c',
	 	'ď' => 'd', 	'đ' => 'd', 	'ð' => 'd', 	'è' => 'e', 	'é' => 'e',
	 	'ê' => 'e', 	'ë' => 'e', 	'ē' => 'e', 	'ę' => 'e', 	'ě' => 'e',
	 	'ĕ' => 'e', 	'ė' => 'e', 	'ĝ' => 'g', 	'ğ' => 'g', 	'ġ' => 'g',
	 	'ģ' => 'g', 	'ĥ' => 'h', 	'ħ' => 'h', 	'ì' => 'i', 	'í' => 'i',
	 	'î' => 'i', 	'ï' => 'i', 	'ī' => 'i', 	'ĩ' => 'i', 	'ĭ' => 'i',
	 	'į' => 'i', 	'ı' => 'i', 	'ĳ' => 'ij', 	'ĵ' => 'j', 	'ķ' => 'k',
	 	'ł' => 'l', 	'ľ' => 'l', 	'ĺ' => 'l', 	'ļ' => 'l', 	'ŀ' => 'l',
	 	'ñ' => 'n', 	'ń' => 'n', 	'ň' => 'n', 	'ņ' => 'n', 	'ŋ' => 'n',
	 	'ò' => 'o', 	'ó' => 'o', 	'ô' => 'o', 	'õ' => 'o', 	'ö' => 'oe',
	 	'ø' => 'o', 	'ō' => 'o', 	'ő' => 'o', 	'ŏ' => 'o', 	'œ' => 'oe',
	 	'ŕ' => 'r', 	'ř' => 'r', 	'ŗ' => 'r', 	'ś' => 's', 	'š' => 's',
	 	'ş' => 's', 	'ŝ' => 's', 	'ș' => 's', 	'ť' => 't', 	'ţ' => 't',
	 	'ŧ' => 't', 	'ț' => 't', 	'ù' => 'u', 	'ú' => 'u', 	'û' => 'u',
	 	'ü' => 'ue', 	'ū' => 'u', 	'ů' => 'u', 	'ű' => 'u', 	'ŭ' => 'u',
	 	'ũ' => 'u', 	'ų' => 'u', 	'ŵ' => 'w', 	'ý' => 'y', 	'ŷ' => 'y',
	 	'ÿ' => 'y', 	'y' => 'y', 	'ź' => 'z', 	'ž' => 'z', 	'ż' => 'z',
	 	'þ' => 't', 	'ß' => 'ss', 	'ſ' => 'ss', 	'ƒ' => 'f', 	'ĸ' => 'k',
	 	'ŉ' => 'n',

		// Symbolic

	 	'\(' => null, 	'\)' => null, 	',' => null,
	 	'–' => '-', 	'－' => '-', 	'„' => '"',
	 	'“' => '"', 	'”' => '"', 	'—' => '-',
	 	'¿' => null, 	'‽' => null, 	'¡' => null,
	 	'©' => 'c', 	'«' => '"', 	'»' => '"',

		// Special characters

	 	'Nº' => 'number',
	 	'№' => 'number',
	 	'°' => 'deg',
	 	'º' => null,

		// Other characters

	 	'А' => 'A',
	 	'а' => 'a',
	 	'Б' => 'B',
	 	'б' => 'b',
	 	'В' => 'V',
	 	'в' => 'v',
	 	'Г' => 'G',
	 	'г' => 'g',
	 	'Д' => 'D',
	 	'д' => 'd',
	 	'Е' => 'E',
	 	'е' => 'e',
	 	'Ё' => 'E',
	 	'ё' => 'e',
	 	'Ж' => 'ZH',
	 	'ж' => 'zh',
	 	'З' => 'Z',
	 	'з' => 'z',
	 	'И' => 'I',
	 	'и' => 'i',
	 	'Й' => 'J',
	 	'й' => 'j',
	 	'К' => 'K',
	 	'к' => 'k',
	 	'Л' => 'L',
	 	'л' => 'l',
	 	'М' => 'M',
	 	'м' => 'm',
	 	'Н' => 'N',
	 	'н' => 'n',
	 	'О' => 'O',
	 	'о' => 'o',
	 	'П' => 'P',
	 	'п' => 'p',
	 	'Р' => 'R',
	 	'р' => 'r',
	 	'С' => 'S',
	 	'с' => 's',
	 	'Т' => 'T',
	 	'т' => 't',
	 	'У' => 'U',
	 	'у' => 'u',
	 	'Ф' => 'F',
	 	'ф' => 'f',
	 	'Х' => 'H',
	 	'х' => 'h',
	 	'Ц' => 'TS',
	 	'ц' => 'ts',
	 	'Ч' => 'CH',
	 	'ч' => 'ch',
	 	'Ш' => 'SH',
	 	'ш' => 'sh',
	 	'Щ' => 'SCH',
	 	'щ' => 'sch',
	 	'Ъ' => null,
	 	'ъ' => null,
	 	'Ы' => 'Y',
	 	'ы' => 'y',
	 	'Ь' => null,
	 	'ь' => null,
	 	'Э' => 'E',
	 	'э' => 'e',
	 	'Ю' => 'YU',
	 	'ю' => 'yu',
	 	'Я' => 'YA',
	 	'я' => 'ya',
	);

	$regexp = array(

		// Ampersands

	 	'/^&(?!&)$/' => 'и',
	 	'/^&(?!&)/' => 'и-',
	 	'/&(?!&)&/' => '-и',
	 	'/&(?!&)/' => '-и-',

		// Other characters


	);

	$transliterations = array(
		'straight' => $straight,
		'regexp' => $regexp
	);
