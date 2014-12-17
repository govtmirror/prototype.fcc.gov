<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="css/styles.css" rel="stylesheet">
    <script src="js/jquery-1.11.1.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script type="text/javascript" src="js/selectivizr-min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="page row-offcanvas row-offcanvas-right">
  <header class="site-header">
    <nav role="navigation">
      <div class="navbar navbar-default navbar-static-top navbar-primary">
        <div class="container">
          <div class="navbar-header">
            <h1 class="navbar-brand">
              <a class="navbar-logo" href="index.html" title="Home">
                Federal Communications Commission
              </a>
            </h1>
          </div>
          <ul class="nav navbar-nav nav-offcanvas-right" id="menu-primary">
            <li class=" active">
              <a href="events.php#browse-by-category" data-toggle="tab" aria-controls="browse-by-category">
                <div class="text-prefix">Browse by</div>
                <strong class="title-emphasis">Category</strong>
              </a>
            </li>
            <li class="">
              <a href="events.php#browse-by-location" data-toggle="tab" aria-controls="browse-by-location">
                <div class="text-prefix">Browse by</div>
                <strong class="title-emphasis">Bureaus &amp; Offices</strong>
              </a>
            </li>
          </ul>
          <div class="navbar-controls">
            <div class="navbar-search nav-offcanvas nav-offcanvas-top">
              <form class="navbar-form navbar-right form-search form-search-header" id="search-form-header" role="search">
  <div class="input-group">
    <label class="sr-only" for="search-text">Search</label>
    <input type="text" class="form-control" id="search-text" placeholder="Search">
    <span class="input-group-btn">
      <button class="btn btn-default" type="button">
        <span class="btn-search-inner">Go</span>
        <span class="btn-search-alt-inner">Go</span>
      </button>
    </span>
  </div><!-- /input-group -->
</form>            </div>
            <a type="button" class="btn navbar-btn btn-toggle-search" data-toggle="offcanvas" data-toggle-direction="top">
              <span class="btn-inner btn-inner-search">Search</span>
            </a>
            <a type="button" class="btn navbar-btn btn-toggle-menu" data-toggle="offcanvas" data-toggle-direction="right">
              <span class="btn-inner btn-inner-menu">Menu</span>
            </a>
          </div>
        </div>
      </div>
      

      <div class="navbar-secondary navbar-default yamm nav-offcanvas nav-offcanvas-right">
        <div class="tab-content" id="menu-secondary">
          <div id="browse-by-category" class="container tab-pane active">
            <ul class="nav nav-tabs menu-secondary">
              <li role="presentation" class="dropdown dropdown-left yamm-fw">
                <a class="dropdown-toggle" data-hover="dropdown" href="events.php#" data-toggle="dropdown" role="button" aria-expanded="false">
                  <span class="link-title dropdown-link-title">About the FCC</span>
                  <span class="dropdown-link-back">Back to Categories</span>
                </a>
                <ul class="dropdown-menu dropdown-about-fcc content-flush" role="menu">
  <li>
    <div class="container">
      <ul class="about-fcc-links menu-col list-unstyled block-list">
        <li class="about-fcc-link">
          <a href="about.php">About the FCC Overview</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php">Rulemaking Process</a>
        </li>
        <li class="about-fcc-link">
          <a href="leadership.php">Leadership</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Strategic Goals</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Find People</a>
        </li>
      </ul>
      <ul class="about-fcc-links menu-col list-unstyled block-list">
        <li class="about-fcc-link col-item-first">
          <a href="events.php#">Organizational Charts</a>
        </li>
        <li class="about-fcc-link">
          <a href="advisory-landing.php">Advisory Committees</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Jobs and Contracting</a>
        </li>
        <li class="about-fcc-link">
          <a href="strategic-plans.php">Strategic Plans &amp; Budgets</a>
        </li>
        <li class="about-fcc-link">
          <a href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
    <div class="nav-right about-fcc-featured">
      <div class="about-fcc-featured-link dropdown-featured-links featured-link">
        <a href="events.php#">
          <strong class="title-emphasis">
            Fiscal Year 
            <div class="fiscal-plan-year">
              2014-2018
            </div>
            Strategic Plan
          </strong>
          <div class="link-cta">download the pdf</div>
        </a>
      </div>
    </div>
  </li>
