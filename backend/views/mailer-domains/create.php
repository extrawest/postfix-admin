<?php

use yii\web\View;
use backend\models\MailerDomain;

/**
 * @var View $this
 * @var MailerDomain $model
 */

$this->title = 'Create Domain';
$this->params['breadcrumbs'][] = ['label' => 'Mailer Domains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mailer-domain-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
