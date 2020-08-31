<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/94491a0993.js" crossorigin="anonymous"></script>
  <!-- ==============================================
  Favicons
  =============================================== -->
  <link rel="shortcut icon" href="/assets/imgs/icon/codact.png">
  <link rel="apple-touch-icon" href="/assets/imgs/icon/codact.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/imgs/icon/codact.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/imgs/icon/codact.png">

  <style media="screen">
    /*! CSS Used from: https://www.freelancerepublik.com/assets/css/app.5cbb9c31.css */
    .flash-message-list[data-v-8eeab758] {
      text-align: center;
      position: fixed;
      top: 90px;
      width: 60%;
      z-index: 999;
      right: 0;
      left: 0;
      margin-right: auto;
      margin-left: auto;
      margin-bottom: 10px;
    }

    .nav {
      position: -webkit-sticky;
      position: sticky;
      top: 0;
      width: 100%;
      z-index: 39;
    }

    #app.frk-normalizer,
    body {
      color: #4a4a4a;
      font-family: Open Sans, sans-serif;
    }

    body,
    h1 {
      margin: 0;
      padding: 0;
    }

    h1 {
      font-size: 100%;
      font-weight: 400;
    }

    * {
      -webkit-box-sizing: inherit;
      box-sizing: inherit;
    }

    :after,
    :before {
      -webkit-box-sizing: inherit;
      box-sizing: inherit;
    }

    img {
      max-width: 100%;
    }

    body {
      font-family: BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, Helvetica, Arial, sans-serif;
    }

    body {
      color: #4a4a4a;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
    }

    a {
      color: #3273dc;
      cursor: pointer;
      text-decoration: none;
    }

    a:hover {
      color: #363738;
    }

    img {
      height: auto;
      max-width: 100%;
    }

    span {
      font-style: inherit;
      font-weight: inherit;
    }

    @media screen and (max-width:1023px) {
      .is-hidden-touch {
        display: none !important;
      }
    }

    @media screen and (min-width:1024px) {
      .is-hidden-desktop {
        display: none !important;
      }
    }

    .navbar {
      background-color: #fff;
      min-height: 5rem;
      position: relative;
    }

    .navbar.is-light {
      background-color: #f5f5f5;
      color: #363738;
    }

    @media screen and (min-width:1024px) {
      .navbar.is-light .navbar-start>.navbar-item {
        color: #363738;
      }

      .navbar.is-light .navbar-start>a.navbar-item:hover {
        background-color: #e8e8e8;
        color: #363738;
      }
    }

    .navbar-menu {
      display: none;
    }

    .navbar-item {
      color: #4a4a4a;
      display: block;
      line-height: 1.5;
      padding: .5rem 1rem;
      position: relative;
    }

    a.navbar-item:hover {
      background-color: #f5f5f5;
      color: #3273dc;
    }

    .navbar-item {
      -webkit-box-flex: 0;
      -ms-flex-positive: 0;
      flex-grow: 0;
      -ms-flex-negative: 0;
      flex-shrink: 0;
    }

    .navbar-item img {
      max-height: 1.75rem;
    }

    @media screen and (max-width:1023px) {
      .navbar-menu {
        background-color: #fff;
        -webkit-box-shadow: 0 8px 16px rgba(0, 0, 0, .1);
        box-shadow: 0 8px 16px rgba(0, 0, 0, .1);
        padding: .5rem 0;
      }
    }

    @media screen and (min-width:1024px) {

      .navbar,
      .navbar-end,
      .navbar-menu,
      .navbar-start {
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
      }

      .navbar {
        min-height: 5rem;
      }

      .navbar-item {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
      }

      .navbar-menu {
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        -ms-flex-negative: 0;
        flex-shrink: 0;
      }

      .navbar-start {
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        margin-right: auto;
      }

      .navbar-end {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        margin-left: auto;
      }
    }

    .column {
      display: block;
      -ms-flex-preferred-size: 0;
      flex-basis: 0;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      -ms-flex-negative: 1;
      flex-shrink: 1;
      padding: .75rem;
    }

    @media print,
    screen and (min-width:769px) {
      .column.is-half {
        -webkit-box-flex: 0;
        -ms-flex: none;
        flex: none;
        width: 50%;
      }
    }

    .columns {
      margin-left: -.75rem;
      margin-right: -.75rem;
      margin-top: -.75rem;
    }

    .columns:last-child {
      margin-bottom: -.75rem;
    }

    @media print,
    screen and (min-width:769px) {
      .columns:not(.is-desktop) {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
      }
    }

    .frk-action-button-red {
      display: inline-block;
      border-radius: 6px;
      font-family: Circular Std, sans-serif;
      font-size: .85rem;
      font-weight: 900;
      line-height: 15px;
      padding: 18px 19px 17px 19px;
      -webkit-box-shadow: 0 3px 10px 0 rgba(0, 0, 0, .15);
      box-shadow: 0 3px 10px 0 rgba(0, 0, 0, .15);
      color: #fafafa;
      white-space: nowrap;
      -webkit-transition: background-color .5s, -webkit-box-shadow .5s, -webkit-transform .5s;
      transition: background-color .5s, -webkit-box-shadow .5s, -webkit-transform .5s;
      transition: background-color .5s, box-shadow .5s, transform .5s;
      transition: background-color .5s, box-shadow .5s, transform .5s, -webkit-box-shadow .5s, -webkit-transform .5s;
      background-color: #f2695a;
    }

    .frk-action-button-red.frk-has-arrow {
      padding-right: 45px;
      position: relative;
    }

    .frk-action-button-red.frk-has-arrow:after {
      font-family: frk-icons !important;
      font-style: normal !important;
      font-weight: 400 !important;
      font-variant: normal !important;
      text-transform: none !important;
      speak: none;
      line-height: 1;
      display: inline-block;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      position: absolute;
      line-height: 11px;
      right: 17px;
      top: 21px;
      content: "b";
    }

    .frk-action-button-red:hover:not(.frk-disabled) {
      cursor: pointer;
      color: #fafafa;
      -webkit-transform: translateY(-2px);
      transform: translateY(-2px);
      -webkit-box-shadow: 0 3px 10px 0 rgba(54, 55, 56, .3);
      box-shadow: 0 3px 10px 0 rgba(54, 55, 56, .3);
    }

    .frk-action-button-red:hover {
      background-color: #f05442;
    }

    .frk-action-button-blue {
      display: inline-block;
      border-radius: 6px;
      font-family: Circular Std, sans-serif;
      font-size: .85rem;
      font-weight: 900;
      line-height: 15px;
      padding: 18px 19px 17px 19px;
      -webkit-box-shadow: 0 3px 10px 0 rgba(0, 0, 0, .15);
      box-shadow: 0 3px 10px 0 rgba(0, 0, 0, .15);
      color: #fafafa;
      white-space: nowrap;
      -webkit-transition: background-color .5s, -webkit-box-shadow .5s, -webkit-transform .5s;
      transition: background-color .5s, -webkit-box-shadow .5s, -webkit-transform .5s;
      transition: background-color .5s, box-shadow .5s, transform .5s;
      transition: background-color .5s, box-shadow .5s, transform .5s, -webkit-box-shadow .5s, -webkit-transform .5s;
      background-color: #128dce;
    }

    .frk-action-button-blue.frk-has-arrow {
      padding-right: 45px;
      position: relative;
    }

    .frk-action-button-blue.frk-has-arrow:after {
      font-family: frk-icons !important;
      font-style: normal !important;
      font-weight: 400 !important;
      font-variant: normal !important;
      text-transform: none !important;
      speak: none;
      line-height: 1;
      display: inline-block;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      position: absolute;
      line-height: 11px;
      right: 17px;
      top: 21px;
      content: "b";
    }

    .frk-action-button-blue:hover:not(.frk-disabled) {
      cursor: pointer;
      color: #fafafa;
      -webkit-transform: translateY(-2px);
      transform: translateY(-2px);
      -webkit-box-shadow: 0 3px 10px 0 rgba(54, 55, 56, .3);
      box-shadow: 0 3px 10px 0 rgba(54, 55, 56, .3);
    }

    .frk-action-button-blue:hover:not(.frk-disabled) {
      background-color: #107db7;
    }

    .frk-action-button-red-inverted {
      display: inline-block;
      border-radius: 6px;
      font-family: Circular Std, sans-serif;
      font-size: .85rem;
      font-weight: 900;
      line-height: 15px;
      padding: 18px 19px 17px 19px;
      -webkit-box-shadow: 0 3px 10px 0 rgba(0, 0, 0, .15);
      box-shadow: 0 3px 10px 0 rgba(0, 0, 0, .15);
      color: #fafafa;
      white-space: nowrap;
      -webkit-transition: background-color .5s, -webkit-box-shadow .5s, -webkit-transform .5s;
      transition: background-color .5s, -webkit-box-shadow .5s, -webkit-transform .5s;
      transition: background-color .5s, box-shadow .5s, transform .5s;
      transition: background-color .5s, box-shadow .5s, transform .5s, -webkit-box-shadow .5s, -webkit-transform .5s;
      background-color: #fafafa;
      border: none;
      color: #f2695a;
    }

    .frk-action-button-red-inverted:hover:not(.frk-disabled) {
      cursor: pointer;
      color: #fafafa;
      -webkit-transform: translateY(-2px);
      transform: translateY(-2px);
      -webkit-box-shadow: 0 3px 10px 0 rgba(54, 55, 56, .3);
      box-shadow: 0 3px 10px 0 rgba(54, 55, 56, .3);
    }

    .frk-action-button-red-inverted:hover {
      color: #f2695a !important;
    }

    .rel {
      position: relative;
    }

    .mr-1 {
      margin-right: 1rem !important;
    }

    #header .navbar {
      position: relative;
      z-index: 2;
      padding-left: calc(50vw - 720px);
      padding-right: calc(50vw - 720px);
      min-height: 5rem;
    }

    #header .navbar .navbar-simple {
      color: #363738;
      font-family: Circular Std, sans-serif;
      font-size: .85rem;
      font-weight: 700;
      line-height: 13px;
      opacity: .7;
      background: none;
    }

    #header .navbar .navbar-simple:hover {
      opacity: 1;
    }

    #header .navbar .navbar-end,
    #header .navbar .navbar-start {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      z-index: 1;
    }

    #header .navbar .navbar-start .navbar-simple {
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      white-space: nowrap;
      padding-left: 2rem;
      padding-right: 2rem;
    }

    #header .navbar .navbar-end {
      max-width: calc(50vw - 110px);
    }

    #header .navbar.has-black-background {
      background-color: #292a2b;
    }

    #header .navbar.is-light .navbar-menu .navbar-simple {
      color: #fafafa;
    }

    #header .navbar .logo {
      height: 36px;
      max-height: 100%;
    }

    #header .navbar .centered-logo-container {
      position: absolute;
      left: 0;
      right: 0;
      height: 100%;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      z-index: 0;
    }

    #header .navbar .login-button {
      position: absolute;
      right: .5rem;
      top: 15px;
    }

    #app {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      min-height: 100vh;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    #appContent {
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
      background-color: #fafafa;
    }

    *,
    :after,
    :before {
      box-sizing: inherit;
    }

    .mr-1 {
      margin-right: .25rem !important;
    }

    /*! CSS Used from: https://client.crisp.chat/static/stylesheets/client_default.css?4f69b8c */
    .crisp-client .crisp-1rjpbb7 {
      line-height: 1 !important;
      direction: ltr !important;
      text-align: left !important;
      color: #000 !important;
      font-style: normal !important;
      font-weight: 400 !important;
      text-decoration: none !important;
      list-style-type: disc !important;
    }

    .crisp-client .crisp-1rjpbb7 *,
    .crisp-client .crisp-1rjpbb7 :after,
    .crisp-client .crisp-1rjpbb7 :before {
      background-attachment: scroll !important;
      background-color: transparent !important;
      background-image: none !important;
      background-position: 0 0 !important;
      background-repeat: repeat !important;
      border-color: currentcolor !important;
      border-style: none !important;
      border-width: medium !important;
      bottom: auto !important;
      clear: none !important;
      clip: auto !important;
      color: inherit !important;
      counter-increment: none !important;
      counter-reset: none !important;
      cursor: auto !important;
      direction: inherit !important;
      display: inline !important;
      float: none !important;
      font-size: inherit !important;
      font-style: inherit !important;
      font-variant: normal !important;
      font-weight: inherit !important;
      height: auto !important;
      left: auto !important;
      letter-spacing: normal !important;
      line-height: inherit !important;
      list-style-type: inherit !important;
      list-style-position: outside !important;
      list-style-image: none !important;
      margin: 0 !important;
      max-height: none !important;
      max-width: none !important;
      min-height: 0 !important;
      min-width: 0 !important;
      outline: 0 !important;
      overflow: visible !important;
      padding: 0 !important;
      position: static !important;
      quotes: """" !important;
      right: auto !important;
      table-layout: auto !important;
      text-align: inherit !important;
      text-decoration: inherit !important;
      text-indent: 0 !important;
      text-transform: none !important;
      text-rendering: auto !important;
      top: auto !important;
      unicode-bidi: normal !important;
      vertical-align: baseline !important;
      visibility: inherit !important;
      white-space: normal !important;
      width: auto !important;
      word-spacing: normal !important;
      z-index: auto !important;
      -webkit-background-origin: padding !important;
      -moz-background-origin: padding !important;
      -ms-background-origin: padding-box !important;
      -o-background-origin: padding-box !important;
      background-origin: padding-box !important;
      -webkit-background-clip: border !important;
      -moz-background-clip: border !important;
      background-clip: border-box !important;
      -webkit-background-size: auto !important;
      -moz-background-size: auto !important;
      -o-background-size: auto !important;
      background-size: auto !important;
      -moz-border-image: -moz--compass-list(none) !important;
      -webkit-border-image: -owg--compass-list(none) !important;
      -webkit-border-image: -webkit--compass-list(none) !important;
      -o-border-image: -o--compass-list(none) !important;
      border-image: none !important;
      -webkit-border-radius: 0 !important;
      -moz-border-radius: 0 !important;
      -ms-border-radius: 0 !important;
      -o-border-radius: 0 !important;
      border-radius: 0 !important;
      -webkit-box-shadow: none !important;
      -moz-box-shadow: none !important;
      box-shadow: none !important;
      -webkit-box-sizing: content-box !important;
      -moz-box-sizing: content-box !important;
      box-sizing: content-box !important;
      column-count: auto !important;
      column-gap: normal !important;
      column-rule: medium none #000 !important;
      column-width: auto !important;
      column-span: 1 !important;
      -webkit-text-fill-color: currentcolor !important;
      -webkit-tap-highlight-color: transparent !important;
      -moz-tap-highlight-color: transparent !important;
      -ms-tap-highlight-color: transparent !important;
      -o-tap-highlight-color: transparent !important;
      font-feature-settings: normal !important;
      overflow-x: visible !important;
      overflow-y: visible !important;
      -webkit-hyphens: manual !important;
      -moz-hyphens: manual !important;
      -ms-hyphens: manual !important;
      hyphens: manual !important;
      -webkit-hyphenate-character: "‐" !important;
      hyphenate-character: "‐" !important;
      -webkit-perspective: none !important;
      -moz-perspective: none !important;
      -ms-perspective: none !important;
      -o-perspective: none !important;
      perspective: none !important;
      -webkit-perspective-origin: 50% 50% !important;
      -moz-perspective-origin: 50% 50% !important;
      -ms-perspective-origin: 50% 50% !important;
      -o-perspective-origin: 50% 50% !important;
      perspective-origin: 50% 50% !important;
      -webkit-backface-visibility: visible !important;
      -moz-backface-visibility: visible !important;
      -ms-backface-visibility: visible !important;
      -o-backface-visibility: visible !important;
      backface-visibility: visible !important;
      text-shadow: none !important;
      -webkit-transition: all 0s ease !important;
      -webkit-transition-delay: 0s !important;
      -moz-transition: all 0s ease 0s !important;
      -o-transition: all 0s ease 0s !important;
      transition: all 0s ease 0s !important;
      word-break: normal !important;
    }

    .crisp-client .crisp-1rjpbb7,
    .crisp-client .crisp-1rjpbb7 div {
      display: block !important;
    }

    .crisp-client .crisp-1rjpbb7 a {
      color: #00f !important;
    }

    .crisp-client .crisp-1rjpbb7 a:visited {
      color: #529 !important;
    }

    .crisp-client .crisp-1rjpbb7 a,
    .crisp-client .crisp-1rjpbb7 a * {
      cursor: pointer !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z,
    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z * {
      font-family: 'Montserrat', sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z :placeholder,
    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z:placeholder {
      font-family: 'Montserrat', sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z :-moz-placeholder,
    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z:-moz-placeholder {
      font-family: 'Montserrat', sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z ::-moz-placeholder,
    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z::-moz-placeholder {
      font-family: 'Montserrat', sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z :-ms-input-placeholder,
    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z:-ms-input-placeholder {
      font-family: 'Montserrat', sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z ::-webkit-input-placeholder,
    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z::-webkit-input-placeholder {
      font-family: 'Montserrat', sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-13qutdl {
      font-family: 'Montserrat', sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-13qutdl:placeholder {
      font-family: 'Montserrat', sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-13qutdl:-moz-placeholder {
      font-family: 'Montserrat', sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-13qutdl::-moz-placeholder {
      font-family: 'Montserrat', sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-13qutdl:-ms-input-placeholder {
      font-family: 'Montserrat', sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-13qutdl::-webkit-input-placeholder {
      font-family: 'Montserrat', sans-serif !important;
    }

    @media print {
      .crisp-client .crisp-1rjpbb7 {
        display: none !important;
      }
    }

    .crisp-client .crisp-1rjpbb7 {
      font-family: 'Montserrat', sans-serif
      font-size: 11px !important;
      position: relative !important;
    }

    .crisp-client .crisp-1rjpbb7 * {
      font-size: 11px !important;
      font-weight: 400 !important;
      -webkit-font-smoothing: subpixel-antialiased !important;
      -moz-osx-font-smoothing: auto !important;
      margin: 0 !important;
      padding: 0 !important;
      -webkit-user-select: none !important;
      -o-user-select: none !important;
      -moz-user-select: none !important;
      -ms-user-select: none !important;
      user-select: none !important;
    }

    .crisp-client .crisp-1rjpbb7 a {
      text-decoration: none !important;
      cursor: pointer !important;
      outline: 0 !important;
    }

    .crisp-client .crisp-1rjpbb7 a:hover {
      cursor: pointer !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1e8tjtx {
      background: 0 0 !important;
      border-color: #fff #fff transparent !important;
      border-style: solid !important;
      display: inline-block !important;
      -webkit-border-radius: 100% !important;
      -moz-border-radius: 100% !important;
      -ms-border-radius: 100% !important;
      -o-border-radius: 100% !important;
      border-radius: 100% !important;
      -webkit-animation-name: crisp-1ktw234 !important;
      -moz-animation-name: crisp-1ktw234 !important;
      -ms-animation-name: crisp-1ktw234 !important;
      -o-animation-name: crisp-1ktw234 !important;
      animation-name: crisp-1ktw234 !important;
      -webkit-animation-duration: 1s !important;
      -moz-animation-duration: 1s !important;
      -ms-animation-duration: 1s !important;
      -o-animation-duration: 1s !important;
      animation-duration: 1s !important;
      -webkit-animation-timing-function: linear !important;
      -moz-animation-timing-function: linear !important;
      -ms-animation-timing-function: linear !important;
      -o-animation-timing-function: linear !important;
      animation-timing-function: linear !important;
      -webkit-animation-fill-mode: both !important;
      -moz-animation-fill-mode: both !important;
      -ms-animation-fill-mode: both !important;
      -o-animation-fill-mode: both !important;
      animation-fill-mode: both !important;
      -webkit-animation-iteration-count: infinite !important;
      -moz-animation-iteration-count: infinite !important;
      -ms-animation-iteration-count: infinite !important;
      -o-animation-iteration-count: infinite !important;
      animation-iteration-count: infinite !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-4oo1n4 {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAxIiBoZWlnaHQ9IjEwMSIgdmlld0JveD0iMCAwIDEwMSAxMDEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbC1ydWxlPSJub256ZXJvIiBmaWxsPSJub25lIj48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDEwMXYxMDFIMHoiLz48ZyBmaWxsPSIjNzA3NTg0Ij48cGF0aCBkPSJNNDkuNzQxIDI1YzcuMTc3IDAgMTIuOTk1IDUuODE4IDEyLjk5NSAxMi45OTV2OS43NDZjMCA3LjE3Ny01LjgxOCAxMi45OTUtMTIuOTk1IDEyLjk5NXMtMTIuOTk1LTUuODE4LTEyLjk5NS0xMi45OTV2LTkuNzQ2QzM2Ljc0NiAzMC44MTggNDIuNTY0IDI1IDQ5Ljc0MSAyNXoiLz48cGF0aCBkPSJNMzEuODM5IDU5LjczN2gzNS44MDVhNC44MzkgNC44MzkgMCAwIDEgNC44MzggNC44Mzh2OS4xNTZIMjd2LTkuMTU2YTQuODM5IDQuODM5IDAgMCAxIDQuODM5LTQuODM4eiIgb3BhY2l0eT0iLjgiLz48L2c+PC9nPjwvc3ZnPg==) !important;
      background-color: #fff !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-4oo1n4,
    .crisp-client .crisp-1rjpbb7 .crisp-4oo1n4 .crisp-1mh9nm6 {
      background-size: cover !important;
      background-repeat: no-repeat !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr[data-maximized=false] .crisp-x94m06 .crisp-16qgsyi .crisp-101bp3x {
      visibility: visible !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr {
      position: fixed !important;
      right: 24px !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr {
      z-index: 2 !important;
      display: block !important;
      bottom: 20px !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 {
      display: block !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq .crisp-i1yn7v,
    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq .crisp-i1yn7v:after,
    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr[data-is-failure=false],
    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr[data-is-failure=false] * {
      cursor: pointer !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr[data-is-failure=false] .crisp-x94m06:active {
      -webkit-transform: scale(.965) !important;
      -moz-transform: scale(.965) !important;
      -ms-transform: scale(.965) !important;
      -o-transform: scale(.965) !important;
      transform: scale(.965) !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq {
      text-align: center !important;
      position: fixed !important;
      bottom: 96px !important;
      right: 17px !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e {
      -webkit-box-shadow: 0 5px 8px 0 rgba(0, 0, 0, .125) !important;
      -moz-box-shadow: 0 5px 8px 0 rgba(0, 0, 0, .125) !important;
      box-shadow: 0 5px 8px 0 rgba(0, 0, 0, .125) !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] {
      right: 23px !important;
      display: none !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e {
      height: auto !important;
      width: 340px !important;
      padding: 0 !important;
      overflow: hidden !important;
      position: relative !important;
      -webkit-border-radius: 9px !important;
      -moz-border-radius: 9px !important;
      -ms-border-radius: 9px !important;
      -o-border-radius: 9px !important;
      border-radius: 9px !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-yzclt {
      padding: 13px 25px 13px 19px !important;
      display: block !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-yzclt .crisp-5me80a {
      display: block !important;
      position: relative !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-yzclt .crisp-5me80a .crisp-bz13r8 {
      position: absolute !important;
      left: 0 !important;
      top: 0 !important;
      z-index: 1 !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-yzclt .crisp-5me80a .crisp-1sd4dmd {
      padding-left: 37px !important;
      position: relative !important;
      display: block !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-yzclt .crisp-5me80a .crisp-1sd4dmd[data-has-avatar=true] .crisp-191rfs5 {
      padding-right: 74px !important;
      min-height: 36px !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-yzclt .crisp-5me80a .crisp-1sd4dmd .crisp-191rfs5 {
      text-align: left !important;
      display: block !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-yzclt .crisp-5me80a .crisp-1sd4dmd .crisp-191rfs5 .crisp-pkd0me {
      color: #212121 !important;
      font-size: 12.4px !important;
      line-height: 16px !important;
      letter-spacing: .05px !important;
      display: block !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-yzclt .crisp-5me80a .crisp-1sd4dmd .crisp-191rfs5 .crisp-h99wdo {
      color: #919191 !important;
      font-size: 11.6px !important;
      line-height: 15px !important;
      letter-spacing: .1px !important;
      margin-top: 4px !important;
      display: none !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-yzclt .crisp-5me80a .crisp-1sd4dmd .crisp-z83vpo {
      width: 36px !important;
      position: absolute !important;
      right: 0 !important;
      top: 0 !important;
      bottom: 0 !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-yzclt .crisp-5me80a .crisp-1sd4dmd .crisp-z83vpo .crisp-bjk43g {
      position: absolute !important;
      right: 0 !important;
      top: 50% !important;
      -webkit-transform: translateY(-50%) !important;
      -moz-transform: translateY(-50%) !important;
      -ms-transform: translateY(-50%) !important;
      -o-transform: translateY(-50%) !important;
      transform: translateY(-50%) !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-yzclt .crisp-5me80a .crisp-1sd4dmd .crisp-z83vpo .crisp-bjk43g,
    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-yzclt .crisp-5me80a .crisp-1sd4dmd .crisp-z83vpo .crisp-bjk43g .crisp-2tz7y {
      width: 36px !important;
      height: 36px !important;
      display: inline-block !important;
      -webkit-border-radius: 36px !important;
      -moz-border-radius: 36px !important;
      -ms-border-radius: 36px !important;
      -o-border-radius: 36px !important;
      border-radius: 36px !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-a1mko8 {
      color: #919191 !important;
      border-top: 1px solid rgba(0, 0, 0, .08) !important;
      text-align: center !important;
      display: none !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-a1mko8 .crisp-vz5ota {
      min-height: 38px !important;
      padding: 0 0 6px !important;
      -webkit-transition: background-color .15s ease-in-out !important;
      -moz-transition: background-color .15s ease-in-out !important;
      -o-transition: background-color .15s ease-in-out !important;
      transition: background-color .15s ease-in-out !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-a1mko8 .crisp-vz5ota:active .crisp-4snher {
      -webkit-transform: translateY(1px) !important;
      -moz-transform: translateY(1px) !important;
      -ms-transform: translateY(1px) !important;
      -o-transform: translateY(1px) !important;
      transform: translateY(1px) !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-a1mko8 .crisp-vz5ota:nth-child(1) {
      flex: 1 !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-a1mko8 .crisp-vz5ota:nth-child(1) .crisp-4snher {
      border: 0 !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-a1mko8 .crisp-vz5ota .crisp-4snher {
      border-color: rgba(0, 0, 0, .06) !important;
      border-style: solid !important;
      border-width: 0 0 0 1px !important;
      line-height: 18px !important;
      width: 100% !important;
      margin-top: 12px !important;
      display: inline-block !important;
      -webkit-transition: -webkit-transform .15s ease-in-out !important;
      -moz-transition: -moz-transform .15s ease-in-out !important;
      -o-transition: -o-transform .15s ease-in-out !important;
      transition: transform .15s ease-in-out !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-a1mko8 .crisp-vz5ota .crisp-4snher .crisp-rvg3pe {
      font-size: 12.4px !important;
      letter-spacing: .23px !important;
      padding: 0 10px 0 6px !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq .crisp-1sa0919 {
      display: block !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq .crisp-1sa0919 .crisp-1s66m5e {
      background-color: #fff !important;
      font-size: 12.8px !important;
      letter-spacing: .1px !important;
      line-height: 35px !important;
      text-align: center !important;
      -webkit-hyphens: auto !important;
      -moz-hyphens: auto !important;
      -ms-hyphens: auto !important;
      hyphens: auto !important;
      height: 37px !important;
      padding: 0 22px !important;
      overflow: hidden !important;
      float: right !important;
      position: relative !important;
      z-index: 1 !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq .crisp-i1yn7v {
      background-color: #212121 !important;
      text-align: center !important;
      line-height: 0 !important;
      height: 20px !important;
      width: 20px !important;
      display: inline-block !important;
      filter: alpha(Opacity=60) !important;
      opacity: .6 !important;
      -webkit-transition: opacity .15s linear !important;
      -moz-transition: opacity .15s linear !important;
      -o-transition: opacity .15s linear !important;
      transition: opacity .15s linear !important;
      -webkit-border-radius: 20px !important;
      -moz-border-radius: 20px !important;
      -ms-border-radius: 20px !important;
      -o-border-radius: 20px !important;
      border-radius: 20px !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq .crisp-i1yn7v:hover {
      filter: alpha(Opacity=75) !important;
      opacity: .75 !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq .crisp-i1yn7v:active {
      filter: alpha(Opacity=90) !important;
      opacity: .9 !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq .crisp-i1yn7v:after {
      content: "" !important;
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOCIgaGVpZ2h0PSI4IiB2aWV3Qm94PSIwIDAgOCA4IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIHN0cm9rZT0iI0ZGRiIgc3Ryb2tlLXdpZHRoPSIxLjQiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIj48cGF0aCBkPSJNNy4yODkuNzIyTC43MTMgNy4yODRNLjcxMy43MjJsNi41NzYgNi41NjIiLz48L2c+PC9zdmc+) !important;
      background-size: contain !important;
      background-repeat: no-repeat !important;
      background-position: center !important;
      display: inline-block !important;
      width: 8px !important;
      height: 8px !important;
      margin-top: 6px !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-x94m06 {
      width: 60px !important;
      height: 60px !important;
      display: block !important;
      -webkit-border-radius: 60px !important;
      -moz-border-radius: 60px !important;
      -ms-border-radius: 60px !important;
      -o-border-radius: 60px !important;
      border-radius: 60px !important;
      -webkit-box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .04) !important;
      -moz-box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .04) !important;
      box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .04) !important;
      -webkit-transition: -webkit-transform .15s ease-in-out !important;
      -moz-transition: -moz-transform .15s ease-in-out !important;
      -o-transition: -o-transform .15s ease-in-out !important;
      transition: transform .15s ease-in-out !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-x94m06 .crisp-16qgsyi {
      display: block !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-x94m06 .crisp-16qgsyi .crisp-101bp3x,
    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-x94m06 .crisp-16qgsyi .crisp-1t2kwsy {
      position: absolute !important;
      z-index: 2 !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-x94m06 .crisp-16qgsyi .crisp-1t2kwsy {
      top: 18px !important;
      left: 18px !important;
      display: none !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr .crisp-x94m06 .crisp-16qgsyi .crisp-1t2kwsy .crisp-174tqf9 {
      border-width: 2px !important;
      width: 20px !important;
      height: 20px !important;
      filter: alpha(Opacity=90) !important;
      opacity: .9 !important;
    }

    .crisp-client .crisp-1rjpbb7[data-availability-tooltip=false] .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] {
      visibility: hidden !important;
    }

    .crisp-client .crisp-1rjpbb7[data-last-operator-face=false] .crisp-1rf4xdh .crisp-kquevr .crisp-x94m06 .crisp-16qgsyi .crisp-101bp3x[data-is-ongoing=false] {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzUiIGhlaWdodD0iMzAiIHZpZXdCb3g9IjAgMCAzNSAzMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGRlZnM+PHBhdGggZD0iTTE0LjIyNiAyMC40NmwtOS42NDIgMS4xMDZMMyA1LjEwNiAzMC4wNjYgMmwxLjU4NCAxNi40Ni05LjM2NyAxLjA3NC0zLjUwNiA1LjcxNS00LjU1MS00Ljc5eiIgaWQ9ImIiLz48ZmlsdGVyIHg9Ii0xNS43JSIgeT0iLTE1LjElIiB3aWR0aD0iMTMxLjQlIiBoZWlnaHQ9IjEzOC43JSIgZmlsdGVyVW5pdHM9Im9iamVjdEJvdW5kaW5nQm94IiBpZD0iYSI+PGZlTW9ycGhvbG9neSByYWRpdXM9IjEiIG9wZXJhdG9yPSJkaWxhdGUiIGluPSJTb3VyY2VBbHBoYSIgcmVzdWx0PSJzaGFkb3dTcHJlYWRPdXRlcjEiLz48ZmVPZmZzZXQgZHk9IjEiIGluPSJzaGFkb3dTcHJlYWRPdXRlcjEiIHJlc3VsdD0ic2hhZG93T2Zmc2V0T3V0ZXIxIi8+PGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iMSIgaW49InNoYWRvd09mZnNldE91dGVyMSIgcmVzdWx0PSJzaGFkb3dCbHVyT3V0ZXIxIi8+PGZlQ29tcG9zaXRlIGluPSJzaGFkb3dCbHVyT3V0ZXIxIiBpbjI9IlNvdXJjZUFscGhhIiBvcGVyYXRvcj0ib3V0IiByZXN1bHQ9InNoYWRvd0JsdXJPdXRlcjEiLz48ZmVDb2xvck1hdHJpeCB2YWx1ZXM9IjAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAuMDcgMCIgaW49InNoYWRvd0JsdXJPdXRlcjEiLz48L2ZpbHRlcj48L2RlZnM+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48dXNlIGZpbGw9IiMwMDAiIGZpbHRlcj0idXJsKCNhKSIgeGxpbms6aHJlZj0iI2IiLz48dXNlIHN0cm9rZT0iI0ZGRiIgc3Ryb2tlLXdpZHRoPSIyIiBmaWxsPSIjRkZGIiB4bGluazpocmVmPSIjYiIvPjwvZz48L3N2Zz4=) !important;
      background-size: contain !important;
      background-repeat: no-repeat !important;
      background-position: center !important;
      display: inline-block !important;
      width: 33px !important;
      height: 28px !important;
      top: 18px !important;
      left: 13px !important;
    }

    .crisp-client .crisp-1rjpbb7[data-availability=away] .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-yzclt .crisp-1sd4dmd .crisp-h99wdo[data-id=away] {
      display: block !important;
    }

    .crisp-client .crisp-1rjpbb7[data-availability=away] .crisp-1rf4xdh .crisp-kquevr .crisp-1059tj2 .crisp-1xaupiq[data-id=general_entice] .crisp-1sa0919 .crisp-1s66m5e .crisp-a1mko8[data-when=away] {
      display: flex !important;
    }

    /*! CSS Used from: https://www.freelancerepublik.com/assets/css/chunk-8376e44c.aeaefb76.css */
    .anim>svg {
      height: 479px !important;
      width: 661px !important;
      margin-left: -61px;
    }

    .frk-container[data-v-107c0948] {
      width: 1200px;
      max-width: 96vw;
      margin-left: auto !important;
      margin-right: auto !important;
    }

    @media screen and (max-width:1023px) {
      .frk-container[data-v-107c0948] {
        max-width: 90vw;
      }
    }

    .column[data-v-107c0948],
    .columns[data-v-107c0948] {
      margin: 0;
      padding: 0;
    }

    #page[data-v-107c0948] {
      background-color: #fff;
    }

    h1[data-v-107c0948] {
      color: #363738;
      font-family: Circular Std, sans-serif;
      font-size: 3.21rem;
      font-weight: 500;
      line-height: 50px;
    }

    @media screen and (max-width:1023px) {
      h1[data-v-107c0948] {
        font-size: 2.14rem;
        line-height: 30px;
        max-width: 80vw;
        text-align: center;
        margin: auto;
      }
    }

    #page[data-v-107c0948] {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      background-color: #292a2b;
      min-height: 100vh;
    }

    @media screen and (max-width:1023px) {
      #page[data-v-107c0948] {
        background-position: center 15px;
        background-size: 149px;
      }
    }

    .cover[data-v-107c0948] {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .cover .speech[data-v-107c0948] {
      padding-left: 10px;
      padding-right: 10px;
    }

    .cover h1[data-v-107c0948] {
      color: #fafafa;
    }

    .cover .headline[data-v-107c0948] {
      color: #f2f2f2;
      font-family: Circular Std, sans-serif;
      font-size: 1.29rem;
      font-weight: 300;
      line-height: 28px;
      margin-top: 44px;
      margin-bottom: 36px;
    }

    @media screen and (max-width:1023px) {
      .cover .headline[data-v-107c0948] {
        margin: 15px auto 44px;
        font-size: 1rem;
        line-height: 17px;
        text-align: center;
        max-width: 96vw;
      }
    }

    .cover .frk-buttons[data-v-107c0948] {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .cover .frk-buttons a[data-v-107c0948] {
      margin-bottom: 18px;
      margin-right: 39px;
    }

    @media screen and (max-width:1023px) {
      .cover .frk-buttons[data-v-107c0948] {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
      }

      .cover .frk-buttons a[data-v-107c0948] {
        margin: 0;
        margin-bottom: 20px;
      }
    }

    /*! CSS Used from: Embedded */
    .crisp-client .crisp-1rjpbb7 .crisp-wcida4 {
      color: #1972F5 !important;
      -webkit-text-fill-color: #1972F5 !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-ws3gf1 {
      background-color: #1972F5 !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-1jrqqbm:hover {
      background-color: #F5F8FB !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-k5ll1j::-moz-selection,
    .crisp-client .crisp-1rjpbb7 .crisp-k5ll1j *::-moz-selection {
      background-color: #E2EEFF !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-k5ll1j::selection,
    .crisp-client .crisp-1rjpbb7 .crisp-k5ll1j *::selection {
      background-color: #E2EEFF !important;
    }

    /*! CSS Used from: Embedded */
    .crisp-client .crisp-1rjpbb7 {
      z-index: 1000000;
    }

    /*! CSS Used keyframes */
    @-webkit-keyframes crisp-1ktw234 {
      0% {
        -webkit-transform: rotate(0);
        -moz-transform: rotate(0);
        -ms-transform: rotate(0);
        -o-transform: rotate(0);
        transform: rotate(0);
      }

      100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @-moz-keyframes crisp-1ktw234 {
      0% {
        -webkit-transform: rotate(0);
        -moz-transform: rotate(0);
        -ms-transform: rotate(0);
        -o-transform: rotate(0);
        transform: rotate(0);
      }

      100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @-o-keyframes crisp-1ktw234 {
      0% {
        -webkit-transform: rotate(0);
        -moz-transform: rotate(0);
        -ms-transform: rotate(0);
        -o-transform: rotate(0);
        transform: rotate(0);
      }

      100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes crisp-1ktw234 {
      0% {
        -webkit-transform: rotate(0);
        -moz-transform: rotate(0);
        -ms-transform: rotate(0);
        -o-transform: rotate(0);
        transform: rotate(0);
      }

      100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    /*! CSS Used fontfaces */
    @font-face {
      font-family: Open Sans;
      src: url(https://www.freelancerepublik.com/assets/fonts/OpenSans-Regular.5885cdcb.woff2) format("woff2"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-Regular.9863aaac.woff) format("woff"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-Regular.a05c11bf.ttf) format("truetype");
      font-style: normal;
      font-weight: 400;
    }

    @font-face {
      font-family: Open Sans;
      src: url(https://www.freelancerepublik.com/assets/fonts/OpenSans-Italic.b209aeb4.woff2) format("woff2"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-Italic.00927433.woff) format("woff"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-Italic.9d4d0e7d.ttf) format("truetype");
      font-style: italic;
      font-weight: 400;
    }

    @font-face {
      font-family: Open Sans;
      src: url(https://www.freelancerepublik.com/assets/fonts/OpenSans-ExtraBold.57e7354a.woff2) format("woff2"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-ExtraBold.29a8b1d5.woff) format("woff"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-ExtraBold.f525db7b.ttf) format("truetype");
      font-style: normal;
      font-weight: 800;
    }

    @font-face {
      font-family: Open Sans;
      src: url(https://www.freelancerepublik.com/assets/fonts/OpenSans-ExtraBoldItalic.60d7abe1.woff2) format("woff2"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-ExtraBoldItalic.925c6a6f.woff) format("woff"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-ExtraBoldItalic.bfeb6094.ttf) format("truetype");
      font-style: italic;
      font-weight: 800;
    }

    @font-face {
      font-family: Open Sans;
      src: url(https://www.freelancerepublik.com/assets/fonts/OpenSans-Bold.eb6d8a97.woff2) format("woff2"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-Bold.f87c7980.woff) format("woff"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-Bold.470dc6a3.ttf) format("truetype");
      font-style: normal;
      font-weight: 700;
    }

    @font-face {
      font-family: Open Sans;
      src: url(https://www.freelancerepublik.com/assets/fonts/OpenSans-BoldItalic.4cfd42e3.woff2) format("woff2"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-BoldItalic.127782cd.woff) format("woff"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-BoldItalic.56b46b1e.ttf) format("truetype");
      font-style: italic;
      font-weight: 700;
    }

    @font-face {
      font-family: Open Sans;
      src: url(https://www.freelancerepublik.com/assets/fonts/OpenSans-SemiBold.1edcff18.woff2) format("woff2"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-SemiBold.729e6a0d.woff) format("woff"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-SemiBold.1113ce5b.ttf) format("truetype");
      font-style: normal;
      font-weight: 600;
    }

    @font-face {
      font-family: Open Sans;
      src: url(https://www.freelancerepublik.com/assets/fonts/OpenSans-SemiBoldItalic.3263a944.woff2) format("woff2"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-SemiBoldItalic.62d331b3.woff) format("woff"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-SemiBoldItalic.130f0b26.ttf) format("truetype");
      font-style: italic;
      font-weight: 600;
    }

    @font-face {
      font-family: Open Sans;
      src: url(https://www.freelancerepublik.com/assets/fonts/OpenSans-Light.ffaae0e1.woff2) format("woff2"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-Light.df242428.woff) format("woff"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-Light.0e81d518.ttf) format("truetype");
      font-style: normal;
      font-weight: 300;
    }

    @font-face {
      font-family: Open Sans;
      src: url(https://www.freelancerepublik.com/assets/fonts/OpenSans-LightItalic.0a9359b4.woff2) format("woff2"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-LightItalic.04efde45.woff) format("woff"), url(https://www.freelancerepublik.com/assets/fonts/OpenSans-LightItalic.a185d697.ttf) format("truetype");
      font-style: italic;
      font-weight: 300;
    }

    @font-face {
      font-family: Circular Std;
      src: url(https://www.freelancerepublik.com/assets/fonts/CircularStd-Medium.047b8823.woff2) format("woff2"), url(https://www.freelancerepublik.com/assets/fonts/CircularStd-Medium.924e64b7.woff) format("woff"), url(https://www.freelancerepublik.com/assets/fonts/CircularStd-Medium.a771ec3d.ttf) format("truetype");
      font-style: normal;
      font-weight: 500;
    }

    @font-face {
      font-family: Circular Std;
      src: url(https://www.freelancerepublik.com/assets/fonts/CircularStd-Bold.08322e85.woff2) format("woff2"), url(https://www.freelancerepublik.com/assets/fonts/CircularStd-Bold.71ed23f4.woff) format("woff"), url(https://www.freelancerepublik.com/assets/fonts/CircularStd-Bold.363c8be2.ttf) format("truetype");
      font-style: normal;
      font-weight: 700;
    }

    @font-face {
      font-family: Circular Std;
      src: url(https://www.freelancerepublik.com/assets/fonts/CircularStd-Black.5a751af8.woff2) format("woff2"), url(https://www.freelancerepublik.com/assets/fonts/CircularStd-Black.7720aa85.woff) format("woff"), url(https://www.freelancerepublik.com/assets/fonts/CircularStd-Black.f18509c3.ttf) format("truetype");
      font-style: normal;
      font-weight: 900;
    }

    @font-face {
      font-family: frk-icons;
      src: url(data:font/woff2;base64,d09GMgABAAAAAAj4AA0AAAAAEPQAAAijAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP0ZGVE0cGh4GVgCCShEICpUgkFELKgABNgIkAzAEIAWDYweBURuQDSMDwcYBghCvIftHgunmHumIhJdI4yVertlE0yni+n2vjl/0Fvx/7XXn7r7dn9ZVAshSXSldxVGqLNVoFAqJtKBjGR/9h95N/7ol9HIhRJA5WgGGholRcYUwVhPezGGmRqf6JcqeqB3OVTO3bqbrCs8gAbHwwAdkTGITm/SY9RMoosKDBHT/f2ut7qISzc4aIRJptDo3Z7N/90wEPJHxKJaaS7IGlSaWeERyZBidVSd4bu96qQlQjN/haKh3/L3buEOFaSlAuiXqEKLOWoZCnN//kwA61D2AHSbWZzbz6l0hizlQ/M3pfbILxFFPh3ppj0mnKL2hbBfoTVZ8I8ZwY8Rwj+bn9H/gKginu9BcVJSnQJ0WcZiDLFLeQkxuLeX/m/ZfAcCpNN3r4gY9TE1W+O9am+lvbDi/dod3aGv0JJgv0jcqJJgMDR7EQlYsZqCBZiJkesNgiJhhEgtGKIiBqnC13qSFLCI4KFMaUqObqdhHyVUN1y3rlUA3BDkKMY9AWGbdhlgmN+UUs54AoCqhnCRS4wCStUZM9LvLFFbkZK2jUtnG1bOpDNq0F1nhhkaloDG0+HFagViSOA+y8FW/F+/UBxmB0Ii3SpSFykDkG2rnza9EVgfJze0QGEQUt0itM4+9lB/7ZxYiZy0p2FWWOgcQ90k9xIlwad6+ngesH2V3qRVEEJPCyoSOuhATLYO8iaNLzr7YGMTsk5l1ELQh8nJjLz3SudhuPFsWeSR3PlTJKHth+zipFQV3o3hyaO2uNtbeGeuuMu3ekx0PTrTi1hY1caqKq8aQ8t+sebg3ZW3SP8tEto9nq/NuFdGEdu0u5ajY6mAK5ZpJUquMZxMR1qsnQHDfdtAgLu4XKeF9Q5SkAIQnvMgGbX6tGSeK8Va5tIu1BXV/HZSbWHsWsuuC9vZEDSE3KkPD2bJlpFI8lYgd5vZnyzrJoPlsPML63twy6ZpMGGmdnDr3bIgNOpleApjfThkAYW8IQ07VWdWbIMZJTWJliw1OnXB+tq3GUVWqSD91j58EanM2IyivGze0t2EjjkTcZZhEvEa4qYkbUwPGi3SAMxl24eiycEUbrVzBQ7hWv2AGD6+IrOwB3Mnip3ERoDwlWCOuVkeIJxwdMY62fC9mqE3BWM5zEM8yVbxAWSa6zZduho2g8XL4F/1A3FcPL1XqY8MH9S73/YbGVfHatnNrE3Vm1PFBY5ScTZVbJ8EE7uQ1tslfIjttOUmcDrvmPEmrGD/NNLYkIQLF6kODcagONA4wiZvx7+DejuOd/Ol7TxA/ZaKZ/2VJzaKd1JrepmjZcKIHYXQwCGMUoosRum7qNjFDTaEYsfKCs10pe6uYongrU7YLZBxTSd248jgxA1Z+6kLfKb5Dros+ea9P4fG4PTLuKEFQ/Kvwgf87ccePn65fDzP8/o2BL97y2wU28iLw/OOC9Xnr4VFFO7+WDJV8/UtcsnVEeuokVjPCGvt/AV9XricDPp9xhjvj6l/EpjP0H87jxTzMfpRyg2KpNFZmxMHuV1nF6u6vbj9du3YSkqGGQOAWt3uDc9CIwYMcg52WhIQqcBvLOIb5VqP9X+uctHbtU/D1DZJMLWjJD5KkElDteQOmtOTlp2a2c7ygWOpsntO7sT3UOhwQlPA8JxFkEoXsq2E4A85QMVWPBt4dCfTkF/oCgqDFcO33/u+/W/CdJ/RtMefTDqpuyy3xZLXBzCRdzYmben2BjeOnGieOeDZfzAb9xasv6uVzA5Q44C8mRPzn/ycPmnHI7x/s3+QHyDhukyg9J7P9ULA5a6fKGNIxW2Ws0ELtE+PwRyFD7vaC4PH5NKr1EzU6wdcLirXnZs+6MHvWuVmzz73JcC1efM/udDUuWXzvecu/bkMEQl39QRibleUuFgRwKjOmXhJK1Dy2juzZ55ARj4kpnJ/F1SXoK5woLoVYoGs+SRpIEkjHvR/WOKRfXtj8BBTP4/Bhx2MDHDvPOsfq3baCM1IcBVQUXF0jkX//kWJIsrwRm9tvI1j2yO108xRLie2xSqdUcBNBwokmKBWPjSGFEmb2ppfBPhi9jVHZkwhDt3EnnhQkdLsKE9FZT6ZzKFe5QlTAF7q6i5PBCy3kE0Q35Y/leayHdaDkCXBqNOyD4DPqwMo3vxwey+RvXpDC1qs+YVCPsFJnc2EDV7qlOLOhbN26ovDwxJzqNSW/vuGUrxpVanUyzXAOJEOOU8LTEkHY//v9Y1aKpP/sX/WQVq3XGxAikAohRCIkgw+gHj6EzuhUUkYqi1ok6w7RO3IVPUh8fJLEBCwDr4rkJM2tcr9taZZwKZQTV2jIk0Jmu1Gr32R+YGv02vitHdPEvYl5G/c2JmHGRVJBXiyMitQfKDigj4wqBO+WhXJzQ0koKZgo7uxIwjMz8aTx43NzU8of9kX0tbQ8YjNJQGZywdbWPh343/t07Vp4JXBz+YY5vXGCR9Z7eJWASJ86QoDbCHkC+OMPQSq8UJE/zZCgF84BcZJ+9exn3I3a8mIfsuNxY0X6dx8nZ0BGNkAaOiYdDVM/AuOsFWZlBtPklbJk6Tz5R220Ug1mEt6HY8LyVWeBLz0pygwlPEdkmecZYyvPKPPPC+RVJbFKq6VOjbIsPSBFPEeBaZ6nSzLPGOA+L9Diz+0jA+rQQyvdeJ3dmnHjwoxAWzHfjB3w/vC4XecykyxLmO2gQa6UbEuC7Tvx4EYNjwUbWM041DNImxFiRmZEHZjhsdnGAD4ngZxf6vS41bzFph6nXom4ELOPNDvMFPXsgp1guh16OunCi5fGW1WCl0LX2G6xTTcT95SeboDw8P7yMgVFJcooq5zyKqioksqqqKpahtDGhJNKQgqyZioMRHSn3WwXk1N6bxeJChg5Cbir4zFaisVJLAinpPyd9veyZJbGPDJSJd8pwImoR1ZCkum9XWSuzWzHSFsL9viRB4y2ZXEKFw==) format("woff2"), url(data:font/woff;base64,d09GRgABAAAAAAwEAA0AAAAAEPQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAL6AAAABoAAAAcg0STl0dERUYAAAvMAAAAHAAAAB4AJwAaT1MvMgAAAaAAAABAAAAAVk/zXLZjbWFwAAACAAAAAFYAAAFKKRAzlGdhc3AAAAvEAAAACAAAAAj//wADZ2x5ZgAAAoQAAAe+AAAKoJ3TpfVoZWFkAAABMAAAADAAAAA2Drqtj2hoZWEAAAFgAAAAHQAAACQEKwIFaG10eAAAAeAAAAAeAAAAMAaiAAdsb2NhAAACWAAAACoAAAAqGUIWuG1heHAAAAGAAAAAHgAAACAAXQCCbmFtZQAACkQAAADkAAAB469U8cBwb3N0AAALKAAAAJsAAADRJMTxkHjaY2BkYGAA4twlnmLx/DZfGbiZGEDg2gUzdxj9/zcDAxMjEwuQy8EAlgYAEiQJcnjaY2BkYGBiAAI9Job/v4FsRgZGBlTAAgA0WgI2AAAAeNpjYGRgYBBhqGdgZwABJiBmZACJOYD5DAARXQDgAAB42mNgZGJgnMDAysDA6MOYxsDA4A6lvzJIMrQwMDAxsHIywAAjAxIISHNNYXBgSGQoZHzw/wGDHhOSGgBv8wlOeNpjYoAAJihmEP3/m6ERKsgNhAwMjAxIAABNOAKuAAB42mNgYGBmgGAZBkYGEHAB8hjBfBYGDSDNBqQZGZiArML//8EqEkH0/0VQ9UDAyMYA5zCCVDIxoAJGBsoBMwsrGzsHJxc3Dy8fv4CgkDDDoAIAXrsH+gAAAAAAAAAAAAAAaACSALQA3AEaAV4BuAJyAqgDIgO6BFIEqAToBPoFHgVQAAB42nVWa4wcRxHumlf39Dx2Z3Z29vbinb2dud29h3172ceMvXd7drjIZ/l85nwiBKJEQuYcwwViWxYgWQjHDrYiy8bGESfiICEhfgQSHgJhOeQHUhJFCMn8snCIsBKZyBAcRSgSPxDShurZs3EioZludVfXdHd99VXVEJUQMisRiRCDuKRGpsluQoBqYQM67ValmVf9VjPJR6oXVcIe+IW8589AM+5BnFTbMQ79EkSVqNOuTUKo4TjU8o7n46dxx2nX4H310qVLqgGvGv1/ZTO2MweG0Z8znthrsjlm7n2if8W1jlnuFegdDvxjfnDYcl0LXsUeFuSlJXmJ85/L8shXOP9T7ETMNFnkxD80HccMAq9U8gLH7L9hOY4FXdPBq5M8eQr+AU+RIUKqlbDWjluVeq2dxM0y+F4GNBQlcLH/A57JcFidZYz59EsUXz/LbmX8TJflKWOPM48dpLbPEB/46D/kmxKB0ySLE7FHA2pJXIYkLvh5iSgfcv6hrnP9vfd0rsBRVbnF2C0U8Bs3OJc13AIBPkEcOI44U3Ezt+l74iYIZ7MHc4h1DXHz/ML1lW53pfvQpukHdq/tfmAa3t26vHXr8o9u2/ZtdWejvWtXu7FT+EzG1sM7vYZ+K5A62ioc1HEKfnM7VIXnSgMvIgafcIiA/7rpmtf7Y8ItNxVTuQlX+3N3gX+Uc2DHVfX4Ds7HTsnyqQXX6l9Jl3dZrrAlNSi1ZZqQuB0PrMFDmu1IQC5I4Wk47IEwTCwkAbQEbXD+43hPHO95a32N8/1nzrx+ZnS4ODr/6Pz8VDeUGpVwev3aW0IhfuPauofLZ/b3itXR4d7UPCrdX5maDntr62QDg8E9bBKQTwkMJiFfjxCGlLpAO+l4BlLSFnKVewiaChErZPB2wHu17sKz8OQrhgGHjf7fn1wwjJZr/WbfWv+C5bYEAi0zqx78HagSmGL+mrGyYkCAlD61b58YXLfcObiEegjZTcvt6aayF0C15hC8AMFT0F8E3oXbJEdmyCr5FiE5AR/VCgKkuF2vhVTzcxTRq9fEE+P1WoK8GbCh4Iun1bwjq9eiEPl4RxfFbeSmkH1MF4U+bt5pC31xVIKfI3fFsW+Pf21lnFJZUeVGo3G6Qe0PwqGw6B+u1ZccNR+JhS5jRa6wqD46p5uOWRSybaylW6Ze1HRN2T5SDZlR1PWuEEXDNL9ncvNX7ytPBJGuL8pMLpWC8YmAUsqGKuXhQoEx+NnEZ74xgefK089MNxrM7v80GrKX62OHi7P5UVmeoWyYbzJnxqs1DQ/E+TLnRU0eG6l1M3jUsD6j69F9u8tHJjcvucEoCr4ry+WJyVKA5zA2NFSsRAVGU54YJAu34Z/IV4dUCBkdcNSTB9SM2zXaQeIiZwsegprEdfjs5ZMnL5/4y+rZs6tfPHfuEZ2DtEQ1SqMTV06cvAyLZ39/Ft/3D3F+VAZc03DtLifhr8jJTWSCfA45acMk1DtzICAXYZG6OUnh11Qk7IChzTxtYf6MbMjARtwgUakNNM2rA8aK+CngffH7uAa/Vgr2jQej2FA83So6qvxwQ9U1Te2fNcYNfAFgVdKgOJ/3VGYVXaco69PD3J0QPJ6wcttv+qHqqzC8J+OGV7NfTzxbP+YWMT9rjJ05jTFADOMd2ASaIckmLg3ns621jJOzPiJWzrXzI5v81W/nhhFVQJtflBS03iQhmSTzZD/5MiFJqxMl7YHdEd0I/yjNdaW0WHi+immigvJKNZ8mDJHBtsOd5lTCSuQgazPwv0bv5jPcTtWoSGznDxzwXMt0e94B3TT10kSAlQKyJuv/mcP9/VfE2hZN3ZoM2pb+Bxw+HWiKlmzV1I2mqKU8LDuF/m+BQZ2ZV3tpxAcHTR3DOPADfNPheWZlsmU+nmbEX5ZluVpVFNHK/afhgibLONG0QVNkWev38sGQ0+L4qcU2OPIFCeAdUiYL5GhabzFqM9BJBjGJEy2vldPMhBI/EXZj9KZKgg8eZq9I9AKDZCPIMQFEYV4sea1m7062nYQOZmXsU4JHA9RRB/72Ezv7kqQNL+zPMMojhUr8cVV6jnMN1Lz/vRE7WJXlnZLb4rwlmm6WX+BaLvuCBdL3xzkvc8NjlsV6mCQDg3sC9x7YF021C5J52h1Rs1yjkgKqoksefJ5SlbLRjP2wZroBHwHIOt6vPJPJ2W2S9ayZzY5zrJicG2yMmXVPDE2GbhhL8aqmeb5CxkkXJ7W85rcCNNSGcApNi5NmXG9jtIicjkDVpP9XX+FBE6iy+Fhy6JlDyWOLCgVz8cjzf3j+yC92TE3tmJr3a62ZlZlW7Y+SoVKt5tol3y/Zbk2jqiFpk+HY1NRYiB7YPLdly9zxlw3jZSWpjm3bNlZNlI/XJB3/p0aFb+sb/x6gCS8kUEhEjocNRzQTTM/wdrAcqFydVfvnVHVRhdnlhZ45avYvWo6x6JpwyITzQkWdVcz+d1BDqDwya1lCY9FwUMOK0tRzT20mJMUgbkpk/dr6+jVYE/16qvMQ/ju8iDWI4GU0qom010qvIqavP4f/QJS9RNEZUKGM+vTC0xQo8+izlEGVehRn95xVwoNroQjOUGyF+4nSiv8iovKIogb/pjn65ps0Z4vevmdMcemTso0xWvBfQHCj2AAAeNqVj8FKw0AURc+0aUAUiht3ltnLhExKQQq6s5+QL2haAiWBNP0Vd36Qn+InuPNOfS50IXTgMWfu3HfnDXDDK460HHO88YScZ+MpD7wZZ/J8GM+4drfGOXP3JKfLrqQszl2JJ8ovjafUvBhn8rwbz7jj0zhn4e450THSqg40bAns6M9aIMKpG9vx0GzDru/GIOHX7Y+4MTHtA3sFeSoKjeNZq/5/5NsTWem0VFXqizwqVvGbftg3vipKv/Z/hpESV2EZqjLKfOlHarkGjupIrvR+mpe6GY5t3/lYlBdnfgFKSk2BeNpdjcsOgjAUBTnY8lDER/yNLmriB5VSpfHSkrYYPt/gijiLs5jFmSzPtiD75/azOXLswMBRoESFGnsc0OCIFiecccG10iok1ZFptR8760wv4qAmUzwtkZANea3IRpWsd2xUlvg6d0b2bfg0eGfKZEcT5FK/gp8n8ZBLqb1LQaWim/uXSe32Q0hmepuY/yhia4Pr4GP8AhSbMEgAAAAAAf//AAJ42mNgZGBg4AFiMSBmYmAEQmEgZgHzGAAEbwBCeNpjYGBgZACCq0vUOUD0tQtm7jAaAD5ZBfAAAA==) format("woff"), url(https://www.freelancerepublik.com/assets/fonts/frk-icons.4488880c.ttf) format("truetype");
      font-style: normal;
      font-weight: 400;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0020-007F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0020-007F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0020-007F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/00A0-00FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/00A0-00FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+00A0-00FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0100-017F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0100-017F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0100-017F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0180-024F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0180-024F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0180-024F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0250-02AF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0250-02AF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0250-02AF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/02B0-02FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/02B0-02FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+02B0-02FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0300-036F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0300-036F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0300-036F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0370-03FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0370-03FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0370-03FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0400-04FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0400-04FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0400-04FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0500-052F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0500-052F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0500-052F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0530-058F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0530-058F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0530-058F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0590-05FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0590-05FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0590-05FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0600-06FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0600-06FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0600-06FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0700-074F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0700-074F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0700-074F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0780-07BF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0780-07BF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0780-07BF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0900-097F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0900-097F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0900-097F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0980-09FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0980-09FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0980-09FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0A00-0A7F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0A00-0A7F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0A00-0A7F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0A80-0AFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0A80-0AFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0A80-0AFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0B00-0B7F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0B00-0B7F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0B00-0B7F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0B80-0BFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0B80-0BFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0B80-0BFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0C00-0C7F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0C00-0C7F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0C00-0C7F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0C80-0CFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0C80-0CFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0C80-0CFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0D00-0D7F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0D00-0D7F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0D00-0D7F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0D80-0DFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0D80-0DFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0D80-0DFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0E00-0E7F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0E00-0E7F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0E00-0E7F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0E80-0EFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0E80-0EFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0E80-0EFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0F00-0FFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0F00-0FFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+0F00-0FFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1000-109F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1000-109F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1000-109F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10A0-10FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10A0-10FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+10A0-10FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1100-11FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1100-11FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1100-11FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1200-137F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1200-137F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1200-137F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/13A0-13FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/13A0-13FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+13A0-13FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1400-167F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1400-167F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1400-167F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1680-169F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1680-169F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1680-169F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/16A0-16FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/16A0-16FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+16A0-16FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1700-171F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1700-171F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1700-171F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1720-173F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1720-173F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1720-173F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1740-175F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1740-175F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1740-175F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1760-177F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1760-177F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1760-177F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1780-17FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1780-17FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1780-17FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1800-18AF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1800-18AF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1800-18AF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1900-194F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1900-194F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1900-194F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1950-197F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1950-197F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1950-197F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/19E0-19FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/19E0-19FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+19E0-19FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1D00-1D7F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1D00-1D7F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1D00-1D7F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1E00-1EFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1E00-1EFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1E00-1EFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1F00-1FFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1F00-1FFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1F00-1FFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2000-206F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2000-206F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2000-206F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2070-209F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2070-209F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2070-209F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/20A0-20CF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/20A0-20CF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+20A0-20CF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/20D0-20FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/20D0-20FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+20D0-20FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2100-214F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2100-214F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2100-214F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2150-218F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2150-218F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2150-218F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2190-21FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2190-21FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2190-21FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2200-22FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2200-22FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2200-22FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2300-23FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2300-23FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2300-23FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2400-243F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2400-243F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2400-243F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2440-245F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2440-245F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2440-245F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2460-24FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2460-24FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2460-24FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2500-257F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2500-257F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2500-257F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2580-259F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2580-259F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2580-259F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/25A0-25FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/25A0-25FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+25A0-25FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2600-26FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2600-26FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2600-26FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2700-27BF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2700-27BF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2700-27BF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/27C0-27EF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/27C0-27EF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+27C0-27EF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/27F0-27FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/27F0-27FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+27F0-27FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2800-28FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2800-28FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2800-28FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2900-297F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2900-297F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2900-297F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2980-29FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2980-29FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2980-29FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2A00-2AFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2A00-2AFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2A00-2AFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2B00-2BFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2B00-2BFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2B00-2BFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2E80-2EFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2E80-2EFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2E80-2EFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2F00-2FDF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2F00-2FDF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2F00-2FDF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2FF0-2FFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2FF0-2FFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2FF0-2FFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/3000-303F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/3000-303F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+3000-303F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/3040-309F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/3040-309F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+3040-309F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/30A0-30FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/30A0-30FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+30A0-30FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/3100-312F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/3100-312F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+3100-312F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/3130-318F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/3130-318F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+3130-318F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/3190-319F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/3190-319F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+3190-319F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/31A0-31BF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/31A0-31BF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+31A0-31BF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/31F0-31FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/31F0-31FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+31F0-31FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/3200-32FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/3200-32FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+3200-32FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/3300-33FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/3300-33FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+3300-33FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/3400-4DBF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/3400-4DBF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+3400-4DBF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/4DC0-4DFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/4DC0-4DFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+4DC0-4DFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/4E00-9FFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/4E00-9FFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+4E00-9FFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/A000-A48F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/A000-A48F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+A000-A48F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/A490-A4CF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/A490-A4CF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+A490-A4CF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/AC00-D7AF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/AC00-D7AF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+AC00-D7AF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/D800-DB7F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/D800-DB7F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+D800-DB7F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/DB80-DBFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/DB80-DBFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+DB80-DBFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/DC00-DFFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/DC00-DFFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+DC00-DFFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/E000-F8FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/E000-F8FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+E000-F8FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/F900-FAFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/F900-FAFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+F900-FAFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FB00-FB4F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FB00-FB4F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+FB00-FB4F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FB50-FDFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FB50-FDFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+FB50-FDFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FE00-FE0F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FE00-FE0F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+FE00-FE0F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FE20-FE2F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FE20-FE2F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+FE20-FE2F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FE30-FE4F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FE30-FE4F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+FE30-FE4F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FE50-FE6F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FE50-FE6F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+FE50-FE6F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FE70-FEFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FE70-FEFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+FE70-FEFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FF00-FFEF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FF00-FFEF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+FF00-FFEF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FFF0-FFFF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FFF0-FFFF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+FFF0-FFFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10000-1007F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10000-1007F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+10000-1007F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10080-100FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10080-100FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+10080-100FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10100-1013F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10100-1013F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+10100-1013F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10300-1032F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10300-1032F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+10300-1032F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10330-1034F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10330-1034F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+10330-1034F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10380-1039F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10380-1039F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+10380-1039F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10400-1044F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10400-1044F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+10400-1044F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10450-1047F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10450-1047F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+10450-1047F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10480-104AF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10480-104AF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+10480-104AF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10800-1083F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10800-1083F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+10800-1083F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1D000-1D0FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1D000-1D0FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1D000-1D0FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1D100-1D1FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1D100-1D1FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1D100-1D1FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1D300-1D35F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1D300-1D35F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1D300-1D35F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1D400-1D7FF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1D400-1D7FF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+1D400-1D7FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/20000-2A6DF/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/20000-2A6DF/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+20000-2A6DF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2F800-2FA1F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2F800-2FA1F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+2F800-2FA1F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Regular";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/E0000-E007F/noto_sans_regular.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/E0000-E007F/noto_sans_regular.woff?4f69b8c) format("woff");
      font-weight: 400;
      font-style: normal;
      unicode-range: U+E0000-E007F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0020-007F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0020-007F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0020-007F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/00A0-00FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/00A0-00FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+00A0-00FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0100-017F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0100-017F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0100-017F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0180-024F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0180-024F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0180-024F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0250-02AF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0250-02AF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0250-02AF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/02B0-02FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/02B0-02FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+02B0-02FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0300-036F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0300-036F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0300-036F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0370-03FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0370-03FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0370-03FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0400-04FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0400-04FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0400-04FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0500-052F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0500-052F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0500-052F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0530-058F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0530-058F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0530-058F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0590-05FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0590-05FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0590-05FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0600-06FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0600-06FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0600-06FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0700-074F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0700-074F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0700-074F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0780-07BF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0780-07BF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0780-07BF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0900-097F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0900-097F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0900-097F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0980-09FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0980-09FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0980-09FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0A00-0A7F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0A00-0A7F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0A00-0A7F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0A80-0AFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0A80-0AFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0A80-0AFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0B00-0B7F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0B00-0B7F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0B00-0B7F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0B80-0BFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0B80-0BFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0B80-0BFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0C00-0C7F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0C00-0C7F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0C00-0C7F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0C80-0CFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0C80-0CFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0C80-0CFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0D00-0D7F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0D00-0D7F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0D00-0D7F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0D80-0DFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0D80-0DFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0D80-0DFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0E00-0E7F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0E00-0E7F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0E00-0E7F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0E80-0EFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0E80-0EFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0E80-0EFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/0F00-0FFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/0F00-0FFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+0F00-0FFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1000-109F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1000-109F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1000-109F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10A0-10FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10A0-10FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+10A0-10FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1100-11FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1100-11FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1100-11FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1200-137F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1200-137F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1200-137F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/13A0-13FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/13A0-13FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+13A0-13FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1400-167F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1400-167F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1400-167F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1680-169F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1680-169F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1680-169F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/16A0-16FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/16A0-16FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+16A0-16FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1700-171F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1700-171F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1700-171F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1720-173F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1720-173F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1720-173F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1740-175F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1740-175F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1740-175F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1760-177F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1760-177F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1760-177F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1780-17FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1780-17FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1780-17FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1800-18AF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1800-18AF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1800-18AF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1900-194F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1900-194F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1900-194F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1950-197F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1950-197F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1950-197F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/19E0-19FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/19E0-19FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+19E0-19FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1D00-1D7F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1D00-1D7F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1D00-1D7F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1E00-1EFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1E00-1EFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1E00-1EFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2580-259F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2580-259F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+2580-259F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/25A0-25FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/25A0-25FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+25A0-25FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2600-26FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2600-26FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+2600-26FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2700-27BF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2700-27BF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+2700-27BF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/27C0-27EF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/27C0-27EF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+27C0-27EF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/27F0-27FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/27F0-27FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+27F0-27FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2800-28FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2800-28FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+2800-28FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2900-297F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2900-297F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+2900-297F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2980-29FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2980-29FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+2980-29FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2A00-2AFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2A00-2AFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+2A00-2AFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2B00-2BFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2B00-2BFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+2B00-2BFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2E80-2EFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2E80-2EFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+2E80-2EFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2F00-2FDF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2F00-2FDF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+2F00-2FDF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2FF0-2FFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2FF0-2FFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+2FF0-2FFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/3000-303F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/3000-303F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+3000-303F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/3040-309F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/3040-309F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+3040-309F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/30A0-30FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/30A0-30FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+30A0-30FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/3100-312F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/3100-312F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+3100-312F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/3130-318F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/3130-318F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+3130-318F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/3190-319F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/3190-319F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+3190-319F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/31A0-31BF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/31A0-31BF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+31A0-31BF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/31F0-31FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/31F0-31FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+31F0-31FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/3200-32FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/3200-32FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+3200-32FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/3300-33FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/3300-33FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+3300-33FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/3400-4DBF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/3400-4DBF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+3400-4DBF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/4DC0-4DFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/4DC0-4DFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+4DC0-4DFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/4E00-9FFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/4E00-9FFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+4E00-9FFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/A000-A48F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/A000-A48F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+A000-A48F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/A490-A4CF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/A490-A4CF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+A490-A4CF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/AC00-D7AF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/AC00-D7AF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+AC00-D7AF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/D800-DB7F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/D800-DB7F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+D800-DB7F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/DB80-DBFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/DB80-DBFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+DB80-DBFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/DC00-DFFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/DC00-DFFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+DC00-DFFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/E000-F8FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/E000-F8FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+E000-F8FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/F900-FAFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/F900-FAFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+F900-FAFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FB00-FB4F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FB00-FB4F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+FB00-FB4F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FB50-FDFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FB50-FDFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+FB50-FDFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FE00-FE0F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FE00-FE0F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+FE00-FE0F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FE20-FE2F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FE20-FE2F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+FE20-FE2F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FE30-FE4F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FE30-FE4F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+FE30-FE4F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FE50-FE6F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FE50-FE6F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+FE50-FE6F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FE70-FEFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FE70-FEFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+FE70-FEFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FF00-FFEF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FF00-FFEF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+FF00-FFEF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/FFF0-FFFF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/FFF0-FFFF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+FFF0-FFFF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10000-1007F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10000-1007F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+10000-1007F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10080-100FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10080-100FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+10080-100FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10100-1013F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10100-1013F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+10100-1013F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10300-1032F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10300-1032F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+10300-1032F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10330-1034F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10330-1034F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+10330-1034F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10380-1039F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10380-1039F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+10380-1039F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10400-1044F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10400-1044F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+10400-1044F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10450-1047F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10450-1047F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+10450-1047F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10480-104AF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10480-104AF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+10480-104AF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/10800-1083F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/10800-1083F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+10800-1083F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1D000-1D0FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1D000-1D0FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1D000-1D0FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1D100-1D1FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1D100-1D1FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1D100-1D1FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1D300-1D35F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1D300-1D35F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1D300-1D35F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/1D400-1D7FF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/1D400-1D7FF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+1D400-1D7FF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/20000-2A6DF/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/20000-2A6DF/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+20000-2A6DF;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/2F800-2FA1F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/2F800-2FA1F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+2F800-2FA1F;
    }

    @font-face {
      font-family: "Crisp Noto Sans Bold";
      src: url(https://client.crisp.chat/static/fonts/noto_sans/E0000-E007F/noto_sans_bold.woff2?4f69b8c) format("woff2"), url(https://client.crisp.chat/static/fonts/noto_sans/E0000-E007F/noto_sans_bold.woff?4f69b8c) format("woff");
      font-weight: 700;
      font-style: normal;
      unicode-range: U+E0000-E007F;
    }
  </style>
</head>

<body cz-shortcut-listen="true">
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5MSXGZT" height=0 width=0 style=display:none;visibility:hidden></iframe>
  </noscript>
    <div id="app" class="frk-normalizer has-compact-nav">
      <!---->
      <div class="nav">
        <div id="header">
          <nav role="navigation" aria-label="main navigation" class="navbar has-black-background is-light rel">
            <div class="navbar-item is-hidden-touch centered-logo-container">
              <div class="logo">
                <!----><img src="/assets/imgs/icon/logoc-ff.png" alt="FreelanceRepublik" class="logo">
                <!---->
                <!---->
              </div>
            </div>
            <a class="is-hidden-desktop login-button frk-action-button-red-inverted">ME CONNECTER</a>
            <div class="navbar-menu">
              <div class="navbar-start"><a href="/codact" class="navbar-item navbar-simple" id="concept" data-test="ConceptLink">CONCEPT</a>
                  <a href="/contact" class="navbar-item navbar-simple" id="contact" data-test="ContactLink">CONTACTEZ NOUS</a>
                  @guest
                  <a href="/login" class="navbar-item navbar-simple text-red is-hidden-desktop">SE CONNECTER</a>
                  @endguest
                  @auth
                  <a href="/home" class="navbar-item navbar-simple text-red is-hidden-desktop">TABLEAU DE BORD</a>
                  @endauth
              </div>

              <div class="navbar-end is-hidden-touch">
                  @guest
                  <a class="mr-1 frk-action-button-red-inverted" href="/login">ME CONNECTER</a>
                  @endguest
                  @auth
                  <a class="mr-1 frk-action-button-red-inverted" href="/home">TABLEAU DE BORD</a>
                  @endauth
              </div>
            </div>
          </nav>
        </div>
      </div>

      @yield('content')

    </div>
    <div id="#modalHost"></div>

</body>

</html>
