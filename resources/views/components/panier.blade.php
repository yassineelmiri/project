<article
class="post-142 post type-post status-publish format-gallery has-post-thumbnail hentry category-sightseeing category-wellness tag-mountain tag-nature tag-special-events tag-summer post_format-post-format-gallery">
<div class="featured-img">
    <a
        href="{{ route('rooms.show', $PublicationReservation->id) }}">
        <ul
            class="thumbnail-gallery single-img-gallery">
            <li class="first"><img
                    loading="lazy"
                    decoding="async"
                    width="1920"
                    height="1274"
                    src="{{ asset('storage/' . $PublicationReservation->image) }}"
                    class="skip-lazy image-layout-grid-column-2"
                    alt="Local Activities"
                    sizes="(max-width: 1920px) 100vw, 1920px" />
            </li>
        </ul>
    </a>
    <div class="slider-arrows"></div>
    <div class="slider-dots"></div>
    <div
        class="overlay-label time-label featured-style">
        <div class="meta-item time">
            <time class="published"
                datetime="2023-03-24T08:50:29+00:00">
                <span
                    class="month">Mar</span>
                <span
                    class="day">{{ $PublicationReservation->updated_at->format('j') }}
                </span>
            </time>
        </div>
    </div>
</div>
<div class="post-content">
    <header class="post-header">
        <div class="meta-wrap">
            <div class="cat-links"><a
                    href="{{ route('rooms.show', $PublicationReservation->id) }}"
                    rel="tag">type
                    /</a>
                <a href="{{ route('rooms.show', $PublicationReservation->id) }}"
                    rel="tag">{{ $PublicationReservation->type }}</a>
            </div>
        </div>
        <h2 class="post-title">
            <a
                href="{{ route('rooms.show', $PublicationReservation->id) }}">City
                {{ $PublicationReservation->name }}</a>
        </h2>
    </header>
    <div class="post-excerpt">
        <p>{{ $PublicationReservation->description }}
            &#8230;</p>
    </div>
    <footer class="post-footer">
        <div class="more-btn">
            <form
                action="{{ route('reservation.destroy', $PublicationReservation->id) }}"
                method="POST">
                @method('DELETE')
                @csrf
                <input type="hidden"
                    name="rooms_id"
                    value="{{ $PublicationReservation->id }}">
                <button
                    class="read-more-btn button cs-btn-underline"
                    type="submit"><span>Annuller
                        Reservation</span></button>
            </form>
        </div>
    </footer>
</div>
</article>