</ul>              </li>
              <li role="presentation" class="dropdown dropdown-left yamm-fw">
                <a class="dropdown-toggle" data-hover="dropdown" href="proceedings.php" data-toggle="dropdown" role="button" aria-expanded="false">
                  <span class="link-title dropdown-link-title">Proceedings &amp; Actions</span>
                  <span class="dropdown-link-back">Back to Categories</span>
                </a>
                <ul class="dropdown-menu dropdown-about-fcc content-flush" role="menu">
  <li>
    <div class="container">
      <ul class="about-fcc-links menu-col list-unstyled block-list">
        <li class="about-fcc-link">
          <a href="proceedings.php">Proceedings and Actions Overview</a>
        </li>
        <li class="about-fcc-link">
          <a href="https://apps.fcc.gov/edocs_public/edocsLink.do">Commission Documents (EDOCS)</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Most Active Proceedings</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Items on Circulation</a>
        </li>
        <li class="about-fcc-link">
          <a href="archive-of-filings.php">Ex Parte</a>
        </li>
      </ul>
      <ul class="about-fcc-links menu-col list-unstyled block-list">
        <li class="about-fcc-link col-item-first">
          <a href="http://transition.fcc.gov/Daily_Releases/Daily_Digest/2014/ddtoday.html">Daily Digest &amp; Recent Releases</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Recent Releases</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Court Filings</a>
        </li>
        <li class="about-fcc-link">
          <a href="mergers-transactions.php">Mergers &amp; Transactions</a>
        </li>
        <li class="about-fcc-link">
          <a href="contact.php">Auctions</a>
        </li>
      </ul>
    </div>
    <div class="nav-right about-fcc-featured">
      <div class="about-fcc-featured-link dropdown-featured-links featured-link">
        <a href="events.php#">
          <strong class="title-emphasis">
            Latest    
            <div class="fiscal-plan-year">
              Ex Parte 
            </div>
            Filings
          </strong>
          <div class="link-cta"><a href="archive-of-filings.php">Search Filings</a></div>
        </a>
      </div>
    </div>
  </li>
</ul>              </li>
              <li role="presentation" class="dropdown dropdown-left yamm-fw">
                <a class="dropdown-toggle" data-hover="dropdown" href="licensing.php" data-toggle="dropdown" role="button" aria-expanded="false">
                  <span class="link-title dropdown-link-title">Licensing &amp; Databases</span>
                  <span class="dropdown-link-back">Back to Categories</span>
                </a>
                <ul class="dropdown-menu dropdown-licensing content-flush" role="menu">
  <li>
    <div class="container">
      <ul class="about-fcc-links menu-col list-unstyled block-list">
        <li class="about-fcc-link">
          <a href="events.php#">ASR</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">CDBS</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">COALS</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">CSRS</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Children's Television Programming Report </a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">FRN </a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">DIRS</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Domain Name Data Entry</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">EAFS</a>
        </li>
      </ul>
      <ul class="about-fcc-links menu-col list-unstyled block-list">
        <li class="about-fcc-link col-item-first">
          <a href="events.php#">ECFS</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">EDOCS</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">ETFS</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">OET - EAS</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Fee Filer</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">GenMen</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">IBFS</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">LMS</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">NORS</a>
        </li>
      </ul>
      <ul class="about-fcc-links menu-col list-unstyled block-list">
        
        <li class="about-fcc-link">
          <a href="events.php#">KDB</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">OET TCB/Accreditor Filing System</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Red Light Display (RLD) System</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Special Access Data Collection</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">TCNS</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">TV Broadcast Station Public Inspection Files</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">ULS</a>
        </li>
      </ul>
    </div>
  </li>
</ul>              </li>
              <li role="presentation" class="dropdown dropdown-left yamm-fw">
                <a class="dropdown-toggle" data-hover="dropdown" href="events.php#" data-toggle="dropdown" role="button" aria-expanded="false">
                  <span class="link-title dropdown-link-title">Reports &amp; Research</span>
                  <span class="dropdown-link-back">Back to Categories</span>
                </a>
                <ul class="dropdown-menu dropdown-about-fcc content-flush" role="menu">
  <li>
    <div class="container">
      <ul class="about-fcc-links menu-col list-unstyled block-list">
        <li class="about-fcc-link">
          <a href="events.php#">Reports and Data Overview</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Reports</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Data</a>
        </li>
      </ul>
      <ul class="about-fcc-links menu-col list-unstyled block-list">
        <li class="about-fcc-link">
          <a href="events.php#">Maps</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Working Papers</a>
        </li>
        <li class="about-fcc-link col-item-first">
          <a href="events.php#">For Developers</a>
        </li>
      </ul>
    </div>
    <div class="nav-right about-fcc-featured">
      <div class="about-fcc-featured-link dropdown-featured-links featured-link">
        <a href="events.php#">
          <strong class="title-emphasis">
            Measuring 
            <div class="fiscal-plan-year">
              Broadband America
            </div>
            2014
          </strong>
          <div class="link-cta">View the Report</div>
        </a>
      </div>
    </div>
  </li>
