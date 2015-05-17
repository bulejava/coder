<?php

  if(isset($newsList)){
      foreach($newsList as $news){
          ?>

          <div class="panel panel-default">
              <div class="panel-body">
                 <a href="/coder/news/view/<?=$news['id']?>"><?=$news['title']?></a>
              </div>
          </div>

<?php

      }

  }
?>

