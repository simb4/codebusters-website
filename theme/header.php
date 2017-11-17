<?php
  //detect mobile: 
  $useragent=$_SERVER['HTTP_USER_AGENT'];
  $isMobile = false;
  if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
    $isMobile = true;
  }
  class member{
    public $name;
    public $status;
    public $description;
    public $photo;
  }
  $t1 = new member();
  $t1->name = 'Murat Alikhanov';
  $t1->status = 'CEO&Founder';
  $t1->photo = 'img/team/1.jpg';
  $t1->description = '';

  $t2 = new member();
  $t2->name = 'Askar Akshabaev';
  $t2->status = 'Backend Team Lead';
  $t2->photo = 'img/team/1.jpg';
  $t2->description = '';

  $t3 = new member();
  $t3->name = 'Meir Adilzhanov';
  $t3->status = 'Frontend Team Lead';
  $t3->photo = 'img/team/IMG_8968.jpg';
  $t3->description = ''; 
  
  $t4 = new member();
  $t4->name = 'Merey Baizhokin';
  $t4->status = 'Product Manager';
  $t4->photo = 'img/team/IMG_6892.jpg';
  $t4->description = ''; 
  
  $t5 = new member();
  $t5->name = 'Temirulan Mussayev';
  $t5->status = 'Backend Developer';
  $t5->photo = 'img/team/IMG_6896.jpg';
  $t5->description = ''; 
  
  $t6 = new member();
  $t6->name = 'Paul Samulyak';
  $t6->status = 'Creative Director';
  $t6->photo = 'img/team/1.jpg';
  $t6->description = ''; 
  
  $t7 = new member();
  $t7->name = 'Aset Tusunbayev';
  $t7->status = 'Business Development';
  $t7->photo = 'img/team/1.jpg';
  $t7->description = ''; 
  
  $t8 = new member();
  $t8->name = 'Timur Sultanov';
  $t8->status = 'Business Development EMEA';
  $t8->photo = 'img/team/1.jpg';
  $t8->description = ''; 
  
  $t9 = new member();
  $t9->name = 'Bektur Suleimenov';
  $t9->status = 'DevOps Team Lead';
  $t9->photo = 'img/team/1.jpg';
  $t9->description = ''; 
  
  $t10 = new member();
  $t10->name = 'Alimzhan Amanov';
  $t10->status = 'Frontend Developer';
  $t10->photo = 'img/team/IMG_6911.jpg';
  $t10->description = ''; 
  
  $t11 = new member();
  $t11->name = 'Aqzholtai Dagzhanuly';
  $t11->status = 'Frontend Developer';
  $t11->photo = 'img/team/IMG_6842.jpg';
  $t11->description = ''; 
  
  $t12 = new member();
  $t12->name = 'Murager Zhailkhan';
  $t12->status = 'Android Team Lead';
  $t12->photo = 'img/team/IMG_6850.jpg';
  $t12->description = ''; 
  
  $t13 = new member();
  $t13->name = 'Rauan Toleubek';
  $t13->status = 'Android Developer';
  $t13->photo = 'img/team/IMG_8874.jpg';
  $t13->description = ''; 
  
  $t14 = new member();
  $t14->name = 'Nurlan Tolegenov';
  $t14->status = 'iOS Team Lead';
  $t14->photo = 'img/team/IMG_6852.jpg';
  $t14->description = ''; 
  
  $t15 = new member();
  $t15->name = 'Abzal Kobenov';
  $t15->status = 'iOS Developer';
  $t15->photo = 'img/team/IMG_8897.jpg';
  $t15->description = ''; 
  
  $t16 = new member();
  $t16->name = 'Aibek Prenov';
  $t16->status = 'Backend Developer';
  $t16->photo = 'img/team/IMG_8884-2.jpg';
  $t16->description = ''; 
  
  $t17 = new member();
  $t17->name = 'Aidana Kurmasheva';
  $t17->status = 'Backend Developer';
  $t17->photo = 'img/team/IMG_8960-2.jpg';
  $t17->description = ''; 
  
  $t18 = new member();
  $t18->name = 'Daniyar Mussabekov';
  $t18->status = 'Full Stack Developer';
  $t18->photo = 'img/team/IMG_6845.jpg';
  $t18->description = ''; 
  
  $t19 = new member();
  $t19->name = 'Andrey Kim';
  $t19->status = 'DevOps';
  $t19->photo = 'img/team/IMG_6847.jpg';
  $t19->description = ''; 
  
  $t20 = new member();
  $t20->name = 'Murat';
  $t20->status = 'Founder';
  $t20->photo = 'img/team/1.jpg';
  $t20->description = '';


  $memberList = array($t1, $t2, $t3, $t4, $t5, $t6, $t7, $t8, $t9, $t10, $t11, $t12, $t13, $t14, $t15, $t16, $t17, $t18, $t19, $t20);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Codebusters</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,500i,600,600i,700,800,900" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_US" type="text/javascript"></script>
    <script type="text/javascript">
    ymaps.ready(init);
    var alaMap, dubMap;

    function init(){
        myMap = new ymaps.Map("map-almaty", {
            center: [43.216406, 76.975192],
            zoom: 16
        });
        dubMap = new ymaps.Map("map-dublin", {
            center: [55.76, 37.64],
            zoom: 16
        });
    }
    </script>
  </head>

  <body>
  <div class="root">
    <div class="container cb-header" id="top">
      <div class="cb-logo">
        <a href="index.php"><img class="fullwidth" src="img/cb-logo.svg" alt=""></img></a>
      </div>
      <div class="cb-logo-vert">
        <a href="index.php"><img class="fullwidth" src="img/cb-logo-vert.svg" alt=""></img></a>
      </div>
      <div class="cb-navs">
        <a class="cb-nav-item" href="works.php">WORKS</a>
        <a class="cb-nav-item active" href="info.php">INFO</a>
      </div>
    </div>