</ul>              </li>
              <li role="presentation" class="dropdown dropdown-left yamm-fw">
                <a class="dropdown-toggle active" data-hover="dropdown" href="news-events.php" data-toggle="dropdown" role="button" aria-expanded="false">
                  <span class="link-title dropdown-link-title">News &amp; Events</span>
                  <span class="dropdown-link-back">Back to Categories</span>
                </a>
                <ul class="dropdown-menu dropdown-about-fcc content-flush" role="menu">
  <li>
    <div class="container">
      <ul class="about-fcc-links menu-col list-unstyled block-list">
        <li class="about-fcc-link">
          <a href="news-events.php">News and Events Overview</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Headlines</a>
        </li>
        <li class="about-fcc-link">
          <a href="blog.php">FCC Blog</a>
        </li>
      </ul>
      <ul class="about-fcc-links menu-col list-unstyled block-list">
        <li class="about-fcc-link col-item-first">
          <a href="events.php">Events</a>
        </li>
        <li class="about-fcc-link">
          <a href="advisory-committee.php">RSS Feeds</a>
        </li>
        <li class="about-fcc-link">
          <a href="events.php#">Social Media</a>
        </li>
      </ul>
    </div>
    <div class="nav-right about-fcc-featured">
      <div class="about-fcc-featured-link dropdown-featured-links featured-link">
        <a href="events.php#">
          <strong class="title-emphasis">
            Seventh Meeting 
            <div class="fiscal-plan-year">
              of the WRC-15
            </div>
            Advisory Committee
          </strong>
          <div class="link-cta">See Event</div>
        </a>
      </div>
    </div>
  </li>
</ul>              </li>
              <li class="nav-right-link dropdown yamm-fw dropdown-right dropdown-toggle-for-consumers" role="presentation">
                <a class="dropdown-toggle" data-hover="dropdown" href="consumer-landing.php" data-toggle="dropdown" role="button" aria-expanded="false">
                  <span class="dropdown-link-title link-title">For Consumers</span>
                  <span class="dropdown-link-back">Back to Categories</span>
                </a>
                 <ul class="dropdown-menu dropdown-for-consumers content-flush" role="menu">
  <li>
    <div class="container">
      <ul class="consumer-links list-unstyled block-list">
        <li class="consumer-link">
          <a href="consumer-landing.php">Consumer Overview</a>
        </li>
        <li class="consumer-link">
          <a href="events.php#">Consumer Complaints</a>
        </li>
        <li class="consumer-link">
          <a href="events.php#">Consumer Topics</a>
        </li>
        <li class="consumer-link">
          <a href="events.php#">Consumer Guides</a>
        </li>
      </ul>
      <ul class="consumer-featured-links dropdown-featured-links block-list">
        <li class="consumer-featured-link featured-link">
          <a href="http://apps.fcc.gov/ecfs/upload/display" target="_blank">
            <strong class="title-emphasis">Open Internet</strong>
            make a comment
          </a>
        </li>
        <li class="consumer-featured-link featured-link">
          <a href="https://www.donotcall.gov/" target="_blank">
            <strong class="title-emphasis">Do Not Call List</strong>
            apply for the do not call list
          </a>
        </li>
        <li class="consumer-featured-link featured-link">
          <a href="https://consumercomplaints.fcc.gov/hc/en-us" target="_blank">
            <strong class="title-emphasis">Consumer Complaints</strong>
            file a complaint
          </a>
        </li>
      </ul>
    </div>
  </li>
