<?php

return [
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(Article);article;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api);QSynapse:SynapseServices(QSynapse:Synapses(Article);Api))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(Article);article;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(Article);Api)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(Article);article;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager);QSynapse:SynapseServices(QSynapse:Synapses(Article);Manager))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(Article);article;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(Article);Manager)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(Article);articles;QSynapse:Synapses(ArticleType);type);QSynapse:SynapseServices(QSynapse:Synapses(Article);Manager);QSynapse:SynapseServices(QSynapse:Synapses(ArticleType);Manager))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(Article);articles;QSynapse:Synapses(ArticleType);type)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Article);Manager)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(ArticleType);Manager)',
        'relationType' => 2,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(ArticleType);articleType;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api);QSynapse:SynapseServices(QSynapse:Synapses(ArticleType);Api))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(ArticleType);articleType;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(ArticleType);Api)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(ArticleType);articleType;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager);QSynapse:SynapseServices(QSynapse:Synapses(ArticleType);Manager))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(ArticleType);articleType;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(ArticleType);Manager)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(Chat);chat;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api);QSynapse:SynapseServices(QSynapse:Synapses(Chat);ApiPrivate))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(Chat);chat;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(Chat);ApiPrivate)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(Consultancy);consultancy;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api);QSynapse:SynapseServices(QSynapse:Synapses(Consultancy);Api))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(Consultancy);consultancy;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(Consultancy);Api)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(Consultancy);consultancy;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager);QSynapse:SynapseServices(QSynapse:Synapses(Consultancy);Manager))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(Consultancy);consultancy;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(Consultancy);Manager)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(ConsultancyCategory);consultancyCategory;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager);QSynapse:SynapseServices(QSynapse:Synapses(ConsultancyCategory);Manager))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(ConsultancyCategory);consultancyCategory;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(ConsultancyCategory);Manager)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(Guide);guide;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api);QSynapse:SynapseServices(QSynapse:Synapses(Guide);Api))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(Guide);guide;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(Guide);Api)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(Guide);guide;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager);QSynapse:SynapseServices(QSynapse:Synapses(Guide);Manager))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(Guide);guide;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(Guide);Manager)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(Guide);guides;QSynapse:Synapses(GuideCategory);category);QSynapse:SynapseServices(QSynapse:Synapses(Guide);Manager);QSynapse:SynapseServices(QSynapse:Synapses(GuideCategory);Manager))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(Guide);guides;QSynapse:Synapses(GuideCategory);category)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Guide);Manager)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(GuideCategory);Manager)',
        'relationType' => 2,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(GuideCategory);guideCategory;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api);QSynapse:SynapseServices(QSynapse:Synapses(GuideCategory);Api))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(GuideCategory);guideCategory;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(GuideCategory);Api)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(GuideCategory);guideCategory;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager);QSynapse:SynapseServices(QSynapse:Synapses(GuideCategory);Manager))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(GuideCategory);guideCategory;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(GuideCategory);Manager)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(ImageStore);images;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api);QSynapse:SynapseServices(QSynapse:Synapses(ImageStore);ApiPrivate))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(ImageStore);images;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(ImageStore);ApiPrivate)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(ImageStore);images;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager);QSynapse:SynapseServices(QSynapse:Synapses(ImageStore);Uploader))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(ImageStore);images;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(ImageStore);Uploader)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(Machinery);machinery;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api);QSynapse:SynapseServices(QSynapse:Synapses(Machinery);Api))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(Machinery);machinery;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(Machinery);Api)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(Machinery);machinery;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api);QSynapse:SynapseServices(QSynapse:Synapses(Machinery);ApiPrivate))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(Machinery);machinery;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(Machinery);ApiPrivate)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(Machinery);machinery;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager);QSynapse:SynapseServices(QSynapse:Synapses(Machinery);Manager))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(Machinery);machinery;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(Machinery);Manager)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(Moderator);moderator;QSynapse:Synapses(Routes);routes);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager);QSynapse:SynapseServices(QSynapse:Synapses(Moderator);Manager))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(Moderator);moderator;QSynapse:Synapses(Routes);routes)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(Moderator);Manager)',
        'relationType' => 1,
        'description' => 'регистрация роутов модератора',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(Moderator);moderators;QSynapse:Synapses(ModeratorRole);role);QSynapse:SynapseServices(QSynapse:Synapses(Moderator);Manager);QSynapse:SynapseServices(QSynapse:Synapses(ModeratorRole);Manager))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(Moderator);moderators;QSynapse:Synapses(ModeratorRole);role)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Moderator);Manager)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(ModeratorRole);Manager)',
        'relationType' => 2,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(ModeratorPermission);moderatorpermissions;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager);QSynapse:SynapseServices(QSynapse:Synapses(ModeratorPermission);Manager))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(ModeratorPermission);moderatorpermissions;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(ModeratorPermission);Manager)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(ModeratorPermission);permissions;QSynapse:Synapses(ModeratorRole);role);QSynapse:SynapseServices(QSynapse:Synapses(ModeratorPermission);Manager);QSynapse:SynapseServices(QSynapse:Synapses(ModeratorRole);Manager))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(ModeratorPermission);permissions;QSynapse:Synapses(ModeratorRole);role)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(ModeratorPermission);Manager)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(ModeratorRole);Manager)',
        'relationType' => 2,
        'description' => 'Коннектор ролей',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(ModeratorRole);moderatorRole;QSynapse:Synapses(Routes);routes);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager);QSynapse:SynapseServices(QSynapse:Synapses(ModeratorRole);Manager))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(ModeratorRole);moderatorRole;QSynapse:Synapses(Routes);routes)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(ModeratorRole);Manager)',
        'relationType' => 1,
        'description' => 'роуты ролей модератора',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(User);user;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api);QSynapse:SynapseServices(QSynapse:Synapses(User);Api))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(User);user;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(User);Api)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(User);user;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api);QSynapse:SynapseServices(QSynapse:Synapses(User);ApiPrivate))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(User);user;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(User);ApiPrivate)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(User);user;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager);QSynapse:SynapseServices(QSynapse:Synapses(User);Manager))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(User);user;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Manager)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(User);Manager)',
        'relationType' => 1,
        'description' => '',
    ],
    'QSynapse:SynapseServiceSubjects(QSynapse:SynapseRelations(QSynapse:Synapses(Weather);weather;QSynapse:Synapses(Routes);route);QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api);QSynapse:SynapseServices(QSynapse:Synapses(Weather);Api))' => [
        'iSynapseRelation' => 'QSynapse:SynapseRelations(QSynapse:Synapses(Weather);weather;QSynapse:Synapses(Routes);route)',
        'iSynapseServiceFrom' => 'QSynapse:SynapseServices(QSynapse:Synapses(Routes);Api)',
        'iSynapseServiceTo' => 'QSynapse:SynapseServices(QSynapse:Synapses(Weather);Api)',
        'relationType' => 1,
        'description' => '',
    ],
];