<?php $title = "SignUp"?>
<?php include "./components/header.php"?>
  <section class="bg-gray-50 relative">
    <!-- import loading -->

    <div
      class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0"
    >
      <div
        class="relative w-full bg-white rounded-[20px] shadow-md shadow-gray-400 md:mt-0 sm:max-w-[1016px] xl:p-0 border-gray-700"
      >
        <!-- logo top -->
        <div
          class="mb-2 sm:flex md:block lg:hidden xl:hidden xxl:hidden w-full m-auto"
        >
          <div class="m-auto top-5 relative w-[150px] rounded-full">
            <div class="w-[150px] flex items-center justify-centerw-full h-full m-auto">
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
            សូមស្វាគមន៍មកកាន់ទំព័រសមាជិកថ្មី
          </h1>
          <form class="space-y-4 md:space-y-6" action="#">
            <div class="flex space-x-4">
              <!-- first name -->
              <div class="w-full">
                <label
                  for="firstname"
                  class="block mb-2 text-sm font-medium text-dark"
                  style="font-family: Khmer os siemreap"
                  >ឈ្មោះដំបូង</label
                >
                <input
                  type="text"
                  name="firstname"
                  id="firstname"
                  class="outline-none border-b-2 border-[#FBBE27] text-dark sm:text-sm focus:ring-[#FBBE27] focus:border-[#FBBE27] block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:border-[#FBBE27]"
                  placeholder="ហ័ង​ ហ័ង"
                  required=""
                />
              </div>

              <!-- last name -->
              <div class="w-full">
                <label
                  for="lastname"
                  class="block mb-2 text-sm font-medium text-dark"
                  style="font-family: Khmer os siemreap"
                  >នាមត្រកូល</label
                >
                <input
                  type="text"
                  name="lastname"
                  id="lastname"
                  class="outline-none border-b-2 border-[#FBBE27] text-dark sm:text-sm focus:ring-[#FBBE27] focus:border-[#FBBE27] block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:border-[#FBBE27]"
                  placeholder="មាត់ដាច"
                  required=""
                />
              </div>
            </div>

            <!-- email -->
            <div class="w-full">
              <label
                for="email"
                class="block mb-2 text-sm font-medium text-dark"
                style="font-family: Khmer os siemreap"
                >អ៊ីមែល​
              </label>
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
            <div class="flex space-x-4">
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

              <!-- confirm password -->
              <div class="w-full">
                <label
                  for="confirm-password"
                  class="block mb-2 text-sm font-medium text-dark"
                  style="font-family: Khmer os siemreap"
                  >បញ្ជាក់ពាក្យសម្ងាត់</label
                >
                <input
                  type="password"
                  name="confirm-password"
                  id="confirm-password"
                  placeholder="••••••••"
                  class="outline-none border-b-2 border-[#FBBE27] text-dark sm:text-sm focus:ring-[#FBBE27] focus:border-[#FBBE27] block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:border-[#FBBE27]"
                  required=""
                />
              </div>
            </div>

            <!-- phone -->
            <div class="w-full">
              <label
                for="phone"
                class="block mb-2 text-sm font-medium text-dark"
                style="font-family: Khmer os siemreap"
                >លេខទូរសព្ទ</label
              >
              <input
                type="text"
                name="phone"
                id="phone"
                class="outline-none border-b-2 border-[#FBBE27] text-dark sm:text-sm focus:ring-[#FBBE27] focus:border-[#FBBE27] block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:border-[#FBBE27]"
                placeholder="096********"
                required=""
              />
            </div>

            <!-- address -->
            <div class="w-full">
              <label
                for="address"
                class="block mb-2 text-sm font-medium text-dark"
                style="font-family: Khmer os siemreap"
                >អាសយដ្ឋាន</label
              >
              <input
                type="text"
                name="address"
                id="address"
                class="outline-none border-b-2 border-[#FBBE27] text-dark sm:text-sm focus:ring-[#FBBE27] focus:border-[#FBBE27] block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:border-[#FBBE27]"
                placeholder="Street 40, KPS, KDMV"
                required=""
              />
            </div>

            <!-- button sign up -->
            <button
              type="submit"
              style="font-family: Khmer os siemreap"
              class="font-bold w-full text-black border-2 border-[#FBBE27] focus:ring-2 focus:outline-none focus:ring-[#FBFB83] focus:text-[#FBBE27] transition font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            >
              ចុះឈ្មោះចូល
            </button>

            <!-- link to login -->
            <p
              class="text-sm font-light text-gray-500 dark:text-gray-400"
              style="font-family: Khmer os siemreap"
            >
              មានគណនីរួចហើយ
              <a
                href="./signin"
                class="font-medium text-[#FBBE27] underline underline-cyan-400"
                style="text-decoration-color: #fbbe27"
                >ចូល</a
              >
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>
<?php include "./components/close.php"?>