</ul>              </li>
            </ul><!--.nav-tabs -->
          </div>
          <div id="browse-by-location" class="tab-pane container ">
            <ul class="nav nav-tabs menu-secondary">
              <li role="presentation">
                <a href="events.php#">Consumer</a>
              </li>
              <li role="presentation">
                <a href="events.php#">Enforcement</a>
              </li>
              <li role="presentation">
                <a href="events.php#">International</a>
              </li>
              <li role="presentation">
                <a href="media-bureau.php" class="">
                  <span class="link-title">Media</span>
                </a>
              </li>
              <li role="presentation">
                <a href="events.php#">Public Safety</a>
              </li>
              <li role="presentation">
                <a href="events.php#">Wireless</a>
              </li>
              <li role="presentation">
                <a href="events.php#">Wireline</a>
              </li>
              <li role="presentation">
                <a href="events.php#">Offices</a>
              </li>
            </ul><!--.nav-tabs -->
          </div>
        </div>
      </div><!-- .secondary-menu -->
    </nav>
  </header>
    <div class="page-content page-events" role="main">
  <section class="page-header">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
      </ol>
      <h1 class="page-title">Events</h1>
    </div>
  </section><!-- .section-header -->

  <section class="section-primary">
    <div class="container">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-tabs-content-lg nav-justified nav-tabs-content" role="tablist">
        <li role="presentation"  class="active"><a href="events.php#all-events" aria-controls="home" role="tab" data-toggle="tab">All Events</a></li>
        <li role="presentation"  ><a href="events.php#open-commission-meetings" aria-controls="profile" role="tab" data-toggle="tab">Open Commission Meetings</a></li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="all-events">
          <div class="row row-fluid">
            <div class="col-md-3 hidden-xs col-sidebar col-fluid">
              <form class="form form-filter form-filter-events">
                <h3 class="form-heading">Filter By:</h3>
                <div class="form-group form-group-year">
                  <label class="sr-only" for="filter-event-category">Event categories</label>
                  <select class="input-md form-filter-year selectpicker" data-size="6" id="filter-event-category">
                    <option value="all">Event categories</option>
                    
                  </select>
                </div><!-- /input-group -->
                <div class="form-group form-group-calendar">
                  <label class="sr-only" for="filter-bureau-offices">Bureaus &amp; offices</label>
                  <select class="input-md form-filter-year selectpicker" data-size="6" id="filter-bureau-offices">
                    <option value="all">Bureaus &amp; offices</option>
                    
                  </select>
                </div><!-- /input-group -->
                <a class="btn btn-primary btn-lg btn-submit" href="events-archived.php">
                  View archived events
                </a>
              </form>
            </div><!-- .col-sidebar -->
            <div class="col-md-8 col-md-offset-1 col-body col-fluid">
              <ul class="block-list">
                <li class="block-list-item">
                  <div class="block block-box block-featured block-event-teaser block-event-teaser-lg block-event-teaser-featured list-block block-list-item">
                    <div class="block-content">
                      <div class="event-date-info block-list-item-text">
                        <span class="event-month">Dec</span>
                        <span class="event-date">11</span>
                        <div class="block-actions">
                          <a class="btn btn-primary">
                            Event Details
                          </a>
                        </div>
                      </div>
                      <div class="event-info">
                        <h3 class="event-title teaser-title block-list-item-heading">
                          <a href="events.php#">
                            December 2014 Open Commission Meeting
                          </a>
                        </h3>
                        <p class="block-list-item-text">
                          Room TW-C305, 445 12th Street S.W., Washington, DC 10:30am – 2:00pm
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="block-list-item">
                  <div class="block block-event-teaser block-event-teaser-lg list-block block-list-item">
                    <div class="block-content">
                      <div class="event-date-info">
                        <span class="event-month">Dec</span>
                        <span class="event-date">17</span>
                        <div class="block-actions">
                          <a class="btn btn-primary">
                            Event Details
                          </a>
                        </div>
                      </div>
                      <div class="event-info">
                        <h3 class="event-title teaser-title block-list-item-heading">
                          <a href="events.php#">
                            Seventh Meeting of WRC-15 Advisory Committee
                          </a>
                        </h3>
                        <p class="block-list-item-text">
                          Room TW-C305, 445 12th Street S.W., Washington, DC 11:00am – 12:00pm
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <h3 class="event-list-divider"><span class="divider-year">2015</span></h3>
              <ul class="block-list">
                <li class="block-list-item">
                  <div class="block block-event-teaser block-event-teaser-lg list-block block-list-item">
                    <div class="block-content">
                      <div class="event-date-info">
                        <span class="event-month">Jan</span>
                        <span class="event-date">29</span>
                        <div class="block-actions">
                          <a class="btn btn-primary">
                            Event Details
                          </a>
                        </div>
                      </div>
                      <div class="event-info">
                        <h3 class="event-title teaser-title block-list-item-heading">
                          <a href="events.php#">
                            January 2015 Open Commission Meeting
                          </a>
                        </h3>
                        <p class="block-list-item-text">
                          Room TW-C305, 445 12th Street S.W., Washington, DC 10:30am – 2:00pm
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="block-list-item">
                  <div class="block block-event-teaser block-event-teaser-lg list-block block-list-item">
                    <div class="block-content">
                      <div class="event-date-info">
                        <span class="event-month">Feb</span>
                        <span class="event-date">26</span>
                        <div class="block-actions">
                          <a class="btn btn-primary">
                            Event Details
                          </a>
                        </div>
                      </div>
                      <div class="event-info">
                        <h3 class="event-title teaser-title block-list-item-heading">
                          <a href="events.php#">
                            February 2015 Open Commission Meeting
                          </a>
                        </h3>
                        <p class="block-list-item-text">
                          Room TW-C305, 445 12th Street S.W., Washington, DC 10:30am – 2:00pm
                        </p>
                        <span class="event-live-label">
                          <span class="visible-xs-inline-block video-icon" aria-hidden="true"></span>
                          <span class="visible-xs-inline-block">Live Event</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="block-list-item">
                  <div class="block block-event-teaser block-event-teaser-lg list-block block-list-item">
                    <div class="block-content">
                      <div class="event-date-info">
                        <span class="event-month">Mar</span>
                        <span class="event-date">26</span>
                        <div class="block-actions">
                          <a class="btn btn-primary">
                            Event Details
                          </a>
                        </div>
                      </div>
                      <div class="event-info">
                        <h3 class="event-title teaser-title block-list-item-heading">
                          <a href="events.php#">
                            March 2015 Open Commission Meeting
                          </a>
                        </h3>
                        <p class="block-list-item-text">
                          Room TW-C305, 445 12th Street S.W., Washington, DC 10:30am – 2:00pm
                        </p>
                        <span class="event-live-label">
                          <span class="visible-xs-inline-block video-icon" aria-hidden="true"></span>
                          <span class="label-text">Live Event</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="block-list-item">
                  <div class="block block-event-teaser block-event-teaser-lg list-block block-list-item">
                    <div class="block-content">
                      <div class="event-date-info">
                        <span class="event-month">Apr</span>
                        <span class="event-date">24</span>
                        <div class="block-actions">
                          <a class="btn btn-primary">
                            Event Details
                          </a>
                        </div>
                      </div>
                      <div class="event-info">
                        <h3 class="event-title teaser-title block-list-item-heading">
                          <a href="events.php#">
                            April 2015 Open Commission Meeting
                          </a>
                        </h3>
                        <p class="block-list-item-text">
                          Room TW-C305, 445 12th Street S.W., Washington, DC 10:30am – 2:00pm
                        </p>
                        <span class="event-live-label">
                          <span class="visible-xs-inline-block video-icon" aria-hidden="true"></span>
                          <span class="label-text">Live Event</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="block-list-item">
                  <div class="block block-event-teaser block-event-teaser-lg list-block block-list-item">
                    <div class="block-content">
                      <div class="event-date-info">
                        <span class="event-month">May</span>
                        <span class="event-date">21</span>
                        <div class="block-actions">
                          <a class="btn btn-primary">
                            Event Details
                          </a>
                        </div>
                      </div>
                      <div class="event-info">
                        <h3 class="event-title teaser-title block-list-item-heading">
                          <a href="events.php#">
                            May 2015 Open Commission Meeting
                          </a>
                        </h3>
                        <p class="block-list-item-text">
                          Room TW-C305, 445 12th Street S.W., Washington, DC 10:30am – 2:00pm
                        </p>
                        <span class="event-live-label">
                          <span class="visible-xs-inline-block video-icon" aria-hidden="true"></span>
                          <span class="label-text">Live Event</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="block-list-item">
                  <div class="block block-event-teaser block-event-teaser-lg list-block block-list-item">
                    <div class="block-content">
                      <div class="event-date-info">
                        <span class="event-month">Jun</span>
                        <span class="event-date">18</span>
                        <div class="block-actions">
                          <a class="btn btn-primary">
                            Event Details
                          </a>
                        </div>
                      </div>
                      <div class="event-info">
                        <h3 class="event-title teaser-title block-list-item-heading">
                          <a href="events.php#">
                            June 2015 Open Commission Meeting
                          </a>
                        </h3>
                        <p class="block-list-item-text">
                          Room TW-C305, 445 12th Street S.W., Washington, DC 10:30am – 2:00pm
                        </p>
                        <span class="event-live-label">
                          <span class="visible-xs-inline-block video-icon" aria-hidden="true"></span>
                          <span class="label-text">Live Event</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="block-list-item">
                  <div class="block block-event-teaser block-event-teaser-lg list-block block-list-item">
                    <div class="block-content">
                      <div class="event-date-info">
                        <span class="event-month">Jul</span>
                        <span class="event-date">16</span>
                        <div class="block-actions">
                          <a class="btn btn-primary">
                            Event Details
                          </a>
                        </div>
                      </div>
                      <div class="event-info">
                        <h3 class="event-title teaser-title block-list-item-heading">
                          <a href="events.php#">
                            July 2015 Open Commission Meeting
                          </a>
                        </h3>
                        <p class="block-list-item-text">
                          Room TW-C305, 445 12th Street S.W., Washington, DC 10:30am – 2:00pm
                        </p>
                        <span class="event-live-label">
                          <span class="visible-xs-inline-block video-icon" aria-hidden="true"></span>
                          <span class="label-text">Live Event</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="block-list-item">
                  <div class="block block-event-teaser block-event-teaser-lg list-block block-list-item">
                    <div class="block-content">
                      <div class="event-date-info">
                        <span class="event-month">Aug</span>
                        <span class="event-date">06</span>
                        <div class="block-actions">
                          <a class="btn btn-primary">
                            Event Details
                          </a>
                        </div>
                      </div>
                      <div class="event-info">
                        <h3 class="event-title teaser-title block-list-item-heading">
                          <a href="events.php#">
                            August 2015 Open Commission Meeting
                          </a>
                        </h3>
                        <p class="block-list-item-text">
                          Room TW-C305, 445 12th Street S.W., Washington, DC 10:30am – 2:00pm
                        </p>
                        <span class="event-live-label">
                          <span class="visible-xs-inline-block video-icon" aria-hidden="true"></span>
                          <span class="label-text">Live Event</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="block-list-item">
                  <div class="block block-event-teaser block-event-teaser-lg list-block block-list-item">
                    <div class="block-content">
                      <div class="event-date-info">
                        <span class="event-month">Sept</span>
                        <span class="event-date">17</span>
                        <div class="block-actions">
                          <a class="btn btn-primary">
                            Event Details
                          </a>
                        </div>
                      </div>
                      <div class="event-info">
                        <h3 class="event-title teaser-title block-list-item-heading">
                          <a href="events.php#">
                            September 2015 Open Commission Meeting
                          </a>
                        </h3>
                        <p class="block-list-item-text">
                          Room TW-C305, 445 12th Street S.W., Washington, DC 10:30am – 2:00pm
                        </p>
                        <span class="event-live-label">
                          <span class="visible-xs-inline-block video-icon" aria-hidden="true"></span>
                          <span class="label-text">Live Event</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="block-list-item">
                  <div class="block block-event-teaser block-event-teaser-lg list-block block-list-item">
                    <div class="block-content">
                      <div class="event-date-info">
                        <span class="event-month">Oct</span>
                        <span class="event-date">22</span>
                        <div class="block-actions">
                          <a class="btn btn-primary">
                            Event Details
                          </a>
                        </div>
                      </div>
                      <div class="event-info">
                        <h3 class="event-title teaser-title block-list-item-heading">
                          <a href="events.php#">
                            October 2015 Open Commission Meeting
                          </a>
                        </h3>
                        <p class="block-list-item-text">
                          Room TW-C305, 445 12th Street S.W., Washington, DC 10:30am – 2:00pm
                        </p>
                        <span class="event-live-label">
                          <span class="visible-xs-inline-block video-icon" aria-hidden="true"></span>
                          <span class="label-text">Live Event</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="block-list-item">
                  <div class="block block-event-teaser block-event-teaser-lg list-block block-list-item">
                    <div class="block-content">
                      <div class="event-date-info">
                        <span class="event-month">Nov</span>
                        <span class="event-date">19</span>
                        <div class="block-actions">
                          <a class="btn btn-primary">
                            Event Details
                          </a>
                        </div>
                      </div>
                      <div class="event-info">
                        <h3 class="event-title teaser-title block-list-item-heading">
                          <a href="events.php#">
                            November 2015 Open Commission Meeting
                          </a>
                        </h3>
                        <p class="block-list-item-text">
                          Room TW-C305, 445 12th Street S.W., Washington, DC 10:30am – 2:00pm
                        </p>
                        <span class="event-live-label">
                          <span class="visible-xs-inline-block video-icon" aria-hidden="true"></span>
                          <span class="label-text">Live Event</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="block-list-item">
                  <div class="block block-event-teaser block-event-teaser-lg list-block block-list-item">
                    <div class="block-content">
                      <div class="event-date-info">
                        <span class="event-month">Dec</span>
                        <span class="event-date">17</span>
                        <div class="block-actions">
                          <a class="btn btn-primary">
                            Event Details
                          </a>
                        </div>
                      </div>
                      <div class="event-info">
                        <h3 class="event-title teaser-title block-list-item-heading">
                          <a href="events.php#">
                            December 2015 Open Commission Meeting
                          </a>
                        </h3>
                        <p class="block-list-item-text">
                          Room TW-C305, 445 12th Street S.W., Washington, DC 10:30am – 2:00pm
                        </p>
                        <span class="event-live-label">
                          <span class="visible-xs-inline-block video-icon" aria-hidden="true"></span>
                          <span class="label-text">Live Event</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <nav>
  <div class="pagination-container">
    <ul class="pagination">
      <!-- If needed
      <li><a href="#"><span class="pagination-first hide-text">First</span></a></li>
      <li><a href="#"><span class="pagination-prev hide-text">Last</span></a></li>
      -->
      <li class="active"><span href="#">1</span></li>
      <li><a href="events.php#">2</a></li>
      <li><a href="events.php#">3</a></li>
      <li class="hidden-xs"><a href="events.php#">4</a></li>
      <li class="hidden-xs"><a href="events.php#">5</a></li>
      <li class="hidden-xs"><a href="events.php#">6</a></li>
      <li class="hidden-xs"><a href="events.php#">7</a></li>
      <li class="hidden-xs"><a href="events.php#">8</a></li>
      <li><a href="events.php#"><span class="pagination-next hide-text">Next</span></a></li>
      <li><a href="events.php#"><span class="pagination-last hide-text">Last</span></a></li>
    </ul>
  </div>
