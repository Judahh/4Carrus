




<!DOCTYPE html>
<html class="   ">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <title>4Carrus/Database/TagDatabaseExample/script.sql at master · Judahh/4Carrus</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="Judahh/4Carrus" name="twitter:title" /><meta content="4Carrus - Website" name="twitter:description" /><meta content="https://avatars0.githubusercontent.com/u/3602536?s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars0.githubusercontent.com/u/3602536?s=400" property="og:image" /><meta content="Judahh/4Carrus" property="og:title" /><meta content="https://github.com/Judahh/4Carrus" property="og:url" /><meta content="4Carrus - Website" property="og:description" />

    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />

    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="BB12AF53:303B:12868C:53744259" name="octolytics-dimension-request_id" /><meta content="6434500" name="octolytics-actor-id" /><meta content="silviomoreira" name="octolytics-actor-login" /><meta content="f7d683b00f5053094353b7bfe8dea71812c5a1e5dbcaaa22e593cdf0fa21943b" name="octolytics-actor-hash" />
    

    
    
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="4TtSAq41hxDCbNyx4VTcG4dXo//6J/v1RwxTAxKCSjp8rspSwWSQj4Z6LLune+B6q/60nvDem4mp88zqMuYbIQ==" name="csrf-token" />

    <link href="https://assets-cdn.github.com/assets/github-08eca722f10c5a963656d215e35a809b85c86d1e.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://assets-cdn.github.com/assets/github2-50bd4d5d683bdda80f061b5d079826bd642a2787.css" media="all" rel="stylesheet" type="text/css" />
    


    <meta http-equiv="x-pjax-version" content="8f882ae42120fd172a3d81adab0f2690">

      
  <meta name="description" content="4Carrus - Website" />

  <meta content="3602536" name="octolytics-dimension-user_id" /><meta content="Judahh" name="octolytics-dimension-user_login" /><meta content="19679704" name="octolytics-dimension-repository_id" /><meta content="Judahh/4Carrus" name="octolytics-dimension-repository_nwo" /><meta content="false" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="19679704" name="octolytics-dimension-repository_network_root_id" /><meta content="Judahh/4Carrus" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/Judahh/4Carrus/commits/master.atom?token=6434500__eyJzY29wZSI6IkF0b206L0p1ZGFoaC80Q2FycnVzL2NvbW1pdHMvbWFzdGVyLmF0b20iLCJleHBpcmVzIjoyOTc4MDUxMjk3fQ==--594bf70775d1b8caf60ce68b2ec5991b52614e18" rel="alternate" title="Recent Commits to 4Carrus:master" type="application/atom+xml" />

  </head>


  <body class="logged_in  env-production windows vis-private page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      <div class="header header-logged-in true">
  <div class="container clearfix">

    <a class="header-logo-invertocat" href="https://github.com/">
  <span class="mega-octicon octicon-mark-github"></span>
</a>

    
    <a href="/notifications" aria-label="You have no unread notifications" class="notification-indicator tooltipped tooltipped-s" data-hotkey="g n">
        <span class="mail-status all-read"></span>
</a>

      <div class="command-bar js-command-bar  in-repository">
          <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<div class="commandbar">
  <span class="message"></span>
  <input type="text" data-hotkey="s, /" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    data-username="silviomoreira"
      data-repo="Judahh/4Carrus"
      data-branch="master"
      data-sha="26e5a69f6e36cc09cf6c7276687b33924735d479"
  >
  <div class="display hidden"></div>
</div>

    <input type="hidden" name="nwo" value="Judahh/4Carrus" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target" role="button" aria-haspopup="true">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container" aria-hidden="true">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="help tooltipped tooltipped-s" aria-label="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
        <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
            <li><a href="https://gist.github.com">Gist</a></li>
            <li><a href="/blog">Blog</a></li>
          <li><a href="https://help.github.com">Help</a></li>
        </ul>
      </div>

    


  <ul id="user-links">
    <li>
      <a href="/silviomoreira" class="name">
        <img alt="silviomoreira" class=" js-avatar" data-user="6434500" height="20" src="https://avatars0.githubusercontent.com/u/6434500?s=140" width="20" /> silviomoreira
      </a>
    </li>

    <li class="new-menu dropdown-toggle js-menu-container">
      <a href="#" class="js-menu-target tooltipped tooltipped-s" aria-label="Create new...">
        <span class="octicon octicon-plus"></span>
        <span class="dropdown-arrow"></span>
      </a>

      <div class="new-menu-content js-menu-content">
      </div>
    </li>

    <li>
      <a href="/settings/profile" id="account_settings"
        class="tooltipped tooltipped-s"
        aria-label="Account settings (You have no verified emails)">
        <span class="octicon octicon-tools"></span>
      </a>
        <span class="octicon octicon-alert settings-warning"></span>
    </li>
    <li>
      <form class="logout-form" action="/logout" method="post">
        <button class="sign-out-button tooltipped tooltipped-s" aria-label="Sign out">
          <span class="octicon octicon-log-out"></span>
        </button>
      </form>
    </li>

  </ul>

