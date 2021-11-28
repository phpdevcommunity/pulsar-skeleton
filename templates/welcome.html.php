<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="noindex,nofollow,noarchive,nosnippet,noodp,notranslate,noimageindex"/>
    <title>Pulsar PHP Framework!</title>
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            color: #3b4351;
            background-color: #f3f3f3;
            margin: 0;
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            font-family: BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, Helvetica, Arial, sans-serif;
        }

        .title {
            font-weight: 600;
            line-height: 1.125;
            font-size: 2.5rem;
            margin: 0;
            color: #03a9f4;
        }

        .small {
            font-size: 1rem;
        }

        .sub-title {
            font-weight: 500;
            line-height: 1.125;
            font-size: 1.5rem;
        }

        a {
            color: #3b4351;
            cursor: pointer;
            text-decoration: underline;
        }

        header {
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem;
        }

        main {
            flex: 1;
        }

        .text-center {
            text-align: center;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: auto;
            padding: 1rem;
        }

        .badge {
            align-items: center;
            background-color: #03a9f4;
            color: #fff;
            border-radius: 5px;
            display: inline-flex;
            font-size: 1rem;
            height: 2em;
            justify-content: center;
            line-height: 1.5;
            padding-left: .75em;
            padding-right: .75em;
            white-space: nowrap;
        }

        p {
            line-height: 1.5rem;
            font-size: 1.2rem;
        }
        .h3 {
            font-size: 1.1rem;
            font-weight: 400;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header>
    <div class="badge">Version <?php echo  \Pulsar\Core\BaseKernel::VERSION ?></div>
</header>
<main>
    <div class="container text-center">
        <h1 class="title">Pulsar <span class="small">PHP micro-framework</span></h1>
        <h2 class="sub-title">Fast and light Framework for PHP</h2>
        <h3 class="h3">Size : 1,57MB with the dependencies (production environment)</h3>
        <p>
            Set up web applications and APIs with clean, simple code and very easy configuration.<br/>
            You choose which components you want to use, nothing is imposed!<br/>
            No configuration in YML, .ini or xml, only PHP
        </p>
    </div>
</main>
<footer>
    <p class="text-center">
        Made with <span style="color: #e25555;">❤</span> in Paris by
        <a class="mr-4" href="https://www.devcoder.xyz" target="_blank" rel="noopener">
            Devcoder.xyz (Fady M.R)
        </a>
        <a class="ml-4" href="mailto:fadymichel@devcoder.xyz">
            Contact us
        </a>
    </p>
</footer>
</body>
</html>
