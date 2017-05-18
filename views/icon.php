<?php
use yii\helpers\Html;
use yii\helpers\Json;

?>
<div class="modal-header">

  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

  <h4 class="modal-title" id="myModalLabel">图标选择器</h4>

</div>
<style type="text/css">
.icon-btn-content {
  height: 400px;
  overflow-y: auto;
  overflow-x: hidden;
}
.icon-btn-content .btn {
  margin-top: 8px;
  overflow: hidden;
}

</style>

<div class="modal-body">

  <div class="modal-wrap">

    <div class="list data">

      <ul class="nav nav-tabs" role="tablist">
        <?php
        $li = '';
        $i = 0;
        foreach ($models as $key => $model) {

          if ($i == 0) {

            $i++;

            $li .= '<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#' . $key . '" role="tab">' . $key . '</a></li>';

          } else {

            $li .= '<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#' . $key . '" role="tab">' . $key . '</a></li>';

          }

        }
        echo $li;
        ?>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content icon-btn-content">
        <p></p>
        <?php
        $li = '';
        $i = 0;
        foreach ($models as $key => $model) {

          if ($i == 0) {

            $i++;

            $li .= '<div class="tab-pane active" id="' . $key . '" role="tabpanel"><div class="row">';

              foreach ($model as $k => $v) {

                $li .= '<div class="col-sm-3">';

                  $li .= Html::button($v, ['type' => 'button', 'class' => 'btn btn-default btn-block', 'data-modal-group' => $group, 'data-data' => Json::encode(['key'=>$k, 'name'=>$v, 'icon' => '<i class="fa fa-'.$k.'"></i>' ])]).' ';

                $li .= '</div>';

              }


            $li .= '</div></div>';

          } else {

            $li .= '<div class="tab-pane" id="' . $key . '" role="tabpanel"><div class="row">';

              foreach ($model as $k => $v) {

                $li .= '<div class="col-sm-3">';

                  $li .= Html::button($v, ['type' => 'button', 'class' => 'btn btn-default btn-block', 'data-modal-group' => $group, 'data-data' => Json::encode(['key'=>$k,'name'=>$v, 'icon' =>'<i class="fa fa-'.$k.'"></i>'])]).' ';

                $li .= '</div>';

              }

            $li .= '</div></div>';

          }

        }
        echo $li;
        ?>


      </div>

    </div>



  </div>

</div>

<div class="modal-footer">

  <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>

  <!-- <button type="button" class="btn btn-primary">保存</button> -->

</div>