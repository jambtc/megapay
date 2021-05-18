<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = Yii::t('app', 'Network details');
?>
<div class="h-100 network-details dash-balance">
    <div class="dash-content relative">
		<h3 class="w-text"><?= $this->title ?></h3>
	</div>

    <section class="mt-15 mb-15 container">
    	<div class="coin-box">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <i class="fas fa-2x fa-network-wired"></i>
                    <div class="ml-10">
                      <h3 class="coin-name"><?= Yii::t('app','Node') ?></h3>
                      <small class="text-muted"><?= $node ?></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="coin-box mt-3">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <i class="fas fa-2x fa-project-diagram"></i>
                    <div class="ml-10">
                      <h3 class="coin-name"><?= Yii::t('app','Latest block') ?></h3>
                      <small class="d-block mt-1 mr-3 text-break network-block-hash">
                          &nbsp;
                      </small>
                    </div>
                </div>
                <div>
                    <small class="d-block mb-0 p-1 shadow">
                        <span class="network-block-number text-muted">&nbsp;</span>
                    </small>
                </div>
            </div>
        </div>

        <div class="coin-box mt-3">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <i class="fas fa-2x fa-wallet"></i>
                    <div class="ml-10">
                      <h3 class="coin-name"><?= Yii::t('app','Wallet block') ?></h3>
                      <small class="d-block mt-1 mr-3 text-break network-block-wallet-hash">
                          &nbsp;
                      </small>
                    </div>
                </div>
                <div>
                    <small class="d-block mb-0 p-1 shadow">
                        <span class="network-block-percentage txt-green">&nbsp;</span>
                        <span class="network-block-wallet text-muted">&nbsp;</span>
                    </small>
                </div>
            </div>

        </div>
        <div class="coin-box mt-3">
            <div class="d-flex align-items-center">
                <i class="fas fa-2x fa-history "></i>
                <div class="ml-10">
                  <h3 class="coin-name"><?= Yii::t('app','Remaining time') ?></h3>
                  <small class="network-block-relativeTime text-muted">&nbsp;</small>
                </div>
            </div>
        </div>
    </section>


    <div class="form-divider"></div>
    <div class="form-divider"></div>

</div>