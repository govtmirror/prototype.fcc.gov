<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sparkexperience Template</title>
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
              <a href="rulemaking.php#browse-by-category" data-toggle="tab" aria-controls="browse-by-category">
                <div class="text-prefix">Browse by</div>
                <strong class="title-emphasis">Category</strong>
              </a>
            </li>
            <li class="">
              <a href="rulemaking.php#browse-by-location" data-toggle="tab" aria-controls="browse-by-location">
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
                <a class="dropdown-toggle active" data-hover="dropdown" href="rulemaking.php#" data-toggle="dropdown" role="button" aria-expanded="false">
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
          <a href="rulemaking.php#">Strategic Goals</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">Find People</a>
        </li>
      </ul>
      <ul class="about-fcc-links menu-col list-unstyled block-list">
        <li class="about-fcc-link col-item-first">
          <a href="rulemaking.php#">Organizational Charts</a>
        </li>
        <li class="about-fcc-link">
          <a href="advisory-landing.php">Advisory Committees</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">Jobs and Contracting</a>
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
        <a href="rulemaking.php#">
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
          <a href="rulemaking.php#">Most Active Proceedings</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">Items on Circulation</a>
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
          <a href="rulemaking.php#">Recent Releases</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">Court Filings</a>
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
        <a href="rulemaking.php#">
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
          <a href="rulemaking.php#">ASR</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">CDBS</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">COALS</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">CSRS</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">Children's Television Programming Report </a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">FRN </a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">DIRS</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">Domain Name Data Entry</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">EAFS</a>
        </li>
      </ul>
      <ul class="about-fcc-links menu-col list-unstyled block-list">
        <li class="about-fcc-link col-item-first">
          <a href="rulemaking.php#">ECFS</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">EDOCS</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">ETFS</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">OET - EAS</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">Fee Filer</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">GenMen</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">IBFS</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">LMS</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">NORS</a>
        </li>
      </ul>
      <ul class="about-fcc-links menu-col list-unstyled block-list">
        
        <li class="about-fcc-link">
          <a href="rulemaking.php#">KDB</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">OET TCB/Accreditor Filing System</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">Red Light Display (RLD) System</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">Special Access Data Collection</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">TCNS</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">TV Broadcast Station Public Inspection Files</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">ULS</a>
        </li>
      </ul>
    </div>
  </li>
