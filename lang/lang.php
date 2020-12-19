<?PHP
switch($_GET['lang']) :
   default: include('ru.php'); break;
   case 'ru': include('ru.php'); break;
   case 'eng': include('eng.php'); break;
   case 'ua': include('ua.php'); break;
endswitch;
?>