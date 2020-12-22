<?php 
/** @var $this \jacuve\phpmvc\View */
/** @var $model \app\models\ContactForm */
use jacuve\phpmvc\form\TextAreaField;
$this->title = 'Contact';

?>

<h1>Contact us</h1>

<?php $form = \jacuve\phpmvc\form\Form::begin('', 'post'); ?>

  <?php echo $form->field($model, 'subject'); ?>
  <?php echo $form->field($model, 'email'); ?>
  <?php echo new TextAreaField($model, 'body'); ?>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php  \jacuve\phpmvc\form\Form::end(); ?>