</ul>              </li>
              <li role="presentation" class="dropdown dropdown-left yamm-fw">
                <a class="dropdown-toggle" data-hover="dropdown" href="rulemaking.php#" data-toggle="dropdown" role="button" aria-expanded="false">
                  <span class="link-title dropdown-link-title">Reports &amp; Research</span>
                  <span class="dropdown-link-back">Back to Categories</span>
                </a>
                <ul class="dropdown-menu dropdown-about-fcc content-flush" role="menu">
  <li>
    <div class="container">
      <ul class="about-fcc-links menu-col list-unstyled block-list">
        <li class="about-fcc-link">
          <a href="rulemaking.php#">Reports and Data Overview</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">Reports</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">Data</a>
        </li>
      </ul>
      <ul class="about-fcc-links menu-col list-unstyled block-list">
        <li class="about-fcc-link">
          <a href="rulemaking.php#">Maps</a>
        </li>
        <li class="about-fcc-link">
          <a href="rulemaking.php#">Working Papers</a>
        </li>
        <li class="about-fcc-link col-item-first">
          <a href="rulemaking.php#">For Developers</a>
        </li>
      </ul>
    </div>
    <div class="nav-right about-fcc-featured">
      <div class="about-fcc-featured-link dropdown-featured-links featured-link">
        <a href="rulemaking.php#">
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
                <a class="dropdown-toggle" data-hover="dropdown" href="news-events.php" data-toggle="dropdown" role="button" aria-expanded="false">
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
          <a href="rulemaking.php#">Headlines</a>
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
          <a href="rulemaking.php#">Social Media</a>
        </li>
      </ul>
    </div>
    <div class="nav-right about-fcc-featured">
      <div class="about-fcc-featured-link dropdown-featured-links featured-link">
        <a href="rulemaking.php#">
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
          <a href="rulemaking.php#">Consumer Complaints</a>
        </li>
        <li class="consumer-link">
          <a href="rulemaking.php#">Consumer Topics</a>
        </li>
        <li class="consumer-link">
          <a href="rulemaking.php#">Consumer Guides</a>
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
                <a href="rulemaking.php#">Consumer</a>
              </li>
              <li role="presentation">
                <a href="rulemaking.php#">Enforcement</a>
              </li>
              <li role="presentation">
                <a href="rulemaking.php#">International</a>
              </li>
              <li role="presentation">
                <a href="media-bureau.php" class="">
                  <span class="link-title">Media</span>
                </a>
              </li>
              <li role="presentation">
                <a href="rulemaking.php#">Public Safety</a>
              </li>
              <li role="presentation">
                <a href="rulemaking.php#">Wireless</a>
              </li>
              <li role="presentation">
                <a href="rulemaking.php#">Wireline</a>
              </li>
              <li role="presentation">
                <a href="rulemaking.php#">Offices</a>
              </li>
            </ul><!--.nav-tabs -->
          </div>
        </div>
      </div><!-- .secondary-menu -->
    </nav>
  </header>
    <div class="page-content page-rulemaking" role="main">

  <section class="page-header">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="rulemaking.php#">About the FCC</a></li>
      </ol>
    </div>
  </section><!-- .section-header -->

  <section class="section-primary">
    <div class="container">
      <div class="row row-fluid">
        <div class="col-md-8 col-md-push-4 col-sm-12 col-body col-fluid">
          <div class="block block-intro content-flush">
            <div class="block-header">
              <h1 class="page-title">Rulemaking Process</h1>
            </div>
            <div class="block-content">
              <p>Most FCC rules are adopted by a process known as "notice and comment" rulemaking. Under that process, the FCC gives the public notice that it is considering adopting or modifying rules on a particular subject and seeks the public's comment. The Commission considers the comments received in developing final rules.</p>
              <p>This summary of the rulemaking process is based in part on a similar summary prepared by the United States Department of Transportation. It was prepared to help the public better understand how the rulemaking process works so that members of the public may more effectively participate in it. We prepared it especially for individuals, small businesses, and others who do not participate in the process on a regular basis. We want to stress that this web page provides only a brief summary. It should not be relied on as a legal document.</p>
            </div>
          </div>
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading-1">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="rulemaking.php#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                    What is rulemaking?
                  </a>
                </h4>
              </div>
              <div id="collapse-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-1">
                <div class="panel-body">
                  <p>Rulemaking is a process for developing and issuing rules. The rulemaking process can lead to the issuance of a new rule, an amendment to an existing rule, or the repeal of an existing rule.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading-2">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="rulemaking.php#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                    What is a rule?
                  </a>
                </h4>
              </div>
              <div id="collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-2">
                <div class="panel-body">
                  <p>There are three basic types of rules. (Rules are also sometimes called “regulations”). They are:</p>
                  <ol type="a">
                  	<li><strong>Legislative (sometimes called “Substantive”) Rules.</strong> These rules create legally binding rights and obligations for the agency and the public. For example, a legislative rule might say that broadcast towers must have lights to reduce the hazard to aviation.</li>
                    <li><strong>Non-legislative Rules.</strong> These rules are of two subtypes:
                      <br/>
                      <strong>i. Interpretive Rules.</strong> As the name suggests, these rules interpret the meaning of statutes or legislative rules that the Commission administers. <br/>
                      <strong>ii. Policy Statements.</strong> These tell the public how the agency plans to exercise some discretionary power that is has. For example, a policy statement might explain the typical fines for particular violations of the Commission’s rules.</li>
