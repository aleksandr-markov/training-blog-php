<div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1">
        <div></div>
    </div>
    <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="/">Skadi</a>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
<!--        <a class="link-secondary" href="#" aria-label="Search">-->
<!--            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"-->
<!--                 stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"-->
<!--                 viewBox="0 0 24 24"><title>Search</title>-->
<!--                <circle cx="10.5" cy="10.5" r="7.5"/>-->
<!--                <path d="M21 21l-5.2-5.2"/>-->
<!--            </svg>-->
<!--        </a>-->
        <?php if (!isset($_SESSION['user'])): ?>
            <a class="btn btn-sm btn-outline-primary" href="/user/join">Sign up</a>
            <a class="btn btn-sm btn-outline-success" href="/user/login">Log in</a>
        <?php else: ?>
            <a class="btn btn-sm btn-outline-secondary" href="/user/logout">Log out</a>
        <?php endif; ?>
    </div>
</div>