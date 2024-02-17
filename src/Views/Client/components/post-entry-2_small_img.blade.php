<div class="d-md-flex post-entry-2 small-img">
    <a href="/post/{{ $post['id']}}" class="me-4 thumbnail">
        <img src="{{ $post['image'] }}" alt="" class="img-fluid">
    </a>
    <div>
        <div class="post-meta"><span class="date">{{ $post['name'] }}</span> <span class="mx-1">&bullet;</span> 
            <span>Jul 5th'22</span></div>
        <h3>{{ $post['title'] }}</p>
        <div class="d-flex align-items-center author">
            @if (!isset($hiddenExcerpt))
                <p class="mb-4 d-block">
                    {{ $post['excerpt'] }}
                </p>
            @endif
            @if (!isset($hiddenAuthor))
                <div class="d-flex align-items-center author">
                    <div class="photo">
                        <img src="/assets/client/assets/img/person-1.jpg" alt="" class="img-fluid" />
                    </div>
                    <div class="name">
                        <h3 class="m-0 p-0">Cameron Williamson</h3>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
