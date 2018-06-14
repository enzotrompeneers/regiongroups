<div class="three-column-footer-contact-form-container">
    <footer class="three-column-footer-contact-form" data-equalizer data-equalize-by-row="true">
        <div class="footer-left" data-equalizer-watch>
            <div class="baseline">
                <div class="contact-details">
                    <h6>Contactgegevens</h6>
                    <p><a href="tel:0496125966"><i class="fa fa-phone fa-lg" aria-hidden="true"></i>0496125966</a></p>
                    <p><a href="mailto:info@cityofcompanies.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@cityofcompanies.com</a></p>
                    <p><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> Merksemsebaan 102, <br> 2110 Wijnegem (BE)</p>
                </div>
            </div>
        </div>

        <div class="footer-center" data-equalizer-watch>
            <div class="baseline">
                <div class="newsletter">
                    <form action="{{ route('newsletter') }}" method="post">
                        @csrf
                        <div class="input-group">
                            <h6>Meld je aan voor onze nieuwsbrief</h6>
                            <input class="input-group-field" type="email" placeholder="E-mailadres" name="email">
                        </div>
                        <button type="submit" class="button expanded">Aanvragen</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-right" data-equalizer-watch>
            <div class="baseline">
                <h6>Openingsuren</h6>
                <p>Maandag - Vrijdag 10:00u - 18:00u</p>
                <p>Zaterdag 12.00u - 18.00</p>
                <p>Zondag Gesloten</p>
                <div class="social">
                    <a href="https://www.facebook.com/City-of-companies-611628772531260/" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/cityofcompanies" target="_blank"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/company/cityofcompanies/" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <p class="text-center">Copyright © 2018 City of companies</p>
    </footer>
</div>