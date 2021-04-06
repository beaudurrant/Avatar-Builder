<?php  
  session_start(); 
  $class = urlencode(htmlspecialchars($_REQUEST['class'])); 
  require_once '..' . DIRECTORY_SEPARATOR . 'autoload.php';
?>
<!DOCTYPE HTML>
<html>

<head>

  <title>Avatar Builder</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Use JavaScript and PHP to build a custom 8-bit avatar." />
  <meta name="keywords" content="" />
  <link rel="stylesheet" href="css/style.css" />
  <script type="application/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script type="application/javascript">
  $(document).ready( function() {
    // open the color picker when avatar is clicked
    $('#avatar').click( function(e) {
      e.preventDefault();
      var offset_t = $(this).offset().top - $(window).scrollTop();
      var offset_l = $(this).offset().left - $(window).scrollLeft();
      // get the x, y on the image
      var x = Math.round(e.clientX - offset_l);
      var y = Math.round(e.clientY - offset_t);
      // translate to grid
      var pixelWidth = $(this).width() / 25;
      i = Math.floor(x / pixelWidth);
      j = Math.floor(y / pixelWidth);
      // open color picker
      $('#colorPicker').css('display', 'block');
      $('#colorPicker').css('left', (e.pageX)+'px');
      $('#colorPicker').css('top', (e.pageY)+'px');
      return false;
    });
    // close the color picker when click on document
    $(document).click(function(e) { $('#colorPicker').css('display', 'none'); });
  });
  var i, j;
  // set the color once picked from our pallet
  function changeColor(elm) {
    // put value of grid into colors
    $('#colors').val(elm.id + ',' + i + '_' + j);
    refreshAvatar();
  }
  // refresh the avatar with form options
  function refreshAvatar() {
    document.getElementById('avatar').src = '/avatar.php?class=<?php echo $class; ?>&d=' + Date.now() + '&' + $('#avatarForm').serialize();
    $('#colors').val('');
  }
  </script>
  
</head>

<body>

  <div id="container">
  
    <h1>Avatar Builder</h1>
    
    <p>
      <a href='/'>Person</a> | <a href='/?class=snowboarder'>Snowboarder</a> | <a href='/?class=skiier'>Skiier</a>
    </p>
    <p>
      <em>Use JavaScript and PHP to build a custom 8-bit avatar.</em>
    </p>
    
    <br style='clear: both' />
    
    <div id="avatarContainer">
      <img id='avatar' src='avatar.php?class=<?php echo $class; ?>' />
      <?php include 'colorPicker.inc.php'; ?>
    </div>
    
    <div id="optionsContainer">
      <form id='avatarForm'>
        <?php include 'options.form.inc.php'; ?>
        <input type='hidden' name='colors' id='colors' />
      </form>
    </div>
  
  </div>

</body>

</html>