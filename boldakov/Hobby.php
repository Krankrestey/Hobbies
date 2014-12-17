<html>
<head>
  <link rel="shortcut icon" href="http:\\ccfit.nsu.ru/~boldakov/favicon.ico" type="image/x-icon">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Хобби</title>
  <style>
  body {
    background: url(back.png);
    margin: auto;
  }
  #Header {
    background: url(HeaderBack.png);
    padding: 15px;
    margin: 10%;
    margin-top: 0%;
    margin-bottom: 0%;
    width: 80%;
    height: 100px;
  }
  #MMenu {
    background: #820203;
    margin: 10%;
    margin-top: 0%;
    margin-bottom: 0%;
    height: auto;
    width: 80%;
    padding: 15px;
    text-align: right;
  }
  a.MMenuLink {
    text-decoration: none;
    margin: 15px;
    color: #ffffff;
    padding: 5px;
  }
  a.MMenuLink:hover{
    background: #ffffff;
    color: #000000;
  }
  #Page {
    padding: 15px;
    background: #ffffff;
    margin: 10%;
    margin-top: 0%;
    margin-bottom: 0%;
    width: 80%;
    height: 0px auto;
  }
  #Logo{
    margin-left: 30%;
  }
  #Hello {
    color: white;
    background: #820203;
    margin: 10%;
    margin-top: 0%;
    margin-bottom: 0%;
    height: auto;
    width: 80%;
    padding: 0 15 0 15;
    text-align: center;
  }
  div.news {
    border: 3px dashed #820203;
    padding: 10px;
    margin: 10px;
  }
  div.comment {
    border: 1px solid #820203;
    padding: 10px;
    margin: 10px;
  }