<li><strong>Organizational and Procedural Rules.</strong> These rules describe the agency’s structure and the way in which its determinations are made. For example, such rules may delegate authority to make certain decisions to a particular Bureau within the Commission or set a deadline for filing comments with the Commission.
</li>
					</ol>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading-3">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="rulemaking.php#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                    What is the agency's authority to issue legislative rules?
                  </a>
                </h4>
              </div>
              <div id="collapse-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-3">
                <div class="panel-body">
                  The FCC issues a legislative rule under authority given to it by Congress in statutes. The statutory delegation of authority can range from broad discretionary authority to a very specific mandate.  For example, Congress broadly requires the FCC to grant broadcast licenses in the public interest. In contrast, Congress specifically required that the FCC complete the switch from analog to digital television broadcasting by a certain date.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading-4">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="rulemaking.php#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                    How does the agency identify the need for a rulemaking?
                  </a>
                </h4>
              </div>
              <div id="collapse-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-4">
                <div class="panel-body">
                  <p>There are many reasons why an agency may decide to initiate the rulemaking process. The reasons fit mostly in the following categories:</p>
                  <ul>
                  	<li><strong>Statutory mandate. </strong>Congress may specifically require a rule or the initiation of the rulemaking process to flesh out a statutory provision.</li>
                    <li><strong>Agency identification of a problem. </strong>An agency may itself identify a problem such as an industry behavior that adversely affects consumers. We may have difficulties enforcing existing rules and this may provide evidence of a need to modify the rules. Requests for interpretations of or exemptions from existing rules may demonstrate that a rule needs to be clarified or modified.  Or, changes in technology may suggest that it is time to update a rule.</li>
                    <li><strong>Petition for rulemaking. </strong>The public has the right to petition an agency to issue, modify, or rescind a rule, and we may agree on the need for action.</li>
                 </ul>   
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading-5">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="rulemaking.php#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                    How does an agency initially determine the best solution to a problem?
                  </a>
                </h4>
              </div>
              <div id="collapse-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-5">
                <div class="panel-body">
                  <p>Before deciding to start the rulemaking process, an agency evaluates possible alternatives. For example, we evaluate whether the problem might be fixed without the issuance of a rule. We also evaluate a range of possible substantive alternatives for fixing the problem. For example, we may consider whether there are less burdensome alternatives than prohibiting certain behaviors; we may decide that requiring the disclosure of certain information by industry would achieve the agency’s objectives.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading-6">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="rulemaking.php#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                    What are the requirements for the rulemaking process?
                  </a>
                </h4>
              </div>
              <div id="collapse-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-6">
                <div class="panel-body">
                  <p>Unless otherwise indicated, this summary describes the "notice and comment" process for issuing legislative rules (rules that create legally binding rights or obligations). The requirements for "notice and comment" generally do not apply to non-legislative, procedural or organizational rules, which the Commission may issue without notice and comment.</p>
                  <ul>
                    <li><strong>Administrative Procedure Act.</strong> The Administrative Procedure Act (APA) sets forth the basic requirements for notice and comment rulemaking (also called "nformal" rulemaking), the process generally used by agencies to issue legislative rules. Other statutes, executive orders, or agency rules impose additional requirements.</li>
                    <li><strong>NPRM.</strong> In notice-and-comment rulemaking, an agency must first issue a notice of proposed rulemaking (NPRM) and provide an opportunity for public comment on the proposal before it can issue a final rule. There are exceptions to the requirement for notice and comment. For example, notice and comment may be waived for "good cause" for such things as emergencies.<br>
                      <br>
                      The NPRM explains the need, source of authority, and reasons for the proposed rule changes. The NPRM will contain either the text of a proposed rule or a description of the subjects and issues involved. The agency's explanation of its proposal may include how the agency chose its proposed solution to the problem or alternative solutions that the agency is considering. Although the public may comment on anything in the proposal, the agency usually will include specific questions on which it particularly wants public comment and data. The NPRM also includes such information as the deadline for public comments, how and where to file comments, and people to contact for further information about the proposal.</li>
                  </ul>
                  <ul>
                    <li><strong>NPRM publication.</strong> When an agency issues an NPRM, it is normally published in the <em>Federal Register, </em>which provides online and print access to the official text of federal laws, presidential documents and agency regulations and notices. It is accessible at <a title="http://www.archives.gov/federal-register/" href="http://www.archives.gov/federal-register/" target="_blank">http://www.archives.gov/federal-register/</a>.</li>
                    <li><strong>Public comment period.</strong> Generally, the Commission will allow at least 30 days for the public to file comments on an NPRM with the Commission. Sometimes, especially for highly technical and complex matters, we provide much longer periods. We may also use shorter periods where there is a need to act quickly. The public may request more time to comment; if you provide a clear reason, that will help us make a decision on whether to extend the comment period.</li>
                    <li><strong>Public comments.</strong> The volume and length of comments received in response to an NPRM vary depending on the nature and scope of the proposed rule changes. We may receive thousands of comments or only a few, and individual comments may be hundreds of pages or only a paragraph or two.<br>
                      <br>
                      We have found that public comments can be very helpful to our decisions. The public may identify a better way for us to achieve our objective or it may point out problems with our proposal that we did not see. Our rules are improved through public participation.<br>
                      <br>
                      Sometimes, commenters say things in their comments without including data or analysis to support them. While anyone may comment, our ultimate decision has to be reasonable pursuant to the Administrative Procedure Act; we have to provide a basis for our decision and show how our rule will achieve its purpose. We have included in this document a section on how to prepare effective comments.</li>
                  </ul>
                  <ul>
                    <li><strong>Reply comments.</strong> The Commission generally permits reply comments, in which members of the public may respond to each others' initial comments. Reply comments are especially valuable because they allow the public to point out flaws in other parties' initial comments.</li>
                    <li><strong>Ex parte presentations and comments. </strong>Most rulemakings are "permit-but-disclose" proceedings. This means that the FCC allows oral and written presentations to agency decision makers in addition to initial and reply comments. Copies of any such written comments must be filed in the docket of the proceeding and any oral presentations must be reflected in a written summary filed in the docket. A separate summary of the rules governing ex parte presentationsis available at <a title="http://www.fcc.gov/ogc/xprte.html" href="http://www.fcc.gov/ogc/xprte.html" target="_blank">http://www.fcc.gov/ogc/xprte.html</a>. Some, but not all, rulemakings are considered by the Commission at its monthly public business meetings. For these matters, ex parte presentations are permitted until the start of the Sunshine Period, which begins with the issuance of a public notice one week before the public meeting at which the Commission will consider an NPRM or final rule. Unless an exemption applies, outside parties – other than members of Congress and other federal agencies – may not make presentations, oral or written, on items that will be considered at the public meeting once the Sunshine Notice is issued.</li>
                    <li><strong>Public docket.</strong> The rulemaking docket is the electronic file in which the Commission places all of the rulemaking documents it issues (e.g., the NPRM, any extensions of comment periods, and final rules), supporting documents that it prepares, and public comments, replies, and ex parte presentations related to the rulemaking. The public dockets for the FCC are maintained on the Electronic Comment Filing System (ECFS), which is accessible on the Internet at<a title="http://fjallfoss.fcc.gov/ecfs/" href="http://fjallfoss.fcc.gov/ecfs/" target="_blank">http://fjallfoss.fcc.gov/ecfs/</a>. That site is searchable by docket number, among other things, and the docket number may be found at the beginning of the NPRM.</li>
                    <li><strong>Peer review.</strong> Under a 2005 Office of Management and Budget (OMB) Bulletin, draft agency products containing important scientific (and social scientific) information should be peer reviewed by qualified specialistsin the field who were not involvedin producing the draft before it is disseminated by the federal government. The purpose of peer review is to ensure that the quality of published information meets the standards of the scientific and technical community</li>
                    <li><strong>Logical outgrowth test.</strong> The APA notice-and-comment process recognizes that changes may be made to the proposed rule based on the public comments received, but the courts have required that any changes made in the final rule be of a type that could have been reasonably anticipated by the public – a logical outgrowth of the proposal. If a change is not a logical outgrowth of the proposal in the NPRM, an agency is required to provide the public with a further opportunity for comment.</li>
                    <li><strong>The final rule.</strong> After the comment period closes and the Commission has reviewed and analyzed the comments received, we decide whether to proceed with the rulemaking we proposed, issue a new or modified proposal, or take no action on the proposal.<br>
                      <br>
                      Any final rule must include an explanatory preamble and the rule text. The preamble includes a response to the significant, relevant issues raised in public comments and a statement providing the basis and the purpose (i.e., an explanation) of the rule. The Commission is not required to respond to each commenter; similar comments may be grouped together with an opening statement such as "several commenters suggested that" or the commenters may be referred to by name.</li>
                  </ul>
                  <ul>
                    <li><strong>Final rule publication.</strong> The final rule is published in the <em>Federal Register</em> or in rare cases personally served on affected entities. In addition, a copy is placed in the rulemaking docket. The Office of the Federal Register, on a rolling, annual basis, updates the <em>Code of Federal Regulations</em> (C.F.R.), which contains the federal agency rules currently in effect. The FCC's rules are in volume 47 of the C.F.R. You can also find a current copy of the FCC's rules at <a title="http://www.archives.gov/federal-register/cfr/about.html" href="http://www.archives.gov/federal-register/cfr/about.html" target="_blank">http://www.archives.gov/federal-register/cfr/about.html</a>.</li>
                    <li><strong>Effective date.</strong> Legislative rules generally become effective at least 30 days after they are published in the <em>Federal Register</em>. This delay allows affected parties time to come into compliance with the new rules. For the same reason, agencies sometimes will set compliance dates that are later than the effective date of the rule.</li>
                    <li><strong>Reconsideration and Judicial Review.</strong> Parties who disagree with the final rules or accompanying analysis issued by the Commission may file a petition for reconsideration explaining why they believe the Commission was wrong. The Commission will then issue an order granting or denying the petition. Alternatively, as long as the Commission has addressed an issue, parties who disagree with a rule that affects them may seek court review of the decision.</li>
                    <li><strong>Waiver.</strong> Individuals or entities such as businesses can petition an agency for a full or partial exemption from a final rule or for additional time to come into compliance. We may grant a waiver request, if we find unique circumstances not considered during rulemaking that we believe justifies the waiver. We may attach conditions to the waiver.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading-7">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="rulemaking.php#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                    May an agency supplement the APA rulemaking requirements?
                  </a>
                </h4>
              </div>
              <div id="collapse-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-7">
                <div class="panel-body">
                  <p>Agencies may take steps in addition to the minimum requirements of the APA. We sometimes take these extra steps to increase or improve the opportunities for public participation and to obtain that participation very early in the development process. The principal, additional steps include the following:</p>
                  <ul>
                    <li><strong>Notices of Inquiry (NOIs). </strong>We may release an NOI prior to the issuance of an NPRM. We use them to get early public participation for a variety of reasons, including when we:
                      <ul>
                        <li>Want comments on how to solve a problem before making a proposal.</li>
                        <li>Have identified a wide range of alternatives and want to narrow the choices before making a proposal.</li>
                        <li>Need additional information to help analyze the problem and potential solutions.</li>
                      </ul>
                    </li>
                    <li><strong>Public Notices (PNs). </strong>This document may be very similar to an NOI. We often use it to get comment or data on more limited issues.</li>
                    <li><strong>Further Notices of Proposed Rulemaking (FNPRMs). </strong>We may use a FNPRM when we want public comment on a new or modified proposal. This step is especially valuable if we have concerns over whether the changes to the proposal in the NPRM could be issued as a final rule under the logical outgrowth test. Even if another round of comment on the proposals is not required, we may seek additional comments to help us further focus our decision or to address new information or changing circumstances. A PN is also sometimes used for this purpose</li>
                    <li><strong>Public meetings or hearings. </strong>We may use public meetings or hearings before or after a proposal is issued for a variety of reasons. Public meetings allow us to ask questions, and they allow for interaction among participants with different views on the issues involved. Agencies are limited by their resources in the number of hearings they can hold.</li>
                    <li><strong>Social Media. </strong>We are taking increased advantage of electronic technology to increase the opportunities for more effective public participation in rulemaking. For example, we have on occasion used blogs associated with our rulemakings to allow more interchange among commenters.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading-8">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="rulemaking.php#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                    How do I submit comments to the FCC on proposed rules?
                  </a>
                </h4>
              </div>
              <div id="collapse-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-8">
                <div class="panel-body">
                  <p>We prefer that comments be submitted electronically. We recognize, however, that not everyone has easy Internet access, so we do not require electronic submission. Accordingly, you may send comments identified by the Docket Number associated with a rulemaking using any of the following methods: (1) through the Commission's Electronic Comment Filing System (ECFS), (2) the Federal Government's eRulemaking Portal, or (3) by filing paper copies.</p>
                  <p>Please note that we generally will post all comments we receive, without change, including any personal information you provide, to ECFS. Using the search function of the docket website, anyone can find and read the electronic form of all comments received in any of our dockets, including the name of the individual sending the comment (or signing the comment for an association, business, labor union, etc.). Documents filed with a request for confidential treatment should be filed in paper format only.</p>
                  <p><strong>Electronic </strong><strong>Filers:</strong> Comments may be filed electronically using the Internet by accessing ECFS: <a title="http://fjallfoss.fcc.gov/ecfs/" href="http://fjallfoss.fcc.gov/ecfs/" target="_blank">http://fjallfoss.fcc.gov/ecfs/</a> or the Federal eRulemaking Portal:<a title="http://www.regulations.gov" href="http://www.regulations.gov/" target="_blank">http://www.regulations.gov</a>. Filers should follow the instructions provided on the website for submitting comments.  </p>
                  <ul>
                    <li>ECFS filers must transmit one electronic copy of their comments. In completing the transmittal screen, filers should include their full name, U.S. Postal Service mailing address, and the docket number.</li>
                    <li>Parties may also submit an electronic comment by e-mail. To get filing instructions, filers should send an e-mail to <a title="ecfs@fcc.gov" href="mailto:ecfs@fcc.gov" target="_blank">ecfs@fcc.gov</a> and include the following words in the body of the message, "get form." A sample form and directions will be sent in response. This option is often the easiest way to file brief comments that do not include attachments.</li>
                  </ul>
                  <p><strong>Paper Filers:</strong> Parties who choose to file by paper must file an original and one copy of each filing.  If more than one docket or rulemaking number appears in the caption of the proceeding, submit two more copies for each additional docket or rulemaking number.  Filings can be sent by hand or messenger delivery, by commercial overnight courier, or by first-class or overnight U.S. Postal Service mail.  Filings should be addressed to the Office of the Secretary, Federal Communications Commission.</p>
                  <ul>
                    <li>All hand-delivered or messenger-delivered paper filings for the Commission's Secretary must be must be delivered to FCC Headquarters at 445 12th St., SW, Room TW-A325, Washington, DC 20554. The filing hours are 8:00 a.m. to 7:00 p.m. All hand deliveries must be held together with rubber bands or fasteners. Any envelopes must be disposed of before entering the building.</li>
                    <li>Commercial overnight mail (other than U.S. Postal Service Express Mail and Priority Mail) must be sent to 9300 East Hampton Drive, Capitol Heights, MD 20743.</li>
                    <li>U.S. Postal Service first-class, Express, and Priority mail must be sent to 445 12th Street, SW, Washington DC 20554. </li>
                  </ul>
                  <p>Parties making paper filings must also serve one copy with the Commission's copy contractor, Best Copy and Printing, Inc. (BCPI), Portals II, Room CY-B402, 445 12th Street, SW, Washington, DC 20554, 202-488-5300, or via e-mail to <a title="fcc@bcpiweb.com" href="mailto:fcc@bcpiweb.com" target="_blank">fcc@bcpiweb.com</a>.</p>
                  <p>People with Disabilities:  To request materials in accessible formats for people with disabilities (braille, large print, electronic files, audio format), send an e-mail to <a title="fcc504@fcc.gov" href="mailto:fcc504@fcc.gov" target="_blank">fcc504@fcc.gov</a> or call the Consumer &amp; Governmental Affairs Bureau at 202-418-0530(voice), 202-418-0432 (tty).</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading-9">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="rulemaking.php#collapse-9" aria-expanded="false" aria-controls="collapse-9">
                    How do I get access to NPRMs, final rules, or comments filed by others?
                  </a>
                </h4>
              </div>
              <div id="collapse-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-9">
                <div class="panel-body">
                  <p>To read rulemaking documents or comments received, you may go to EDOCS <a href="http://hraunfoss.fcc.gov/edocs_public/" title="http://hraunfoss.fcc.gov/edocs_public/" target="_blank">http://hraunfoss.fcc.gov/edocs_public/</a> (for NPRMs and orders) or ECFS <a title="http://www.fcc.gov/cgb/ecfs/" href="http://www.fcc.gov/cgb/ecfs/" target="_blank">http://www.fcc.gov/cgb/ecfs/</a> (for comments and ex parte filings) at any time and follow the online instructions for accessing the docket. Documents in FCC rulemakings also will be available for public inspection and copying during business hours at the FCC Reference Information Center, Portals II, Room CY-A257, 445 12th Street, SW, Washington, DC 20554. The documents may also be purchased from the Commission's copy contractor, Best Copy and Printing, Inc. (BCPI), telephone 202-488-5300, facsimile 202-488-5563, TTY 202-488-5562, e-mail <a title="fcc@bcpiweb.com" href="mailto:fcc@bcpiweb.com" target="_blank">fcc@bcpiweb.com</a></p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading-10">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="rulemaking.php#collapse-10" aria-expanded="false" aria-controls="collapse-10">
                    How do I prepare effective comments? 
                  </a>
                </h4>
              </div>
              <div id="collapse-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-10">
                <div class="panel-body">
                  <p>We encourage you to challenge our and other commenters' factual assumptions; applications of data and research; analytical methodologies; analysis; or factual, technical, and policy conclusions.  We want you to suggest reasonable alternatives to our proposals and to the proposals of other commenters. </p>
                  <p>The following list is intended to provide helpful suggestions on how to make your comments more effective and more useful to us in crafting a well reasoned decision that is likely to be upheld by the courts.  Except for the requirement that the docket number be placed on any comments, the following suggestions are not mandatory requirements.  </p>
                  <ol type="a">
                    <li><strong>Docket ID.  </strong>You must identify the docket number for the rulemaking document on which you are commenting so that the Commission and other members of the public can place and find it in the correct file.  The docket number is provided near the very top of the NPRM.</li>
                    <li><strong>Typewritten documents.  </strong>We prefer typewritten and word-processed documents; otherwise the reviewer may not be able read your handwriting.  We do not require this, however, because we recognize that not everyone may have access to a typewriter or computer.</li>
                    <li><strong>Electronic submissions.  </strong>We prefer that comments be submitted electronically.  We recognize that everyone does not have easy Internet access, so we do not require electronic submission.</li>
                    <li><strong>Agency questions.  </strong>We want your comments on any part of the proposal on which you wish to comment.  However, we almost always ask questions or raise issues in rulemaking proposals on subjects where we especially need more information.  Please answer those questions if you have useful information on them.</li>
                    <li><strong>Organized comments</strong>.  It is helpful ifyou organize your comments by thespecific headings or by specific sections in the NPRM.  This will help the public and the agency review the comments more easily and effectively.</li>
                    <li><strong>Clear explanation and support for views.  </strong>You should explain your views and reasoning as clearly as possible; provide the basis for your assumptions; and provide supporting evidence or data, wherever possible, to support your views.  By supporting your arguments, you are more likely to persuade us to accept them.  If you do not, and we do not have separate data to support your submission, we cannot rely on it since we are required to provide the basis for our final decisions.</li>
                    <li><strong>Alternatives.  </strong>If you disagree with a proposed rule, you should provide specific alternatives to help us ensure that, if we agree with your concerns, we can effectively implement your suggestions.  In addition, you should provide an analysis of how your alternative(s) would better serve the public interest than our proposal. </li>
                    <li><strong>Examples of concerns</strong>.  You should provide specific examples to illustrate your concerns.  Real world examples or possibilities can help us better understand those concerns.</li>
                    <li><strong>Statutory limitations. </strong>In preparing your comments, you should consider the requirements and limitations of the statutory authority under which the Commission is making its proposal.  You may be objecting to a proposal over which the agency has no discretion; the agency may be required to issue a final rule with that provision.  You may also be proposing an alternative that the agency has no authority to implement.</li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading-11">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="rulemaking.php#collapse-11" aria-expanded="false" aria-controls="collapse-11">
                    What is the role of the Office of Management and Budget, the Small Business Administration, and other executive branch agencies in the rulemaking process? 
                  </a>
                </h4>
              </div>
              <div id="collapse-11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-11">
                <div class="panel-body">
                  <p>Pursuant to the Paperwork Reduction Act, the Commission must obtain approval from the Office of Information and Regulatory Affairs (OIRA) of the Office of Management and Budget (OMB) before conducting any "information collections" from 10 or more entities.  Thus if a new rule would impose an informationcollection on the public, such as by requiring a form to be filled out or certain records to be maintained, the Commission must obtain OMB approval.  This usually involves a separate notice and comment process recorded in the Federal Register.  The OMB approval process can take approximately 120 days (less under emergency circumstances). </p>
                  <p>The Small Business Administration's (SBA) Chief Counsel for Advocacy must review proposed and final rules anticipated to have a significant economic impact on a substantial number of small entities.  NPRMs and final rules generally contain a regulatory flexibility analysis for this purpose. </p>
                  <p>There are other statutes and executive orders that may require coordination with other agencies in specific circumstances.  And, coordination may be appropriate where agencies share responsibilities.  For example, on spectrum usage issues, FCC staff is in regular contact with the National Telecommunications and Information Administration (NTIA) of the United States Department of Commerce.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading-12">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="rulemaking.php#collapse-12" aria-expanded="false" aria-controls="collapse-12">
                    What is the role of Congress in the rulemaking process? 
                  </a>
                </h4>
              </div>
              <div id="collapse-12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-12">
                <div class="panel-body">
                  <p>Under the Congressional Review Act, agencies must submit final rules to Congress.   After submission, Congress can begin a process to overturn the rule.  Congress can also use a variety of processes as part of its oversight of agency action, including holding hearings, issuing reports, or adopting legislation.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading-13">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="rulemaking.php#collapse-13" aria-expanded="false" aria-controls="collapse-13">
                    What is the role of the courts in the rulemaking process?  
                  </a>
                </h4>
              </div>
              <div id="collapse-12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-12">
                <div class="panel-body">
                  <p>Under the APA, a rule can be challenged in court on the basis that it is arbitrary, capricious, an abuse of discretion; contrary to the Constitution or a statute; or the agency failed to follow required legal procedures.  Even if a court does not overturn an agency's rule for one of these reasons, it may send the matter back for further consideration or explanation by the agency.  The agency can also be sued to "compel action unlawfully withheld or unreasonably delayed."</p>
                </div>
              </div>
            </div>
          </div><!-- .panel-group -->
        </div><!-- .col-body -->
        <div class="col-md-3 col-md-pull-8 hidden-sm hidden-xs col-sidebar col-fluid">
          <div class="block block-menu block-sidebar">
  <div class="block-sidebar-inner">
    <div id="about-the-fcc-menu" class="top-level-menu active">
      <h4 class="block-header">About the FCC</h4>
      <ul class="menu menu-sidebar list-unstyled block-list">
        <li class="menu-link">
          <a href="about.php">Overview</a>
        </li>
        <li class="menu-link active">
          <a href="rulemaking.php">Rulemaking Process</a>
        </li>
        <li class="menu-link">
          <a href="leadership.php">Leadership</a>
        </li>
        <li class="menu-link">
          <a href="rulemaking.php#">Strategic Goals</a>
        </li>
        <li class="menu-link">
          <a href="rulemaking.php#">Find People</a>
        </li>
        <li class="menu-link">
          <a href="rulemaking.php#">Organizational Charts</a>
        </li>
        <li class="menu-link">
          <a href="rulemaking.php#advisory-landing-menu" class="expand-tertiary">Advisory Committees</a>
        </li>
        <li class="menu-link">
          <a href="rulemaking.php#">Jobs and Contracting</a>
        </li>
        <li class="menu-link">
          <a href="strategic-plans.php">Strategic Plans &amp; Budgets</a>
        </li>
        <li class="menu-link">
          <a href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
    <div id="advisory-landing-menu" class="top-level-menu block block-menu top-level-menu tertiary-menu">
  <a href="rulemaking.php#about-the-fcc-menu" class="back-link collapse-tertiary">back</a>
  <h4 class="block-header">Advisory Committees</h4>
  <ul class="menu menu-sidebar list-unstyled block-list">
    <li class="menu-link">
      <a href="advisory-landing.php">Overview</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">Communications Security, </br> Reliability and Interoperability </br>Council</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#advisory-committee-menu" class="expand-tertiary">Consumer Advisory Committee</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">Disability Advisory Committee</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">Federal-State Joint Conference on </br>Advanced Services</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">Intergovernmental Advisory </br>Committee</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">North American Numbering </br>Council</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">Technological Advisory Council</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">WRC-15 Advisory Committee</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">Open Internet Advisory </br>Committee</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">Diversity Federal Advisory </br>Committee</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">Emergency Access Advisory </br>Committee</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">Emergency Response </br>Interoperability Center (ERIC) </br>Technical Advisory Committee</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">Video Programming Accessibility </br>Advisory Committee</a>
    </li>
  </ul>
