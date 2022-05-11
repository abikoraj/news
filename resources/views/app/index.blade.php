<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TrendingNp</title>
    <meta content="What's going on?? Nepal!!" name="description">
    <meta property="og:url" content="https://trendingnp.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title"
        content="Trendingnp - What's going on??" />
    <meta property="og:description"
        content="What's going on?? Nepal!!" />
    <meta property="og:image" content="https://trendingnp.com/trendingnp.jpg" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="1600" />
    <base href="/">

    <meta name="color-scheme" content="light dark">
    <meta name="viewport"
        content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="icon" type="image/png" href="assets/icon/favicon.png">

    <!-- add to homescreen for ios -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <style>
        :root {
            --ion-color-primary: #3880ff;
            --ion-color-primary-rgb: 56, 128, 255;
            --ion-color-primary-contrast: #ffffff;
            --ion-color-primary-contrast-rgb: 255, 255, 255;
            --ion-color-primary-shade: #3171e0;
            --ion-color-primary-tint: #4c8dff;
            --ion-color-secondary: #3dc2ff;
            --ion-color-secondary-rgb: 61, 194, 255;
            --ion-color-secondary-contrast: #ffffff;
            --ion-color-secondary-contrast-rgb: 255, 255, 255;
            --ion-color-secondary-shade: #36abe0;
            --ion-color-secondary-tint: #50c8ff;
            --ion-color-tertiary: #5260ff;
            --ion-color-tertiary-rgb: 82, 96, 255;
            --ion-color-tertiary-contrast: #ffffff;
            --ion-color-tertiary-contrast-rgb: 255, 255, 255;
            --ion-color-tertiary-shade: #4854e0;
            --ion-color-tertiary-tint: #6370ff;
            --ion-color-success: #2dd36f;
            --ion-color-success-rgb: 45, 211, 111;
            --ion-color-success-contrast: #ffffff;
            --ion-color-success-contrast-rgb: 255, 255, 255;
            --ion-color-success-shade: #28ba62;
            --ion-color-success-tint: #42d77d;
            --ion-color-warning: #ffc409;
            --ion-color-warning-rgb: 255, 196, 9;
            --ion-color-warning-contrast: #000000;
            --ion-color-warning-contrast-rgb: 0, 0, 0;
            --ion-color-warning-shade: #e0ac08;
            --ion-color-warning-tint: #ffca22;
            --ion-color-danger: #eb445a;
            --ion-color-danger-rgb: 235, 68, 90;
            --ion-color-danger-contrast: #ffffff;
            --ion-color-danger-contrast-rgb: 255, 255, 255;
            --ion-color-danger-shade: #cf3c4f;
            --ion-color-danger-tint: #ed576b;
            --ion-color-dark: #222428;
            --ion-color-dark-rgb: 34, 36, 40;
            --ion-color-dark-contrast: #ffffff;
            --ion-color-dark-contrast-rgb: 255, 255, 255;
            --ion-color-dark-shade: #1e2023;
            --ion-color-dark-tint: #383a3e;
            --ion-color-medium: #92949c;
            --ion-color-medium-rgb: 146, 148, 156;
            --ion-color-medium-contrast: #ffffff;
            --ion-color-medium-contrast-rgb: 255, 255, 255;
            --ion-color-medium-shade: #808289;
            --ion-color-medium-tint: #9d9fa6;
            --ion-color-light: #f4f5f8;
            --ion-color-light-rgb: 244, 245, 248;
            --ion-color-light-contrast: #000000;
            --ion-color-light-contrast-rgb: 0, 0, 0;
            --ion-color-light-shade: #d7d8da;
            --ion-color-light-tint: #f5f6f9
        }

        html {
            --ion-font-family: var(--ion-default-font)
        }

        body {
            background: var(--ion-background-color)
        }

        @supports (padding-top: 20px) {
            html {
                --ion-safe-area-top: var(--ion-statusbar-padding)
            }
        }

        @supports (padding-top: constant(safe-area-inset-top)) {
            html {
                --ion-safe-area-top: constant(safe-area-inset-top);
                --ion-safe-area-bottom: constant(safe-area-inset-bottom);
                --ion-safe-area-left: constant(safe-area-inset-left);
                --ion-safe-area-right: constant(safe-area-inset-right)
            }
        }

        @supports (padding-top: env(safe-area-inset-top)) {
            html {
                --ion-safe-area-top: env(safe-area-inset-top);
                --ion-safe-area-bottom: env(safe-area-inset-bottom);
                --ion-safe-area-left: env(safe-area-inset-left);
                --ion-safe-area-right: env(safe-area-inset-right)
            }
        }

        * {
            box-sizing: border-box;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none
        }

        html {
            width: 100%;
            height: 100%;
            -webkit-text-size-adjust: 100%;
            text-size-adjust: 100%
        }

        html:not(.hydrated) body {
            display: none
        }

        body {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            margin: 0;
            padding: 0;
            position: fixed;
            width: 100%;
            max-width: 100%;
            height: 100%;
            max-height: 100%;
            transform: translateZ(0);
            text-rendering: optimizeLegibility;
            overflow: hidden;
            touch-action: manipulation;
            -webkit-user-drag: none;
            -ms-content-zooming: none;
            word-wrap: break-word;
            overscroll-behavior-y: none;
            -webkit-text-size-adjust: none;
            text-size-adjust: none
        }

        html {
            font-family: var(--ion-font-family)
        }

    </style>
    <link rel="stylesheet" href="styles.bc05b0f8a889b330.css" media="print" onload="this.media='all'"><noscript>
        <link rel="stylesheet" href="styles.bc05b0f8a889b330.css">
    </noscript>
</head>

<body>
    <app-root></app-root>
    <script src="runtime.27f7c89ee0cdd484.js" type="module"></script>
    <script src="polyfills.ff60c501a6550566.js" type="module"></script>
    <script src="main.282f97c089ac6e63.js" type="module"></script>


</body>

</html>