</nav>            </div><!-- .col-body -->
          </div>
        </div><!-- .tab-panel -->
        <div role="tabpanel" class="tab-pane " id="open-commission-meetings">
          <div class="row">
            <div class="col-md-8 col-md-push-4 col-sm-12 col-body col-fluid">
              <ul class="block-list">
                <li>
                  <div class="block block-box block-featured block-event-teaser block-event-teaser-lg block-event-teaser-featured list-block block-list-item">
                    <div class="block-content">
                      <div class="event-info">
                        <h3 class="event-title teaser-title block-list-item-heading">
                          <a href="events.php#">
                            Next Open Commission Meeting
                          </a>
                        </h3>
                        <p class="block-list-item-text">
                          December 11, 2014<span class="hidden-xs"> |</span> 10:30am – 2:00pm
                        </p>
                      </div>
                      <div class="block-actions hidden-xs">
                        <a class="btn btn-primary">
                          Details
                        </a>
                      </div>
                      <div class="block-actions visible-xs">
                        <a class="btn btn-primary">
                          Event Details
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="block block-archived-year">
                <div class="block-header">
                  <h2 class="block-title">2014</h2>
                </div>
                <div class="block-content content-flush">
                  <div class="row">
                    <div class="col-sm-4">
                      <ul class="list-unstyled">
                        <li><a href="events.php#">January 30, 2014</a></li>
                        <li><a href="events.php#">February 20, 2014</a></li>
                        <li><a href="events.php#">March 31, 2014</a></li>
                        <li><a href="events.php#">April 23, 2014</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <ul class="list-unstyled">
                        <li><a href="events.php#">May 15, 2014</a></li>
                        <li><a href="events.php#">June 13, 2014</a></li>
                        <li><a href="events.php#">July 11, 2014</a></li>
                        <li><a href="events.php#">August 8, 2014</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <ul class="list-unstyled">
                        <li><a href="events.php#">September 30, 2014</a></li>
                        <li><a href="events.php#">October 17, 2014</a></li>
                        <li><a href="events.php#">November 21, 2014</a></li>
                        <li><a href="events.php#">December 11, 2014</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block block-archived-year">
                <div class="block-header">
                  <h2 class="block-title">2015</h2>
                </div>
                <div class="block-content content-flush">
                  <div class="row">
                    <div class="col-sm-4">
                      <ul class="list-unstyled">
                        <li><a href="events.php#">January 29, 2015</a></li>
                        <li><a href="events.php#">February 26, 2015</a></li>
                        <li><a href="events.php#">March 26, 2015</a></li>
                        <li><a href="events.php#">April 24, 2015</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <ul class="list-unstyled">
                        <li><a href="events.php#">May 21, 2015</a></li>
                        <li><a href="events.php#">June 18, 2015</a></li>
                        <li><a href="events.php#">July 16, 2015</a></li>
                        <li><a href="events.php#">August 6, 2015</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <ul class="list-unstyled">
                        <li><a href="events.php#">September 17, 2015</a></li>
                        <li><a href="events.php#">October 22, 2015</a></li>
                        <li><a href="events.php#">November 19, 2015</a></li>
                        <li><a href="events.php#">December 17, 2015</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- .col-body -->
            <div class="col-md-3 col-md-pull-8 hidden-sm hidden-xs col-sidebar col-fluid">
              <form class="form form-filter form-filter-events">
                <h3 class="form-heading">Archived Meetings:</h3>
                <div class="form-group form-group-year">
                  <label class="sr-only" for="filter-year">Archived Meeting Year</label>
                  <select class="input-md form-filter-year selectpicker" data-size="6" id="filter-year">
                    <option value="all">year</option>
                                          <option value="2014">2014</option>
                                          <option value="2013">2013</option>
                                          <option value="2012">2012</option>
                                          <option value="2011">2011</option>
                                          <option value="2010">2010</option>
                                          <option value="2009">2009</option>
                                          <option value="2008">2008</option>
                                          <option value="2007">2007</option>
                                          <option value="2006">2006</option>
                                          <option value="2005">2005</option>
                                          <option value="2004">2004</option>
                                          <option value="2003">2003</option>
                                          <option value="2002">2002</option>
                                          <option value="2001">2001</option>
                                          <option value="2000">2000</option>
                                      </select>
                </div><!-- /input-group -->
              </form>
            </div><!-- .col-sidebar -->
          </div>
        </div><!-- .tab-panel -->
      </div><!-- .tab-content -->
    </div>
  </section><!-- .section-primary -->

  <!-- 

  <div role="tabpanel" class="tab-pane" id="open-commission-meetings">
                
              </div>

              -->

