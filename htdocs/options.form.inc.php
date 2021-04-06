<?php

  $options = [
    new \AvatarBuilder\Options\Person\Gender(),
    new \AvatarBuilder\Options\Person\Head(),
    new \AvatarBuilder\Options\Person\Hair(),
    new \AvatarBuilder\Options\Person\Eyes(),
    new \AvatarBuilder\Options\Person\Face(),
    new \AvatarBuilder\Options\Person\Body(),
    new \AvatarBuilder\Options\Person\Hands(),
    new \AvatarBuilder\Options\Person\Legs(),
    new \AvatarBuilder\Options\Person\Feet(),
    new \AvatarBuilder\Options\Person\Jacket()
  ];
  
  if ($class == 'snowboarder') {
    $options[] = new \AvatarBuilder\Options\Person\Snowboarder\Snowboard();
    $options[] = new \AvatarBuilder\Options\Person\Snowboarder\Rider();
  }
  if ($class == 'skiier') {
    $options[] = new \AvatarBuilder\Options\Person\Skiier\Skis();
  }
  
?>

<?php foreach ($options as $option) { ?>
  <?php $className = (new \ReflectionClass(get_class($option)))->getShortName(); ?>
  <div class='formLabel'><?php echo $className; ?>:</div>
    <div class='formOptions'>
    <?php foreach ($option->getValues() as $value) { ?>
      <input <?php if ($value == $option->getValue()) { ?>checked<?php } ?> type='radio' name='<?php echo strtolower($className); ?>' value='<?php echo $value; ?>' onclick='refreshAvatar()' /> <?php echo ucwords($value); ?> 
    <?php } ?>
    </div>
  <br style='clear: both;' />
  <br />
<?php  } ?>