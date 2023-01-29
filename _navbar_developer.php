<style>
/* Custom styling for MediaWiki. */
.navbardev-container a.navbardev-logo svg {
  top: 0px !important;
}
.nav-link.dropdown-toggle {
  cursor: pointer;
}

.navbardev-container .dropdown-menu {
  background-color: var(--navbardev-color-menu-bg) !important;
}

.navbardev-container .dropdown-item:focus,
.navbardev-container .dropdown-item:hover {
  background-color: rgba(255,255,255,.1) !important;
}
</style>

<style>
  /* Reset. */
  .navbardev-container *,
  .navbardev-container *::before,
  .navbardev-container *::after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }

  .navbardev-container * {
    -webkit-text-size-adjust: 100%;

    font-family: "Heebo", -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-style: normal;
    font-weight: 400;
    letter-spacing: normal;
    line-break: auto;
    line-height: 1rem;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    white-space: normal;
    word-break: normal;
    word-spacing: normal;
  }

  .navbardev-container figure,
  .navbardev-container nav,
  .navbardev-container section {
    display: block;
  }

  .navbardev-container svg:not(:root) {
    overflow: hidden;
  }

  .navbardev-container {
    /* Variables. */
    --navbardev-color-bg: hsl(213, 10%, 14%);
    --navbardev-color-text: hsl(213, 5%, 64%);
    --navbardev-color-text-secondary: hsl(213, 5%, 44%);
    --navbardev-color-text-highlight: hsl(213, 5%, 84%);
    --navbardev-color-text-hover: white;
    --navbardev-color-text-active: white;

    --navbardev-color-primary: hsl(204, 98%, 54%);
    --navbardev-color-primary-bg: hsla(204, 100%, 46%, .1);

    --navbardev-color-button-bg-hover: hsl(213, 10%, 24%);
    --navbardev-color-button-text: var(--navbardev-color-text);

    --navbardev-color-menu-bg: var(--navbardev-color-bg);
    --navbardev-color-menu-border: hsl(213, 10%, 18%);;
    --navbardev-color-menu-zindex: 1040;

    --navbardev-box-shadow-menu: 0px 5px 15px -2px rgba(0,0,0,0.33), 0px 5px 15px -5px rgba(0,0,0,0.33);
    --navbardev-box-shadow-menu-item: 0px 1px 4px 0px rgba(0,0,0,0.05), 0px 15px 20px -1px rgba(0,0,0,0.025);

    --navbardev-navbar-height: 45px;

    --navbardev-spacer: 1rem;
    --navbardev-spacer-sm: .66rem;
    --navbardev-spacer-xs: .33rem;

    --navbardev-border-radius: .33rem;
    --navbardev-border-radius-lg: .66rem;

    --navbardev-link-padding-x: var(--navbardev-spacer);
    --navbardev-link-padding-y: var(--navbardev-spacer-sm);

    --navbardev-font-size: .9rem;
    --navbardev-transition-speed: 150ms;

    align-items: center;
    background-color: var(--navbardev-color-bg);
    color: var(--navbardev-color-text);
    display: flex;
    line-height: 1.5rem;
    font-size: var(--navbardev-font-size);
    height: var(--navbardev-navbar-height);
    margin: 0;
    padding: 0 var(--navbardev-spacer);
    position: relative;
    z-index: 1800;
  }

  /* Links. */
  .navbardev-container a {
    color: var(--navbardev-color-text);
    text-decoration: none;
    transition: background-color var(--navbardev-transition-speed) ease-out, color var(--navbardev-transition-speed) ease-out;
  }

  .navbardev-container a:hover {
    color: var(--navbardev-color-text-hover);
  }

  /* Navigation items. */
  .navbardev-container > ul {
    align-items: center;
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .navbardev-container > ul > li {
    position: relative;
  }

  .navbardev-container > ul > li > a {
    align-items: center;
    display: inline-flex;
    padding: var(--navbardev-link-padding-y) var(--navbardev-link-padding-x);
    position: relative;
    top: 1px;
  }

  .navbardev-container .navbardev-link-active {
    color: var(--navbardev-color-text-active);
  }

  .navbardev-container .navbardev-links-right {
    margin-left: auto;
  }

  /* Logo. */
  .navbardev-container a.navbardev-logo {
    margin-right: var(--navbardev-spacer-sm);
  }

  .navbardev-container .navbardev-logo svg {
    height: 21px;
  }

  .navbardev-container a.navbardev-logo svg {
    position: relative;
    top: -2px;
  }

  .navbardev-container svg {
    fill: var(--navbardev-color-text);
    transition: fill var(--navbardev-transition-speed) ease-out;
  }

  .navbardev-container .navbardev-logo:hover svg {
    fill: white;
  }

  /* Apps button. */
  .navbardev-container button {
    -webkit-appearance: button;
    align-items: center;
    background-color: transparent;
    border-radius: var(--navbardev-border-radius);
    border: 0;
    color: var(--navbardev-color-button-text);
    cursor: pointer;
    display: inline-flex;
    font: inherit;
    margin: 0;
    outline: 0;
    overflow: visible;
    padding: var(--navbardev-spacer-xs) var(--navbardev-spacer);
    text-transform: none;
    transition: background-color var(--navbardev-transition-speed) ease-out, color var(--navbardev-transition-speed) ease-out, transform var(--navbardev-transition-speed) ease-out;
  }

  .navbardev-container button:hover {
    background-color: var(--navbardev-color-button-bg-hover);
    color: var(--navbardev-color-text-hover);
    cursor: pointer;
  }

  .navbardev-container button.navbardev-btn-active {
    background-color: var(--navbardev-color-primary-bg);
    color: var(--navbardev-color-primary);
  }

  .navbardev-container button.navbardev-btn-active svg {
    fill: var(--navbardev-color-primary);
  }

  .navbardev-container .navbardev-icon {
    height: 20px;
    width: 20px;
  }

  .navbardev-icon-dropdown-toggle {
    margin-left: var(--navbardev-spacer-xs);
  }

  .navbardev-container button:hover svg {
    fill: white;
  }

  /* Apps dropdown menu. */
  .navbardev-container .navbardev-apps-menu {
    background-color: var(--navbardev-color-menu-bg);
    border-radius: var(--navbardev-border-radius-lg);
    border: thin solid var(--navbardev-color-menu-border);
    box-shadow: var(--navbardev-box-shadow-menu);
    display: none;
    padding: var(--navbardev-spacer-sm);
    position: absolute;
    right: 0;
    top: calc(100% + 1rem);
    visibility: hidden;
    width: 40rem;
    z-index: var(--navbardev-color-menu-zindex);
  }

  .navbardev-container .navbardev-dropdown.is-visible {
    display: block;
    visibility: visible;
  }

  /* Tiny triangle in the corner. */
  .navbardev-container .navbardev-apps-menu::before {
    background-color: var(--navbardev-color-menu-bg);
    border-radius: 3px;
    border: 2px var(--navbardev-color-menu-bg) solid;
    content: "";
    display: block;
    height: .85rem;
    position: absolute;
    right: .85rem;
    top: -0.25rem;
    transform: rotate(45deg);
    width: 1rem;
    z-index: -1;
  }

  .navbardev-container .navbardev-apps-menu ul {
    display: grid;
    gap: var(--navbardev-spacer-sm);
    grid-template-columns: repeat(2, 1fr);
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .navbardev-container .navbardev-apps-menu ul {
    border-bottom: 2px solid rgba(255,255,255,.05);
    margin: var(--navbardev-spacer-xs) 0 0 0;
    padding: var(--navbardev-spacer-xs) 0 var(--navbardev-spacer-sm) 0;
  }

  .navbardev-container .navbardev-apps-menu ul > li > a {
    border-radius: var(--navbardev-border-radius-lg);
    display: flex;
    flex: 1;
    height: 100%;
  }

  .navbardev-container .navbardev-apps-menu ul > li > a:hover {
    background-color: rgba(255, 255, 255, .05);
    color: var(--navbardev-color-text-active);
    box-shadow: var(--navbardev-box-shadow-menu-item);
  }

  .navbardev-container .navbardev-apps-menu ul > li > a:hover h4,
  .navbardev-container .navbardev-apps-menu ul > li > a:hover svg {
    color: var(--navbardev-color-primary);
    fill: var(--navbardev-color-primary);
  }

  .navbardev-container .navbardev-apps-menu h3 {
    color: white;
    display: inline-block;
    font-size: 13px;
    font-weight: 600;
    line-height: 1.2rem;
    margin: var(--navbardev-spacer-sm) 0 0 0;
    opacity: .3;
    padding-left: var(--navbardev-spacer);
  }

  .navbardev-container .navbardev-apps-menu h4 {
    color: var(--navbardev-color-text-highlight);
    font-size: 17px;
    font-weight: 500;
    line-height: 1.2rem;
    margin: 0;
    padding: var(--navbardev-spacer-sm) var(--navbardev-spacer) 0;
    transition: color var(--navbardev-transition-speed) ease-out;
  }

  .navbardev-container .navbardev-apps-menu p {
    font-size: 15px;
    line-height: 1.3rem;
    margin: 0;
    opacity: .8;
    padding: var(--navbardev-spacer-xs) var(--navbardev-spacer) var(--navbardev-spacer-sm);
  }

  .navbardev-container .navbardev-apps-menu figure {
    margin: var(--navbardev-spacer) 0 0 var(--navbardev-spacer);
  }

  .navbardev-container .navbardev-apps-menu ul > li > a svg {
    position: relative;
    top: -5px;
  }

  /* Donate section of the menu. */
  .navbardev-container .navbardev-apps-menu-section-donate ul {
    border: none;
    padding-bottom: 0;
  }

  .navbardev-container .navbardev-apps-menu-section-donate a svg {
    fill: hsl(352, 90%, 62%) !important;
    transition: transform var(--navbardev-transition-speed) ease-out;
  }

  .navbardev-container .navbardev-apps-menu-section-donate ul > li:first-child > a {
    background-color: hsla(352deg, 90%, 42%, .2);
  }

  .navbardev-container .navbardev-apps-menu-section-donate ul > li:first-child > a:hover {
    background-color: hsla(352deg, 90%, 42%, .5);
  }

  .navbardev-container .navbardev-apps-menu-section-donate ul > li:first-child > a:hover svg {
    fill: hsl(352, 90%, 72%) !important;
    transform: scale(1.2);
  }

  .navbardev-container .navbardev-apps-menu-section-donate ul > li:first-child > a:hover h4 {
    color: white;
  }

  /* Mobile. */
  .navbardev-container button.navbardev-logo {
    display: none;
    visibility: hidden;
  }

  @media (max-width: 767px) {
    .navbardev-container {
      flex-wrap: wrap;
      height: unset;
    }

    .navbardev-apps-dropdown-container,
    .navbardev-container a.navbardev-logo {
      display: none;
    }

    .navbardev-container button.navbardev-logo {
      display: block;
      visibility: visible;
    }

    .navbardev-container .navbardev-nav-links {
      align-items: flex-start;
      background-color: var(--navbardev-color-menu-bg);
      border-radius: var(--navbardev-border-radius-lg);
      display: none;
      flex-direction: column;
      left: 1rem;
      padding: 0 var(--navbardev-spacer-sm);
      position: absolute;
      top: calc(100% + .5rem);
      visibility: visible;
      width: 10rem;
      z-index: var(--navbardev-color-menu-zindex);
    }

    .navbardev-container .navbardev-nav-links.is-visible {
      display: flex;
    }

    .navbardev-container .navbardev-nav-links::before {
      background-color: var(--navbardev-color-menu-bg);
      border-radius: 3px;
      border: 2px var(--navbardev-color-menu-bg) solid;
      content: "";
      display: block;
      height: 0.8rem;
      position: absolute;
      left: 1.5rem;
      top: -0.133rem;
      transform: rotate(45deg);
      width: 1rem;
      z-index: -1;
    }

    .navbardev-container .navbardev-nav-links > li {
      border-bottom: 2px solid rgba(255, 255, 255, .05);
      width: 100%;
    }

    .navbardev-container .navbardev-nav-links > li:last-child {
      border: none;
    }

    .navbardev-container .navbardev-nav-links > li > a {
      padding-inline: 0;
      width: 100%;
    }
  }
</style>

<nav class="navbardev-container js-navbardev-dropdown-toggle-hide">
  <a href="/" class="navbardev-logo">
    <svg fill-rule="nonzero" viewBox="0 0 850.2 162.05">
      <path d="M61.1 104.56c.05 2.6.88 7.66 2.12 11.61a61.27 61.27 0 0 0 13.24 22.92 68.39 68.39 0 0 0 23.17 16.64 74.46 74.46 0 0 0 30.42 6.32 74.52 74.52 0 0 0 30.4-6.42 68.87 68.87 0 0 0 23.15-16.7 61.79 61.79 0 0 0 13.23-22.97 58.06 58.06 0 0 0 2.07-25.55 59.18 59.18 0 0 0-8.44-23.1 64.45 64.45 0 0 0-15.4-16.98h.02L112.76 2.46l-.16-.12c-4.09-3.14-10.96-3.13-15.46.02-4.55 3.18-5.07 8.44-1.02 11.75l-.02.02 26 21.14-79.23.08h-.1c-6.55.01-12.85 4.3-14.1 9.74-1.27 5.53 3.17 10.11 9.98 10.14v.02l40.15-.07-71.66 55-.27.2c-6.76 5.18-8.94 13.78-4.69 19.23 4.32 5.54 13.51 5.55 20.34.03l39.1-32s-.56 4.32-.52 6.91zm100.49 14.47c-8.06 8.2-19.34 12.86-31.54 12.89-12.23.02-23.5-4.6-31.57-12.79-3.93-4-6.83-8.59-8.61-13.48a35.57 35.57 0 0 1 2.34-29.25 39.1 39.1 0 0 1 9.58-11.4 44.68 44.68 0 0 1 28.24-9.85 44.59 44.59 0 0 1 28.24 9.77 38.94 38.94 0 0 1 9.58 11.36 35.58 35.58 0 0 1 4.33 14.18 35.1 35.1 0 0 1-1.98 15.05 37.7 37.7 0 0 1-8.61 13.52zm-57.6-27.91a23.55 23.55 0 0 1 8.55-16.68 28.45 28.45 0 0 1 18.39-6.57 28.5 28.5 0 0 1 18.38 6.57 23.57 23.57 0 0 1 8.55 16.67c.37 6.83-2.37 13.19-7.2 17.9a28.18 28.18 0 0 1-19.73 7.79c-7.83 0-14.84-3-19.75-7.8a23.13 23.13 0 0 1-7.19-17.88z"/>
      <path d="M829.17 133.76h-15.9V64.39h15.13l.77 13.59zM850.07 79q-1.47-.25-3.14-.38-1.6-.13-3.2-.13-5.26 0-8.8 1.92-3.45 1.86-5.25 5.39-1.8 3.46-2.11 8.2l-3.66.07q0-8.78 2.31-15.77 2.3-6.99 6.92-11.1 4.62-4.1 11.54-4.1 1.35 0 3.02.26 1.66.26 2.5.58zm-76.55 56.04q-10.32 0-17.82-4.42-7.5-4.5-11.55-12.06-4.03-7.63-4.03-17.05v-2.63q0-10.84 4.1-18.85 4.1-8.08 11.22-12.5 7.18-4.43 16.22-4.43 10 0 16.6 4.36 6.6 4.3 9.88 12 3.27 7.62 3.27 17.69V104h-53.67V92.53h37.96v-1.22q-.13-4.04-1.54-7.56-1.4-3.53-4.49-5.7-3.01-2.19-8.07-2.19-5.07 0-8.53 2.89-3.46 2.82-5.26 8.01-1.8 5.13-1.8 12.12v2.63q0 5.9 2.19 10.58 2.18 4.68 6.34 7.43 4.17 2.7 9.94 2.7 5.58 0 9.87-2.18 4.36-2.18 7.5-6.29l8.34 8.34q-3.27 4.93-9.87 8.97-6.54 3.98-16.8 3.98zm-88.67 25.39h-15.9V64.39h14.68l1.22 13.33zm45-60.72q0 10.13-3.13 18.15-3.08 7.95-9.1 12.56-5.97 4.62-14.63 4.62-8.72 0-14.49-4.23-5.7-4.3-8.9-11.8-3.21-7.5-4.43-17.12v-4.55q1.22-10.26 4.42-17.89 3.2-7.7 8.91-11.99 5.71-4.36 14.3-4.36 8.79 0 14.81 4.43 6.03 4.42 9.1 12.37 3.15 7.95 3.15 18.47zm-15.9-1.34q0-6.22-1.6-11.29-1.53-5.06-5-8.01-3.4-2.95-8.9-2.95-3.98 0-6.87 1.35-2.88 1.28-4.87 3.65-1.92 2.37-3.01 5.64-1.1 3.2-1.54 7.05v11.6q.77 4.62 2.56 8.47 1.8 3.85 5.13 6.16 3.4 2.24 8.72 2.24 5.51 0 8.91-3.08 3.4-3.14 4.94-8.2 1.54-5.13 1.54-11.29zm-122.51.06q0-10.13 3.84-18.08 3.85-7.95 11.03-12.57 7.25-4.68 17.38-4.68 10.25 0 17.5 4.68 7.24 4.62 11.03 12.57 3.84 7.95 3.84 18.08v1.35q0 10.06-3.84 18.08-3.79 7.95-11.03 12.56-7.18 4.62-17.38 4.62-10.19 0-17.43-4.62-7.25-4.61-11.1-12.56-3.84-8.02-3.84-18.08zm15.9 1.35q0 6.15 1.73 11.28 1.73 5.07 5.32 8.14 3.65 3.08 9.42 3.08 5.71 0 9.3-3.08 3.65-3.07 5.32-8.14 1.73-5.13 1.73-11.28v-1.35q0-6.09-1.73-11.22-1.67-5.13-5.32-8.2-3.65-3.15-9.42-3.15-5.71 0-9.36 3.14-3.6 3.08-5.33 8.21-1.66 5.13-1.66 11.22zm-29.69 33.98h-15.9V35.28h15.9zm-56.67 1.28q-10.33 0-17.83-4.42-7.5-4.5-11.54-12.06-4.04-7.63-4.04-17.05v-2.63q0-10.84 4.1-18.85 4.11-8.08 11.23-12.5 7.18-4.43 16.22-4.43 10 0 16.6 4.36 6.6 4.3 9.88 12 3.27 7.62 3.27 17.69V104H495.2V92.53h37.96v-1.22q-.13-4.04-1.54-7.56-1.41-3.53-4.49-5.7-3.01-2.19-8.08-2.19-5.06 0-8.52 2.89-3.47 2.82-5.26 8.01-1.8 5.13-1.8 12.12v2.63q0 5.9 2.18 10.58t6.35 7.43q4.17 2.7 9.94 2.7 5.58 0 9.87-2.18 4.36-2.18 7.5-6.29l8.34 8.34q-3.27 4.93-9.88 8.97-6.54 3.98-16.8 3.98zM464.3 64.39h16.48l-23.98 69.37h-10.26l1.03-12.57zm-12.25 57 .77 12.37h-10.19l-24.17-69.37H435zm-65.88 13.65q-10.32 0-17.82-4.42-7.5-4.5-11.54-12.06-4.04-7.63-4.04-17.05v-2.63q0-10.84 4.1-18.85 4.1-8.08 11.22-12.5 7.18-4.43 16.22-4.43 10 0 16.6 4.36 6.61 4.3 9.88 12 3.27 7.62 3.27 17.69V104H360.4V92.53h37.95v-1.22q-.12-4.04-1.53-7.56-1.42-3.53-4.5-5.7-3-2.19-8.07-2.19t-8.53 2.89q-3.46 2.82-5.26 8.01-1.8 5.13-1.8 12.12v2.63q0 5.9 2.19 10.58 2.18 4.68 6.35 7.43 4.16 2.7 9.93 2.7 5.58 0 9.88-2.18 4.36-2.18 7.5-6.29l8.33 8.34q-3.27 4.93-9.87 8.97-6.54 3.98-16.8 3.98zm-107.64-1.28.12-13.27h19.75q8.6 0 14.36-3.72 5.77-3.72 8.72-10.65 2.95-6.98 2.95-16.67v-4.87q0-9.94-2.95-16.8-2.88-6.86-8.59-10.45-5.7-3.59-13.91-3.59h-20.84V40.41h20.84q12.5 0 21.93 5.51 9.48 5.52 14.8 15.45 5.33 9.94 5.33 23.34v4.74q0 13.47-5.32 23.4-5.33 9.94-14.94 15.46-9.56 5.45-22.38 5.45zm9.23 0h-16.54V40.4h16.54z"/>
    </svg>
  </a>

  <button class="navbardev-logo js-navbardev-dropdown-toggle" data-dropdown-id="navbardev-nav-links">
    <svg fill-rule="nonzero" viewBox="0 0 850.2 162.05">
      <path d="M61.1 104.56c.05 2.6.88 7.66 2.12 11.61a61.27 61.27 0 0 0 13.24 22.92 68.39 68.39 0 0 0 23.17 16.64 74.46 74.46 0 0 0 30.42 6.32 74.52 74.52 0 0 0 30.4-6.42 68.87 68.87 0 0 0 23.15-16.7 61.79 61.79 0 0 0 13.23-22.97 58.06 58.06 0 0 0 2.07-25.55 59.18 59.18 0 0 0-8.44-23.1 64.45 64.45 0 0 0-15.4-16.98h.02L112.76 2.46l-.16-.12c-4.09-3.14-10.96-3.13-15.46.02-4.55 3.18-5.07 8.44-1.02 11.75l-.02.02 26 21.14-79.23.08h-.1c-6.55.01-12.85 4.3-14.1 9.74-1.27 5.53 3.17 10.11 9.98 10.14v.02l40.15-.07-71.66 55-.27.2c-6.76 5.18-8.94 13.78-4.69 19.23 4.32 5.54 13.51 5.55 20.34.03l39.1-32s-.56 4.32-.52 6.91zm100.49 14.47c-8.06 8.2-19.34 12.86-31.54 12.89-12.23.02-23.5-4.6-31.57-12.79-3.93-4-6.83-8.59-8.61-13.48a35.57 35.57 0 0 1 2.34-29.25 39.1 39.1 0 0 1 9.58-11.4 44.68 44.68 0 0 1 28.24-9.85 44.59 44.59 0 0 1 28.24 9.77 38.94 38.94 0 0 1 9.58 11.36 35.58 35.58 0 0 1 4.33 14.18 35.1 35.1 0 0 1-1.98 15.05 37.7 37.7 0 0 1-8.61 13.52zm-57.6-27.91a23.55 23.55 0 0 1 8.55-16.68 28.45 28.45 0 0 1 18.39-6.57 28.5 28.5 0 0 1 18.38 6.57 23.57 23.57 0 0 1 8.55 16.67c.37 6.83-2.37 13.19-7.2 17.9a28.18 28.18 0 0 1-19.73 7.79c-7.83 0-14.84-3-19.75-7.8a23.13 23.13 0 0 1-7.19-17.88z" />
      <path d="M829.17 133.76h-15.9V64.39h15.13l.77 13.59zM850.07 79q-1.47-.25-3.14-.38-1.6-.13-3.2-.13-5.26 0-8.8 1.92-3.45 1.86-5.25 5.39-1.8 3.46-2.11 8.2l-3.66.07q0-8.78 2.31-15.77 2.3-6.99 6.92-11.1 4.62-4.1 11.54-4.1 1.35 0 3.02.26 1.66.26 2.5.58zm-76.55 56.04q-10.32 0-17.82-4.42-7.5-4.5-11.55-12.06-4.03-7.63-4.03-17.05v-2.63q0-10.84 4.1-18.85 4.1-8.08 11.22-12.5 7.18-4.43 16.22-4.43 10 0 16.6 4.36 6.6 4.3 9.88 12 3.27 7.62 3.27 17.69V104h-53.67V92.53h37.96v-1.22q-.13-4.04-1.54-7.56-1.4-3.53-4.49-5.7-3.01-2.19-8.07-2.19-5.07 0-8.53 2.89-3.46 2.82-5.26 8.01-1.8 5.13-1.8 12.12v2.63q0 5.9 2.19 10.58 2.18 4.68 6.34 7.43 4.17 2.7 9.94 2.7 5.58 0 9.87-2.18 4.36-2.18 7.5-6.29l8.34 8.34q-3.27 4.93-9.87 8.97-6.54 3.98-16.8 3.98zm-88.67 25.39h-15.9V64.39h14.68l1.22 13.33zm45-60.72q0 10.13-3.13 18.15-3.08 7.95-9.1 12.56-5.97 4.62-14.63 4.62-8.72 0-14.49-4.23-5.7-4.3-8.9-11.8-3.21-7.5-4.43-17.12v-4.55q1.22-10.26 4.42-17.89 3.2-7.7 8.91-11.99 5.71-4.36 14.3-4.36 8.79 0 14.81 4.43 6.03 4.42 9.1 12.37 3.15 7.95 3.15 18.47zm-15.9-1.34q0-6.22-1.6-11.29-1.53-5.06-5-8.01-3.4-2.95-8.9-2.95-3.98 0-6.87 1.35-2.88 1.28-4.87 3.65-1.92 2.37-3.01 5.64-1.1 3.2-1.54 7.05v11.6q.77 4.62 2.56 8.47 1.8 3.85 5.13 6.16 3.4 2.24 8.72 2.24 5.51 0 8.91-3.08 3.4-3.14 4.94-8.2 1.54-5.13 1.54-11.29zm-122.51.06q0-10.13 3.84-18.08 3.85-7.95 11.03-12.57 7.25-4.68 17.38-4.68 10.25 0 17.5 4.68 7.24 4.62 11.03 12.57 3.84 7.95 3.84 18.08v1.35q0 10.06-3.84 18.08-3.79 7.95-11.03 12.56-7.18 4.62-17.38 4.62-10.19 0-17.43-4.62-7.25-4.61-11.1-12.56-3.84-8.02-3.84-18.08zm15.9 1.35q0 6.15 1.73 11.28 1.73 5.07 5.32 8.14 3.65 3.08 9.42 3.08 5.71 0 9.3-3.08 3.65-3.07 5.32-8.14 1.73-5.13 1.73-11.28v-1.35q0-6.09-1.73-11.22-1.67-5.13-5.32-8.2-3.65-3.15-9.42-3.15-5.71 0-9.36 3.14-3.6 3.08-5.33 8.21-1.66 5.13-1.66 11.22zm-29.69 33.98h-15.9V35.28h15.9zm-56.67 1.28q-10.33 0-17.83-4.42-7.5-4.5-11.54-12.06-4.04-7.63-4.04-17.05v-2.63q0-10.84 4.1-18.85 4.11-8.08 11.23-12.5 7.18-4.43 16.22-4.43 10 0 16.6 4.36 6.6 4.3 9.88 12 3.27 7.62 3.27 17.69V104H495.2V92.53h37.96v-1.22q-.13-4.04-1.54-7.56-1.41-3.53-4.49-5.7-3.01-2.19-8.08-2.19-5.06 0-8.52 2.89-3.47 2.82-5.26 8.01-1.8 5.13-1.8 12.12v2.63q0 5.9 2.18 10.58t6.35 7.43q4.17 2.7 9.94 2.7 5.58 0 9.87-2.18 4.36-2.18 7.5-6.29l8.34 8.34q-3.27 4.93-9.88 8.97-6.54 3.98-16.8 3.98zM464.3 64.39h16.48l-23.98 69.37h-10.26l1.03-12.57zm-12.25 57 .77 12.37h-10.19l-24.17-69.37H435zm-65.88 13.65q-10.32 0-17.82-4.42-7.5-4.5-11.54-12.06-4.04-7.63-4.04-17.05v-2.63q0-10.84 4.1-18.85 4.1-8.08 11.22-12.5 7.18-4.43 16.22-4.43 10 0 16.6 4.36 6.61 4.3 9.88 12 3.27 7.62 3.27 17.69V104H360.4V92.53h37.95v-1.22q-.12-4.04-1.53-7.56-1.42-3.53-4.5-5.7-3-2.19-8.07-2.19t-8.53 2.89q-3.46 2.82-5.26 8.01-1.8 5.13-1.8 12.12v2.63q0 5.9 2.19 10.58 2.18 4.68 6.35 7.43 4.16 2.7 9.93 2.7 5.58 0 9.88-2.18 4.36-2.18 7.5-6.29l8.33 8.34q-3.27 4.93-9.87 8.97-6.54 3.98-16.8 3.98zm-107.64-1.28.12-13.27h19.75q8.6 0 14.36-3.72 5.77-3.72 8.72-10.65 2.95-6.98 2.95-16.67v-4.87q0-9.94-2.95-16.8-2.88-6.86-8.59-10.45-5.7-3.59-13.91-3.59h-20.84V40.41h20.84q12.5 0 21.93 5.51 9.48 5.52 14.8 15.45 5.33 9.94 5.33 23.34v4.74q0 13.47-5.32 23.4-5.33 9.94-14.94 15.46-9.56 5.45-22.38 5.45zm9.23 0h-16.54V40.4h16.54z" />
    </svg>
    <svg class="navbardev-icon navbardev-icon-dropdown-toggle" height="100px" width="100px" viewBox="0 0 1000 1000">
      <path d="m 206.53824,376.41174 a 42,42 0 0 1 71,-29 l 221,220 220,-220 a 42,42 0 1 1 59,59 l -250,250 a 42,42 0 0 1 -59,0 l -250,-250 a 42,42 0 0 1 -12,-30 z"/>
    </svg>
  </button>

  <ul class="navbardev-nav-links navbardev-dropdown js-navbardev-dropdown" id="navbardev-nav-links">
    <li>
      <a href="https://developer.blender.org">Projects</a>
    </li>
    <li>
      <a href="https://wiki.blender.org" class="navbardev-link-active">Docs</a>
    </li>
    <li>
      <a href="https://code.blender.org">Blog</a>
    </li>
    <li>
      <a href="https://devtalk.blender.org">Forum</a>
    </li>
  </ul>

  <ul class="navbardev-links-right">

    <li>
      <div class="navbardev-apps-dropdown-container">
        <button class="js-navbardev-dropdown-toggle" data-dropdown-id="navbardev-apps-menu">
          <svg class="navbardev-icon" height="100px" width="100px" viewBox="0 0 1000 1000">
            <path
              d="m 150.5,899 a 50,50 0 0 1 -49,-50 V 749 a 50,50 0 0 1 49,-50 h 100 a 50,50 0 0 1 50,50 v 100 a 50,50 0 0 1 -50,50 z m 299,0 a 50,50 0 0 1 -50,-50 V 749 a 50,50 0 0 1 50,-50 h 100 a 50,50 0 0 1 50,50 v 100 a 50,50 0 0 1 -50,50 z m 299,0 a 50,50 0 0 1 -50,-50 V 749 a 50,50 0 0 1 50,-50 h 100 a 50,50 0 0 1 50,50 v 100 a 50,50 0 0 1 -50,50 z m -598,-299 a 50,50 0 0 1 -49,-50 V 450 a 50,50 0 0 1 49,-50 h 100 a 50,50 0 0 1 50,50 v 100 a 50,50 0 0 1 -50,50 z m 299,0 a 50,50 0 0 1 -50,-50 V 450 a 50,50 0 0 1 50,-50 h 100 a 50,50 0 0 1 50,50 v 100 a 50,50 0 0 1 -50,50 z m 299,0 a 50,50 0 0 1 -50,-50 V 450 a 50,50 0 0 1 50,-50 h 100 a 50,50 0 0 1 50,50 v 100 a 50,50 0 0 1 -50,50 z m -598,-299 a 50,50 0 0 1 -49,-50 V 151 a 50,50 0 0 1 49,-50 h 100 a 50,50 0 0 1 50,50 v 100 a 50,50 0 0 1 -50,50 z m 299,0 a 50,50 0 0 1 -50,-50 V 151 a 50,50 0 0 1 50,-50 h 100 a 50,50 0 0 1 50,50 v 100 a 50,50 0 0 1 -50,50 z m 299,0 a 50,50 0 0 1 -50,-50 V 151 a 50,50 0 0 1 50,-50 h 100 a 50,50 0 0 1 50,50 v 100 a 50,50 0 0 1 -50,50 z"/>
          </svg>
        </button>

        <div class="navbardev-apps-menu navbardev-dropdown js-navbardev-dropdown" id="navbardev-apps-menu">
          <h3>BLENDER.ORG</h3>
          <ul>
            <li>
              <a href="https://www.blender.org/download/" target="_blank">
                <figure>
                  <svg class="navbardev-icon" height="100px" width="100px" viewBox="0 0 1000 1000">
                    <path
                      d="m 49.15424,599.52895 a 50.360431,50.360431 0 0 0 -49.16137168,50.36043 v 200.24266 c 0,81.53594 68.34629768,149.88226 149.88223168,149.88226 h 700.2498 c 81.53593,0 149.8822,-68.34632 149.8822,-149.88226 V 649.88938 a 50.360431,50.360431 0 1 0 -100.72083,0 v 200.24266 c 0,27.57834 -21.58304,49.16138 -49.16137,49.16138 H 149.8751 c -27.57833,0 -49.16137,-21.58304 -49.16137,-49.16138 V 649.88938 A 50.360431,50.360431 0 0 0 49.15424,599.52895 Z M 249.3969,350.12491 a 50.360431,50.360431 0 0 0 -34.77267,85.13311 l 250.60309,249.40404 a 50.360431,50.360431 0 0 0 70.74442,0 L 785.37577,435.25802 A 50.360431,50.360431 0 1 0 714.63136,364.51361 L 500,579.14497 285.36864,364.51361 A 50.360431,50.360431 0 0 0 249.3969,350.12491 Z M 498.80094,0 A 50.360431,50.360431 0 0 0 449.63957,50.360432 V 649.88938 a 50.360431,50.360431 0 1 0 100.72086,0 V 50.360432 A 50.360431,50.360431 0 0 0 498.80094,0 Z"
                      style="stroke-width:1.19906" />
                  </svg>
                </figure>
                <div>
                  <h4>Download</h4>
                  <p>Get the latest Blender, older versions, or experimental builds.</p>
                </div>
              </a>
            </li>
            <li>
              <a href="https://www.blender.org/download/releases/" target="_blank">
                <div>
                  <h4>Whats New</h4>
                  <p>Stay up-to-date with the new features in the latest Blender releases.</p>
                </div>
              </a>
            </li>
          </ul>

          <h3>RESOURCES</h3>
          <ul>
            <li>
              <a href="https://studio.blender.org/" target="_blank">
                <figure>
                  <svg class="navbardev-icon" height="100px" width="100px" viewBox="0 0 1000 1000">
                    <path
                      d="m 146.70939,1.6802353 c -78.362959,0 -143.678322,64.2057377 -143.6783209,143.6570547 -7.2533835,268.45385 0,463.93349 0,709.63356 0,79.45132 65.3153619,143.65705 143.6783209,143.65705 266.17757,0.51388 460.32009,0 709.61228,0 79.45134,0 143.67832,-64.20573 143.67832,-143.65705 0.37471,-118.45983 0,-235.03162 0,-353.72203 0.017,-0.72264 0.017,-1.4456 0,-2.16825 0.43351,-118.60776 0,-235.80643 0,-353.74328 0,-79.451317 -64.22698,-143.6570547 -143.67832,-143.6570547 -241.21275,-1.18614431 -498.91438,-0.041532 -709.61228,0 z m 0,90.3436617 h 82.71228 V 228.07083 H 93.374735 v -82.73354 c 0,-30.47448 22.860165,-53.313393 53.334655,-53.313393 z m 173.05594,0 h 363.5004 c -5.81542,127.740813 0,236.658243 0,362.416273 h -363.5004 c 0.39671,-121.62159 0,-241.06277 0,-362.416273 z m 453.84406,0 h 82.71228 c 30.4745,0 53.33466,22.838913 53.33466,53.313393 v 82.73354 H 773.60939 Z M 93.374735,318.39324 H 229.42167 V 454.44017 H 93.374735 Z m 680.234655,0 H 909.65633 V 454.44017 H 773.60939 Z M 93.374735,545.86796 H 229.42167 V 681.91489 H 93.374735 Z m 226.390595,0 h 363.5004 c -5.81534,127.74773 0,236.67164 0,362.43753 h -363.5004 c 0.3967,-121.62867 0,-241.07685 0,-362.43753 z m 453.84406,0 H 909.65633 V 681.91489 H 773.60939 Z M 93.374735,772.25856 H 229.42167 v 136.04693 h -82.71228 c -30.47449,0 -53.334655,-22.86016 -53.334655,-53.33464 z m 680.234655,0 h 136.04694 v 82.71229 c 0,30.47448 -22.86016,53.33464 -53.33466,53.33464 h -82.71228 z"
                      style="stroke-width:1.08838" />
                  </svg>
                </figure>
                <div>
                  <h4>Blender Studio</h4>
                  <p>Access production assets and knowledge from the open movies.</p>
                </div>
              </a>
            </li>
            <li>
              <a href="https://docs.blender.org/manual/en/latest/" target="_blank">
                <div>
                  <h4>Manual</h4>
                  <p>Documentation on the usage and features in Blender.</p>
                </div>
              </a>
            </li>
          </ul>

          <h3>DEVELOPMENT</h3>
          <ul>
            <li>
              <a href="https://code.blender.org/" target="_blank">
                <figure>
                  <svg class="navbardev-icon" height="100px" width="100px" viewBox="0 0 1000 1000">
                    <path
                      d="m 683.36434,818.19976 a 45.841084,45.841084 0 0 1 -33.83509,-13.09745 45.841084,45.841084 0 0 1 0,-64.39581 L 890.74067,499.49508 649.52925,259.37512 a 45.841084,45.841084 0 0 1 0,-64.39582 45.841084,45.841084 0 0 1 64.39581,0 l 272.8636,272.8636 a 45.841084,45.841084 0 0 1 0,64.39581 l -272.8636,272.8636 a 45.841084,45.841084 0 0 1 -30.56072,13.09745 z m -363.45431,0 A 45.841084,45.841084 0 0 1 286.07494,805.10231 L 13.211339,532.23871 a 45.841084,45.841084 0 0 1 0,-64.39581 L 286.07494,194.9793 a 45.841084,45.841084 0 0 1 64.39581,0 45.841084,45.841084 0 0 1 0,64.39582 L 109.25933,499.49508 350.47075,740.7065 a 45.841084,45.841084 0 0 1 0,64.39581 45.841084,45.841084 0 0 1 -30.56072,13.09745 z"
                      style="stroke-width:1.09145" />
                  </svg>
                </figure>
                <div>
                  <h4>Developers Blog</h4>
                  <p>Latest development updates, by Blender developers.</p>
                </div>
              </a>
            </li>
            <li>
              <a href="https://docs.blender.org/" target="_blank">
                <div>
                  <h4>Documentation</h4>
                  <p>Wiki, guidelines, release notes and Python API docs.</p>
                </div>
              </a>
            </li>
          </ul>

          <ul>
            <li>
              <a href="https://opendata.blender.org/" target="_blank">
                <figure>
                  <svg class="navbardev-icon" height="100px" width="100px" viewBox="0 0 1000 1000">
                    <path
                      d="M 499.99424,0 A 55.30474,55.30474 0 0 0 444.6895,55.30474 V 944.69526 A 55.30474,55.30474 0 0 0 499.99424,1000 55.30474,55.30474 0 0 0 555.29898,944.69526 V 55.30474 A 55.30474,55.30474 0 0 0 499.99424,0 Z m 332.95711,332.95711 a 55.30474,55.30474 0 0 0 -55.30474,56.43341 V 944.69526 A 55.30474,55.30474 0 0 0 832.95135,1000 55.30474,55.30474 0 0 0 888.25609,944.69526 V 389.39052 A 55.30474,55.30474 0 0 0 832.95135,332.95711 Z M 167.03713,555.30474 a 55.30474,55.30474 0 0 0 -55.30474,55.30474 V 944.69526 A 55.30474,55.30474 0 0 0 167.03713,1000 55.30474,55.30474 0 0 0 222.34187,944.69526 V 610.60948 a 55.30474,55.30474 0 0 0 -55.30474,-55.30474 z"
                      style="stroke-width:1.12867" />
                  </svg>
                </figure>
                <div>
                  <h4>Benchmark</h4>
                  <p>A platform to collect and share results of the Blender Benchmark.</p>
                </div>
              </a>
            </li>
            <li>
              <a href="https://conference.blender.org/" target="_blank">
                <div>
                  <h4>Blender Conference</h4>
                  <p>The yearly event that brings the community together.</p>
                </div>
              </a>
            </li>
          </ul>

          <div class="navbardev-apps-menu-section-donate">
            <h3>DONATE</h3>
            <ul>
              <li>
                <a href="https://fund.blender.org/" target="_blank">
                  <figure>
                    <svg class="navbardev-icon" height="100px" width="100px" viewBox="0 0 1000 1000">
                      <path
                        d="M 273.67169,58.416076 C 201.59785,62.59427 135.79129,94.975269 86.697523,145.11359 37.603742,194.20736 4.1781939,260.01391 0,332.08775 -4.1781926,403.11704 22.980065,480.41362 86.697523,545.17562 l 45.960127,45.96013 339.47823,338.43367 a 43.871033,43.871033 0 0 0 61.62835,0 L 872.1979,591.13575 918.15804,545.17562 c 109.67766,-110.72213 109.67766,-290.38445 0,-400.06203 -110.72213,-110.722127 -290.38445,-110.722127 -400.06204,0 l -15.66822,14.62368 -15.66822,-14.62368 C 423.04211,80.351592 345.74553,53.193334 273.67169,58.416076 Z m 5.22274,86.697514 c 48.04922,-3.13365 98.18754,12.53458 146.23677,60.5838 l 47.00468,47.00468 a 43.871033,43.871033 0 0 0 61.62835,0 l 45.96013,-47.00468 c 76.25204,-76.25203 199.50874,-76.25203 276.80532,0 77.29658,77.29658 77.29658,200.5533 0,277.84988 L 810.56956,529.50739 502.42778,837.64917 194.286,529.50739 148.32588,483.54727 C 100.27665,434.45349 84.608431,384.31516 86.697523,336.26594 c 3.133646,-47.00467 26.113717,-95.0539 61.628357,-130.56855 35.51464,-35.51464 82.51932,-58.49471 130.56855,-60.5838 z"
                        style="stroke-width:1.04455" />
                    </svg>
                  </figure>
                  <div>
                    <h4>Development Fund</h4>
                    <p>Support core development with a monthly contribution.</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="https://www.blender.org/about/donations/" target="_blank">
                  <div>
                    <h4>One-time Donations</h4>
                    <p>Perform a single donation with more payment options available.</p>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </li>
  </ul>
</nav>

<script>
  const dropdownToggles = document.getElementsByClassName("js-navbardev-dropdown-toggle");
  const btnActiveClass = "navbardev-btn-active";
  const isVisibleClass = "is-visible";

  /* Hide all dropdowns. */
  function dropdownHideAll() {
    const dropdownMenus = document.getElementsByClassName("js-navbardev-dropdown");

    if (dropdownMenus) {
      for (let i = 0; i < dropdownMenus.length; i++) {
        dropdownMenus[i].classList.remove(isVisibleClass);
      }
    }

    /* Remove styling from all dropdown toggles. */
    for (let i = 0; i < dropdownToggles.length; i++) {
      dropdownToggles[i].classList.remove(btnActiveClass);
    }
  }

  for (let i = 0; i < dropdownToggles.length; i++) {
    dropdownToggles[i].addEventListener("click", function (e) {
      e.stopPropagation();

      const dropdownId = this.getAttribute("data-dropdown-id");
      const el = document.getElementById(dropdownId);

      if (el) {
        /* If the button is already active, remove styling. */
        if (el.classList.contains(isVisibleClass)) {
          dropdownHideAll();
        } else {
          /* Style button as active and show menu. */
          this.classList.add(btnActiveClass);
          el.classList.add(isVisibleClass);
        }
      }
    });
  }

  /* Hide all dropdowns when clicking anywhere except menus. */
  document.body.addEventListener("click", function (e) {
    if (!e.target.classList.contains("js-navbardev-dropdown")) {
      dropdownHideAll();
    }
  });

  /* Hide all dropdowns when pressing Esc. */
  /* Hide all dropdowns when pressing Esc. */
  window.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
      dropdownHideAll();
    }
  });
</script>