</div>    	<footer class="page-footer">
		<div class="container">
			<div class="footer-content">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="row">
							<div class="col-md-12 col-sm-6">
								<address class="contact-info">
									Federal Communications Commission <br>
									445 12th Street SW, Washington, DC 20554 <br>
								</address>
								<ul class="contact-info contact-phone">
									<li>
										<a class="phone-link" href="tel:+18882255322">Phone: 1-888-225-5322</a>
									</li>
									<li>
										<a class="phone-link" href="tel:+18888355322">TTY: 1-888-835-5322</a>
									</li>
									<li>
										<a class="phone-link" href="tel:+18884185322">Fax: 1-866-418-0232</a>
									</li>
								</ul>
								<a class="contact-link btn-mobile" href="events.php#">
									Contact Us
								</a>
								<ul class="footer-links social-media-links">
	<li>
		<a class="social-media twitter" href="events.php#" title="">
			Twitter
		</a>
	</li>
	<li>
		<a class="social-media facebook" href="events.php#" title="">
			Facebook
		</a>
	</li>
	<li>
		<a class="social-media youtube" href="events.php#" title="">
			Youtube
		</a>
	</li>
	<li>
		<a class="social-media flickr" href="events.php#" title="">
			Flickr
		</a>
	</li>
</ul>							</div>
							<div class="col-md-12 col-sm-6">
								<span class="fcc-seal hide-text">
									Federal Communications Commission
								</span>
							</div>
						</div>
					</div>
					<div class="col-md-8 visible-md-block visible-lg-block">
						<div class="row">
							<div class="col-xs-4">
								<ul class="footer-links footer-links-sitemap">
	<li>
		<a href="events.php#">Privacy Policy</a>
	</li>
	<li>
		<a href="events.php#">Moderation Policy</a>
	</li>
	<li>
		<a href="events.php#">Website Policies &amp; Notices</a>
	</li>
	<li>
		<a href="events.php#">Required Browser &amp; Plug-ins</a>
	</li>
	<li>
		<a href="events.php#">FOIA</a>
	</li>
	<li>
		<a href="events.php#">No Fear Act Data</a>
	</li>
	<li>
		<a href="events.php#">FCC Digital Strategy</a>
	</li>
	<li>
		<a href="events.php#">Open Government Directive</a>
	</li>
	<li>
		<a href="events.php#">Plain Writing Act</a>
	</li>
	<li>
		<a href="events.php#">2009 Recovery and Reinvestment Act</a>
	</li>
	<li>
		<a href="events.php#">RSS Feeds &amp; Email Updates</a>
	</li>
	<li>
		<a href="events.php#">Disability Rights</a>
	</li>
