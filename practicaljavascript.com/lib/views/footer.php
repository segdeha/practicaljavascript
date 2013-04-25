
        <footer>
            <nav>
                <ul>
                    <li><a href="/home"<?php if ('home' === $page) echo ' class="selected"'; ?>>Home</a></li>
                    <li><a href="/colophon"<?php if ('colophon' === $page) echo ' class="selected"'; ?>>Colophon</a></li>
                </ul>
            </nav>
            <p>&copy; <a href="http://andrew.hedges.name">Andrew Hedges</a> 2010</p>
        </footer>
        <script src="<?= CDN::url('/-/shjs/sh_main.min.js') ?>"></script>
        <script type="text/javascript">sh_highlightDocument('/-/shjs/lang/', '.min.js');</script>
<?php /*         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> */ ?>
        <script src="<?= CDN::url('/-/behaviors.js') ?>"></script>
<?php /*        <script src="<?= CDN::url('/-/wmd/wmd.js') ?>"></script> */ ?>
    </body>
</html>