<div class="js-new-dropdown-contents hidden">
  

<ul class="dropdown-menu">
  <li>
    <a href="/new"><span class="octicon octicon-repo-create"></span> New repository</a>
  </li>
  <li>
    <a href="/organizations/new"><span class="octicon octicon-organization"></span> New organization</a>
  </li>


    <li class="section-title">
      <span title="Judahh/4Carrus">This repository</span>
    </li>
      <li>
        <a href="/Judahh/4Carrus/issues/new"><span class="octicon octicon-issue-opened"></span> New issue</a>
      </li>
</ul>

</div>


    
  </div>
</div>

      

        

<div class="flash-global js-notice flash-warn">
<div class="container">
    <h2>
      You don't have any verified emails.  We recommend <a href="https://github.com/settings/emails">verifying</a> at least one email.
    </h2>
    <p>
      Email verification helps our support team help you in case you have any email issues or lose your password.
    </p>


















</div>
</div>


      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">

    <li class="subscription">
      <form accept-charset="UTF-8" action="/notifications/subscribe" class="js-social-container" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="VtohaokWqWftr/XEwGNheofo6Uh7Bdr5VUycnWrKmd37kumKBnbkGJfp8KOjdF4NQQJkZQJXG5WsahgOoQRawQ==" /></div>  <input id="repository_id" name="repository_id" type="hidden" value="19679704" />

    <div class="select-menu js-menu-container js-select-menu">
      <a class="social-count js-social-count" href="/Judahh/4Carrus/watchers">
        3
      </a>
      <span class="minibutton select-menu-button with-count js-menu-target" role="button" tabindex="0" aria-haspopup="true">
        <span class="js-select-button">
          <span class="octicon octicon-eye-unwatch"></span>
          Unwatch
        </span>
      </span>

      <div class="select-menu-modal-holder">
        <div class="select-menu-modal subscription-menu-modal js-menu-content" aria-hidden="true">
          <div class="select-menu-header">
            <span class="select-menu-title">Notification status</span>
            <span class="octicon octicon-remove-close js-menu-close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-list js-navigation-container" role="menu">

            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_included" name="do" type="radio" value="included" />
                <h4>Not watching</h4>
                <span class="description">You only receive notifications for conversations in which you participate or are @mentioned.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-watch"></span>
                  Watch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input checked="checked" id="do_subscribed" name="do" type="radio" value="subscribed" />
                <h4>Watching</h4>
                <span class="description">You receive notifications for all conversations in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-unwatch"></span>
                  Unwatch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_ignore" name="do" type="radio" value="ignore" />
                <h4>Ignoring</h4>
                <span class="description">You do not receive any notifications for conversations in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-mute"></span>
                  Stop ignoring
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

</form>
    </li>

  <li>
  

  <div class="js-toggler-container js-social-container starring-container ">

    <form accept-charset="UTF-8" action="/Judahh/4Carrus/unstar" class="js-toggler-form starred" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="y/P2GKQZgfncYS4gv29pHwM2fPwEfnCK6CAUy9p0GsJuKvE3MJBvdo2bVixArW/1RhsOMe1MUKfbI5GPYgjQMQ==" /></div>
      <button
        class="minibutton with-count js-toggler-target star-button"
        aria-label="Unstar this repository" title="Unstar Judahh/4Carrus">
        <span class="octicon octicon-star-delete"></span><span class="text">Unstar</span>
      </button>
        <a class="social-count js-social-count" href="/Judahh/4Carrus/stargazers">
          0
        </a>
</form>
    <form accept-charset="UTF-8" action="/Judahh/4Carrus/star" class="js-toggler-form unstarred" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="EkgJRcc0W2a2QRv8f1PDKrjGFsgnO9dIW9fFjbFqX50CT7yxvLWfwiURxypoDFHbb8FwZz6BWI4ZK8B3/mcvrg==" /></div>
      <button
        class="minibutton with-count js-toggler-target star-button"
        aria-label="Star this repository" title="Star Judahh/4Carrus">
        <span class="octicon octicon-star"></span><span class="text">Star</span>
      </button>
        <a class="social-count js-social-count" href="/Judahh/4Carrus/stargazers">
          0
        </a>
</form>  </div>

  </li>


        <li>
          <a href="/Judahh/4Carrus/fork" class="minibutton with-count js-toggler-target fork-button lighter tooltipped-n" title="Fork your own copy of Judahh/4Carrus to your account" aria-label="Fork your own copy of Judahh/4Carrus to your account" rel="nofollow" data-method="post">
            <span class="octicon octicon-git-branch-create"></span><span class="text">Fork</span>
          </a>
          <a href="/Judahh/4Carrus/network" class="social-count">0</a>
        </li>


