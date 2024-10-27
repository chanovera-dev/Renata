<?php

function renata_theme_forms() {
    ?>
    <style>
        /* etiquetas */
        p:has(label){margin-bottom:20px;}
            p:has(label) label{margin-bottom:5px;font-size:13px;color:var(--color-text);}

        /* inputs de entrada · nominal */
        input[type=text],
        input[type=email],
        input[type=tel],
        input[type=url],
        input[type=search],
        textarea{padding:10px;background-color:var(--bg-input);border:1px solid var(--border-input);border-radius:6px;font-family:'Roboto';font-size:16px;color:var(--color-input);width:100%;transition:border-color .3s ease;}

        input[type=text]:hover,
        input[type=email]:hover,
        input[type=tel]:hover,
        input[type=url]:hover,
        input[type=search]:hover,
        textarea:hover{border-color:var(--border-input-hover);}

        input[type=text]:focus,
        input[type=email]:focus,
        input[type=tel]:focus,
        input[type=url]:focus,
        input[type=search]:focus,
        textarea:focus{outline:none;border-color:var(--border-input-focus);}

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

        /* botón de búsqueda */
        .search-submit__button{position:absolute;top:3px;right:3px;display:grid;place-content:center;width:34px;height:34px;background-color:transparent;border:1px solid transparent;color:var(--color-placeholder);border-radius:4px;transition:color .3s ease;}
        .search-submit__button:hover{color:var(--color-input);}

        /* botón de envío */
        #contact .section .wpcf7-form .wpcf7-form-control.wpcf7-submit{margin-right:auto;font-family:'Roboto', sans-serif;font-size:16px;padding:6px 17px;background-color:var(--bg-button);color:#11151A;border:var(--border-button);border-radius:6px;transition:all .3s ease;background-image:linear-gradient(-60deg, transparent, transparent 40%, #ffffff44 40%, #ffffff44 60%, transparent 60%, transparent 100%);background-size:200% 100%;background-position-x:150%;background-repeat:no-repeat;}
            #contact .section .wpcf7-form .wpcf7-form-control.wpcf7-submit:hover{cursor:pointer;background-position-x:-150%;transition:background-position-x 1s;background-color:var(--bg-button-hover);}
            #contact .section .wpcf7-form .wpcf7-form-control.wpcf7-submit:focus{outline:none;}

        /* decorión del cajón de búsqueda al estar activo */        
        input[type=search]::-webkit-search-decoration,
        input[type=search]::-webkit-search-cancel-button,
        input[type=search]::-webkit-search-results-button,
        input[type=search]::-webkit-search-results-decoration{display:none;}

        /* Contact form 7 */
        .wpcf7 form .wpcf7-response-output{margin:1em 0 0;padding:0;border:none;}
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_forms');