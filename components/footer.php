<footer>
    <div class="flex flex-wrap md:flex-nowrap px-4 py-2 justify-between items-center h-20 bg-gray-200">
        <a href="#" class="hover:underline"> IIIT-D</a>
        <a href="#" class="hover:underline"> Health Portal at IIIT-D</a>
        <a href="#" class="hover:underline"> Raghava's Lab</a>
    </div>
</footer>
<script >


const btn = document.querySelector("button.mobile-nav-btn");
const menu = document.querySelector(".mobile-nav");


btn.addEventListener("click", () => {
  menu.classList.toggle("hidden");
  console.log("clicked");
});
</script>