</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title private">
          <span class="repo-label"><span>private</span></span>
          <span class="mega-octicon octicon-lock"></span>
          <span class="author"><a href="/Judahh" class="url fn" itemprop="url" rel="author"><span itemprop="title">Judahh</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/Judahh/4Carrus" class="js-current-repository js-repo-home-link">4Carrus</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped tooltipped-w" aria-label="Code">
        <a href="/Judahh/4Carrus" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /Judahh/4Carrus">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped tooltipped-w" aria-label="Issues">
          <a href="/Judahh/4Carrus/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g i" data-selected-links="repo_issues /Judahh/4Carrus/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/Judahh/4Carrus/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g p" data-selected-links="repo_pulls /Judahh/4Carrus/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


        <li class="tooltipped tooltipped-w" aria-label="Wiki">
          <a href="/Judahh/4Carrus/wiki" aria-label="Wiki" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g w" data-selected-links="repo_wiki /Judahh/4Carrus/wiki">
            <span class="octicon octicon-book"></span> <span class="full-word">Wiki</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>
    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/Judahh/4Carrus/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /Judahh/4Carrus/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/Judahh/4Carrus/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /Judahh/4Carrus/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Network">
        <a href="/Judahh/4Carrus/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /Judahh/4Carrus/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=push">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/Judahh/4Carrus.git" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/Judahh/4Carrus.git" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="ssh"
  data-url="/users/set_protocol?protocol_selector=ssh&amp;protocol_type=push">
  <h3><strong>SSH</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="git@github.com:Judahh/4Carrus.git" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="git@github.com:Judahh/4Carrus.git" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=push">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/Judahh/4Carrus" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/Judahh/4Carrus" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>,
      <a href="#" class="js-clone-selector" data-protocol="ssh">SSH</a>,
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>


  <a href="github-windows://openRepo/https://github.com/Judahh/4Carrus" class="minibutton sidebar-button" title="Save Judahh/4Carrus to your computer and use it in GitHub Desktop." aria-label="Save Judahh/4Carrus to your computer and use it in GitHub Desktop.">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

                <a href="/Judahh/4Carrus/archive/master.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download Judahh/4Carrus as a zip file"
                   title="Download Judahh/4Carrus as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<a href="/Judahh/4Carrus/blob/04b4c3929e007b0d7307da8b0c38f5ef309b0201/Database/TagDatabaseExample/script.sql" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:8b201928091ce7f0bc28a2e31a75f7c1 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/Judahh/4Carrus/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Find or create a branch…" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Find or create a branch…">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Judahh/4Carrus/blob/master/Database/TagDatabaseExample/script.sql"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <form accept-charset="UTF-8" action="/Judahh/4Carrus/branches" class="js-create-branch select-menu-item select-menu-new-item-form js-navigation-item js-new-item-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="i26gGzMOnME4dTQ/JhUTdLmr/wkm9JN8acNTEEqLlj96QdYKLMtfetcdWSPIYk5AOeFK/8GRYq8ErMZR0gsp/Q==" /></div>
            <span class="octicon octicon-git-branch-create select-menu-item-icon"></span>
            <div class="select-menu-item-text">
              <h4>Create branch: <span class="js-new-item-name"></span></h4>
              <span class="description">from ‘master’</span>
            </div>
            <input type="hidden" name="name" id="name" class="js-new-item-value">
            <input type="hidden" name="branch" id="branch" value="master" />
            <input type="hidden" name="path" id="path" value="Database/TagDatabaseExample/script.sql" />
          </form> <!-- /.select-menu-item -->

      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/Judahh/4Carrus" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">4Carrus</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/Judahh/4Carrus/tree/master/Database" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">Database</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/Judahh/4Carrus/tree/master/Database/TagDatabaseExample" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">TagDatabaseExample</span></a></span><span class="separator"> / </span><strong class="final-path">script.sql</strong> <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="Database/TagDatabaseExample/script.sql" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
  </div>
