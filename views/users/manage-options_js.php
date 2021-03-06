<?php

use app\components\Settings;

$vapidPublicKey = Settings::vapid()->public_key;
$urlSavesubscription = \yii\helpers\Url::to(['users/save-subscription']);//save subscription for push messages

$options = [
    'cryptURL' => \yii\helpers\Url::to(['/wallet/crypt']),
    'decryptURL' => \yii\helpers\Url::to(['/wallet/decrypt']),
    'expiringTime' => 5, // in test altrimenti inserisci 5 minuti
    //'vapidPublicKey' => \settings::load()->VapidPublic,
    // 'urlSavesubscription' => \yii\helpers\Url::to(['wallet/saveSubscription']),//save subscription for push messages
    // ...
];
$this->registerJs(
    "var yiiOptions = ".\yii\helpers\Json::htmlEncode($options).";",
    \yii\web\View::POS_HEAD,
    'yiiOptions'
);
