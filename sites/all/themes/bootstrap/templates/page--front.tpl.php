
<header>
  <div class="navbar-wrapper">
    <div class="container">
      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <div class="container">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>

            <a class="navbar-link brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
              sf2ny
            </a>

            <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
              <div class="nav-collapse collapse">
                <nav role="navigation">
                  <?php if (!empty($primary_nav)): ?>
                  <?php print render($primary_nav); ?>
                  <?php endif; ?>
                  <?php if (!empty($secondary_nav)): ?>
                  <?php print render($secondary_nav); ?>
                  <?php endif; ?>
                  <?php if (!empty($page['navigation'])): ?>
                  <?php print render($page['navigation']); ?>
                  <?php endif; ?>
                </nav>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="splash container">
    <img class="splash-image" src="<?php print $base_path; ?>sites/all/themes/bootstrap/img/col-du-galibier.jpg">
    <div class="splash-caption">
      <h1 class="page-header">35 days, 3,150 miles, 2 cyclists, 1 challenge.</h1>
      <p class="lead">To cycle from San Francisco to New York.</p>
    </div>
</div>

<div class="main-container container">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <div class="row-fluid">
    <div class="countdown text-success">
      <ul id="countdown">
        <li>
          <span class="days">00</span>
          <p class="timeRef">days</p>
        </li>
        <li>
          <span class="hours">00</span>
          <p class="timeRef">hours</p>
        </li>
        <li>
          <span class="minutes">00</span>
          <p class="timeRef">minutes</p>
        </li>
        <li>
          <span class="seconds">00</span>
          <p class="timeRef">seconds</p>
        </li>
      </ul>
    </div>
  </div>

  <div class="row-fluid">
    <section class="span12">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <a id="main-content"></a>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

  </div>

  <div class="row-fluid">

    <?php if (!empty($page['content_lower'])): ?>
      <aside class="span12">
        <?php print render($page['content_lower']); ?>
      </aside>  <!-- /#content_lower -->
    <?php endif; ?>

  </div>

  <div class="row-fluid">

    <?php if (!empty($page['bottom_left'])): ?>
    <aside class="span6">
      <?php print render($page['bottom_left']); ?>
    </aside>  <!-- /#bottom_left -->
    <?php endif; ?>

    <?php if (!empty($page['bottom_right'])): ?>
    <aside class="span6">
      <?php print render($page['bottom_right']); ?>
    </aside>  <!-- /#bottom_right -->
    <?php endif; ?>

  </div>
</div>

<footer class="container">
  <hr>
  <p class="pull-right"><a href="#">Back to top</a></p>
  <p>Site built by <a href="http://room271.net">room271</a></p>
</footer>
