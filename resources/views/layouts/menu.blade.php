<li class="nav-item">
    <a href="{{ route('authors.index') }}"
       class="nav-link {{ Request::is('authors*') ? 'active' : '' }}">
        <p>Authors</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('posts.index') }}"
       class="nav-link {{ Request::is('posts*') ? 'active' : '' }}">
        <p>Posts</p>
    </a>
</li>

 {{-- <li class="nav-item">
    <a href="{{ route('article.trend') }}"
        class="nav-link {{ Request::is('artikel*') ? 'active' : '' }}">
        <p>Article</p>
        </a>
    </li> --}}







