<?php

session_start();

if (!isset($_SESSION["login"])) {
  header("location: login.php");
  exit;
}
require 'function.php';

require 'fragment/header.php';
?>

<h2 class="text-center">About</h2>

<section class="">
  <h2 class="mb-4">About SMKN 4 PAYAKUMBUH</h2>

  <div class="mb-4">By faizal 30 Agustus 2022</div>

  <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse sed aspernatur ullam aperiam suscipit illum magnam, odit, doloremque nisi reprehenderit voluptatum harum, nam id aliquam sunt. Quasi amet aliquid quae voluptatem quos, molestiae nulla natus? Debitis veritatis voluptate obcaecati, nobis at sint nemo veniam corporis dolore quae, iusto id expedita.</p>

  <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut quo aspernatur facere ex? Enim amet atque corrupti illum vero itaque.</p>

  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum consequuntur aliquam sunt quidem illo! Facilis voluptatibus, repellat illo tempora aliquid reprehenderit, harum consequatur explicabo corrupti necessitatibus repellendus debitis nisi dignissimos.</p>

</section>