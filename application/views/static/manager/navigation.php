<!-- Navigation-->
<nav class="navbar navbar-expand-md navbar-dark bg-default fixed-top" id="mainNav">
  <a class="navbar-brand" href="index.html"><img src="<?php echo base_url() ?>assets/manager/img/logo.png" data-retina="true" alt="" width="163" height="36"></a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Göstergeler">
        <a class="nav-link" href="<?php echo base_url('manager/index') ?>">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Göstergeler</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mesajlar">
        <a class="nav-link" href="messages.html">
          <i class="fa fa-fw fa-envelope-open"></i>
          <span class="nav-link-text">Mesajlar</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Randevular">
        <a class="nav-link" href="<?php echo base_url('manager/bookings') ?>">
          <i class="fa fa-fw fa-calendar-check-o"></i>
          <span class="nav-link-text">Randevular <span class="badge badge-pill badge-danger">6</span></span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ders İlanlarım">
        <a class="nav-link" href="<?php echo base_url('manager/packages') ?>">
          <i class="fa fa-fw fa-book"></i>
          <span class="nav-link-text">İlanlarım</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Yorumlar">
        <a class="nav-link" href="reviews.html">
          <i class="fa fa-fw fa-star"></i>
          <span class="nav-link-text">Yorumlar</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Favoriye Ekleyenler">
        <a class="nav-link" href="bookmarks.html">
          <i class="fa fa-fw fa-heart"></i>
          <span class="nav-link-text">Favoriye Ekleyenler</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profilim">
        <a class="nav-link" href="bookmarks.html">
          <i class="fa fa-fw fa-user"></i>
          <span class="nav-link-text">Profilim</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ayarlar">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-gear"></i>
          <span class="nav-link-text">Ayarlar</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
            <a href="charts.html">Bildirimler</a>
          </li>
          <li>
            <a href="tables.html">Banka Bilgileri</a>
          </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Yardım & Destek">
        <a class="nav-link" href="bookmarks.html">
          <i class="fa fa-fw fa-support"></i>
          <span class="nav-link-text">Yardım & Destek</span>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-envelope"></i>
          <span class="d-lg-none">Mesajlar
            <span class="badge badge-pill badge-primary">12</span>
          </span>
          <span class="indicator text-danger d-none d-lg-block">
            <i class="fa fa-fw fa-circle"></i>
          </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="messagesDropdown">
          <h6 class="dropdown-header">Mesajlar</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <strong>David Miller</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <strong>Jane Smith</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <strong>John Doe</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item small" href="#">Tüm Mesajları Görüntüle</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-bell"></i>
          <span class="d-lg-none">Alerts
            <span class="badge badge-pill badge-warning">6 New</span>
          </span>
          <span class="indicator text-danger d-none d-lg-block">
            <i class="fa fa-fw fa-circle"></i>
          </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header">Bildirimler</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <span class="text-success">
              <strong>
                <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
            </span>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <span class="text-danger">
              <strong>
                <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
            </span>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <span class="text-success">
              <strong>
                <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
            </span>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item small" href="#">View all alerts</a>
        </div>
      </li>
      <li class="nav-item">
        <form class="form-inline my-2 my-lg-0 mr-lg-2">
          <div class="input-group">
            <input class="form-control search-top" type="text" placeholder="Kayıtlarda Ara...">
            <span class="input-group-btn">
              <button class="btn btn-info" type="button">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i>Güvenli Çıkış</a>
      </li>
    </ul>
  </div>
</nav>
<!-- /Navigation-->
