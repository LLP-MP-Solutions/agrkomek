<?php

return [
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Article);approved)' => [
        'iSynapse' => 'QSynapse:Synapses(Article)',
        'name' => 'approved',
        'label' => 'Публиковать',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Integer',
        'description' => 'Публиковать',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Article);content)' => [
        'iSynapse' => 'QSynapse:Synapses(Article)',
        'name' => 'content',
        'label' => 'Содержимое',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\LongText',
        'description' => 'Содержимое',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Article);language)' => [
        'iSynapse' => 'QSynapse:Synapses(Article)',
        'name' => 'language',
        'label' => 'Язык',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => '',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Article);source)' => [
        'iSynapse' => 'QSynapse:Synapses(Article)',
        'name' => 'source',
        'label' => 'Источник новости',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Text',
        'description' => 'Источник новости',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Article);title)' => [
        'iSynapse' => 'QSynapse:Synapses(Article)',
        'name' => 'title',
        'label' => 'Заголовок',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'Заголовок',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(ArticleType);language)' => [
        'iSynapse' => 'QSynapse:Synapses(ArticleType)',
        'name' => 'language',
        'label' => 'Язык',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => '',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(ArticleType);title)' => [
        'iSynapse' => 'QSynapse:Synapses(ArticleType)',
        'name' => 'title',
        'label' => 'Название',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => '',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Chat);idImage)' => [
        'iSynapse' => 'QSynapse:Synapses(Chat)',
        'name' => 'idImage',
        'label' => 'Изображение',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\BigInteger',
        'description' => '',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Chat);idUser)' => [
        'iSynapse' => 'QSynapse:Synapses(Chat)',
        'name' => 'idUser',
        'label' => 'Пользователь',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Integer',
        'description' => '',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Chat);title)' => [
        'iSynapse' => 'QSynapse:Synapses(Chat)',
        'name' => 'title',
        'label' => 'Название',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => '',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(ChatMessage);idChat)' => [
        'iSynapse' => 'QSynapse:Synapses(ChatMessage)',
        'name' => 'idChat',
        'label' => 'Группа',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\BigInteger',
        'description' => '',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(ChatMessage);idUser)' => [
        'iSynapse' => 'QSynapse:Synapses(ChatMessage)',
        'name' => 'idUser',
        'label' => 'Пользователь',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\BigInteger',
        'description' => '',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(ChatMessage);message)' => [
        'iSynapse' => 'QSynapse:Synapses(ChatMessage)',
        'name' => 'message',
        'label' => 'Сообщение',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\LongText',
        'description' => 'Сообщение',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Consultancy);closed)' => [
        'iSynapse' => 'QSynapse:Synapses(Consultancy)',
        'name' => 'closed',
        'label' => 'Закрыт',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Integer',
        'description' => 'Закрыт',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Consultancy);isUpdated)' => [
        'iSynapse' => 'QSynapse:Synapses(Consultancy)',
        'name' => 'isUpdated',
        'label' => 'Обновлен',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Integer',
        'description' => 'isUpdated',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Consultancy);question)' => [
        'iSynapse' => 'QSynapse:Synapses(Consultancy)',
        'name' => 'question',
        'label' => 'Вопрос',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Text',
        'description' => 'вопрос консультации',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Consultancy);token)' => [
        'iSynapse' => 'QSynapse:Synapses(Consultancy)',
        'name' => 'token',
        'label' => ' Токен',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => ' Токен',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(ConsultancyCategory);title)' => [
        'iSynapse' => 'QSynapse:Synapses(ConsultancyCategory)',
        'name' => 'title',
        'label' => 'Название',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'Название',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(ConsultancyMessage);direction)' => [
        'iSynapse' => 'QSynapse:Synapses(ConsultancyMessage)',
        'name' => 'direction',
        'label' => 'Направление',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Integer',
        'description' => 'direction',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(ConsultancyMessage);idConsultancy)' => [
        'iSynapse' => 'QSynapse:Synapses(ConsultancyMessage)',
        'name' => 'idConsultancy',
        'label' => 'идентификатор консультации',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Integer',
        'description' => 'идентификатор консультации',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(ConsultancyMessage);message)' => [
        'iSynapse' => 'QSynapse:Synapses(ConsultancyMessage)',
        'name' => 'message',
        'label' => 'Сообщение',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Text',
        'description' => 'message',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(ConsultancySession);token)' => [
        'iSynapse' => 'QSynapse:Synapses(ConsultancySession)',
        'name' => 'token',
        'label' => 'Токен сессии',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'Токен сессии',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Guide);approved)' => [
        'iSynapse' => 'QSynapse:Synapses(Guide)',
        'name' => 'approved',
        'label' => 'Публиковать',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Integer',
        'description' => 'Содержимое',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Guide);content)' => [
        'iSynapse' => 'QSynapse:Synapses(Guide)',
        'name' => 'content',
        'label' => 'Содержимое',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\LongText',
        'description' => 'Содержимое',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Guide);language)' => [
        'iSynapse' => 'QSynapse:Synapses(Guide)',
        'name' => 'language',
        'label' => 'Язык',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => '',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Guide);title)' => [
        'iSynapse' => 'QSynapse:Synapses(Guide)',
        'name' => 'title',
        'label' => 'Заголовок',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'Заголовок',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(GuideCategory);language)' => [
        'iSynapse' => 'QSynapse:Synapses(GuideCategory)',
        'name' => 'language',
        'label' => 'Язык',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => '',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(GuideCategory);title)' => [
        'iSynapse' => 'QSynapse:Synapses(GuideCategory)',
        'name' => 'title',
        'label' => 'Название',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => '',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(ImageStore);name)' => [
        'iSynapse' => 'QSynapse:Synapses(ImageStore)',
        'name' => 'name',
        'label' => 'name',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => '',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(ImageStore);size)' => [
        'iSynapse' => 'QSynapse:Synapses(ImageStore)',
        'name' => 'size',
        'label' => 'size',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => '',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(ImageStore);uniqid)' => [
        'iSynapse' => 'QSynapse:Synapses(ImageStore)',
        'name' => 'uniqid',
        'label' => 'uniqid',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => '',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Machinery);blocked)' => [
        'iSynapse' => 'QSynapse:Synapses(Machinery)',
        'name' => 'blocked',
        'label' => 'Блокировано',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Integer',
        'description' => 'Блокировано',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Machinery);content)' => [
        'iSynapse' => 'QSynapse:Synapses(Machinery)',
        'name' => 'content',
        'label' => 'Содержимое',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Text',
        'description' => 'Содержимое',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Machinery);images)' => [
        'iSynapse' => 'QSynapse:Synapses(Machinery)',
        'name' => 'images',
        'label' => 'Изображения',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\LongText',
        'description' => 'Изображения',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Machinery);linkGeo)' => [
        'iSynapse' => 'QSynapse:Synapses(Machinery)',
        'name' => 'linkGeo',
        'label' => 'Ссылка geo',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Text',
        'description' => 'Ссылка geo',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Machinery);linkWhatsapp)' => [
        'iSynapse' => 'QSynapse:Synapses(Machinery)',
        'name' => 'linkWhatsapp',
        'label' => 'Ссылка Whatsapp',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Text',
        'description' => 'Ссылка Whatsapp',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Machinery);params)' => [
        'iSynapse' => 'QSynapse:Synapses(Machinery)',
        'name' => 'params',
        'label' => 'Параметры',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\LongText',
        'description' => 'доп параметры',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Machinery);phone)' => [
        'iSynapse' => 'QSynapse:Synapses(Machinery)',
        'name' => 'phone',
        'label' => 'Номер телефона',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'Номер телефона',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Machinery);price)' => [
        'iSynapse' => 'QSynapse:Synapses(Machinery)',
        'name' => 'price',
        'label' => 'Цена',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Integer',
        'description' => 'стоимость',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Machinery);rejectMessage)' => [
        'iSynapse' => 'QSynapse:Synapses(Machinery)',
        'name' => 'rejectMessage',
        'label' => 'Причина отклонения',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Text',
        'description' => 'Причина отклонения',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Machinery);status)' => [
        'iSynapse' => 'QSynapse:Synapses(Machinery)',
        'name' => 'status',
        'label' => 'Статус',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'Статус',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Machinery);title)' => [
        'iSynapse' => 'QSynapse:Synapses(Machinery)',
        'name' => 'title',
        'label' => 'Название',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'Название',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Machinery);type)' => [
        'iSynapse' => 'QSynapse:Synapses(Machinery)',
        'name' => 'type',
        'label' => 'Тип',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'тип объявления',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Moderator);email)' => [
        'iSynapse' => 'QSynapse:Synapses(Moderator)',
        'name' => 'email',
        'label' => 'Почта',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'email - почтовый адрес',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Moderator);firstname)' => [
        'iSynapse' => 'QSynapse:Synapses(Moderator)',
        'name' => 'firstname',
        'label' => 'Имя',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'имя модератора',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Moderator);lastname)' => [
        'iSynapse' => 'QSynapse:Synapses(Moderator)',
        'name' => 'lastname',
        'label' => 'Фамилия модератора',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'фамилия модератора',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Moderator);otp)' => [
        'iSynapse' => 'QSynapse:Synapses(Moderator)',
        'name' => 'otp',
        'label' => 'Одноразовый код',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'одноразовый код',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(Moderator);password)' => [
        'iSynapse' => 'QSynapse:Synapses(Moderator)',
        'name' => 'password',
        'label' => 'Пароль',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'пароль',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(ModeratorPermission);component)' => [
        'iSynapse' => 'QSynapse:Synapses(ModeratorPermission)',
        'name' => 'component',
        'label' => 'Компонент системы',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'компонент системы',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(ModeratorPermission);level)' => [
        'iSynapse' => 'QSynapse:Synapses(ModeratorPermission)',
        'name' => 'level',
        'label' => 'Уровень доступа',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Integer',
        'description' => 'уровень доступа',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(ModeratorRole);title)' => [
        'iSynapse' => 'QSynapse:Synapses(ModeratorRole)',
        'name' => 'title',
        'label' => 'Название',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'Название',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(User);blocked)' => [
        'iSynapse' => 'QSynapse:Synapses(User)',
        'name' => 'blocked',
        'label' => 'Блокирован',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Integer',
        'description' => 'Блокирован',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(User);code)' => [
        'iSynapse' => 'QSynapse:Synapses(User)',
        'name' => 'code',
        'label' => 'Код',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Integer',
        'description' => '',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(User);firstname)' => [
        'iSynapse' => 'QSynapse:Synapses(User)',
        'name' => 'firstname',
        'label' => 'Имя',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'Имя',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(User);password)' => [
        'iSynapse' => 'QSynapse:Synapses(User)',
        'name' => 'password',
        'label' => 'Пароль',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'Пароль',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(User);phone)' => [
        'iSynapse' => 'QSynapse:Synapses(User)',
        'name' => 'phone',
        'label' => 'Телефонный номер',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => '',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(User);secondname)' => [
        'iSynapse' => 'QSynapse:Synapses(User)',
        'name' => 'secondname',
        'label' => 'Фамилия',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Varchar',
        'description' => 'Фамилия',
    ],
    'QSynapse:SynapseAttributes(QSynapse:Synapses(User);validatedCode)' => [
        'iSynapse' => 'QSynapse:Synapses(User)',
        'name' => 'validatedCode',
        'label' => 'Валидированный код',
        'type' => 'Qore\\ORM\\Mapper\\Table\\Column\\Integer',
        'description' => 'Валидированный код',
    ],
];