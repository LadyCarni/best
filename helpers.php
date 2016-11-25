<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehikl Best</title>
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
    <script src="public/js/app.js"></script>
</head>
<body>

    <div class="container">
        <?php include("public/partials/sidebar.php"); ?>

        <div class="body-container">
            <div class="row">
                <div class="twelve-columns">
                    <h1>Helper Classes</h1>
                </div>
            </div>

            <div class="example">
                <div class="row">
                    <div class="twelve-columns">
                        <h2>Basic</h2>
                    </div>
                </div>
                <div class="example-container">
                    <code>.container</code>

                    <div class="example-row">
                        <code>.row</code>

                        <div class="row">
                            <div class="example-column six-columns">
                                <code>.six-columns</code>
                            </div>

                            <div class="example-column six-columns">
                                <code>.six-columns</code>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="twelve-columns">
                        <h2>Complex Rows</h2>
                    </div>
                </div>
                <div class="example-container">
                    <code>.container</code>

                    <div class="example-row">
                        <code>.row</code>

                        <div class="row">
                            <div class="example-column one-columns">
                                <code>(1)</code>
                            </div>
                            <div class="example-column eleven-columns">
                                <code>.eleven-columns</code>
                            </div>
                        </div>

                        <div class="row">
                            <div class="example-column two-columns">
                                <code>(2)</code>
                            </div>
                            <div class="example-column ten-columns">
                                <code>.ten-columns</code>
                            </div>
                        </div>

                        <div class="row">
                            <div class="example-column three-columns">
                                <code>.three-columns</code>
                            </div>
                            <div class="example-column nine-columns">
                                <code>.nine-columns</code>
                            </div>
                        </div>

                        <div class="row">
                            <div class="example-column four-columns">
                                <code>.four-columns</code>
                            </div>
                            <div class="example-column eight-columns">
                                <code>.eight-columns</code>
                            </div>
                        </div>

                        <div class="row">
                            <div class="example-column five-columns">
                                <code>.five-columns</code>
                            </div>
                            <div class="example-column seven-columns">
                                <code>.seven-columns</code>
                            </div>
                        </div>

                        <div class="row">
                            <div class="example-column six-columns">
                                <code>.six-columns</code>
                            </div>
                            <div class="example-column six-columns">
                                <code>.six-columns</code>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>