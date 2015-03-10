<section id="quals">
    <div class="container">
        <div class="row">
            <h3 class="text-center hidden-xs"><span><?php echo $data->title() ?></span></h3>
            <h3 class="text-center visible-xs"><span><?php echo $data->shorttitle() ?></span></h3>
            <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0">
                <dl class="quals-major">
                    <?php foreach($data->mainquals()->yaml() as $item): ?>
                        <dt><?php echo $item['award'] ?></dt>
                        <dd><?php echo $item['major'] ?> &mdash; <a href="<?php echo 'https://training.gov.au/Training/Details/'.$item['id'] ?>"><?php echo $item['id'] ?></a></dd>
                    <?php endforeach ?>
                </dl>
            </div>
            <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0">
                <dl class="quals-minor">                
                    <?php foreach($data->minorquals()->yaml() as $item): ?>
                        <dt><?php echo $item['award'] ?></dt>
                        <dd><a href="<?php echo 'https://training.gov.au/Training/Details/'.$item['id'] ?>"><?php echo $item['id'] ?></a></dd>
                    <?php endforeach ?>
                </dl>
            </div>
        </div>
    </div>
</section><!-- end Qualifications -->