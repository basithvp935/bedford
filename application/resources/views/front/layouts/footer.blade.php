<div id="search-modal" class="search">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <form action="https://www.google.com/search" method="post" target="_blank">
                    @csrf
                    <div class="input-group">
                        <input class="form-control border-end-0 border rounded-pill" type="text" placeholder="Search">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5"
                                type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div class="contact-form p-0 border-0">
                    <form method="post" action="#" class="contact-form" autocomplete="off"
                        enctype="multipart/form-data">
                        <!--<form method="post" action="{{ route('enquiry_store') }}" class="contact-form" autocomplete="off"-->
                        <!--    enctype="multipart/form-data">-->
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subject" name="subject"
                                value="{{ old('subject') }}">
                            @if ($errors->has('subject'))
                                <span class="error">{{ $errors->first('subject') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <textarea placeholder="Type your message here..." class="form-control" name="message"
                                rows="3" required>{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                                <span class="error">{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                        <div class="d-grid ">
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@php
    $academic_calendar = App\Models\HomePage::find(1);
@endphp
<footer>
    <style>
        /* This forces the footer background and text colors, overriding any cached CSS */
        footer,
        footer .footer,
        section.footer {
            /* NEW: Bedford Deep Royal Indigo to Navy Gradient Background */
            background: linear-gradient(135deg, #1E2260 0%, #2F348B 100%) !important;
            background-color: #1E2260 !important;
            /* Fallback */
            border-top: none !important;
        }

        footer *,
        section.footer *,
        footer h1,
        footer h2,
        footer h3,
        footer h4,
        footer h5,
        footer h6,
        footer p,
        footer a,
        footer li,
        footer span {
            color: #FFFFFF !important;
        }

        footer a:hover {
            color: #F59F1E !important;
        }

        footer hr,
        footer .border-bottom,
        footer .border-top {
            border-color: rgba(245, 159, 30, 0.25) !important;
        }
    </style>
    <section class="footer pt-3 pb-3  awl tx-white">
        <div class="container">
            <div class="row gap-md-0 gap-3">
                <!--                <div class="col-md-4 mb-4">-->
                <!--                <div class="accordion" id="accordionExample">-->
                <!--  <div class="accordion-item">-->
                <!--    <h2 class="accordion-header" id="headingOne">-->
                <!--      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
                <!--      Abu Hamour - Head office-->
                <!--      </button>-->
                <!--    </h2>-->
                <!--    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">-->
                <!--      <div class="accordion-body">-->
                <!--     <p>P.O Box: 55060, P.O Box: 55060,Building No : 5, Street No: 575, Zone No: 56 Doha, Qatar, E-mail: fds@nobleqatar.com,Phone: +974 44162700, Fax: +974 44162800</p>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--  <div class="accordion-item">-->
                <!--    <h2 class="accordion-header" id="headingTwo">-->
                <!--      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
                <!--      Wukair-->
                <!--      </button>-->
                <!--    </h2>-->
                <!--    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">-->
                <!--      <div class="accordion-body">-->
                <!--      <p>Wukair</p>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--  <div class="accordion-item">-->
                <!--    <h2 class="accordion-header" id="headingThree">-->
                <!--      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
                <!--      Ainkhalid-->
                <!--      </button>-->
                <!--    </h2>-->
                <!--    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">-->
                <!--      <div class="accordion-body">-->
                <!--       <p>Ainkhalid</p>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--                </div>-->
                <div class="col-md-3 mb-2">
                    <h5>OUR CENTER</h5>
                    <hr />
                    <li><a href="{{ route('about_us') }}">About Bedford</a></li>
                    <li><a href="{{ route('facilities') }}">Our Facilities</a></li>
                    <li><a href="{{ route('why-choose-us') }}">Why Choose Us</a></li>
                    <li><a href="{{ route('photo_gallery') }}">Photo Gallery</a></li>
                </div>
                <div class="col-md-3 mb-2">
                    <h5>Admissions</h5>
                    <hr />
                    <li><a href="{{ route('admissionProcedure') }}">Admission Procedure</a></li>
                    <li><a href="{{ route('admission') }}">Admission Form</a></li>
                    <li><a href="{{ route('contact_us') }}">Schedule a Tour</a></li>
                </div>
                <div class="col-md-3 mb-2">
                    <h5>Explore More</h5>
                    <hr />
                    <li><a href="{{ route('Careers') }}">Careers</a></li>
                    <li><a href="{{ route('video_gallery') }}">Video Gallery</a></li>
                    <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                </div>
                <div class="col-md-3 mb-2">
                    <h5>Bedford Kindergarten</h5>
                    <hr />
                    <span>
                        Block E, Barwa Madinatna,<br />
                        Doha, Qatar.<br />
                        <strong style="color: #F59F1E !important;">Phone:</strong> +974 40022130<br />
                        <strong style="color: #F59F1E !important;">WhatsApp:</strong> +974 30737731<br />
                        <strong style="color: #F59F1E !important;">Email:</strong> school@bedfordqatar.com
                    </span>
                </div>

                <div class="col-md-6 text-end ">
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-6 text-center text-md-start">
                    <p>© Bedford Kindergarten. All Rights Reserved</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p>Powered by <a href="#" target="_blank"
                            style="text-decoration: none; color: #F59F1E !important;">Credozen</a></p>
                </div>
            </div>
        </div>
    </section>

    @php
        $event_calendars = App\Models\EventCalendar::select('title', 'date', 'event_calendar_slug')->get();

        $EventCalendars = [];

        foreach ($event_calendars as $record) {
            $EventCalendars[] = [
                'title' => $record->title,
                'date' => $record->date,
                'end' => $record->date,
                'url' => url('event-calendar-details/' . $record->event_calendar_slug),

            ];
        }
    @endphp
</footer>

<!-- Floating Action Button -->
<div class="floating-fab-container">
    <div class="floating-fab-options">
        <a class="floating-fab-option fab-whatsapp" target="_blank" href="https://wa.me/+97430737731"
            aria-label="Chat on WhatsApp">
            <span class="fab-tooltip">Chat on WhatsApp</span>
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.724-1.455L0 24zm6.59-4.846c1.66.986 3.288 1.488 4.675 1.49 5.485.002 9.875-4.385 9.878-9.87.002-2.657-.996-5.147-2.88-7.03C16.336 1.85 13.814.85 11.218.85 5.733.85 1.343 5.238 1.34 10.724c-.001 1.488.415 2.947 1.22 4.21l-.988 3.61 3.733-.979a9.78 9.78 0 0 0 4.743 1.246zm11.304-7.625c-.269-.134-1.593-.787-1.839-.877-.246-.09-.425-.134-.604.135-.179.269-.693.876-.849 1.056-.156.179-.313.202-.582.067-.269-.134-1.137-.419-2.166-1.337-.801-.714-1.341-1.597-1.498-1.866-.156-.269-.017-.414.118-.548.121-.12.269-.314.403-.472.134-.157.179-.269.269-.449.09-.179.045-.337-.023-.472-.067-.134-.604-1.457-.827-1.995-.218-.523-.457-.452-.627-.46l-.533-.008c-.183 0-.482.069-.734.342-.252.274-.962.94-.962 2.292 0 1.352.983 2.658 1.12 2.837.137.18 1.93 2.946 4.674 4.128.653.281 1.163.449 1.56.575.656.208 1.253.179 1.725.109.526-.078 1.593-.651 1.817-1.28.224-.629.224-1.168.156-1.28-.067-.113-.245-.179-.514-.313z" />
            </svg>
        </a>
        <a class="floating-fab-option fab-brochure" target="_blank" href="#" aria-label="Download Brochure">
            <span class="fab-tooltip">Download Brochure</span>
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM17 13l-5 5-5-5h3V9h4v4h3z" />
            </svg>
        </a>
    </div>
    <button class="floating-fab-trigger" aria-label="Quick Actions">
        <span class="fab-trigger-icon">+</span>
    </button>
</div>


<script src="{{ asset('Front/js/jquery.min.js') }}"></script>
<script src="{{ asset('Front/js/classie.js') }}"></script>
<script src="{{ asset('Front/js/jquery.smooth-scroll.js') }}"></script>
<script src="{{ asset('Front/js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('Front/js/slick.min.js') }}"></script>
<script src="{{ asset('Front/js/popper.min.js') }}"></script>
<script src="{{ asset('Front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('Front/js/menu.js') }}"></script>
<script src="{{ asset('Front/js/main.js') }}"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://use.fontawesome.com/08aeb23ed0.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('Front/js/toaster.min.js') }}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    feather.replace();
</script>
<script>
    $('.tb-slick').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    $('a[data-bs-toggle="pill"]').on('shown.bs.tab', function (e) {
        $('.tb-slick').slick('setPosition');
    });
</script>
<script>
    $('.slick-1').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.prev'),
        nextArrow: $('.next')
    });
</script>
<script>
    $('.slick-3').slick({
        dots: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 1500,


        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

        ]
    });

</script>
<script>
    $('.slick-4').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.prev'),
        nextArrow: $('.next')
    });