</ul>							</div>
							<div class="col-xs-4">
								<h4 class="footer-heading">Categories</h4>
								<ul class="footer-links footer-links-categories">
	<li>
		<a href="about.php">About the FCC</a>
	</li>
    <li>
		<a href="proceedings.php">Proceedings &amp; Actions</a>
	</li>
	<li>
		<a href="licensing.php">Licensing &amp; Databases</a>
	</li>
	<li>
		<a href="events.php#">Reports &amp; Research</a>
	</li>
	<li>
		<a href="news-events.php">News &amp; Events</a>
	</li>
	<li>
		<a href="consumer-landing.php">For Consumers</a>
	</a>
</ul>							</div>
							<div class="col-xs-4">
								<h4 class="footer-heading">Bureaus &amp; Offices</h4>
								<ul class="footer-links footer-links-bureaus-offices">
	<li>
		<a href="events.php#">Consumer</a>
	</li>
	<li>
		<a href="events.php#">Enforcement</a>
	</li>
	<li>
		<a href="events.php#">International</a>
	</li>
	<li>
		<a href="media-bureau.php">Media</a>
	</li>
	<li>
		<a href="events.php#">Public Safety</a>
	</li>
	<li>
		<a href="events.php#">Wireless</a>
	</li>
	<li>
		<a href="events.php#">Wireline</a>
	</li>
	<li>
		<a href="events.php#">Offices</a>
	</li>
</ul>							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!-- /.page -->

<!-- Mandatory for Responsive Bootstrap Toolkit to operate -->
<div class="device-xs visible-xs"></div>
<div class="device-sm visible-sm"></div>
<div class="device-md visible-md"></div>
<div class="device-lg visible-lg"></div>

<script src="js/jquery-ui.min.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap-toolkit.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/bootstrap-hover-dropdown.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.maskedinput.js"></script>
<script src="js/ie8.js"></script>
<script src="js/menus.js"></script>
<script src="js/theme.js"></script>
  </body>
</html>