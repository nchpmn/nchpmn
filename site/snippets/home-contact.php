    <section id="contact">
        <div class="container">
            <div class="row">
				<h3 class="text-center"><span><?php echo $data->title() ?></span></h3>
                <div class="col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-0 col-lg-5 col-lg-offset-2">
                    <!--form role="form" method="post" action="<?php snippet('contact-form-submit') ?>">
                        <input placeholder="Name &bullet;" type="text" required name="name" id="name">
                        <input placeholder="Email  &bullet;" type="email" required name="email" id="email">
                        <input placeholder="Phone  &bullet;" type="text" id=name="phone" "phone">
                        <textarea placeholder="Message  &bullet;" name="message" required id="message"></textarea>
                        <input class="btn btn-primary" name="send_mail" type="submit" value="Send">
                    </form-->
                    <!-- this needs to be fixed -->
                    <form action="http://formspree.io/nathan@nchp.mn" method="POST">
                        <input placeholder="Name &bullet;" type="text" name="name" value="">
                        <input placeholder="Email  &bullet;" type="text" name="email" value="">
                        <input placeholder="Phone  &bullet;" type="text" name="Phone" value="">
                        <textarea placeholder="Message  &bullet;" name="Message" rows="8" cols="0" value=""></textarea>
                        <input type="text" name="_gotcha" style="display:none;">
                        <input type="hidden" name="_next" value="<?php echo $pages->find('extras/contact-thanks')->url() ?>" >
                        <input type="submit" name="submit" value="Send" class="btn btn-primary">
                    </form>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-0">
                    <dl>
                        <div class="col-xs-4 col-sm-12">
                            <dt>Phone</dt>
                            <dd>+61 416 544 800</dd>
                        </div>
                        <div class="col-xs-4 col-sm-12">
                            <dt>Email</dt>
                            <dd><a href="mailto:nathan@nchp.mn">nathan@nchp.mn</a></dd>
                        </div>
                        <div class="col-xs-4 col-sm-12">
                            <dt>Location</dt>
                            <dd>Sydney &amp; Wollongong, Australia</dd>
                        </div>                        
                        <div class="col-xs-4 col-sm-12">
                            <dt>SOCIALLY</dt>
                            <dd><a href="<?php echo $site->youtube() ?>"><i class="fa fa-youtube-square fa-3x"></i></a>
                            <a href="<?php echo $site->twitter() ?>"><i class="fa fa-twitter-square fa-3x"></i></a>
                            <a href="<?php echo $site->facebook() ?>"><i class="fa fa-facebook-square fa-3x"></i></a>
                            <a href="<?php echo $site->vimeo() ?>"><i class="fa fa-vimeo-square fa-3x"></i></a></dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </section>
