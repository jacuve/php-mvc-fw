<?php
/** @var $model \app\models\LoginForm */
?>
<h1>Login</h1>

<?php $form =  \jacuve\phpmvc\form\Form::begin('', 'post'); ?>
  <?php echo $form->field($model, 'email'); ?>
  <?php echo $form->field($model, 'password')->passwordField(); ?>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php  \jacuve\phpmvc\form\Form::end(); ?>