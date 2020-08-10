<?php

/* @var $this yii\web\View */
use yii\widgets\Pjax;
use yii\helpers\Html;

$this->title = 'My Yii Application';

?>
<div class="site-index">

    <div>
        <label>Amount</label>
        <input type="text" name="amount" id="amount" class="form-control">
    </div>
    <div>
        <label>Value</label>
        <input type="text" name="value" id="value" class="form-control">
    </div>
    <div>
        <label>Direction</label>
        <select id="direction" class="form-control">
            <option value="up">increase</option>
            <option value="down">decrease</option>
            <option value="hold">hopd</option>
        </select>
    </div>
    <div>
        <label>Period</label>
        <select id="period" class="form-control">
            <option value="1d">One day</option>
            <option value="1w">One Week</option>
            <option value="1m">One month</option>
        </select>
    </div>
    <button onclick="sendAjax()" class ="btn btn-primary">Send</button>

</div>
