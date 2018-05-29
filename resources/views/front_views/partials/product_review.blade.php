<section class="contact-area section">

    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                <div class="contact-form">

                    <h3>Laissez votre avis</h3>

                    <div class="form-area row">

                        <form method="post" action="{{ route('products.review', $product) }}">

                            {{ csrf_field() }}

                            <fieldset>

                                <div class="col-sm-12">

                                    <textarea name="message" required placeholder="Message*"></textarea>

                                </div>

                            </fieldset>

                            <div class="col-sm-12">

                                <button type="submit">Send Message</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>