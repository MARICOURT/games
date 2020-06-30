<?php
    $game = $viewVars['game'];
?>
<div class="row d-flew flex-column">
    <div id="score" class="text-center">0</div>
    <div class="outer-board">
        <div class="board">
            <canvas id="gameCanvas"></canvas>
            <script src="<?= $_SERVER['BASE_URI']; ?>/js/<?= $game?>.js"></script>
        </div>
    </div>
</div>