</div>


  <div class="commit commit-loader file-history-tease js-deferred-content" data-url="/Judahh/4Carrus/contributors/master/Database/TagDatabaseExample/script.sql">
    Fetching contributors…

    <div class="participation">
      <p class="loader-loading"><img alt="Octocat-spinner-32-eaf2f5" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32-EAF2F5.gif" width="16" /></p>
      <p class="loader-error">Cannot retrieve contributors at this time</p>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
        <span class="meta-divider"></span>
          <span>189 lines (164 sloc)</span>
          <span class="meta-divider"></span>
        <span>8.272 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
            <a class="minibutton tooltipped tooltipped-w"
               href="github-windows://openRepo/https://github.com/Judahh/4Carrus?branch=master&amp;filepath=Database%2FTagDatabaseExample%2Fscript.sql" aria-label="Open this file in GitHub for Windows">
                <span class="octicon octicon-device-desktop"></span> Open
            </a>
                <a class="minibutton js-update-url-with-hash"
                   href="/Judahh/4Carrus/edit/master/Database/TagDatabaseExample/script.sql"
                   data-method="post" rel="nofollow" data-hotkey="e">Edit</a>
          <a href="/Judahh/4Carrus/raw/master/Database/TagDatabaseExample/script.sql" class="button minibutton " id="raw-url">Raw</a>
            <a href="/Judahh/4Carrus/blame/master/Database/TagDatabaseExample/script.sql" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/Judahh/4Carrus/commits/master/Database/TagDatabaseExample/script.sql" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->

            <a class="minibutton danger empty-icon"
               href="/Judahh/4Carrus/delete/master/Database/TagDatabaseExample/script.sql"
               data-method="post" data-test-id="delete-blob-file" rel="nofollow">

          Delete
        </a>
      </div><!-- /.actions -->
    </div>
        <div class="blob-wrapper data type-sql js-blob-data">
        <table class="file-code file-diff tab-size-8">
          <tr class="file-code-line">
            <td class="blob-line-nums">
              <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>

            </td>
            <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="k">SET</span> <span class="o">@</span><span class="n">OLD_UNIQUE_CHECKS</span><span class="o">=@@</span><span class="n">UNIQUE_CHECKS</span><span class="p">,</span> <span class="n">UNIQUE_CHECKS</span><span class="o">=</span><span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC2'><span class="k">SET</span> <span class="o">@</span><span class="n">OLD_FOREIGN_KEY_CHECKS</span><span class="o">=@@</span><span class="n">FOREIGN_KEY_CHECKS</span><span class="p">,</span> <span class="n">FOREIGN_KEY_CHECKS</span><span class="o">=</span><span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC3'><span class="k">SET</span> <span class="o">@</span><span class="n">OLD_SQL_MODE</span><span class="o">=@@</span><span class="n">SQL_MODE</span><span class="p">,</span> <span class="n">SQL_MODE</span><span class="o">=</span><span class="s1">&#39;TRADITIONAL,ALLOW_INVALID_DATES&#39;</span><span class="p">;</span></div><div class='line' id='LC4'><br/></div><div class='line' id='LC5'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC6'><span class="c1">-- Schema FourCarrusDatabase</span></div><div class='line' id='LC7'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC8'><span class="k">CREATE</span> <span class="k">SCHEMA</span> <span class="n">IF</span> <span class="k">NOT</span> <span class="k">EXISTS</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span> <span class="k">DEFAULT</span> <span class="nb">CHARACTER</span> <span class="k">SET</span> <span class="n">latin1</span> <span class="k">COLLATE</span> <span class="n">latin1_swedish_ci</span> <span class="p">;</span></div><div class='line' id='LC9'><span class="n">USE</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span> <span class="p">;</span></div><div class='line' id='LC10'><br/></div><div class='line' id='LC11'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC12'><span class="c1">-- Table `FourCarrusDatabase`.`TableTag`</span></div><div class='line' id='LC13'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC14'><span class="k">CREATE</span> <span class="k">TABLE</span> <span class="n">IF</span> <span class="k">NOT</span> <span class="k">EXISTS</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableTag</span><span class="o">`</span> <span class="p">(</span></div><div class='line' id='LC15'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerIdentificationTag</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span> <span class="n">AUTO_INCREMENT</span><span class="p">,</span></div><div class='line' id='LC16'>&nbsp;&nbsp;<span class="o">`</span><span class="n">stringName</span><span class="o">`</span> <span class="nb">VARCHAR</span><span class="p">(</span><span class="mi">50</span><span class="p">)</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC17'>&nbsp;&nbsp;<span class="o">`</span><span class="n">decimalValue</span><span class="o">`</span> <span class="nb">DECIMAL</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC18'>&nbsp;&nbsp;<span class="o">`</span><span class="n">stringEmail</span><span class="o">`</span> <span class="nb">VARCHAR</span><span class="p">(</span><span class="mi">50</span><span class="p">)</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC19'>&nbsp;&nbsp;<span class="o">`</span><span class="n">stringWebAddress</span><span class="o">`</span> <span class="nb">VARCHAR</span><span class="p">(</span><span class="mi">50</span><span class="p">)</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC20'>&nbsp;&nbsp;<span class="k">PRIMARY</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationTag</span><span class="o">`</span><span class="p">))</span></div><div class='line' id='LC21'><span class="n">ENGINE</span> <span class="o">=</span> <span class="n">InnoDB</span><span class="p">;</span></div><div class='line' id='LC22'><br/></div><div class='line' id='LC23'><br/></div><div class='line' id='LC24'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC25'><span class="c1">-- Table `FourCarrusDatabase`.`TableAutomaker`</span></div><div class='line' id='LC26'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC27'><span class="k">CREATE</span> <span class="k">TABLE</span> <span class="n">IF</span> <span class="k">NOT</span> <span class="k">EXISTS</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableAutomaker</span><span class="o">`</span> <span class="p">(</span></div><div class='line' id='LC28'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerIdentificationAutomaker</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span> <span class="n">AUTO_INCREMENT</span><span class="p">,</span></div><div class='line' id='LC29'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeyEnterprice</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC30'>&nbsp;&nbsp;<span class="k">PRIMARY</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationAutomaker</span><span class="o">`</span><span class="p">))</span></div><div class='line' id='LC31'><span class="n">ENGINE</span> <span class="o">=</span> <span class="n">InnoDB</span><span class="p">;</span></div><div class='line' id='LC32'><br/></div><div class='line' id='LC33'><br/></div><div class='line' id='LC34'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC35'><span class="c1">-- Table `FourCarrusDatabase`.`TableDealership`</span></div><div class='line' id='LC36'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC37'><span class="k">CREATE</span> <span class="k">TABLE</span> <span class="n">IF</span> <span class="k">NOT</span> <span class="k">EXISTS</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableDealership</span><span class="o">`</span> <span class="p">(</span></div><div class='line' id='LC38'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerIdentificationDealership</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span> <span class="n">AUTO_INCREMENT</span><span class="p">,</span></div><div class='line' id='LC39'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeyEnterprice</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC40'>&nbsp;&nbsp;<span class="k">PRIMARY</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationDealership</span><span class="o">`</span><span class="p">))</span></div><div class='line' id='LC41'><span class="n">ENGINE</span> <span class="o">=</span> <span class="n">InnoDB</span><span class="p">;</span></div><div class='line' id='LC42'><br/></div><div class='line' id='LC43'><br/></div><div class='line' id='LC44'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC45'><span class="c1">-- Table `FourCarrusDatabase`.`TableStore`</span></div><div class='line' id='LC46'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC47'><span class="k">CREATE</span> <span class="k">TABLE</span> <span class="n">IF</span> <span class="k">NOT</span> <span class="k">EXISTS</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableStore</span><span class="o">`</span> <span class="p">(</span></div><div class='line' id='LC48'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerIdentificationStore</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span> <span class="n">AUTO_INCREMENT</span><span class="p">,</span></div><div class='line' id='LC49'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeyTagBasicInformationStore</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC50'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeyDealership</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC51'>&nbsp;&nbsp;<span class="o">`</span><span class="n">stringStoreName</span><span class="o">`</span> <span class="nb">VARCHAR</span><span class="p">(</span><span class="mi">50</span><span class="p">)</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC52'>&nbsp;&nbsp;<span class="k">PRIMARY</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationStore</span><span class="o">`</span><span class="p">),</span></div><div class='line' id='LC53'>&nbsp;&nbsp;<span class="k">INDEX</span> <span class="o">`</span><span class="n">integerForeignKeyDealershipIndex</span><span class="o">`</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeyDealership</span><span class="o">`</span> <span class="k">ASC</span><span class="p">),</span></div><div class='line' id='LC54'>&nbsp;&nbsp;<span class="k">CONSTRAINT</span> <span class="o">`</span><span class="n">integerForeignKeyDealership</span><span class="o">`</span></div><div class='line' id='LC55'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">FOREIGN</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeyDealership</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC56'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">REFERENCES</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableDealership</span><span class="o">`</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationDealership</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC57'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">DELETE</span> <span class="k">NO</span> <span class="n">ACTION</span></div><div class='line' id='LC58'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">UPDATE</span> <span class="k">NO</span> <span class="n">ACTION</span><span class="p">)</span></div><div class='line' id='LC59'><span class="n">ENGINE</span> <span class="o">=</span> <span class="n">InnoDB</span><span class="p">;</span></div><div class='line' id='LC60'><br/></div><div class='line' id='LC61'><br/></div><div class='line' id='LC62'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC63'><span class="c1">-- Table `FourCarrusDatabase`.`TableModel`</span></div><div class='line' id='LC64'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC65'><span class="k">CREATE</span> <span class="k">TABLE</span> <span class="n">IF</span> <span class="k">NOT</span> <span class="k">EXISTS</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableModel</span><span class="o">`</span> <span class="p">(</span></div><div class='line' id='LC66'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerIdentificationModel</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span> <span class="n">AUTO_INCREMENT</span><span class="p">,</span></div><div class='line' id='LC67'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeyTagBasicInformationModel</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC68'>&nbsp;&nbsp;<span class="o">`</span><span class="n">stringModelName</span><span class="o">`</span> <span class="nb">VARCHAR</span><span class="p">(</span><span class="mi">50</span><span class="p">)</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC69'>&nbsp;&nbsp;<span class="o">`</span><span class="n">stringVehicleType</span><span class="o">`</span> <span class="nb">VARCHAR</span><span class="p">(</span><span class="mi">50</span><span class="p">)</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC70'>&nbsp;&nbsp;<span class="k">PRIMARY</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationModel</span><span class="o">`</span><span class="p">))</span></div><div class='line' id='LC71'><span class="n">ENGINE</span> <span class="o">=</span> <span class="n">InnoDB</span><span class="p">;</span></div><div class='line' id='LC72'><br/></div><div class='line' id='LC73'><br/></div><div class='line' id='LC74'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC75'><span class="c1">-- Table `FourCarrusDatabase`.`TableSubModel`</span></div><div class='line' id='LC76'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC77'><span class="k">CREATE</span> <span class="k">TABLE</span> <span class="n">IF</span> <span class="k">NOT</span> <span class="k">EXISTS</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableSubModel</span><span class="o">`</span> <span class="p">(</span></div><div class='line' id='LC78'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerIdentificationSubModel</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span> <span class="n">AUTO_INCREMENT</span><span class="p">,</span></div><div class='line' id='LC79'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeyTagBasicInformationSubModel</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC80'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeyModel</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC81'>&nbsp;&nbsp;<span class="o">`</span><span class="n">stringSubModelName</span><span class="o">`</span> <span class="nb">VARCHAR</span><span class="p">(</span><span class="mi">50</span><span class="p">)</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC82'>&nbsp;&nbsp;<span class="k">PRIMARY</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationSubModel</span><span class="o">`</span><span class="p">),</span></div><div class='line' id='LC83'>&nbsp;&nbsp;<span class="k">INDEX</span> <span class="o">`</span><span class="n">integerForeignKeyModelIndex</span><span class="o">`</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeyModel</span><span class="o">`</span> <span class="k">ASC</span><span class="p">),</span></div><div class='line' id='LC84'>&nbsp;&nbsp;<span class="k">CONSTRAINT</span> <span class="o">`</span><span class="n">integerForeignKeyModel</span><span class="o">`</span></div><div class='line' id='LC85'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">FOREIGN</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeyModel</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC86'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">REFERENCES</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableModel</span><span class="o">`</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationModel</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC87'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">DELETE</span> <span class="k">NO</span> <span class="n">ACTION</span></div><div class='line' id='LC88'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">UPDATE</span> <span class="k">NO</span> <span class="n">ACTION</span><span class="p">)</span></div><div class='line' id='LC89'><span class="n">ENGINE</span> <span class="o">=</span> <span class="n">InnoDB</span><span class="p">;</span></div><div class='line' id='LC90'><br/></div><div class='line' id='LC91'><br/></div><div class='line' id='LC92'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC93'><span class="c1">-- Table `FourCarrusDatabase`.`TableVehicle`</span></div><div class='line' id='LC94'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC95'><span class="k">CREATE</span> <span class="k">TABLE</span> <span class="n">IF</span> <span class="k">NOT</span> <span class="k">EXISTS</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableVehicle</span><span class="o">`</span> <span class="p">(</span></div><div class='line' id='LC96'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerIdentificationVehicle</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span> <span class="n">AUTO_INCREMENT</span><span class="p">,</span></div><div class='line' id='LC97'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeyTagBasicInformationVehicle</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC98'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeySubModel</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC99'>&nbsp;&nbsp;<span class="k">PRIMARY</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationVehicle</span><span class="o">`</span><span class="p">))</span></div><div class='line' id='LC100'><span class="n">ENGINE</span> <span class="o">=</span> <span class="n">InnoDB</span><span class="p">;</span></div><div class='line' id='LC101'><br/></div><div class='line' id='LC102'><br/></div><div class='line' id='LC103'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC104'><span class="c1">-- Table `FourCarrusDatabase`.`TableVehicleInstace`</span></div><div class='line' id='LC105'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC106'><span class="k">CREATE</span> <span class="k">TABLE</span> <span class="n">IF</span> <span class="k">NOT</span> <span class="k">EXISTS</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableVehicleInstace</span><span class="o">`</span> <span class="p">(</span></div><div class='line' id='LC107'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerIdentificationVehicleInstance</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span> <span class="n">AUTO_INCREMENT</span><span class="p">,</span></div><div class='line' id='LC108'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeyTagBasicInformationVehicleInstance</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC109'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeyStore</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC110'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeyVehicle</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC111'>&nbsp;&nbsp;<span class="k">PRIMARY</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationVehicleInstance</span><span class="o">`</span><span class="p">),</span></div><div class='line' id='LC112'>&nbsp;&nbsp;<span class="k">INDEX</span> <span class="o">`</span><span class="n">integerForeignKeyStoreIndex</span><span class="o">`</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeyStore</span><span class="o">`</span> <span class="k">ASC</span><span class="p">),</span></div><div class='line' id='LC113'>&nbsp;&nbsp;<span class="k">INDEX</span> <span class="o">`</span><span class="n">integerForeignKeyVehicleIndex</span><span class="o">`</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeyVehicle</span><span class="o">`</span> <span class="k">ASC</span><span class="p">),</span></div><div class='line' id='LC114'>&nbsp;&nbsp;<span class="k">CONSTRAINT</span> <span class="o">`</span><span class="n">integerForeignKeyStore</span><span class="o">`</span></div><div class='line' id='LC115'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">FOREIGN</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeyStore</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC116'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">REFERENCES</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableStore</span><span class="o">`</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationStore</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC117'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">DELETE</span> <span class="k">NO</span> <span class="n">ACTION</span></div><div class='line' id='LC118'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">UPDATE</span> <span class="k">NO</span> <span class="n">ACTION</span><span class="p">,</span></div><div class='line' id='LC119'>&nbsp;&nbsp;<span class="k">CONSTRAINT</span> <span class="o">`</span><span class="n">integerForeignKeyVehicle</span><span class="o">`</span></div><div class='line' id='LC120'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">FOREIGN</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeyVehicle</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC121'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">REFERENCES</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableVehicle</span><span class="o">`</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationVehicle</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC122'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">DELETE</span> <span class="k">NO</span> <span class="n">ACTION</span></div><div class='line' id='LC123'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">UPDATE</span> <span class="k">NO</span> <span class="n">ACTION</span><span class="p">)</span></div><div class='line' id='LC124'><span class="n">ENGINE</span> <span class="o">=</span> <span class="n">InnoDB</span><span class="p">;</span></div><div class='line' id='LC125'><br/></div><div class='line' id='LC126'><br/></div><div class='line' id='LC127'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC128'><span class="c1">-- Table `FourCarrusDatabase`.`TableTagRelationType`</span></div><div class='line' id='LC129'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC130'><span class="k">CREATE</span> <span class="k">TABLE</span> <span class="n">IF</span> <span class="k">NOT</span> <span class="k">EXISTS</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableTagRelationType</span><span class="o">`</span> <span class="p">(</span></div><div class='line' id='LC131'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerIdentificationTagRelationType</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span> <span class="n">AUTO_INCREMENT</span><span class="p">,</span></div><div class='line' id='LC132'>&nbsp;&nbsp;<span class="o">`</span><span class="n">stringTagRelationType</span><span class="o">`</span> <span class="nb">VARCHAR</span><span class="p">(</span><span class="mi">50</span><span class="p">)</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC133'>&nbsp;&nbsp;<span class="k">PRIMARY</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationTagRelationType</span><span class="o">`</span><span class="p">))</span></div><div class='line' id='LC134'><span class="n">ENGINE</span> <span class="o">=</span> <span class="n">InnoDB</span><span class="p">;</span></div><div class='line' id='LC135'><br/></div><div class='line' id='LC136'><br/></div><div class='line' id='LC137'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC138'><span class="c1">-- Table `FourCarrusDatabase`.`TableTagRelation`</span></div><div class='line' id='LC139'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC140'><span class="k">CREATE</span> <span class="k">TABLE</span> <span class="n">IF</span> <span class="k">NOT</span> <span class="k">EXISTS</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableTagRelation</span><span class="o">`</span> <span class="p">(</span></div><div class='line' id='LC141'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeyTagFrom</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span> <span class="n">AUTO_INCREMENT</span><span class="p">,</span></div><div class='line' id='LC142'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeyTagTo</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC143'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeyTagRelationType</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC144'>&nbsp;&nbsp;<span class="k">PRIMARY</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeyTagFrom</span><span class="o">`</span><span class="p">,</span> <span class="o">`</span><span class="n">integerForeignKeyTagTo</span><span class="o">`</span><span class="p">,</span> <span class="o">`</span><span class="n">integerForeignKeyTagRelationType</span><span class="o">`</span><span class="p">),</span></div><div class='line' id='LC145'>&nbsp;&nbsp;<span class="k">INDEX</span> <span class="o">`</span><span class="n">integerForeignKeyTagToIndex</span><span class="o">`</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeyTagTo</span><span class="o">`</span> <span class="k">ASC</span><span class="p">),</span></div><div class='line' id='LC146'>&nbsp;&nbsp;<span class="k">INDEX</span> <span class="o">`</span><span class="n">integerForeignKeyTagRelationTypeIndex</span><span class="o">`</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeyTagRelationType</span><span class="o">`</span> <span class="k">ASC</span><span class="p">),</span></div><div class='line' id='LC147'>&nbsp;&nbsp;<span class="k">CONSTRAINT</span> <span class="o">`</span><span class="n">integerForeignKeyTagFrom</span><span class="o">`</span></div><div class='line' id='LC148'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">FOREIGN</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeyTagFrom</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC149'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">REFERENCES</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableTag</span><span class="o">`</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationTag</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC150'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">DELETE</span> <span class="k">NO</span> <span class="n">ACTION</span></div><div class='line' id='LC151'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">UPDATE</span> <span class="k">NO</span> <span class="n">ACTION</span><span class="p">,</span></div><div class='line' id='LC152'>&nbsp;&nbsp;<span class="k">CONSTRAINT</span> <span class="o">`</span><span class="n">integerForeignKeyTagTo</span><span class="o">`</span></div><div class='line' id='LC153'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">FOREIGN</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeyTagTo</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC154'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">REFERENCES</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableTag</span><span class="o">`</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationTag</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC155'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">DELETE</span> <span class="k">NO</span> <span class="n">ACTION</span></div><div class='line' id='LC156'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">UPDATE</span> <span class="k">NO</span> <span class="n">ACTION</span><span class="p">,</span></div><div class='line' id='LC157'>&nbsp;&nbsp;<span class="k">CONSTRAINT</span> <span class="o">`</span><span class="n">integerForeignKeyTagRelationType</span><span class="o">`</span></div><div class='line' id='LC158'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">FOREIGN</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeyTagRelationType</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC159'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">REFERENCES</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableTagRelationType</span><span class="o">`</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationTagRelationType</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC160'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">DELETE</span> <span class="k">NO</span> <span class="n">ACTION</span></div><div class='line' id='LC161'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">UPDATE</span> <span class="k">NO</span> <span class="n">ACTION</span><span class="p">)</span></div><div class='line' id='LC162'><span class="n">ENGINE</span> <span class="o">=</span> <span class="n">InnoDB</span><span class="p">;</span></div><div class='line' id='LC163'><br/></div><div class='line' id='LC164'><br/></div><div class='line' id='LC165'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC166'><span class="c1">-- Table `FourCarrusDatabase`.`TableSubModelAutomakerRelation`</span></div><div class='line' id='LC167'><span class="c1">-- -----------------------------------------------------</span></div><div class='line' id='LC168'><span class="k">CREATE</span> <span class="k">TABLE</span> <span class="n">IF</span> <span class="k">NOT</span> <span class="k">EXISTS</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableSubModelAutomakerRelation</span><span class="o">`</span> <span class="p">(</span></div><div class='line' id='LC169'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeyAutomaker</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC170'>&nbsp;&nbsp;<span class="o">`</span><span class="n">integerForeignKeySubModel</span><span class="o">`</span> <span class="nb">INT</span> <span class="k">NOT</span> <span class="k">NULL</span><span class="p">,</span></div><div class='line' id='LC171'>&nbsp;&nbsp;<span class="k">PRIMARY</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeyAutomaker</span><span class="o">`</span><span class="p">,</span> <span class="o">`</span><span class="n">integerForeignKeySubModel</span><span class="o">`</span><span class="p">),</span></div><div class='line' id='LC172'>&nbsp;&nbsp;<span class="k">INDEX</span> <span class="o">`</span><span class="n">integerForeignKeySubModelIndex</span><span class="o">`</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeySubModel</span><span class="o">`</span> <span class="k">ASC</span><span class="p">),</span></div><div class='line' id='LC173'>&nbsp;&nbsp;<span class="k">CONSTRAINT</span> <span class="o">`</span><span class="n">integerForeignKeyAutomaker</span><span class="o">`</span></div><div class='line' id='LC174'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">FOREIGN</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeyAutomaker</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC175'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">REFERENCES</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableAutomaker</span><span class="o">`</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationAutomaker</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC176'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">DELETE</span> <span class="k">NO</span> <span class="n">ACTION</span></div><div class='line' id='LC177'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">UPDATE</span> <span class="k">NO</span> <span class="n">ACTION</span><span class="p">,</span></div><div class='line' id='LC178'>&nbsp;&nbsp;<span class="k">CONSTRAINT</span> <span class="o">`</span><span class="n">integerForeignKeySubModel</span><span class="o">`</span></div><div class='line' id='LC179'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">FOREIGN</span> <span class="k">KEY</span> <span class="p">(</span><span class="o">`</span><span class="n">integerForeignKeySubModel</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC180'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">REFERENCES</span> <span class="o">`</span><span class="n">FourCarrusDatabase</span><span class="o">`</span><span class="p">.</span><span class="o">`</span><span class="n">TableSubModel</span><span class="o">`</span> <span class="p">(</span><span class="o">`</span><span class="n">integerIdentificationSubModel</span><span class="o">`</span><span class="p">)</span></div><div class='line' id='LC181'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">DELETE</span> <span class="k">NO</span> <span class="n">ACTION</span></div><div class='line' id='LC182'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">ON</span> <span class="k">UPDATE</span> <span class="k">NO</span> <span class="n">ACTION</span><span class="p">)</span></div><div class='line' id='LC183'><span class="n">ENGINE</span> <span class="o">=</span> <span class="n">InnoDB</span><span class="p">;</span></div><div class='line' id='LC184'><br/></div><div class='line' id='LC185'><br/></div><div class='line' id='LC186'><span class="k">SET</span> <span class="n">SQL_MODE</span><span class="o">=@</span><span class="n">OLD_SQL_MODE</span><span class="p">;</span></div><div class='line' id='LC187'><span class="k">SET</span> <span class="n">FOREIGN_KEY_CHECKS</span><span class="o">=@</span><span class="n">OLD_FOREIGN_KEY_CHECKS</span><span class="p">;</span></div><div class='line' id='LC188'><span class="k">SET</span> <span class="n">UNIQUE_CHECKS</span><span class="o">=@</span><span class="n">OLD_UNIQUE_CHECKS</span><span class="p">;</span></div></pre></div></td>
          </tr>
        </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.09142s from github-fe125-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close js-ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-5a921ce2c45d4a5235b8f9c5c716611df0a83a79.js" type="text/javascript"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-71380a7260f8593a61c90ab35f6f6cf70e28aaba.js" type="text/javascript"></script>
      
      
  </body>
</html>

