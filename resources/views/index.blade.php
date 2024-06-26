<x-master>
    <div id="content" class="site-content">

        <div class="main">
            <div class="container">
                <div id="primary" class="primary content-area">
                    <article class="post-150 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div data-elementor-type="wp-page" data-elementor-id="150" class="elementor elementor-150">
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-1850564f elementor-section-height-min-height cs-section-content-fullwidth cs_scroll_y_120 cs-parallax-on-scroll elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                                    data-id="1850564f" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
                                    data-cs-parallax-y="120" style="background-image: none;"
                                    data-cs-background-image="talwind1/uploads/sites/6/2023/03/img-32.jpg">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3e4d3e40 dark-color"
                                            data-id="3e4d3e40" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-c0c2de1 elementor-widget elementor-widget-cs_title"
                                                    data-id="c0c2de1" data-element_type="widget"
                                                    data-widget_type="cs_title.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="cs-title-wrap text-center">
                                                            <div class="cs-subtitle-wrap"><span class="cs-subtitle">
                                                                    @if (session()->has('success'))
                                                                        <h3 type="success">
                                                                            {{ session('success') }}
                                                                        </h3>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                            <div class="cs-subtitle-wrap"><span
                                                                    class="cs-subtitle">Welcome to CozyStay, a
                                                                    luxury hotel in Times Square</span>
                                                            </div>
                                                            <h1 class="cs-title">
                                                                Your Next HOTEL FUTUR </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5dc39db7 elementor-widget__width-initial elementor-widget elementor-widget-cs_reservation"
                                                    data-id="5dc39db7" data-element_type="widget"
                                                    data-widget_type="cs_reservation.default">
                                                    <div class="elementor-widget-container">

                                                        <div
                                                            class="cs-reservation-form style-banner-3 style-banner cs-form-square inline-label">
                                                            <form class="cs-form-wrap"
                                                                action="{{ route('rooms.index') }}" method="GET">
                                                                <div class="cs-form-field cs-check-in">
                                                                    <div class="field-wrap">
                                                                        <label class="cs-form-label">Check
                                                                            In</label>

                                                                        <div class="field-input-wrap checkin-date">
                                                                            <input type="text"
                                                                                class="date-range-picker"
                                                                                value="2024-03-20 - 2024-03-21">
                                                                            <input type="text" value="2024-03-20"
                                                                                class="check-in-date" name="checkin"
                                                                                readonly>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="cs-form-field cs-check-out">
                                                                    <div class="field-wrap">
                                                                        <label class="cs-form-label">Check
                                                                            Out</label>

                                                                        <div class="field-input-wrap checkout-date">
                                                                            <input type="text" value="2024-03-21"
                                                                                class="check-out-date" name="checkout"
                                                                                readonly>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="cs-form-field cs-guests cs-has-dropdown">
                                                                    <div class="field-wrap">
                                                                        <label class="cs-form-label">Guests</label>

                                                                        <div class="field-input-wrap has-dropdown">
                                                                            <input type="text" name="guests"
                                                                                value="1 Adult, 0 Child" readonly="">
                                                                        </div>

                                                                        <div class="csf-dropdown">
                                                                            <div class="csf-dropdown-item">
                                                                                <label
                                                                                    class="cs-form-label">Adults</label>

                                                                                <div class="quantity cs-quantity"
                                                                                    data-label="adult">
                                                                                    <label
                                                                                        class="screen-reader-text">Adults
                                                                                        quantity</label>
                                                                                    <button class="minus"></button>
                                                                                    <input type="text"
                                                                                        name="adult-quantity"
                                                                                        value="1"
                                                                                        class="input-text"
                                                                                        autocomplete="off"
                                                                                        readonly="" data-min="1"
                                                                                        data-max="50">
                                                                                    <button class="plus"></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="csf-dropdown-item">
                                                                                <label
                                                                                    class="cs-form-label">Children</label>

                                                                                <div class="quantity cs-quantity"
                                                                                    data-label="child">
                                                                                    <label
                                                                                        class="screen-reader-text">Children
                                                                                        quantity</label>
                                                                                    <button class="minus"></button>
                                                                                    <input type="text"
                                                                                        name="child-quantity"
                                                                                        value="0"
                                                                                        class="input-text"
                                                                                        autocomplete="off"
                                                                                        readonly="" data-min="0"
                                                                                        data-max="50">
                                                                                    <button class="plus"></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="cs-form-field cs-submit">
                                                                    <div class="field-wrap">
                                                                        <button class="button" role="button"
                                                                            type="submit">
                                                                            <span class="btn-text">Check
                                                                                Availability</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="search_rooms"
                                                                    value="" />
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-216ad879 cs-section-content-fullwidth elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="216ad879" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e0d411b"
                                            data-id="e0d411b" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-70c45ae1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="70c45ae1" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-32b47b33"
                                                            data-id="32b47b33" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-1ee2a4 cs-animation-small-offset elementor-invisible elementor-widget elementor-widget-image"
                                                                    data-id="1ee2a4" data-element_type="widget"
                                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:150}"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="600" height="799"
                                                                            src="talwind1/uploads/sites/6/2023/03/img-33-600x799.jpg"
                                                                            class="attachment-cozystay_600x9999 size-cozystay_600x9999 wp-image-153"
                                                                            alt=""
                                                                            srcset="https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-33-600x799.jpg 600w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-33-225x300.jpg 225w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-33-769x1024.jpg 769w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-33-768x1023.jpg 768w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-33-780x1039.jpg 780w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-33-550x733.jpg 550w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-33-370x493.jpg 370w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-33-255x340.jpg 255w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-33.jpg 1026w"
                                                                            sizes="(max-width: 600px) 100vw, 600px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1e4a1518"
                                                            data-id="1e4a1518" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-90c1058 cs-animation-medium-offset elementor-invisible elementor-widget elementor-widget-image"
                                                                    data-id="90c1058" data-element_type="widget"
                                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="370" height="555"
                                                                            src="talwind1/uploads/sites/6/2023/04/img-34-2-370x555.jpg"
                                                                            class="attachment-cozystay_370x9999 size-cozystay_370x9999 wp-image-320"
                                                                            alt=""
                                                                            srcset="https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-34-2-370x555.jpg 370w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-34-2-200x300.jpg 200w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-34-2-600x900.jpg 600w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-34-2-550x825.jpg 550w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-34-2-255x382.jpg 255w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-34-2.jpg 651w"
                                                                            sizes="(max-width: 370px) 100vw, 370px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2caae607"
                                            data-id="2caae607" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-2cc7cb23 elementor-widget elementor-widget-cs_title"
                                                    data-id="2cc7cb23" data-element_type="widget"
                                                    data-widget_type="cs_title.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="cs-title-wrap">
                                                            <div class="cs-subtitle-wrap"><span
                                                                    class="cs-subtitle">Stay in the heart of New
                                                                    York</span></div>
                                                            <h3 class="cs-title">
                                                                Luxury furnished serviced apartments in Times Square
                                                            </h3>
                                                            <div class="cs-title-text">
                                                                <p>Located in Times Square, CozyStay apartment hotel
                                                                    provide a peaceful, private retreat in the heart
                                                                    of one of the world’s most iconic cities.
                                                                    Experience a sophisticated blend of professional
                                                                    services and home comforts. We proudly offers a
                                                                    full range of complimentary amenities and
                                                                    services that provide you with everything you
                                                                    need for an inspiring stay.</p>
                                                            </div>
                                                            <div class="cs-title-btn">
                                                                <a class="button elementor-button-link cs-btn-outline"
                                                                    role="button" href="about-the-hotel/index.html">
                                                                    <span class="cs-btn-text">Start
                                                                        Exploring</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-219b736d elementor-section-full_width elementor-section-height-min-height cs_scroll_y_120 cs-parallax-on-scroll cs-animation-small-offset elementor-section-height-default elementor-section-items-middle elementor-invisible"
                                    data-id="219b736d" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:150}"
                                    data-cs-parallax-y="120" style="background-image: none;"
                                    data-cs-background-image="talwind1/uploads/sites/6/2023/03/img-35.jpg">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-296feb89 dark-color"
                                            data-id="296feb89" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6aec1712 elementor-widget elementor-widget-cs_video"
                                                    data-id="6aec1712" data-element_type="widget"
                                                    data-widget_type="cs_video.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="cs-video-btn elementor-video-block text-center"
                                                            data-elementor-open-lightbox="yes"
                                                            data-elementor-lightbox="{&quot;type&quot;:&quot;video&quot;,&quot;videoType&quot;:&quot;youtube&quot;,&quot;url&quot;:&quot;https:\/\/www.youtube.com\/embed\/XHOmBV4js_E?feature=oembed&amp;playsinline=1&amp;wmode=opaque&amp;muted=muted&quot;,&quot;modalOptions&quot;:{&quot;id&quot;:&quot;elementor-lightbox-6aec1712&quot;}}"
                                                            data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJ0eXBlIjoidmlkZW8iLCJ2aWRlb1R5cGUiOiJ5b3V0dWJlIiwidXJsIjoiaHR0cHM6XC9cL3d3dy55b3V0dWJlLmNvbVwvZW1iZWRcL1hIT21CVjRqc19FP2ZlYXR1cmU9b2VtYmVkJnBsYXlzaW5saW5lPTEmd21vZGU9b3BhcXVlJm11dGVkPW11dGVkIiwibW9kYWxPcHRpb25zIjp7ImlkIjoiZWxlbWVudG9yLWxpZ2h0Ym94LTZhZWMxNzEyIn19">
                                                            <div class="video-play-btn">
                                                                <div class="btn-svg">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="64" height="72"
                                                                        viewBox="0 0 64 72">
                                                                        <path stroke="#FFF" stroke-width="2"
                                                                            fill="none"
                                                                            d="m3.121 1.446 58.545 35.412L1.708 69.853 3.121 1.446Z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-3dce42c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="3dce42c3" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-534be071"
                                            data-id="534be071" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-22c5922c elementor-widget elementor-widget-cs_title"
                                                    data-id="22c5922c" data-element_type="widget"
                                                    data-widget_type="cs_title.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="cs-title-wrap text-center">
                                                            <div class="cs-subtitle-wrap"><span
                                                                    class="cs-subtitle">Extraordinary
                                                                    Accommodations</span></div>
                                                            <h4 class="cs-title">
                                                                Choose Your Apartment Type </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-39379cc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="39379cc" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2e9df520"
                                            data-id="2e9df520" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-2ab9e15d cs-animation-small-offset elementor-invisible elementor-widget elementor-widget-cs_fancy_card"
                                                    data-id="2ab9e15d" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:200}"
                                                    data-widget_type="cs_fancy_card.default">
                                                    <div class="elementor-widget-container">

                                                        <div
                                                            class="cs-fancy-card style-2 text-center cs-hover-img-zoom">
                                                            <div class="cs-fc-wrap"> <a class="cs-fc-link"
                                                                    href="rooms/index.html#room-penthouse"></a>
                                                                <div class="cs-fc-img">
                                                                    <img loading="lazy" decoding="async"
                                                                        width="550" height="826"
                                                                        src="talwind1/uploads/sites/6/2023/04/img-36-2-550x826.jpg"
                                                                        class="attachment-cozystay_550x9999 size-cozystay_550x9999 wp-image-1108"
                                                                        alt=""
                                                                        srcset="https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-36-2-550x826.jpg 550w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-36-2-200x300.jpg 200w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-36-2-682x1024.jpg 682w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-36-2-768x1154.jpg 768w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-36-2-780x1172.jpg 780w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-36-2-600x902.jpg 600w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-36-2-370x556.jpg 370w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-36-2-255x383.jpg 255w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-36-2.jpg 800w"
                                                                        sizes="(max-width: 550px) 100vw, 550px" />
                                                                </div>
                                                                <div class="cs-fc-content">
                                                                    <h6 class="cs-fc-title cs-title">
                                                                        Luxury Penthouses </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7416056c"
                                            data-id="7416056c" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6b5f8777 cs-animation-small-offset elementor-invisible elementor-widget elementor-widget-cs_fancy_card"
                                                    data-id="6b5f8777" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                                    data-widget_type="cs_fancy_card.default">
                                                    <div class="elementor-widget-container">

                                                        <div
                                                            class="cs-fancy-card style-2 text-center cs-hover-img-zoom">
                                                            <div class="cs-fc-wrap"> <a class="cs-fc-link"
                                                                    href="rooms/index.html#room-apartment"></a>
                                                                <div class="cs-fc-img">
                                                                    <img loading="lazy" decoding="async"
                                                                        width="550" height="826"
                                                                        src="talwind1/uploads/sites/6/2023/03/img-37-550x826.jpg"
                                                                        class="attachment-cozystay_550x9999 size-cozystay_550x9999 wp-image-157"
                                                                        alt=""
                                                                        srcset="https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-37-550x826.jpg 550w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-37-200x300.jpg 200w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-37-682x1024.jpg 682w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-37-768x1154.jpg 768w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-37-780x1172.jpg 780w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-37-600x902.jpg 600w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-37-370x556.jpg 370w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-37-255x383.jpg 255w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-37.jpg 800w"
                                                                        sizes="(max-width: 550px) 100vw, 550px" />
                                                                </div>
                                                                <div class="cs-fc-content">
                                                                    <h6 class="cs-fc-title cs-title">
                                                                        Art Apartments </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6b1f163d"
                                            data-id="6b1f163d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-2df69e98 cs-animation-small-offset elementor-invisible elementor-widget elementor-widget-cs_fancy_card"
                                                    data-id="2df69e98" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:200}"
                                                    data-widget_type="cs_fancy_card.default">
                                                    <div class="elementor-widget-container">

                                                        <div
                                                            class="cs-fancy-card style-2 text-center cs-hover-img-zoom">
                                                            <div class="cs-fc-wrap"> <a class="cs-fc-link"
                                                                    href="rooms/index.html#room-studio"></a>
                                                                <div class="cs-fc-img">
                                                                    <img loading="lazy" decoding="async"
                                                                        width="550" height="826"
                                                                        src="talwind1/uploads/sites/6/2023/03/img-38-550x826.jpg"
                                                                        class="attachment-cozystay_550x9999 size-cozystay_550x9999 wp-image-158"
                                                                        alt=""
                                                                        srcset="https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-38-550x826.jpg 550w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-38-200x300.jpg 200w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-38-682x1024.jpg 682w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-38-768x1154.jpg 768w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-38-780x1172.jpg 780w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-38-600x902.jpg 600w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-38-370x556.jpg 370w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-38-255x383.jpg 255w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-38.jpg 800w"
                                                                        sizes="(max-width: 550px) 100vw, 550px" />
                                                                </div>
                                                                <div class="cs-fc-content">
                                                                    <h6 class="cs-fc-title cs-title">
                                                                        Modern Studios </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-baa5966 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                    data-id="baa5966" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2ac7046d"
                                            data-id="2ac7046d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-7bb9f20e cs-animation-small-offset elementor-invisible elementor-widget elementor-widget-image"
                                                    data-id="7bb9f20e" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="1200"
                                                            height="1599"
                                                            src="talwind1/uploads/sites/6/2023/03/img-39-2.jpg"
                                                            class="attachment-full size-full wp-image-161"
                                                            alt=""
                                                            srcset="https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-39-2.jpg 1200w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-39-2-225x300.jpg 225w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-39-2-768x1023.jpg 768w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-39-2-1153x1536.jpg 1153w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-39-2-780x1039.jpg 780w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-39-2-600x800.jpg 600w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-39-2-550x733.jpg 550w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-39-2-370x493.jpg 370w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-39-2-255x340.jpg 255w"
                                                            sizes="(max-width: 1200px) 100vw, 1200px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-269c63bc dark-color"
                                            data-id="269c63bc" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-372678fb elementor-widget elementor-widget-cs_title"
                                                    data-id="372678fb" data-element_type="widget"
                                                    data-widget_type="cs_title.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="cs-title-wrap">
                                                            <div class="cs-subtitle-wrap"><span
                                                                    class="cs-subtitle">Bon Appétit During
                                                                    Vacations
                                                                    and Trips</span></div>
                                                            <h3 class="cs-title">
                                                                Experience exquisite cuisine from all over the world
                                                            </h3>
                                                            <div class="cs-title-text">
                                                                <p>The experienced chefs creates international
                                                                    specialties with unique flavors. Relax with
                                                                    gourmet cuisine and signature cocktails or
                                                                    homemade tonics, all enhanced by beautiful music
                                                                    and gorgeous views over the city. From seasonal
                                                                    menus to dining experiences to satisfy any
                                                                    craving, see what our chefs are preparing for
                                                                    you.</p>
                                                            </div>
                                                            <div class="cs-title-btn">
                                                                <a class="button elementor-button-link cs-btn-outline"
                                                                    role="button" href="dining/index.html">
                                                                    <span class="cs-btn-text">Start
                                                                        Exploring</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-79b07533 cs-animation-small-offset elementor-invisible elementor-widget elementor-widget-image"
                                                    data-id="79b07533" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="1200"
                                                            height="959"
                                                            src="talwind1/uploads/sites/6/2023/03/img-40-1200x959.jpg"
                                                            class="attachment-cozystay_1200x9999 size-cozystay_1200x9999 wp-image-162"
                                                            alt=""
                                                            srcset="https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-40-1200x959.jpg 1200w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-40-300x240.jpg 300w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-40-1024x818.jpg 1024w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-40-768x614.jpg 768w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-40-780x623.jpg 780w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-40-600x479.jpg 600w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-40-550x440.jpg 550w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-40-370x296.jpg 370w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-40-255x204.jpg 255w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-40.jpg 1344w"
                                                            sizes="(max-width: 1200px) 100vw, 1200px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-3b7c9a5b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="3b7c9a5b" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2fce8695"
                                            data-id="2fce8695" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-1b056fc elementor-widget__width-initial elementor-widget elementor-widget-cs_title"
                                                    data-id="1b056fc" data-element_type="widget"
                                                    data-widget_type="cs_title.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="cs-title-wrap">
                                                            <div class="cs-subtitle-wrap"><span
                                                                    class="cs-subtitle">Introducing Our Services &
                                                                    Facilities</span></div>
                                                            <h3 class="cs-title">
                                                                All you need to know to ensure your trip is perfect.
                                                            </h3>
                                                            <div class="cs-title-text">
                                                                <p>State-of-the-art amenities include a dramatic
                                                                    double-story loft lounge, spectacular rooftop
                                                                    lounge, Technogym fitness center, media corner,
                                                                    and a gracious 24/7 resident services team.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3c59f2a8 cs-animation-small-offset elementor-invisible elementor-widget elementor-widget-cs_fancy_card"
                                                    data-id="3c59f2a8" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:200,&quot;_animation_tablet&quot;:&quot;fadeInUp&quot;}"
                                                    data-widget_type="cs_fancy_card.default">
                                                    <div class="elementor-widget-container">

                                                        <div
                                                            class="cs-fancy-card style-1 layout-row text-left cs-hover-img-zoom">
                                                            <div class="cs-fc-wrap"> <a class="cs-fc-link"
                                                                    href="amenities-services/index.html#meeting"></a>
                                                                <div class="cs-fc-img">
                                                                    <img loading="lazy" decoding="async"
                                                                        width="780" height="521"
                                                                        src="talwind1/uploads/sites/6/2023/03/img-41-780x521.jpg"
                                                                        class="attachment-cozystay_780x9999 size-cozystay_780x9999 wp-image-163"
                                                                        alt=""
                                                                        srcset="https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-41-780x521.jpg 780w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-41-300x200.jpg 300w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-41-1024x683.jpg 1024w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-41-768x513.jpg 768w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-41-1200x801.jpg 1200w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-41-600x400.jpg 600w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-41-550x367.jpg 550w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-41-370x247.jpg 370w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-41-255x170.jpg 255w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-41.jpg 1344w"
                                                                        sizes="(max-width: 780px) 100vw, 780px" />
                                                                </div>
                                                                <div class="cs-fc-content">
                                                                    <div class="cs-subtitle-wrap"><span
                                                                            class="cs-subtitle color-primary">Works
                                                                            & Meetings</span></div>
                                                                    <h5 class="cs-fc-title cs-title">
                                                                        Stylish Meeting Spaces </h5>
                                                                    <div class="cs-fc-text">
                                                                        <p>The hotel offers three intimate meeting
                                                                            rooms, each accommodating up to ten
                                                                            guests for formal meetings. Equipped
                                                                            with wireless Internet access,
                                                                            speakerphone and tables with chairs.</p>
                                                                    </div>
                                                                    <div class="cs-fc-btn">
                                                                        <a class="button cs-btn-outline cs-btn-small"
                                                                            role="button"
                                                                            href="amenities-services/index.html#meeting">
                                                                            <span class="cs-btn-text">Discover
                                                                                More</span> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1506861e cs-animation-small-offset elementor-invisible elementor-widget elementor-widget-cs_fancy_card"
                                                    data-id="1506861e" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:200,&quot;_animation_tablet&quot;:&quot;fadeInUp&quot;}"
                                                    data-widget_type="cs_fancy_card.default">
                                                    <div class="elementor-widget-container">

                                                        <div
                                                            class="cs-fancy-card style-1 layout-row order-reverse text-left cs-hover-img-zoom">
                                                            <div class="cs-fc-wrap"> <a class="cs-fc-link"
                                                                    href="wellness/index.html"></a>
                                                                <div class="cs-fc-img">
                                                                    <img loading="lazy" decoding="async"
                                                                        width="780" height="520"
                                                                        src="talwind1/uploads/sites/6/2023/03/img-42-780x520.jpg"
                                                                        class="attachment-cozystay_780x9999 size-cozystay_780x9999 wp-image-164"
                                                                        alt=""
                                                                        srcset="https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-42-780x520.jpg 780w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-42-300x200.jpg 300w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-42-1024x683.jpg 1024w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-42-768x512.jpg 768w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-42-1200x800.jpg 1200w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-42-600x400.jpg 600w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-42-550x367.jpg 550w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-42-370x247.jpg 370w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-42-255x170.jpg 255w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-42.jpg 1344w"
                                                                        sizes="(max-width: 780px) 100vw, 780px" />
                                                                </div>
                                                                <div class="cs-fc-content">
                                                                    <div class="cs-subtitle-wrap"><span
                                                                            class="cs-subtitle color-primary">Wellness</span>
                                                                    </div>
                                                                    <h5 class="cs-fc-title cs-title">
                                                                        Spa, Massage, Sauna </h5>
                                                                    <div class="cs-fc-text">
                                                                        <p>In the hotel spa center we offer an
                                                                            exceptional well-being experience
                                                                            combining our expertise, high technology
                                                                            and breathtaking results.</p>
                                                                    </div>
                                                                    <div class="cs-fc-btn">
                                                                        <a class="button cs-btn-outline cs-btn-small"
                                                                            role="button" href="wellness/index.html">
                                                                            <span class="cs-btn-text">Discover
                                                                                More</span> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-744ffb12 cs-animation-small-offset elementor-invisible elementor-widget elementor-widget-cs_fancy_card"
                                                    data-id="744ffb12" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:200,&quot;_animation_tablet&quot;:&quot;fadeInUp&quot;}"
                                                    data-widget_type="cs_fancy_card.default">
                                                    <div class="elementor-widget-container">

                                                        <div
                                                            class="cs-fancy-card style-1 layout-row text-left cs-hover-img-zoom">
                                                            <div class="cs-fc-wrap"> <a class="cs-fc-link"
                                                                    href="wellness/index.html"></a>
                                                                <div class="cs-fc-img">
                                                                    <img loading="lazy" decoding="async"
                                                                        width="780" height="520"
                                                                        src="talwind1/uploads/sites/6/2023/03/img-43-780x520.jpg"
                                                                        class="attachment-cozystay_780x9999 size-cozystay_780x9999 wp-image-165"
                                                                        alt=""
                                                                        srcset="https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-43-780x520.jpg 780w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-43-300x200.jpg 300w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-43-1024x683.jpg 1024w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-43-768x512.jpg 768w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-43-1200x800.jpg 1200w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-43-600x400.jpg 600w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-43-550x367.jpg 550w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-43-370x247.jpg 370w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-43-255x170.jpg 255w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-43.jpg 1344w"
                                                                        sizes="(max-width: 780px) 100vw, 780px" />
                                                                </div>
                                                                <div class="cs-fc-content">
                                                                    <div class="cs-subtitle-wrap"><span
                                                                            class="cs-subtitle color-primary">Training
                                                                            Spaces</span></div>
                                                                    <h5 class="cs-fc-title cs-title">
                                                                        Workout &amp; Yoga Rooms </h5>
                                                                    <div class="cs-fc-text">
                                                                        <p>Our fitness centre includes a fully
                                                                            equipped gym, yoga room and dance
                                                                            studio. Maintain your fitness routine
                                                                            during the trip over the stunning views
                                                                            of the city.</p>
                                                                    </div>
                                                                    <div class="cs-fc-btn">
                                                                        <a class="button cs-btn-outline cs-btn-small"
                                                                            role="button" href="wellness/index.html">
                                                                            <span class="cs-btn-text">Discover
                                                                                More</span> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-053759f cs-section-content-fullwidth cs-parallax-on-scroll cs_scroll_y_80 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="053759f" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
                                    data-cs-parallax-y="80" style="background-image: none;"
                                    data-cs-background-image="talwind1/uploads/sites/6/2023/04/le-quan-H2NpsZJe2IA-unsplash.jpg">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3b70ffb"
                                            data-id="3b70ffb" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-439e26f elementor-widget__width-initial cs-animation-small-offset elementor-invisible elementor-widget elementor-widget-cs_title"
                                                    data-id="439e26f" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}"
                                                    data-widget_type="cs_title.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="cs-title-wrap">
                                                            <div class="cs-subtitle-wrap"><span
                                                                    class="cs-subtitle">High standards of
                                                                    hospitality</span></div>
                                                            <h3 class="cs-title">
                                                                We strive to provide our guests with luxury, comfort
                                                                &amp; tailor-made service. </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-c5bba75 elementor-section-full_width cs-animation-small-offset elementor-section-height-default elementor-section-height-default elementor-invisible"
                                    data-id="c5bba75" data-element_type="section"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:300,&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-d4c2387"
                                            data-id="d4c2387" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7cc864d"
                                            data-id="7cc864d" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-9107fab elementor-widget elementor-widget-spacer"
                                                    data-id="9107fab" data-element_type="widget"
                                                    data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c7401ed"
                                            data-id="c7401ed" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-fb84194 elementor--star-style-star_unicode elementor-widget elementor-widget-star-rating"
                                                    data-id="fb84194" data-element_type="widget"
                                                    data-widget_type="star-rating.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="elementor-star-rating__wrapper">
                                                            <div class="elementor-star-rating" title="5/5"
                                                                itemtype="http://schema.org/Rating" itemscope=""
                                                                itemprop="reviewRating"><i
                                                                    class="elementor-star-full">&#9733;</i><i
                                                                    class="elementor-star-full">&#9733;</i><i
                                                                    class="elementor-star-full">&#9733;</i><i
                                                                    class="elementor-star-full">&#9733;</i><i
                                                                    class="elementor-star-full">&#9733;</i> <span
                                                                    itemprop="ratingValue"
                                                                    class="elementor-screen-only">5/5</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-2150bd3 elementor-widget elementor-widget-cs_testimonials"
                                                    data-id="2150bd3" data-element_type="widget"
                                                    data-widget_type="cs_testimonials.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="cs-testimonials testimonial-style-1 testimonials-slider slider-dots-left"
                                                            data-column="1" data-autoplay="on"
                                                            data-autoplay-speed="5000" data-show-arrows=""
                                                            data-show-dots="on">
                                                            <div class="cs-ts-wrap">
                                                                <div class="cs-ts-item">
                                                                    <div class="cs-testimonial">
                                                                        <div class="cs-testimonial-content">“The
                                                                            hotel is well located. Rooms are very
                                                                            clean. Great services. Very kind people
                                                                            from front desk and delicious breakfast.
                                                                            And I really love the spa!”</div>
                                                                        <div class="cs-testimonial-meta">
                                                                            <div
                                                                                class="elementor-testimonial-meta-inner">
                                                                                <div
                                                                                    class="elementor-testimonial-details">
                                                                                    <div
                                                                                        class="elementor-testimonial-name">
                                                                                        Sophie Laurier</div>
                                                                                    <div
                                                                                        class="elementor-testimonial-job">
                                                                                        TripAdvisor</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="cs-ts-item">
                                                                    <div class="cs-testimonial">
                                                                        <div class="cs-testimonial-content">
                                                                            “Brilliant staff and exceptional
                                                                            customer service. The place is
                                                                            fantastic. Great facilities and
                                                                            atmosphere. Buffet breakfast daily is
                                                                            very generous.”</div>
                                                                        <div class="cs-testimonial-meta">
                                                                            <div
                                                                                class="elementor-testimonial-meta-inner">
                                                                                <div
                                                                                    class="elementor-testimonial-details">
                                                                                    <div
                                                                                        class="elementor-testimonial-name">
                                                                                        Luna Wayne</div>
                                                                                    <div
                                                                                        class="elementor-testimonial-job">
                                                                                        TripAdvisor</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="cs-ts-item">
                                                                    <div class="cs-testimonial">
                                                                        <div class="cs-testimonial-content">“The
                                                                            restaurants available were all very
                                                                            good. Friendly staff, helpful
                                                                            disposition made our overall experience
                                                                            wonderful. We will be going again next
                                                                            year.”</div>
                                                                        <div class="cs-testimonial-meta">
                                                                            <div
                                                                                class="elementor-testimonial-meta-inner">
                                                                                <div
                                                                                    class="elementor-testimonial-details">
                                                                                    <div
                                                                                        class="elementor-testimonial-name">
                                                                                        Joseph Hart</div>
                                                                                    <div
                                                                                        class="elementor-testimonial-job">
                                                                                        TripAdvisor</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="cs-ts-item">
                                                                    <div class="cs-testimonial">
                                                                        <div class="cs-testimonial-content">“The
                                                                            rooms are all renovated and modern. And
                                                                            the staff are very willing to help you
                                                                            plan your day. Thanks for all the staff
                                                                            and this pleased trip!”</div>
                                                                        <div class="cs-testimonial-meta">
                                                                            <div
                                                                                class="elementor-testimonial-meta-inner">
                                                                                <div
                                                                                    class="elementor-testimonial-details">
                                                                                    <div
                                                                                        class="elementor-testimonial-name">
                                                                                        Erin Pierce</div>
                                                                                    <div
                                                                                        class="elementor-testimonial-job">
                                                                                        TripAdvisor</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-22114cd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="22114cd" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1656e35f"
                                            data-id="1656e35f" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-e57c1e1 elementor-widget elementor-widget-cs_title"
                                                    data-id="e57c1e1" data-element_type="widget"
                                                    data-widget_type="cs_title.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="cs-title-wrap text-center">
                                                            <div class="cs-subtitle-wrap"><span
                                                                    class="cs-subtitle">Local Tours &
                                                                    Activities</span></div>
                                                            <h3 class="cs-title">
                                                                Discover The City </h3>
                                                            <div class="cs-title-text">
                                                                <p>You are in a city where people are never bored.
                                                                    Immerse yourself in local art exhibitions,
                                                                    neighbourhood events, seasonal activities and
                                                                    numerous parks.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-6e017b97 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="6e017b97" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-15ca9258"
                                            data-id="15ca9258" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-651f3b6d cs-animation-small-offset elementor-invisible elementor-widget elementor-widget-cs_call_to_action"
                                                    data-id="651f3b6d" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:200}"
                                                    data-widget_type="cs_call_to_action.default">
                                                    <div class="elementor-widget-container">

                                                        <div
                                                            class="cs-cta cta-layout-text-normal text-left cta-hover-img-zoom">
                                                            <div class="cs-cta-wrap">
                                                                <div class="cs-cta-img-wrap">
                                                                    <div class="cs-cta-img">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="550" height="413"
                                                                            src="talwind1/uploads/sites/6/2023/04/img-45-2-550x413.jpg"
                                                                            class="attachment-cozystay_550x9999 size-cozystay_550x9999 wp-image-316"
                                                                            alt=""
                                                                            srcset="https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-45-2-550x413.jpg 550w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-45-2-300x225.jpg 300w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-45-2-768x576.jpg 768w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-45-2-780x585.jpg 780w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-45-2-600x450.jpg 600w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-45-2-370x278.jpg 370w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-45-2-255x191.jpg 255w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-45-2.jpg 800w"
                                                                            sizes="(max-width: 550px) 100vw, 550px" />
                                                                    </div>
                                                                    <div class="cs-offset-border"></div>
                                                                </div>
                                                                <div class="cs-cta-overlay"></div>
                                                                <div class="cs-cta-label label-top-left">
                                                                    <div class="cs-cta-label-text">Recommended
                                                                    </div>
                                                                </div>
                                                                <div class="cs-cta-content">
                                                                    <div class="cs-subtitle-wrap"><span
                                                                            class="cs-subtitle color-primary">Arts
                                                                            &
                                                                            Culture</span></div>
                                                                    <h6 class="cs-cta-title cs-title">
                                                                        Exhibitions &amp; Museum </h6>
                                                                    <div class="cs-cta-text">
                                                                        <p>Don&#8217;t miss the excellent art
                                                                            exhibitions coming up. You will always
                                                                            find something you like: traditional
                                                                            paintings, transformative sculptures,
                                                                            interactive art exhibits, and etc.</p>
                                                                    </div>
                                                                    <div class="cs-cta-btn">
                                                                        <a class="button cs-btn-underline cs-btn-small cs-btn-with-icon"
                                                                            role="button"
                                                                            href="activity-detail/index.html">
                                                                            <span class="cs-btn-text">Discover
                                                                                More</span> <span
                                                                                class="cs-btn-icon icon-arrow"></span>
                                                                        </a>
                                                                    </div>
                                                                </div> <a class="cs-cta-link"
                                                                    href="activity-detail/index.html"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4e7b1b05 cs-animation-small-offset elementor-invisible"
                                            data-id="4e7b1b05" data-element_type="column"
                                            data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:200}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-cab4cc0 elementor-widget elementor-widget-cs_call_to_action"
                                                    data-id="cab4cc0" data-element_type="widget"
                                                    data-widget_type="cs_call_to_action.default">
                                                    <div class="elementor-widget-container">

                                                        <div
                                                            class="cs-cta cta-layout-text-normal text-left cta-hover-img-zoom">
                                                            <div class="cs-cta-wrap">
                                                                <div class="cs-cta-img-wrap">
                                                                    <div class="cs-cta-img">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="550" height="412"
                                                                            src="talwind1/uploads/sites/6/2023/03/img-46-550x412.jpg"
                                                                            class="attachment-cozystay_550x9999 size-cozystay_550x9999 wp-image-170"
                                                                            alt=""
                                                                            srcset="https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-46-550x412.jpg 550w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-46-300x225.jpg 300w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-46-768x575.jpg 768w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-46-780x584.jpg 780w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-46-600x449.jpg 600w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-46-370x277.jpg 370w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-46-255x191.jpg 255w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/03/img-46.jpg 800w"
                                                                            sizes="(max-width: 550px) 100vw, 550px" />
                                                                    </div>
                                                                    <div class="cs-offset-border"></div>
                                                                </div>
                                                                <div class="cs-cta-overlay"></div>
                                                                <div class="cs-cta-content">
                                                                    <div class="cs-subtitle-wrap"><span
                                                                            class="cs-subtitle color-primary">Nature</span>
                                                                    </div>
                                                                    <h6 class="cs-cta-title cs-title">
                                                                        Nearby Parks </h6>
                                                                    <div class="cs-cta-text">
                                                                        <p>Numerous beautiful parks allow you to
                                                                            roam freely in nature even in the city.
                                                                            Each park has its own characteristics,
                                                                            come and check out what surprises it can
                                                                            bring you.</p>
                                                                    </div>
                                                                    <div class="cs-cta-btn">
                                                                        <a class="button cs-btn-underline cs-btn-small cs-btn-with-icon"
                                                                            role="button"
                                                                            href="activity-detail/index.html">
                                                                            <span class="cs-btn-text">Discover
                                                                                More</span> <span
                                                                                class="cs-btn-icon icon-arrow"></span>
                                                                        </a>
                                                                    </div>
                                                                </div> <a class="cs-cta-link"
                                                                    href="activity-detail/index.html"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6819ec8d"
                                            data-id="6819ec8d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-58053522 cs-animation-small-offset elementor-invisible elementor-widget elementor-widget-cs_call_to_action"
                                                    data-id="58053522" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:200}"
                                                    data-widget_type="cs_call_to_action.default">
                                                    <div class="elementor-widget-container">

                                                        <div
                                                            class="cs-cta cta-layout-text-normal text-left cta-hover-img-zoom">
                                                            <div class="cs-cta-wrap">
                                                                <div class="cs-cta-img-wrap">
                                                                    <div class="cs-cta-img">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="550" height="411"
                                                                            src="talwind1/uploads/sites/6/2023/04/img-47-2-550x411.jpg"
                                                                            class="attachment-cozystay_550x9999 size-cozystay_550x9999 wp-image-317"
                                                                            alt=""
                                                                            srcset="https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-47-2-550x411.jpg 550w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-47-2-300x224.jpg 300w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-47-2-768x574.jpg 768w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-47-2-780x583.jpg 780w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-47-2-600x449.jpg 600w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-47-2-370x277.jpg 370w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-47-2-255x191.jpg 255w, https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/04/img-47-2.jpg 800w"
                                                                            sizes="(max-width: 550px) 100vw, 550px" />
                                                                    </div>
                                                                    <div class="cs-offset-border"></div>
                                                                </div>
                                                                <div class="cs-cta-overlay"></div>
                                                                <div class="cs-cta-content">
                                                                    <div class="cs-subtitle-wrap"><span
                                                                            class="cs-subtitle color-primary">Dining
                                                                            Experiences</span></div>
                                                                    <h6 class="cs-cta-title cs-title">
                                                                        Local Food Tour </h6>
                                                                    <div class="cs-cta-text">
                                                                        <p>How can we not mention all kinds of
                                                                            seasonal delicacies and major food
                                                                            festivals? Highlights: Tarot readings
                                                                            and cocktails nights at CozyStay&#8217;s
                                                                            bar every Thursday this month.</p>
                                                                    </div>
                                                                    <div class="cs-cta-btn">
                                                                        <a class="button cs-btn-underline cs-btn-small cs-btn-with-icon"
                                                                            role="button"
                                                                            href="activity-detail/index.html">
                                                                            <span class="cs-btn-text">Discover
                                                                                More</span> <span
                                                                                class="cs-btn-icon icon-arrow"></span>
                                                                        </a>
                                                                    </div>
                                                                </div> <a class="cs-cta-link"
                                                                    href="activity-detail/index.html"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div><!-- .post-entry -->
                    </article>
                </div>
            </div>
        </div>

    </div>
</x-master>
