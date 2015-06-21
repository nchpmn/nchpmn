<?php snippet('header', array('bodyclass' => 'work-single')) ?>


<article>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-7 media">
                <!-- Media and Credits -->
                <?php echo $page->videoURL()->oembed() ?>
                <?php foreach($page->projectImages()->split() as $image): ?>
                    <div class="item">
                        <img class="img-responsive" src="<?php echo $page->files()->get($image)->url() ?>">
                    </div>
                <?php endforeach ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5">
                <!-- Article -->
                <div class="clearfix">
                    <h1><?php echo $page->title() ?></h1>
                    <span class="pull-left"><?php echo $page->role() ?></span>
                    <span class="pull-right"><?php echo $page->date('Y', 'year')?></span>
                </div>
                
                <?php echo kirbytext($page->text()) ?>
                
                <div class="crew">
                    <hr>
                    <dl>
                        <?php if($page->company() != ''): ?>
                            <div class="col-xs-12 col-sm-6">
                                <dt>Production&nbsp;Company</dt>
                                <dd><?php echo $page->company() ?></dd>
                            </div>
                        <?php endif ?>
                        <?php if($page->client() != ''): ?>
                            <div class="col-xs-12 col-sm-6">
                                <dt>Client</dt>
                                <dd><?php echo $page->client() ?></dd>
                            </div>
                        <?php endif ?>
                        <?php if($page->projectURL() != ''): ?>
                            <div class="col-xs-12 col-sm-6">
                                <dt>Website</dt>
                                <dd><a href="<?php echo $page->projectURL() ?>"><?php echo $page->projectURL() ?></a></dd>
                            </div>
                        <?php endif ?>
                        <?php if($page->crew() != ''): ?>
                            <?php foreach($page->crew()->yaml() as $person): ?>
                                <div class="col-xs-12 col-sm-6">
                                    <dt><?php echo $person['role'] ?></dt>
                                    <dd><?php echo $person['name'] ?></dd>
                                </div>
                            <?php endforeach ?>
                        <?php endif ?>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</article>

<?php snippet('prevnext') ?>


<?php snippet('footer') ?>
