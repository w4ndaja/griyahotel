<div class="sidebar">
    <div class="sidebar-administrator">
        <div class="media">
            <img width="50" src="{{ Auth::user()->avatar(100) }}" class="mr-3">
            <div class="media-body">
                <div class="mt-0">{{ Auth::user()->name }}</div>
                <div class="sidebar-administrator-label">
                    @if (!Auth::user()->getAllPermissions())
                        {{ ucwords(implode(" | ", Auth::user()->getPermissionNames()->toArray())) }}
                    @else
                        The translator of this site.
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-statistic">
        <div class="sidebar-statistic-card">
            <div class="sidebar-statistic-label">
                Post
            </div>
            <div class="sidebar-statistic-counter">
                <post-count/>
            </div>
        </div>
    </div>
    <a href="#" class="sidebar-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M128 416h256v48H128zM256 288c17.7 0 32-14.3 32-32s-14.3-32-32-32c-3 0-6 .4-8.8 1.2l-66.7-48.7-4 3.5 48.9 66.7c-.9 2.9-1.4 6-1.4 9.3 0 17.7 14.3 32 32 32z"/><path d="M256 48C141.1 48 48 141.1 48 256c0 48.3 16.5 92.7 44.1 128h58.8l4-4 22.1-22.1-22.9-22.9-22.1 22c-19.9-24.3-32.1-54-35.2-85H128v-32H96.8c3.1-31 15.3-60.7 35.2-85l22.1 22 22.9-22.9-22-22.1c24.3-19.9 54-32.1 85-35.2V128h32V96.8c31 3.1 60.7 15.3 85 35.2l-22 22.1 22.9 22.9 22.1-22c19.9 24.3 32.1 54 35.2 85H384v32h31.2c-3.1 31-15.3 60.7-35.2 85l-22.1-22-22.9 22.9 22.1 22.1 4 4h58.8c27.6-35.3 44.1-79.7 44.1-128 0-114.9-93.1-208-208-208z"/></svg>
        Dashboard
    </a>
    <div class="sidebar-accordion" id="sidebarAccordion">
        @can('create posts')
            <button class="sidebar-item w-100" id="headingOne" type="button" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                Posts
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"/></svg>
            </button>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#sidebarAccordion">
                <a href="/create-new-post" class="sidebar-item{{ Request::is('create-new-post') ? ' active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"/></svg>
                    New Post
                </a>
                <a href="{{ route('posts.table') }}" class="sidebar-item{{ Request::is('table-of-content-posts') ? ' active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"/></svg>
                    Table
                </a>
                <a href="{{ route('categories.index') }}" class="sidebar-item{{ Request::is('the-category') ? ' active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"/></svg>
                    The Post Category
                </a>
            </div>
        @endcan

        @can('create teams')
        <button class="sidebar-item w-100" id="headingTwo" type="button" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
            Teams
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"/></svg>
        </button>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#sidebarAccordion">
            <a href="/teams" class="sidebar-item{{ Request::is('teams') ? ' active' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"/></svg>
                Table
            </a>
            <a href="/create-new-team" class="sidebar-item{{ Request::is('create-new-team') ? ' active' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"/></svg>
                Create new Team
            </a>
        </div>
        @endcan


        {{--Permission--}}
        @can('roles permissions')
        <button class="sidebar-item w-100" id="headingPermission" type="button" data-toggle="collapse" data-target="#collapsePermission"
                aria-expanded="true" aria-controls="collapsePermission">
            Role & Permissions
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"/></svg>
        </button>

        <div id="collapsePermission" class="collapse" aria-labelledby="headingPermission" data-parent="#sidebarAccordion">
            <a href="/permissions/rules" class="sidebar-item{{ Request::is('permissions/rules') ? ' active' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"/></svg>
                The Rule
            </a>
            <a href="/permissions/index-permission" class="sidebar-item{{ Request::is('permissions/index-permission') ? ' active' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"/></svg>
                Permissions
            </a>
            <a href="/permissions/index-role" class="sidebar-item{{ Request::is('permissions/index-role') ? ' active' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"/></svg>
                Roles
            </a>
            <a href="{{ route('users.permission.table') }}" class="sidebar-item{{ Request::is('permissions/create-new-user') ? ' active' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"/></svg>
                User Permissions
            </a>

        </div>
        @endcan
    </div>

    <a href="/" target="_blank" class="sidebar-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M208 448V320h96v128h97.6V256H464L256 64 48 256h62.4v192z"/></svg>
        Go home
    </a>
</div>
