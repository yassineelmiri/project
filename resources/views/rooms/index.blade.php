<x-master>
    <div id="content" class="site-content">

        <div class="main">
            <div class="container">
                <div id="primary" class="primary content-area">
                    <article class="post-1032 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div data-elementor-type="wp-page" data-elementor-id="1032" class="elementor elementor-1032">
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-8ecbd63 elementor-section-height-min-height cs-section-content-fullwidth cs-parallax-on-scroll cs_scroll_y_100 elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                                    data-id="8ecbd63" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
                                    data-cs-parallax-y="100" style="background-image: none;"
                                    data-cs-background-image="../talwind1/uploads/sites/6/2023/03/img-35.jpg">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-47b0f3b dark-color"
                                            data-id="47b0f3b" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-31c3948 elementor-widget elementor-widget-cs_title"
                                                    data-id="31c3948" data-element_type="widget"
                                                    data-widget_type="cs_title.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="cs-title-wrap text-center">
                                                            <h1 class="cs-title">
                                                                @if (session()->has('success'))
                                                                    <h3 type="success">
                                                                        {{ session('success') }}
                                                                    </h3>
                                                                @endif
                                                            </h1>
                                                            <h1 class="cs-title">
                                                                Book Your Stay </h1>
                                                            <div class="cs-title-text">
                                                                <p>A stay infused with creativity and culture.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-8f7ff3c elementor-widget__width-initial elementor-widget elementor-widget-cs_reservation"
                                                    data-id="8f7ff3c" data-element_type="widget"
                                                    data-widget_type="cs_reservation.default">
                                                    <div class="elementor-widget-container">

                                                        <div
                                                            class="cs-reservation-form style-banner-3 style-banner cs-form-square inline-label">
                                                            <form class="cs-form-wrap" action="{{ route('filtre') }}"
                                                                method="POST">
                                                                @csrf
                                                                <div class="cs-form-field cs-check-in">
                                                                    <div class="field-wrap">
                                                                        <label class="cs-form-label">type</label>
                                                                        <div class="field-input-wrap checkin-date">

                                                                            <select type="text" name="type">
                                                                                <option value="">...</option>
                                                                                @foreach ($categoriers as $categorier)
                                                                                    <option
                                                                                        value="{{ $categorier->name }}">
                                                                                        {{ $categorier->name }}
                                                                                    </option>
                                                                                @endforeach

                                                                            </select>



                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="cs-form-field cs-guests cs-has-dropdown">
                                                                    <div class="field-wrap">
                                                                        <label class="cs-form-label">Guests</label>

                                                                        <div class="field-input-wrap has-dropdown">
                                                                            <input type="text" name="places"
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
                                                                                    <input type="text" name="adult"
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
                                                                                    <input type="text" name="child"
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
                                                                <div class="cs-form-field">
                                                                    <div class="field-wrap">
                                                                        <button class="button" type="submit">
                                                                            <span class="btn-text">Check
                                                                                Availability</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-ed2fcc0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="ed2fcc0" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-28bcbe9"
                                            data-id="28bcbe9" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-31ef03a elementor-widget elementor-widget-cs_title"
                                                    data-id="31ef03a" data-element_type="widget"
                                                    data-widget_type="cs_title.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="cs-title-wrap text-center">
                                                            <div class="cs-subtitle-wrap"><span
                                                                    class="cs-subtitle">Welcome to CozyStay
                                                                    Aparthotel</span></div>
                                                            <h5 class="cs-title">
                                                                Explore our refined accommodation options and find
                                                                the perfect space for your stay. </h5>
                                                            <div class="cs-title-text">
                                                                <p>All rooms have a bathroom with bathtub and/or
                                                                    shower, cable television/radio, free WIFI and
                                                                    mini bar. In addition, all rooms are equipped
                                                                    with a Nespresso coffee machine. Most rooms are
                                                                    carpeted, some have parquet flooring.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-a55d790 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="a55d790" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3e9a7b0"
                                            data-id="3e9a7b0" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-e13825d cs-animation-small-offset elementor-invisible elementor-widget elementor-widget-cs_tabs"
                                                    data-id="e13825d" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}"
                                                    data-widget_type="cs_tabs.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="cs-tabs">
                                                            <div class="elementor-tabs-wrapper" role="tablist">
                                                                <div
                                                                    class="elementor-tab-title elementor-tab-desktop-title elementor-active">
                                                                    <a href="#elementor-tab-e13825d-0"
                                                                        class="tab-title-link"
                                                                        data-id="room-penthouse">Luxury
                                                                        Penthouses</a>
                                                                </div>
                                                                <div
                                                                    class="elementor-tab-title elementor-tab-desktop-title">
                                                                    <a href="#elementor-tab-e13825d-1"
                                                                        class="tab-title-link"
                                                                        data-id="room-apartment">Art Apartments</a>
                                                                </div>
                                                                <div
                                                                    class="elementor-tab-title elementor-tab-desktop-title">
                                                                    <a href="#elementor-tab-e13825d-2"
                                                                        class="tab-title-link"
                                                                        data-id="room-studio">Modern Studios</a>
                                                                </div>
                                                            </div>

                                                            <div class="elementor-tabs-content-wrapper" role="tablist"
                                                                aria-orientation="horizontal">
                                                                <div id="elementor-tab-e13825d-0"
                                                                    class="elementor-tab-content elementor-clearfix elementor-active">
                                                                    <link rel="stylesheet"
                                                                        id="elementor-post-1296-css"
                                                                        href="../talwind1/uploads/sites/6/elementor/css/post-1296a4e6.css?ver=1707317709"
                                                                        type="text/css" media="all">
                                                                    <div data-elementor-type="wp-post"
                                                                        data-elementor-id="1296"
                                                                        class="elementor elementor-1296">
                                                                        <section
                                                                            class="elementor-section elementor-top-section elementor-element elementor-element-afebad1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                            data-id="afebad1"
                                                                            data-element_type="section">
                                                                            <div
                                                                                class="elementor-container elementor-column-gap-no">
                                                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9a90dfb"
                                                                                    data-id="9a90dfb"
                                                                                    data-element_type="column">
                                                                                    <div
                                                                                        class="elementor-widget-wrap elementor-element-populated">
                                                                                        <div class="elementor-element elementor-element-1703b00 elementor-widget elementor-widget-cs_rooms"
                                                                                            data-id="1703b00"
                                                                                            data-element_type="widget"
                                                                                            data-widget_type="cs_rooms.default">
                                                                                            <div
                                                                                                class="elementor-widget-container">
                                                                                                <div class="posts cs-rooms text-center cs-rooms-carousel layout-grid column-3 img-ratio-3-2"
                                                                                                    data-autoplay="off"
                                                                                                    data-autoplay-speed=""
                                                                                                    data-show-arrows=""
                                                                                                    data-show-dots="on"
                                                                                                    data-column="3">
                                                                                                    <div
                                                                                                        class="posts-wrapper cs-rooms-wrapper">

                                                                                                        @if (!$rooms)
                                                                                                            <h5
                                                                                                                class="cs-title">
                                                                                                                Aucune
                                                                                                                chambre
                                                                                                                pour
                                                                                                                l'instant.
                                                                                                            </h5>
                                                                                                        @else
                                                                                                            @foreach ($rooms as $room)
                                                                                                                <div
                                                                                                                    class="post cs-room-item has-post-thumbnail">
                                                                                                                    <div
                                                                                                                        class="featured-img">
                                                                                                                        <a
                                                                                                                            href="{{ route('rooms.show', $room->id) }}">
                                                                                                                            <img loading="lazy"
                                                                                                                                decoding="async"
                                                                                                                                width="780"
                                                                                                                                height="520"
                                                                                                                                src="{{ asset('storage/' . $room->image) }}"
                                                                                                                                class="attachment-cozystay_780x9999 size-cozystay_780x9999"
                                                                                                                                alt=""
                                                                                                                                sizes="(max-width: 780px) 100vw, 780px" />
                                                                                                                        </a>
                                                                                                                        <div
                                                                                                                            class="overlay-label">
                                                                                                                            <div
                                                                                                                                class="overlay-label-text">
                                                                                                                                ${{ $room->prix }}
                                                                                                                                /
                                                                                                                                Night
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="post-content cs-room-content">
                                                                                                                        <header
                                                                                                                            class="post-header item-header">
                                                                                                                            <h2
                                                                                                                                class="post-title item-title">
                                                                                                                                <a
                                                                                                                                    href="{{ route('rooms.show', $room->id) }}">{{ $room->name }}</a>
                                                                                                                            </h2>
                                                                                                                            <div
                                                                                                                                class="item-subtitle">
                                                                                                                                {{ $room->etage }}
                                                                                                                                étage
                                                                                                                                /
                                                                                                                                {{ $room->surface }}
                                                                                                                                m²
                                                                                                                                /
                                                                                                                                type
                                                                                                                                :
                                                                                                                                {{ $room->type }}
                                                                                                                                /
                                                                                                                                {{ $room->place }}
                                                                                                                                Guests
                                                                                                                            </div>
                                                                                                                        </header>
                                                                                                                        <div
                                                                                                                            class="post-excerpt item-excerpt">
                                                                                                                            <p>{{ $room->description }}
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                        <footer
                                                                                                                            class="post-footer item-footer">
                                                                                                                            <div
                                                                                                                                class="more-btn">
                                                                                                                                <a class="read-more-btn button cs-btn-underline"
                                                                                                                                    href="{{ route('rooms.show', $room->id) }}">
                                                                                                                                    <span>Discover
                                                                                                                                        More</span>
                                                                                                                                </a>
                                                                                                                            </div>
                                                                                                                        </footer>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            @endforeach
                                                                                                        @endif

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
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
                                    class="elementor-section elementor-top-section elementor-element elementor-element-7efc604 cs-section-content-fullwidth elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="7efc604" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dddda48"
                                            data-id="dddda48" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-7a81c1e elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="7a81c1e" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c6335e9"
                                                            data-id="c6335e9" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-d5dcb66 elementor-widget elementor-widget-cs_title"
                                                                    data-id="d5dcb66" data-element_type="widget"
                                                                    data-widget_type="cs_title.default">
                                                                    <div class="elementor-widget-container">

                                                                        <div class="cs-title-wrap">
                                                                            <div class="cs-subtitle-wrap"><span
                                                                                    class="cs-subtitle">The
                                                                                    Essential In-Room
                                                                                    Amenities</span></div>
                                                                            <h5 class="cs-title">
                                                                                Our spaces have all the essentials
                                                                                you need for your stay. </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b34def8"
                                                            data-id="b34def8" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-4d582da elementor-widget elementor-widget-cs_title"
                                                                    data-id="4d582da" data-element_type="widget"
                                                                    data-widget_type="cs_title.default">
                                                                    <div class="elementor-widget-container">

                                                                        <div class="cs-title-wrap">
                                                                            <div class="cs-title-text">
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetuer adipiscing elit.
                                                                                    Aenean commodo ligula eget
                                                                                    dolor. Aenean massa. Cum sociis
                                                                                    natoque penatibus et magnis dis
                                                                                    parturient montes, nascetur
                                                                                    ridiculus mus. Donec quam felis,
                                                                                    ultricies nec.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="elementor-element elementor-element-4ebbd2b cs-animation-small-offset elementor-invisible elementor-widget elementor-widget-cs_info_box"
                                                    data-id="4ebbd2b" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                                    data-widget_type="cs_info_box.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="cs-info-box column-4 valign-top img-top text-left">
                                                            <div class="cs-info-box-wrap">
                                                                <div
                                                                    class="cs-info-box-item elementor-repeater-item-cccff81">
                                                                    <div class="cs-item-container">
                                                                        <div class="cs-info-box-img"><i
                                                                                aria-hidden="true"
                                                                                class="flaticon flaticon-car"></i>
                                                                        </div>
                                                                        <div class="cs-info-box-content">
                                                                            <h5 class="cs-title cs-info-box-title">
                                                                                Airport Pick-up Service </h5>
                                                                            <div class="cs-info-box-text">
                                                                                <p>Lorem ipsum proin gravida velit
                                                                                    auctor sde re sit amet space.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="cs-info-box-item elementor-repeater-item-6c33aa7">
                                                                    <div class="cs-item-container">
                                                                        <div class="cs-info-box-img"><i
                                                                                aria-hidden="true"
                                                                                class="flaticon flaticon-customer-service"></i>
                                                                        </div>
                                                                        <div class="cs-info-box-content">
                                                                            <h5 class="cs-title cs-info-box-title">
                                                                                Housekeeper Services </h5>
                                                                            <div class="cs-info-box-text">
                                                                                <p>Lorem ipsum proin gravida velit
                                                                                    auctor sde re sit amet space.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="cs-info-box-item elementor-repeater-item-0a01fb1">
                                                                    <div class="cs-item-container">
                                                                        <div class="cs-info-box-img"><i
                                                                                aria-hidden="true"
                                                                                class="flaticon flaticon-wifi-2"></i>
                                                                        </div>
                                                                        <div class="cs-info-box-content">
                                                                            <h5 class="cs-title cs-info-box-title">
                                                                                Wifi & Internet </h5>
                                                                            <div class="cs-info-box-text">
                                                                                <p>Lorem ipsum proin gravida velit
                                                                                    auctor sde re sit amet space.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="cs-info-box-item elementor-repeater-item-bb40a8b">
                                                                    <div class="cs-item-container">
                                                                        <div class="cs-info-box-img"><i
                                                                                aria-hidden="true"
                                                                                class="flaticon flaticon-laundry-service"></i>
                                                                        </div>
                                                                        <div class="cs-info-box-content">
                                                                            <h5 class="cs-title cs-info-box-title">
                                                                                Laundry Services </h5>
                                                                            <div class="cs-info-box-text">
                                                                                <p>Lorem ipsum proin gravida velit
                                                                                    auctor sde re sit amet space.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="cs-info-box-item elementor-repeater-item-55da29c">
                                                                    <div class="cs-item-container">
                                                                        <div class="cs-info-box-img"><i
                                                                                aria-hidden="true"
                                                                                class="flaticon flaticon-breakfast-2"></i>
                                                                        </div>
                                                                        <div class="cs-info-box-content">
                                                                            <h5 class="cs-title cs-info-box-title">
                                                                                Breakfast in Bed </h5>
                                                                            <div class="cs-info-box-text">
                                                                                <p>Lorem ipsum proin gravida velit
                                                                                    auctor sde re sit amet space.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="cs-info-box-item elementor-repeater-item-f41bbb4">
                                                                    <div class="cs-item-container">
                                                                        <div class="cs-info-box-img"><i
                                                                                aria-hidden="true"
                                                                                class="flaticon flaticon-parking"></i>
                                                                        </div>
                                                                        <div class="cs-info-box-content">
                                                                            <h5 class="cs-title cs-info-box-title">
                                                                                Private Parking Space </h5>
                                                                            <div class="cs-info-box-text">
                                                                                <p>Lorem ipsum proin gravida velit
                                                                                    auctor sde re sit amet space.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="cs-info-box-item elementor-repeater-item-0bf7877">
                                                                    <div class="cs-item-container">
                                                                        <div class="cs-info-box-img"><i
                                                                                aria-hidden="true"
                                                                                class="flaticon flaticon-treadmill"></i>
                                                                        </div>
                                                                        <div class="cs-info-box-content">
                                                                            <h5 class="cs-title cs-info-box-title">
                                                                                Fitness Center </h5>
                                                                            <div class="cs-info-box-text">
                                                                                <p>Lorem ipsum proin gravida velit
                                                                                    auctor sde re sit amet space.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="cs-info-box-item elementor-repeater-item-3379dfb">
                                                                    <div class="cs-item-container">
                                                                        <div class="cs-info-box-img"><i
                                                                                aria-hidden="true"
                                                                                class="flaticon flaticon-pool-1"></i>
                                                                        </div>
                                                                        <div class="cs-info-box-content">
                                                                            <h5 class="cs-title cs-info-box-title">
                                                                                Infinity Pool </h5>
                                                                            <div class="cs-info-box-text">
                                                                                <p>Lorem ipsum proin gravida velit
                                                                                    auctor sde re sit amet space.
                                                                                </p>
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
                            </div>
                        </div><!-- .post-entry -->
                    </article>
                </div>
            </div>
        </div>

    </div> <!-- end of #content -->
</x-master>
