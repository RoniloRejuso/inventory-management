<div class="main-wrapper">
      <div class="header">
        <div class="header-left">
          <a href="index.html" class="logo">
            <img src="assets/img/badbunny-removebg-preview.png" alt="" />
          </a>
          <a href="index.html" class="logo-small">
            <img src="assets/img/badbunny-removebg-preview.png" alt="" />
          </a>
          <a id="toggle_btn" href="javascript:void(0);"> </a>
        </div>

        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
          <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </a>

<ul class="nav user-menu">
<li class="nav-item">
<div class="top-nav-search">
<a href="javascript:void(0);" class="responsive-search">
<i class="fa fa-search"></i>
</a>
<form id="searchForm" action="search_results.php">
        <div class="searchinputs">
          <input type="text" name="query" placeholder="Search Here ..."> <!-- Added 'name="query"' -->
          <div class="search-addon">
            <span><img src="assets/img/icons/closes.svg" alt="img"></span>
          </div>
        </div>
        <button type="submit" class="btn" id="searchdiv"><img src="assets/img/icons/search.svg" alt="img"></button>
      </form>
</div>
</li>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var searchForm = document.getElementById('searchForm');
    if (searchForm) {
      searchForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission behavior

        var searchInput = searchForm.querySelector('input[name="query"]');
        if (searchInput) {
          var searchQuery = searchInput.value.trim();
          if (searchQuery !== '') {
            // Redirect to the search results page with the search query
            window.location.href = 'search_results.php?query=' + encodeURIComponent(searchQuery);
          }
        }
      });
    }
  });
</script>



<li class="nav-item dropdown has-arrow main-drop">
<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
<span class="user-img"><img src="assets/img/cat.jpg" alt="">
<span class="status online"></span></span>
</a>
<div class="dropdown-menu menu-drop-user">
<div class="profilename">
<div class="profileset">
<span class="user-img"><img src="assets/img/cat.jpg" alt="">
<span class="status online"></span></span>
<div class="profilesets">
<h6>Ronilo Rejuso</h6>
<h5>Admin</h5>
</div>
</div>
<hr class="m-0">
<a class="dropdown-item" href="profile.php"> <i class="me-2" data-feather="user"></i> My Profile</a>
<a class="dropdown-item" href="profile.php"><i class="me-2" data-feather="settings"></i>Settings</a>
<hr class="m-0">
<a class="dropdown-item" href="logs.php"><button class="btn btn-primary btn-block" id="logoutButton">Logout</button>
</div>
</li>
</ul>

<div class="dropdown mobile-user-menu">
<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="profile.php">My Profile</a>
<a class="dropdown-item" href="profile.php">Settings</a>
<a class="dropdown-item" href="logs.php">Logout</a>
</div>
</div>

</div>