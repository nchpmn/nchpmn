<?php snippet('header', array('bodyclass' => 'work-archive')) ?>
<h1 class="text-center"><a href="<?php echo $page->url() ?>"><span><?php echo $page->title() ?></span></a></h1>
    <div class="container">
            
        <div class="portfolioContainer">
            <?php $posts = $page->children()->visible()->flip();
            $posts = $posts->paginate(strval($page->numberitems())); ?>
            <?php foreach($posts as $item): ?>
                <div class="col-xs-6 col-sm-4 col-lg-3" data-content="<?php echo $item->url() ?>">
                    <a class="colio-link" href="#">
                        <?php $id = explode("?v=", $item->link()) ?>
                        <?php $id = $id[1] ?>
                        <img class="img-responsive" src="<?php echo 'http://i1.ytimg.com/vi/'.$id.'/maxresdefault.jpg' ?>">
                    </a>
                </div>
            <?php endforeach ?>
        </div>
        
        <?php snippet('pagination-prevnext', array('posts' => $posts)) ?>
    </div>
    
    <?php echo js(array(
            'assets/js/jquery.easing.1.3.js',
            'assets/js/jquery.colio.min.js',
            'assets/js/jquery.isotope.min.js',
        )) ?>
        <script type="text/javascript">
        // COLIO + ISOTOPE
            $(document).ready(function(){
                $('.portfolioContainer').colio({
                    id: 'colio_1',
                    placement: 'before', // would prefer this to be 'inside', but there were problems
                    scrollOffset: 150,
                    navigation: false,
                    closeText: '<span><i class="fa fa-times fa-lg"></i></span>',
                    contentFilter: '',
                });
            
                // "isotope" plugin  
                var filter = '*', isotope_run = function(f) {  
                    $('.portfolioContainer').  
                    isotope({layoutMode : 'fitRows', filter: f}).  
                    trigger('colio','excludeHidden');  
                };  
                  
                $('#filters a').click(function(){  
                    $(this).addClass('filter-active').siblings().removeClass('filter-active');  
                    // take class name from href attr and then run isotope to filter items in portfolio  
                    var href = $(this).attr('href').substr(1);  
                    filter = href ? '.' + href : '*';  
                    isotope_run(filter);  
                    return false;  
                });  
                  
                // run isotope with "*" filter to show all items  
                isotope_run(filter);  
                  
            });
        </script>
<?php snippet('footer') ?>