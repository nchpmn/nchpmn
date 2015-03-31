<?php snippet('header', array('bodyclass' => 'error-page blog-article blog-single')) ?>


<?php $code = http_response_code() ?>


<article>
    <div class="containter">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-center">
                <h1><?php echo intval($code) ?> Error</h1>
                <div class="leading">
                    <p>So, I've gone and broken something. Sorry about that!</p>
                </div>
            </div>
        </div> 
    </div>   
</article>







<?php snippet('footer') ?>