<?php require ROOT . 'views/header.php'; ?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
  <div class="col-md-6 p-lg-5 mx-auto">
    <h1 class="p-5 fw-bold">Welcome to Zoo Park</h1>
    <h3 class="fw-normal text-muted mb-3">Here you can see all the animals</h3>
    <div class="d-flex gap-3 justify-content-center lead fw-normal">
      <a class="icon-link" href="<?= URL ?>/animals/showAll">
        See all animals
        <svg class="bi">
          <use xlink:href="#chevron-right"></use>
        </svg>
      </a>
    </div>
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<?php require ROOT . 'views/footer.php'; ?>