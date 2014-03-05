<!DOCTYPE html>
<html lang="en-us ">
    <head>
        <title><?php echo $title ?> &mdash; TraceAnalyzer</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link id="mainstyle" rel="stylesheet" type="text/css" href="/asset/css/global.css">
        <link rel="stylesheet" type="text/css" href="/asset/css/custom-theme/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="/asset/css/custom-theme/prettyPhoto.css">
        <script type='text/javascript' src='/asset/js/jquery.min.js'></script>
    </head>
    <body>
        <div id="container">
            <div id="header" class="hide">
                <a href="/"><h1>Trace Analyzer</h1></a>
                <div id="userinfo">
                <?php if ($this->user->logged_in()): ?>
                    <p>Welcome, <?php echo $this->session->userdata('fname') ?> | <a href="/logout/">Logout</a></p>
                <?php else: ?>
                    <p><a href="/login/">Login</a></p>
                <?php endif; ?>
                </div>
            </div>
            <div id="content">