</div><!-- .block-menu --><div id="advisory-committee-menu" class="block block-menu tertiary-menu">
  <a href="rulemaking.php#advisory-landing-menu" class="back-link collapse-tertiary">back</a>
  <h4 class="block-header">Consumer Advisory Committee</h4>
  <ul class="menu menu-sidebar list-unstyled block-list">
    <li class="menu-link">
      <a href="advisory-committee.php">Overview</a>
    </li>
    <li class="menu-link">
      <a href="cac-7.php">CAC 7 (2012-2014)</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">CAC 6 (2010-2012)</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">CAC 5 (2008-2010)</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">CAC 4 (2006-2008)</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">CAC 3 (2004-2006)</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">CAC 2 (2002-2004)</a>
    </li>
    <li class="menu-link">
      <a href="rulemaking.php#">CAC 1 (2000-2002)</a>
    </li>
  </ul>
</div><!-- .block-menu -->  </div>
</div><!-- .block-menu -->        </div><!-- .col-sidebar -->
      </div>
    </div>
  </section><!-- .section-primary -->

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
								<a class="contact-link btn-mobile" href="rulemaking.php#">
									Contact Us
								</a>
								<ul class="footer-links social-media-links">
	<li>
		<a class="social-media twitter" href="rulemaking.php#" title="">
			Twitter
		</a>
	</li>
	<li>
		<a class="social-media facebook" href="rulemaking.php#" title="">
			Facebook
		</a>
	</li>
	<li>
		<a class="social-media youtube" href="rulemaking.php#" title="">
			Youtube
		</a>
	</li>
	<li>
		<a class="social-media flickr" href="rulemaking.php#" title="">
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
		<a href="rulemaking.php#">Privacy Policy</a>
	</li>
	<li>
		<a href="rulemaking.php#">Moderation Policy</a>
	</li>
	<li>
		<a href="rulemaking.php#">Website Policies &amp; Notices</a>
	</li>
	<li>
		<a href="rulemaking.php#">Required Browser &amp; Plug-ins</a>
	</li>
	<li>
		<a href="rulemaking.php#">FOIA</a>
	</li>
	<li>
		<a href="rulemaking.php#">No Fear Act Data</a>
	</li>
	<li>
		<a href="rulemaking.php#">FCC Digital Strategy</a>
	</li>
	<li>
		<a href="rulemaking.php#">Open Government Directive</a>
	</li>
	<li>
		<a href="rulemaking.php#">Plain Writing Act</a>
	</li>
	<li>
		<a href="rulemaking.php#">2009 Recovery and Reinvestment Act</a>
	</li>
	<li>
		<a href="rulemaking.php#">RSS Feeds &amp; Email Updates</a>
	</li>
	<li>
		<a href="rulemaking.php#">Disability Rights</a>
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
		<a href="rulemaking.php#">Reports &amp; Research</a>
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
		<a href="rulemaking.php#">Consumer</a>
	</li>
	<li>
		<a href="rulemaking.php#">Enforcement</a>
	</li>
	<li>
		<a href="rulemaking.php#">International</a>
	</li>
	<li>
		<a href="media-bureau.php">Media</a>
	</li>
	<li>
		<a href="rulemaking.php#">Public Safety</a>
	</li>
	<li>
		<a href="rulemaking.php#">Wireless</a>
	</li>
	<li>
		<a href="rulemaking.php#">Wireline</a>
	</li>
	<li>
		<a href="rulemaking.php#">Offices</a>
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