<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>


<p>First yii Blog</p>

    <div id="row">
<?php $this->widget('zii.widgets.CMenu',array(
    'items'=>array(
        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
        array('label'=>'----------------------------', 'visible'=>!Yii::app()->user->isGuest),
        array('label'=>'Post', 'url'=>array('/post'), 'visible'=>!Yii::app()->user->isGuest),
        array('label'=>'Comment', 'url'=>array('/comment'), 'visible'=>!Yii::app()->user->isGuest),

    ),
)); ?>


 <?php
 // Jelszó generálás
 // echo CPasswordHelper::hashPassword('demo');
 ?>