</style>
</head>
<body>
  <div id = 'Header'><a href="http:\\ccfit.nsu.ru/~boldakov/index.php"><img id = 'Logo' src = "http:\\ccfit.nsu.ru/~boldakov/LogoH.png"></a></div>
  <div id ="Hello"><?php
    session_start();
    if($_SESSION['auth'] == 1) {
      $name = $_SESSION['name'];
      echo "Привет, $name.";
    }
    else {
      echo "Привет, гость.";} ?></div>
      <div id="MMenu"><a class="MMenuLink" href = "http:\\ccfit.nsu.ru/~boldakov/talk.php">Презентация</a><?php
        if($_SESSION['auth'] == 1) {
          echo '<a class="MMenuLink" href="http:\\ccfit.nsu.ru/~boldakov/addNews.php">Добавить новость</a><a class="MMenuLink" href="http:\\ccfit.nsu.ru/~boldakov/logout.php">Выход</a>';
        }
        else {
          echo '<a class="MMenuLink" href="http:\\ccfit.nsu.ru/~boldakov/reg.php">Регистрация</a><a class="MMenuLink" href="http:\\ccfit.nsu.ru/~boldakov/auth.php">Войти</a>';
        }
        ?>
      </div>
      <div id = 'Page'>
        <div class = 'news'>
          <div align = 'center'><h4>Мое хобби - японский язык</h4></div>
          <p>Мое хобби - изучение японского языка в данный, конкретный момент времени. Честно говоря, я плохо представляю, что следует писать, когда рассказываешь о своем хобби. Ну, думаю, что во-первых о причинах изучения, во-вторых о способах, и, в-третьих, о "профите", который может быть от вашего хобби.</p><img src = "http:\\ccfit.nsu.ru/~boldakov/hob1.jpg" style='width: 256px; height:256px;'>
          <p>Итак, приступим. Я изучаю японский язык, потому что... мне нравится. Да, просто нравится и все. Чего еще можно ожидать от человека, избравшего себе хобби? Хобби ведь избираются по душе и для душе, я считаю. Поэтому данный вопрос оставим открытым и будем считать, что я просто лил воду и занимал место на вашем экране.</p>
          <p>Если говорить о способах, то я не знаю сколько их существует, точно также, как мы не знаем сколько листьев на дереве. Но я предложил бы все-таки начинать изучение именно в специальизированной группе, так как учить иероглифы, а также катакану с хираганой намного быстрее получается именно в группе людей, а вот позже можно, наверное, заняться и самостоятельным изучением.</p>
          <p>И в заключении  пользе изучения. Пожалуй, польза полностью идентична пользе получаемой от изучения любого другого иностранного языка: вы получаете возможность читать интересующую вас литературу, немного расширяете кругозор и плюсик в вашем резюме.</p>
          <p>Для расширения кругозора и для интересующихся, могу привести некоторые общие сведения об японском языке, которые вы, может статься, не знали</p>
          <p>Самая первая и неочевидная вещь, по крайней мере для меня было то, что японский язык выучить не сложно, для этого его нужно просто учить. В нем нет особых хитросплетений грамматики и синтаксиса, а пунктуация и вовсе упрощена до точки и запятой. Но проблемы возникают, когда вы начинаете учить написания различных слов, которые, как известно, состоят из иероглифов, заимствованных из Китая и немного видоизмененных. Запомнить их написание это одно дело, а вот выучить их произношение, которых как минимум два, японское и китайское, за редким исключением, уже проблема. Например, каждый из иероглифов на изображении имеет 2 чтения, то есть фактически вы должны к одной "картинке" привязать несколько звуков, что намного сложнее, чем сопоставить каждой "картинке" по одному звучанию. У любопытного читателя может возникнуть вопрос: а зачем им несколько чтений одного иероглифа? Во-первых, такое действие уменьшает количество символов необходимых для запоминания, что есть несомненный плюс, во-вторых так исторически сложилось, что японцы заимствовали у Китая иероглифы и, конечно же, китайское название вещей или явлений не соответствовало японскому, поэтому отдельно стоящие иероглифы имеют японское чтение. Однако, заимствование продолжалось и чаще всего целыми словами, которых изначально в японском языке не существовало, поэтому слова, составленные из нескольких иероглифов носят чисто китайское звучание, из-за этого каждый иероглиф, стоящий рядом с другими в слове носит китайское чтение. Кроме всео вышеописанного проблем с изучением иероглифов никаких не возникает. Это становится вопросом элементарной усидчивости.</p><img src = "http:\\ccfit.nsu.ru/~boldakov/jap.jpg" style='width: 256px; height:256px;'>
          <p>Раз уж была затронута тема японской письменности, то не стоит ограничиваться только китаискими заимствованиями. Японцы имеют свое собственное изобретение в письменности - слоговые азбуки хирагана и катакана. Слоговые азбуки состоят из гласных букв в первой строке гласных букв а, и, у, э, о; во второй строке: ка, ки, ку, кэ, ко и т. д. с согласными с, н, х, м, р. А также плюс несколько символов для букв: я, ю, ё, ва и один для показателя действия о. Основной смысл хираганы заключается в том, что она позволяют записать звучания иероглифов и некоторые слова, неимеющие иероглифического написания и для обозначения падежных показателей. Катакана же используется для записи иностранных слов и тех слов, которые автор хотел отдельно подчеркнуть.</p><img src = "http:\\ccfit.nsu.ru/~boldakov/jap2.gif" style='width: 256px; height:256px;'>
          <p> В заключение я напишу об разговорной речи японцев. Основная трудность для иностранцев, изучающих японсий язык заключается в разделении японской речи на разговорную, вежливую и очень вежливую. Если разговорная достаточно элементарна, т. к. в ней опускаются некоторые необходимы на письме формальности, то вежливой и очень вежливой могут возникнуть проблемы. Дело в том, что вежливая речь является так же и литературным языком из чего следует необходимость употребления всевозможных суффиксов и префиков, которые надо еще и знать где употребить. В остальном же с устной частью японского языка ничего сложного нет.</p><img src = "http:\\ccfit.nsu.ru/~boldakov/jap3.jpg" style='width: 256px; height:256px;'>
          <p> Из всего что я написал вполне можно сделать вывод, что изучение японского языка вопрос вреени и желания. И упорности. Так как выучить столько и иероглифов и знать их чтения - задача, требующая большого трудолюбия.</p>
        </div>
      </div>
    </body>
    </html>
