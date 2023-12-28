<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon-32x32.png"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    /> -->
    <link rel="stylesheet" href="style.css" />
    <title>Frontend Mentor | Product preview card component</title>
    <style>


.darkcyan-color {
  color: hsl(158, 36%, 37%);
}

.darkcyan-bg-color {
  background-color: hsl(158, 36%, 37%);
}

.btn-hover:hover {
  background-color: hsl(156, 100%, 18%);
}

.bg-cream {
  background-color: hsl(30, 38%, 92%);
}

.verydark-blue {
  color: hsl(212, 21%, 14%);
}

.darkgrayish-blue {
  color: hsl(228, 12%, 48%);
}

.monospace {
  word-spacing: 3px;
}

.lspacing {
  letter-spacing: 3px;
}
.img-fluid:hover{
  width: 420px;
  border:10px solid hsl(158, 36%, 37%);
  opacity: 0.8;
}
    </style>
  </head>
  <body>
    <main class="" height="200px;">
      <section
      style="border-radius: 70%;border:1px solid hsl(158, 36%, 37%);"
        class="min-vh-80 d-flex justify-content-center align-items-center"
      >
        <figure
          class="card border-0 mx-3 bg-white darkgrayish-blue my-3 flex-lg-row col-lg-8 col-xl-8 col-xxl-6"
          style="width:900px;border-radius: 90%;border:1px solid hsl(158, 36%, 37%);background:hsl(158, 36%, 37%)"
        >
                <picture class="d-lg-none">
                <img
                    class="card-img-top img-fluid"
                    src="./images/item1.webp"
                    alt="Perfume Image"
                    style=" transition: width 2s;height: 480px;margin-top:20px;border-radius: 90%;border:1px solid hsl(158, 36%, 37%);background:hsl(158, 36%, 37%)"
                />
              </picture>

              <picture class="d-none col-lg-6 d-lg-flex">
                <img
                    class="img-fluid rounded-start"
                    src="./images/item1.webp"
                    alt="Perfume Image"
                    style=" transition: width 5s;height: 470px;margin-top:15px;border-radius: 90%;border:1px solid hsl(158, 36%, 37%);background:hsl(158, 36%, 37%)"
                />
              </picture>


              <div class="card-body col-lg-6 px-lg-5">
                <p class="card-subtitle text-uppercase mt-3 lspacing">PERFUME</p>
                <h1
                  class="card-title verydark-blue display-5 family-fraunces fw-bold mt-2 mb-3"
                >
                  Gabrielle
                </h1>
                <p class="card-text monospace lh-lg">
                  A floral, solar and voluptuous interpretation composed by Olivier
                  Polge, Perfumer-Creator for the House of CHANEL.
                </p>
                <div>
                  <p class="card-text d-flex align-items-center darkgrayish-blue">
                    <span
                      class="display-5 me-3 fw-bold family-fraunces darkcyan-color"
                      >$149.99</span
                    >
                    <s>$169.99</s>
                  </p>
                </div>
                <a
                  href="#"
                  type="button"
                  class="d-flex btn btn-hover align-items-center justify-content-center my-3 py-3 darkcyan-bg-color text-white"
                >
                  <svg
                    class="me-2"
                    width="15"
                    height="16"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M14.383 10.388a2.397 2.397 0 0 0-1.518-2.222l1.494-5.593a.8.8 0 0 0-.144-.695.8.8 0 0 0-.631-.28H2.637L2.373.591A.8.8 0 0 0 1.598 0H0v1.598h.983l1.982 7.4a.8.8 0 0 0 .799.59h8.222a.8.8 0 0 1 0 1.599H1.598a.8.8 0 1 0 0 1.598h.943a2.397 2.397 0 1 0 4.507 0h1.885a2.397 2.397 0 1 0 4.331-.376 2.397 2.397 0 0 0 1.12-2.021ZM11.26 7.99H4.395L3.068 3.196h9.477L11.26 7.991Zm-6.465 6.392a.8.8 0 1 1 0-1.598.8.8 0 0 1 0 1.598Zm6.393 0a.8.8 0 1 1 0-1.598.8.8 0 0 1 0 1.598Z"
                      fill="#FFF"
                    />
                  </svg>
                  Add to Cart
                </a>
              </div>
            </figure>
          </section>
    </main>

    <!-- Add this script at the end of the body or in the head section -->
<!-- Add this script at the end of the body or in the head section -->
<script>
  window.onload = function () {
    // Get the element you want to animate
    var card = document.querySelector('.card');

    // Add a CSS class to trigger the animation
    card.classList.add('animate__animated', 'animate__fadeIn');

    // Optional: Remove the animation class after the animation completes
    card.addEventListener('animationend', function () {
      card.classList.remove('animate__animated', 'animate__fadeIn');
    });
  };
</script>

<!-- Add this in the head section of your HTML -->



    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> -->
  </body>
</html>
