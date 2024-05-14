<div class="mt-3 max-w-screen-xl flex items-center justify-between mx-auto py-1">
    <div class="relative h-[577.5px] w-[300px] m-auto">
        <!-- Image Container -->
        <div class="duration-700 ease-in-out" id="carousel">
            <!-- Item 1 -->
            <img id="Item1" src="./asset/slide/photo_1_2024-05-10_14-25-13.jpg" class="transition-all ease-in-out absolute left-0 sm:left-[-32rem] lg:left-[-32rem] h-[577.5px] mt-4 blur-[7px]" alt="...">

            <!-- Item 2 -->
            <img id="Item2" src="./asset/slide/photo_2_2024-05-10_14-25-13.jpg" class="transition-all ease-in-out absolute left-[-3.7rem] sm:left-[-17rem] lg:left-[-17rem] h-[577.5px] mt-4 blur-[7px]" alt="...">

            <!-- Item 3 -->
            <img id="Item3" src="./asset/slide/photo_3_2024-05-10_14-25-13.jpg" class="transition-all ease-in-out absolute z-40 left-[0rem] h-[587.5px]" alt="...">

            <!-- Item 4 -->
            <img id="Item4" src="./asset/slide/photo_4_2024-05-10_14-25-13.jpg" class="transition-all ease-in-out absolute z-30 left-[2.7rem] sm:left-[16.8rem] lg:left-[16.8rem] h-[577.5px] mt-4 blur-[7px]" alt="...">

            <!-- Item 5 -->
            <img id="Item5" src="./asset/slide/photo_5_2024-05-10_14-25-13.jpg" class="transition-all ease-in-out absolute sm:left-[32rem] left-0 lg:left-[32rem] h-[577.5px] mt-4 blur-[7px]" alt="...">
        </div>

        <!-- Slider indicators -->
        <div class="absolute z-50 flex bottom-5 left-[6rem] space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full bg-[#E0E0E0]" data-carousel-slide-to="0" onclick="updateURLs(0)"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-[#E0E0E0]" data-carousel-slide-to="1" onclick="updateURLs(1)"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-[#fafb83]" data-carousel-slide-to="2" onclick="updateURLs(2)"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-[#E0E0E0]" data-carousel-slide-to="3" onclick="updateURLs(3)"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-[#E0E0E0]" data-carousel-slide-to="4" onclick="updateURLs(4)"></button>
        </div>
    </div>
</div>


<script>
    var currentSlideIndex = 0;
    var totalSlides = 5;


    function updateURLs(slideIndex) {
        // Define an array of image elements
        var imageElements = [
            document.getElementById("Item1"),
            document.getElementById("Item2"),
            document.getElementById("Item3"),
            document.getElementById("Item4"),
            document.getElementById("Item5")
        ];

        // Get the current source of Item3
        var currentSrc = document.getElementById("Item3").src;

        // Update the src of Item3 to the src of the clicked image
        document.getElementById("Item3").src = imageElements[slideIndex].src;

        // Update the src of the clicked image to the old src of Item3
        imageElements[slideIndex].src = currentSrc;

        // Update the current slide index
        currentSlideIndex = slideIndex;

        // update color buttons
        updateButtonColors(slideIndex);
    }

    function AutoSlide(){
        setTimeout(() =>{
            // Calculate the next slide index
            var nextSlideIndex = (currentSlideIndex + 1) % totalSlides;
            // Update the URLs
            updateURLs(nextSlideIndex);

            // update color buttons
            updateButtonColors(nextSlideIndex);

            // Recursively call AutoSlide to continue the slideshow
            AutoSlide();
        }, 10000);
    }

    function updateButtonColors(slideIndex) {
        var buttons = document.querySelectorAll('[data-carousel-slide-to]');
        buttons.forEach(function(button, index) {
            if (index === slideIndex) {
                button.classList.add('bg-[#fafb83]');
                button.classList.remove('bg-[#E0E0E0]');
            } else {
                button.classList.add('bg-[#E0E0E0]');
                button.classList.remove('bg-[#fafb83]');
            }
        });
    }

    // Start the auto-slide functionality
    AutoSlide();
</script>


