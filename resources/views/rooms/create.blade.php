<x-master>
    <div id="content" class="site-content">
        <header class="page-title-large page-title-section">
            <div class="page-title-bg page-title-default-background-image"
                style="background-size: cover; background-position: center center; background-repeat: no-repeat; background-attachment: scroll; background-image: url(../talwind1/uploads/sites/6/2023/08/jean-philippe-delberghe-xrjusFfOksI-unsplash-3.jpg);"
                data-loftocean-image="1"
                data-loftocean-normal-image="https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/08/jean-philippe-delberghe-xrjusFfOksI-unsplash-3.jpg"
                data-loftocean-retina-image="https://cozystay.loftocean.com/apartment/wp-content/uploads/sites/6/2023/08/jean-philippe-delberghe-xrjusFfOksI-unsplash-3.jpg">
            </div>
            <div class="container">
                <nav class="woocommerce-breadcrumb" aria-label="Breadcrumb"><a
                        href="https://cozystay.loftocean.com/apartment">Home</a>&nbsp;&#47;&nbsp;Create Room
                </nav>
                <h1 class="entry-title">Create Room</h1>
            </div>
        </header>
        <div class="main">
            <div class="container">
                <div id="primary" class="primary content-area">
                    <article class="post-1621 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>

                                <h2>Ajouter un Chomber</h2>
                                @if ($errors->any())
                                    <h3 type="danger">
                                        <h6>Errors</h6>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </h3>
                                @endif
                                <form
                                    class="woocommerce-form woocommerce-form-login login elementor-container elementor-column-gap"
                                    action="{{ route('rooms.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="username">Nom<span class="required">*</span></label>
                                        <input type="text"
                                            class="woocommerce-Input woocommerce-Input--text input-text" name="name"
                                            id="username" autocomplete="username" />
                                    </p>

                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="date">Type<span class="required">*</span></label>
                                        <input class="woocommerce-Input woocommerce-Input--text input-text"
                                            type="text" name="type" id="type" autocomplete="type" />
                                    </p>

                                    <div class="elementor-row">
                                        <div class="elementor-col-50">
                                            <p
                                                class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="surface">surface&nbsp;<span
                                                        class="required">*</span></label>
                                                <input class="woocommerce-Input woocommerce-Input--text input-text"
                                                    type="number" name="surface" id="surface"
                                                    autocomplete="surface" />
                                            </p>
                                        </div>

                                        <div class="elementor-col-50">
                                            <p
                                                class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="place">Nomber de place &nbsp;<span
                                                        class="required">*</span></label>
                                                <input class="woocommerce-Input woocommerce-Input--text input-text"
                                                    type="number" name="place" id="place" autocomplete="etage" />
                                            </p>
                                        </div>
                                        <div class="elementor-col-100">
                                            <p
                                                class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="place">étage &nbsp;<span
                                                        class="required">*</span></label>
                                                <input class="woocommerce-Input woocommerce-Input--text input-text"
                                                    type="number" name="etage" id="etage" autocomplete="etage" />
                                            </p>
                                        </div>
                                        <div class="elementor-col-50">

                                            <p
                                                class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="prix">prix&nbsp;<span class="required">*</span></label>
                                                <input class="woocommerce-Input woocommerce-Input--text input-text"
                                                    type="number" name="prix" id="prix" autocomplete="prix" />
                                            </p>
                                        </div>
                                        <div class="elementor-col-50">

                                            <p
                                                class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="image">image&nbsp;<span class="required">*</span></label>
                                                <input class="woocommerce-Input woocommerce-Input--text input-text"
                                                    type="file" name="image" id="image" autocomplete="image" />
                                            </p>
                                        </div>
                                    </div>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="description">description&nbsp;<span
                                                class="required">*</span></label>
                                        <input class="woocommerce-Input woocommerce-Input--text input-text"
                                            type="text" name="description" id="description"
                                            autocomplete="current-description" />
                                    </p>
                                    <p class="form-row">
                                        <button type="submit"
                                            class="woocommerce-button button woocommerce-form-login__submit">Create
                                            Room</button>
                                    </p>
                                </form>
                                <p class="woocommerce-LostPassword lost_password">
                                    <a href="{{ route('homepage') }}">return</a>
                                </p>
                            </div>
                        </div><!-- .post-entry -->
                    </article>
                </div>
            </div>
        </div>

    </div> <!-- end of #content -->
</x-master>
