<article class="first-post">
        <div class="image-container col-xs-3 col-sm-4 col-md-5"
        <?php $cover = $post->cover(); ?>
        <?php if($image = $post->image(strval($cover))): ?>
            style="background-image:url('<?php echo $image->url() ?>');"
        <?php endif ?>></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-4 col-sm-7 col-sm-offset-5 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6 post-excerpt">
                    <span class="meta">14 Dec 2013</span>
                    <h1><a href="blog-single.html">What about a longer title? And, Marker!</a></h1>
                    
                    <p>Your eyes can deceive you. Don't trust them. I'm surprised you had the courage to take the responsibility yourself. I need your help, Luke. She needs your help. I'm getting too old for this sort of thing.</p>
                    <p>I'm surprised you had the courage to take the responsibility yourself. I need your help, Luke. She needs your help. I'm getting too old for this sort of thing. Hey, Luke! May the Force be with you.</p>
                    <p><a href="#">More &rarr;</a></p>
                </div>
            </div>
        </div>
    </div>    
</article>