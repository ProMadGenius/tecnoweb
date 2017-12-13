<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script language="JavaScript">

        function cambiar_fondo(color) {
            obj = document.getElementById('divmain');
            obj.style.backgroundColor =(obj.style.backgroundColor == 'rgb(26, 139, 171)')? "white" : color;
            obj2 = document.getElementById('cabeza');
            obj2.style.backgroundColor ="rgb(26, 139, 171)";
            obj3 = document.getElementById('pie');
            obj3.style.backgroundColor ="rgb(68, 157, 68)";
        }
        function cambiar_fondo2(color) {
            obj = document.getElementById('divmain');
            obj.style.backgroundColor =(obj.style.backgroundColor == 'rgb(26, 139, 171)')? "white" : color;
            obj2 = document.getElementById('cabeza');
            obj2.style.backgroundColor ="rgb(95, 100, 111)";
            obj3 = document.getElementById('pie');
            obj3.style.backgroundColor ="rgb(55, 157, 35)";
        }


        function cambiar_letra(letra) {
            obj = document.getElementById('divmain');
            obj.style.fontFamily =letra;
        }
        </script>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap" id="cabeza">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div id="divmain" class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <p align="right">
                <?=Html::a('Cambiar Theme','#',['onclick'=>'cambiar_fondo("#FF853D");']) ?>
                <?=Html::a('Cambiar Theme # 2','#',['onclick'=>'cambiar_fondo2("#FF5555");']) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer" id="pie">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
