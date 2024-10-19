<?php

function renata_theme_forms() {
    ?>
    <style>
        /* inputs de entrada · nominal */
        input[type=text],
        input[type=email],
        input[type=tel],
        input[type=url],
        input[type=search],
        textarea{padding:10px;background-color:var(--bg-input);border:var(--border-input);border-radius:6px;font-size:16px;color:var(--color-text);transition:border-color .3s ease;}

        input[type=text]:hover,
        input[type=email]:hover,
        input[type=tel]:hover,
        input[type=url]:hover,
        input[type=search]:hover,
        textarea:hover{border-color:var(--border-input-hover);}

        /* inputs de entrada · placeholder */
        input[type=text]::placeholder,
            input[type=email]::placeholder,
            input[type=tel]::placeholder,
            input[type=url]::placeholder,
            input[type=search]::placeholder,
            textarea::placeholder{
                font-size:var(--wp--preset--font-size--medium);
                font-family:var(--wp--preset--font-family--roboto);
                color:var(--color-placeholder);
                transition:all .3s ease;
            }
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_forms');