<?php
use yii\helpers\Html;
use shahimian\radiostation\Assets;

Assets::register($this);
?>
<h1><?= $source ? $source['source_audio'] : 'بدون عنوان' ?></h1>

<div id="radio-station">
<?php if(count($rows)): ?>
    <div>
        <audio controls>
            <source src="<?= $source ? 'uploads/' . $source['source_audio'] . '.mp3' : ''?>" type="audio/mpeg">
            برنامه شما فرمت صوتی را پشتیبانی نمیکند.
        </audio>
        <ul>
            <?php foreach($rows as $row): ?>
                <li><?= Html::a($row['source_audio'], ['', 'sid' => $row['source_id']]) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?= Html::img($source ? 'uploads/' . $source['source_picture'] : '') ?>
    <?php else: ?>
    <div>برای ایجاد لیست فایلهای رادیویی به صفحه <?= Html::a('مدیریت ایستگاه', ['/radiostation']) ?> مراجعه کنید.</div>
    <?php endif; ?>
</div>
