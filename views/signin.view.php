<?php $title = "SignIn"?>

<?php include "./components/header.php" ?>
  <section class="bg-gray-50 relative">
    <!-- import loading -->
    <?php include './views/loading.view.php'?>

    <div
      class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0"
    >
      <div
        class="relative w-full h-[690px] bg-white rounded-[20px] shadow-md shadow-gray-400 md:mt-0 sm:max-w-[1016px] xl:p-0 border-gray-700"
      >
        <!-- logo top -->
        <div
          class="mb-2 sm:flex md:block lg:hidden xl:hidden xxl:hidden w-full m-auto"
        >
          <div class="m-auto top-5 relative w-[150px] rounded-full">
            <div
              class="w-[150px] flex items-center justify-centerw-full h-full m-auto"
            >
              <img
                class="h-[15%] m-auto top-3 relative"
                src="./asset/login/logo-removebg-preview.png"
                alt=""
              />
            </div>
          </div>
        </div>

        <!-- logo left-->
        <div
          class="hidden lg:block 2xl:block absolute bg-[#FBBE27] w-[427px] h-[640px] left-[-10rem] sm:left-[-5rem] xl:left-[-10rem] xxl:left-[-10rem] rounded-[40px]"
          style="box-shadow: -20px 0px 50px #feffbb"
        >
          <div
            class="w-full h-full m-auto flex flex-rows justify-center items-center"
          >
            <img
              class="m-auto"
              src="./asset/login/logo-removebg-preview.png"
              alt=""
            />
          </div>
        </div>

        <!-- form -->
        <div
          class="p-6 space-y-4 md:space-y-6 sm:p-8 xl:pl-[20rem] xxl:pl-[20rem] lg:pl-[25rem]"
        >
          <h1
            class="mb-[40px] text-center text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black"
            style="font-family: Khmer OS Battambang"
          >
            សូមស្វា​គម​ន៏​ការ​ត្រ​លប់​មក​វិញ
          </h1>
          <form class="space-y-4 md:space-y-6" method="post">
            <!-- email -->
            <div class="w-full">
              <label
                for="email"
                class="block mb-2 text-sm font-medium text-dark"
                style="font-family: Khmer os siemreap"
                >អ៊ីមែល​</label
              >
              <input
                type="email"
                name="email"
                id="email"
                class="outline-none border-b-2 border-[#FBBE27] text-dark sm:text-sm focus:ring-[#FBBE27] focus:border-[#FBBE27] block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:border-[#FBBE27]"
                placeholder="houung@gmail.com"
                required=""
              />
            </div>

            <!-- password -->
            <div class="w-full">
              <label
                for="confirm-password"
                class="block mb-2 text-sm font-medium text-dark"
                style="font-family: Khmer os siemreap"
                >ពាក្យសម្ងាត់</label
              >
              <input
                type="password"
                name="password"
                id="password"
                placeholder="••••••••"
                class="outline-none border-b-2 border-[#FBBE27] text-dark sm:text-sm focus:ring-[#FBBE27] focus:border-[#FBBE27] block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:border-[#FBBE27]"
                required=""
              />
            </div>

            <!-- check -->
            <div class="flex items-center justify-between">
              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input
                    id="remember"
                    aria-describedby="remember"
                    type="checkbox"
                    class="w-4 h-4 cursor-pointer border border-gray-300 rounded focus:ring-3 focus:ring-primary-300 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                    style="accent-color: #fbbe27"
                  />
                </div>
                <div class="ml-3 text-sm">
                  <label for="remember" style="font-family: Khmer os siemreap"
                    >ចង់ចាំ​ ខ្ញុំ</label
                  >
                </div>
              </div>
              <a
                href="#"
                style="font-family: Khmer os siemreap"
                class="text-sm font-medium hover:underline"
                >ភ្លេច​លេខសំងាត់​?</a
              >
            </div>

            <!-- button sign in -->
            <button
              type="button"
              id="sign-in"
              style="font-family: Khmer os siemreap"
              class="w-full text-black border-2 border-[#FBBE27] focus:ring-2 focus:outline-none focus:ring-[#FBFB83] focus:text-[#FBBE27] transition font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            >
              ចូល
            </button>

            <!-- link to sign up -->
            <p
              class="text-sm font-light text-gray-500 dark:text-gray-400"
              style="font-family: Khmer os siemreap"
            >
              មិនទាន់មានគណនី?
              <a
                href="./signup"
                class="font-medium text-[#FBBE27] underline underline-cyan-400"
                style="text-decoration-color: #fbbe27"
                >បង្កើតគណនី</a
              >
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <script>
    const loadingSection = document.getElementById("loading");
    const signInButton = document.getElementById("sign-in");
    const password = document.getElementById("password");
    const email = document.getElementById("email");

    signInButton.addEventListener("click", function () {
      loadingSection.classList.remove("hidden");

      if (password.value.trim() == "123" && email.value.trim() == "admin@gmail.com") {
        alert("Login successful!");
        setTimeout(function () {
          loadingSection.classList.add("hidden");
          location.href = "./";
        }, 2000);
      } else {
        alert("Invalid password or email address");
        loadingSection.classList.remove("hidden");
        setTimeout(function () {
          loadingSection.classList.add("hidden");
        }, 200);
      }
    });
  </script>
<?php include "./components/close.php"; ?>
