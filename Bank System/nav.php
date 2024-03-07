<?php

echo'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="index.php">Bank System</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="all_customers.php">View All Customesrs Data </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="one_customer.php">View one customer </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="transfer_money.php">Transfer Money </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="trasfer_history.php">View Transfer data of specifict customer </a>
      </li>

    </ul>
  </div>
</div>
</nav>';
?>