<div class="post cs-room-item has-post-thumbnail">
    <div class="featured-img">
        <a href="{{ route('rooms.show', $room->id) }}">
            <img loading="lazy" decoding="async" width="780" height="520" src="{{ asset('storage/' . $room->image) }}"
                class="attachment-cozystay_780x9999 size-cozystay_780x9999" alt=""
                sizes="(max-width: 780px) 100vw, 780px" />
        </a>
        <div class="overlay-label">
            <div class="overlay-label-text">
                ${{ $room->prix }}
                /
                Night
            </div>
        </div>
    </div>
    <div class="post-content cs-room-content">
        <header class="post-header item-header">
            <h2 class="post-title item-title">
                <a href="{{ route('rooms.show', $room->id) }}">{{ $room->name }}</a>
            </h2>
            <div class="item-subtitle">
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
        <div class="post-excerpt item-excerpt">
            <p>{{ $room->description }}
            </p>
        </div>
        <footer class="post-footer item-footer">
            <div class="more-btn">
                <a class="read-more-btn button cs-btn-underline" href="{{ route('rooms.show', $room->id) }}">
                    <span>Discover
                        More</span>
                </a>
            </div>
        </footer>
    </div>
</div>
