<style>
  .loading-img {
    filter: drop-shadow(0 0 20px rgba(251, 191, 39, 0.5));
    animation: loading 1s infinite alternate;
  }

  @keyframes loading {
    0% {
      opacity: 0.5;
      transform: scale(0.9);
    }

    100% {
      opacity: 1;
      transform: scale(1.1);
    }
  }
</style>
<section id="loading" class="hidden z-50 absolute h-[100vh] w-full flex flex-col justify-center items-center" style="
    background-color: rgba(128, 128, 128, 0.5);
    backdrop-filter: blur(5px);
  ">
  <div class="w-[150px]">
    <img class="m-auto loading-img" src="./asset/login/logo-removebg-preview.png" alt="" />
  </div>
</section>
