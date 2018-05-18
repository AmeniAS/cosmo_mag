<!--Footer area start here-->

<footer class="footer-two">

    <div class="footer-top pd-t80 pd-b80">

        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                    <div class="footer-link widget">

                        <h4>Information</h4>

                        <ul class="link-list">

                            <li><a href="#">About us</a></li>

                            <li><a href="#">Customer Service</a></li>

                            <li><a href="#">Manufacturers</a></li>

                            <li><a href="#">Privacy policy</a></li>

                            <li><a href="#">Terms & condition</a></li>

                            <li><a href="#">Blog</a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                    <div class="footer-link widget">

                        <h4>My Account</h4>

                        <ul class="link-list">

                            <li><a href="#">My Account</a></li>

                            <li><a href="#">Login</a></li>

                            <li><a href="#">Order History</a></li>

                            <li><a href="#">Wish List</a></li>

                            <li><a href="#">View Cart</a></li>

                            <li><a href="#">Client</a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                    <div class="footer-link widget">

                        <h4>Shopping guide</h4>

                        <ul class="link-list">

                            <li><a href="#">FAQs</a></li>

                            <li><a href="#">Payment</a></li>

                            <li><a href="#">Track your order</a></li>

                            <li><a href="#">Return policy</a></li>

                            <li><a href="#">Warranty</a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                    <div class="footer-link widget">

                        <h4>NewsLetter Sign Up!</h4>

                        <form action="{{ route('post_newsletter') }}" method="post">

                            {{ csrf_field() }}

                            <div class="input-prepend">

                                <input type="email" name="email" placeholder="E-mail...">

                                <button type="submit"><i class="fa fa-angle-right"></i></button>

                            </div>

                        </form>

                        <p class="social-head">Follow Us On:</p>

                        <ul class="socila-link">

                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>

                            <li><a href="#"><i class="fa fa-skype"></i></a></li>

                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="footer-bottom">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <div class="copyright">

                        <p>© {{ date('Y') }} Allo. All Rights Reserved. Designed by <a href="#">MkConsult</a></p>

                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <div class="pay-option text-right">

                        <img src="{{ asset('front_asset/images/pay.png') }}" alt=""/>

                    </div>

                </div>

            </div>

        </div>

    </div>

</footer>

<!--Footer area end here-->