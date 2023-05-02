<?php


if (!function_exists("wpspld_preloader_head")) {
    function wpspld_preloader_head()
    { ?>
        <style id="chgt-style">
            #chgt {
                display: block;
                position: fixed;
                z-index: 10000;
                width: 100%;
                height: 100%;
                visibility: visible;
                background: #000;
                opacity: 0.8;
                background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"%3E%3Cg fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.4"%3E%3Cpath opacity=".5" d="M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z"/%3E%3Cpath d="M6 5V0H5v5H0v1h5v94h1V6h94V5H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');
            }

            #chgt-wrapper {
                display: block;
            }

            #chgt svg {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                margin: auto;
                z-index: 100;
                opacity: 1;
            }

            #chgt svg circle {
                stroke: #4dd0e1;
            }

            #chgt .circle {
                transform-origin: center;
            }

            #chgt #arc1 {
                stroke-dasharray: 30;
                stroke-dashoffset: 18;
                animation: 10s -2s rota infinite linear;
            }

            #chgt #arc3 {
                stroke-dasharray: 400;
                stroke-dashoffset: 400;
                animation: 16s 1s rota infinite linear;
            }

            #chgt #arc4 {
                stroke-dasharray: 400;
                stroke-dashoffset: 400;
                animation: 6s 1s rota infinite linear reverse;
            }

            #chgt #arc5 {
                stroke-dasharray: 400;
                stroke-dashoffset: 400;
                animation: 4s 1s rota infinite linear;
            }

            #chgt #arc6 {
                stroke-dasharray: 400;
                stroke-dashoffset: 400;
                animation: 8s 1s rota infinite linear alternate;
            }

            #chgt #arc7 {
                stroke-dasharray: 400;
                stroke-dashoffset: 400;
                animation: 4s 1s rota infinite linear reverse;
            }

            #chgt text {
                fill: #ffffff;
                font: bold 24px sans-serif;
            }

            @keyframes rota {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }
        </style>

    <?php }
}
add_action('wp_head', 'wpspld_preloader_head');

function ajouter_element_dans_body($content)
{
    ?>
    <div id="chgt">
        <div id="chgt-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" width="300" height="300">
                <circle id="arc1" class="circle" cx="150" cy="150" r="120" opacity=".89" fill="none" stroke="#632b26" stroke-width="12" stroke-linecap="square" stroke-opacity=".99213" paint-order="fill markers stroke" />
                <circle id="arc2" class="circle" cx="150" cy="150" r="120" opacity=".49" fill="none" stroke="#632b26" stroke-width="8" stroke-linecap="square" stroke-opacity=".99213" paint-order="fill markers stroke" />
                <circle id="arc3" class="circle" cx="150" cy="150" r="100" opacity=".49" fill="none" stroke="#632b26" stroke-width="20" stroke-linecap="square" stroke-opacity=".99213" paint-order="fill markers stroke" />
                <circle id="arc4" class="circle" cx="150" cy="150" r="120" opacity=".49" fill="none" stroke="#632b26" stroke-width="30" stroke-linecap="square" stroke-opacity=".99213" paint-order="fill markers stroke" />
                <circle id="arc5" class="circle" cx="150" cy="150" r="100" opacity=".89" fill="none" stroke="#632b26" stroke-width="8" stroke-linecap="square" stroke-opacity=".99213" paint-order="fill markers stroke" />
                <circle id="arc6" class="circle" cx="150" cy="150" r="90" opacity=".49" fill="none" stroke="#632b26" stroke-width="16" stroke-linecap="square" stroke-opacity=".99213" paint-order="fill markers stroke" />
                <circle id="arc7" class="circle" cx="150" cy="150" r="90" opacity=".89" fill="none" stroke="#632b26" stroke-width="8" stroke-linecap="square" stroke-opacity=".99213" paint-order="fill markers stroke" />
                <circle id="arc8" class="circle" cx="150" cy="150" r="80" opacity=".79" fill="#4DD0E1" fill-opacity="0" stroke="#632b26" stroke-width="8" stroke-linecap="square" stroke-opacity=".99213" paint-order="fill markers stroke" />
                <--text id="text" x="126" y="125">
                    ITER
                </--text>
                <--text id="text" x="90" y="155">
                    ROBOTICS
                </--text>
                <--text id="text" x="126" y="185">
                    CLUB
                </--text>

            </svg>
        </div>
    </div>
    <?
}
add_action('wp_head', 'ajouter_element_dans_body');


// PRECHARGEMENT ANIMED
if (!function_exists("wpspld_preloader_script")) {
    function wpspld_preloader_script()
    {
    ?>
        <script id='wpspld__script'>

        </script>
<?php
    }
}
add_action('wp_footer', 'wpspld_preloader_script');
