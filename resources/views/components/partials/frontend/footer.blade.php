<div class="overflow-hidden d-flex flex-column">
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-one">
                        <h3 class="color-white">Get In Touch</h3>
                        <div class="footer-add">
                            @php
                                $settings = App\Models\Setting::first();
                            @endphp
                            <h5>Mail:</h5>
                            <a href="mailto:info@mindorbital.com">{{ $settings->mail }}</a>
                            <h5>Address:</h5>
                            <p>{{ $settings->address }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-two">
                        <h3 class="color-white">Pages</h3>
                        <div class="footer-page">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Home</a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Services</a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-three">
                        <h3 class="color-white">Follow Us</h3>
                        <div class="footer-follow">
                            <ul>
                                <li><a href="#"><i class="fa-regular {{ $settings->mailbox }}"></i></a></li>
                                <li><a href="#"><i class="fa-brands {{ $settings->facebook }}"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="color-white">
            <div class="footer-bottom text-center">
                <p>Copyright@ <strong class="color-white">Mind Orbital Technologies Ltd.</strong> 2023</p>
            </div>
            <div class="footer-shape-1"></div>
            <div class="footer-shape-2"></div>
            <div class="footer-shape-3"></div>
        </div>
        <div class="go-top">
            <i class="fa-sharp fa-solid fa-arrow-up"></i>
        </div>
    </footer>
</div>

<!--   Footer area End-->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
<script src="{{ asset('ui/frontend') }}/js/index.js"></script>
</body>

</html>
