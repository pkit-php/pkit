<?php

use Pkit\Utils\View;

$_ARGS = View::getArgs();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $_ARGS['title'] ?? $_ARGS['code'] ?> </title>
</head>

<body>
  <div class="center">
    <div class="icons">
      <?php if ($_ARGS['code'] == 503) : ?>
        <svg class="gear animate-loop" id="gear-1" width="128" height="126" viewBox="0 0 128 126" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M79.8781 0.985031C78.9005 8.8849 72.1644 15 64 15C55.8356 15 49.0995 8.8849 48.1219 0.985031C36.5907 3.92862 26.3119 10.0037 18.2449 18.251C24.5877 23.0497 26.5103 31.934 22.4308 39C18.3484 46.0708 9.68402 48.8469 2.35358 45.743C0.819969 51.2329 0 57.0207 0 63C0 68.589 0.716415 74.0107 2.06243 79.1782C9.44578 76.2032 18.06 79.1301 22.0182 86.2709C25.9739 93.407 23.8964 102.256 17.4707 106.944C25.6498 115.601 36.2186 121.976 48.1219 125.015C49.0995 117.115 55.8356 111 64 111C72.1644 111 78.9005 117.115 79.8781 125.015C91.4093 122.071 101.688 115.996 109.755 107.749C103.412 102.95 101.49 94.066 105.569 87C109.652 79.9292 118.316 77.1531 125.646 80.257C127.18 74.7671 128 68.9793 128 63C128 57.411 127.284 51.9893 125.938 46.8217C118.554 49.7968 109.94 46.8699 105.982 39.7291C102.026 32.593 104.104 23.7436 110.529 19.0563C102.35 10.3991 91.7814 4.02361 79.8781 0.985031ZM64 95C81.6731 95 96 80.6731 96 63C96 45.3269 81.6731 31 64 31C46.3269 31 32 45.3269 32 63C32 80.6731 46.3269 95 64 95Z" />
        </svg>
        <svg class="gear animate-loop" id="gear-2" width="96" height="94" viewBox="0 0 96 94" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M59.9086 3.13856e-07C59.1754 5.9249 54.1233 10.5112 48 10.5112C41.8767 10.5112 36.8246 5.9249 36.0914 0C27.443 2.20768 19.734 6.76401 13.6836 12.9495C18.4408 16.5485 19.8827 23.2117 16.8231 28.5112C13.7613 33.8144 7.26301 35.8964 1.76519 33.5685C0.614974 37.6859 0 42.0268 0 46.5112C0 50.703 0.537314 54.7693 1.54682 58.6449C7.08433 56.4136 13.545 58.6088 16.5137 63.9644C19.4804 69.3165 17.9223 75.9535 13.103 79.469C19.2373 85.9619 27.1639 90.7435 36.0914 93.0225C36.8246 87.0975 41.8767 82.5112 48 82.5112C54.1233 82.5112 59.1754 87.0975 59.9086 93.0225C68.557 90.8148 76.266 86.2585 82.3164 80.073C77.5592 76.4739 76.1172 69.8107 79.1769 64.5112C82.2387 59.2081 88.737 57.1261 94.2348 59.454C95.385 55.3365 96 50.9957 96 46.5112C96 42.3195 95.4627 38.2532 94.4532 34.3775C88.9157 36.6088 82.455 34.4137 79.4863 29.0581C76.5196 23.706 78.0776 17.0689 82.8969 13.5535C76.7627 7.06054 68.8361 2.27893 59.9086 3.13856e-07ZM48 70.5112C61.2548 70.5112 72 59.7661 72 46.5112C72 33.2564 61.2548 22.5112 48 22.5112C34.7452 22.5112 24 33.2564 24 46.5112C24 59.7661 34.7452 70.5112 48 70.5112Z" />
        </svg>
      <?php elseif ($_ARGS['code'] == 401) : ?>
        <svg class="levite animate-loop" width="128" height="128" viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M64 128C99.3462 128 128 99.3462 128 64C128 28.6538 99.3462 0 64 0C28.6538 0 0 28.6538 0 64C0 99.3462 28.6538 128 64 128ZM25.0361 92.0385C19.3499 84.1506 16 74.4665 16 64C16 37.4903 37.4903 16 64 16C74.4665 16 84.1506 19.3499 92.0385 25.0361L25.0361 92.0385ZM36.4151 103.287C44.2194 108.777 53.7333 112 64 112C90.5097 112 112 90.5097 112 64C112 53.7333 108.777 44.2194 103.287 36.4151L36.4151 103.287Z" fill="#C4C4C4" />
        </svg>
      <?php elseif ($_ARGS['code'] == 403) : ?>
        <svg class="levite animate-loop" width="96" height="128" viewBox="0 0 96 128" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M92.3462 29.6312C94.7584 35.4548 96 41.6965 96 48V64V128H0V64V48C0 41.6965 1.24156 35.4548 3.65378 29.6312C6.06601 23.8076 9.60165 18.5161 14.0589 14.0589C18.5161 9.60166 23.8076 6.06601 29.6312 3.65379C35.4548 1.24155 41.6965 0 48 0C54.3035 0 60.5452 1.24155 66.3688 3.65378C72.1924 6.06601 77.4839 9.60166 81.9411 14.0589C86.3983 18.5161 89.934 23.8076 92.3462 29.6312ZM84 64V48C84 43.2724 83.0688 38.5911 81.2597 34.2234C79.4505 29.8557 76.7988 25.8871 73.4558 22.5442C70.1129 19.2012 66.1443 16.5495 61.7766 14.7403C57.4089 12.9312 52.7276 12 48 12C43.2724 12 38.5911 12.9312 34.2234 14.7403C29.8557 16.5495 25.8871 19.2012 22.5442 22.5442C19.2012 25.8871 16.5495 29.8557 14.7403 34.2234C12.9312 38.5911 12 43.2724 12 48V64H84Z" fill="#C4C4C4" />
        </svg>
      <?php elseif ($_ARGS['code'] == 404) : ?>
        <svg class="levite animate-loop" width="96" height="159" viewBox="0 0 96 159" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M74.6674 87.9105C70.1579 90.9237 65.1958 93.1342 60 94.4758V120H36V72H48C52.7467 72 57.3869 70.5924 61.3337 67.9553C65.2805 65.3181 68.3566 61.5698 70.1731 57.1844C71.9896 52.799 72.4649 47.9734 71.5388 43.3178C70.6128 38.6623 68.327 34.3859 64.9706 31.0294C61.6141 27.673 57.3377 25.3872 52.6822 24.4611C48.0266 23.5351 43.201 24.0104 38.8156 25.8269C34.4302 27.6434 30.6819 30.7195 28.0447 34.6663C25.4076 38.6131 24 43.2532 24 48H0C0 38.5065 2.81516 29.2262 8.08946 21.3326C13.3638 13.439 20.8603 7.28676 29.6312 3.65377C38.4021 0.0207713 48.0533 -0.92979 57.3643 0.922291C66.6754 2.7744 75.2282 7.34594 81.9411 14.0589C88.654 20.7718 93.2256 29.3246 95.0777 38.6357C96.9298 47.9467 95.9792 57.598 92.3462 66.3688C88.7132 75.1396 82.5609 82.6362 74.6674 87.9105ZM60 159V135H36V159H60Z" />
        </svg>
      <?php elseif ($_ARGS['code'] >= 500) : ?>
        <svg class="levite animate-loop" width="24" height="159" viewBox="0 0 24 159" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0H0V120H24V0ZM24 135H0V159H24V135Z" />
        </svg>
      <?php elseif ($_ARGS['code'] >= 400) : ?>
        <svg class="levite animate-loop" width="128" height="128" viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M96 32C96 49.6731 81.6731 64 64 64C46.3269 64 32 49.6731 32 32C32 14.3269 46.3269 0 64 0C81.6731 0 96 14.3269 96 32ZM128 128C128 119.595 126.345 111.273 123.128 103.508C119.912 95.7434 115.198 88.6881 109.255 82.7452C103.312 76.8022 96.2566 72.088 88.4917 68.8717C80.7269 65.6554 72.4046 64 64 64C55.5954 64 47.2731 65.6554 39.5083 68.8717C31.7434 72.088 24.6881 76.8022 18.7452 82.7452C12.8022 88.6881 8.08801 95.7434 4.87171 103.508C1.65541 111.273 0 119.595 0 128H64H128ZM111 11H104V46H111V11ZM111 50.375H104V57.375H111V50.375Z" fill="#C4C4C4" />
        </svg>
      <?php elseif ($_ARGS['code'] >= 300) : ?>
        <svg class="levite animate-loop" width="136" height="165" viewBox="0 0 136 165" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M8 37.2548L0 45.2548L0.0294495 45.2843L0 45.3137L45.2549 90.5685L56.5685 79.2548L30.3137 53H72C84.7304 53 96.9394 58.0571 105.941 67.0589C114.943 76.0606 120 88.2696 120 101C120 113.73 114.943 125.939 105.941 134.941C96.9395 143.943 84.7305 149 72.0001 149L72.0001 165C88.9739 165 105.253 158.257 117.255 146.255C129.257 134.252 136 117.974 136 101C136 84.0261 129.257 67.7475 117.255 55.7451C105.253 43.7428 88.9738 37 72 37H30.8823L56.5685 11.3137L45.2548 0L8.25482 37H8V37.2548ZM8 149H72V165H8V149Z" fill="#C4C4C4" />
        </svg>
      <?php endif ?>
    </div>
    <p><strong style="color: var(--color);"><?= $_ARGS['code'] ?? "'code'" ?></strong> - <?= $_ARGS['message'] ?? "'message'" ?></p>
  </div>

  <style>
    :root {
      --color: <?= $_ARGS['color'] ?? '#f33' ?>;
      --time: 4s;
    }

    body {
      margin: 0;
      padding: 0;
      background-color: <?= $_ARGS['back_color'] ?? '#fff' ?>;
      color: <?= $_ARGS['font_color'] ?? '#000' ?>
    }

    p {
      max-width: 400px;
      text-align: center;
    }

    svg path {
      fill: var(--color);
    }

    * {
      font-family: 'Roboto', sans-serif;
      font-size: large;
    }

    .center {
      width: 100%;
      height: 100vh;
    }

    .center,
    .icons {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .icons {
      width: 190px;
      height: 190px;
      position: relative;

    }

    .animate-loop {
      animation-duration: var(--time);
      animation-iteration-count: infinite;
    }

    <?php if ($_ARGS['code'] == 503) : ?>

    /* 503 */
    @keyframes rotate-r {
      from {
        transform: rotateZ(0deg);
      }

      to {
        transform: rotateZ(360deg);
      }
    }

    @keyframes rotate-break {
      0% {
        transform: rotateZ(0deg);
      }

      25% {
        transform: rotateZ(-180deg);
      }

      50% {
        transform: rotateZ(-180deg);
      }

      75% {
        transform: rotateZ(-360deg);
      }

      100% {
        transform: rotateZ(-360deg);
      }
    }


    .gear {
      position: absolute;
      animation-timing-function: linear;
    }

    #gear-1 {
      bottom: 0px;
      left: 0px;
      animation-name: rotate-r;
    }

    #gear-2 {
      right: 0px;
      top: 0px;
      animation-duration: calc(var(--time) * 2);
      animation-name: rotate-break;
    }

    <?php else : ?>

    /* 5** */
    @keyframes levite {
      from {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-15px);
      }

      to {
        transform: translateY(0px);
      }
    }

    .levite {
      animation-duration: 4s;
      animation-timing-function: ease-in-out;
      animation-name: levite;
    }

    <?php endif ?>
  </style>
</body>

</html>