            </div>
            <footer id="footer">
                <p id="version">v<?php echo config_item('version').' | Generated in '.$this->benchmark->elapsed_time().' seconds'; ?></p>
                <p id="legal">Apple Confidential</p>
                <?php
                    if (isset($scripts)) {
                        foreach ($scripts as $script) {
                            echo "<script type='text/javascript' src='{$script}'></script>";
                        }
                    }
                    if (isset($js)) {
                        echo "<script type='text/javascript'>{$js}</script>";
                    }
                ?>
            </footer>
        </div>
    </body>
</html>
