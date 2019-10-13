<?php

use yii\widgets\ListView;

?>

<h2 class="news__title">Новости</h2>
<div class="news__list">

    <?=

        ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_news'
        ]);

    ?>

</div>
