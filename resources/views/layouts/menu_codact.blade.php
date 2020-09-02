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
    /*! CSS Used from: https://www.freelancerepublik.com/assets/css/chunk-vendors.ef702a6b.css */
    .fadeIn {
      -webkit-animation-name: fadeIn;
      animation-name: fadeIn;
    }

    .fadeInDown {
      -webkit-animation-name: fadeInDown;
      animation-name: fadeInDown;
    }

    .fadeInUp {
      -webkit-animation-name: fadeInUp;
      animation-name: fadeInUp;
    }

    .animated {
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }

    @media (prefers-reduced-motion:reduce),
    (print) {
      .animated {
        -webkit-animation-duration: 1ms !important;
        animation-duration: 1ms !important;
        transition-duration: 1ms !important;
        -webkit-animation-iteration-count: 1 !important;
        animation-iteration-count: 1 !important;
      }
    }

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

    .frk-container[data-v-d722a68c] {
      width: 1200px;
      max-width: 96vw;
      margin-left: auto !important;
      margin-right: auto !important;
    }

    @media screen and (max-width:1023px) {
      .frk-container[data-v-d722a68c] {
        max-width: 90vw;
      }
    }

    .column[data-v-d722a68c],
    .columns[data-v-d722a68c] {
      margin: 0;
      padding: 0;
    }

    p[data-v-d722a68c] {
      color: #b2b2b2;
      font-family: 'Montserrat', sans-serif;
      font-size: 1.29rem;
      line-height: 22px;
    }

    @media screen and (max-width:1023px) {
      p[data-v-d722a68c] {
        font-size: 1rem;
        line-height: 19px;
        text-align: center;
      }
    }

    .footer[data-v-d722a68c] {
      min-height: 347px;
      background-color: #292a2b;
      padding: 74px 0 0;
      width: 100%;
    }

    .footer .title[data-v-d722a68c] {
      color: #fafafa;
      font-family: 'Montserrat', sans-serif;
      font-size: .85rem;
      font-weight: 900;
      line-height: 15px;
      margin-bottom: 24px;
    }

    .footer .logo[data-v-d722a68c] {
      height: 42px;
      margin-bottom: 12px;
    }

    .footer .headline[data-v-d722a68c] {
      width: 325px;
      max-width: 25vw;
      opacity: .7;
      color: #fff;
      font-family: 'Montserrat', sans-serif;
      font-size: 1rem;
      line-height: 28px;
    }

    .footer a[data-v-d722a68c],
    .footer p[data-v-d722a68c] {
      color: #7e8082;
      font-family: 'Montserrat', sans-serif;
      font-size: 1rem;
      line-height: 28px;
      text-align: left !important;
    }

    .footer small[data-v-d722a68c] {
      display: block;
    }

    .footer small[data-v-d722a68c],
    .footer small a[data-v-d722a68c] {
      margin-top: 45px;
      color: #7e8082;
      font-family: 'Montserrat', sans-serif;
      font-size: .85rem;
      line-height: 20px;
      text-align: center;
    }

    .footer a[data-v-d722a68c]:hover {
      color: #b2b3b4;
    }

    @media screen and (max-width:1023px) {
      .footer[data-v-d722a68c] {
        padding: 37px 24px 0 24px;
      }

      .footer .column[data-v-d722a68c] {
        margin-bottom: 30px;
      }

      .footer .headline[data-v-d722a68c] {
        max-width: 96%;
      }

      .footer small[data-v-d722a68c] {
        text-align: left;
      }
    }

    .footer .social[data-v-d722a68c] {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-preferred-size: auto;
      flex-basis: auto;
      width: 60%;
      margin-top: 1rem;
    }

    .footer .social a[data-v-d722a68c] {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
    }

    .footer .social img[data-v-d722a68c] {
      height: 25px;
    }

    #header[data-v-62883d68] {
      z-index: 999 !important;
    }

    .navbar-end[data-v-62883d68] {
      text-align: center;
    }

    .navbar-end a[data-v-62883d68] {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
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
      font-family: 'Montserrat', sans-serif;
    }

    .title {
      font-family: 'Montserrat', sans-serif;
      color: #363738;
    }

    .title {
      font-weight: 500;
    }

    body,
    h1,
    h2,
    h3,
    li,
    p,
    ul {
      margin: 0;
      padding: 0;
    }

    h1,
    h2,
    h3 {
      font-size: 100%;
      font-weight: 400;
    }

    ul {
      list-style: none;
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

    footer,
    section {
      display: block;
    }

    body {
      font-family: 'Montserrat', sans-serif;
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

    small {
      font-size: .875em;
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

    .title {
      word-break: break-word;
    }

    .title:not(:last-child) {
      margin-bottom: 1.5rem;
    }

    .title {
      color: #363738;
      font-size: 2rem;
      font-weight: 600;
      line-height: 1.125;
    }

    .navbar {
      background-color: #fff;
      min-height: 5rem;
      position: relative;
    }

    .navbar-brand {
      -webkit-box-align: stretch;
      -ms-flex-align: stretch;
      align-items: stretch;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      min-height: 5rem;
    }

    .navbar-burger {
      cursor: pointer;
      display: block;
      height: 5rem;
      position: relative;
      width: 5rem;
      margin-left: auto;
    }

    .navbar-burger span {
      background-color: currentColor;
      display: block;
      height: 1px;
      left: calc(50% - 8px);
      position: absolute;
      -webkit-transform-origin: center;
      transform-origin: center;
      -webkit-transition-duration: 86ms;
      transition-duration: 86ms;
      -webkit-transition-property: background-color, opacity, -webkit-transform;
      transition-property: background-color, opacity, -webkit-transform;
      transition-property: background-color, opacity, transform;
      transition-property: background-color, opacity, transform, -webkit-transform;
      -webkit-transition-timing-function: ease-out;
      transition-timing-function: ease-out;
      width: 16px;
    }

    .navbar-burger span:first-child {
      top: calc(50% - 6px);
    }

    .navbar-burger span:nth-child(2) {
      top: calc(50% - 1px);
    }

    .navbar-burger span:nth-child(3) {
      top: calc(50% + 4px);
    }

    .navbar-burger:hover {
      background-color: rgba(0, 0, 0, .05);
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

      .navbar-burger {
        display: none;
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
      .column.is-4 {
        -webkit-box-flex: 0;
        -ms-flex: none;
        flex: none;
        width: 33.33333%;
      }
    }

    .columns {
      margin-left: -.75rem;
      margin-right: -.75rem;
      margin-top: -.75rem;
    }

    .columns:not(:last-child) {
      margin-bottom: .75rem;
    }

    @media print,
    screen and (min-width:769px) {
      .columns:not(.is-desktop) {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
      }
    }

    .footer {
      background-color: #f5f5f5;
      padding: 3rem 1.5rem 6rem;
    }

    .frk-action-button-blue {
      display: inline-block;
      border-radius: 6px;
      font-family: 'Montserrat', sans-serif;
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

    .frk-action-button-blue-inverted {
      display: inline-block;
      border-radius: 6px;
      font-family: 'Montserrat', sans-serif;
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
      border: 1px solid #128dce;
      color: #128dce;
    }

    .frk-action-button-blue-inverted.frk-has-arrow {
      padding-right: 45px;
      position: relative;
    }

    .frk-action-button-blue-inverted.frk-has-arrow:after {
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

    .frk-action-button-blue-inverted:hover:not(.frk-disabled) {
      cursor: pointer;
      color: #fafafa;
      -webkit-transform: translateY(-2px);
      transform: translateY(-2px);
      -webkit-box-shadow: 0 3px 10px 0 rgba(54, 55, 56, .3);
      box-shadow: 0 3px 10px 0 rgba(54, 55, 56, .3);
    }

    .frk-action-button-blue-inverted:hover {
      color: #036ea8 !important;
    }

    .frk-action-link {
      display: inline-block;
      color: #363738;
      font-family: 'Montserrat', sans-serif;
      font-size: .85rem;
      font-weight: 700;
      line-height: 13px;
      -webkit-transition: color .5s, -webkit-transform .5s;
      transition: color .5s, -webkit-transform .5s;
      transition: color .5s, transform .5s;
      transition: color .5s, transform .5s, -webkit-transform .5s;
      text-decoration: underline;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    .frk-action-link:hover {
      -webkit-box-shadow: none;
      box-shadow: none;
      cursor: pointer;
      color: #040404;
      -webkit-transform: translateY(-1px);
      transform: translateY(-1px);
    }

    .rel {
      position: relative;
    }

    .mr-a {
      margin-right: auto !important;
    }

    .mr-1 {
      margin-right: 1rem !important;
    }

    .mr-2 {
      margin-right: 2rem !important;
    }

    .ml-0 {
      margin-left: 0 !important;
    }

    .wow {
      visibility: hidden;
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
      font-family: 'Montserrat', sans-serif;
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

    #header .navbar .navbar-end .frk-action-link {
      text-align: center;
    }

    #header .navbar .navbar-burger span {
      background: #363738;
    }

    #header .navbar .logo {
      height: 36px;
      max-height: 100%;
    }

    #header .navbar .logo-mobile {
      position: absolute;
      top: 22px;
      left: calc(50% - 50px);
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

    .frk-normalizer p {
      margin-bottom: .71rem;
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

    .ml-0 {
      margin-left: 0 !important;
    }

    .mr-1 {
      margin-right: .25rem !important;
    }

    .mr-2 {
      margin-right: .5rem !important;
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
      font-family: "Crisp Noto Sans Regular", sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z :placeholder,
    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z:placeholder {
      font-family: "Crisp Noto Sans Regular", sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z :-moz-placeholder,
    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z:-moz-placeholder {
      font-family: "Crisp Noto Sans Regular", sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z ::-moz-placeholder,
    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z::-moz-placeholder {
      font-family: "Crisp Noto Sans Regular", sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z :-ms-input-placeholder,
    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z:-ms-input-placeholder {
      font-family: "Crisp Noto Sans Regular", sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z ::-webkit-input-placeholder,
    .crisp-client .crisp-1rjpbb7 .crisp-9dgo7z::-webkit-input-placeholder {
      font-family: "Crisp Noto Sans Regular", sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-13qutdl {
      font-family: "Crisp Noto Sans Bold", sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-13qutdl:placeholder {
      font-family: "Crisp Noto Sans Bold", sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-13qutdl:-moz-placeholder {
      font-family: "Crisp Noto Sans Bold", sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-13qutdl::-moz-placeholder {
      font-family: "Crisp Noto Sans Bold", sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-13qutdl:-ms-input-placeholder {
      font-family: "Crisp Noto Sans Bold", sans-serif !important;
    }

    .crisp-client .crisp-1rjpbb7 .crisp-13qutdl::-webkit-input-placeholder {
      font-family: "Crisp Noto Sans Bold", sans-serif !important;
    }

    @media print {
      .crisp-client .crisp-1rjpbb7 {
        display: none !important;
      }
    }

    .crisp-client .crisp-1rjpbb7 {
      font-family: "Crisp Noto Sans Regular", "Helvetica Neue", Helvetica, Arial, sans-serif !important;
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

    /*! CSS Used from: https://www.freelancerepublik.com/assets/css/chunk-d40965cc.99cff68c.css */
    h3[data-v-270f5fc6] {
      color: #363738;
      font-family: 'Montserrat', sans-serif;
      font-size: 1.29rem;
      font-weight: 500;
      line-height: 25px;
    }

    @media screen and (max-width:1023px) {
      h3[data-v-270f5fc6] {
        font-size: 1rem;
        line-height: 20px;
        text-align: center;
      }
    }

    section[data-v-270f5fc6] {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      background-color: #f2f2f2;
      padding: 5.72rem 0 1.43rem;
    }

    h3[data-v-270f5fc6] {
      margin-bottom: 2.86rem;
    }

    div[data-v-270f5fc6] {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    img[data-v-270f5fc6] {
      height: 25px;
      margin: 0 5.005rem 1.43rem;
    }

    /*! CSS Used from: https://www.freelancerepublik.com/assets/css/chunk-3fbec794.14e79e6f.css */
    .anim>svg {
      height: 390px !important;
      width: 750px !important;
      margin-right: -150px;
    }

    .frk-container[data-v-4e2a56e8] {
      width: 1200px;
      max-width: 96vw;
      margin-left: auto !important;
      margin-right: auto !important;
    }

    @media screen and (max-width:1023px) {
      .frk-container[data-v-4e2a56e8] {
        max-width: 90vw;
      }
    }

    #page[data-v-4e2a56e8] {
      background-color: #fff;
    }

    h1[data-v-4e2a56e8] {
      color: #363738;
      font-family: 'Montserrat', sans-serif;
      font-size: 3.21rem;
      font-weight: 500;
      line-height: 50px;
    }

    @media screen and (max-width:1023px) {
      h1[data-v-4e2a56e8] {
        font-size: 2.14rem;
        line-height: 30px;
        max-width: 80vw;
        text-align: center;
        margin: auto;
      }
    }

    h2[data-v-4e2a56e8] {
      color: #363738;
      font-family: 'Montserrat', sans-serif;
      font-size: 1.57rem;
      font-weight: 500;
      line-height: 41px;
    }

    @media screen and (max-width:1023px) {
      h2[data-v-4e2a56e8] {
        font-size: 1.57rem;
        line-height: 28px;
        text-align: center;
      }
    }

    h3[data-v-4e2a56e8] {
      color: #363738;
      font-family: 'Montserrat', sans-serif;
      font-size: 1.29rem;
      font-weight: 500;
      line-height: 25px;
    }

    @media screen and (max-width:1023px) {
      h3[data-v-4e2a56e8] {
        font-size: 1rem;
        line-height: 20px;
        text-align: center;
      }
    }

    p[data-v-4e2a56e8] {
      color: #b2b2b2;
      font-family: 'Montserrat', sans-serif;
      font-size: 1.29rem;
      line-height: 22px;
    }

    @media screen and (max-width:1023px) {
      p[data-v-4e2a56e8] {
        font-size: 1rem;
        line-height: 19px;
        text-align: center;
      }
    }

    #page[data-v-4e2a56e8] {
      background: #f2f2f2;
    }

    .column[data-v-4e2a56e8],
    .columns[data-v-4e2a56e8] {
      margin: 0;
      padding: 0;
    }

    .line[data-v-4e2a56e8] {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row;
    }

    @media screen and (max-width:1023px) {
      .line[data-v-4e2a56e8] {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
      }

      .line.inverted[data-v-4e2a56e8] {
        -webkit-box-orient: vertical;
        -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
        flex-direction: column-reverse;
      }
    }

    .cover[data-v-4e2a56e8] {
      background-color: #fafafa;
      padding-top: 146px;
      height: 698px;
    }

    .cover .line[data-v-4e2a56e8] {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .cover p[data-v-4e2a56e8] {
      margin-top: 20px;
      margin-bottom: 61px;
      color: #7e8082;
      font-size: 1.29rem;
      line-height: 28px;
    }

    .cover .illu[data-v-4e2a56e8] {
      background: url(https://www.freelancerepublik.com/assets/img/Illu-cover.521e18e6.png) no-repeat;
      background-size: contain;
    }

    @media screen and (max-width:1023px) {
      .cover[data-v-4e2a56e8] {
        padding-top: 20px !important;
        padding-bottom: 0 !important;
        height: 600px !important;
        text-align: center;
      }

      .cover .illu[data-v-4e2a56e8] {
        width: 90vw;
        height: 164px;
        margin-bottom: 50px;
        background-position: 50%;
      }

      .cover p[data-v-4e2a56e8] {
        font-size: 1rem;
        line-height: 17px;
        text-align: center;
        max-width: 80vw;
        margin: auto;
        margin-top: 16px;
        margin-bottom: 28px;
      }

      .cover .speech[data-v-4e2a56e8] {
        padding: 0;
      }
    }

    .companies[data-v-4e2a56e8] {
      background-color: #fafafa;
      -webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .1);
      box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .1);
      border-radius: 20px;
      padding-top: 0px;
      padding-bottom: 0px;
      margin-top: -72px;
      overflow: hidden;
      min-height: 245px;
    }

    @media screen and (max-width:1023px) {
      .companies[data-v-4e2a56e8] {
        height: 305px;
      }
    }

    .companies p[data-v-4e2a56e8] {
      color: #363738;
      font-family: 'Montserrat', sans-serif;
      font-size: 1.29rem;
      font-weight: 500;
      line-height: 23px;
      text-align: center;
      margin-bottom: 26px;
    }

    .companies .logos[data-v-4e2a56e8] {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .companies .logos .logo[data-v-4e2a56e8] {
      -ms-flex-preferred-size: auto;
      flex-basis: auto;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      text-align: center;
    }

    .companies .deezer[data-v-4e2a56e8] {
      width: 100px;
    }

    .companies .dashlane[data-v-4e2a56e8] {
      width: 100px;
    }

    .companies .netatmo[data-v-4e2a56e8] {
      width: 100px;
    }

    .companies .leguide[data-v-4e2a56e8] {
      width: 100px;
    }

    @media screen and (max-width:1023px) {
      .companies[data-v-4e2a56e8] {
        width: 95vw;
        margin-left: auto;
        padding-top: 38px;
        padding-bottom: 30px;
        margin-top: -99px;
      }

      .companies img[data-v-4e2a56e8] {
        margin: 0 33px;
      }

      .companies .deezer[data-v-4e2a56e8] {
        width: 75px;
      }

      .companies .dashlane[data-v-4e2a56e8] {
        width: 91px;
      }

      .companies .netatmo[data-v-4e2a56e8] {
        width: 94px;
      }

      .companies .leguide[data-v-4e2a56e8] {
        width: 87px;
      }

      .companies p[data-v-4e2a56e8] {
        font-size: 1rem;
        line-height: 18px;
        text-align: center;
        padding: 0 14px;
      }
    }

    .usage[data-v-4e2a56e8] {
      padding-top: 9rem;
      padding-bottom: 57px;
    }

    .usage h2[data-v-4e2a56e8] {
      text-align: center;
      margin-bottom: 80px;
    }

    .usage h3[data-v-4e2a56e8] {
      margin-top: 17px;
    }

    .usage p[data-v-4e2a56e8] {
      margin-top: 19px;
      max-width: 300px;
    }

    .usage .frk-content[data-v-4e2a56e8] {
      max-width: 300px;
      margin: 0 auto;
    }

    .usage .frk-button[data-v-4e2a56e8] {
      text-align: center;
      margin-top: 65px;
    }

    .usage .first img[data-v-4e2a56e8] {
      height: 71px;
      margin: 17px 0 9px;
    }

    .usage .second img[data-v-4e2a56e8] {
      height: 97px;
    }

    .usage .third img[data-v-4e2a56e8] {
      height: 83px;
      margin-bottom: 15px;
    }

    @media screen and (max-width:1023px) {
      .usage[data-v-4e2a56e8] {
        padding-top: 0;
        margin-top: 39px;
      }

      .usage .frk-content[data-v-4e2a56e8] {
        text-align: center;
        margin-bottom: 45px;
      }

      .usage .frk-content img[data-v-4e2a56e8] {
        margin: 0;
        margin-bottom: 15px;
      }

      .usage h2[data-v-4e2a56e8] {
        margin-bottom: 45px;
      }

      .usage p[data-v-4e2a56e8] {
        margin-top: 8px;
      }
    }

    .price[data-v-4e2a56e8] {
      background-color: #fafafa;
      padding: 98px 0;
    }

    .price .price-container[data-v-4e2a56e8] {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start;
    }

    .price .price-container h2[data-v-4e2a56e8] {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
    }

    .price .price-container p[data-v-4e2a56e8] {
      max-width: 500px;
    }

    .price .price-container .frk-button[data-v-4e2a56e8] {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      text-align: right;
    }

    @media screen and (max-width:1023px) {
      .price[data-v-4e2a56e8] {
        padding: 47px 0;
      }

      .price .price-container[data-v-4e2a56e8] {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
      }

      .price .price-container p[data-v-4e2a56e8] {
        width: 90vw;
        margin: 28px auto 26px;
      }
    }

    .promise[data-v-4e2a56e8] {
      background-color: #fafafa;
    }

    .promise .line[data-v-4e2a56e8] {
      margin: 0 !important;
      padding: 0 !important;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row;
    }

    .promise .line-item[data-v-4e2a56e8] {
      height: 600px;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      -ms-flex-preferred-size: 0;
      flex-basis: 0;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    .promise .illustration[data-v-4e2a56e8] {
      background-color: #4d90cc !important;
    }

    .promise .line:not(.inverted) .headline[data-v-4e2a56e8],
    .promise .line:not(.inverted) h2[data-v-4e2a56e8],
    .promise .line:not(.inverted) h3[data-v-4e2a56e8],
    .promise .line:not(.inverted) p[data-v-4e2a56e8] {
      padding-left: 100px;
      width: 600px;
    }

    @media screen and (max-width:1023px) {

      .promise .line:not(.inverted) .headline[data-v-4e2a56e8],
      .promise .line:not(.inverted) h2[data-v-4e2a56e8],
      .promise .line:not(.inverted) h3[data-v-4e2a56e8],
      .promise .line:not(.inverted) p[data-v-4e2a56e8] {
        padding: 0;
        width: 98vw;
      }
    }

    .promise .line.inverted .headline[data-v-4e2a56e8],
    .promise .line.inverted h2[data-v-4e2a56e8],
    .promise .line.inverted h3[data-v-4e2a56e8],
    .promise .line.inverted p[data-v-4e2a56e8] {
      padding-left: calc(50vw - 600px);
      padding-right: 100px;
    }

    @media screen and (max-width:1023px) {

      .promise .line.inverted .headline[data-v-4e2a56e8],
      .promise .line.inverted h2[data-v-4e2a56e8],
      .promise .line.inverted h3[data-v-4e2a56e8],
      .promise .line.inverted p[data-v-4e2a56e8] {
        padding: 0;
        width: 98vw;
      }
    }

    .promise .headline[data-v-4e2a56e8] {
      color: #128dce;
      font-family: 'Montserrat', sans-serif;
      font-size: .85rem;
      font-weight: 700;
      line-height: 15px;
      margin-bottom: 8px;
    }

    .promise h3[data-v-4e2a56e8] {
      margin-top: 64px;
      margin-bottom: 9px;
    }

    @media screen and (max-width:1023px) {

      .promise .headline[data-v-4e2a56e8],
      .promise h2[data-v-4e2a56e8],
      .promise h3[data-v-4e2a56e8],
      .promise p[data-v-4e2a56e8] {
        margin-left: auto;
        margin-right: auto;
        padding: 0;
        max-width: 400px;
        width: 95vw;
        text-align: center;
      }

      .promise .line[data-v-4e2a56e8] {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
      }

      .promise .line.inverted[data-v-4e2a56e8] {
        -webkit-box-orient: vertical;
        -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
        flex-direction: column-reverse;
      }

      .promise .line-item[data-v-4e2a56e8] {
        height: 100vw;
        min-height: 400px;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
      }

      .promise h3[data-v-4e2a56e8] {
        margin-top: 26px;
        margin-bottom: 7px;
      }
    }

    .testimony[data-v-4e2a56e8] {
      height: 600px;
      position: relative;
      background: url(https://www.freelancerepublik.com/assets/img/face.cb03ddba.png) no-repeat bottom, #292a2b;
      background-blend-mode: lighten;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    .testimony .text[data-v-4e2a56e8] {
      color: #fafafa;
      font-family: 'Montserrat', sans-serif;
      font-size: 1.29rem;
      font-weight: 500;
      line-height: 32px;
      text-align: center;
      max-width: 33vw;
    }

    .testimony .author[data-v-4e2a56e8] {
      position: absolute;
      bottom: 86px;
      left: 70vw;
      color: #fafafa;
      font-family: 'Montserrat', sans-serif;
      font-size: 1.29rem;
      font-weight: 500;
      line-height: 32px;
    }

    .testimony .profile[data-v-4e2a56e8] {
      position: absolute;
      bottom: 67px;
      left: 70vw;
      color: #7e8082;
      font-family: 'Montserrat', sans-serif;
      font-size: 1rem;
      line-height: 22px;
    }

    .testimony .company[data-v-4e2a56e8] {
      position: absolute;
      bottom: 45px;
      left: 70vw;
      color: #7e8082;
      font-family: 'Montserrat', sans-serif;
      font-size: 1rem;
      line-height: 22px;
    }

    @media screen and (max-width:1023px) {
      .testimony .text[data-v-4e2a56e8] {
        font-size: 1.29rem;
        line-height: 22px;
        max-width: 400px;
        width: 95vw;
        margin: 120px auto 41px;
      }

      .testimony .author[data-v-4e2a56e8],
      .testimony .profile[data-v-4e2a56e8] {
        position: static;
      }
    }

    .actions[data-v-4e2a56e8] {
      background-color: #fafafa;
      text-align: center;
      padding-top: 103px;
      padding-bottom: 47px;
    }

    .actions .rock[data-v-4e2a56e8] {
      width: 245px;
      margin-left: -42px;
    }

    .actions h2[data-v-4e2a56e8] {
      width: 85vw;
      max-width: 540px;
      margin: 46px auto 64px;
    }

    .actions .frk-button[data-v-4e2a56e8] {
      margin-top: 64px;
    }

    .actions .frk-link[data-v-4e2a56e8] {
      margin-top: 45px;
    }

    .promise .first .illustration[data-v-4e2a56e8] {
      background: url(/assets/imgs/prom-2.jpg) no-repeat;
      background-size: 900px auto;
    }

    @media screen and (max-width:1023px) {
      .promise .first .illustration[data-v-4e2a56e8] {
        background-size: 80vw auto;
        background-position: 50%;
      }
    }

    .promise .second .illustration[data-v-4e2a56e8] {
      background: url(/assets/imgs/prom-3.jpg) no-repeat;
      background-size: 900px auto;
    }

    @media screen and (max-width:1023px) {
      .promise .second .illustration[data-v-4e2a56e8] {
        background-size: 80vw auto;
        background-position: 50%;
      }
    }

    .promise .third .illustration[data-v-4e2a56e8] {
      background: url(https://www.freelancerepublik.com/assets/img/Illu3.3c184aba.png) no-repeat top 194px right 88px;
      background-size: 615px auto;
    }

    @media screen and (max-width:1023px) {
      .promise .third .illustration[data-v-4e2a56e8] {
        background-size: 90vw auto;
        background-position: 50%;
      }
    }

    .promise .fourth .illustration[data-v-4e2a56e8] {
      background: url(https://www.freelancerepublik.com/assets/img/Illu4.9d800ab4.png) no-repeat top 76px left 132px;
      background-size: 848px auto;
    }

    @media screen and (max-width:1023px) {
      .promise .fourth .illustration[data-v-4e2a56e8] {
        background-size: 135vw auto;
        background-position: 15vw;
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
    @-webkit-keyframes fadeIn {
      0% {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @-webkit-keyframes fadeInDown {
      0% {
        opacity: 0;
        transform: translate3d(0, -100%, 0);
      }

      to {
        opacity: 1;
        transform: translateZ(0);
      }
    }

    @keyframes fadeInDown {
      0% {
        opacity: 0;
        transform: translate3d(0, -100%, 0);
      }

      to {
        opacity: 1;
        transform: translateZ(0);
      }
    }

    @-webkit-keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translate3d(0, 100%, 0);
      }

      to {
        opacity: 1;
        transform: translateZ(0);
      }
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translate3d(0, 100%, 0);
      }

      to {
        opacity: 1;
        transform: translateZ(0);
      }
    }

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
      src: url(data:font/woff2;base64,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) format("woff2"), url(data:font/woff;base64,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) format("woff"), url(https://www.freelancerepublik.com/assets/fonts/frk-icons.4488880c.ttf) format("truetype");
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
    .is-active{
      display: block;
    }
  </style>
</head>

<body cz-shortcut-listen="true">

<div id="app" class="frk-normalizer has-compact-nav">
  <!---->
  <div class="nav">
    <div data-v-62883d68="" id="header">
      <nav data-v-62883d68="" role="navigation" aria-label="main navigation" class="navbar rel">
        <div data-v-62883d68="" class="navbar-item is-hidden-touch centered-logo-container">
          <div data-v-62883d68="" class="logo"><img src="/assets/imgs/icon/logoc-ff.png" alt="FreelanceRepublik" class="logo">
            <!---->
            <!---->
            <!---->
          </div>
        </div>
        <div data-v-62883d68="" class="navbar-brand">
          <div data-v-62883d68="" class="navbar-burger mr-a ml-0"><span data-v-62883d68=""></span><span data-v-62883d68=""></span><span data-v-62883d68=""></span></div>
        </div>
        <div data-v-62883d68="" class="logo logo-mobile is-hidden-desktop">
          <!---->
          <!---->
          <!----><img src="/assets/imgs/icon/codact.png" alt="codatict" class="logo"></div><a data-v-62883d68="" class="is-hidden-desktop login-button frk-action-button-blue-inverted">ME CONNECTER</a>
        <div data-v-62883d68="" class="navbar-menu">
          <div data-v-62883d68="" class="navbar-start"><!--a data-v-62883d68="" href="/freelance" class="navbar-item navbar-simple link is-hidden-desktop">VOUS ETES UN FREELANCE?</a-->
              @guest
                <a href="/login" data-v-62883d68="" class="navbar-item navbar-simple bg-blue is-hidden-desktop frk-action-button-blue">ME CONNECTER</a>
                @endguest
                @auth
                <a href="/login" data-v-62883d68="" class="navbar-item navbar-simple bg-blue is-hidden-desktop frk-action-button-blue">TABLEAU DE BORD</a>
             @endauth
              <a data-v-62883d68="" href="/"
              class="navbar-item navbar-simple router-link-active">ACCUEIL</a><a data-v-62883d68="" href="/codact" class="navbar-item navbar-simple">CONCEPT</a><a data-v-62883d68="" href="/contact" class="navbar-item navbar-simple" id="contact"
              data-test="ContactLink">CONTACTEZ NOUS</a></div>
          <div data-v-62883d68="" class="navbar-end is-hidden-touch">
            @guest
              <a href="/login" data-v-62883d68="" class="mr-2 frk-action-button-blue frk-has-arrow">ME CONNECTER</a>
              @endguest
              @auth
              <a href="/login" data-v-62883d68="" class="mr-2 frk-action-button-blue ">TABLEAU DE BORD</a>
            @endauth
          </div>
        </div>
      </nav>
    </div>
  </div>

    @yield('content')

  <footer data-v-d722a68c="" class="footer">
    <div data-v-d722a68c="" class="frk-container">
      <div data-v-d722a68c="" class="columns">
        <div data-v-d722a68c="" class="column is-4"><img data-v-d722a68c="" src="/assets/imgs/icon/logoc-ff.png" alt="Codadict" class="logo">
          <div data-v-d722a68c="" class="headline">Recevez la meilleure aide possible pour votre projet.</div>
          <!--div data-v-d722a68c="" class="social"><a data-v-d722a68c="" href="https://www.linkedin.com/company/freelancerepublik" title="Suivez nous sur Linkedin"><img data-v-d722a68c="" src="/assets/img/linkedin.1ce6ddc9.svg" alt="Linkedin"></a><a
              data-v-d722a68c="" href="https://twitter.com/Freelance_Talks" title="Suivez nous sur Twitter"><img data-v-d722a68c="" src="/assets/img/twitter.19c5264a.svg" alt="Twitter"></a><a data-v-d722a68c=""
              href="https://www.facebook.com/freelancerepublik" title="Suivez nous sur Facebook"><img data-v-d722a68c="" src="/assets/img/facebook.f294c082.svg" alt="Facebook"></a>
          </div-->
        </div>
        <div data-v-d722a68c="" class="column">
          <div data-v-d722a68c="" class="title">LIENS</div>
          <nav data-v-d722a68c="">
            <ul data-v-d722a68c="" class="text">
              <!--li data-v-d722a68c=""><a data-v-d722a68c="" href="https://blog.freelancerepublik.com">Blog</a></li>
              <li data-v-d722a68c=""><a data-v-d722a68c="" href="/contact" class="">Nous contacter</a></li-->
              <li data-v-d722a68c=""><a data-v-d722a68c="" href="/on-demand" class="">Nous contacter</a></li>
              <!--li data-v-d722a68c=""><a data-v-d722a68c="" href="/concept" class="">Concept</a></li-->
            </ul>
          </nav>
        </div>
        <!--div data-v-d722a68c="" class="column">
          <div data-v-d722a68c="" class="title">MENTIONS LEGALES</div>
          <nav data-v-d722a68c="">
            <ul data-v-d722a68c="" class="text">
              <li data-v-d722a68c=""><a data-v-d722a68c="" href="/conditions-generales" class="">Conditions Générales d’Utilisation</a></li>
              <li data-v-d722a68c=""><a data-v-d722a68c="" href="/donnees-personnelles" class="">Données personnelles</a></li>
              <li data-v-d722a68c=""><a data-v-d722a68c="" href="/cookies" class="">Cookies</a></li>
            </ul>
          </nav>
        </div-->
        <div data-v-d722a68c="" class="column">
          <div data-v-d722a68c="" class="title">ADRESSE</div>
          <p data-v-d722a68c="">Cocody - Bonoumin <!--br data-v-d722a68c="">
            contact@freelancerepublik.com --><br data-v-d722a68c=""> +225 58 450 600  <br data-v-d722a68c=""> +225 21 371 277</p>
        </div>
      </div><small data-v-d722a68c="">© Copyrights Codadict - Tous droits réservés <!--br data-v-d722a68c="">Design de <a data-v-d722a68c="" href="https://agence-me.com/">AgenceMe</a><br data-v-d722a68c=""-->
      </small>
    </div>
  </footer>
</div>
<div id="#modalHost"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('.navbar-burger').click(function() {

        $('.navbar-menu').toggleClass('is-active');
        $(this).toggleClass('is-active');

      })
    });
</script>
</body>

</html>