</script>

<script>
    $('.menu-toggle').on('click', function () {
        $('body').toggleClass('open');
    });
    $('.overlay-menu').on('click', function () {
        $('body').toggleClass('open');
    });
</script>

<script>
    const arrowButton = document.querySelectorAll(".parent");

    arrowButton.forEach((el) =>
        el.addEventListener("click", (event) => {
            const subMenu = event.target.parentElement.querySelector(".sub-menu");
            subMenu.classList.toggle("open");
        })
    );
</script>

<script>
    $(function () {
        var inputs = $('.input');
        var paras = $('.description-flex-container').find('p');
        inputs.click(function () {
            var t = $(this),
                ind = t.index(),
                matchedPara = paras.eq(ind);

            t.add(matchedPara).addClass('active');
            inputs.not(t).add(paras.not(matchedPara)).removeClass('active');
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var events = @json($EventCalendars);
        let calendar = new FullCalendar.Calendar(calendarEl, {
            events: events
        });



        calendar.render();
    });



</script>



<script>
    @if (Session::has('message'))
        $type = "{{ Session::get('alert-type') }}";
        switch ($type) {

            case 'success':
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.success("{{ Session::get('message') }}", {
                    timeOut: 5000
                });

                break;



            case 'warning':
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.warning("{{ Session::get('message') }}", {
                    timeOut: 5000
                });

                break;

        }
    @endif
</script>

<script>
    var hidWidth;
    var scrollBarWidths = 40;

    var widthOfList = function () {
        var itemsWidth = 0;
        $('.list a').each(function () {
            var itemWidth = $(this).outerWidth();
            itemsWidth += itemWidth;
        });
        return itemsWidth;
    };

    var widthOfHidden = function () {
        var ww = 0 - $('.wrapper-nav').outerWidth();

        var hw = (($('.wrapper-nav').outerWidth()) - widthOfList() - getLeftPosi()) - scrollBarWidths;

        var rp = $(document).width() - ($('.nav-item.nav-link').last().offset().left + $('.nav-item.nav-link').last().outerWidth());

        if (ww > hw) {
            //return ww;
            return (rp > ww ? rp : ww);
        }
        else {
            //return hw;
            return (rp > hw ? rp : hw);
        }
    };

    var getLeftPosi = function () {

        var ww = 0 - $('.wrapper-nav').outerWidth();
        var lp = $('.list').position().left;

        if (ww > lp) {
            return ww;
        }
        else {
            return lp;
        }
    };

    var reAdjust = function () {
        // check right pos of last nav item
        var rp = $(document).width() - ($('.nav-item.nav-link').last().offset().left + $('.nav-item.nav-link').last().outerWidth());

        if (($('.wrapper-nav').outerWidth()) < widthOfList() && (rp < 0)) {
            $('.scroller-right').show().css('display', 'flex');
        }
        else {
            $('.scroller-right').hide();
        }

        if (getLeftPosi() < 0) {
            $('.scroller-left').show().css('display', 'flex');
        }
        else {
            $('.scroller-left').hide();
        }
    }

    reAdjust();

    $(window).on('resize', function (e) {
        reAdjust();
    });

    $('.scroller-right').click(function () {
        $('.scroller-left').fadeIn('slow');
        $('.scroller-right').fadeOut('slow');

        $('.list').animate({ left: `+=${widthOfHidden()}px` }, 'slow', function () {
            reAdjust();
        });
    });

    $('.scroller-left').click(function () {

        $('.scroller-right').fadeIn('slow');
        $('.scroller-left').fadeOut('slow');

        $('.list').animate({ left: `-=${getLeftPosi()}px` }, 'slow', function () {
            reAdjust();
        });
    });
</script>
<script>
    Fancybox.defaults.Hash = false;
</script>

</body>

</html>